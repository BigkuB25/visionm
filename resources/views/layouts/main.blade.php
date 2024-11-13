<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  @include('layouts.header')
  <body class="stretched">

    <div id="wrapper">
      @yield('nav')

      @yield('content')

      @include('layouts.footer')
    </div>

    <div id="gotoTop" class="uil uil-angle-up"></div>

    @include('layouts.scripts')

  </body>
</html>
