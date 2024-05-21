@extends('admin.admin_dashboard_master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <br>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">sub sub category</a></li>
                        <li class="breadcrumb-item active">All Sub Sub Category</li>
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
                    <h3 class="pt-3">Sub Sub Category Records</h3>
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
                                    <th>Sub Category</th>
                                    <th>S.S.C.N-English</th>
                                    <th>S.S.C.N-Hindi</th>                                  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subsubcategories as $item)
                                    <tr>
                                       
                                        <td>{{ $item['category']['category_name_en'] }}</td>
                                        <td>{{ $item['subcategory']['subcategory_name_en'
                                            
                                        ]}}</td>
                                        <td>{{ $item->sub_subcategory_name_en }}</td>
                                        <td>{{ $item->sub_subcategory_name_hin
                                            
                                        }}
                                        <td>
                                            <a href="{{ route('subsubcategory.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
    

@endsection
