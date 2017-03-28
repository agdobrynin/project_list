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
        <section class="section">
            <div id="app" class="container  is-fluid">
                <p>
                    This container is <strong>centered</strong> on desktop.
                </p>
                <p>
                    <a class="button is-primary" @click="isVisible = true">Show notofication</a>
                </p>
                <div class="columns">
                    <example class="is-danger">
                        <p slot="title">Some title here...</p>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </example>
                </div>

            </div>
        </section>
        <script src="{{ URL('js/app.js') }}"></script>
    </body>
</html>
