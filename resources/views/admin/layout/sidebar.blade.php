    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                {{-- <li class="nav-item nav-profile">
                <a href="{{route('display.profile',Auth::user()->id)}}" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="{{asset('image/Avatar/'.Auth::user()->avatar)}}" alt="profile">
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span> 
                    <span class="text-secondary text-small">Project Manager</span>
                  </div>
                </a>
            </li> --}}
                {{-- <li class="nav-item sidebar-actions">
                <span class="nav-link">
                    <p class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Product</p>
                </span>
            </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.admin') }}">
                        <i class="fa-solid fa-shop fa-sm"></i>
                        <span class="menu-title">. Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.admin') }}">
                        <i class="fa-solid fa-gear fa-sm"></i>
                        <span class="menu-title">. Product</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.admin') }}">
                        <i class="fa-solid fa-gear fa-sm"></i>
                        <span class="menu-title">. Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.brand') }}">
                        <i class="fa-solid fa-gear fa-sm"></i>
                        <span class="menu-title">. Brand</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('display.product.sale') }}">
                        <i class="fa-solid fa-gear fa-sm"></i>
                        <span class="menu-title">. Product Sale %</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('import.index') }}">
                        <i class="fa-solid fa-gear fa-sm"></i>
                        <span class="menu-title">. Import data</span>
                    </a>
                </li>

                {{-- <li class="nav-item sidebar-actions">
                <span class="nav-link">
                    <p class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Administrators</p>
                </span>
            </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.staff') }}">
                        <i class="fa-sharp fa-solid fa-user"></i>
                        <span class="menu-title">. Staff</span>
                    </a>
                </li>

                {{-- <li class="nav-item"> 
                <a class="nav-link collapse" href="#ui-basic" data-toggle="collapse" aria-expanded="false" aria-controls="ui-basic">
                    <i class="fa-sharp fa-solid fa-user"></i>
                    <span class="menu-title">. Staff</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic" style="">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('auth.staff')}}"> Staff </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li> --}}
            </ul>
        </nav>
