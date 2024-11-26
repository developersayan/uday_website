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
                                <h4 class="m-0 text-uppercase font-weight-bold">Blogs</h4>
                                
                            </div>
                        </div>

                        @foreach(@$blog as $value)
                        <a href="{{route('blog-details.page',@$value->id)}}">
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ URL::to('storage/app/public/blog')}}/{{@$value->image}}" style="object-fit: cover;width: 100%;height: 300px;">
                                <div class="bg-white border border-top-0 p-4">
                                    
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="{{route('blog-details.page',@$value->id)}}">{{substr(@$value->title,0,150)}}..</a>
                                    <p class="m-0">{{substr(@$value->description,0,300)}}..</p>
                                </div>
                                
                            </div>
                        </div>
                        </a>
                        @endforeach
                        
                        
                        
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
















        <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.165817594314!2d88.47612607875222!3d22.722077374344487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8a3e0466da1f7%3A0x7afbfadd85b5dadb!2sCITY%20MOBILE!5e0!3m2!1sen!2sin!4v1697438014868!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; width: 100%; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>







    <!-- Footer Start -->
    @include('includes.footer_front')

    <!-- Footer End -->


    @include('includes.front_end_script')



</body>

</html>