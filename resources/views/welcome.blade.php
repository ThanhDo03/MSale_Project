<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Register - Shoppingg</title>
    <link rel="stylesheet" href="{{asset('css/style_welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <h2>Shoppingg</h2>
    @if(session('error1'))
    <h5 style="color: red">{{session('error1')}}</h5>
    @endif
    @if(session('message'))
    <h5 style="color: #77a7ff">{{session('message')}}</h5>
    @endif
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{route('auth.signup')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fa fa-globe"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="name" required />
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Password" name="password" required />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('auth.signin')}}" method="POST">
                @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fa fa-globe"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="email_name" required />
                <input type="password" placeholder="Password" name="pwd" required />
                @if(session('error'))
                <h5 style="color: red">{{session('error')}}</h5>
                @endif
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/welcome.js')}}"></script>
</body>

</html>