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
                            <select id="pageLengthSelect">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>

                        </div>
                        <div class="col-md-7"></div>
                        <div class="col-md-3"> <input class="form-control form-control-sm" style="width: 100%;"
                                type="text" id="searchInput" placeholder="Search..."></div>

                    </div>
                    <br>
                    <div class="table-responsive">
                       <!-- all-brand.blade.php -->

<table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Brand_en</th>
            <th>Brand_Hin</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($brand as $item)
    <tr>
        <td><img src="{{ asset('public/uploads/brand/' . $item->image) }}" width="100px" height="100px"></td>
        <td>{{ $item->brand_name_en }}</td>
        <td>{{ $item->brand_name_hin }}</td>
        <td>
            <a href="" class="btn btn-primary btn-sm">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection

