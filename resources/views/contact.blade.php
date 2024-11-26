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
            <h1 class="display-2 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



        

<!-- Appoinment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">We Ensure You Will Always Get The Best Result</h1>
                    <p>Contact Santoshi Maa Enterprise for Exceptional Interior Decoration Services: Our Team Specializes in Creating Stunning and Functional Spaces through Customized Design Solutions. From Conceptualization to Execution, We Offer a Full Range of Services, Including Space Planning, Color Consultation, Furniture Selection, and Styling. Elevate Your Interior with Santoshi Maa Enterprise - Contact Us Today for a Consultation!</p>
                    
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Address</h5>
                            <span>Ghola Kachari Road,Opposite Of Central Modern School,Barasat</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-phone text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Phone Number</h5>
                            <span>+91 8100057909</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Get Online Appoinment</h2>
                    <form method="POST" action="{{route('contact.post')}}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" required name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" required name="email" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="phone" required id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" required placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-danger  w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->





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