@extends('user.layouts.includes.master')
@section('content')

<section class="contact" style="margin-top: 90px;">
    <div class="container">
        <div class="row text-center">
            <h1 class="head-contact text-light"> Contact Us</h1>
            <span class="text-light fs-5">if you have any question , send us a message</span>
            <div class="col-lg-6 col-sm-12">
                <div class="right position-relative">
                    <div class="col-12">
                        <input type="text" placeholder="Your Name">
                    </div>
                    <div class="col-12">
                        <input type="text" placeholder="Your E-mail" >


                    </div>
                    <div class="col-12">
                        <textarea placeholder="Your message" name="" id="" cols="30" rows="10"></textarea>

                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="left position-relative">
                    <p class="head-left">Contact Information</p>
                    <div class="info">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>dfsfsfsf</span>
                    </div>
                    <div class="info">
                        <i class="fa-solid fa-phone-volume"></i>
                        <span>+2010552353</span>
                    </div>
                    <div class="info">
                        <i class="fa-solid fa-envelope"></i>
                         <span>Adham @ najez.com</span>
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

@endsection
