<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ url(asset('backend/assets/css/bootstrap.min.css')) }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url(asset('backend/assets/css/icons.min.css')) }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url(asset('backend/assets/css/app.min.css')) }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to Skote.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('backend/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="index.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ url('backend/assets/images/logo-light.svg') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ url('backend/assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" action="{{ route('login.do') }}" method="POST" autocomplete="false">
                                @csrf

                                @if($errors->all())
                                    @foreach($errors->all() as $error)
                                        @component('admin.components.message',['type' => 'danger'])
                                            {{ $error }}
                                        @endcomponent
                                    @endforeach
                                @endif

                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" type="email" placeholder="" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Senha</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" name="password" placeholder="" type="password" aria-label="Password" aria-describedby="password-addon" required>
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    <label class="form-check-label" for="remember-check">
                                        Remember me
                                    </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                </div>


                                <div class="mt-4 text-center">
                                    <a href="#" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end account-pages -->

<!-- JAVASCRIPT -->
<script src="{{ url(asset('backend/assets/libs/jquery/jquery.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/metismenu/metisMenu.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/simplebar/simplebar.min.js')) }}"></script>
<script src="{{ url(asset('backend/assets/libs/node-waves/waves.min.js')) }}"></script>

<script src="{{ url(asset('backend/assets/js/app.js')) }}"></script>

</body>
</html>
