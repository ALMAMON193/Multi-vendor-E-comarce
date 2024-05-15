<nav class="navbar fixed-top px-0 shadow-sm bg-white">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                <img class="nav-logo-sm mx-2" src="{{ asset('images/menu.svg') }}" alt="logo" />
            </span>
            <img class="nav-logo  mx-2" src="{{ asset('images/logo.png') }}" alt="logo" />
        </a>
        

        <div class="float-right h-auto d-flex pt-2 " style="margin-right: 40px">
            <div class="user-dropdown">
                
                <span class="icon-nav m-0 h5" onclick="MenuBarClickHandler()">
                    <img class="nav-logo-sm mx-2" src="{{ asset('images/notification.png') }}" alt="logo" style="height: 30px" />
                </span>
                <img class="icon-nav-img"
                    src="{{ !empty($adminData->profile) ? url('upload/admin_images/' . $adminData->profile) : url('upload/admin_images/no_image.jpg') }}"
                    alt="" />
                   

                <div class="user-dropdown-content ">
                    <div class="mt-4 text-center">
                        <img class="icon-nav-img"
                            src="{{ !empty($adminData->profile) ? url('upload/admin_images/' . $adminData->profile) : url('upload/admin_images/no_image.jpg') }}"
                            alt="" />
                        <h6>User Name</h6>
                        <hr class="user-dropdown-divider  p-0" />
                    </div>
                    <a href="{{ route('admin.view.profile') }}" class="side-bar-item">
                        <span class="side-bar-item-caption">Profile</span>
                    </a>
                    <a href="{{ route('admin.change.password') }}" class="side-bar-item">
                        <span class="side-bar-item-caption">Change Passowrd</span>
                    </a>
                    <a href="{{ route('admin.logout') }}" class="side-bar-item">
                        <span class="side-bar-item-caption">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
