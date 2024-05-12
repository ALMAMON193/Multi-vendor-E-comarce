@extends('admin.admin_master')
@section('content')
{{-- <div class="p-30 rounded30 box-shadowed b-2 b-dashed">
	<form method="POST" action="{{ route('admin.login') }}">
			@csrf
			<div class="form-group">
					<div class="input-group mb-3">
							<div class="input-group-prepend">
									<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
							</div>
							<input type="email" class="form-control pl-15 bg-transparent text-white plc-white"
									placeholder="Username" name="email" id="email">
					</div>
			</div>
			<div class="form-group">
					<div class="input-group mb-3">
							<div class="input-group-prepend">
									<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
							</div>
							<input type="password" class="form-control pl-15 bg-transparent text-white plc-white"
									placeholder="Password" name="password">
					</div>
			</div>
			<div class="row">
					<div class="col-6">
							<div class="checkbox text-white">
									<input type="checkbox" id="basic_checkbox_1">
									<label for="basic_checkbox_1">Remember Me</label>
							</div>
					</div>
					<!-- /.col -->
					<div class="col-6">
							<div class="fog-pwd text-right">
									<a href="javascript:void(0)" class="text-white hover-info"><i
													class="ion ion-locked"></i> Forgot pwd?</a><br>
							</div>
					</div>
					<!-- /.col -->
					<div class="col-12 text-center">
							<button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
					</div>
					<!-- /.col -->
			</div>
	</form>

	<div class="text-center text-white">
			<p class="mt-20">- Sign With -</p>
			<p class="gap-items-2 mb-20">
					<a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
									class="fa fa-facebook"></i></a>
					<a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
									class="fa fa-twitter"></i></a>
					<a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
									class="fa fa-google-plus"></i></a>
					<a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
									class="fa fa-instagram"></i></a>
			</p>
	</div>


</div> --}}

<div class="container">
	<div class="row justify-content-center">
			<div class="col-md-7 animated fadeIn col-lg-6 center-screen">
					<div class="card w-90  p-4">
							<div class="card-body">
									<h4>SIGN IN</h4>
									<br />

									<form method="POST" action="{{ route('admin.login') }}">
										@csrf
										<div class="form-group">
											<div class="input-group mb-3">
													<div class="input-group-prepend">
															<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
													</div>
													<input type="email" class="form-control pl-15 bg-transparent text-white plc-white"
															placeholder="Username" name="email" id="email">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group mb-3">
													<div class="input-group-prepend">
															<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
													</div>
													<input type="password" class="form-control pl-15 bg-transparent text-white plc-white"
															placeholder="Password" name="password">
											</div>
									</div>
									<div class="row">
											<div class="col-6">
													<div class="checkbox text-white">
															<input type="checkbox" id="basic_checkbox_1">
															<label for="basic_checkbox_1">Remember Me</label>
													</div>
											</div>
											<!-- /.col -->
											<div class="col-6">
													<div class="fog-pwd text-right">
															<a href="javascript:void(0)" class="text-white hover-info"><i
																			class="ion ion-locked"></i> Forgot pwd?</a><br>
													</div>
											</div>
											<!-- /.col -->
											<div class="col-12 text-center">
													<button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
											</div>
									</form>
							</div>
					</div>
			</div>
	</div>
</div>

@endsection