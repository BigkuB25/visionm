<header id="header" class="full-header">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">
        <div id="logo">
          <a href="/">
            <img class="logo-default" src="{{ asset('images/visionm-light-nobg.png') }}" alt="VisionM Technology">
            <img class="logo-dark" src="{{ asset('images/visionm-light-nobg.png') }}" alt="VisionM Technology">
          </a>
        </div>

        <div class="primary-menu-trigger">
          <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
            <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
          </button>
        </div>
        <nav class="primary-menu">
          @include('layouts.menu')
        </nav>
      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>