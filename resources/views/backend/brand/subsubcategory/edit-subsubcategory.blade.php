@extends('admin.admin_dashboard_master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">sub subcategory</a></li>
                        <li class="breadcrumb-item active">Edit sub subcategory</li>
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
                    <h3 class="pt-3">Edit sub subcategory</h3>
                    <hr>
                    <form method="POST" action="{{ route('subsubcategory.store') }}">
                        @csrf <!-- CSRF Token -->
                        <div class="form-group">
                            <h5>Brand Category<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                                    <option value="" disabled="" selected>select category</option>
      
                                    @foreach ($brandcategories as $item)
                                    <option value="{{ $item->id }}"{{ $subcategories->category_id == $item->id ? 'selected' : '' }}>{{ $item->category_name_en }}</option>
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
                                <select name="sub_category_id" class="form-control"  >
                                    <option value="" selected="" disabled="">Select subcategory</option>
                                     
                                </select>
                               
                                @error('sub_category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>
                        </div>
                        <br>
                        
                        <div class="form-group">
                            <h5>Sub SubCategory Name English <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="sub_subcategory_name_en" name="sub_subcategory_name_en" class="form-control">
                                @error('sub_subcategory_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror  
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <h5>Sub SubCategory Name Hindi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" id="sub_subcategory_name_hin" name="sub_subcategory_name_hin" class="form-control">
                                @error('sub_subcategory_name_hin')
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
