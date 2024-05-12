@extends('admin.admin_master')

@section('admin_content')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Form Validation</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Forms</li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Validation</h4>
                        <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning"
                                href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate>
                                    <div class="row">
                                        <div class="col-6">
                                            
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" id="name" name="name" class="form-control" required value="{{ $editData->name }}"
                                                    >
                                                </div>
                                                <div class="form-control-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" id="email" name="email" class="form-control" required  value="{{ $editData->email }}"
                                                       >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Profile <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" id="profile" name="profile" class="form-control" required>
                                                </div>
                                               <div class="mt-3">
                                                @if(!empty($editData->profile))
                                                <img src="{{ asset('upload/'.$editData->profile) }}" alt="">
                                            @else
                                                <img src="{{ asset('upload/no_image.jpg') }}" alt="" style="width: 100px" height="100px">
                                            @endif
                                               </div>
                                            </div>
                                            

                                            <!-- /.box-body -->
                                        </div>
                                        <div class="col-6">
                                            
                                            <div class="form-group">
                                                <h5>Phone <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" id="phone" name="phone" class="form-control" required
                                                    >
                                                </div>
                                                <div class="form-control-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Address <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="address" id="address" name="address" class="form-control" required
                                                       >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>City <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="city" id="city" name="city" class="form-control" required
                                                       >
                                                </div>
                                            </div>


                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection