@extends('admin.layouts.app')

@section('title')
<title>LMS | Login</title>
@endsection

@section('style')
@include('admin.includes.style')
@endsection



@section('body')
<div class="panel panel-color panel-primary panel-pages">
    


    <div class="panel-body">
         @include('admin.includes.message')
         <h3 style="text-align:center;">Login</h3>
        <form class="form-horizontal m-t-20" action="{{route('custom.login')}}" method="POST" id="login_form">
            @csrf

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="text" placeholder="Username" name="email" >
                    @if ($errors->has('email'))
                    <span class="invalid-feedback error" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="password" placeholder="Password" name="password" value="{{ @Cookie::get('activarmor_admin_user_password') }}">
                </div>
            </div>

          

            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <a href="index.html"> <button class="btn btn-primary btn-lg w-lg waves-effect waves-light rm01" type="submit">Log In</button></a>
                </div>
            </div>

            
        </form>
    </div>
</div>
@endsection

@section('script')
@include('admin.includes.script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function(){
        $("#login_form").validate({
            rules: {
                password:{
                    required: true,
                },
                email:{
                    required: true,
                }
            },
            messages:{
                password:{
                    required:'Please eneter password',
                },
                email:{
                    required:'Please enter username',
                },
            }
        });
    });
</script>
@endsection
