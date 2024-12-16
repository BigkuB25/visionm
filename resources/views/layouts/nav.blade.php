<header id="header" class="full-header" data-sticky-class="not-dark" data-responsive-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="auto">
  <div id="header-wrap">
    <div class="container">
      <div class="header-row">
        <div id="logo">
          <a href="/">
            <img class="logo-default" src="{{ asset('images/visionm-light-nobg.png') }}" alt="VisionM Technology">
            <img class="logo-dark" src="{{ asset('images/visionm-light-nobg.png') }}" alt="VisionM Technology">
          </a>
        </div>

        <div class="header-misc">
          <div id="top-search" class="header-misc-icon">
            <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
          </div>

          <div class="header-misc-icon">
            @switch(app()->getLocale())
              @case('th')
                <a href="{{ url('lang/en') }}"><img src="{{ URL::asset('/images/flags/us.svg') }}" class="me-2 rounded" height="20" alt="Header Language" height="16"></a>
              @break
              @case('en')
                <a href="{{ url('lang/th') }}"><img src="{{ URL::asset('/images/flags/th.svg') }}" class="me-2 rounded" height="20" alt="Header Language" height="16"></a>
              @break
            @endswitch
          </div>
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
