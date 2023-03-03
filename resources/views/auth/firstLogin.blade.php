<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{asset('image/icon.png')}}" type="image/x-icon">
    <script src="{{ asset('js/common/errors.js') }}"></script>
    <title>Change Password First Time</title>
</head>
<body>
    <div class="container mt-2">
        <div class="row justify-content-center align-items-center text-center p-2">
            <div class="m-1 col-sm-8 col-md-6 col-lg-4 shadow-sm p-3 mb-5 bg-white border rounded">
                <div class="pt-5 pb-5">
                    <img src={{asset('image/icon.png')}} alt="logo" class="img-fluid" width="100" height="100">
                    <p class="text-center text-uppercase alt="logo" class="img-fluid" width="100" height="100">
                    <h4 class="text-center text-uppercase mt-3">Change Password</h4>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form autocomplete="off" id="firstLogin-form" class="form text-center" action="{{route('auth.firstLogin.post')}}" method="POST">
                        @csrf
                        <div class="form-group input-group-md">
                            <input type="password" class="form-control" data-label="Password" name="password" id="password" placeholder="Password">
                            <div style="float: left;" id="invalid-feedback-password"></div>
                        </div>
                        <div class="form-group input-group-md">
                            <input type="password" class="form-control" data-label="Confirm Password" name="conf_password" id="conf_password" placeholder="Confirm Password">
                            <div style="float: left;" id="invalid-feedback-conf_password"></div>
                        </div>
                        <button id="change-btn" class="btn btn-lg btn-block btn-primary mt-4" type="submit">
                            Change Password
                        </button>
                    </form>
                </div>
                <a href="{{route('auth.login.get')}}" class="text-center d-block mt-2">Back</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/auth/firstLogin.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#firstLogin-form').submit(function() {
                $('#invalid-feedback-password').html('');
                $('#invalid-feedback-conf_password').html('');
            });
        });
    </script>
</body>
</html>