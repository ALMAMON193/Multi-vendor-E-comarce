
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
                              
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                              
                                
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name English</th>
                                            <th>Product Name Hindi</th>
                                            <th>Product Code</th>
                                            <th>Product Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset($item->product_thambnail) }}" width="50px" height="50px" alt="Product Image">
                                                </td>
                                                <td>{{ $item->product_name_en }}</td>
                                                <td>{{ $item->product_name_hin }}</td>
                                                <td>{{ $item->product_code }}</td>
                                                <td>{{ $item->product_qty }}</td>
                                                
                                                <td>
                                                    <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <button class="btn btn-danger btn-sm delete-button" data-id="{{ $item->id }}">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                   
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const brandId = this.getAttribute('data-id');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to the delete route
                            window.location.href = "{{ route('brand.delete', '') }}/" + brandId;
                        }
                    });
                });
            });
        });
    </script>


@endsection 
