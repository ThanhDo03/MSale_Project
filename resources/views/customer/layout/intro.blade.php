<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">

        <nav class="classy-navbar" id="essenceNav">

            <a class="nav-brand" href="{{ route('customer') }}"><img src="{{asset('image/Favicon/Lorever.png')}}" alt=""></a>

            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <div class="classy-menu">

                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <div class="classynav">
                    <ul>
                        <li><a href="{{ route('customer') }}">Shop</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Women's Collection</li>
                                    <li><a href="shop.html">Dresses</a></li>
                                    <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                    <li><a href="shop.html">T-shirts</a></li>
                                    <li><a href="shop.html">Rompers</a></li>
                                    <li><a href="shop.html">Bras &amp; Panties</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Men's Collection</li>
                                    <li><a href="shop.html">T-Shirts</a></li>
                                    <li><a href="shop.html">Polo</a></li>
                                    <li><a href="shop.html">Shirts</a></li>
                                    <li><a href="shop.html">Jackets</a></li>
                                    <li><a href="shop.html">Trench</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li class="title">Kid's Collection</li>
                                    <li><a href="shop.html">Dresses</a></li>
                                    <li><a href="shop.html">Shirts</a></li>
                                    <li><a href="shop.html">T-shirts</a></li>
                                    <li><a href="shop.html">Jackets</a></li>
                                    <li><a href="shop.html">Trench</a></li>
                                </ul>
                                <div class="single-mega cn-col-4">
                                    <img src="{{ asset('image/bG/bG-Accessories.jpg') }}" alt="">
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('customer') }}">Home</a></li>
                                <li><a href="single-product-details.html">Product Details</a></li>
                                <li><a href="{{route('customer.checkout')}}">Checkout</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="regular-page.html">Regular Page</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        @if (Route::has('auth.signin'))
                            @auth
                                <li>
                                    <a href="{{route('show.account')}}"> <i class="fa-sharp fa-solid fa-user"></i>
                                        {{ Auth::user()->name }} </a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('show.account')}}"><i class="fa-sharp fa-solid fa-user"></i> Profile </a></li>
                                        <li><a href="{{ url('/ShowCart', Auth::id()) }} "><i
                                                    class="fa-sharp fa-solid fa-bag-shopping"></i> Cart </a></li>
                                        <li><a href="{{ url('/Logout') }}"><i
                                                    class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout </a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ route('welcome') }}">Sign In</a></li>
                            @endauth
                        @endif
                    </ul>
                </div>

            </div>
        </nav>

        <div class="header-meta d-flex clearfix justify-content-end">

            <div class="search-area">
                <form action="{{ route('customer.search') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="search" name="query" id="query" placeholder="Search products...">
                    <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            {{-- <div class="user-login-info">
                <a href="{{url('/Logout')}}"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
            </div> --}}
            <div class="favourite-area">
                <a href="#"><i class="fa-solid fa-heart fa-lg" style="color: #ff084e;"></i></a>
            </div>
            <div class="cart-area">
                <a id="essenceCartBtn"><i class="fa-sharp fa-solid fa-bag-shopping fa-lg"></i>
                    @if (Auth::check())
                        <span>{{ $cartCount }}</span>
                    @endif
                </a>
                {{-- <a href="{{url('/ShowCart',Auth::id())}}" id="essenceCartBtn"><i class="fa-sharp fa-solid fa-bag-shopping fa-lg"></i><span>3</span></a> --}}
            </div>
        </div>
    </div>
</header>
<div class="cart-bg-overlay"></div>
<div class="right-side-cart-area">

    <div class="cart-button">
        <a href="#" id="rightSideCart"><i class="fa-sharp fa-solid fa-bag-shopping fa-lg"></i>
            @if (Auth::check())
                <span>{{ $cartCount }}</span>
            @endif
        </a>
    </div>
    <div class="cart-content d-flex">
        <div class="cart-list">
            @if (Auth::check())
                @foreach ($cartItems as $data)
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="{{ asset('image/Product/' . $data->product->product_image) }}" class="cart-thumb"
                                alt="">

                            <div class="cart-item-desc">
                                <span class="product-remove"><i onclick = "window.location = './Delete/{{$data->product_id}}'" class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">{{ $data->product->brand->name }}</span>
                                <h6>{{ $data->product->product_name }}</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Quantity: {{ $data->product_amount }}</p>
                                <p class="color">Color: Red</p>
                                <p class="price">${{ $data->product->product_price }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="cart-amount-summary">
            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> 
                    @if(Auth::check())
                        <span>${{$total}}</span>
                    @endif
                </li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-15%</span></li>
                <li><span>total:</span> 
                    @if(Auth::check())
                        <span>${{$percent_15}}</span>
                    @endif
                </li>
            </ul>
            <div class="checkout-btn mt-100">
                <a href="{{route('customer.checkout')}}" class="btn essence-btn">check out</a>
                <a href="{{ url('/ShowCart', Auth::id()) }}" class="btn essence-btn">view all</a>
            </div>
        </div>
    </div>
</div>
