@extends('auth.layout_auth')

@section('auth')
    <div id="auth">
        <div class="wrapper">
            <div class="authForm">
                <form action="">
                    <div class="headForm">
                        <h1>Create Account</h1>
                        <p>Sign Up account to continue </p>
                    </div>
                    <div class="bodyForm">
                        <div class="mb-3 inputForm">
                            <div class="icon">
                                <label for="phone">
                                    <img src="../assets/img/iconUser.svg" alt="">
                                </label>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="mb-3 inputForm">
                            <div class="icon">
                                <label for="name">
                                    <img src="../assets/img/iconUser.svg" alt="">
                                </label>
                            </div>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="mb-3 inputForm">
                            <div class="icon">
                                <label for="email">
                                    <img src="../assets/img/icon/email 2.png" alt="">
                                </label>
                            </div>
                            <input type="number" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <div class="mb-3 inputForm">
                            <div class="icon">
                                <label for="email">
                                    <img src="../assets/img/icon/telephone-handle-silhouette 1.png" alt="">
                                </label>
                            </div>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="mb-3 inputForm passwordForm">
                            <div class="icon">
                                <label for="address">
                                    <img src="../assets/img/iconLock.svg" alt="">
                                </label>
                            </div>
                            <div class="wrapperToggle">
                                <i class="bi bi-eye-fill" id="togglePassword"></i>
                            </div>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="wrapperButton mb-4">
                            <button class="button">Register</button>
                        </div>

                        <p class="toSignUppage">Have an account ? <a href="#">Log In!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
