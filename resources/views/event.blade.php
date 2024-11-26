\<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Poriborton - The Change</title>
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
            <h1 class="display-2 text-white mb-3 animated slideInDown">Events</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



<!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            
            <div class="row g-4">
                @foreach(@$events as $value)
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ URL::to('storage/app/public/blog')}}/{{@$value->image}}" style="height:350px" alt="">
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
    </div>
    <!-- Team End -->
        

   




    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58889.37393295398!2d88.4452560830763!3d22.706455475280908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f2fae5d7d35%3A0x28abe80e9f29b3df!2sPoriborton%20Rehab%20Centre!5e0!3m2!1sen!2sin!4v1713509432021!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




    <!-- Footer Start -->
    @include('includes.footer_front')

    <!-- Footer End -->


    @include('includes.front_end_script')
 


</body>

</html>