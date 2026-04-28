<!doctype html>
<html lang="{{ evo()->getLocale() ?: evo()->getConfig('lang', 'en') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', evo()->getConfig('site_name', 'Evolution CMS'))</title>
    <link rel="stylesheet" href="/themes/{{ env('EVO_PRESET_NAME', 'default') }}/css/app.css">
  </head>
  <body>
    <div class="site-shell">
      @include('partials.header')

      <main class="site-main">
        @yield('content')
      </main>
    </div>
  </body>
</html>
