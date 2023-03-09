@INCLUDE('admin/layout.head')
<!-- Page Wrapper -->
<div id="wrapper">
    @INCLUDE('admin/layout.intro')
    <!-- Content Wrapper -->
            @INCLUDE('admin/layout.sidebar')
            <!-- Begin Page Content -->
            <div CLASS="container-fluid">
                @yield('body')
            </div>
            <!-- /.container-fluid -->
        <!-- End of Main Content -->
        @INCLUDE('admin/layout.footer')
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@INCLUDE('admin/layout.js')