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

<div id="app">

    <header>
        <header-component></header-component>
    </header>

    <nav class="navbar">
        <navbar-component></navbar-component>
    </nav>

    <section class="container-fluid">
        <div class="row col-12 content-box-parent">
            <content-box-left></content-box-left>
            <content-box-right></content-box-right>
        </div>
    </section>

</div>

<footer>
<script src="{{ asset('./js/app.js') }}"></script>

</footer>

</body>
</html>