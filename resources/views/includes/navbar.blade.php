


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span>+91 8100057909</span>
                    </div>
                </div>
                <a href="index.html" class="h1 text-white mb-0"><img src="{{ URL::to('public/logo.png')}}" style="width:100%;height:80px"></a>
                <div class="d-flex">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3" style="background: black;">
                <a href="index.html" class="navbar-brand d-lg-none">
                   <img src="{{ URL::to('public/logo_small.png')}}" style="width:100%;height:80px">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{route('home.page')}}" class="nav-item nav-link @if(Route::is('home.page'))active @endif">Home</a>
                        <a href="{{route('about.us')}}" class="nav-item nav-link @if(Route::is('about.us'))active @endif">About</a>
                        <a href="{{route('service.page')}}" class="nav-item nav-link @if(Route::is('service.page'))active @endif">Services</a>
                        <a href="{{route('gallery.page')}}" class="nav-item nav-link @if(Route::is('gallery.page'))active @endif">Gallery</a>
                        
                        <a href="{{route('contact.page')}}" class="nav-item nav-link @if(Route::is('contact.page'))active @endif">Contact</a>
                    </div>
                    
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->