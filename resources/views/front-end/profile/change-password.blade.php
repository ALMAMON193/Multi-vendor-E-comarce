@extends('front-end.front-end-master')
@section('content')
    <style>
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-left: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>

    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>My Account</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="dashboard_menu">

                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <img src="{{ !empty($user->image) ? url('upload/user_images/' . $user->image) : url('upload/user_images/no_image.jpg') }}"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('dashboard') }}" role="tab"
                                        aria-controls="dashboard" aria-selected="false"><i
                                            class="ti-layout-grid2"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" aria-selected="false"><i
                                            class="ti-shopping-cart-full"></i>Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#address"><i class="ti-location-pin"></i>My Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.profile') }}"><i class="ti-location-pin"></i>My
                                        Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.password.change') }}"><i class="ti-location-pin"></i>Change password</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.logout') }}"><i class="ti-lock"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <h3 style="margin-bottom: 40px;text-align:center"> Hii..{{ Auth::user()->name }} ... Wellcome to
                            easy online shop</h3>
                        <div class="card">
                            <div class="card-header">
                                <h3>Change Password</h3>
                            </div>
                            <div class="card-body">
                               
                                <form method="POST" action="{{ route('user.profile.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group col-md-12 mb-3">
                                    <label>Current Password <span class="required">*</span></label>
                                    <input required="" class="form-control" name="current_password" type="password">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>New Password <span class="required">*</span></label>
                                    <input required="" class="form-control" name="new_password" type="password">
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <label>Confirm New Password <span class="required">*</span></label>
                                    <input required="" class="form-control" name="confirm_password" type="password">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Save</button>
                                </div>
                              </form>
                              
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION SHOP -->

    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section bg_default small_pt small_pb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading_s1 mb-md-0 heading_light">
                        <h3>Subscribe Our Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form">
                        <form>
                            <input type="text" required="" class="form-control rounded-0"
                                placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-dark rounded-0" name="submit"
                                value="Submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#profile_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection
