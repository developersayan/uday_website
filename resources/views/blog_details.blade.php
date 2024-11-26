\<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Poriborton - The Change</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta property="og:title" content="Blog Details | {{$data->title}}">
    <!-- Favicon -->
    @include('includes.front_end_css')
    <style type="text/css">
        
    </style>

</head>

<body>



    <!-- Navbar Start -->
    @include('includes.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Event Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



<!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            
            <div class="row g-4">
                
                <div class="col-lg-12 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::to('storage/app/public/blog')}}/{{@$data->image}}" style="height:auto" alt="">
                        </div>
                        <div class="sharethis-inline-share-buttons mt-4" style="margin-bottom: 25px;"></div>
                        <div class="text-center p-4" style="min-height:250px;">
                            <h5 class="mb-1">{{@$data->title}}</h5>
                            <p >{{@$data->description}}</p>
                        </div>
                    </div>
                </div>
                

                

            </div>


        </div>
    </div>
    <!-- Team End -->
        

   




    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58889.37393295398!2d88.4452560830763!3d22.706455475280908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f2fae5d7d35%3A0x28abe80e9f29b3df!2sPoriborton%20Rehab%20Centre!5e0!3m2!1sen!2sin!4v1713509432021!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




    <!-- Footer Start -->
    @include('includes.footer_front')

    <!-- Footer End -->


    @include('includes.front_end_script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
        (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1.5,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 4,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

</script>


<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=64b227d80587ea0012137dab&product=inline-share-buttons&source=platform" async="async"></script>

</body>

</html>