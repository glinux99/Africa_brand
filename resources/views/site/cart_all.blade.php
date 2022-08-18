@extends('layouts.page')
@section('content')

<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">
        <section class="pt-5 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        <div class="row aiz-steps arrow-divider">
                            <div class="col active">
                                <div class="text-center text-primary">
                                    <i class="la-3x mb-2 las la-shopping-cart"></i>
                                    <h3 class="fs-14 fw-600 d-none d-lg-block">1.@lang("Mon charriot")</h3>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <i class="la-3x mb-2 opacity-50 las la-map"></i>
                                    <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">2. @lang("Infos achats")
                                    </h3>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                                    <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">3. @lang("Livraison Info")
                                    </h3>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                                    <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">4. @lang("Payement")</h3>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                                    <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50">5. @lang("Confirmation")
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-4" id="cart-summary">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-10 mx-auto">
                        <div class="shadow-sm bg-white p-3 p-lg-4 rounded text-left">
                            <div class="mb-4">
                                <div class="row gutters-5 d-none d-lg-flex border-bottom mb-3 pb-3">
                                    <div class="col-md-8 fw-600 text-center">Product</div>
                                    <div class="col-lg-2 fw-600 text-center">@lang("Quantite")</div>
                                    <div class="col-lg-2 fw-600 text-center">@lang("Supprimer")</div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    @foreach ($chartInfo as $produit)
                                    <li class="list-group-item px-0 px-lg-3">
                                        <div class="row gutters-5">
                                            <div class="col-lg-8 d-flex ">
                                                <span class="ml-5 ml-0">
                                                    <img src="{{ asset('storage/'.$produit->images)}}" class="img-fluid size-200px rounded" alt="images">
                                                </span>
                                                <span class="fs-18 opacity-60 text-center flex-fill">{{ $produit->name ?? ''}}</span>
                                                <br>
                                                <span class="fs-14 opacity-60 text-center">{!! $produit->descritpion ?? ''!!}</span>
                                            </div>
                                            <div class="text-center col-lg-2 order-4 order-lg-0">
                                                <div class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                                    <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="{{'quantity'.$produit->produit_id}}">
                                                        <i class="las la-minus"></i>
                                                    </button>
                                                    <input type="number" name="{{'quantity'.$produit->produit_id}}" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="{{$produit->chariot_qte}}" min="{{$produit->chariot_qte}}" max="100000000000" onchange="updateQuantity(42, this)">
                                                    <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="{{'quantity'.$produit->produit_id}}">
                                                        <i class="las la-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="text-center col-2 order-5 order-lg-0 text-right">
                                                <a href="{{ route('produit.cart.delete',[$produit->chariot_id])}}" class="text-center btn btn-icon btn-sm btn-soft-primary btn-circle">
                                                    <i class="las la-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                                    <a href="/" class="btn btn-link">
                                        <i class="las la-arrow-left"></i>
                                        @lang("Retour vers le site")
                                    </a>
                                </div>
                                <div class="col-md-6 text-center text-md-right">
                                    <a href="{{ route('produit.cart.info')}}" class="btn btn-primary fw-600">@lang("Continuer d'acheter")</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-white border-top mt-auto">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block" href="#">
                            <i class="la la-file-text la-3x text-primary mb-2"></i>
                            <h4 class="h6">Terms &amp; conditions</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block" href="#">
                            <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                            <h4 class="h6">Return Policy</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left text-center p-4 d-block" href="#">
                            <i class="la la-support la-3x text-primary mb-2"></i>
                            <h4 class="h6">Support Policy</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a class="text-reset border-left border-right text-center p-4 d-block" href="#">
                            <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                            <h4 class="h6">Privacy Policy</h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            function confirm_modal(delete_url) {
                jQuery('#confirm-delete').modal('show', {
                    backdrop: 'static'
                });
                document.getElementById('delete_link').setAttribute('href', delete_url);
            }
        </script>

        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                    </div>

                    <div class="modal-body">
                        <p>Delete confirmation message</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addToCart">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
                <div class="modal-content position-relative">
                    <div class="c-preloader text-center p-3">
                        <i class="las la-spinner la-spin la-3x"></i>
                    </div>
                    <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la-2x">&times;</span>
                    </button>
                    <div id="addToCart-modal-body">

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="login-modal">
            <div class="modal-dialog modal-dialog-zoom">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title fw-600">Login</h6>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="p-3">
                            <form class="form-default" role="form" action="https://demo.activeitzone.com/ecommerce/users/login/cart" method="POST">
                                <input type="hidden" name="_token" value="NMdMO3z4KhbiJA3NM62074JB5BdvKZRdIdmadZwY">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="" placeholder="Email" name="email" id="email" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control " placeholder="Password" name="password" id="password">
                                </div>

                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="remember">
                                            <span class=opacity-60>Remember Me</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="https://demo.activeitzone.com/ecommerce/password/reset" class="text-reset opacity-60 fs-14">Forgot password?</a>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <button type="submit" class="btn btn-primary btn-block fw-600">Login</button>
                                </div>
                            </form>

                        </div>
                        <div class="text-center mb-3">
                            <p class="text-muted mb-0">Dont have an account?</p>
                            <a href="https://demo.activeitzone.com/ecommerce/users/registration">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script src="https://demo.activeitzone.com/ecommerce/public/assets/js/vendors.js"></script>
        <script src="https://demo.activeitzone.com/ecommerce/public/assets/js/aiz-core.js"></script>



        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v3.3'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat" attribution=setup_tool page_id="">
        </div>

        <script>
        </script>

        <script>
            $(document).ready(function() {
                $('.category-nav-element').each(function(i, el) {
                    $(el).on('mouseover', function() {
                        if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                            $.post('https://demo.activeitzone.com/ecommerce/category/nav-element-list', {
                                _token: AIZ.data.csrf,
                                id: $(el).data('id')
                            }, function(data) {
                                $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                            });
                        }
                    });
                });
                if ($('#lang-change').length > 0) {
                    $('#lang-change .dropdown-menu a').each(function() {
                        $(this).on('click', function(e) {
                            e.preventDefault();
                            var $this = $(this);
                            var locale = $this.data('flag');
                            $.post('https://demo.activeitzone.com/ecommerce/language', {
                                _token: AIZ.data.csrf,
                                locale: locale
                            }, function(data) {
                                location.reload();
                            });

                        });
                    });
                }

                if ($('#currency-change').length > 0) {
                    $('#currency-change .dropdown-menu a').each(function() {
                        $(this).on('click', function(e) {
                            e.preventDefault();
                            var $this = $(this);
                            var currency_code = $this.data('currency');
                            $.post('https://demo.activeitzone.com/ecommerce/currency', {
                                _token: AIZ.data.csrf,
                                currency_code: currency_code
                            }, function(data) {
                                location.reload();
                            });

                        });
                    });
                }
            });

            $('#search').on('keyup', function() {
                search();
            });

            $('#search').on('focus', function() {
                search();
            });

            function search() {
                var searchKey = $('#search').val();
                if (searchKey.length > 0) {
                    $('body').addClass("typed-search-box-shown");

                    $('.typed-search-box').removeClass('d-none');
                    $('.search-preloader').removeClass('d-none');
                    $.post('https://demo.activeitzone.com/ecommerce/ajax-search', {
                        _token: AIZ.data.csrf,
                        search: searchKey
                    }, function(data) {
                        if (data == '0') {
                            // $('.typed-search-box').addClass('d-none');
                            $('#search-content').html(null);
                            $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                            $('.search-preloader').addClass('d-none');

                        } else {
                            $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                            $('#search-content').html(data);
                            $('.search-preloader').addClass('d-none');
                        }
                    });
                } else {
                    $('.typed-search-box').addClass('d-none');
                    $('body').removeClass("typed-search-box-shown");
                }
            }

            function updateNavCart(view, count) {
                $('.cart-count').html(count);
                $('#cart_items').html(view);
            }

            function removeFromCart(key) {
                $.post('https://demo.activeitzone.com/ecommerce/cart/removeFromCart', {
                    _token: AIZ.data.csrf,
                    id: key
                }, function(data) {
                    updateNavCart(data.nav_cart_view, data.cart_count);
                    $('#cart-summary').html(data.cart_view);
                    AIZ.plugins.notify('success', "Item has been removed from cart");
                    $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
                });
            }

            function addToCompare(id) {
                $.post('https://demo.activeitzone.com/ecommerce/compare/addToCompare', {
                    _token: AIZ.data.csrf,
                    id: id
                }, function(data) {
                    $('#compare').html(data);
                    AIZ.plugins.notify('success', "Item has been added to compare list");
                    $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
                });
            }

            function addToWishList(id) {
                AIZ.plugins.notify('warning', "Please login first");
            }

            function showAddToCartModal(id) {
                if (!$('#modal-size').hasClass('modal-lg')) {
                    $('#modal-size').addClass('modal-lg');
                }
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.post('https://demo.activeitzone.com/ecommerce/cart/show-cart-modal', {
                    _token: AIZ.data.csrf,
                    id: id
                }, function(data) {
                    $('.c-preloader').hide();
                    $('#addToCart-modal-body').html(data);
                    AIZ.plugins.slickCarousel();
                    AIZ.plugins.zoom();
                    AIZ.extra.plusMinus();
                    getVariantPrice();
                });
            }

            $('#option-choice-form input').on('change', function() {
                getVariantPrice();
            });

            function getVariantPrice() {
                if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                    $.ajax({
                        type: "POST",
                        url: 'https://demo.activeitzone.com/ecommerce/product/variant_price',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data) {

                            $('.product-gallery-thumb .carousel-box').each(function(i) {
                                if ($(this).data('variation') && data.variation == $(this).data('variation')) {
                                    $('.product-gallery-thumb').slick('slickGoTo', i);
                                }
                            })

                            $('#option-choice-form #chosen_price_div').removeClass('d-none');
                            $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                            $('#available-quantity').html(data.quantity);
                            $('.input-number').prop('max', data.max_limit);
                            if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                                $('.buy-now').addClass('d-none');
                                $('.add-to-cart').addClass('d-none');
                                $('.out-of-stock').removeClass('d-none');
                            } else {
                                $('.buy-now').removeClass('d-none');
                                $('.add-to-cart').removeClass('d-none');
                                $('.out-of-stock').addClass('d-none');
                            }

                            AIZ.extra.plusMinus();
                        }
                    });
                }
            }

            function checkAddToCartValidity() {
                var names = {};
                $('#option-choice-form input:radio').each(function() { // find unique names
                    names[$(this).attr('name')] = true;
                });
                var count = 0;
                $.each(names, function() { // then count them
                    count++;
                });

                if ($('#option-choice-form input:radio:checked').length == count) {
                    return true;
                }

                return false;
            }

            function addToCart() {

                if (checkAddToCartValidity()) {
                    $('#addToCart').modal();
                    $('.c-preloader').show();
                    $.ajax({
                        type: "POST",
                        url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data) {

                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                            AIZ.extra.plusMinus();
                            AIZ.plugins.slickCarousel();
                            updateNavCart(data.nav_cart_view, data.cart_count);
                        }
                    });
                } else {
                    AIZ.plugins.notify('warning', "Please choose all the options");
                }
            }

            function buyNow() {

                if (checkAddToCartValidity()) {
                    $('#addToCart-modal-body').html(null);
                    $('#addToCart').modal();
                    $('.c-preloader').show();
                    $.ajax({
                        type: "POST",
                        url: 'https://demo.activeitzone.com/ecommerce/cart/addtocart',
                        data: $('#option-choice-form').serializeArray(),
                        success: function(data) {
                            if (data.status == 1) {

                                $('#addToCart-modal-body').html(data.modal_view);
                                updateNavCart(data.nav_cart_view, data.cart_count);

                                window.location.replace("https://demo.activeitzone.com/ecommerce/cart");
                            } else {
                                $('#addToCart-modal-body').html(null);
                                $('.c-preloader').hide();
                                $('#modal-size').removeClass('modal-lg');
                                $('#addToCart-modal-body').html(data.modal_view);
                            }
                        }
                    });
                } else {
                    AIZ.plugins.notify('warning', "Please choose all the options");
                }
            }
        </script>

        <script type="text/javascript">
            function removeFromCartView(e, key) {
                e.preventDefault();
                removeFromCart(key);
            }

            function updateQuantity(key, element) {
                $.post('https://demo.activeitzone.com/ecommerce/cart/updateQuantity', {
                    _token: AIZ.data.csrf,
                    id: key,
                    quantity: element.value
                }, function(data) {
                    updateNavCart(data.nav_cart_view, data.cart_count);
                    $('#cart-summary').html(data.cart_view);
                });
            }

            function showCheckoutModal() {
                $('#login-modal').modal();
            }

            // Country Code
            var isPhoneShown = true,
                countryData = window.intlTelInputGlobals.getCountryData(),
                input = document.querySelector("#phone-code");

            for (var i = 0; i < countryData.length; i++) {
                var country = countryData[i];
                if (country.iso2 == 'bd') {
                    country.dialCode = '88';
                }
            }

            var iti = intlTelInput(input, {
                separateDialCode: true,
                utilsScript: "https://demo.activeitzone.com/ecommerce/public/assets/js/intlTelutils.js?1590403638580",
                onlyCountries: {},
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    if (selectedCountryData.iso2 == 'bd') {
                        return "01xxxxxxxxx";
                    }
                    return selectedCountryPlaceholder;
                }
            });

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

            input.addEventListener("countrychange", function(e) {
                // var currentMask = e.currentTarget.placeholder;

                var country = iti.getSelectedCountryData();
                $('input[name=country_code]').val(country.dialCode);

            });

            function toggleEmailPhone(el) {
                if (isPhoneShown) {
                    $('.phone-form-group').addClass('d-none');
                    $('.email-form-group').removeClass('d-none');
                    $('input[name=phone]').val(null);
                    isPhoneShown = false;
                    $(el).html('Use Phone Instead');
                } else {
                    $('.phone-form-group').removeClass('d-none');
                    $('.email-form-group').addClass('d-none');
                    $('input[name=email]').val(null);
                    isPhoneShown = true;
                    $(el).html('Use Email Instead');
                }
            }
        </script>


</body>

@endsection
