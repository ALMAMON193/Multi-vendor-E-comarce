@extends('admin.admin_dashboard_master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">category</a></li>
                        <li class="breadcrumb-item active">Add category</li>
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
                    <h3 class="pt-3">Edit category</h3>
                    <hr>
                    <form method="POST" action="{{ route('category.update',$brandCategory->id) }}">
                        @csrf <!-- CSRF Token -->
                        <div class="form-group">
                            <h5>Category Name English <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="category_name_en" name="category_name_en" class="form-control" value="{{ $brandCategory->category_name_en }}" >
                               
                            </div>
                            @error('brand_name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <h5>Category Name Hindi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="category_name_hin" name="category_name_hin" class="form-control" value="{{ $brandCategory->category_name_hin }}" >
                                @error('brand_name_hin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror  
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <h5>Category icon <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="category_icon" name="category_icon" class="form-control" value="{{ $brandCategory->category_icon }}" >
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

