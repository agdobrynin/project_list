<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel &amp; Vue </title>

        <link rel="stylesheet" href="{{ URL('css/app.css') }}">
    </head>
    <body>

        <div id="app" class="container">
          <div class="notification">
            This container is <strong>centered</strong> on desktop.
          </div>
        </div>

        <script src="{{ URL('js/app.js') }}"></script>
    </body>
</html>
