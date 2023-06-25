<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantsasri - Shop</title>

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">

    <!--Slick CSS-->
    <link rel="stylesheet" href="./assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="./assets/vendor/slick/slick-theme.css">

    <!--App Css-->
    <link rel="stylesheet" href="./assets/css/app.css">

    <!--CSS Assets this page-->
    <link rel="stylesheet" href="./assets/css/cart.css">
</head>
<body>

    <div id="app">
        <div id="navbar" class="fixed-top">
            <div class="container">
                <div class="navbar-wrapper">
                    <div class="leftSideNavbar">
                        <div class="text-logo">
                            <h1 class="text-black me-3">SH</h1>
                        </div>
                        <div class="searchMenu">
                            <form action="">
                                <div class="input-group">
                                    <div class="form-outline">
                                      <input type="search" id="form1" class="form-control" />
                                      <label class="form-label" for="form1">Search</label>
                                    </div>
                                    <button type="button" class="buttonSearch button button-primary">
                                        <img src="./assets/img/icon/search_icon.svg" alt="">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="rightSideNavbar">
                        <div class="beforeLogin">
                            <div class="buttonWrapper">
                                <a href="#" class="button button-outline button-outline-primary">Login</a>
                                <a href="#" class="button button-primary">Sign Up</a>
                            </div>
                            <div class="cartWrapper">
                                <a href="#" class="cart icon">
                                    <img src="./assets/img/icon/shopping-cart_icon.svg" alt="">
                                    <div class="totalItem">9</div>
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
            <div class="container">
               <div class="row first-line">
                   <div class="col-12 col-lg-8 col-xl-9">
                        <div class="card">
                            <h3>Keranjang Kamu</h3>
                            <div class="alert alert-danger" role="alert">
                                <div class="icon-alert">
                                    <img src="./assets/img/icon/alert-icon.svg" alt="">
                                </div>
                                Hello, you are not logged in, please Sign In !
                            </div>
                            <div class="cart-container">
                                <div class="head-cart">
                                    <div class="form-check checkbox-select">
                                        <input class="form-check-input checkbox-all" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Choose all
                                        </label>
                                    </div>
                                    <div class="delete-button delete-all">
                                        <button class="delete-cart-button">
                                            <img src="./assets/img/icon/trash-delete-icon.svg" alt="">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                                <div class="body-cart">
                                    <div class="product-list">
                                        <div class="form-check checkbox-select checkbox-item">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="product-detail">
                                            <div class="image-product">
                                                <img src="./assets/img/memori-hp.jpg" alt="">
                                            </div>
                                            <div class="wrapper-info-product">
                                                <div class="name-price-product">
                                                    <h5>Memori Handphone 60 GB</h5>
                                                    <p>Rp. <span class="price">250.000</span></p>
                                                </div>
                                                <p class="price-per-plant">Rp. <span class="price-plant">250.00</span>/Produk</p>
                                                <div class="action-cart">
                                                    <div class="quantity-product">
                                                        <button class="quantity-count quantity-count--minus" data-action="minus" type="button">-</button>
                                                        <input class="product-quantity" type="number" name="product-quantity" min="0" max="10" value="1">
                                                        <button class="quantity-count quantity-count--add" data-action="add" type="button">+</button>
                                                    </div>
                                                    <button class="delete-cart-button">
                                                        <img src="./assets/img/icon/trash-delete-icon.svg" alt="">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list">
                                        <div class="form-check checkbox-select checkbox-item">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="product-detail">
                                            <div class="image-product">
                                                <img src="./assets/img/flexible-1.jpg" alt="">
                                            </div>
                                            <div class="wrapper-info-product">
                                                <div class="name-price-product">
                                                    <h5>Kabel Fleksibel untuk Handphone Samsung</h5>
                                                    <p>Rp. <span class="price">27.000</span></p>
                                                </div>
                                                <p class="price-per-plant">Rp. <span class="price-plant">27.000</span>/Produk</p>
                                                <div class="action-cart">
                                                    <div class="quantity-product">
                                                        <button class="quantity-count quantity-count--minus" data-action="minus" type="button">-</button>
                                                        <input class="product-quantity" type="number" name="product-quantity" min="0" max="10" value="1">
                                                        <button class="quantity-count quantity-count--add" data-action="add" type="button">+</button>
                                                    </div>
                                                    <button class="delete-cart-button">
                                                        <img src="./assets/img/icon/trash-delete-icon.svg" alt="">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class="col-12 col-lg-4 col-xl-3">
                        <div class="wrapper-delivery">
                            <div class="card">
                                <h4>Pengiriman</h4>
                                
                                <div class="total-fix">
                                    <p>Total</p>
                                    <p class="value-total-fix">$60</p>
                                </div>
                                <button class="button button-primary w-100">
                                    Checkout
                                </button>
                            </div>
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
            $('.checkbox-all').click(function() {
                $('.checkbox-item').toggleClass('show');
            });
            $('.checkbox-all').click(function() {
                $('.delete-all').toggleClass('show');
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