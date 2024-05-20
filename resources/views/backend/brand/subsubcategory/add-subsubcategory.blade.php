@extends('admin.admin_dashboard_master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Brands</a></li>
                        <li class="breadcrumb-item active">Add Sub SubCategory</li>
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
                    <h3 class="pt-3">Add Sub SubCategory</h3>
                    <hr>
                    <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                        @csrf <!-- CSRF Token -->
                        <div class="form-group">
                            <h5>Brand Category<span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                                <option value="" disabled="" selected>select category</option>
                                @foreach ($brandcategories as $item)
                                <option value="{{ $item->id }}">{{ $item->category_name_en }}</option>
                                @endforeach
                          
                              </select>
                              @error('category_id')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <h5>Brand Sub Category<span class="text-danger">*</span></h5>
                            <div class="controls">
                              <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                                <option value="" disabled="" selected>select category</option>
                                @foreach ($brandsubcategories as $item)
                                <option value="{{ $item->id }}">{{ $item->sub_category_name_en }}</option>
                                @endforeach
                          
                              </select>
                              @error('category_id')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="form-group">
                            <h5>Sub subCategory Name English <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="brand_name_hin" name="brand_name_hin" class="form-control" >
                                @error('brand_name_hin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror  
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <h5>Sub subCategory Name Hindi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="brand_name_hin" name="brand_name_hin" class="form-control" >
                                @error('brand_name_hin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror  
                            </div>
                            <br>
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
