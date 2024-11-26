<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>R.A.R Enterprise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
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
            <h1 class="display-2 text-white mb-3 animated slideInDown">Gallery</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            
            <div class="row g-4">
                @foreach(@$gallery as $value)
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::to('storage/app/public/gallery')}}/{{@$value->image}}" style="height:350px" alt="">
                        </div>
                    </div>
                </div>
                @endforeach

                

            </div>


        </div>
    </div>
    <!-- Team End -->
        

   




    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327.40591503774766!2d88.49654974668205!3d22.710481455448754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8a3971b38e56f%3A0x599990fcd8e79cf9!2sThe%20Central%20Modern%20School!5e0!3m2!1sen!2sin!4v1714593654116!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




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


</body>

</html>