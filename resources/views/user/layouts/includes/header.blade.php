<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>e-commerce</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/bootstrap.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('public/user/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('public/user/') }}images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public/user/') }}css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    {{-- font-awesome --}}
    <link rel="stylesheet" href="{{ asset('public/user/fontawesome/css/all.min.css') }}">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/user/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/owl.carousel.min.css') }}">
    <link rel="stylesoeet" href="{{ asset('public/user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">


    <!-- by nada -->
    <link rel="stylesheet" href="{{ asset('public/user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user/css/owl.carousel.min.css') }}">
</head>
</head>

<body>

    <!-- header start-->
    <div class="header">
        <div class="d-flex justify-content-between">
            <div class="tabs d-flex">
                <div class="adults"><a href="#"><span>Adults</span></a></div>
                <div class="Home"><a href="#"><span>Home</span></a></div>
                <div class="Kids active"><a href="#"><span>Kids</span></a></div>
            </div>
            <div class="side d-flex">
                <div class="pr"><span><span class="under-liner">EXTRA 10% OFF</span> ON FIRST ORDER</span></div>
                <div class="icons d-flex">
                    <div><i class="fa-regular fa-user"></i></div>
                    <div class="num">
                        <i class="fa-regular fa-heart"></i>
                        <div class="abs-num">
                            <p class="">0</p>
                        </div>
                    </div>
                    <div class="num">
                        <i class="fa-regular fa-gem"></i>
                        <div class="abs-num">
                            <p class="">0</p>
                        </div>
                    </div>
                    <div><i class="fa-solid fa-headset"></i></div>
                    <div><i class="fa-solid fa-globe"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- nav start -->
    <!-- شاشات كبيره -->
    <div class="navbar-on-lg margin fixed-top shadow" id="navbar1">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <div class="head d-flex align-items-center">
                    <div class="logo">
                        <a href="#"><img class="logo-logo" src="{{ asset('public/user/images/img/icons/logo.png')}}"></a>
                    </div>
                    <div class="links">
                        <ul class="d-flex">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('products')}}">Products</a></li>
                            <li><a href="{{route('contactUs')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="search d-flex align-items-center">
                    <div class="srch d-flex">
                        <input type="text" placeholder="Search the store">
                        <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- شاشات صغيره-->
    <div class="navbar-on-sm margin fixed-top" id="nav-small">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div class="left d-flex">
                    <i class="fa-solid fa-align-justify" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="center logo">
                    <a href="#"><img class="logo-logo" src="{{ asset('public/user/images/img/icons/logo.png')}}"></a>
                </div>
                <div class="right d-flex">
                    <i class="fa-regular fa-circle-user"></i>
                    <div class="num d-flex">
                        <i class="fa-regular fa-gem"></i>
                        <div class="abs-num">
                            <p class="">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div>
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="body-side">
            <a href="{{route('home')}}">
                <div class="bor">
                    <div class="pading-side d-flex justify-content-between align-items-center">
                        <h3>Home</h3>
                        <i class="fa-solid fa-chevron-right "></i>
                    </div>
                </div>
            </a>
            <a href="{{route('about')}}">
                <div class="bor">
                    <div class="pading-side d-flex justify-content-between align-items-center">
                        <h3>About</h3>
                        <i class="fa-solid fa-chevron-right "></i>
                    </div>
                </div>
            </a>
            <a href="{{route('products')}}">
                <div class="bor">
                    <div class="pading-side d-flex justify-content-between align-items-center">
                        <h3>Products</h3>
                        <i class="fa-solid fa-chevron-right "></i>
                    </div>
                </div>
            </a>
            <a href="{{route('contactUs')}}">
                <div class="bor">
                    <div class="pading-side d-flex justify-content-between align-items-center">
                        <h3>Contact</h3>
                        <i class="fa-solid fa-chevron-right "></i>
                    </div>
                </div>
            </a>
            <!-- account -->
            <div class="account">
            <a href="#">
                <div class="bor">
                    <div class="pading-side d-flex  align-items-center">
                        <i class="fa-regular fa-circle-user"></i>
                        <p> Sign In</p>
                    </div>
                </div>
            </a>
            <a href="#">
            <div class="bor">
                <div class="pading-side d-flex  align-items-center">
                    <i class="fa-regular fa-user"></i>
                    <p> Create an Account</p>
                </div>
            </div>
            </a>
            <a href="#">
                <div class="bor">
                    <div class="pading-side d-flex  align-items-center">
                        <i class="fa-regular fa-heart"></i>
                        <p> My Wish List</p>
                    </div>
                </div>
            </a>
            <div class="exrea">
                <div class="pading-side d-flex  align-items-center">
                    <p> EXTRA 10% OFF ON FIRST ORDER</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- test -->


    <script>
        let nav_small = document.getElementById("nav-small");
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 50) {
                nav_small.classList.remove("margin")
                console.log("3.5rem")
            } else {
                nav_small.classList.add("margin")
                console.log("0rem")
            }
        });
        let navbarr1 = document.getElementById("navbar1");
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 50) {
                navbarr1.classList.remove("margin")
                console.log("top")
            } else {
                navbarr1.classList.add("margin")
                console.log("bottom")
            }
        });
    </script>
