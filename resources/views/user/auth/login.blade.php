@extends('user.layouts.includes.master')
@section('content')
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    @include('user.layouts.alerts.confirm')

    <section class="container login " id="container">
            {{-- Sign Up --}}
            <div class="form-container  sign-up-container">
                <form action="#">
                    <h1>Sign Up</h1>
                    <div class="social__media__container">
                        <a href="#" target="_blank" class="social facebook">
                            <i class="fa-brands fa-facebook "></i>
                        </a>
                        <a href="#" class="social twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="social instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <span class="under__social">
                        <a href="#" class="link signin-link">or use your email for registration
                        </a>
                    </span>
                    <div class="button-input-group">
                        <div class="group input-group">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="group input-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="group input-group">
                            <input type="password" placeholder="Password" required pattern=".{8,}">
                        </div>
                        <div class="alert-text signup__alert">
                            <span class="help__text">At least 8 character</span>
                        </div>
                        <div class="group button-group">
                            <button class="signup-btn" onclick="return false;">Sign Up</button>
                        </div>
                    </div>

                </form>
            </div>

            {{-- Sign In --}}
            <div class="form-container  sign-in-container">
                <form action="#">
                    <h1>Sign In</h1>
                    <div class="social__media__container">
                        <a href="#" target="_blank" class="social facebook">
                            <i class="fa-brands fa-facebook "></i>
                        </a>
                        <a href="#" class="social twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="social instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                    <span class="under__social">
                        <a href="#" class="link signup-link">or use your account</a>
                    </span>

                    <div class="button-input-group">
                        <div class="group input-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="group input-group">
                            <input type="password" placeholder="Password" required pattern=".{8,}">
                        </div>
                        <div class="alert-text signup__alert">
                            <span class="help__text">At least 8 character</span>
                        </div>
                        <div class="form-link forgot">
                            <a href="#" class="login-link">Forgot your password?</a>
                        </div>
                        <div class="group button-group">
                            <button class="signin-btn" onclick="return false;">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>Please login your personal info</p>

                        <div class="group button-group">
                            <button class="ghost" id="signIn">Sign in</button>
                        </div>
                        <div class="mt-4">
                            <p>Inspired by <a href="https://codepen.io/Rittenhouse" target="_blank">Najez soft</a></p>
                        </div>
                    </div>

                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start your journey with us</p>

                        <div class="group button-group">
                            <button class="ghost" id="signUp">Sign up</button>
                        </div>

                    </div>
                </div>
            </div>
        <script>
            const signUpButton = document.getElementById("signUp");
            const signInButton = document.getElementById("signIn");
            const container = document.getElementById("container");

            signUpButton.addEventListener("click", () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener("click", () => {
                container.classList.remove("right-panel-active");
            });
        </script>
    </section>
@endsection
