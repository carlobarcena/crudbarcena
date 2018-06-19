<!DOCTYPE html>
<html>
<head>
    @include('partials.loginhead')
</head>

<body class="my-login-page" style="margin:0;">
        <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="img/logo.jpg">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Login</h4>
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="userrname" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                    <span class="error-red">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                    
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                    </label>
                                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required data-eye>
                                    
                                    @if ($errors->has('password'))
                                    <span class="error-red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>

                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>
                                <div class="margin-top20 text-center">
                                    Don't have an account? <a href="register">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Carlo Barcena &copy; 2018 &mdash; Employee-Department CRUD 
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    @include('partials.script')
</body>
</html>