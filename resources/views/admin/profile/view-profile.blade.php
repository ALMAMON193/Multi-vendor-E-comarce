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
              <button  type="button" class="btn btn-outline-primary my-2 my-sm-0" >234K</button>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6
                  h3>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $adminData->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $adminData->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(088) {{ $adminData->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">City</h6>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $adminData->city }}</p>
              </div>
            </div>
            <hr>
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
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>
	</div>
</div>
@endsection