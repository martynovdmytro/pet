<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row col-12 header-container">
            <div class="col-3 site-logo">
                TODO: SITE LOGO
            </div>
            <div class="col-9 top-banner">
                TODO: TOP BANNER

            </div>
        </div>
    </div>
</header>

<nav class="navbar">
    <div class="container-fluid">
        <div class="row col-12 nav-base">
            <div class="row col-5 nav-container">
                <div class="nav-button">
                    <button class="button-53">
                        <h4>Graffiti</h4>
                    </button>
                </div>
                <div class="nav-button">
                    <button class="button-53">
                        <h4>Street Art</h4>
                    </button>
                </div>
                <div class="nav-button">
                    <button class="button-53">
                        <h4>Calligraphy</h4>
                    </button>
                </div>
                <div class="nav-button">
                    <button class="button-53">
                        <h4>Sketch</h4>
                    </button>
                </div>
                <div class="nav-button">
                    <button class="button-53">
                        <h4>Videos</h4>
                    </button>
                </div>
            </div>
            <div class="col-3 nav-search">
                Search Bar
            </div>
            <div class="col-3 nav-userbar">
                Username
            </div>
        </div>
    </div>
</nav>
<section class="container-fluid">
    <div class="row col-12 content-box-parent">
        <div class="col-9 content-box-left">

        </div>
        <div class="col-3 content-box-right">

        </div>
    </div>
</section>

<div id="app">
    <example-component />
</div>

<footer>
<script src="{{ mix('/js/app.js') }}"></script>

</footer>
</body>
</html>
