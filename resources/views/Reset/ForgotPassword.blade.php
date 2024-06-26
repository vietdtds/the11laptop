@extends('Layout')
@section('title')
{{ trans('home.forgot') }}
@endsection
@section('content-layout')
<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="{{route('trang-chu')}}">Home</a></li>
                <li><a href="{{route('dangky')}}">account</a></li>
                <li class="active"><a href="{{url('/quen-mat-khau')}}">Forgot Password</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Register Account Start -->
<div class="Lost-pass ptb-100 ptb-sm-60">
    <div class="container">
        <div class="register-title">
    	  	@if(session()->has('message'))
		        <div class="alert alert-success">
		            {!! session()->get('message') !!}
		        </div>
		    @elseif(session()->has('error'))
		         <div class="alert alert-danger">
		            {!! session()->get('error') !!}
		        </div>
		    @endif
            <h3 class="mb-10 custom-title">Lấy lại tài khoản</h3>
            <p class="mb-10">Nếu bạn đã có tài khoản, vui lòng quay lại trang đăng nhập</p>
        </div>
        <form class="password-forgot clearfix" action="{{url('/recover-pass')}}" method="post">
        	<input type="hidden" name="_token" value="{{csrf_token()}}">
            <fieldset>
                <legend>Thông tin tài khoản của bạn</legend>
                <div class="form-group d-md-flex">
                    <label class="control-label col-md-2" for="email"><span class="require">*</span>Nhập email của bạn</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="email_account" name="email_account" placeholder="abc@gmail.com">
                    </div>
                </div>
            </fieldset>
            <div class="buttons newsletter-input">
                <div class="float-left float-sm-left">
                    <a class="customer-btn mr-20" href="{{route('dangnhap')}}">Quay lại</a>
                </div>
                <div class="float-right float-sm-right">
                    <input type="submit" value="Tiếp tục" class="return-customer-btn">
                </div>
            </div>
        </form>
    </div>
    <!-- Container End -->
</div>
<!-- Register Account End -->
@endsection
