@extends('user.layouts.includes.master')
@section('content')
@include('admin.layouts.alerts.success')
@include('admin.layouts.alerts.error')
@include('user.layouts.alerts.confirm')

<!-- home -->
<section class="home">
    <!-- main -->
    <div class="main">
        <div class="today1"><a href="#"><img src="{{ asset('public/user/images/img/banner-kids-2.jpg')}}"></a></div>
        <div class="p-main">
            <p>FIRST PURCHASE OFFER: TAKE 30% OFF SHOPWIDE. CODE APPLIED AT CHECKOUT*</p>
        </div>
        <div class="today1"><a href="#"><img src="{{ asset('public/user/images/img/banner-kids-2.jpg')}}"></a></div>
        <div class="p-main">
            <p>FIRST PURCHASE OFFER: TAKE 30% OFF SHOPWIDE. CODE APPLIED AT CHECKOUT*</p>
        </div>
        <div class="today1"><a href="#"><img src="{{ asset('public/user/images/img/banner-kids-2.jpg')}}"></a></div>
    </div>

    <!-- BABYGIRLS -->
    <div class="girl mt-4">
        <div class="row ">
            <div class="col-xxl-5 col-xl-5 col-12 image-hight">
                <div class="baby ">
                    <img class="babygirl h-100 w-100" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                    <div class="abs">
                        <div class="title">
                            <p>New Collection</p>
                            <h2>BABY GIRLS</h2>
                            <button class="main-btn">SHOP NOW</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-12 row">

                <div class="owl-carousel owl-carousel1 owl-theme mar n_slid1">
                    <div class="item">
                        <div class="imgage imgage1" style="background-image: url(../../../../public/user/images/banner-bg.png);">
                            <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}" id="girl-img"></div>
                                <div class="hover-card">
                                    <button class="hover-but">ADD TO CART</button>
                                    <div class="d-flex wish-list ">
                                        <i class="fa-regular fa-heart"></i>
                                        <p>add to wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prag">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div>
                                    <h3>ELLA - HALOTHEMES</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <a href="#" class="">
                                <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                            </a>
                            <p class="price">$19.99</p>

                            <div class="circlr-color d-flex">
                                <div class="big">
                                    <div class="black coloor"></div>
                                    <div class="p-abs" id="girl-black">black
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="bige coloor"></div>
                                    <div class="p-abs" id="girl-bige">bige
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="gray coloor"></div>
                                    <div class="p-abs" id="girl-gray">gray
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="orange coloor"></div>
                                    <div class="p-abs" id="girl-orange">orange
                                        <div class="shap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgage imgage1">
                        <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}" ></div>
                                <div class="hover-card">
                                    <button class="hover-but">ADD TO CART</button>
                                    <div class="d-flex wish-list ">
                                        <i class="fa-regular fa-heart"></i>
                                        <p>add to wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prag">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div>
                                    <h3>ELLA - HALOTHEMES</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <a href="#" class="">
                                <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                            </a>
                            <p class="price">$19.99</p>

                            <div class="circlr-color d-flex">
                                <div class="big">
                                    <div class="black coloor"></div>
                                    <div class="p-abs">black
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="bige coloor"></div>
                                    <div class="p-abs">bige
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="gray coloor"></div>
                                    <div class="p-abs">gray
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="orange coloor"></div>
                                    <div class="p-abs">orange
                                        <div class="shap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgage imgage1">
                        <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                                <div class="hover-card">
                                    <button class="hover-but">ADD TO CART</button>
                                    <div class="d-flex wish-list ">
                                        <i class="fa-regular fa-heart"></i>
                                        <p>add to wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prag">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div>
                                    <h3>ELLA - HALOTHEMES</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <a href="#" class="">
                                <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                            </a>
                            <p class="price">$19.99</p>

                            <div class="circlr-color d-flex">
                                <div class="big">
                                    <div class="black coloor"></div>
                                    <div class="p-abs">black
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="bige coloor"></div>
                                    <div class="p-abs">bige
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="gray coloor"></div>
                                    <div class="p-abs">gray
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="orange coloor"></div>
                                    <div class="p-abs">orange
                                        <div class="shap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- BABYGIRLS -->
    <div class="girl boy mt-5">
        <div class="row ">

            <div class="col-xxl-7 col-xl-7 col-12 row">

                <div class="owl-carousel owl-carousel1 owl-theme mar n_slid1">
                    <div class="item">
                        <div class="imgage imgage1">
                            <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                                <div class="hover-card">
                                    <button class="hover-but">ADD TO CART</button>
                                    <div class="d-flex wish-list ">
                                        <i class="fa-regular fa-heart"></i>
                                        <p>add to wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prag">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div>
                                    <h3>ELLA - HALOTHEMES</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <a href="#" class="">
                                <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                            </a>
                            <p class="price">$19.99</p>

                            <div class="circlr-color d-flex">
                                <div class="big">
                                    <div class="black coloor"></div>
                                    <div class="p-abs">black
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="bige coloor"></div>
                                    <div class="p-abs">bige
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="gray coloor"></div>
                                    <div class="p-abs">gray
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="orange coloor"></div>
                                    <div class="p-abs">orange
                                        <div class="shap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgage imgage1">
                        <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                                <div class="hover-card">
                                    <button class="hover-but">ADD TO CART</button>
                                    <div class="d-flex wish-list ">
                                        <i class="fa-regular fa-heart"></i>
                                        <p>add to wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prag">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div>
                                    <h3>ELLA - HALOTHEMES</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <a href="#" class="">
                                <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                            </a>
                            <p class="price">$19.99</p>

                            <div class="circlr-color d-flex">
                                <div class="big">
                                    <div class="black coloor"></div>
                                    <div class="p-abs">black
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="bige coloor"></div>
                                    <div class="p-abs">bige
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="gray coloor"></div>
                                    <div class="p-abs">gray
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="orange coloor"></div>
                                    <div class="p-abs">orange
                                        <div class="shap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imgage imgage1">
                        <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                                <div class="hover-card">
                                    <button class="hover-but">ADD TO CART</button>
                                    <div class="d-flex wish-list ">
                                        <i class="fa-regular fa-heart"></i>
                                        <p>add to wishlist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prag">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <div>
                                    <h3>ELLA - HALOTHEMES</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <a href="#" class="">
                                <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                            </a>
                            <p class="price">$19.99</p>

                            <div class="circlr-color d-flex">
                                <div class="big">
                                    <div class="black coloor"></div>
                                    <div class="p-abs">black
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="bige coloor"></div>
                                    <div class="p-abs">bige
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="gray coloor"></div>
                                    <div class="p-abs">gray
                                        <div class="shap"></div>
                                    </div>
                                </div>
                                <div class="big">
                                    <div class="orange coloor"></div>
                                    <div class="p-abs">orange
                                        <div class="shap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xxl-5 col-xl-5 col-12 image-hight">
                <div class="baby ">
                    <img class="babygirl h-100 w-100" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                    <div class="abs">
                        <div class="title">
                            <p>New Collection</p>
                            <h2>BABY BOYS</h2>
                            <button class="main-btn">SHOP NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--member-ship -->
    <!-- <div class="member-ship"></div> -->

    <!-- flash-sale -->
    <div class="flash">
        <h1>
            <center>Flash Sale</center>
        </h1>
        <div class="slide">
            <div class="owl-carousel owl-theme flash-carosal">
                <!-- 30 product -->
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--sport -->
    <!-- <div class="sport"></div> -->

    <!-- New Arrival -->

    <div class="flash Arrival">
        <h1>
            <center>NEW ARRIVAL</center>
        </h1>
        <div class="slide">
            <div class="owl-carousel owl-theme flash-carosal">
                <!-- 30 product -->
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="imgage imgage1">
                    <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ asset('public/user/images/img/hover-choose.jpg')}}"></div>
                            <div class="hover-card">
                                <button class="hover-but">ADD TO CART</button>
                                <div class="d-flex wish-list ">
                                    <i class="fa-regular fa-heart"></i>
                                    <p>add to wishlist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prag">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <div>
                                <h3>ELLA - HALOTHEMES</h3>
                            </div>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <a href="#" class="">
                            <p>(Product 1) Sample - Clothes And Accessories For Sale</p>
                        </a>
                        <p class="price">$19.99</p>

                        <div class="circlr-color d-flex">
                            <div class="big">
                                <div class="black coloor"></div>
                                <div class="p-abs">black
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="bige coloor"></div>
                                <div class="p-abs">bige
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="gray coloor"></div>
                                <div class="p-abs">gray
                                    <div class="shap"></div>
                                </div>
                            </div>
                            <div class="big">
                                <div class="orange coloor"></div>
                                <div class="p-abs">orange
                                    <div class="shap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SHARE YOUR STYLE  -->
    <!-- <div class="flash share">
        <h1>
            <center>SHARE YOUR STYLE </center>
        </h1>

        <div class="row ">
            <div class="col-xxl-5 col-xl-5 col-lg-5 ">
                <div class="row ">
                    <div class="col-6 images mt-4">
                        <div class="img">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 images mt-4">
                        <div class="img">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 images mt-4">
                        <div class="img">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 images mt-4">
                        <div class="img">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left col-xxl-7 col-xl-7 col-lg-7">
                <div class="row over-flow">
                    <div class="col-7">
                    <div class="images mt-4 h-100">
                        <div class="img h-100">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg " class="w-100 img-h-100">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="images mt-4">
                        <div class="img">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg " class="w-100">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="images mt-4">
                        <div class="img">
                            <img src="http://localhost/e-commerce/public/user/images/img/person.jpg " class="w-100">
                            <div class="img-btn d-flex justify-content-center plus">
                                <button class="plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- banner6 -->
    <!-- <div class="banner6 mt-4 mb-4"></div> -->

     <!-- max off -->
     <!-- <div class="max mt-4 mb-4"></div> -->

    <!-- img -->
    <div class="images">
        <h1>
            <center>Our Category</center>
        </h1>
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mt-4">
                <div class="img">
                    <img src="{{ asset('public/user/images/img/person.jpg')}}">
                    <div class="img-btn d-flex justify-content-center">
                        <button class="main-btn">Animal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tags -->
    <div class="tages flash">
        <h1>
            <center>Important Tags</center>
        </h1>
        <!-- متكرر كنير -->
        <div class="d-flex flex-wrap m-3">
            <div class="d-flex tag-cont">
                <img class="icon-tags" src="{{ asset('public/user/images/img/tags/dress.png')}}">
                <p class="prag-tags">girls</p>
            </div>
            <div class="d-flex tag-cont">
                <img class="icon-tags" src="{{ asset('public/user/images/img/tags/dress.png')}}">
                <p class="prag-tags">girls</p>
            </div>
            <div class="d-flex tag-cont">
                <img class="icon-tags" src="{{ asset('public/user/images/img/tags/dress.png')}}">
                <p class="prag-tags">girls</p>
            </div>


        </div>
    </div>



    <script>
        let Gbige = document.getElementById("girl-bige");
        let Gorange = document.getElementById("girl-orange");
        let Ggray = document.getElementById("girl-gray");
        let Gblack = document.getElementById("girl-black");
        let Gimage = document.getElementById("girl-image");

        Gbige.onclick = function() {
            Gimage.setAttribute("src", "{{ asset('public/user/images/img/1.png')}}")
        }

    </script>


</section>






@endsection
