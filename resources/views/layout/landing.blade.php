<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Emmanuel Tasties</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <section id="app-layout">
            @include('includes.side-menu')

            <div class="welcome-jumbo">
              <div class="status">New</div>
              <h1>Emmanuel Tasties </h1>
              <img src="/img/hamburger-and-fries-png-4.png" class="burger-fries">
            </div>
          </section>

          @yield('content')

    </body>
</html>
