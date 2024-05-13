@extends('admin.admin_dashboard_master')
@section('content')
<div class="content-wrapper">
<div class="container-full">
<section>
  <div class="container py-5">
   
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{ !empty($adminData->profile) ? url('upload/admin_images/'.$adminData->profile) : url('upload/admin_images/no_image.jpg'

            )}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">

            <h6 class="my-3">{{ $adminData->name }}</h6>
            <p class="text-muted mb-1">{{ $adminData->desegregation  }}</p>
            <p class="text-muted mb-4">{{ $adminData->address }}</p>
            <div class="d-flex justify-content-center mb-2">
              <button  type="button" class="btn btn-outline-primary my-2 my-sm-0 " >123K</button>
              <span style="padding-left: 15px"></span>
              <button  type="button" class="btn btn-outline-primary my-2 my-sm-0" >234K</button>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="form-group">
                <form action="{{ route('admin.password.update') }}" method="POST">
                  @csrf <!-- CSRF protection -->
                  <div class="form-group">
                      <h5>Current Password <span class="text-danger">*</span></h5>
                      <div class="controls">
                          <input type="password" id="current_password" name="current_password" value="{{ $adminData->password }}" class="form-control" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <h5>New Password <span class="text-danger">*</span></h5>
                      <div class="controls">
                          <input type="password" id="new_password" name="new_password" class="form-control" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <h5>Confirm Password <span class="text-danger">*</span></h5>
                      <div class="controls">
                          <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control" required>
                      </div>
                  </div>
                  <div class="text-xs-right">
                      <button type="submit" class="btn btn-rounded btn-primary mb-5">Update</button>
                  </div>
              </form>
              
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>
	</div>
</div>
@endsection