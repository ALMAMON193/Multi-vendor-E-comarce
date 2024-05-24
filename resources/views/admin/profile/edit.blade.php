@extends('admin.admin_dashboard_master')
@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Admin Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">admin</a></li>
                                    <li class="breadcrumb-item active">Prifile </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST" action="{{ route('admin.profile.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf <!-- CSRF Token -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        required value="{{ old('name', $editData->name) }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <h5>Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" id="email" name="email" class="form-control"
                                                        required value="{{ old('email', $editData->email) }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <h5>Desegregation <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="desegregation" id="desegregation" name="desegregation"
                                                        class="form-control" required
                                                        value="{{ old('desegregation', $editData->desegregation) }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <h5>Profile <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" id="image" name="profile" class="form-control"
                                                        value="{{ old('profile', $editData->profile) }}">
                                                    @if (!empty($editData->profile))
                                                        <img id="showImage"
                                                            src="{{ asset('uploads/admin_images/' . $editData->profile) }}"
                                                            alt="Profile Image"
                                                            style="max-width: 100px; max-height: 100px; margin-top: 10px;">
                                                    @else
                                                        <img id="showImage" src="{{ asset('uploads/no_image.jpg') }}"
                                                            alt="No Image"
                                                            style="max-width: 100px; max-height: 100px; margin-top: 10px;">
                                                    @endif
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <h5>Phone <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" id="phone" name="phone" class="form-control"
                                                        required value="{{ old('phone', $editData->phone) }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <h5>Address <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" id="address" name="address" class="form-control"
                                                        required value="{{ old('address', $editData->address) }}">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <h5>City <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" id="city" name="city" class="form-control"
                                                        required value="{{ old('city', $editData->city) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-info">Submit</button>
                            <!-- Change button type to submit -->
                            </form>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Upcube.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            });
        </script>
    @endsection
