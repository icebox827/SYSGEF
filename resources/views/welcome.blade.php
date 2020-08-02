<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SYSGEF - System de Gestion de Formation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/img/background_web.png");
                background-repeat: no-repeat;
                background-size: cover;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
                position: fixed;
                text-align: center;
                padding: 16px;
                top: 0px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: solid;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
            .logo {
                
            }
            .footer {
                align-content: flex-end;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    <!--
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   SYSGEF - ANP<img src="img/anp_logo_transparent.png" alt="anp_logo" class=".logo pl-5 pt-2">  
                </div>

                <div class="links">
                   <h2>Platforme éducative de l'Académie Nationale de Police</h2>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer">Proudly Powered by Azaka Teknoloji - 2020</div>
        </footer>
    </body>
</html>
