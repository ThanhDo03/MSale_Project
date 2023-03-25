@extends('customer.layout.index')
@section('content')
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row new_arrivals_area1">
                {{-- <h2>Shoppingg</h2> --}}
                @if (session('error1'))
                    <h5 style="color: red; font-size: 12px">{{ session('error1') }}</h5>
                @endif
                @if (session('message'))
                    <h5 style="color: #77a7ff; font-size: 12px">{{ session('message') }}</h5>
                @endif
                <div class="container1" id="container">
                    <div class="form-container1 sign-up-container1">
                        <form class="form" action="{{ route('auth.signup') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h1 class="h1">Create Account</h1>
                            <div class="social-container1">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fa fa-globe"></i></a>
                            </div>
                            <span class="span">or use your email for registration</span>
                            <input class="input" type="text" placeholder="Name" name="name" required />
                            <input class="input" type="email" placeholder="Email" name="email" required />
                            <input class="input" type="password" placeholder="Password" name="password" required />
                            <button type="submit" class="but">Sign Up</button>
                        </form>
                    </div>
                    <div class="form-container1 sign-in-container1">
                        <form class="form" action="{{ route('auth.signin') }}" method="POST">
                            @csrf
                            <h1 class="h1">Sign in</h1>
                            <div class="social-container1">
                                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="social"><i class="fa fa-globe"></i></a>
                            </div>
                            <span class="span">or use your account</span>
                            <input class="input" type="email" placeholder="Email" name="email_name" required />
                            <input class="input" type="password" placeholder="Password" name="pwd" required />
                            @if (session('error'))
                                <h5 style="color: red; font-size: 12px">{{ session('error') }}</h5>
                            @endif
                            <a href="#" class="a">Forgot your password?</a>
                            <button type="submit" class="but">Sign In</button>
                        </form>
                    </div>
                    <div class="overlay-container1">
                        <div class="overlay1">
                            <div class="overlay-panel1 overlay-left1">
                                <h1 class="h1">Welcome Back!</h1>
                                <p class="p">To keep connected with us please login with your personal info</p>
                                <button class="ghost but" id="signIn">Sign In</button>
                            </div>
                            <div class="overlay-panel1 overlay-right1">
                                <h1 class="h1">Hello, Friend!</h1>
                                <p class="p">Enter your personal details and start journey with us</p>
                                <button class="ghost but" id="signUp">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
