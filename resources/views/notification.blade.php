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



        <div class="container-fluid" style="margin-bottom: 50px; margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Notifications</h4>
                               
                            </div>
                        </div>

                        @foreach(@$notification as $key=> $value)
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ URL::to('storage/app/public/blog')}}/{{@$value->image}}" style="object-fit: cover;width: 100%;height: 300px;">
                                <div class="bg-white border border-top-0 p-4">
                                    
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" target="_blank" href="{{@$value->paste_link}}">{{substr(@$value->title,0,200)}}..</a>
                                    
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                        
                        
                        
                        
                    </div>
                </div>
                
                
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