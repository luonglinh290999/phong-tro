@extends('layouts.master')
@section('content')
<div class="container" style="padding-left: 0px;padding-right: 0px; font-family: cursive;">
	<div class="gap"></div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-bottom: 50px">
			<div class="gap"></div>
			<div class="panel panel-primary" style="border-color: pink">
				<div class="panel-heading" style="background-color: #FF6347; border-color: pink">Lấy lại mật khẩu</div>
				<div class="panel-body login">
					<div class="gap"></div>
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					@if(session('warn'))
		                        <div class="alert bg-danger">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold">Error!</span>  {{session('warn')}}
								</div>
		            @endif
		            @if(session('success'))
		                        <div class="alert bg-danger">
									<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
									<span class="text-semibold">Success!</span>  {{session('success')}}
								</div>
		            @endif
		            @php
		            	$token = $_GET['token'];
		            	$email = $_GET['email'];
		            @endphp
					<form class="form-horizontal" method="POST" action="{{url('/reset-new-pass')}}" >
						@csrf
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label style="color: #B22222; padding-left: 135px">Vui lòng nhập mật khẩu mới của bạn:</label>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="pwd" style="color: #B22222">Mật khẩu mới:</label>
							<div class="col-sm-9"> 
								<input type="hidden"name="email" value="{{$email}}"/>
								<input type="hidden"name="token" value="{{$token}}"/>
								<input type="text" class="form-control" name="txtPassword" placeholder="Nhập mật khẩu mới" value="" required>
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-sm-offset-5 col-sm-9">
								<button type="submit" class="btn btn-primary" style="background-color: #FF6347; border-color: pink">Gửi</button>
							</div>
						</div>
					</form><div class="gap"></div>
				</div>

			<div class="gap"></div>
			</div>
		</div>
	</div>

</div>
@endsection