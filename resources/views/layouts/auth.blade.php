<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))" class="perfect-scrollbar-off">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <meta name="viewport" content="width=device-width">

  <title>@yield('title', config('app.name', 'Paper Dashboard'))</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  @section('styles')
  <link href="{{ mix('/css/paper-dashboard.css') }}" rel="stylesheet">
  @show
</head>

<body>
  <nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard/overview.html">Paper Dashboard PRO</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="https://demos.creative-tim.com/paper-dashboard-pro/examples/pages/register.html">
              Register
            </a>
          </li>
          <li>
            <a href="https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard/overview.html">
              Dashboard
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="" data-image="../../assets/img/background/background-2.jpg">
      <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
      @yield('content')

      <footer class="footer footer-transparent">
        <div class="container">
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018, made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com/">Creative Tim</a>
          </div>
        </div>
      </footer>
      <div class="full-page-background" style="background-image: url(../../assets/img/background/background-2.jpg) "></div>
    </div>
  </div>

  @section('scripts')
  <script src="{{ mix('/js/manifest.js') }}" charset="utf-8"></script>
  <script src="{{ mix('/js/vendor.js') }}" charset="utf-8"></script>
	<script src="{{ mix('/js/auth.js') }}" charset="utf-8"></script>
  @show
  @stack('body')
</body>

</html>
