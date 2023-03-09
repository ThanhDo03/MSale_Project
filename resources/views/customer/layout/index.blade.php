@INCLUDE('customer.layout.head')
<div id="wrapper">
    @INCLUDE('customer.layout.intro')
    <div CLASS="container-fluid">
        @yield('content')
    </div>
    @INCLUDE('customer.layout.footer')
</div>
@INCLUDE('customer.layout.js')
