@extends('user.layouts.includes.master')
@section('content')


<section class="about">
        <div class="slider">
            <div class="prag">
                <h2>About Us</h2>
                <p>Etiam convallis, felis quis dapibus dictum, libero mauris luctus nunc, non
                    fringilla purus ligula non justo. Non fringilla purus ligula justo.</p>
            </div>
        </div>

        <!-- about -->
        <div class="sec-about">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-12">
                    <img src="{{ asset('public/user/images/img/banner-kids-2.jpg')}}">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12">
                    <div class="about-us">
                        <h3>We Have Everything You Need ?</h3>
                        <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                            Accessorize with a straw hat and you're ready for summer!</p>
                        <h4>Sample Unordered List</h4>
                        <ul>
                            <li>Lorem ipsum, or lipsum as it is sometimes known</li>
                            <li>Dummy text used in laying out print, graphic or web designs</li>
                            <li>The passage is attributed to.</li>
                            <li>Dummy text used in laying out print, graphic or web designs</li>
                            <li>Proin molestie egestas orci ac suscipit risus posuere loremou.</li>
                        </ul>
                        <button class="about-btn">Contact us <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>


        <!-- number -->
        <div class="number">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-lg-12 p-0">
                        <div class="row pt-3 mx-0 justify-content-center">
                            <div class="col-lg-3 col-sm-6 px-0 boox">
                                <div class=" text-center p-2">
                                    <img src="{{ asset('public/user/images/img/icons/dress.png')}}">
                                    <h1 class="text-white" data-toggle="counter-up">23</h1>
                                    <h6 class="text-uppercase text-white">Dress</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 px-0 boox">
                                <div class=" text-center p-2">
                                    <img src="{{ asset('public/user/images/img/icons/boy.png')}}">
                                    <h1 class="text-white" data-toggle="counter-up">1140</h1>
                                    <h6 class="text-uppercase text-white">Kids</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 px-0 boox">
                                <div class=" text-center p-2">
                                    <img src="{{ asset('public/user/images/img/icons/blazer.png')}}">
                                    <h1 class="text-white" data-toggle="counter-up">25</h1>
                                    <h6 class="text-uppercase text-white">Blazer</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 px-0 boox">
                                <div class=" text-center p-2">
                                    <img src="{{ asset('public/user/images/img/icons/pyjamas.png')}}">
                                    <h1 class="text-white" data-toggle="counter-up">205</h1>
                                    <h6 class="text-uppercase text-white">Pyjamas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- testemonial -->
        <div class="testo">
            <div class="">
                <div class="testo-prag">
                    <h2>Testimonials</h2>
                    <p>Show off your amazing employees, or highlight key members of your team. Tell the world who you are and why your team is the best.</p>
                </div>
               <div class="container">
                <div class="owl-carousel owl-theme about-carosal">
                    <div class="item">

                        <div class="block">
                            <div class="d-flex align-items-center">
                                <img class="img-review" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                                <div class="name">
                                    <h2>Nada Shawky</h2>
                                    <p class="date">20/10/2020</p>
                                </div>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis.
                                Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium.</p>
                            <button class="about-btn">Read Review</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block">
                            <div class="d-flex align-items-center">
                                <img class="img-review" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                                <div class="name">
                                    <h2>Nada Shawky</h2>
                                    <p class="date">20/10/2020</p>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis.
                                Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium.</p>
                            <button class="about-btn">Read Review</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block">
                            <div class="d-flex align-items-center">
                                <img class="img-review" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                                <div class="name">
                                    <h2>Nada Shawky</h2>
                                    <p class="date">20/10/2020</p>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis.
                                Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium.</p>
                            <button class="about-btn">Read Review</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block">
                            <div class="d-flex align-items-center">
                                <img class="img-review" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                                <div class="name">
                                    <h2>Nada Shawky</h2>
                                    <p class="date">20/10/2020</p>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis.
                                Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium.</p>
                            <button class="about-btn">Read Review</button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block">
                            <div class="d-flex align-items-center">
                                <img class="img-review" src="{{ asset('public/user/images/img/baby-girl.jpg')}}">
                                <div class="name">
                                    <h2>Nada Shawky</h2>
                                    <p class="date">20/10/2020</p>
                                </div>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis.
                                Sed ut perspiciatis unde omnis iste natus errorsit voluptatem accusantium.</p>
                            <button class="about-btn">Read Review</button>
                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>


<script>

(function ($) {
    "use strict";
    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
})(jQuery);
</script>


@endsection
