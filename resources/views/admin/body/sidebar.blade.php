
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
          <a class="nav-link" href="index.html">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
          </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#brands-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Brands</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="brands-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('add.brand') }}">
                      <i class="bi bi-circle"></i><span>Add Brand</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('view.brand') }}">
                      <i class="bi bi-circle"></i><span>View Brand</span>
                  </a>
              </li>
          </ul>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Brand Category</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="category-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('add.category') }}">
                      <i class="bi bi-circle"></i><span>Add Category</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('view.category') }}">
                      <i class="bi bi-circle"></i><span>View Category</span>
                  </a>
              </li>
          </ul>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#subcategory-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Brand Sub Category</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="subcategory-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('add.subcategory') }}">
                      <i class="bi bi-circle"></i><span>Add Sub Category</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('view.subcategory') }}">
                      <i class="bi bi-circle"></i><span>View Sub Category</span>
                  </a>
              </li>
          </ul>
      </li>
   <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#subsubcategory-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Brand Sub SubCategory</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="subsubcategory-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('add.subsubcategory') }}">
                      <i class="bi bi-circle"></i><span>Add Sub SubCategory</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('view.subsubcategory') }}">
                      <i class="bi bi-circle"></i><span>View Sub SubCategory</span>
                  </a>
              </li>
          </ul>
      </li>
    <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="product-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="">
                      <i class="bi bi-circle"></i><span>Add Product</span>
                  </a>
              </li>
              <li>
                  <a href="">
                      <i class="bi bi-circle"></i><span>View Product</span>
                  </a>
              </li>
          </ul>
      </li>
       {{--  <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Brand Category</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="category-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('add.category') }}">
                      <i class="bi bi-circle"></i><span>Add Category</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('view.category') }}">
                      <i class="bi bi-circle"></i><span>View Category</span>
                  </a>
              </li>
          </ul>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Brand Category</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="category-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="{{ route('add.category') }}">
                      <i class="bi bi-circle"></i><span>Add Category</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('view.category') }}">
                      <i class="bi bi-circle"></i><span>View Category</span>
                  </a>
              </li>
          </ul>
      </li> --}}
  </ul>
</aside>
