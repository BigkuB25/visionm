<ul class="menu-container">
  <li class="menu-item @if(request()->is('/')) active @endif"><a class="menu-link" href="/"><div>@lang('menu.home')</div></a></li>
  <li class="menu-item @if(request()->is('solution/*') || request()->is('solution')) active @endif"><a class="menu-link" href="{{ url('solution') }}"><div>@lang('menu.solution')</div></a>
  <li class="menu-item @if(request()->is('service')) active @endif"><a class="menu-link" href="#"><div>@lang('menu.service')</div></a>
  <!-- <li class="menu-item @if(request()->is('blog/*') || request()->is('blog')) active @endif"><a class="menu-link" href="{{ url('blog') }}"><div>Blog</div></a>
  <li class="menu-item @if(request()->is('events/*') || request()->is('events')) active @endif"><a class="menu-link" href="{{ url('events') }}"><div>Events</div></a> -->
  <li class="menu-item @if(request()->is('about')) active @endif"><a class="menu-link" href="#"><div>@lang('menu.about')</div></a>
  <li class="menu-item @if(request()->is('contact')) active @endif"><a class="menu-link" href="{{ url('contact') }}"><div>@lang('menu.contact')</div></a>
</ul>






