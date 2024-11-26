@extends('layouts.app')


@section('title')
<title>Admin |  Package images</title>
@endsection

@section('style')
@include('includes.style')
@endsection

@section('content')
<!-- Top Bar Start -->
@include('includes.header')
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
@include('includes.sidebar')
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="wraper container-fluid">
            <div class="row">
                <div class="col-sm-12">
                        <div class="panel panel-default">
                        <div class="panel-heading rm02 rm04">
                            <form role="form" action="{{route('manage.package.gallery.insert')}}" method="post" id="banner_image_form" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{@$id}}">

                                <div class="form-group">
                                        <label for="Email">Image </label>
                                        <div class="uplodimgfil">
                                            <input type="file" name="image"  id="icon" class="inputfile inputfile-1"  onchange="fun1()" />
                                             <label for="icon">Upload Image<img src="{{ URL::to('public/admin/assets/images/clickhe.png')}}" alt=""></label>
                                        </div>
                                       <div id="err_image"></div>
                                  </div>

                                  {{-- preview-image --}}
                                   <div class="form-group rm03">
                                    <img style="width: 25%;height: 200px" id="img2">
                                   </div>
                                

                                

                                

                                <div class="rm05">
                                    <button class="btn btn-primary waves-effect waves-light w-md"
                                        type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.message')
            
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <!-- Personal-Information -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                    <div class="row">
                                        @if(@$data->isNotEmpty())
                                        @foreach(@$data as $value)
                                        <div class="col-md-4" style="margin-top:25px;">
                                            <img src="{{URL::to('storage/app/public/gallery')}}/{{@$value->image}}" style="width:100%;height:300px">
                                            <a class="btn btn-danger" href="{{route('manage.package.gallery.delete',['id'=>$value->id])}}" style="margin-top: 20px;">Delete</a>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>


                                    <ul class="pagination rtg">
                                        {{-- {{@$data->links()}} --}}
                                    </ul>

                                    


                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Personal-Information -->
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!-- content -->
    
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
@section('footer')
@include('includes.footer')
@endsection
@endsection
{{-- end content --}}
@section('script')
@include('includes.script')
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}} {{-- for datepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


<script>
        function fun1(){
        var i=document.getElementById('icon').files[0];
        var b=URL.createObjectURL(i);
        $("#img2").attr("src",b);
    }
</script>



<script type="text/javascript">
  @foreach (@$data as $value)
    $("#action{{$value->id}}").click(function(){
        $('.show-actions:not(#show-{{$value->id}})').slideUp();
        $("#show-{{$value->id}}").slideToggle();
    });
 @endforeach
</script>

@endsection