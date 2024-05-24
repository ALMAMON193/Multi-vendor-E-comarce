{{-- @extends('admin.admin_dashboard_master')
@section('content')

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="{{ !empty($adminData->profile) ? url('upload/admin_images/'.$adminData->profile) : url('upload/admin_images/no_image.jpg'

          )}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
          <h2>{{ $adminData->name  }}</h2>
          <h3>{{ $adminData->desegregation  }}</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    
  </div>
</section>
@endsection --}}

@extends('admin.admin_dashboard_master')
@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Admin Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">admin</a></li>
                                    <li class="breadcrumb-item active">Prifile </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
            <div class="row">
              <div class="col-xl-4">

                <div class="card">
                  <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          
                    <img src="{{ !empty($adminData->profile) ? url('uploads/admin_images/'.$adminData->profile) : url('uploads/no_image.jpg'
          
                    )}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;height:150px;">
                    <h2>{{ $adminData->name  }}</h2>
                    <h3>{{ $adminData->desegregation  }}</h3>
                    <div class="social-links mt-2">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                </div>
          
              </div>

              <div class="col-xl-8">

                <div class="card">
                  <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
          
                      <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                      </li>
          
                    </ul>
                    <div class="tab-content pt-2">
          
                      <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                      
                        <h5 class="card-title">Profile Details</h5>
          
                        
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Full Name</h6
                                    h3>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ $adminData->name }}</p>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ $adminData->email }}</p>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">(088) {{ $adminData->phone }}</p>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">City</h6>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ $adminData->city }}</p>
                                </div>
                              </div>
                              
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{ $adminData->address }}</p>
                                </div>
                              </div>
                             <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary mt-4">Edit profile
                            </a>
                          
          
                      
          
                    </div><!-- End Bordered Tabs -->
          
                  </div>
                </div>
          
              </div>
            </div>
                <!-- container-fluid -->
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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            });
        </script>
    @endsection
