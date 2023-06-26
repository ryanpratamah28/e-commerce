<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SH E-Commerce</title>

    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-light" style="padding: 0 !important">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="text-logo">SH</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/product">Belanja</a>
                    </li>
                </ul>
                <div class="slicing-color"></div>
                @if (Route::has('login'))
                    @auth
                        <a class="btn btn-light" href="{{ route('logout') }}">
                            <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                            Logout
                        </a>
                    @else
                        <a class="btn btn-light" href="/login">
                            <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                            Login
                        </a>
                        @if (Route::has('register'))
                            <a class="btn btn-light" href="/register">
                                <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        </div>
    </nav>

    <div style="background-color: #f6f7fb">
        <div class="container">
            <div class="row">
                <div class="content1" id="content1">
                    <div class="col-7">
                        <h1>
                            Temukan Pasar Terbaik untuk <span>Spare Part Handphone</span> Berkualitas Tinggi
                        </h1>
                        <p>Selamat datang di SH, tempatnya para pecinta gadget dan teknologi! SH adalah marketplace
                            inovatif
                            yang menyediakan segala kebutuhan Anda dalam mencari dan membeli spare part handphone dengan
                            cara yang mudah dan menyenangkan.</p>
                        <div class="flex-button-content1">
                            <a class="btn btn-dark" href="/show">Belanja Sekarang</a>
                        </div>
                    </div>

                    <div class="col-5">
                        <img src="assets/img/homepage/undraw_empty_cart_co35.svg">
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-inline">
                        <div class="m-3">
                            <h1 class="text-center">40</h1>
                            <small>Produk</small>
                        </div>
                        <div class="m-3">
                            <h1 class="text-center">1</h1>
                            <small>Produk Terjual</small>
                        </div>
                        <div class="m-3">
                            <h1 class="text-center">5</h1>
                            <small>Kategori</small>
                        </div>
                    </div>
                </div>

                <div class="content3" id="content3">
                    <div class="flex-content3">
                        <div class="image-absolute">
                            <img class="circle-shapes1" src="assets/img/homepage/circle-shapes.png" width="200px"
                                style="margin: 0 0 0 0;">
                            <img class="circle-shapes2" src="assets/img/homepage/circle-shapes.png" width="300px"
                                style="margin: 0 0 0 1000px;">
                            <img class="hexagon" src="assets/img/homepage/hexagon-shapes.png" width="300px"
                                style="margin: 140px 0 0 440px;">
                            <img class="line" src="assets/img/homepage/line-shapes.png" width="350px"
                                style="margin: 390px 0 0 -30px;">
                        </div>
                        <div class="image-content3">
                            <img src="assets/img/homepage/hp.png">
                        </div>
                        <div class="text-content3">
                            <h5>SH</h5>
                            <h2>Marketplace Penyedia Berbagai Spare Part Handphone No. 1 Di Indonesia</h2>
                            <p>Jadi, tunggu apa lagi? Kunjungi SH sekarang dan temukan segala spare part handphone yang Anda butuhkan. Jadikan pengalaman belanja Anda lebih menyenangkan dengan SH, pasar online terbaik untuk spare part handphone!</p>
                        </div>
                    </div>
                </div>

                <div class="content4" id="content4">
                    <h5>Produk</h5>
                    <h2>SPARE PART HANDPHONE</h2>
                    <div class="multiple-items">
                        <div class="card">
                            <img class="card-img-top" style="padding: 20px" src="assets/img/memori-hp.jpg"
                                alt="Card img cap">
                            <div class="card-body">
                                <h5 class="card-title">Memori HP Sandisk Ultra 65 GB</h5>
                                <p class="card-text">Rp. 250.000</p>
                                <a href="#" class="btn btn-dark" style="width: 100%;">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" style="padding: 20px" src="assets/img/memori-hp.jpg"
                                alt="Card img cap">
                            <div class="card-body">
                                <h5 class="card-title">Memori HP Sandisk Ultra 65 GB</h5>
                                <p class="card-text">Rp. 250.000</p>
                                <a href="#" class="btn btn-dark" style="width: 100%;">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" style="padding: 20px" src="assets/img/memori-hp.jpg"
                                alt="Card img cap">
                            <div class="card-body">
                                <h5 class="card-title">Memori HP Sandisk Ultra 65 GB</h5>
                                <p class="card-text">Rp. 250.000</p>
                                <a href="#" class="btn btn-dark" style="width: 100%;">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" style="padding: 20px" src="assets/img/memori-hp.jpg"
                                alt="Card img cap">
                            <div class="card-body">
                                <h5 class="card-title">Memori HP Sandisk Ultra 65 GB</h5>
                                <p class="card-text">Rp. 250.000</p>
                                <a href="#" class="btn btn-dark" style="width: 100%;">Lihat Detail</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="content5 d-flex" id="content5">
                    <div class="col-5 left">
                        <h5>Kenali kami</h5>
                        <h2>Pertanyaan yang Sering Diajukan</h2>
                    </div>
                    <div class="col-7 right">
                        <button class="collapsible">Apa itu SH ?
                        </button>
                        <div class="content">
                            <p>SH adalah marketplace inovatif yang menyediakan berbagai spare part handphone
                                berkualitas
                                tinggi. Kami memungkinkan Anda untuk dengan mudah mencari, memilih, dan membeli
                                komponen-komponen penting untuk memperbaiki atau meningkatkan ponsel Anda.</p>
                        </div>

                        <button class="collapsible">Apa jenis spare part yang tersedia di SH ?</button>
                        <div class="content">
                            <p>Kami menawarkan beragam spare part handphone, termasuk layar LCD, baterai, kamera,
                                speaker,
                                konektor pengisian, tombol fisik, dan masih banyak lagi. Kami berupaya untuk
                                menyediakan
                                komponen untuk berbagai merek dan model handphone, sehingga Anda dapat dengan mudah
                                menemukan yang Anda butuhkan.

                            </p>
                        </div>

                        <button class="collapsible">Bagaimana cara mencari spare part yang tepat di SH ?</button>
                        <div class="content">
                            <p>Anda dapat dengan mudah mencari spare part yang tepat di SH melalui fitur pencarian
                                kami.
                                Cukup ketik merek, model, atau jenis spare part yang Anda cari, dan kami akan
                                menampilkan
                                hasil yang relevan. Selain itu, Anda juga dapat menjelajahi kategori produk kami
                                untuk
                                menemukan opsi yang sesuai.</p>
                        </div>

                        <button class="collapsible">Bagaimana dengan pengiriman barang ? </button>
                        <div class="content">
                            <p>Kami bekerja sama dengan mitra pengiriman terpercaya untuk memastikan barang Anda
                                sampai
                                dengan cepat dan aman. Kami menawarkan opsi pengiriman yang dapat Anda pilih saat
                                checkout.
                                Jangkauan pengiriman kami mencakup wilayah yang luas, sehingga Anda dapat menikmati
                                pelayanan pengiriman ke hampir semua lokasi.

                            </p>
                        </div>

                        <button class="collapsible">Bagaimana proses pembelian di SH ?</button>
                        <div class="content">
                            <p>Proses pembelian di SH sangat mudah. Setelah Anda memilih spare part yang ingin Anda
                                beli,
                                tambahkan ke keranjang belanja Anda. Setelah itu, ikuti langkah-langkah checkout,
                                masukkan
                                detail pengiriman Anda, dan selesaikan pembayaran. Setelah pembayaran selesai,
                                pesanan
                                Anda
                                akan diproses dan dikirim ke alamat yang Anda berikan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="icon-sosmed">
            <div style="width: 50px; height: 50px; background-color: white; border-radius: 40px;">
                <img src="assets/img/homepage/instagram.svg" width="25px" style="margin-top: 12px;">
            </div>
            <div style="width: 50px; background-color: white; border-radius: 40px;">
                <img src="assets/img/homepage/envelope.svg" width="25px" style="margin-top: 12px;">
            </div>
            <div style="width: 50px; background-color: white; border-radius: 40px;">
                <img src="assets/img/homepage/telephone.svg" width="25px" style="margin-top: 12px;">
            </div>
        </div>
        <p class="alamat">Spare Part Handphone E-Commerce</p>
    </footer>

    <!--Jquery-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!--Bootstrap-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("navbarNav");
            var button = document.getElementById("btn");
            if (x.className === "collapse navbar-collapse") {
                x.className += " responsive";
                button.style.display = "block";
            } else {
                x.className = "collapse navbar-collapse";
            }
        }
    </script>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        $(document).on('click', '.navbar-collapse.in', function(e) {
            if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
                $(this).collapse('hide');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            centerMode: true,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 430,
                        settings: {
                            slidesToShow: 1,
                            centerMode: false,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
