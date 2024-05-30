@extends('admin.admin_dashboard_master')
@section('content')
    <style>
        .border-green-top {
            border-top: 3px solid rgb(7, 7, 255);
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">edit Product</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                    <li class="breadcrumb-item active">edit Product</li>
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

                                <h4 class="card-title">Edit Product</h4>
                                <hr>
                                <form action="{{ route('product.update', $products->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{-- First Row Start --}}
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="brand_id" class="form-label fw-bold">
                                                    Select Brand <span class="text-danger">*</span>
                                                </label>
                                                <select id="brand_id" name="brand_id" class="form-select"
                                                    parsley-type="brand_id" required>
                                                    <option value="" selected disabled>Select Brand</option>
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}"
                                                            {{ $brand->id == $products->brand_id ? 'selected' : '' }}>
                                                            {{ $brand->brand_name_en }}
                                                        </option>
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
                                                    <option value="" selected="" disabled="">Select Category
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option
                                                            value="{{ $category->id }}"{{ $category->id == $products->category_id ? 'selected' : '' }}>
                                                            {{ $category->category_name_en }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="subcategory_id" class="form-label fw-bold">Select Subcategory
                                                    <span class="text-danger">*</span></label>
                                                <select id="subcategory_id" name="subcategory_id" class="form-select">
                                                    <option value="" selected="" disabled="">Select Subcategory
                                                    </option>


                                                    @foreach ($subcategories as $sub)
                                                        <option
                                                            value="{{ $sub->id }}"{{ $sub->id == $products->subcategory_id ? 'selected' : '' }}>
                                                            {{ $sub->subcategory_name_en }}</option>
                                                    @endforeach

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
                                                <label for="subsubcategory_id" class="form-label fw-bold">Select
                                                    Subsubcategory <span class="text-danger">*</span></label>
                                                <select id="subsubcategory_id" name="subsubcategory_id" class="form-select">
                                                    <option value="" selected="" disabled="">Select
                                                        Subsubcategory</option>

                                                    @foreach ($subsubcategories as $subsub)
                                                        <option
                                                            value="{{ $subsub->id }}"{{ $subsub->id == $products->subsubcategory_id ? 'selected' : '' }}>
                                                            {{ $subsub->sub_subcategory_name_en }}</option>
                                                    @endforeach


                                                </select>
                                                @error('subsubcategory_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_name_en" class="form-label fw-bold">Product Name
                                                    (English) <span class="text-danger">*</span></label>
                                                <input type="text" id="product_name_en" name="product_name_en"
                                                    class="form-control" required value="{{ $products->product_name_en }}">
                                                @error('product_name_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_name_hin" class="form-label fw-bold">Product Name
                                                    (Hindi) <span class="text-danger">*</span></label>
                                                <input type="text" id="product_name_hin" name="product_name_hin"
                                                    class="form-control" required
                                                    value="{{ $products->product_name_hin }}">
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
                                                <label for="product_code" class="form-label fw-bold">Product Code<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="product_code" name="product_code"
                                                    class="form-control" required value="{{ $products->product_code }}">
                                                @error('product_code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_qty" class="form-label fw-bold">Product Quantity<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="product_qty" name="product_qty"
                                                    class="form-control" required value="{{ $products->product_qty }}">
                                                @error('product_name_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_size_en" class="form-label fw-bold">
                                                    Product Size English <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" id="product_size_en" name="product_size_en"
                                                    class="form-control" data-role="tagsinput"
                                                    value="{{ old('product_size_en', $products->product_size_en) }}"
                                                    required>
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
                                                <label for="product_size_hin" class="form-label fw-bold">Product size
                                                    hindi<span class="text-danger">*</span></label>
                                                <input type="text" id="" name="product_size_hin"
                                                    class="form-control" data-role="tagsinput"
                                                    value="{{ $products->product_size_hin }}" required>
                                                @error('product_size_hin')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_color_en" class="form-label fw-bold">Product Color
                                                    English<span class="text-danger">*</span></label>
                                                <input type="text" id="product_color_en" name="product_color_en"
                                                    class="form-control" data-role="tagsinput"
                                                    value="{{ $products->product_color_en }}" required>
                                                @error('product_color_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_color_hin" class="form-label fw-bold">
                                                    product Color Hindi<span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="product_color_hin"
                                                    class="form-control"data-role="tagsinput"
                                                    value="{{ $products->product_color_hin }}" required>
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
                                                <input style="width: 58rem;" type="text" id="product_tags_en"
                                                    name="product_tags_en" class="form-control tags-input"
                                                    data-role="tagsinput" value="{{ $products->product_tags_en }}"
                                                    required>
                                                @error('product_tags_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_tags_hin" class="form-label fw-bold">
                                                    Product Tags (Hindi) <span class="text-danger">*</span>
                                                </label><br>
                                                <input style="width: 58rem;" type="text" id="product_tags_hin"
                                                    name="product_tags_hin" class="form-control tags-input"
                                                    data-role="tagsinput" value="{{ $products->product_tags_hin }}"
                                                    required>
                                                @error('product_tags_hin')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_thambnail" class="form-label fw-bold">
                                                    Product Thumbnail <span class="text-danger">*</span>
                                                </label><br>
                                                <input type="file" id="product_thambnail" name="product_thambnail"
                                                    class="form-control" onchange="mainThubleUrl(this)">
                                                @error('product_thambnail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <br>
                                                <img style="height: 50px;weidth:50px" src=""
                                                    id="mainThubleImage">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 6th Row End --}}

                                    {{-- 7th Row Start --}}
                                    <br>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="selling_price" class="form-label fw-bold">Product Seling
                                                    Price<span class="text-danger">*</span></label>
                                                <input type="number" name="selling_price" class="form-control"
                                                    value="{{ $products->selling_price }}" required>
                                                @error('selling_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="product_qty" class="form-label fw-bold">Product Discount
                                                    Price<span class="text-danger">*</span></label>
                                                <input type="text" id="discount_price" name="discount_price"
                                                    class="form-control" value="{{ $products->discount_price }}"
                                                    required>
                                                @error('discount_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="multi_image" class="form-label fw-bold">Multi Image<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" name="multi_image[]" class="form-control"
                                                    multiple="" id="multiImage">
                                                @error('multi_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div>
                                                    <div class="row" id="preview_img">
                                                        <!-- Image previews will be displayed here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- 7th Row End --}}


                                    <br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="short_descp_en" class="form-label fw-bold">Short Description
                                                    (English)
                                                    <span class="text-danger">*</span></label>
                                                <textarea name="short_descp_en" class="form-control" required value="">{{ $products->short_descp_en }}</textarea>
                                                @error('short_descp_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="short_descp_hin" class="form-label fw-bold">Short Description
                                                    (Hindi)
                                                    <span class="text-danger">*</span></label>
                                                <textarea name="short_descp_hin" class="form-control" required value="">{{ $products->short_descp_hin }}</textarea>
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
                                                <label for="long_descp_en" class="form-label fw-bold">Long Description
                                                    (English)
                                                    <span class="text-danger">*</span></label>
                                                <textarea id="long_descp_en" name="long_descp_en" class="form-control" required value="">{{ $products->long_descp_en }}</textarea>
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
                                                <label for="long_descp_hin" class="form-label fw-bold">Long Description
                                                    (Hindi)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <textarea id="long_descp_hin" name="long_descp_hin" class="form-control" required>{{ $products->long_descp_hin }}</textarea>
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
                                                <input class="form-check-input" type="checkbox" id="hot_deals"
                                                    name="hot_deals" value="1"
                                                    {{ $products->hot_deals ? 'checked' : '' }}>
                                                <label class="form-check-label" for="hot_deals">
                                                    Hot Deal
                                                </label>
                                                @error('hot_deals')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="featured"
                                                    name="featured" value="1"
                                                    {{ $products->featured ? 'checked' : '' }}>
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
                                                <input class="form-check-input" type="checkbox" id="special_offer"
                                                    name="special_offer" value="1"
                                                    {{ $products->special_offer ? 'checked' : '' }}>
                                                <label class="form-check-label" for="special_offer">
                                                    Special Offer
                                                </label>
                                                @error('special_offer')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" id="special_deals"
                                                    name="special_deals" value="1"
                                                    {{ $products->special_deals ? 'checked' : '' }}>
                                                <label class="form-check-label" for="special_deals">
                                                    Special Deals
                                                </label>
                                                @error('special_deals')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <hr>

                                    <button class="btn btn-success" type="submit">Add product</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->

                {{-- multi image start.. --}}
                <div class="row">

                    <div class="col-md-12">
                        <div class="box bt-3 border-info">
                            <div class="box-header">
                                <h4 class="box-title">Product Multiple Image <strong>Update</strong></h4>
                            </div>


                            <form method="post" action="{{ route('update.product.multi_image') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row row-sm">
                                    @foreach ($multiImages as $img)
                                    <div class="col-md-3">
                                        <div class="card">
                                            <img src="{{ asset($img->product_image) }}" class="card-img-top" style="height: 130px; width: 280px;">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="{{ $img->id }}" title="Delete Data"><i class="fa fa-trash"></i></a>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Change Image <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" name="multi_image[{{ $img->id }}]">
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-3 -->
                                    @endforeach
                                </div>
                            
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                                </div>
                                <br><br>
                            </form>
                            

                        </div>
                    </div>

                </div>

                <!-- end col -->
                <!-- end col -->
            </div> <!-- end row -->


            <!-- end row-->

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

    <script type="text/javascript">
        $(document).ready(function() {
            // Handle change event for category selection
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/category/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var subcategorySelect = $('select[name="subcategory_id"]').empty();
                            subcategorySelect.append(
                                '<option value="">Select Subcategory</option>');
                            $.each(data, function(key, value) {
                                subcategorySelect.append('<option value="' + value.id +
                                    '">' + value.subcategory_name_en + '</option>');
                            });
                            $('select[name="subsubcategory_id"]').empty().append(
                                '<option value="">Select Sub-Subcategory</option>'
                            ); // Reset sub-subcategory dropdown
                        },
                        error: function() {
                            alert('Unable to load subcategories');
                        }
                    });
                } else {
                    alert('Please select a category');
                    $('select[name="subcategory_id"]').empty().append(
                        '<option value="">Select Subcategory</option>');
                    $('select[name="subsubcategory_id"]').empty().append(
                        '<option value="">Select Sub-Subcategory</option>');
                }
            });

            // Handle change event for subcategory selection
            $('select[name="subcategory_id"]').on('change', function() {
                var subcategory_id = $(this).val();
                if (subcategory_id) {
                    $.ajax({
                        url: "{{ url('/category/subcategory/sub-subcategory/ajax') }}/" +
                            subcategory_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var subsubcategorySelect = $('select[name="subsubcategory_id"]')
                                .empty();
                            subsubcategorySelect.append(
                                '<option value="">Select Sub-Subcategory</option>');
                            $.each(data, function(key, value) {
                                subsubcategorySelect.append('<option value="' + value
                                    .id + '">' + value.sub_subcategory_name_en +
                                    '</option>');
                            });
                        },
                        error: function() {
                            alert('Unable to load sub-subcategories');
                        }
                    });
                } else {
                    alert('Please select a subcategory');
                    $('select[name="subsubcategory_id"]').empty().append(
                        '<option value="">Select Sub-Subcategory</option>');
                }
            });
        });
    </script>

    <script>
        function mainThubleUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThubleImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        document.getElementById('multiImage').addEventListener('change', function(event) {
            const previewContainer = document.getElementById('preview_img');
            previewContainer.innerHTML = ''; // Clear any existing previews

            const files = event.target.files;
            if (files) {
                Array.from(files).forEach(file => {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.maxWidth = '100px'; // Set the desired width
                            img.style.margin = '10px'; // Add some margin
                            previewContainer.appendChild(img);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;

                requiredFields.forEach(function(field) {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border', 'border-danger', 'rounded');
                    } else {
                        field.classList.remove('border', 'border-danger', 'rounded');
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection