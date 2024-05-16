@extends('admin.admin_dashboard_master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Brands</a></li>
                        <li class="breadcrumb-item active">Add Brand</li>
                    </ol>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="pt-3">Add Brand</h3>
                    <hr>
                    <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                        @csrf <!-- CSRF Token -->
                        <div class="form-group">
                            <h5>Brand Name English <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="brand_name_en" name="brand_name_en" class="form-control" >
                            </div>
                            @error('brand_name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <h5>Brand Name Hindi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="brand_name_hin" name="brand_name_hin" class="form-control" >
                                @error('brand_name_hin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror  
                            </div>
                            <br>
                        </div>
                       
                        <div class="form-group">
                            <h5>Brand Image <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" id="brand_image" name="brand_image" class="form-control">
                                @error('brand_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <br>
                                <!-- Display uploaded image -->
                                <img id="showImage" src="{{ asset('upload/no_image.jpg') }}" alt="No Image"
                                    style="max-width: 100px; max-height: 100px; margin-top: 10px;">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#brand_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection
