<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SH</title>

		<!--Bootstrap Css-->
		<link
			rel="stylesheet"
			href="./assets/vendor/bootstrap/css/bootstrap.min.css"
		/>

		<!--Slick CSS-->
		<link rel="stylesheet" href="./assets/vendor/slick/slick.css" />
		<link rel="stylesheet" href="./assets/vendor/slick/slick-theme.css" />

		<!--App Css-->
		<link rel="stylesheet" href="./assets/css/app.css" />

		<!--Main CSS-->
		<link rel="stylesheet" href="./assets/css/main.css" />
	</head>
	<body>
		<div id="app">
			<div id="navbar" class="fixed-top">
				<div class="container">
					<div class="navbar-wrapper">
						<div class="leftSideNavbar">
							<div class="logo-brand">
								<h1 class="ps-3 pe-3">SH</h1>
							</div>
							<div class="searchMenu">
								<form action="">
									<div class="input-group">
										<div class="form-outline">
											<input
												type="search"
												id="form1"
												class="form-control"
											/>
											<label
												class="form-label"
												for="form1"
												>Search</label
											>
										</div>
										<button
											type="button"
											class="buttonSearch button button-primary"
										>
											<img
												src="./assets/img/icon/search_icon.svg"
												alt=""
											/>
										</button>
									</div>
								</form>
							</div>
						</div>

						<div class="rightSideNavbar">
							<div class="beforeLogin">
								<div class="buttonWrapper">
                                @if (Route::has('login'))
                                        @auth
                                            <a href="{{route('logout')}}" class="button button-outline button-outline-primary">Logout</a>
                                        @else
                                            <a href="/login" class="button button-outline button-outline-primary">Login</a>
                                            @if (Route::has('register'))
                                            <a href="/register" class="button button-primary">Sign Up</a>
                                            @endif
                                        @endauth
                                @endif
								</div>
								<div class="cartWrapper">
									<a href="/cart" class="cart icon">
										<img
											src="./assets/img/icon/shopping-cart_icon.svg"
											alt=""
										/>
										<div class="totalItem">0</div>
									</a>
								</div>
							</div>
							<!-- <div class="afterLogin">
                            <a href="#" class="profileWrapper icon">
                                <img src="./assets/img/icon/profile_icon.svg" alt="">
                            </a>
                            <div class="cartWrapper">
                                <a href="#" class="cart icon">
                                    <img src="./assets/img/icon/shopping-cart_icon.svg" alt="">
                                    <div class="totalItem">9</div>
                                </a>
                            </div>
                        </div> -->
						</div>
					</div>
				</div>
			</div>

			<div id="mainContent">
				<div class="container first-line">
					<div class="bannerSection">
						<div class="wrapperBanner">
							<a href="#" class="banner">
								<img src="./assets/img/Banner.png" alt="" />

								<div class="wrapperButton">
									<div class="leftSide"></div>
									<div class="rightSide">
										<img src="" alt="" />
									</div>
								</div>
							</a>
							<a href="#" class="banner">
								<img src="./assets/img/Banner.png" alt="" />
							</a>
							<a href="#" class="banner">
								<img src="./assets/img/Banner.png" alt="" />
							</a>
						</div>
						<div class="slick-slider-dots"></div>
					</div>
				</div>
				<div class="container">
					<div class="row line">
						<div class="col-12 col-lg-3 mb-4 mb-lg-0">
							<div class="categoriesContainer">
								<h4>Kategori</h4>
								<div class="wrapperCategories row">
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/chargeran.jpg"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Chargeran Handphone
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/baterai-1.jpg"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Baterai Handphone
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/kamera-2.jpg"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Kamera Handphone
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/lcd-phone-1.png"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												LCD Handphone
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/memori-hp.jpg"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Memori Handphone
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/flexible-1.jpg"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Kabel Fleksibel HP
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/main-board.png"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Main Board Handphone
											</p>
										</a>
									</div>
									<div
										class="col-12 col-sm-6 col-md-3 col-lg-12"
									>
										<a href="#" class="categoriesPlant">
											<div class="imagesCategories">
												<img
													src="./assets/img/speaker-hp.jpg"
													alt=""
												/>
											</div>
											<p class="nameCategories">
												Speaker Handphone
											</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-9">
							<div class="bestOfferContainer">
								<a href="#" class="header-line">
									<img
										src="./assets/img/icon/icons8-hot-price-30.png"
										alt=""
									/>

									<p>Penawaran Terbaik</p>
								</a>
								<div class="bestOfferProduct">
									<a href="#" class="product">
										<div class="imagesProduct">
											<img
												src="./assets/img/flexible-1.jpg"
												alt=""
											/>
										</div>
										<div class="infoProduct">
											<p class="nameProduct">
												Kabel Fleksibel untuk Handphone
												Samsung
											</p>
											<p class="price">Rp. 27.000</p>
											<div class="discountDetail">
												<div class="discountValue">
													10%
												</div>
												<div class="priceBefore">
													Rp. 30.000
												</div>
											</div>
											<p class="rating">
												<img
													src="./assets/img/icon/star_icon.svg"
													alt=""
												/>
												5.0
											</p>
										</div>
									</a>
									<a href="#" class="product">
										<div class="imagesProduct">
											<img
												src="./assets/img/kamera-iphone-x.jpeg"
												alt=""
											/>
										</div>
										<div class="infoProduct">
											<p class="nameProduct">
												Jual Kamera Belakang untuk
												iPhone X Pro
											</p>
											<p class="price">Rp. 200.000</p>
											<div class="discountDetail">
												<div class="discountValue">
													50%
												</div>
												<div class="priceBefore">
													Rp. 400.000
												</div>
											</div>
											<p class="rating">
												<img
													src="./assets/img/icon/star_icon.svg"
													alt=""
												/>
												3.5
											</p>
										</div>
									</a>
									<a href="#" class="product">
										<div class="imagesProduct">
											<img
												src="./assets/img/baterai-1.jpg"
												alt=""
											/>
										</div>
										<div class="infoProduct">
											<p class="nameProduct">
												PROMO!! Dijual Baterai Handphone
												VHBW
											</p>
											<p class="price">Rp. 900.000</p>
											<div class="discountDetail">
												<div class="discountValue">
													10%
												</div>
												<div class="priceBefore">
													Rp. 1.000.000
												</div>
											</div>
											<p class="rating">
												<img
													src="./assets/img/icon/star_icon.svg"
													alt=""
												/>
												5.0
											</p>
										</div>
									</a>
									<a href="#" class="product">
										<div class="imagesProduct">
											<img
												src="./assets/img/lcd-phone-1.png"
												alt=""
											/>
										</div>
										<div class="infoProduct">
											<p class="nameProduct">
												HOT PROMO !! LCD Handphone
												Samsung
											</p>
											<p class="price">Rp. 630.000</p>
											<div class="discountDetail">
												<div class="discountValue">
													10%
												</div>
												<div class="priceBefore">
													Rp. 700.000
												</div>
											</div>
											<p class="rating">
												<img
													src="./assets/img/icon/star_icon.svg"
													alt=""
												/>
												4.5
											</p>
										</div>
									</a>
									<a href="#" class="product">
										<div class="imagesProduct">
											<img
												src="./assets/img/speaker-hp-2.jpg"
												alt=""
											/>
										</div>
										<div class="infoProduct">
											<p class="nameProduct">
												Dijual Terpisah Speaker
												Handphone untuk iPhone 12 Pro
											</p>
											<p class="price">Rp. 360.000</p>
											<div class="discountDetail">
												<div class="discountValue">
													10%
												</div>
												<div class="priceBefore">
													Rp. 400.000
												</div>
											</div>
											<p class="rating">
												<img
													src="./assets/img/icon/star_icon.svg"
													alt=""
												/>
												5.0
											</p>
										</div>
									</a>
									<a href="#" class="product">
										<div class="imagesProduct">
											<img
												src="./assets/img/memori-hp.jpg"
												alt=""
											/>
										</div>
										<div class="infoProduct">
											<p class="nameProduct">
												Memori Handphone Sandisk 16 GB
											</p>
											<p class="price">Rp. 225.000</p>
											<div class="discountDetail">
												<div class="discountValue">
													10%
												</div>
												<div class="priceBefore">
													Rp. 250.000
												</div>
											</div>
											<p class="rating">
												<img
													src="./assets/img/icon/star_icon.svg"
													alt=""
												/>
												4.9
											</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrapperProduct line">
					<div class="container pb-5">
						<a href="#" class="header-line">
							<img
								src="./assets/img/icon/icons8-open-end-wrench-100.png"
								alt=""
							/>
							<p>Suku Cadang Handphone</p>
						</a>

						<div class="row">
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/main-board.png"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											Main Board Handphone Iphone 7
										</p>
										<p class="price">Rp. 180.000</p>
										<div class="discountDetail">
											<div class="discountValue">10%</div>
											<div class="priceBefore">
												Rp. 200.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											3.8
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/lcd-phone-1.png"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											LCD Handphone Oppo F1
										</p>
										<p class="price">Rp. 750.000</p>
										<div class="discountDetail">
											<div class="discountValue">50%</div>
											<div class="priceBefore">
												Rp. 1.500.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											4.6
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/soc-1.jpg"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											SOC Xiaomi Redmi
										</p>
										<p class="price">Rp. 3.600.000</p>
										<div class="discountDetail">
											<div class="discountValue">10%</div>
											<div class="priceBefore">
												Rp. 4.000.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											5.5
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/chargeran.jpg"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											Chargeran Handphone Advan
										</p>
										<p class="price">Rp. 150.000</p>
										<div class="discountDetail">
											<div class="discountValue">50%</div>
											<div class="priceBefore">
												Rp. 300.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											5.5
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/kamera-2.jpg"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											Kamera Belakang iPhone 7
										</p>
										<p class="price">Rp. 2.500.000</p>
										<div class="discountDetail">
											<div class="discountValue">50%</div>
											<div class="priceBefore">
												Rp. 5.000.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											5.5
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/speaker-hp.jpg"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											Speaker Handphone Realme
										</p>
										<p class="price">Rp. 360.000</p>
										<div class="discountDetail">
											<div class="discountValue">10%</div>
											<div class="priceBefore">
												Rp. 400.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											5.5
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/flexible-1.jpg"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											Kabel Fleksibel Samsung
										</p>
										<p class="price">Rp. 90.000</p>
										<div class="discountDetail">
											<div class="discountValue">10%</div>
											<div class="priceBefore">
												Rp. 100.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											5.5
										</p>
									</div>
								</a>
							</div>
							<div class="col-6 col-lg-3">
								<a href="#" class="product">
									<div class="imagesProduct">
										<img
											src="./assets/img/lcd-phone-1.png"
											alt=""
										/>
									</div>
									<div class="infoProduct">
										<p class="nameProduct">
											LCD iPhone X Pro Max
										</p>
										<p class="price">Rp. 450.000</p>
										<div class="discountDetail">
											<div class="discountValue">10%</div>
											<div class="priceBefore">
												Rp. 500.000
											</div>
										</div>
										<p class="rating">
											<img
												src="./assets/img/icon/star_icon.svg"
												alt=""
											/>
											5.5
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Vendor-->
		<!--Jquery-->
		<script src="./assets/vendor/jquery/jquery.min.js"></script>
		<!--Bootstrap-->
		<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!--Slick Js-->
		<script src="./assets/vendor/slick/slick.min.js"></script>
		<script src="./assets/vendor/slick/slick.js"></script>

		<script>
			$(".wrapperBanner").slick({
				Infinity: true,
				centerMode: true,
				centerPadding: "120px",
				slidesToShow: 1,
				arrows: false,
				dots: true,
				appendDots: $(".slick-slider-dots"),

				responsive: [
					{
						breakpoint: 1200,
						settings: {
							centerPadding: "100px",
						},
					},
					{
						breakpoint: 992,
						settings: {
							centerPadding: "60px",
						},
					},
					{
						breakpoint: 768,
						settings: {
							centerPadding: "40px",
						},
					},
					{
						breakpoint: 576,
						settings: {
							centerPadding: "40px",
						},
					},
					{
						breakpoint: 475,
						settings: {
							centerMode: false,
						},
					},
				],
			});
		</script>

		<script>
			$(".bestOfferProduct").slick({
				dots: false,
				infinite: false,
				arrows: false,
				speed: 300,
				slidesToShow: 3.2,
				slidesToScroll: 3,

				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2.2,
							slidesToScroll: 2,
						},
					},
				],
			});
		</script>

		<script>
			$(document).ready(function() {
        // Mengambil data dari localStorage saat halaman dimuat
        var cartData = JSON.parse(localStorage.getItem('cartData')) || [];

        function updateTotalItem() {
            var totalItem = cartData.length;
            $('.totalItem').text(totalItem);
        }

        // Fungsi untuk menghasilkan elemen HTML untuk setiap item dalam data keranjang
        function generateCartItemHTML(item, index) {
            return `
                <div class="product-list">
                    <div class="form-check checkbox-select checkbox-item">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                    <div class="product-detail">
                        <div class="image-product">
                            <img src="${item.imageSrc}" alt="">
                        </div>
                        <div class="wrapper-info-product">
                            <div class="name-price-product">
                                <h5>${item.productName}</h5>
                                <p>Rp. <span class="price" data-price="${item.totalPrice}" data-index="${index}">${item.totalPrice}</span></p>
                            </div>
                            <p class="price-per-plant">Rp. <span class="price-plant">${item.price}</span>/Produk</p>
                            <div class="action-cart">
                                <div class="quantity-product">
                                    <button class="quantity-count quantity-count--minus" data-action="minus" type="button" data-index="${index}">-</button>
                                    <input class="product-quantity" type="number" name="product-quantity" min="0" max="10" value="${item.quantity}" data-index="${index}">
                                    <button class="quantity-count quantity-count--add" data-action="add" type="button" data-index="${index}">+</button>
                                </div>
                                <button class="delete-cart-button" data-index="${index}">
                                    <img src="./assets/img/icon/trash-delete-icon.svg" alt="">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }

        // Fungsi untuk mengupdate total price
        function updateTotalPrice() {
            var totalPrice = 0;
            for (var i = 0; i < cartData.length; i++) {
                totalPrice += cartData[i].totalPrice;
            }
            $('.value-total-fix').text('Rp. ' + totalPrice);
        }

        // Fungsi untuk mengupdate harga total per item
        function updateItemTotalPrice(index) {
            var item = cartData[index];
            var priceElement = $('.price[data-index="' + index + '"]');
            priceElement.text(item.totalPrice);
            priceElement.attr('data-price', item.totalPrice);
        }

        // Fungsi untuk menghapus item dari keranjang berdasarkan index
        function deleteCartItem(index) {
            cartData.splice(index, 1);
            localStorage.setItem('cartData', JSON.stringify(cartData));
            location.reload();
            $('.body-cart').empty(); // Menghapus elemen HTML sebelum memperbarui
            updateCartItems(); // Memperbarui tampilan keranjang setelah menghapus item
        }

        // Fungsi untuk memperbarui quantity item dalam keranjang
        function updateCartItemQuantity(index, quantity) {
            cartData[index].quantity = quantity;
            cartData[index].totalPrice = quantity * cartData[index].price; // Mengupdate totalPrice
            localStorage.setItem('cartData', JSON.stringify(cartData));
            updateTotalPrice(); // Memperbarui total price
            updateItemTotalPrice(index); // Memperbarui harga total per item
        }

        // Menambahkan elemen HTML untuk setiap item dalam data keranjang
        function updateCartItems() {
            var cartContainer = $('.body-cart');
            for (var i = 0; i < cartData.length; i++) {
                var itemHTML = generateCartItemHTML(cartData[i], i);
                cartContainer.append(itemHTML);
            }
        }

        // Menangani klik tombol minus dan plus
        $('.body-cart').on('click', '.quantity-count', function() {
            var action = $(this).data('action');
            var index = $(this).data('index');
            var quantityInput = $('.product-quantity[data-index="' + index + '"]');
            var quantity = parseInt(quantityInput.val());
            if (action === 'minus' && quantity > 0) {
                quantityInput.val(quantity - 1);
                updateCartItemQuantity(index, quantity - 1);
            } else if (action === 'add' && quantity < 10) {
                quantityInput.val(quantity + 1);
                updateCartItemQuantity(index, quantity + 1);
            }
        });

        // Menangani klik tombol hapus
        $('.body-cart').on('click', '.delete-cart-button', function() {
            var index = $(this).data('index');
            deleteCartItem(index);
        });

        updateCartItems(); // Memperbarui tampilan keranjang saat halaman dimuat
        updateTotalPrice(); // Memperbarui total price saat halaman dimuat
        updateTotalItem();
    });
		</script>
	</body>
</html>
