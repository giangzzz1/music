@extends('user.account.master')

@section('title')
    login
@endsection

@section('content')

    <form class="login100-form validate-form">

        <span class="login100-form-title p-b-49">Login</span>

        <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="username" placeholder="Type your Email">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="pass" placeholder="Type your password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="d-flex justify-content-between p-t-8 p-b-31 mt-3">
            <a href="{{ route('register.form') }}" class="right-link">Register</a>
            <a href="{{ route('forgot.form') }}" class="left-link">Forgot</a>
        </div>

        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">Login</button>
            </div>
        </div>

        <div class="txt1 text-center p-t-54 p-b-20">
            <span>Or Sign Up Using</span>
        </div>

        <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
                <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="login100-social-item bg2">
                <i class="fa fa-twitter"></i>
            </a>

            <a href="#" class="login100-social-item bg3">
                <i class="fa fa-google"></i>
            </a>
        </div>

    </form>
@endsection