<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Asti Studio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="img/asti_logo.gif" alt="Asti Logo">
                </div>

                <div class="links">
                    <a href="">Studio</a>
                    <a href="/work">Work</a>
                    <a href="">Blog</a>
                    <a href="">Contacts</a>
                </div>
            </div>
        </div>
        <footer>
            <script src="js/app.js"></script>
        </footer>
    </body>
</html>
