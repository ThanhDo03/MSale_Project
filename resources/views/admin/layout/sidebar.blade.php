<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{route('display.profile',Auth::user()->id)}}" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="{{asset('image/thang.jpg')}}" alt="profile">
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{Auth::user()->email}}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                  </div>
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.admin')}}">
                    <i class="fa-sharp fa-solid fa-shop"></i>
                    <span class="menu-title">.     Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('auth.staff')}}">
                    <i class="fa-sharp fa-solid fa-user"></i>
                    <span class="menu-title">.     Staff</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/basic-table.html">
                    <i class="fa-sharp fa-solid fa-lock"></i>
                    <span class="menu-title">.     Authorization</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('show.brand')}}">
                    <i class="fa-sharp fa-solid fa-truck-fast"></i>
                    <span class="menu-title">.     Brand</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../pages/tables/basic-table.html">
                    <i class="fa-sharp fa-solid fa-file-export"></i>
                    <span class="menu-title">.     Export</span>
                </a>
            </li>
            <li class="nav-item sidebar-actions">
                <span class="nav-link">
                    <a href="{{route('upload.Product')}}" class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a product</a>
                </span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('display.product.sale')}}">
                    <i class="fa-brands fa-salesforce"></i>
                    <span class="menu-title">.     Product Sale %</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                    <span class="menu-title">Logout      .</span>

                    <i class="fa-sharp fa-solid fa-right-from-bracket"> </i>
                </a>
            </li>
        </ul>
    </nav>
   