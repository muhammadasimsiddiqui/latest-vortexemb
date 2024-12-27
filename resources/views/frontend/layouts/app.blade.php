<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
  <meta name="vortexemb" content="vortexemb.com" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') - Vortexemb</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="frontend/assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="frontend/assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="frontend/assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="frontend/assets/css/glightbox.min.css"/>
    <link rel="stylesheet" href="frontend/assets/css/animate.css"/>
    <link rel="stylesheet" href="frontend/assets/css/lindy-uikit.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body style="background: #fdfefe">

    <!-- ========================= header start ========================= -->
    @include('frontend.partials.header')
    <!-- ========================= header end ========================= -->

    <!-- ========================= page start ========================= -->
    @yield('content')
    <!-- ========================= page end ========================= -->


    <!-- ========================= footer start ========================= -->
    @include('frontend.partials.footer')    
    <!-- ========================= footer end ========================= -->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= JS here ========================= -->
    <script src="frontend/assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="frontend/assets/js/tiny-slider.js"></script>
    <script src="frontend/assets/js/count-up.min.js"></script>
    <script src="frontend/assets/js/imagesloaded.min.js"></script>
    <script src="frontend/assets/js/isotope.min.js"></script>
    <script src="frontend/assets/js/glightbox.min.js"></script>
    <script src="frontend/assets/js/wow.min.js"></script>
    <script src="frontend/assets/js/main.js"></script>
  </body>
</html>