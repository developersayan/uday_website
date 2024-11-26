<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Santoshi Maa Enterprise</title>
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


    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach(@$banner as $key=> $value)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img class="w-100 overlay" style="filter: brightness(0.3);" src="{{ URL::to('storage/app/public/banner')}}/{{@$value->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-12 text-center">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">{{@$value->heading}}</h1>
                                    <p class="mb-5 animated slideInRight">{{substr(@$value->description,0,150)}}..</p>
                                    <a href="https://wa.me/918100057909" class="btn btn-danger py-3 px-5 animated slideInLeft">For enquiry Click Here !!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



        

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


    <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            
            <div class="row g-4">
                @foreach(@$gallery as $value)
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 image_auto" style="height:350px;" src="{{ URL::to('storage/app/public/gallery')}}/{{@$value->image}}"  alt="">

                            <a class="btn btn-danger px-3 mt-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

                

            </div>


        </div>
    </div>
    <!-- Team End -->



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
                        <a class="btn btn-light px-3" href="tel:8100057909">Call Now<i class="bi bi-chevron-double-right ms-1"></i></a>

                        <a class="btn btn-danger px-3" href="https://wa.me/918100057909">Enquiry Now<i class="bi bi-chevron-double-right ms-1"></i></a>
                       {{--  <a class="btn btn-danger px-3" href="https://wa.me/918100057909">View More<i class="bi bi-chevron-double-right ms-1"></i></a> --}}
                    </div>
                </div>
                @endforeach
             </div>
        </div>
    </div>













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








        <div class="bg-video-wrap" >
    <video src="{{ URL::to('public/video.mp4')}}"  loop muted autoplay>
    </video>
    
    <h1 style=" text-align: center;
      color: #fff;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      z-index: 3;
      max-width: 400px;
      width: 100%;
      height: 50px;
      font-size: 25px; background: red;">Santoshi Maa Enterprise
    </h1>
  </div>


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
          <h5 class="testi_head">{{@$val->name}}<br />
          </h5>
          <p class="card-text">“ {{@$val->description}} ” </p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<!-- Team Start -->
{{--     <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            
            <div class="row g-4">
                @foreach(@$events as $value)
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 image_auto" src="{{ URL::to('storage/app/public/blog')}}/{{@$value->image}}" style="height:300px" alt="">
                        </div>
                        <div class="text-center p-4" style="min-height:250px;">
                            <h5 class="mb-1">{{@$value->title}}</h5>
                            <p >{{substr(@$value->description,0,100)}}..</p>
                            <p><a href="{{route('blog-details.page',@$value->id)}}" class="btn btn-primary">Read More</a></p>
                        </div>
                    </div>
                </div>
                @endforeach

                

            </div>


        </div>
    </div> --}}
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