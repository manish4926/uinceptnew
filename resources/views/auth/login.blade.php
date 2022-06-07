<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Uincept Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .backgroundbody {
            background: url('https://images.squarespace-cdn.com/content/v1/5e8dc05777fca744fbff3ed1/1586878192708-RDBZ4EDMHTPF3R7D3ZOQ/021A4756+%282%29.JPG');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .authincation-content {
                background: rgba(0,0,0,0.3);
                background: rgba(244, 81, 30, 0.5);
                border-radius: 20px;
        }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, label {
            color: #fff;
        }

        input[type="email"],input[type="password"]
        {
            background: transparent;
            border: solid 1px #fff;
            color: #fff;
        }

        input[type="email"]:hover, input[type="email"]:focus,input[type="password"]:hover, input[type="password"]:focus
        {
            background: rgba(0,0,0,0.5);
            color: #fff;   
        }



    </style>
</head>

<body class="h-100 backgroundbody" style="">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @if($errors->any())
                                            {{ implode('', $errors->all('<div>:message</div>')) }}
                                        @endif
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" value="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" value="Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            {{-- <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="">Sign up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>