@extends('layouts.app')


@section('title')
<title>Admin |  Header images</title>
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
                            <form role="form" action="{{route('manage.banner.insert')}}" method="post" id="banner_image_form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group rm03">
                                    <label for="Email">Banner Heading</label>
                                    <textarea name="heading" class="form-control" style="height:50px;"></textarea>
                                </div>
                                <div class="form-group rm03">
                                    <label for="Email">Banner Description</label>
                                    <textarea name="description" class="form-control" style="height:100px;"></textarea>
                                </div>

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
                                    <img style="width: 100%;height: 400px" id="img2">
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
                                    
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Header Decription</th>
                                                   <th>Header Image</th>
                                                   
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(@$data->isNotEmpty())
                                                @foreach(@$data as $value)
                                                <tr>

                                                    <td>{{substr(@$value->description,0,150)}}..</td>

                                                    <td><img src="{{ URL::to('storage/app/public/banner')}}/{{@$value->image}}" style="width: 100%;height: 400px" id="img2"></td>
                                                    

                                                    <td class="rm07">
                                                        <a href="javascript:void(0);" class="action-dots" id="action{{$value->id}}"><img src="{{ URL::to('public/admin/assets/images/action-dots.png')}}" alt=""></a>
                                                        <div class="show-actions" id="show-{{$value->id}}" style="display: none;">
                                                            <span class="angle custom_angle"><img src="{{ URL::to('public/admin/assets/images/angle.png')}}" alt=""></span>
                                                            <ul>
                                                                <li><a href="{{route('manage.banner.delete',['id'=>@$value->id])}}" onclick="return confirm('Are sure want to delete the banner image ?')">Delete </a></li>

                                                                
                                                             </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
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