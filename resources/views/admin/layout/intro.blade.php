<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.html">Shoppingg</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="{{route('admin.search')}}" method="POST">
                    @csrf
                    <button class="navbar-toggler navbar-toggler align-self-center" type="submit" data-toggle="minimize">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search product" name="SearchProduct" id="SearchProduct">
                    </div>
                </form>
            </div>
        </div>
    </nav>