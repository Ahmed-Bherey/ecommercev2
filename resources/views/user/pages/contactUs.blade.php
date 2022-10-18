@extends('user.layouts.includes.master')
@section('content')

<section class="contact" style="margin-top: 90px;">
    <div class="container">
        <div class="row text-center g-5">
            <h1 class="head-contact p-0"> Contact Us</h1>
            <span class=" fs-5 m-0">if you have any question , send us a message</span>
            <div class="col-lg-6 col-sm-12">
                  <div class="left position-relative">
                        <p class="head-left position-relative pt-0 m-0">Get in touch for best experience.</p>
                        <div class="row g-3">
                            <div class="col-6 par">Write us if you need any support,
                                suggestions or in rare case if you have run in to trouble</div>
                                <div class="col-6 location">
                                    <i class="fa-solid fa-user"></i>
                                    <span>ddsadsadasdasd</span>
                                </div>
                                <div class="col-6 location" style="text-align: left">
                                    <i class="fa-solid fa-user"></i>
                                    <span>ddsadsadasdasd</span>
                                </div>
                                <div class="col-6 location" >
                                    <i class="fa-solid fa-user"></i>
                                    <span>ddsadsadasdasd</span>
                                </div>
                                <div class="social mt-4">
                                    <i class="fab fa-facebook-f icon"></i>
                                    <i class="fab fa-twitter icon"></i>
                                    <i class="fab fa-google-plus-g icon"></i>
                                    <i class="fab fa-instagram icon"></i>

                                </div>
                        </div>




                    </div>
                <div class="right position-relative">
                    <div class="col-12">
                        <input type="text" placeholder="Your Name">
                    </div>
                    <div class="col-12">
                        <input type="email" placeholder="Your E-mail" >


                    </div>

                    <div class="col-12">
                        <textarea placeholder="Your message" name="" id="" cols="30" rows="2"></textarea>

                    </div>

                    <button id="switch" href="#"><span title="Submit Now">Submit Now</span></button>

                </div>
            </div>

            <div class="col-lg-6 col-sm-12 d-flex align-items-center contact-img">
                <div class="right-sid position-relative">
                    <img src="{{ asset('public/user/images/img/contactus.jpg')}}" class="per-img w-75">
                    <img src="{{ asset('public/user/images/img/dotted.png')}}" class="dotted w-75">


                </div>



            </div>
          </div>

        </div>
    </div>

</section>

@endsection
