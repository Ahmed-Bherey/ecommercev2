<section class="footer">
    <div class="row">
        <div class="col-lg-6 ">
            <div class="left">
                <h2>SIGN UP FOR NEWSLETTER</h2>
                <div class="subscribe d-flex">
                    <input type="text" placeholder="enter your email address">
                    <button class="btn-subscribe" disabled="true" id="btn-checked">Subscribe</button>
                </div>
                <div class="d-flex align-items-baseline check-box">
                    <input type="checkbox" id="check-box">
                    <p>By providing your email, you consent to our <span class="under-liner">Privacy Policy</span> and <span class="under-liner">Terms & Conditions.</span></p>
                </div>

                <div class="social ">
                    <h3>FOLLOW US</h3>
                    <div class="social-icon d-flex">
                        <div class="bor">
                            <div class="hov-social"><i class="fa-brands fa-facebook-f"></i></div>
                        </div>
                        <div class="bor">
                            <div class="hov-social"><i class="fa-brands fa-instagram"></i></div>
                        </div>
                        <div class="bor">
                            <div class="hov-social"><i class="fa-brands fa-pinterest"></i></div>
                        </div>
                        <div class="bor">
                            <div class="hov-social"><i class="fa-brands fa-twitter"></i></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-lg-6 ">
            <div class="right">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex line justify-content-center align-items-center display" id="plus">
                            <h3>SHOP BY</h3>
                            <i class="fa-solid fa-plus icon-plus" id="plus-icon"></i>
                        </div>
                        <ul class="ul" id="ul">
                            <li><span>New In</span></li>
                            <li><span>Men</span></li>
                            <li><span>Women</span></li>
                            <li><span>Top Brands</span></li>
                            <li><span>Bags & Accessories</span></li>
                            <li><span>Sale & Special Offers</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex line justify-content-center align-items-center display" id="plus1">
                            <h3>SHOP BY</h3>
                            <i class="fa-solid fa-plus icon-plus"></i>
                        </div>
                        <ul class="ul" id="ul1">
                            <li><span>New In</span></li>
                            <li><span>Men</span></li>
                            <li><span>Women</span></li>
                            <li><span>Top Brands</span></li>
                            <li><span>Bags & Accessories</span></li>
                            <li><span>Sale & Special Offers</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex line justify-content-center align-items-center display" id="plus2">
                            <h3>SHOP BY</h3>
                            <i class="fa-solid fa-plus icon-plus"></i>
                        </div>
                        <ul class="ul" id="ul2">
                            <li><span>New In</span></li>
                            <li><span>Men</span></li>
                            <li><span>Women</span></li>
                            <li><span>Top Brands</span></li>
                            <li><span>Bags & Accessories</span></li>
                            <li><span>Sale & Special Offers</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="copy-right">© 2022 Ella Demo. Powaered By Shopify. Shopify Themes & Templates By HaloThemes.Com.</p>
</section>

<script>
    // check-box
    let check_box = document.getElementById('check-box');
    let btn_checked = document.getElementById('btn-checked');

    check_box.onclick = function() {
        if (check_box.checked) {
            btn_checked.setAttribute('disabled', 'false');
        } else {
            btn_checked.setAttribute('disabled', 'true');
        }
    }

    //list
    let plus = document.getElementById('plus');
    let ul = document.getElementById('ul');
    let icon = document.getElementById('plus-icon');
    // <i class="fa-solid fa-minus"></i>     data-icon="minus" plus
    plus.onclick = function() {
        ul.classList.toggle('appear');
    }
    let plus1 = document.getElementById('plus1');
    let ul1 = document.getElementById('ul1');

    plus1.onclick = function() {
        ul1.classList.toggle('appear');
    }
    let plus2 = document.getElementById('plus2');
    let ul2 = document.getElementById('ul2');

    plus2.onclick = function() {
        ul2.classList.toggle('appear');
    }
</script>
<!-- copyright section end -->
