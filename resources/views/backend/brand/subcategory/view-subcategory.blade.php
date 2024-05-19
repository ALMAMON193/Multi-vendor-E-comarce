@extends('admin.admin_dashboard_master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Brands</a></li>
                        <li class="breadcrumb-item active">All brand</li>
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
                    <h3 class="pt-3">Brand Records</h3>
                    <hr>

                    <div class="row">
                        <div class="col-md-2">
                            <select id="pageLengthSelect" class="form-select">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="col-md-7"></div>
                        <div class="col-md-3">
                            <input class="form-control form-control-sm" style="width: 100%;" type="text" id="searchInput" placeholder="Search...">
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    <th>Category</th>
                                    <th>Brand_en</th>
                                    <th>Brand_Hin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcategories as $item)
                                    <tr>
                                        
                                        <td>{{ $item->subcategory_name_en }}</td>
                                        <td>{{ $item->subcategory_name_hin }}</td>
                                        <td>
                                            <a href="{{ route('brand.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm delete-button" data-id="{{ $item->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
