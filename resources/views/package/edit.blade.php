@extends('layouts.app')


@section('title')
<title>Admin | Manage Package Edit</title>
@endsection

@section('style')
@include('includes.style')
<style type="text/css">
	.tox-notifications-container {
            display: none;
        }
</style>
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
					<h4 class="pull-left page-title">Manage Package Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.package')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
                    </ol>
				</div>
			</div>
			@include('includes.message')
			
			<div class="row">
				<div class="col-lg-12">
					<div>
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							
							<div class="panel-body rm02 rm04">
								<form role="form" action="{{route('manage.package.update')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="id" value="{{@$data->id}}">
									<div class="form-group rm03">
										<label for="title">Title</label>
										<input type="text" value="{{@$data->title}}"  class="form-control"  placeholder="Enter name"  name="title" >
									</div>
									

									<div class="clearfix"></div>


									<div class="form-group rm03">
										<label for="title">Plot</label>
										<select class="form-control" name="plot">
											<option value="Dawaipani" @if(@$data->plot=="Dawaipani") selected @endif>Dawaipani</option>
											<option value="Sourinee" @if(@$data->plot=="Sourinee") selected @endif>Sourinee</option>
											<option value="Dawaipani & Sourinee" @if(@$data->plot=="Dawaipani & Sourinee") selected @endif>Dawaipani & Sourinee</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">Price (Rs)</label>
										<input type="text"  class="form-control" value="{{@$data->price}}" placeholder="Enter price"  name="price" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Description</label>
										<textarea class="form-control" id="text_complaint" style="height:500px;" name="description">{{@$data->description}}</textarea>
									</div>
									

									

									<div class="form-group rm50">
										<label for="title">Image </label>
										<input type="file"  class="form-control" name="image" onchange="fun1()" id="icon">
									</div>

									{{-- preview-image --}}
					                                  <div class="form-group rm03">
					                                    <img style="width: 25%;height: 250px" id="img2" src="{{URL::to('storage/app/public/package')}}/{{@$data->image}}">
					                                   </div>
									
									<div class="clearfix"></div>
							
									
									<div class="clearfix"></div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Update</button>
									</div>
								</form>
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
$(document).ready(function(){
	
$('#frm').validate({
rules:{
title:{
required:true,
},

},
messages:{
//  link:{
//     required:" social link is mandatory",
//     min:"Enter valid links"
// }
}
});
});
</script>

<script>
        function fun1(){
        var i=document.getElementById('icon').files[0];
        var b=URL.createObjectURL(i);
        $("#img2").attr("src",b);
    }
</script> 

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
     selector: 'textarea#text_complaint', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'code table lists',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
   });
 </script>

@endsection