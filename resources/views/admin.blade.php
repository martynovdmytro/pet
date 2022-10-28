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

    <section class="container-fluid section">
        <div class="row">
            <div class="col-2 admin-left-panel">
                <left-panel></left-panel>
            </div>
            <div class="admin-content-box">
                <content-box></content-box>
            </div>
            <div class="col-1 admin-right-panel">
                <right-panel></right-panel>
            </div>
        </div>
    </section>

</div>

<footer>

</footer>

</body>
</html>
