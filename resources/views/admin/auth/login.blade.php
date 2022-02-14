@extends('admin.layouts.auth')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="login-card card-block">
                <form class="md-float-material" action="{{ route('admin_login') }}" method="POST">
                    @csrf
                    <div class="text-center">
                        <img src="{{ asset('assets/img/logo.png') }}">
                    </div>
                    <h3 class="text-center txt-primary">
                        Connexion | Admin
                    </h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-input-wrapper">
                                <input type="email" name="email" class="md-form-control" required="required"/>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-input-wrapper">
                                <input type="password" name="password" class="md-form-control" required="required"/>
                                <label>Mot de passe</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                            <label class="input-checkbox checkbox-primary">
                                <input type="checkbox" id="checkbox">
                                <span class="checkbox"></span>
                            </label>
                            <div class="captions">Remember Me</div>

                        </div>
                            </div>
                        <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                            <a href="forgot-password.html" class="text-right f-w-600"> Forget Password?</a>
                            </div>
                    </div>
                    @if ($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xs-10 offset-xs-1">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection