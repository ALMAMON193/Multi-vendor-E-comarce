@extends('admin.admin_dashboard_master')

@section('content')
    <style>
        .bootstrap-tagsinput .tag {
            background-color: rgb(20, 216, 118);
            color: black;
            border: 1px solid #ccc;
            padding: 0.2em 0.5em;
            margin-right: 0.2em;
            display: inline-block;
            font-size: 0.875em;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">product</a></li>
                        <li class="breadcrumb-item active">Add product</li>
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
                    <form action="/submit-product" method="post">
                        {{-- First Row Start --}}
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="brand_id" class="form-label fw-bold">Select Brand <span
                                            class="text-danger">*</span></label>
                                    <select id="brand_id" name="brand_id" class="form-select" required>
                                        <option value="" selected="" disabled="">Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="category_id" class="form-label fw-bold">Select Category <span
                                            class="text-danger">*</span></label>
                                    <select id="category_id" name="category_id" class="form-select" required>
                                        <option value="" selected="" disabled="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="subcategory_id" class="form-label fw-bold">Select Subcategory <span
                                            class="text-danger">*</span></label>
                                    <select id="subcategory_id" name="subcategory_id" class="form-select" required>
                                        <option value="" selected="" disabled="">Select Subcategory</option>
                                        {{-- Options will be populated dynamically --}}
                                    </select>
                                    @error('subcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- First Row End --}}

                        {{-- Second Row Start --}}
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="subsubcategory_id" class="form-label fw-bold">Select Subsubcategory <span
                                            class="text-danger">*</span></label>
                                    <select id="subsubcategory_id" name="subsubcategory_id" class="form-select" required>
                                        <option value="" selected="" disabled="">Select Subsubcategory</option>
                                        {{-- Options will be populated dynamically --}}
                                    </select>
                                    @error('subsubcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_name_en" class="form-label fw-bold">Product Name (English) <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="product_name_en" name="product_name_en" class="form-control"
                                        required>
                                    @error('product_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_name_hin" class="form-label fw-bold">Product Name (Hindi) <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="product_name_hin" name="product_name_hin" class="form-control"
                                        required>
                                    @error('product_name_hin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- Second Row End --}}

                        {{-- 3rd Row Start --}}
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_name_en" class="form-label fw-bold">Product Code<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="product_code" name="product_code" class="form-control"
                                        required>
                                    @error('product_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_qty" class="form-label fw-bold">Product Quantity<span
                                            class="text-danger">*</span></label>
                                    <input type="number" id="product_qty" name="product_qty" class="form-control"
                                        required>
                                    @error('product_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_size_en" class="form-label fw-bold">
                                        product size english<span class="text-danger" >*</span>
                                    </label>
                                    <input type="text" id="product_size_en" name="product_size_en"
                                        class="form-control" data-role="tagsinput" value="XL,XXL,XXXL,M,L">
                                    @error('product_size_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        {{-- 3rd Row End --}}
                        {{-- Forth Row Start --}}
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_name_en" class="form-label fw-bold">Product size hindi<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="" name="product_code" class="form-control"
                                    data-role="tagsinput" value="XL,XXL,XXXL,M,L">
                                    @error('product_size_hin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_qty" class="form-label fw-bold">Product Color English<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="product_color_en" name="product_color_en"
                                        class="form-control" data-role="tagsinput" value="red,green,yeallo">
                                    @error('product_color_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_size_en" class="form-label fw-bold">
                                        product Color Hindi<span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="product_color_hin" class="form-control"data-role="tagsinput" value="red,green,yellow">
                                    @error('product_color_hin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        {{-- Forth Row End --}}

                         {{-- 6th Row Start --}}
                         <br>
                         <div class="row">
                             <div class="col-4">
                                 <div class="form-group">
                                     <label for="product_tags_en" class="form-label fw-bold">
                                         Product Tags (English) <span class="text-danger">*</span>
                                     </label><br>
                                     <input style="width: 58rem;" type="text" id="product_tags_hin"
                                         name="product_tags_hin" class="form-control tags-input" data-role="tagsinput"
                                         value="lorem,vue,php">
                                     @error('product_tags_hin')
                                         <span class="text-danger">{{ $message }}</span>
                                     @enderror
                                 </div>
                             </div>
                             <div class="col-4">
                                 <div class="form-group">
                                     <label for="product_tags_en" class="form-label fw-bold">
                                         Product Tags (Hindi) <span class="text-danger">*</span>
                                     </label><br>
                                     <input style="width: 58rem;" type="text" id="product_tags_hin"
                                         name="product_tags_hin" class="form-control tags-input" data-role="tagsinput"
                                         value="lorem,vue,php">
                                     @error('product_tags_hin')
                                         <span class="text-danger">{{ $message }}</span>
                                     @enderror
                                 </div>
                             </div>
                             <div class="col-4">
                                 <div class="form-group">
                                     <label for="product_thambnail" class="form-label fw-bold">
                                      product thambnail <span class="text-danger">*</span>
                                     </label><br>
                                     <input  type="file" id="product_thambnail"
                                         name="product_thambnail" class="form-control " 
                                         >
                                     @error('product_thambnail')
                                         <span class="text-danger">{{ $message }}</span>
                                     @enderror
                                 </div>
                             </div>
                         </div>
                         {{-- 6th Row End --}}

                        {{-- 7th Row Start --}}
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="selling_price" class="form-label fw-bold">Product Seling Price<span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="selling_price" class="form-control">
                                    @error('selling_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_qty" class="form-label fw-bold">Product Discount Price<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="discount_price" name="discount_price"
                                        class="form-control">
                                    @error('discount_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_qty" class="form-label fw-bold">Multi Image<span
                                            class="text-danger">*</span></label>
                                    <input type="file"  name="multi_image"
                                        class="form-control">
                                    @error('multi_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                      
                        </div>
                        {{-- 7th Row End --}}
                       
                      
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="product_tags_en" class="form-label fw-bold">Short Description (English)
                                        <span class="text-danger">*</span></label>
                                    <textarea  name="short_descp_en" class="form-control"></textarea>
                                    @error('short_descp_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="short_descp_hin" class="form-label fw-bold">Short Description (Hindi)
                                      <span class="text-danger">*</span></label>
                                  <textarea  name="short_descp_hin" class="form-control"></textarea>
                                  @error('short_descp_hin')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                        </div>

                        {{-- 8th Row end --}}
                       
                        {{-- 8th Row start --}}
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="long_descp_en" class="form-label fw-bold">Long Description (English)
                                        <span class="text-danger">*</span></label>
                                    <textarea id="editor3" name="long_descp_en" class="form-control"></textarea>
                                    @error('long_descp_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- 8th Row end --}}
                        {{-- 8th Row start --}}
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="product_tags_en" class="form-label fw-bold">Long Description (Hindi)
                                        <span class="text-danger">*</span></label>
                                    <textarea id="editor4" name="long_descp_hin" class="form-control"></textarea>
                                    @error('long_descp_hin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- 8th Row end --}}
                        <hr>
                        <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="hot_deals" name="hot_deals">
                                <label class="form-check-label" for="hot_deals">
                                    Hot Deal
                                </label>
                                  @error('hot_deals')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="featured" name="featured">
                                <label class="form-check-label" for="featured">
                                  Featured
                                </label>
                                  @error('featured')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="special_offer" name="special_offer">
                                <label class="form-check-label" for="special_offer">
                                  Special offer
                                </label>
                                  @error('special_offer')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="special_deals" name="special_deals">
                                <label class="form-check-label" for="special_deals">
                                  special deals
                                </label>
                                  @error('special_deals')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                      <hr>
                      
                      <button class="btn btn-success" type="submit">Submit</button>
                  </div>
                </form>


            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor4');
    </script>
@endsection
