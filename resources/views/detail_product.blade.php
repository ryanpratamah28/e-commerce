<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantsasri - Shop</title>

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">

    <!--Slick CSS-->
    <link rel="stylesheet" href="../../assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="../../assets/vendor/slick/slick-theme.css">

    <!--App Css-->
    <link rel="stylesheet" href="../../assets/css/app.css">

    <!--CSS Assets this page-->
    <link rel="stylesheet" href="../../assets/css/detailProduct.css">
</head>
<body>
    <style>
        .dropdown-toggle::after {
            content: none !important;
        }
    </style>

    <div id="app">
        <div id="navbar" class="fixed-top">
            <div class="container">
                <div class="navbar-wrapper">
                    <div class="leftSideNavbar">
                        <div class="logo-brand">
                            <a href="{{ route('homepage') }}" class="text-black text-decoration-none">
                                <h1 class="ps-3 pe-3">SH</h1>
                            </a>
                        </div>
                        <div class="searchMenu">
                            <form action="">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input type="search" id="form1" class="form-control" />
                                        <label class="form-label" for="form1">Search</label>
                                    </div>
                                    <button type="button" class="buttonSearch button button-primary">
                                        <img src="../../assets/img/icon/search_icon.svg" alt="" />
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="rightSideNavbar">
						@if(Auth::check())
                        <div class="afterLogin align-items-center">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown profileWrapper icon"
                                style="list-style: none;">
                                <a class="nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    @if (is_null($user['image_profile']))
                                        <div class="avatar avatar-online">
                                            <img src="../../assets/img/avatars/1.png" alt=""
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    @else
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('assets/img/' . Auth::user()->image_profile) }}"
                                                alt="" class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    @endif
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    @if (is_null($user['image_profile']))
                                                        <div class="avatar avatar-online">
                                                            <img src="./assets/img/avatars/1.png" alt=""
                                                                class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    @else
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ asset('assets/img/' . Auth::user()->image_profile) }}"
                                                                alt="" class="w-px-40 h-auto rounded-circle">
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ Auth::user()->role }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.account') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
									@if(Auth::check())
										@if(Auth::user()->role == 'admin')
										<li>
											<a class="dropdown-item" href="/dashboard">
												<i class="bx bx-user me-2"></i>
												<span class="align-middle">Dashboard Admin</span>
											</a>
										</li>
										@else
									@endif
									@endif
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <div class="cartWrapper">
                                <a href="#" class="cart icon">
                                    <img src="../../assets/img/icon/shopping-cart_icon.svg" alt="">
                                    <div class="totalItem">9</div>
                                </a>
                            </div>
                        </div>
						@else
						<div class="beforeLogin">
							<div class="buttonWrapper">
								<a
									href="{{route('login.page')}}"
									class="button button-outline button-outline-primary"
									>Login</a
								>
								<a href="{{route('register.page')}}" class="button button-primary"
									>Sign Up</a
								>
							</div>

							<div class="cartWrapper">
								<a href="#" class="cart icon">
									<img
										src="./assets/img/icon/shopping-cart_icon.svg"
										alt=""
									/>
									<div class="totalItem">9</div>
								</a>
							</div>
						</div>
						@endif
                    </div>
                </div>
            </div>
        </div>

        {{-- @if(is_array($products) || $products instanceof \Countable) --}}
        {{-- @foreach($products as $product) --}}
            <div id="mainContent">
                <div class="container">
                    <div class="row first-line">
                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="wrapperDetailProduct row">
                                    <div class="col-12 col-lg-5">
                                        <div class="wrapper-image-product">
                                            <div class="view-Images">
                                                <div class="images-product">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-product">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-product">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-product">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-product">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="nav-images">
                                                <div class="images-nav">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-nav">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-nav">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-nav">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                                <div class="images-nav">
                                                    <img src="{{ asset('storage/images/'. $product->thumb_img) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="wrapper-detail-product">
                                            <h1 class="name-product">{{$product->name}}</h1>
                                            <div class="price-product">
                                                <p>Rp. {{ number_format($product->price, 0, ',', '.') }}<span>/Produk</span></p>
                                            </div>
                                            <div class="wrapper-quantity-product">
                                                <p>Jumlah Order Barang</p>
                                                <div class="quantity-product">
                                                    <button class="quantity-count quantity-count--minus" data-action="minus" type="button">-</button>
                                                    <input class="product-quantity" type="number" name="product-quantity" min="0" max="10" value="1">
                                                    <button class="quantity-count quantity-count--add" data-action="add" type="button">+</button>
                                                </div>
                                                <p class="info">Min. order : 1 Plant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="descripsi-product">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-detail-tab" data-bs-toggle="tab" data-bs-target="#nav-detail" type="button" role="tab" aria-controls="nav-detail" aria-selected="true">Detail</button>
                                    </div>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                            <p>Nama Produk : <span class="primary-text">{{$product->name}}</span></p>
                                            <p>Kategori : <span class="primary-text">{{$product->category->name}}</span></p>
                                            <div class="desc-section">
                                                <p>Deskripsi :</p>
                                                <p class="text-desc">
                                                    {{$product->description}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-3">
                            <div class="wrapper-summary">
                                <div class="card">
                                    <h4>Total Order</h4>
                                    <div class="detail-summary">
                                        <div class="total-order">
                                            <p>Jumlah Order</p>
                                            <p><span>1</span> Plant</p>
                                        </div>
                                        <div class="total-price">
                                            <p>Harga</p>
                                            <p>Rp. <span>27.000</span></p>
                                        </div>
                                    </div>
                                    <button class="button button-primary w-100">
                                        <img src="../../assets/img/icon/shopping-cart-white.svg" alt="">    
                                        Tambah ke Keranjang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- @endforeach --}}
        {{-- @endif --}}
    </div>

    <!--Vendor-->
        <!--Jquery-->
        <script src="../../assets/vendor/jquery/jquery.min.js"></script>
        <!--Bootstrap-->
        <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!--Slick Js-->
        <script src="../../assets/vendor/slick/slick.min.js"></script>
        <script src="../../assets/vendor/slick/slick.js"></script>

        <!--Slick Images Product-->
        <script>
             $('.view-Images').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: false,
                adaptiveHeight: true,
                infinite: false,
                useTransform: true,
                speed: 400,
                asNavFor: '.nav-images',
                cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            });

            $('.nav-images')
                .on('init', function(event, slick) {
                    $('.nav-images .slick-slide.slick-current').addClass('is-active');
                })
                .slick({
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    dots: false,
                    focusOnSelect: false,
                    infinite: false,
                    asNavFor: '.view-Images',
                });

            $('.view-Images').on('afterChange', function(event, slick, currentSlide) {
                $('.nav-images').slick('slickGoTo', currentSlide);
                var currrentNavSlideElem = '.nav-images .slick-slide[data-slick-index="' + currentSlide + '"]';
                $('.nav-images .slick-slide.is-active').removeClass('is-active');
                $(currrentNavSlideElem).addClass('is-active');
            });

            $('.nav-images').on('click', '.slick-slide', function(event) {
                event.preventDefault();
                var goToSingleSlide = $(this).data('slick-index');

                $('.view-Images').slick('slickGoTo', goToSingleSlide);
            });
        </script>

        <!--Quantity Input-->
        <script>
            var QtyInput = (function () {
            var $qtyInputs = $(".quantity-product");

            if (!$qtyInputs.length) {
                return;
            }

            var $inputs = $qtyInputs.find(".product-quantity");
            var $countBtn = $qtyInputs.find(".quantity-count");
            var qtyMin = parseInt($inputs.attr("min"));
            var qtyMax = parseInt($inputs.attr("max"));

            $inputs.change(function () {
                var $this = $(this);
                var $minusBtn = $this.siblings(".quantity-count--minus");
                var $addBtn = $this.siblings(".quantity-count--add");
                var qty = parseInt($this.val());

                if (isNaN(qty) || qty <= qtyMin) {
                    $this.val(qtyMin);
                    $minusBtn.attr("disabled", true);
                } else {
                    $minusBtn.attr("disabled", false);
                    
                    if(qty >= qtyMax){
                        $this.val(qtyMax);
                        $addBtn.attr('disabled', true);
                    } else {
                        $this.val(qty);
                        $addBtn.attr('disabled', false);
                    }
                }
            });

            $countBtn.click(function () {
                var operator = this.dataset.action;
                var $this = $(this);
                var $input = $this.siblings(".product-quantity");
                var qty = parseInt($input.val());

                if (operator == "add") {
                    qty += 1;
                    if (qty >= qtyMin + 1) {
                        $this.siblings(".quantity-count--minus").attr("disabled", false);
                    }

                    if (qty >= qtyMax) {
                        $this.attr("disabled", true);
                    }
                } else {
                    qty = qty <= qtyMin ? qtyMin : (qty -= 1);
                    
                    if (qty == qtyMin) {
                        $this.attr("disabled", true);
                    }

                    if (qty < qtyMax) {
                        $this.siblings(".quantity-count--add").attr("disabled", false);
                    }
                }

                $input.val(qty);
            });
        })();

        </script>

</body>
</html>