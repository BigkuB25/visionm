@extends('layouts.main')

@section('title')
  Home
@endsection

@section('nav')
  @include('layouts.nav-page')
@endsection

@section('content')

<section class="page-title page-title-pattern">
  <div class="container">
    <div class="page-title-row">

      <div class="page-title-content">
        <h1 class="text-white">Solutions</h1>
      </div>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Solutions</a></li>
        </ol>
      </nav>

    </div>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="text-wrap">Networking is the backbone of an organization’s effectiveness infrastructure with the need to provide high speed and secure access to users to increasing dependence on internet connectivity for cloud-based services and data the importance of a robust, capable, scalable and security, the organizations also need the resilience supported by an advanced network platform that responds quickly to any circumstance, NetONE’s networking solutions most multiple software defined networking solution.</p>
        </div>
        <div class="col-md-4 ps-md-4">
          <img src="{{ asset('images/global-network-online-communication-connection-63.jpg') }}" alt="">
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
