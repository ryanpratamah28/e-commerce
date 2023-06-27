<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantsasri - Shop</title>

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css">

    <!--Slick CSS-->
    <link rel="stylesheet" href="./assets/vendor/slick/slick.css">
    <link rel="stylesheet" href="./assets/vendor/slick/slick-theme.css">

    <!--App Css-->
    <link rel="stylesheet" href="./assets/css/app.css">

    <!--CSS Profile-->
    <link rel="stylesheet" href="./assets/css/history-transaksi.css">
</head>

<body>

    <div id="app">
        <div id="navbar" class="fixed-top">
            <div class="container">
                <div class="navbar-wrapper">
                    <div class="leftSideNavbar">
                        <div class="logo-text">
                            <h1 class="text-black me-3">SH</h1>
                        </div>
                    </div>

                    <div class="rightSideNavbar">
                        <div class="afterLogin">
                            <div class="cartWrapper">
                                <a href="/cart" class="cart icon">
                                    <img src="./assets/img/icon/shopping-cart_icon.svg" alt="">
                                    <div class="totalItem">0</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mainContent">
            <div class="container">
                <div class="first-line">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-3 mb-4 mb-lg-0">
                            <div class="card card-user-menu">
                                <div class="user-detail">
                                    <img src="./assets/faces/1.jpg" alt="">
                                    <p class="name-user">{{Auth::user()->name}}</p>
                                </div>
                                <div class="menu-profile">
                                    <a href="/profile" class="menu">
                                        <ion-icon name="person"></ion-icon>
                                        Account
                                    </a>
                                    <a href="/history" class="menu">
                                        <ion-icon name="cart"></ion-icon>
                                        History Transaction
                                    </a>
                                    <a href="{{route('logout')}}" class="menu logout">
                                        <ion-icon name="log-out"></ion-icon>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="history-container">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-All-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-All" type="button" role="tab" aria-controls="nav-All"
                                            aria-selected="true">Semua Transaksi</button>
                                        <button class="nav-link" id="nav-done-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-done" type="button" role="tab" aria-controls="nav-done"
                                            aria-selected="false">Selesai</button>
                                        <button class="nav-link" id="nav-pengiriman-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-pengiriman" type="button" role="tab" aria-controls="nav-pengiriman"
                                            aria-selected="false">Konfirmasi Penerimaan</button>
                                        <button class="nav-link" id="nav-proccess-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-proccess" type="button" role="tab"
                                            aria-controls="nav-proccess" aria-selected="false">Sedang Proses</button>
                                        <button class="nav-link" id="nav-failed-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-failed" type="button" role="tab"
                                            aria-controls="nav-failed" aria-selected="false">Gagal</button>
                                    </div>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-All" role="tabpanel"
                                            aria-labelledby="nav-All-tab">
                                        @foreach($history as $histories)
                                            @if($histories->email == Auth::user()->email)
                                            <div class="history-item">
                                                <div class="head-item">
                                                    <div class="icon">
                                                        <img src="./assets/img/icon/icon-history-transaksi.svg" alt="">
                                                    </div>
                                                    <div class="date">{{$histories->updated_at}}</div>
                                                    @if($histories['status'] == 1)
                                                    <div class="status success">Selesai</div>
                                                    @elseif($histories['status'] == 2)
                                                    <div class="status danger">Gagal</div>
                                                    @elseif($histories['status'] == 3)
                                                    <div class="alert alert-warning" role="alert" style="margin: 0 5px 0 0; padding: 5px 5px;">Pesanan sedang diantar</div>
                                                    @elseif($histories['status'] == 0)
                                                    <div class="alert alert-secondary" role="alert" style="margin: 0 5px 0 0; padding: 5px 5px;">proses</div>
                                                    @endif
                                                </div>
                                                <div class="body-item">
                                                    <div class="image-item">
                                                        <img src="{{ $histories->{"image-product"} }}" alt="">
                                                    </div>
                                                    <div class="detail-item">
                                                        <a href="#" class="name-item">{{$histories->product}}</a>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="price">
                                                                <p>{{$histories->price}}</p>
                                                            </div>
                                                            <div class="action-item">
                                                                <button type="button" class="button button-text"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#seeDetailModal{{$histories->id}}">
                                                                    Lihat Detail
                                                                </button>
                                                            </div>

                                                            <!--Modal See Detail-->
                                                            <div class="modal fade modal-detail" id="seeDetailModal{{$histories->id}}"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="seeDetailModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog  modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="seeDetailModalLabel">Transaction
                                                                                Detail</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="line-detail">
                                                                                <h5>Info Transaction</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Transaction Date</td>
                                                                                            <td>{{$histories->updated_at}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Info Delivered</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Name</td>
                                                                                            <td class="bold-text">{{$histories->name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Address</td>
                                                                                            <td>{{$histories->adress}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Produk</td>
                                                                                            <td>{{$histories->product}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Payment Details</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="bold-text">Total
                                                                                            </td>
                                                                                            <td class="bold-text">{{$histories->price}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Modal Track Order-->
                                                            <div class="modal fade modal-tracking"
                                                                id="trackTransaksiModal" data-bs-backdrop="static"
                                                                data-bs-keyboard="false" tabindex="-1"
                                                                aria-labelledby="trackTransaksiModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="trackTransaksiModalLabel">Tracking
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-12 col-md-6 mb-3 mb-md-0">
                                                                                    <div class="detail-tracking">
                                                                                        <div
                                                                                            class="line-tracking number-tracking">
                                                                                            <p class="title-detail">No
                                                                                                Resi</p>
                                                                                            <h4 class="bold-text">
                                                                                                37463591974</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Sender</p>
                                                                                            <h4 class="bold-text">
                                                                                                Plantsasri ID</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Receiver</p>
                                                                                            <h4 class="bold-text">Reksa
                                                                                                Prayoga</h4>
                                                                                            <h4 class="address">Jl.
                                                                                                Skip, Kec. Bogor Sel.,
                                                                                                Kota Bogor, Jawa Barat,
                                                                                                16134 [Note: rt01 rw01
                                                                                                no47]</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="process-tracking">
                                                                                        <div class="tracking-images">
                                                                                            <img src="./assets/img/tracking-vector.svg"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <p class="status">Status :
                                                                                            <span>Delivered</span></p>
                                                                                        <div class="card">
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track now-proccess">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Proces</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Delivered</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Done</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                        
                                        </div>
                                        <div class="tab-pane fade" id="nav-done" role="tabpanel"
                                            aria-labelledby="nav-done-tab">
                                             @foreach($history as $histories)
                                            @if($histories->email == Auth::user()->email && $histories['status'] == 1)
                                            <div class="history-item">
                                                <div class="head-item">
                                                    <div class="icon">
                                                        <img src="./assets/img/icon/icon-history-transaksi.svg" alt="">
                                                    </div>
                                                    <div class="date">{{$histories->updated_at}}</div>
                                                    <div class="status success">Selesai</div>
                                                </div>
                                                <div class="body-item">
                                                    <div class="image-item">
                                                        <img src="{{ $histories->{"image-product"} }}" alt="">
                                                    </div>
                                                    <div class="detail-item">
                                                        <a href="#" class="name-item">{{$histories->product}}</a>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="price">
                                                                <p>{{$histories->price}}</p>
                                                            </div>
                                                            <div class="action-item">
                                                                <button type="button" class="button button-text"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#seeDetail2Modal{{$histories->id}}">
                                                                    Lihat Detail
                                                                </button>
                                                            </div>

                                                            <!--Modal See Detail-->
                                                            <div class="modal fade modal-detail" id="seeDetail2Modal{{$histories->id}}"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="seeDetailModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog  modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="seeDetailModalLabel">Transaction
                                                                                Detail</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="line-detail">
                                                                                <h5>Info Transaction</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Transaction Date</td>
                                                                                            <td>{{$histories->updated_at}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Info Delivered</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Name</td>
                                                                                            <td class="bold-text">{{$histories->name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Address</td>
                                                                                            <td>{{$histories->adress}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Payment Details</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="bold-text">Total
                                                                                            </td>
                                                                                            <td class="bold-text">{{$histories->price}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Modal Track Order-->
                                                            <div class="modal fade modal-tracking"
                                                                id="trackTransaksiModal" data-bs-backdrop="static"
                                                                data-bs-keyboard="false" tabindex="-1"
                                                                aria-labelledby="trackTransaksiModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="trackTransaksiModalLabel">Tracking
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-12 col-md-6 mb-3 mb-md-0">
                                                                                    <div class="detail-tracking">
                                                                                        <div
                                                                                            class="line-tracking number-tracking">
                                                                                            <p class="title-detail">No
                                                                                                Resi</p>
                                                                                            <h4 class="bold-text">
                                                                                                37463591974</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Sender</p>
                                                                                            <h4 class="bold-text">
                                                                                                Plantsasri ID</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Receiver</p>
                                                                                            <h4 class="bold-text">Reksa
                                                                                                Prayoga</h4>
                                                                                            <h4 class="address">Jl.
                                                                                                Skip, Kec. Bogor Sel.,
                                                                                                Kota Bogor, Jawa Barat,
                                                                                                16134 [Note: rt01 rw01
                                                                                                no47]</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="process-tracking">
                                                                                        <div class="tracking-images">
                                                                                            <img src="./assets/img/tracking-vector.svg"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <p class="status">Status :
                                                                                            <span>Delivered</span></p>
                                                                                        <div class="card">
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track now-proccess">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Proces</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Delivered</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Done</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                            </div>
                                        <div class="tab-pane fade" id="nav-pengiriman" role="tabpanel"
                                            aria-labelledby="nav-pengiriman-tab">
                                             @foreach($history as $histories)
                                            @if($histories->email == Auth::user()->email && $histories['status'] == 3)
                                            <div class="history-item">
                                                <div class="head-item">
                                                    <div class="icon">
                                                        <img src="./assets/img/icon/icon-history-transaksi.svg" alt="">
                                                    </div>
                                                    <div class="date">{{$histories->updated_at}}</div>
                                                    <div class="alert alert-warning" role="alert" style="margin: 0 5px 0 0; padding: 5px 5px;">Pesanan sedang diantar</div>
                                                </div>
                                                <div class="body-item">
                                                    <div class="image-item">
                                                        <img src="{{ $histories->{"image-product"} }}" alt="">
                                                    </div>
                                                    <div class="detail-item">
                                                        <a href="#" class="name-item">{{$histories->product}}</a>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="price">
                                                                <p>{{$histories->price}}</p>
                                                            </div>
                                                            <div class="action-item" style="column-gap:10px;">
                                                                <button type="button" class="button button-text"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#seeDetail3Modal{{$histories->id}}">
                                                                    Lihat Detail
                                                                </button>
                                                                @if($histories['status'] == 1)
                                                                    <p style="color: green">Di Terima</p>
                                                                    @if($histories['updated_at'])
                                                                        <p>Tanggal Update: {{ $histories['updated_at']->format('d-m-Y') }}</p>
                                                                    @endif
                                                                @else
                                                                    <div class="d-flex gap-2">
                                                                        <form action="{{ route('penerimaan', $histories->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <input type="hidden" name="updated_at" value="{{ now() }}">
                                                                            <button type="submit" class="btn" style="background-color: black; color: white;" style="color: white; background:rgb(24, 175, 24)"> Konfirmasi Penerimaan</button>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                            </div>

                                                            <!--Modal See Detail-->
                                                            <div class="modal fade modal-detail" id="seeDetail3Modal{{$histories->id}}"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="seeDetailModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog  modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="seeDetailModalLabel">Transaction
                                                                                Detail</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="line-detail">
                                                                                <h5>Info Transaction</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Transaction Date</td>
                                                                                            <td>{{$histories->updated_at}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Info Delivered</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Name</td>
                                                                                            <td class="bold-text">{{$histories->name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Address</td>
                                                                                            <td>{{$histories->adress}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Payment Details</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="bold-text">Total
                                                                                            </td>
                                                                                            <td class="bold-text">{{$histories->price}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Modal Track Order-->
                                                            <div class="modal fade modal-tracking"
                                                                id="trackTransaksiModal" data-bs-backdrop="static"
                                                                data-bs-keyboard="false" tabindex="-1"
                                                                aria-labelledby="trackTransaksiModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="trackTransaksiModalLabel">Tracking
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-12 col-md-6 mb-3 mb-md-0">
                                                                                    <div class="detail-tracking">
                                                                                        <div
                                                                                            class="line-tracking number-tracking">
                                                                                            <p class="title-detail">No
                                                                                                Resi</p>
                                                                                            <h4 class="bold-text">
                                                                                                37463591974</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Sender</p>
                                                                                            <h4 class="bold-text">
                                                                                                Plantsasri ID</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Receiver</p>
                                                                                            <h4 class="bold-text">Reksa
                                                                                                Prayoga</h4>
                                                                                            <h4 class="address">Jl.
                                                                                                Skip, Kec. Bogor Sel.,
                                                                                                Kota Bogor, Jawa Barat,
                                                                                                16134 [Note: rt01 rw01
                                                                                                no47]</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="process-tracking">
                                                                                        <div class="tracking-images">
                                                                                            <img src="./assets/img/tracking-vector.svg"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <p class="status">Status :
                                                                                            <span>Delivered</span></p>
                                                                                        <div class="card">
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track now-proccess">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Proces</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Delivered</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Done</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                            </div>
                                        <div class="tab-pane fade" id="nav-proccess" role="tabpanel"
                                            aria-labelledby="nav-proccess-tab">
                                             @foreach($history as $histories)
                                            @if($histories->email == Auth::user()->email && $histories['status'] == 0)
                                            <div class="history-item">
                                                <div class="head-item">
                                                    <div class="icon">
                                                        <img src="./assets/img/icon/icon-history-transaksi.svg" alt="">
                                                    </div>
                                                    <div class="date">{{$histories->updated_at}}</div>
                                                    <div class="alert alert-secondary" role="alert" style="margin: 0 5px 0 0; padding: 5px 5px;">Proses</div>
                                                </div>
                                                <div class="body-item">
                                                    <div class="image-item">
                                                        <img src="{{ $histories->{"image-product"} }}" alt="">
                                                    </div>
                                                    <div class="detail-item">
                                                        <a href="#" class="name-item">{{$histories->product}}</a>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="price">
                                                                <p>{{$histories->price}}</p>
                                                            </div>
                                                            <div class="action-item">
                                                                <button type="button" class="button button-text"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#seeDetail4Modal{{$histories->id}}">
                                                                    Lihat Detail
                                                                </button>
                                                            </div>

                                                            <!--Modal See Detail-->
                                                            <div class="modal fade modal-detail" id="seeDetail4Modal{{$histories->id}}"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="seeDetailModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog  modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="seeDetailModalLabel">Transaction
                                                                                Detail</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="line-detail">
                                                                                <h5>Info Transaction</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Transaction Date</td>
                                                                                            <td>{{$histories->updated_at}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Info Delivered</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Name</td>
                                                                                            <td class="bold-text">{{$histories->name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Address</td>
                                                                                            <td>{{$histories->adress}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Payment Details</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="bold-text">Total
                                                                                            </td>
                                                                                            <td class="bold-text">{{$histories->price}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Modal Track Order-->
                                                            <div class="modal fade modal-tracking"
                                                                id="trackTransaksiModal" data-bs-backdrop="static"
                                                                data-bs-keyboard="false" tabindex="-1"
                                                                aria-labelledby="trackTransaksiModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="trackTransaksiModalLabel">Tracking
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-12 col-md-6 mb-3 mb-md-0">
                                                                                    <div class="detail-tracking">
                                                                                        <div
                                                                                            class="line-tracking number-tracking">
                                                                                            <p class="title-detail">No
                                                                                                Resi</p>
                                                                                            <h4 class="bold-text">
                                                                                                37463591974</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Sender</p>
                                                                                            <h4 class="bold-text">
                                                                                                Plantsasri ID</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Receiver</p>
                                                                                            <h4 class="bold-text">Reksa
                                                                                                Prayoga</h4>
                                                                                            <h4 class="address">Jl.
                                                                                                Skip, Kec. Bogor Sel.,
                                                                                                Kota Bogor, Jawa Barat,
                                                                                                16134 [Note: rt01 rw01
                                                                                                no47]</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="process-tracking">
                                                                                        <div class="tracking-images">
                                                                                            <img src="./assets/img/tracking-vector.svg"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <p class="status">Status :
                                                                                            <span>Delivered</span></p>
                                                                                        <div class="card">
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track now-proccess">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Proces</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Delivered</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Done</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                            </div>
                                        <div class="tab-pane fade" id="nav-failed" role="tabpanel"
                                            aria-labelledby="nav-failed-tab">
                                             @foreach($history as $histories)
                                            @if($histories->email == Auth::user()->email && $histories['status'] == 2)
                                            <div class="history-item">
                                                <div class="head-item">
                                                    <div class="icon">
                                                        <img src="./assets/img/icon/icon-history-transaksi.svg" alt="">
                                                    </div>
                                                    <div class="date">{{$histories->updated_at}}</div>
                                                    <div class="status danger">Gagal</div>
                                                </div>
                                                <div class="body-item">
                                                    <div class="image-item">
                                                        <img src="{{ $histories->{"image-product"} }}" alt="">
                                                    </div>
                                                    <div class="detail-item">
                                                        <a href="#" class="name-item">{{$histories->product}}</a>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="price">
                                                                <p>{{$histories->price}}</p>
                                                            </div>
                                                            <div class="action-item">
                                                                <button type="button" class="button button-text"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#seeDetail5Modal{{$histories->id}}">
                                                                    Lihat Detail
                                                                </button>
                                                            </div>

                                                            <!--Modal See Detail-->
                                                            <div class="modal fade modal-detail" id="seeDetail5Modal{{$histories->id}}"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="seeDetailModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog  modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="seeDetailModalLabel">Transaction
                                                                                Detail</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="line-detail">
                                                                                <h5>Info Transaction</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Transaction Date</td>
                                                                                            <td>{{$histories->updated_at}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Info Delivered</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Name</td>
                                                                                            <td class="bold-text">{{$histories->name}}</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Address</td>
                                                                                            <td>{{$histories->adress}}</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="line-detail">
                                                                                <h5>Payment Details</h5>
                                                                                <table style="width: 100%;">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="bold-text">Total
                                                                                            </td>
                                                                                            <td class="bold-text">{{$histories->price}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--Modal Track Order-->
                                                            <div class="modal fade modal-tracking"
                                                                id="trackTransaksiModal" data-bs-backdrop="static"
                                                                data-bs-keyboard="false" tabindex="-1"
                                                                aria-labelledby="trackTransaksiModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="trackTransaksiModalLabel">Tracking
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div
                                                                                    class="col-12 col-md-6 mb-3 mb-md-0">
                                                                                    <div class="detail-tracking">
                                                                                        <div
                                                                                            class="line-tracking number-tracking">
                                                                                            <p class="title-detail">No
                                                                                                Resi</p>
                                                                                            <h4 class="bold-text">
                                                                                                37463591974</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Sender</p>
                                                                                            <h4 class="bold-text">
                                                                                                Plantsasri ID</h4>
                                                                                        </div>
                                                                                        <div class="line-tracking">
                                                                                            <p class="title-detail">
                                                                                                Receiver</p>
                                                                                            <h4 class="bold-text">Reksa
                                                                                                Prayoga</h4>
                                                                                            <h4 class="address">Jl.
                                                                                                Skip, Kec. Bogor Sel.,
                                                                                                Kota Bogor, Jawa Barat,
                                                                                                16134 [Note: rt01 rw01
                                                                                                no47]</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="process-tracking">
                                                                                        <div class="tracking-images">
                                                                                            <img src="./assets/img/tracking-vector.svg"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <p class="status">Status :
                                                                                            <span>Delivered</span></p>
                                                                                        <div class="card">
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track now-proccess">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Proces</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Delivered</p>
                                                                                            </div>
                                                                                            <div class="tracking">
                                                                                                <div
                                                                                                    class="process-track">
                                                                                                    <div
                                                                                                        class="bullets-track">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="line-track">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p class="name-process">
                                                                                                    Done</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                            </div>
                                    </div>
                                </div>
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
    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        localStorage.removeItem('cartData');
    </script>
</html>