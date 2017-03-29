<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel &amp; Vue </title>

        <link rel="stylesheet" href="{{ URL('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
            <div id="app" class="container">

                <nav class="nav has-shadow">
                  <div class="container">
                    <div class="nav-left">
                      <a class="nav-item">Projects list</a>
                      <a href="/" class="nav-item is-tab is-hidden-mobile is-active">Home</a>
                      <a href="/create" class="nav-item is-tab is-hidden-mobile">Add project</a>
                    </div>
                    <span class="nav-toggle">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                    <div class="nav-right nav-menu">
                      <a href="/" class="nav-item is-tab is-hidden-tablet is-active">Home</a>
                      <a href="/create" class="nav-item is-tab is-hidden-tablet">Add project</a>
                    </div>
                  </div>
                </nav>


                @yield('content')

            </div>

        <script src="{{ URL('js/app.js') }}"></script>
    </body>
</html>
