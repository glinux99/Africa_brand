@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <div class="px-15px px-lg-25px">
        <div class="row gutters-10">
            <div class="col-lg-6">
                <div class="row gutters-10">
                    <div class="col-6">
                        <div class="bg-grad-2 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Membre et Clients")
                                </div>
                                <div class="h3 fw-700 mb-3">
                                    2
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Ventes")
                                </div>
                                <div class="h3 fw-700 mb-3">63</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-grad-1 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Produits categorie")
                                </div>
                                <div class="h3 fw-700 mb-3">249</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-grad-4 text-white rounded-lg mb-4 overflow-hidden">
                            <div class="px-3 pt-3">
                                <div class="opacity-50">
                                    <span class="fs-12 d-block">Total</span>
                                    @lang("Marque de produit")
                                </div>
                                <div class="h3 fw-700 mb-3">100</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="rgba(255,255,255,0.3)" fill-opacity="1" d="M0,128L34.3,112C68.6,96,137,64,206,96C274.3,128,343,224,411,250.7C480,277,549,235,617,213.3C685.7,192,754,192,823,181.3C891.4,171,960,149,1029,117.3C1097.1,85,1166,43,1234,58.7C1302.9,75,1371,149,1406,186.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row gutters-10">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0 fs-14">@lang("Produits")</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="pie-1" class="w-100" height="305"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0 fs-14">@lang("Ventes")</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="pie-2" class="w-100" height="305"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row gutters-10">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">@lang("Categorie de produits vendus")</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-1" class="w-100" height="500"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0 fs-14">@lang("Categorie de produits en stock")</h6>
                    </div>
                    <div class="card-body">
                        <canvas id="graph-2" class="w-100" height="500"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">@lang("Top 20 de nos produits")</h6>
            </div>
            <div class="card-body">
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-arrows='true'>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/analog-black-dial-mens-watch-32-bk-ck" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/1quPYqHJkqT3QypO7fg78wEspoNktv69QWNbAvdP.png" alt="Fossil Men&#039;s Grant Stainless Steel Quartz Chronograph Watch" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">$600.000</del>
                                    <span class="fw-700 text-primary">$450.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/analog-black-dial-mens-watch-32-bk-ck" class="d-block text-reset">Fossil Men&#039;s Grant Stainless Steel
                                        Quartz Chronograph Watch</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/nike-men-mercurial-superfly-7-elite-firm-ground-football-shoe-zlwgn" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/LfCYkZUyEVnUSjqjznaA6MVuLETNLDkaTMnCud9F.png" alt="Under Armour Men&#039;s Charged Assert 9 Running Shoe" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">$120.000</del>
                                    <span class="fw-700 text-primary">$97.200</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/nike-men-mercurial-superfly-7-elite-firm-ground-football-shoe-zlwgn" class="d-block text-reset">Under Armour Men&#039;s Charged Assert 9
                                        Running Shoe</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/nike-men-mercurial-superfly-7-elite-firm-ground-football-shoe-qsdro" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/3ql49de5ukMYrHGMfSyFIDa5QOylkhIQ5Y9buMvL.jpg" alt="Nike Men &#039;Mercurial Superfly 7 Elite Firm Ground Football Shoe" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$15.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/nike-men-mercurial-superfly-7-elite-firm-ground-football-shoe-qsdro" class="d-block text-reset">Nike Men &#039;Mercurial Superfly 7 Elite
                                        Firm Ground Football Shoe</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/soft-bamboo-boxers-for-men-cool-comfortable-breathable-mens-underwear-boxer-shorts-4i89i" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/CsFoRGNuvhjcSk9fqioXzZoR1LPMyLx4FyW8Jxdg.png" alt="Rb3030 Outdoorsman I Aviator Sunglasses" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$95.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/soft-bamboo-boxers-for-men-cool-comfortable-breathable-mens-underwear-boxer-shorts-4i89i" class="d-block text-reset">Rb3030 Outdoorsman I Aviator
                                        Sunglasses</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/latest-coat-pant-designs-white-wedding-suits-for-men-sq38a" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/8L73AHGXdYjfoUQtW5IMICTVtgCiTq9CgWxz9xrI.jpg" alt="Latest Coat Pant Designs White Wedding Suits for Men" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">$35.000</del>
                                    <span class="fw-700 text-primary">$23.800</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/latest-coat-pant-designs-white-wedding-suits-for-men-sq38a" class="d-block text-reset">Latest Coat Pant Designs White Wedding
                                        Suits for Men</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/baby-girls-cotton-dress-cardigan-and-shoe-set" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/2RF080PPtVaUyETTD5MNxxxzfG2QwvAsAfsOExOD.png" alt="Gerber Unisex-Baby Onesies Bodysuit Multi Pack" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$25.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/baby-girls-cotton-dress-cardigan-and-shoe-set" class="d-block text-reset">Gerber Unisex-Baby Onesies Bodysuit Multi
                                        Pack</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/KB3mW3VBpQFmVrzqAjsq0Mhh8RF1K2sfXrs5Ym1R.png" alt="Dell Inspiron 15 3511 15.6 Inch Laptop, Full HD LED Non-Touch WVA Display - Intel Core i3-1115G4, 8GB DDR4 RAM, 256GB SSD" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$1,300.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/hp-stream-14-inch-laptop-intel-celeron-n4000-4-gb-ram-64-gb-emmc-windows-10-home-in-s-mode-with-office-365-personal-gtre8" class="d-block text-reset">Dell Inspiron 15 3511 15.6 Inch Laptop,
                                        Full HD LED Non-Touch WVA Display - Intel Core i3-1115G4, 8GB DDR4
                                        RAM, 256GB SSD</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/sungait-ultra-lightweight-rectangular-polarized-sunglasses-uv400-protection-1szdb" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/xIT7SLG4ciNvO2z4cU47GhtmS1RDiRBlnbzlYwSu.jpg" alt="SUNGAIT Ultra Lightweight Rectangular Polarized Sunglasses UV400 Protection" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">$25.000</del>
                                    <span class="fw-700 text-primary">$14.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i><i class='las la-star active'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/sungait-ultra-lightweight-rectangular-polarized-sunglasses-uv400-protection-1szdb" class="d-block text-reset">SUNGAIT Ultra Lightweight Rectangular
                                        Polarized Sunglasses UV400 Protection</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/mens-machine-stainless-steel-quartz-chronograph-watch-2gns4" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/wTxJIHeuG9rlxXSwp1yTS8ptdSwYpOzMrhH5yvf1.jpg" alt="Men&#039;s Machine Stainless Steel Quartz Chronograph Watch" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$190.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/mens-machine-stainless-steel-quartz-chronograph-watch-2gns4" class="d-block text-reset">Men&#039;s Machine Stainless Steel Quartz
                                        Chronograph Watch</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/dress-the-population-womens-catalina-solid-sleeveless-fit-flare-midi-dress-gxljv" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/Cu01ryaF914OhH3CpMdKTkk9glGXpLBb5HqWS4Jv.png" alt="Dress the Population Women&#039;s Catalina Solid Sleeveless Fit &amp; Flare Midi Dress" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$140.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/dress-the-population-womens-catalina-solid-sleeveless-fit-flare-midi-dress-gxljv" class="d-block text-reset">Dress the Population Women&#039;s
                                        Catalina Solid Sleeveless Fit &amp; Flare Midi Dress</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/adidas-womens-track-jacket-nlyb0" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/6o18mK28NHiLcWPbhSRPUXnBBuQlzBMp7fa0wPwe.png" alt="Ariana Grande Ari Eau de Parfum Spray for Women" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$99.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/adidas-womens-track-jacket-nlyb0" class="d-block text-reset">Ariana Grande Ari Eau de Parfum Spray for
                                        Women</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded shadow-sm hov-shadow-md mb-2 has-transition bg-white">
                            <div class="position-relative">
                                <a href="https://demo.activeitzone.com/ecommerce/product/adobe-photoshop-cc-68450" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-210px" src="https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/6CHLYfJI7aaDY7AFTmXsdyKgtcCCFon3skIRFk4n.jpg" alt="Adobe Photoshop Elements 2021 &amp; Premiere Elements 2021" onerror="this.onerror=null;this.src='https://demo.activeitzone.com/ecommerce/public/assets/img/placeholder.jpg';">
                                </a>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <span class="fw-700 text-primary">$52.000</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0">
                                    <a href="https://demo.activeitzone.com/ecommerce/product/adobe-photoshop-cc-68450" class="d-block text-reset">Adobe Photoshop Elements 2021 &amp;
                                        Premiere Elements 2021</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div><!-- .aiz-main-content -->
@endsection
