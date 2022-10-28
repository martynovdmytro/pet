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

    <section class="container-fluid section section-admin">
        <div class="row">
            <left-panel></left-panel>
            <content-box></content-box>
            <right-panel></right-panel>
        </div>
    </section>

</div>

<footer>

</footer>

</body>
</html>
