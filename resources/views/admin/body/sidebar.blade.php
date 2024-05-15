<div  class="side-nav-open">

  <a href="{{ url('/dashboard') }}" class="side-bar-item">
      <i class="bi bi-graph-up"></i>
      <span style="font-weight: bold" class="side-bar-item-caption">Dashboard</span>
  </a>

   <!-- Brand Management Dropdown -->
   <div class="dropdown">
    <a class="dropdown-toggle side-bar-item" href="#" role="button" id="brandDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bi bi-people"></i>
        <span style="font-weight: bold" class="side-bar-item-caption">Brands</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="brandDropdown">
        <a class="dropdown-item" href="{{ route('add.brand') }}">Add Brand</a>
        <a class="dropdown-item" href="{{ route('all.brand') }}">All Brands</a>
    </div>
</div>



</div>
