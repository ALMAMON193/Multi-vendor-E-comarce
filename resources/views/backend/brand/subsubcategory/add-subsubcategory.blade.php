@extends('admin.admin_dashboard_master')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    <form method="POST" action="{{ route('subsubcategory.store') }}">
                        @csrf <!-- CSRF Token -->
                        <div class="form-group">
                            <h5>Brand Category<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="category_id" class="form-control"  >
                                    <option value="" selected="" disabled="">Select Category</option>
                                    @foreach($brandcategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>	
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
   
    <script type="text/javascript">
        $(document).ready(function() {
          $('select[name="category_id"]').on('change', function(){
              var category_id = $(this).val();
              if(category_id) {
                  $.ajax({
                      url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         var d =$('select[name="sub_category_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="sub_category_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                            });
                      },
                  });
              } else {
                  alert('danger');
              }
          });
      });
      </script>
    
@endsection
