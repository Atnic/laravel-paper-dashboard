<div class="sidebar" data-color="{{ config('paper-dashboard.skin', 'white') }}" data-active-color="danger">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
  <div class="logo">
    @section('logo-mini')
    <a href="/" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="/img/logo-small.png">
      </div>
    </a>
    @show
    @section('logo-normal')
    <a href="/" class="simple-text logo-normal">
      @yield('title', config('app.name', 'Paper Dashboard'))
      <!-- <div class="logo-image-big">
        <img src="../assets/img/logo-big.png">
      </div> -->
    </a>
    @show
  </div>

  <div class="sidebar-wrapper">
    @section('sidebar-menu')
    <ul class="nav">
      <li class="active ">
        <a href="./dashboard.html">
          <i class="nc-icon nc-bank"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>
        <a href="./icons.html">
          <i class="nc-icon nc-diamond"></i>
          <p>Icons</p>
        </a>
      </li>
      <li>
        <a href="./map.html">
          <i class="nc-icon nc-pin-3"></i>
          <p>Maps</p>
        </a>
      </li>
      <li>
        <a href="./notifications.html">
          <i class="nc-icon nc-bell-55"></i>
          <p>Notifications</p>
        </a>
      </li>
      <li>
        <a href="./user.html">
          <i class="nc-icon nc-single-02"></i>
          <p>User Profile</p>
        </a>
      </li>
      <li>
        <a href="./tables.html">
          <i class="nc-icon nc-tile-56"></i>
          <p>Table List</p>
        </a>
      </li>
      <li>
        <a href="./typography.html">
          <i class="nc-icon nc-caps-small"></i>
          <p>Typography</p>
        </a>
      </li>
      <li class="active-pro">
        <a href="./upgrade.html">
          <i class="nc-icon nc-spaceship"></i>
          <p>Upgrade to PRO</p>
        </a>
      </li>
    </ul>
    @show
  </div>
</div>
