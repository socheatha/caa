@extends('admin.layouts.log')

@section('css')
    <style>
        
        @font-face{
            src: url('/fonts/ubuntu/Ubuntu-Bold.ttf');
            font-family: 'ubuntu_b';
        }
        *{
            font-family: 'ubuntu_b' !important;
        }
        #login-form {
            margin-top: 150px;
        }
        .form-group input{
            background: #E6E6E6;
            padding: 30px;
            margin-bottom: 30px;
        }
        h2{
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 35px;
        }
        .btn{
            border-radius: 0;
            text-transform: uppercase;
            padding: 15px;
        }
        
        .input-checkbox100 {
            display: none;
        }

        .label-checkbox100 {
            font-family: Ubuntu-Regular;
            font-size: 16px;
            color: #999999;
            line-height: 1.2;

            display: block;
            position: relative;
            padding-left: 26px;
            cursor: pointer;
        }

        .label-checkbox100::before {
            content: "\f00c";
            font-family: FontAwesome;
            font-size: 13px;
            color: transparent;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 18px;
            height: 18px;
            border-radius: 3px;
            background: #fff;
            border: 2px solid #827ffe;
            left: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .input-checkbox100:checked + .label-checkbox100::before {
            color: #827ffe;
        }
        .contact100-form-checkbox{
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content')

<div class="container">
    {{ Form::open(['route' => 'login','method' => 'post', 'class' => 'mt-3']) }}
    
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div id="login-form">
                <h2>LOGIN</h2>
                <div class="form-group">
                    {!! Form::email('email', '', ['id' => 'email','class' => 'form-control','placeholder' => 'email','required']) !!}
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group">
                    {!! Form::password('password', ['id' => 'password','class' => 'form-control','placeholder' => 'password','required']) !!}
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                        <label class="label-checkbox100" for="ckb1">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary btn-lg">Login</button>
            </div>
        </div>
    </div>

    {{ Form::close() }}
</div>

{{--     
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
