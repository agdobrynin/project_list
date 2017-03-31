<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel &amp; Vue </title>

        <link rel="stylesheet" href="{{ URL('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL('css/css.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            window.csrfToken = "{{ csrf_token() }}";
        </script>
    </head>
    <body>
            <div id="app">
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
                    <div class="nav-right nav-menu is-active animated bounceInRight" v-show="rightMenuShow">
                      <a href="/create" class="nav-item is-tab is-hidden-tablet {{ Request::is('create')? 'is-active':'' }}">Projects</a>
                    </div>
                  </div>
                </nav>
                <div class="container section main_content">
                    @yield('content')
                </div>

            </div>

            <footer class="footer">
              <div class="container">
                    <div class="content has-text-centered">
                        <p>
                            <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
                        </p>
                    </div>
                </div>
            </footer>
        <script src="{{ URL('js/app.js') }}"></script>
    </body>
</html>
