@extends('admin.admin_dashboard_master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card animated fadeIn w-100 p-3">
                    <div class="card-body">
                        <h4>User Profile</h4>
                        <hr />
                        <div class="container-fluid m-0 p-0">
                            <form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                                @csrf <!-- CSRF Token -->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', $editData->name) }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" id="email" name="email" class="form-control" required value="{{ old('email', $editData->email) }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <h5>Desegregation <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="desegregation" id="desegregation" name="desegregation" class="form-control" required value="{{ old('desegregation', $editData->desegregation) }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <h5>Profile <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" id="image" name="profile" class="form-control"  value="{{ old('profile', $editData->profile) }}" >
                                                @if (!empty($editData->profile))
                                                    <img id="showImage" src="{{ asset('upload/admin_images/' . $editData->profile) }}" alt="Profile Image" style="max-width: 100px; max-height: 100px; margin-top: 10px;">
                                                @else
                                                    <img id="showImage" src="{{ asset('upload/no_image.jpg') }}" alt="No Image" style="max-width: 100px; max-height: 100px; margin-top: 10px;">
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>
                                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5>Phone <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="phone" name="phone" class="form-control" required value="{{ old('phone',$editData->phone) }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <h5>Address <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="address" name="address" class="form-control" required value="{{ old('address',$editData->address) }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <h5>City <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" id="city" name="city" class="form-control" required value="{{ old('city',$editData->city) }}">
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
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
