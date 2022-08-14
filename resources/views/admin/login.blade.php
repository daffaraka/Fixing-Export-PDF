@extends('admin')
@section('main')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="/logins">
                                <img src="img/Asset 4.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" type="email" name="email" id="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="./register">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection