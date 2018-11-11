@extends('layouts.shopother')

@section('content')
<section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>LOgin</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="track.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
<!--================login Area =================-->
<section class="login_area p_100">
            <div class="container">
                <div class="login_inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="login_title">
                                <h2>log in your account</h2>
                                <p>Log in to your account to discovery all great features in this template.</p>
                            </div>
                            <form class="login_form row" method="post" action="{{route('login')}}">
                            @csrf
                                <div class="col-lg-12 form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-lg-12 form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-lg-12 form-group">
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Keep me logged in</label>
                                        <div class="check"></div>
                                    </div>
                                    <h4>Forgot your password ?</h4>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button type="submit" value="submit" class="btn update_btn form-control">Войти</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    

@endsection
