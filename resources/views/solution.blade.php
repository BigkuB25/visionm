@extends('layouts.main')

@section('title')
  @lang('menu.solution')
@endsection

@section('nav')
  @include('layouts.nav-page')
@endsection

@section('content')

<section class="page-title page-title-pattern">
  <div class="container">
    <div class="page-title-row">

      <div class="page-title-content">
        <h1 class="text-white">@lang('menu.solution')</h1>
      </div>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">@lang('menu.home')</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">@lang('menu.solution')</a></li>
        </ol>
      </nav>

    </div>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="heading-block">
            <h2>Network</h2>
          </div>
          <p class="text-wrap mb-2">Networking is the backbone of an organization’s effectiveness infrastructure with the need to provide high speed and secure access to users to increasing dependence on internet connectivity for cloud-based services and data the importance of a robust, capable, scalable and security, the organizations also need the resilience supported by an advanced network platform that responds quickly to any circumstance, networking solutions most multiple software defined networking solution.</p>
          <button class="button button-3d m-0" type="button">Read more</button>
        </div>
        <div class="col-md-5 ps-md-4">
          <img src="{{ asset('images/solution-network.png') }}" alt="Network">
        </div>
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-5 ">
          <img src="{{ asset('images/solution-mobility.png') }}" alt="MOBILITY AND WIRELESS">
        </div>
        <div class="col-md-7 ps-md-4">
          <div class="heading-block">
            <h2>MOBILITY AND WIRELESS</h2>
          </div>
          <p class="text-wrap mb-2">Wireless networking is a foundation for the enterprise installations today and The evolution for Wi-FI 6 and Wi-FI 6E that adoption of extended unlicensed spectrum around the world. Users and applications today expect a constant, connected mobility, The key expected for wireless infrastructure are performance, simplify, automate, scale, reliable and secure your network experience from anywhere, anytime, and with any devices.</p>
          <button class="button button-3d m-0" type="button">Read more</button>
        </div>

      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-7">
          <div class="heading-block">
            <h2>SECURITY</h2>
          </div>
          <p class="text-wrap mb-2">Cybersecurity team has integrated comprehensive security solutions to provide advanced threat protection for customers, Our total solutions can protect threat at the Gateway, Network and Endpoint to defense against threat, malware and provide visibility to IT infrastructure, VisionM Cybersecurity solutions include.</p>
          <button class="button button-3d m-0" type="button">Read more</button>
        </div>
        <div class="col-md-5 ps-md-4">
          <img src="{{ asset('images/solution-security.png') }}" alt="SECURITY">
        </div>
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-5">
          <img src="{{ asset('images/solution-video.png') }}" alt="VIDEO SURVEILLANCE">
        </div>
        <div class="col-md-7 ps-md-4">
          <div class="heading-block">
            <h2>VIDEO SURVEILLANCE</h2>
          </div>
          <p class="text-wrap mb-2">When you install a surveillance solution, you are looking for more than visibility. You want to alleviate concern and strengthen peace of mind in the face of day-to-day activities and unforeseen events. To achieve that, your video security system should give you the tools and confidence to protect products, places, and, most importantly, people. We are experts at incorporating video surveillance systems into a variety of environments that meet your needs, regardless of location size or safety requirements.</p>
          <button class="button button-3d m-0" type="button">Read more</button>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
