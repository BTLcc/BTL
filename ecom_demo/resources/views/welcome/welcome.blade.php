<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <!-- Dropdown effect -->
        <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background: url("/upload/welcome-bg.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
              margin-top: 50px;
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .flex-top {
                align-items: top;
                display: flex;
                justify-content: center;
            }

            .flex-bottom {
                margin-bottom: 10pt;
                align-items: bottom;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0px  25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <!--Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#welcome-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}"><img src="images/home/logo.png" alt="" /><span> Buk</a>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


                <div class="links collapse in" id="welcome-collapse">
                    <a href="{{ url('shop') }}">Mua Sách!</a>
                    <a href="#">Bán Sách!</a>
                </div>
            </div>
        </div>
        <div class="flex-bottom">
          <a href='http://www.freepik.com/free-vector/abstract-background-with-diagonal-lines_760619.htm'>Designed by Freepik</a>
        </div>
    </body>
</html>
