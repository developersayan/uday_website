<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="{{route('dashboard')}}" class="logo"><i style="font-size:10px;"></i> <img src="{{asset('public/logo1.png')}}" style="width:100%;height: 50px;"></a>
        </div>
    </div>
    <a id="menu-toggle" href="#" class="btn-menu toggle">
        <i class="fa fa-bars"></i>&nbsp;Menu
    </a>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left">
                        {{-- <i class="fa fa-bars"></i> --}}
                    </button>
                    <span class="clearfix"></span>
                </div>
                <!--<form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>-->

                
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
