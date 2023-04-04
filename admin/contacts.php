<?php 
session_start();
include('include/db.php');

if(isset($_SESSION['email'])) {
    // echo 'data ';
}
else {
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<?php
include('include/scripts.php');
?>

<body class="page-sidebar-collapsed">
    <div class="page-container">
        <?php
include('include/sidebar.php');
?>

        <div class="page-content">
            <?php
include('include/header.php');
?>

            <div class="main-wrapper">


                <div class="row card ">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                             
                                <div class="d-flex justify-content-between">

                                    <h5 class="card-title ">Contacts</h5>

                                    <!-- <h5 class="card-title btn btn-custom" onClick="addData();">+ contacts</h5> -->

                                </div>
                                <table class="table text-center" id="load_data">
                                    
                                       


                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Modal -->
            <div class="modal fade " id="mydataAdd" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark ">
                        <div class="modal-header">
                  
                            <a onClick="hideAddData()" class="btn-sm text-white" style="cursor:pointer;"><i data-feather="x"></i></a>

                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="contacts/add.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control  text-dark" name="title"
                                        placeholder="Enter Title" required>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                    <div class="col">
                                    <label class="text-white mb-3 mt-2">Choose Background Image
                                            </label>
                                    </div>
                                    <div class="col">
                                    <input type="file" class="form-control  text-dark" name="image"
                                     required>
                                    </div>
                                    </div>
                                
                                    
                                </div>
                                <div class="form-group mt-4 d-flex justify-content-between">
                                    <label class="text-white">Background Color
                                            </label>
                                    <input type="color"  name="background_color"
                                     required>
                                </div>


                                <button type="submit" name="add_subscription_type"
                                    class="btn btn-primary col-12 mt-5 mb-5">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- edit Modal -->
            <div class="modal fade  " id="mydataView" tabindex="-1" role="dialog" aria-labelledby="mydataView"
                aria-hidden="true">
                <div class="modal-dialog bg-dark" role="document">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title text-white" id="mydataViewTitle">Update Subscription Type </h5>
                            <a onClick="hideData()" class="btn-sm text-white" style="cursor:pointer;"><i data-feather="x"></i></a>

                            </button>
                        </div>
                        <div class="modal-body" id="mydataViewBody">

                        </div>

                    </div>
                </div>
            </div>
            <?php
include('include/footer.php');
?>

        </div>
    </div>
    <?php
include('include/footer_activity.php');
?>

    <?php
include('include/footer_script.php');
?>
    <script type="text/javascript">
    // x ='   <div style="" class=" text-center p-5"><div class="spinner-border text-white offset-md-3 m-5  text-center" style="border-color:red;" role="status"><span class="sr-only">Loading...</span></div></div>';
    x ='   <div style="" class=" text-center p-5 text-white spinner-border "></div>';
    $(document).ready(function() {
        loadData();


        var url_string = window.location.href;
        var url = new URL(url_string);
        var c = url.searchParams.get("action");


        if (c == 'dataInserted') {
            viewAlert('Successful', 'Data inserted', 'success', url)
        } else if (c == 'dataDeleted') {
            viewAlert('Successful', 'Data Deleted', 'success', url)
        } else if (c == 'dataUpdated') {
            viewAlert('Successful', 'Data Updated', 'success', url)
        } else if (c == 'error') {
            viewAlert('Error', 'There is technical problem with your request', 'warning', url)

        }


    });
    // load data 
    function loadData() {

        $('#load_data').html(x)
        setTimeout(function () {
            $("#load_data").load("contacts/load.php");

        },1000)
    }
    // view laett
    function viewAlert(head, title, icon, url) {
        swal({
                title: head,
                text: title,
                icon: icon,
            })
            .then(() => {
                loadData()
            });
    }
    // View data
    function addData() {
        $('#mydataAdd').modal('show')
    }

    function hideAddData() {
        $('#mydataAdd').modal('hide')
    }

    // view data end 
    // eidt data
    function viewData(id) {
        // alert(id);

        $('#mydataViewBody').html(x)
        // $('#mydataViewTitle').html(id)
        $('#mydataView').modal('show')
        $.get("contacts/view.php?id=" + id, function(data, status) {
            // alert("Data: " + data + "\nStatus: " + status);
            $('#mydataViewBody').html(data)
        });


    }

    function hideData() {
        // alert(id);
        $('#mydataView').modal('hide')


    }

    // eidt data end 
    </script>





</body>

</html>