@extends('user.layouts.includes.master')
@section('content')
    <section class="single-pro pt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="owl-carousel owl-theme n_carosal">

                        @isset($product->Item_image1)
                            <div class="item"><img src="{{ $product->Item_image1}}" class="w-100"></div>@endisset
                        @isset($product->Item_image2)
                            <div class="item"><img src="{{ $product->Item_image2}}" class="w-100"></div>@endisset
                        @isset($product->Item_image3)
                            <div class="item"><img src="{{ $product->Item_image3}}" class="w-100"></div>@endisset
                        @isset($product->Item_image4)
                            <div class="item"><img src="{{ $product->Item_image4}}" class="w-100"></div>@endisset
                        @isset($product->Item_image5)
                            <div class="item"><img src="{{ $product->Item_image5}}" class="w-100"></div>@endisset
                        @isset($product->Item_image6)
                            <div class="item"><img src="{{ $product->Item_image6}}" class="w-100"></div>@endisset
                        @isset($product->Item_image7)
                            <div class="item"><img src="{{ $product->Item_image7}}" class="w-100"></div>@endisset
                        @isset($product->Item_image8)
                            <div class="item"><img src="{{ $product->Item_image8}}" class="w-100"></div>@endisset
                        @isset($product->Item_image9)
                            <div class="item"><img src="{{ $product->Item_image9}}" class="w-100"></div>@endisset

                    </div>


                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contain ">
                        <h1 class="head">{{ $product->Product_NameAr}}</h1>
                        <div class="price d-flex align-items-center gap-5">
                            <p class="pri ">{{ $product->Price}}{{$product->Currency}} <span
                                    class="disable ms-5">{{$product->Price + 10}}</span></p>
                            <span class="off">20% Off</span>
                        </div>
                        <span>desription :</span>
                        <p class="desription">

                            {{$product->Short_Description}}
                        </p>
                        <div class="buttons d-flex justify-content-evenly align-items-center">
                            <button type="button" class="btn ">Book Now</button>
                            <div class="add">
                                <i class="fa-regular fa-heart"></i></div>
                        </div>

                        <div class="serv mt-5 text-center">
                            <div class="row">
                                <div class="col-4">
                                    <div class="icon d-flex flex-column align-items-center">
                                        <div class="image-icon">
                                            <img src="{{ asset('public/user/images/img/icons/icon-1.png')}}" class=""
                                                 alt="">
                                        </div>
                                        <p>Easy Returns</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="icon d-flex flex-column align-items-center">
                                        <div class="image-icon">
                                            <img src="{{ asset('public/user/images/img/icons/icon-2.png')}}" class=""
                                                 alt="" style="width:33px;">
                                        </div>
                                        <p>Qualigggdgty Service</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="icon d-flex flex-column align-items-center">
                                        <div class="image-icon">
                                            <img src="{{ asset('public/user/images/img/icons/icon-3.png')}}" class=""
                                                 alt="">
                                        </div>
                                        <p>Original Product</p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>

        </div>

        <div class="related pt-5">
            <div class="container">
                <div class="">
                    <div class="icon d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-basket-shopping "></i>
                        <span>related product</span>
                    </div>

                    <h1>Viewed Items</h1>

                </div>


                <div class="owl-carousel owl-theme related-item">
                    @foreach(\App\Models\Product::where('subDepartment_id',$product->subDepartment_id)->get() as $products)
                        <a href="{{route('singleProducts',$products->id)}}">
                    <div class="item">
                        <div class="box overflow-hidden position-relative">
                            <div class="image-product position-relative">
                                <span class="off position-absolute">20% off</span>
                                <img src="{{$products->Item_image1}}" class="w-100" alt="{{ $products->Product_NameAr}}" title="{{ $products->Product_NameAr}}">
                                <div class="hover-content">
                                    <i class="fa-regular fa-heart heart"></i>
                                    <button type="button" class="btn-pro">Book Now</button>
                                    <i class="fa-regular fa-eye eye"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                          </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>







@endsection
