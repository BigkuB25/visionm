<ul class="menu-container">
  <li class="menu-item @if(request()->is('about')) active @endif"><a class="menu-link" href="{{ url('about') }}"><div>@lang('menu.about')</div></a>
  <li class="menu-item @if(request()->is('solution/*') || request()->is('solution')) active @endif"><a class="menu-link" href="{{ url('solution') }}"><div>@lang('menu.solution')</div></a>
  <li class="menu-item @if(request()->is('service')) active @endif"><a class="menu-link" href="{{ url('service') }}"><div>@lang('menu.service')</div></a>
  <li class="menu-item @if(request()->is('contact')) active @endif"><a class="menu-link" href="{{ url('contact') }}"><div>@lang('menu.contact')</div></a>
</ul>






