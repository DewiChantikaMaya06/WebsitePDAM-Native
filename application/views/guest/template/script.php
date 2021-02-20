<!-- jquery Min JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="<?= base_url('assets/') ?>guest/js/easing.js"></script>
<!-- Color JS -->
<script src="<?= base_url('assets/') ?>guest/js/colors.js"></script>
<!-- Popper JS -->
<script src="<?= base_url('assets/') ?>guest/js/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="<?= base_url('assets/') ?>guest/js/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="<?= base_url('assets/') ?>guest/js/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="<?= base_url('assets/') ?>guest/js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="<?= base_url('assets/') ?>guest/js/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url('assets/') ?>guest/js/owl-carousel.js"></script>
<!-- counterup JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="<?= base_url('assets/') ?>guest/js/steller.js"></script>
<!-- Wow JS -->
<script src="<?= base_url('assets/') ?>guest/js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="<?= base_url('assets/') ?>guest/js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('assets/') ?>guest/js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="<?= base_url('assets/') ?>guest/js/main.js"></script>
<script type="text/javascript" src="https://app.diagrams.net/js/viewer-static.min.js"></script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>