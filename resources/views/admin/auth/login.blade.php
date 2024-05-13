@extends('admin.admin_master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
                <div class="card w-90  p-4">
                    <div class="card-body">
                        <h4>SIGN IN</h4>
                        <hr>
                        <br />

                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <input id="email" name="email" placeholder="User Email" class="form-control"
                                type="email" />
                            <br />
                            <input id="password" name="password" placeholder="User Password" class="form-control"
                                type="password" />
                            <br>
                            <button type="submit" class="btn w-20 bg-gradient-primary ">Next</button>
                            <hr />
                            <div class="float-end mt-3">
                                <span>

                                    <a class="text-center ms-3 h6" href="#">Forget Password</a>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="text-center text-white">
                        <p class="mt-20">- Sign With -</p>
                        <p class="gap-items-2 mb-20">
                            <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"> <img style="height: 20px; width:20px" src="{{ asset('images/facebook.png') }}" alt=""> </a>
                            <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
                                    class="fa fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
                                    class="fa fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i
                                    class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<script>
			function updateProfile(formData) {
			$.ajax({
					url: '{{ route("admin.profile.store") }}',
					method: 'POST',
					data: formData,
					processData: false,
					contentType: false,
					beforeSend: function () {
							showLoader(); // Show loader while request is being processed
					},
					success: function (response) {
							successToast(response.message);
					},
					error: function (xhr, status, error) {
							errorToast('An error occurred while updating profile.');
					},
					complete: function () {
							hideLoader(); // Hide loader when request is complete
					}
			});
	}
	
		</script>
@endsection
