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
            <div id="app" class="container section">

                <nav class="nav has-shadow">
                  <div class="container">
                    <div class="nav-left">
                      <a class="nav-item" href="/">
                          <span class="icon">
                            <i class="fa fa-home"></i>
                          </span>
                      </a>
                      <a href="/create" class="nav-item is-tab {{ Request::is('create')? 'is-active':'' }} is-hidden-mobile">Projects</a>
                    </div>
                    <span class="nav-toggle" @click="rightMenuShow = rightMenuShow != true">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                    <div class="nav-right nav-menu is-active" v-show="rightMenuShow">
                      <a href="/create" class="nav-item is-tab is-hidden-tablet {{ Request::is('create')? 'is-active':'' }}">Projects</a>
                    </div>
                  </div>
                </nav>
                <p>&nbsp;</p>
                @yield('content')

            </div>

        <script src="{{ URL('js/app.js') }}"></script>
    </body>
</html>
