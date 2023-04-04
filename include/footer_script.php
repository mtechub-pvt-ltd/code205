<style>
    .btn-dark {
        color: #263897;
        background-color: #263897;

    }
</style><a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-dark" style="color:#263897;" id="back-to-top"><i class="mdi mdi-chevron-up"></i></a>

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Portfolio filter -->
<script src="js/filter.init.js"></script>
<!-- Light-box -->
<script src="js/mklb.js"></script>
<!-- swiper -->
<script src="js/swiper-bundle.min.js"></script>
<script src="js/swiper.js"></script>

<!-- counter -->
<script src="js/counter.init.js"></script>
<script src="js/app.js"></script>
<script src="https://smtpjs.com/v3/smtp.js">

</script>
<script>
    url = new URL(window.location.href);

    if (url.searchParams.get('action')) {

        swal({
            title: "Sucessful",
            text: "Query Submitted , you will be contacted in 24 Hours",
            icon: "success",
            buttons:

                'OK',
        }).then(function(isConfirm) {
            if (isConfirm) {
                window.location.href = '/'
            }
        });





    }
</script>