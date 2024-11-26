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
            <h1 class="display-2 text-white mb-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



        

<!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container ">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3 text-white">Services We Offer</h1>
                <p class="mb-5 text-white">Elevate Your Space: Discover Our Range of Tailored Interior Design Services</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img src="{{ URL::to('public/interior.jpg')}}" class="mb-3" style="width: 100%;height: 300px;">
                        <h4 class="mb-3">Interior Designing & Decoration</h4>
                            <p class="mb-4">Bringing Your Vision to Life: Our Interior Designing & Decoration Services Combine Creativity and Functionality to Transform Spaces into Beautiful, Functional Environments.</p>
                        <a class="btn btn-light px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img src="{{ URL::to('public/furniture.jpeg')}}" class="mb-3" style="width: 100%;height: 300px;">
                        <h4 class="mb-3">All Type Of Furniture</h4>
                            <p class="mb-4">Elevate Your Space with Our Diverse Range of High-Quality Furniture: From Modern to Classic, We Have Everything You Need to Create the Perfect Setting for Your Home or Office.</p>
                        <a class="btn btn-light px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img src="{{ URL::to('public/resident.jpeg')}}" class="mb-3" style="width: 100%;height: 300px;">
                        <h4 class="mb-3">Residential Interior Design & Decoration</h4>
                            <p class="mb-4">Crafting Personalized Sanctuaries: Our Residential Interior Design & Decoration Services Blend Style and Functionality to Create Inviting and Comfortable Spaces that Reflect Your Unique Personality and Lifestyle.</p>
                        <a class="btn btn-light px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img src="{{ URL::to('public/false.jpeg')}}" class="mb-3" style="width: 100%;height: 300px;">
                        <h4 class="mb-3">False Ceiling</h4>
                            <p class="mb-4">We specialize in false ceiling services, providing innovative and stylish solutions for your space. Our skilled team ensures high-quality installation, creating a modern and elegant look that enhances the overall aesthetics of your interior.</p>
                        <a class="btn btn-light px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img src="{{ URL::to('public/sliding.jpeg')}}" class="mb-3" style="width: 100%;height: 300px;">
                            <h4 class="mb-3">Aluminium Sliding & PVC Door And Window</h4>
                            <p class="mb-4">We offer expert services in aluminium sliding, PVC doors, and windows. Our skilled team provides customized solutions that are durable, energy-efficient, and aesthetically pleasing, enhancing the functionality and style of your space.</p>
                        <a class="btn btn-light px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img src="{{ URL::to('public/paint.jpeg')}}" class="mb-3" style="width: 100%;height: 300px;">
                            <h4 class="mb-3">Home Painting & Putty</h4>
                            <p class="mb-4">Our home painting service delivers professional and high-quality results to transform your space. Our skilled team uses top-notch materials and techniques to ensure a flawless finish that enhances the ambiance and appeal of your home.</p>
                        <a class="btn btn-light px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                


                
            </div>
        </div>
    </div>
    <!-- Service End -->


        <div class="container-fluid container-service py-5">
        <div class="container ">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3 text-white">All Category Of Services</h1>
                <p class="mb-5 text-white">Elevate Your Space: Discover Our Range of Tailored Interior Design Services</p>
            </div>
            <div class="row g-4">

                @foreach(@$services as $value)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img src="{{ URL::to('storage/app/public/blog')}}/{{@$value->image}}" class="mb-3" style="width: 100%;height: 300px;">
                        <h4 class="mb-3">{{@$value->title}}</h4>
                            <p class="mb-4">{{substr(@$value->description,0,100)}}..</p>
                        <a class="btn btn-light px-3" href="tel:9331066047">Call Now<i class="bi bi-chevron-double-right ms-1"></i></a>

                        <a class="btn btn-danger px-3" href="https://wa.me/919331066047">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                       {{--  <a class="btn btn-danger px-3" href="https://wa.me/919331066047">View More<i class="bi bi-chevron-double-right ms-1"></i></a> --}}
                    </div>
                </div>
                @endforeach
             </div>
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