<!-- Javascript files-->
<script src="{{asset('public/user/js/all.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.min.js')}}"></script>
<script src="{{asset('public/user/js/popper.min.js')}}"></script>
<script src="{{asset('public/user/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('public/user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/user/js/bootstrap.js')}}"></script>
<script src="{{asset('public/user/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('public/user/js/plugin.js')}}"></script>

<script src="{{asset('public/user/js/counterup.min.js')}}"></script>
<script src="{{asset('public/user/js/easing.min.js')}}"></script>
<script src="{{asset('public/user/js/easing.js')}}"></script>
<script src="{{asset('public/user/js/waypoints.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- sidebar -->
<script src="{{asset('public/user/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('public/user/js/custom.js')}}"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<!-- by nada -->
<script src="{{asset('public/user/js/owl.carousel.min.js')}}"></script>

<script>


    $('.n_slid1').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2.012
            }
        }
    })
     $('.n_carosal').owlCarousel({
    loop:true,
    margin:10,
    nav: false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1200:{
            items:1
        },
        1500:{
            items:1
        }
    }
})
    $('.flash-carosal').owlCarousel({
    loop:true,
    margin:10,
    nav: false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:3
        },
        1500:{
            items:5
        }
    }
})

$('.related-item').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


$('.about-carosal').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})



</script>
