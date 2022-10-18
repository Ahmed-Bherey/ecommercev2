@extends('user.layouts.includes.master')
@section('content')
<section class="product ">
    <div class="slider">
        <img src="{{ asset('public/user/images/img/banner-kids-2.jpg')}}">
    </div>
    <div class="product-body">
        <div class="head">
            <center><h1>Our Product</h1></center>
        </div>
        <div class="filter d-flex " id="filter">
            <div class="active" data-filter="all">All</div>
            @foreach($subDepartments as $subDepartment)
            <div data-filter="product{{$subDepartment->id}}">{{$subDepartment->name}}</div>
            @endforeach
        </div>

        <div class="prod">
            <div class="row home" id="product">
                @foreach($products as $product)
                    <a href="{{route('singleProducts',$product->id)}}" class="">
            <div class="col-3 mt-2" data-category="product{{$product->subDepartment_id}}">
                <div class="item">
                        <div class="imgage imgage1">
                            <img class="img-abs" src="{{ $product->Item_image1}}">
                            <div class="hover st-hiden">
                                <div class="st-hiden img-opacity"><img class="hover-img" src="{{ $product->Item_image2}}" id="girl-img"></div>
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
                                    <h3>{{ $product->Product_NameAr}}</h3>
                                </div>
                                <div>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                                <p>{{Str::words( $product->Short_Description,'5')}}</p>

                            <p class="price">{{ $product->Price}}{{$product->Currency}}</p>

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
            </div>
                    </a>
               @endforeach

            </div>
        </div>
    </div>
</section>
<script>
     // main-filter
     let main = document.getElementById("filter").children;
        let sec = document.getElementById("product").children;
        for (let i = 0; i < main.length; i++) {
            main[i].onclick = function () {
                for (let j = 0; j < main.length; j++) {
                    main[j].classList.remove("active");
                }
                this.classList.add("active");
                let data = this.getAttribute("data-filter");
                for (let z = 0; z < sec.length; z++) {
                    sec[z].style.transform = "scale(0)";
                    sec[z].style.display = "none";
                    if (sec[z].getAttribute("data-category") == data || data == "all") {
                        sec[z].style.transform = "scale(1)";
                        sec[z].style.display = "block";
                    }
                }
            }
        }
</script>

@endsection
