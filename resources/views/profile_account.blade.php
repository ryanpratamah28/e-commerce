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
    <link rel="stylesheet" href="./assets/css/profile.css">
</head>
<body>

    <div id="app">
        <div id="navbar" class="fixed-top">
            <div class="container">
                <div class="navbar-wrapper">
                    <div class="leftSideNavbar">
                        <div class="text-logo">
                            <h1 class="me-3">SH</h1>
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
                        <!-- <div class="beforeLogin">
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
                        </div> -->
                        <div class="afterLogin">
                            <a href="#" class="profileWrapper icon">
                                <img src="./assets/img/icon/profile_icon.svg" alt="">
                            </a>
                            <div class="cartWrapper">
                                <a href="#" class="cart icon">
                                    <img src="./assets/img/icon/shopping-cart_icon.svg" alt="">
                                    <div class="totalItem">9</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mainContent">
            <div class="container">
               <div class="profileContainer first-line">
                   <div class="row">
                       <div class="col-12 col-lg-4 col-xl-3 mb-4 mb-lg-0">
                           <div class="card card-user-menu">
                               <div class="user-detail">
                                   <img src="./assets/faces/1.jpg" alt="">
                                   <p class="name-user">Reksa Prayoga</p>
                               </div>
                               <div class="menu-profile">
                                    <a href="#" class="menu">
                                        <ion-icon name="person"></ion-icon>
                                        Account
                                    </a>
                                    <a href="#" class="menu">
                                        <ion-icon name="cart"></ion-icon>
                                        History Transaction
                                    </a>
                                    <a href="#" class="menu logout">
                                        <ion-icon name="log-out"></ion-icon>
                                        Logout
                                    </a>
                               </div>
                           </div>
                       </div>
                       <div class="col-12 col-lg-8 col-xl-9">
                           <div class="card profile-data">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-profileData-tab" data-bs-toggle="tab" data-bs-target="#nav-profileData" type="button" role="tab" aria-controls="nav-profileData" aria-selected="true">Profile Setting</button>
                                    <button class="nav-link" id="nav-securitySetting-tab" data-bs-toggle="tab" data-bs-target="#nav-securitySetting" type="button" role="tab" aria-controls="nav-securitySetting" aria-selected="false">Security</button>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-profileData" role="tabpanel" aria-labelledby="nav-profileData-tab">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                                                <div class="profile-images-wrapper">
                                                    <div class="profile-image">
                                                        <img src="./assets/faces/1.jpg" alt="">
                                                    </div>
                                                    <div class="button-change-image">
                                                        <a href="#" class="button button-outline-primary w-100">Change Profile</a>
                                                    </div>
                                                    <p class="info">Large file: maximum 4,000,000 bytes (4 MB). allowed files: .extensionJPG .JPEG .PNG</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="biodata-user">
                                                    <h5 class="title-data-user">Your Profile Data</h5>
                                                    <div class="table-data-user">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="label">Name</td>
                                                                    <td class="value">Reksa Prayoga</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="label">Phone Number</td>
                                                                    <td class="value">086346372563</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="label">Email</td>
                                                                    <td class="value">reksa@gmail.com</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="address-user">
                                                    <h5 class="title-data-user">Your Address</h5>
                                                    <p>Jl. Skip, Kec. Bogor Sel., Kota Bogor, Jawa Barat, 16134 [Note: rt01 rw01 no47]</p>
                                                </div>
                                                <div class="edit-data-modal py-2 pt-3 d-flex justify-content-end">
                                                    <button type="button" class="button button-text" data-bs-toggle="modal" data-bs-target="#changeDataProfileUser">
                                                        Change Your Profile Data
                                                      </button>
                                                      <div class="modal fade" id="changeDataProfileUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changeDataProfileUserLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="changeDataProfileUserLabel">Edit Profile</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form action="">
                                                                  <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="form-input">
                                                                                <label for="firstName" class="form-label">First Name</label>
                                                                                <input type="text" class="form-control" id="firstName">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-input">
                                                                                <label for="lastName" class="form-label">Last Name</label>
                                                                                <input type="text" class="form-control" id="lastName">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-input">
                                                                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                                                                <input type="number" class="form-control" id="phoneNumber">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-input">
                                                                                <label for="email" class="form-label">Email</label>
                                                                                <input type="email" class="form-control" id="email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-input">
                                                                                <label for="address" class="form-label">Address</label>
                                                                                <textarea name="address" id="address" cols="30" rows="5" class="form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="row pt-3">
                                                                      <div class="col-12 d-flex justify-content-end">
                                                                          <button class="button button-outline-primary">Save Data</button>
                                                                      </div>
                                                                  </div>
                                                              </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-securitySetting" role="tabpanel" aria-labelledby="nav-securitySetting-tab">
                                        <div class="row change-password">
                                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                                <div class="greetings">
                                                    <p>Hi, <span class="name">Reksa Prayoga</span></p>
                                                    <p>set your <span class="text-dark">account security</span> here.</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <h5 class="title-data-user">Change Password</h5>
                                                <form action="">
                                                    <div class="form-input">
                                                        <label for="currentPassword" class="form-label">Current Password</label>
                                                        <div class="password-eye">
                                                            <input type="password" class="form-control" id="currentPassword">
                                                            <div class="togglePassword">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-input">
                                                        <label for="newPassword" class="form-label">New Password</label>
                                                        <div class="password-eye">
                                                            <input type="password" class="form-control" id="newPassword">
                                                            <div class="togglePassword">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-input">
                                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                        <div class="password-eye">
                                                            <input type="password" class="form-control" id="confirmPassword">
                                                            <div class="togglePassword">
                                                                <i class="bi bi-eye-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end pt-3">
                                                        <button class="button button-outline-primary">Change Password</button>
                                                    </div>
                                                </form>
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
            $(".togglePassword").click(function() {
                $(this).children().toggleClass("bi-eye-slash-fill");
                input = $(this).parent().find("input");
                if (input.attr("type") == "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        </script>
</html>