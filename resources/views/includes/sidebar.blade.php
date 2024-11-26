<a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
    <i class="fa fa-bars"></i>
</a>
<div id="sidebar-wrapper">
    <nav id="spy">
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    
                            <div id="sidebar-menu" style="margin-top:15px">
                                <ul class="sidebar-nav nav">

                                    

                                    {{-- <li><a href="{{route('dashboard')}}" class="waves-effect @if(Request::segment(1)=="dashboard") active @endif"><i class="fa fa-dashcube" aria-hidden="true"></i><span>Dashboard</span></a></li> --}}

                                    <li><a href="{{route('manage.banner')}}" class="waves-effect @if(Request::segment(1)=="manage-banner") active @endif"><i class="fa fa-camera" aria-hidden="true"></i><span>Banner</span></a></li>

                                    <li><a href="{{route('manage.gallery')}}" class="waves-effect @if(Request::segment(1)=="manage-gallery") active @endif"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span></a></li>

                                    <li><a href="{{route('manage.testimonial')}}" class="waves-effect @if(Request::segment(1)=="manage-testimonial") active @endif"><i class="fa fa-users" aria-hidden="true"></i><span>Testmonial</span></a></li>

                                    <li><a href="{{route('manage.blog')}}" class="waves-effect @if(Request::segment(1)=="manage-blog") active @endif"><i class="fa fa-blog" aria-hidden="true"></i><span>Blogs</span></a></li>

                                    {{-- <li><a href="{{route('manage.package')}}" class="waves-effect @if(Request::segment(1)=="manage-package") active @endif"><i class="fa fa-car" aria-hidden="true"></i><span>Packages</span></a></li> --}}

                                    <li><a href="{{route('manage.contact')}}" class="waves-effect @if(Request::segment(1)=="contact-us") active @endif"><i class="fa fa-inbox" aria-hidden="true"></i><span>Contact</span></a></li>


                                    <li><a href="{{route('logout')}}" class="waves-effect @if(Request::segment(1)=="contact-us") active @endif"><i class="fa fa-power-off" aria-hidden="true"></i><span>Logout</span></a></li>

                                   

                                    
                            
                                

                                

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        

                
                    <div class="clearfix"></div>
                </div>
            </div>
    </nav>
</div>


