

@extends('admin.admin_dashboard_master')
@section('content') 

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Data Tables</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Data Tables</li>
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

                                <h4 class="card-title">Buttons Example</h4>
                                <p class="card-title-desc">The Buttons extension for DataTables
                                    provides a common set of options, API methods and styling to display
                                    buttons on a page that will interact with a DataTable. The core library
                                    provides the based framework upon which plug-ins can built.
                                </p>
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
                    </div> <!-- end col -->
                </div> <!-- end row -->

              
                <!-- end row-->
                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Upcube.
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

