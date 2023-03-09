<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Essence - Fashion Ecommerce Template</title>

    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://kit.fontawesome.com/f52718c374.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f52718c374.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('customer_css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('customer_css/style.css')}}">
    <script nonce="d4d17f98-81e8-4f74-b70a-34929b581277">
    (function(w, d) {
        ! function(f, g, h, i) {
            f[h] = f[h] || {};
            f[h].executed = [];
            f.zaraz = {
                deferred: [],
                listeners: []
            };
            f.zaraz.q = [];
            f.zaraz._f = function(j) {
                return function() {
                    var k = Array.prototype.slice.call(arguments);
                    f.zaraz.q.push({
                        m: j,
                        a: k
                    })
                }
            };
            for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
            f.zaraz.init = () => {
                var m = g.getElementsByTagName(i)[0],
                    n = g.createElement(i),
                    o = g.getElementsByTagName("title")[0];
                o && (f[h].t = g.getElementsByTagName("title")[0].text);
                f[h].x = Math.random();
                f[h].w = f.screen.width;
                f[h].h = f.screen.height;
                f[h].j = f.innerHeight;
                f[h].e = f.innerWidth;
                f[h].l = f.location.href;
                f[h].r = g.referrer;
                f[h].k = f.screen.colorDepth;
                f[h].n = g.characterSet;
                f[h].o = (new Date).getTimezoneOffset();
                if (f.dataLayer)
                    for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                            ...t[1],
                            ...u[1]
                        }))))) zaraz.set(s[0], s[1], {
                        scope: "page"
                    });
                f[h].q = [];
                for (; f.zaraz.q.length;) {
                    const v = f.zaraz.q.shift();
                    f[h].q.push(v)
                }
                n.defer = !0;
                for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
                    "_zaraz_"))).forEach((x => {
                    try {
                        f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                    } catch {
                        f[h]["z_" + x.slice(7)] = w.getItem(x)
                    }
                }));
                n.referrerPolicy = "origin";
                n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                m.parentNode.insertBefore(n, m)
            };
            ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body>

    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">

            <nav class="classy-navbar" id="essenceNav">

                <a class="nav-brand" href="index.html">Shoppingg</a>

                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <div class="classy-menu">

                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
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
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            @if (Route::has('auth.signin'))
                                @auth
                                    <li><a href="contact.html"> <i class="fa-sharp fa-solid fa-user"></i> {{Auth::user()->email}}</a></li>
                                @else
                                    <li><a href="{{route('welcome')}}">Sign In</a></li>
                                @endauth
                            @endif
                        </ul>
                    </div>

                </div>
            </nav>

            <div class="header-meta d-flex clearfix justify-content-end">

                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                
                <div class="user-login-info">
                    <a href="{{url('/Logout')}}"><i class="fa-sharp fa-solid fa-right-from-bracket"></i></a>
                </div>

                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><i class="fa-sharp fa-solid fa-bag-shopping"></i><span>3</span></a>
                </div>
            </div>
        </div>
    </header>


    <div class="cart-bg-overlay"></div>
    <div class="right-side-cart-area">

        <div class="cart-button">
            <a href="#" id="rightSideCart"><i class="fa-sharp fa-solid fa-bag-shopping"></i><span>3</span></a>
        </div>
        <div class="cart-content d-flex">

            <div class="cart-list">

                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">

                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">

                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">

                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="cart-amount-summary">
                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>


    <section class="welcome_area bg-img background-overlay" style="background-image: url('/image/gallery/Slider1.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="#" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="{{asset('image/Product/product-3.jpg')}}" alt="">

                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url('/image/bG/bG-Clothing.jpg');">
                        <div class="catagory-content">
                            <a href="#">Clothing</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url(image/bG/bG-Shose.jpg);">
                        <div class="catagory-content">
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img"
                        style="background-image: url(image/bG/bG-Accessories.jpg);">
                        <div class="catagory-content">
                            <a href="#">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="{{asset('image/Product/product-3.jpg')}}" alt="">

                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay"
                        style="background-image: url(image/bG/bG-Body.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="{{asset('image/Product/product-3.jpg')}}" alt="">

                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-2.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-3.jpg" alt="">

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">

                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.00</span> $55.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-product-wrapper">

                            <div class="product-img">
                                <img src="img/product-img/product-4.jpg" alt="">

                                <img class="hover-img" src="img/product-img/product-5.jpg" alt="">

                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>

                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <div class="hover-content">

                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="brands-area d-flex align-items-center justify-content-between">

        <div class="single-brands-logo">
            <img src="{{asset('image/Logo/Nike-Logo.png')}}" alt="">
        </div>

        <div class="single-brands-logo">
            <img src="{{asset('image/Logo/Adidas-Logo.png')}}" alt="">
        </div>

        <div class="single-brands-logo">
            <img src="{{asset('image/Logo/Vans-Logo.png')}}" alt="">
        </div>

        <div class="single-brands-logo">
            <img src="{{asset('image/Logo/MLB-Logo.png')}}" alt="">
        </div>

        <div class="single-brands-logo">
            <img src="{{asset('image/Logo/New-balance-Logo.png')}}" alt="">
        </div>

       
    </div>


    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">

                        <div class="footer-logo mr-50">
                            <a href="#">Shoppingg</a>
                        </div>

                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-end">

                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                    class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i
                                    class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i
                                    class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>

                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{asset('customer_js/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('customer_js/popper.min.js')}}"></script>
    <script src="{{asset('customer_js/bootstrap.min.js')}}"></script>  
    <script src="{{asset('customer_js/plugins.js')}}"></script>  
    <script src="{{asset('customer_js/classy-nav.min.js')}}"></script>  
    <script src="{{asset('customer_js/active.js')}}"></script>  

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"79b5927e8c131fa6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>