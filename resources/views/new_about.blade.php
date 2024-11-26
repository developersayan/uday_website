<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ICMAI - Serampore-Hooghly Chapter</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Favicon -->
    @include('includes.front_end_css')


</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-primary"><img src="{{asset('public/logo1.png')}}" style="width:100%"></h1>
                </a>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('includes.navbar')
    <!-- Navbar End -->



        <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title zoom-in-zoom-out">
                <h4 class="m-0 text-uppercase font-weight-bold ">Welcome to The Institute of Cost Accountants of India Serampore-Hooghly Chapter</h4>
            </div>
            <div class="col-lg-12" >
                            <div class="position-relative mb-3 " >
                                
                                <div class="bg-white border border-top-0 p-4 mt-3" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                                    <p class="m-0">At ICMAI, SERAMPORE- HOOGHLY CHAPTER, we try to encourage our students to put their
heart, mind and soul into even at smallest acts. We organize regular Career Counseling
Sessions for our students and provide career support through campus interviews by
reputed institutions. ICMAI, Serampore- Hooghly Chapter is happy to see that the CMA
students from Hooghly district are finding their position in various organizations and
taking forward the vision for introducing responsible business across the nooks and
corners of our economy.</p>
                                </div>
                                
                            </div>
                        </div>
        </div>
    </div>

            <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="row">
            <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <div class="section-title ">
                <h4 class="m-0 text-uppercase font-weight-bold">Mission Statement</h4>
            </div>
                                <div class="bg-white border border-top-0 p-4" style="min-height:200px">
                                    <p class="m-0">The CMA Professionals would ethically driven enterprises globally by creating value to stakeholders in the socio-economic context through competencies drawn from the integration of strategy, management and accounting.</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Vision Statement</h4>
            </div>
                                <div class="bg-white border border-top-0 p-4" style="min-height:200px">
                                    <p class="m-0">The Institute of Cost Accountants of India would be the preferred source of resources and professionals for the financial leadership of enterprises globally.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
        </div>
    </div>


        <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Testimonials</h4>
                
            </div>
            <div class="owl-carousel news-carousel carousel-item-2 position-relative">

               @foreach(@$testimonial as $value)
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{URL::to('storage/app/public/testimonial')}}/{{@$value->image}}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1" style="margin-left: 10px">{{@$value->name}}</h4>
                            <small class="text-uppercase">{{@$value->profession}}</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        {{@$value->description}}
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
















<iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d459.9231922337154!2d88.33529747635333!3d22.75106923816205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89b264c0d04cd%3A0x7d9b57a2eefadeeb!2sSristi%20Apartment!5e0!3m2!1sen!2sin!4v1708086125603!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; width: 100%; border:0;margin-top: 25px;margin-bottom: 25px;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>







    <!-- Footer Start -->
    @include('includes.footer_front')

    <!-- Footer End -->


    @include('includes.front_end_script')



</body>

</html>