@extends('layouts.app')


@section('title')
<title>Admin | Manage Package</title>
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
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Manage Package</h4>
                    <ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.package.add')}}">+ Add Package</a></li>
                        
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix"></div>

                    




                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    @include('includes.message')
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   
                                                   <th>Title</th>
                                                   <th>Price</th>
                                                   <th>Plot</th>
                                                   <th>Show At Home</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(@$data->isNotEmpty())
                                                @foreach(@$data as $value)
                                                <tr>
                                                    
                                                    <td>{{@$value->title}}</td>
                                                    <td>Rs.{{@$value->price}} /-</td>
                                                    <td>{{@$value->plot}}</td>
                                                    <td>
                                                        @if(@$value->show_at_home=="N") No @else Yes @endif
                                                    </td>
                                                    

                                                    <td class="rm07">
                                                        <a href="javascript:void(0);" class="action-dots" id="action{{$value->id}}"><img src="{{ URL::to('public/admin/assets/images/action-dots.png')}}" alt=""></a>
                                                        <div class="show-actions" id="show-{{$value->id}}" style="display: none;">
                                                            <span class="angle custom_angle"><img src="{{ URL::to('public/admin/assets/images/angle.png')}}" alt=""></span>
                                                            <ul>
                                                                <li><a href="{{route('manage.package.edit',$value->id)}}" >Edit </a></li>

                                                                <li><a href="{{route('manage.package.show',$value->id)}}" >@if(@$value->show_at_home=="N") Show At Home @else Remove From Home @endif </a></li>
                                                            
                                                                <li><a href="{{route('manage.package.gallery',$value->id)}}">Add Gallery </a></li>

                                                                <li><a href="{{route('manage.package.delete',$value->id)}}" onclick="return confirm('Are sure want to delete the data ?')">Delete </a></li>
                                                             </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                    

                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    @include('includes.footer')
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

@endsection

@section('script')
@include('includes.script')

<script
type="text/javascript"
charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"
></script>
<script
type="text/javascript"
charset="utf8"
src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
$(function() {
$("#example").dataTable();
});
</script>

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
