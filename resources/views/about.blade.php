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
            <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



        

     <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="{{ URL::to('public/about1.jpg')}}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ URL::to('public/maa.jpg')}}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ URL::to('public/about3.jpg')}}">
                        </div>
                        <div class="col-6">
                            <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">17</h1>
                                <small class="fs-5 text-white">Years Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Bringing Your Vision to Life: The Art of Interior Design</h1>
                    <p class="mb-4">At Santoshi Maa Enterprise, we specialize in creating stylish and functional interiors tailored to your needs. Our services include designing and installing modular kitchens that combine efficiency and elegance. We also offer expert solutions in aluminium sliding doors, PVC doors and windows, enhancing the aesthetics and energy efficiency of your space. Our expertise extends to false ceiling installations that add a touch of sophistication to any room. With our professional painting services, we bring color and vibrancy to your surroundings, transforming your home into a sanctuary of comfort and beauty.</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Projects Done</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">80</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Happy Client</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">75</h1>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


<div class="gtco-testimonials" >
<div class="container">
            <div class="row mt-5">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Client Feedback</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                    </div>
                </div>
            </div>
        </div>
  <div class="owl-carousel owl-carousel1 owl-theme">
    

    @foreach(@$testimonial as $val)
    <div>
      <div class="card text-center"><img class="card-img-top" src="{{ URL::to('storage/app/public/testimonial')}}/{{@$val->image}}" alt="">
        <div class="card-body">
          <h5>{{@$val->name}}<br />
          </h5>
          <p class="card-text">“ {{@$val->description}} ” </p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>





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