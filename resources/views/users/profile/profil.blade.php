<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="panel">
          <div class="col-3">
            <div class="card-title">
            @if (is_null($user['image_profile']))
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fillRule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg>
            @else
                <img src="{{asset('assets/img/' .Auth::user()->image_profile)}}" alt=""  
                width="35" height="35" style="border-radius: 20px; margin: 2px 0 0 0;">
            @endif
              <p>{{Auth::user()->name}}</p>
            </div>
            <hr />
            <div class="card-body">
              <div class="list">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
                <a href="">Account</a>
              </div>
              <div class="list">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-cart2" viewBox="0 0 16 16">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
                <a class="tablinks" onclick="openCity(event, 'history')" >History Transaction</a>
              </div>
              <div class="list">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                  <path fillRule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                  <path fillRule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
                <a href="{{route('logout')}}">logout</a>
              </div>
            </div>
          </div>
          <div class="col-8">
            <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'data')" id="defaultOpen">Account</button>
            <button class="tablinks" onclick="openCity(event, 'history')">History Transaction</button>
            </div>
            <div id="data" class="tabcontent">
              <div class='content'>
                <div class="left">
                        @if (is_null($user['image_profile']))
                        <img src="../assets/faces/1.jpg" alt="" 
                            width="100" height="200" style="border-radius: 20px;" class="d-block m-auto">
                            @else
                            <img src="{{asset('assets/img/' .Auth::user()->image_profile)}}" alt=""  
                            width="100" height="200" style="border-radius: 20px;" class="d-block m-auto">
                        @endif
                    <a href="{{'/profile/edit'}}"><button class="btn btn-primary">Edit Your Profile</button></a>
                    <small>Besar file: maksimum 4.000.000 bytes (4 MB). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</small>
                </div>
                <div class="right">
                    <div class="right-top">
                        <h4>Biodata</h4>
                        <tr>
                            <td>Name</td>
                            <td class="spacing">: {{Auth::user()->name}}</td><br>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td class="spacing">: {{Auth::user()->phone}}</td><br>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="spacing">: {{Auth::user()->email}}</td><br>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td class="spacing">: {{Auth::user()->role}}</td><br>
                        </tr>
                    </div>
                    <div class="right-bottom">
                        <h4>Address</h4>
                        <p>{{Auth::user()->adress}}</p>
                    </div>
                </div>
              </div>
            </div>
            <div id="history" class="tabcontent">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Paket 3 (ukuran 2 X 3)</td>
                <td>Rp. 20.000,00</td>
                <td>31 April 2023</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Charger Hp (xiomi)</td>
                <td>Rp.50.000,00</td>
                <td>20 Januari 2023</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>cassing Hp (Samsung)</td>
                <td>Rp. 10.000,00</td>
                <td>23 Februari 2022</td>
                </tr>
            </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>

      <script>
        document.getElementById('defaultOpen').click();

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName('tabcontent');
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = 'none';
            }
            tablinks = document.getElementsByClassName('tablinks');
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(' active', '');
            }
            evt.target.className += ' active';
            document.getElementById(cityName).style.display = 'block';
        }
      </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>