<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hoang Hon &mdash; Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/layouts/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/layouts/css/bootstrap.min.css">
    <link rel="stylesheet" href="/layouts/css/magnific-popup.css">
    <link rel="stylesheet" href="/layouts/css/jquery-ui.css">
    <link rel="stylesheet" href="/layouts/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/layouts/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/layouts/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/layouts/css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



    <link rel="stylesheet" href="/layouts/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/layouts/css/aos.css">

    <link rel="stylesheet" href="/layouts/css/style.css">

</head>
<body>

<div class="site-wrap">
    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover overlay" style="background-image: url(/layouts/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">

                        <h1 class="mb-2">Welcome To Suites</h1>
                        <h2 class="caption">Hotel &amp; Resort</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(/layouts/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">
                        <h1 class="mb-2">Unique Experience</h1>
                        <h2 class="caption">Enjoy With Us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url(/layouts/images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 text-center" data-aos="fade">
                        <h1 class="mb-2">Relaxing Room</h1>
                        <h2 class="caption">Your Room, Your Stay</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/layouts/js/jquery-3.3.1.min.js"></script>
<script src="/layouts/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/layouts/js/jquery-ui.js"></script>
<script src="/layouts/js/popper.min.js"></script>
<script src="/layouts/js/bootstrap.min.js"></script>
<script src="/layouts/js/owl.carousel.min.js"></script>
<script src="/layouts/js/jquery.stellar.min.js"></script>
<script src="/layouts/js/jquery.countdown.min.js"></script>
<script src="/layouts/js/jquery.magnific-popup.min.js"></script>
<script src="/layouts/js/bootstrap-datepicker.min.js"></script>
<script src="/layouts/js/aos.js"></script>


<script src="/layouts/js/mediaelement-and-player.min.js"></script>

<script src="/layouts/js/main.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function () {
                    var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });
</script>

</body>
</html>