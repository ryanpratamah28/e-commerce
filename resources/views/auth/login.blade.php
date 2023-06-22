@extends('auth.layout_auth')

@section('auth')
    <div id="auth">
        <div class="wrapper">
            <div class="authForm">
                <form action="">
                    <div class="headForm">
                        <h1>Welcome</h1>
                        <p>Log in to your account to continue</p>
                    </div>
                    <div class="bodyForm">
                        <div class="mb-3 inputForm">
                            <div class="icon">
                                <label for="username">
                                    <img src="../assets/img/iconUser.svg" alt="">
                                </label>
                            </div>
                            <input type="username" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="mb-3 inputForm passwordForm">
                            <div class="icon">
                                <label for="password">
                                    <img src="../assets/img/iconLock.svg" alt="">
                                </label>
                            </div>
                            <div class="wrapperToggle">
                                <i class="bi bi-eye-fill" id="togglePassword"></i>
                            </div>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="mb-5 link">
                            <a href="#">Forget Your Password ?</a>
                        </div>

                        <div class="wrapperButton mb-4">
                            <button class="button">Login</button>
                        </div>
                        <p class="toSignUppage">Don’t have an account ? <a href="#">Sign up!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
