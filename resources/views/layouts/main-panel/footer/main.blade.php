<footer class="footer footer-black footer-white">
  <div class="container-fluid">
    <div class="row">
      <nav class="footer-nav">
        @section('footer-menu')
        <ul>
          <li>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
          </li>
        </ul>
        @show
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          ©
          {{ date('Y') }}, made with <i class="fa fa-heart heart"></i> by Creative Tim
        </span>
      </div>
    </div>
  </div>
</footer>
