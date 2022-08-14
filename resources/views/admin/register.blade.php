@extends('admin')
@section('main')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="./register">
                                <img src="img/Asset 4.png" >
                            </a>
                        </div>
                        <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" class="au-input au-input--full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="email" type="email" class="au-input au-input--full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="au-input au-input--full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="./logins">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection