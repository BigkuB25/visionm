@extends('layouts.main')

@section('title')
  @lang('menu.about')
@endsection

@section('nav')
  @include('layouts.nav-page')
@endsection

@section('content')

<section class="page-title page-title-pattern">
  <div class="container">
    <div class="page-title-row">

      <div class="page-title-content">
        <h1 class="text-white">@lang('menu.about')</h1>
      </div>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">@lang('menu.home')</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">@lang('menu.about')</a></li>
        </ol>
      </nav>

    </div>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <h2 class="color-main mb-2">@lang('about.title')</h2>
          <p class="fs-5">@lang('about.description')</p>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('images/team.jpg') }}" alt="Team">
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-12">
          <h2 class="color-main mb-2">@lang('about.company_title')</h2>
          <p class="fs-5">@lang('about.company_description')</p>

        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/work.jpg') }}" alt="Work">
        </div>
        <div class="col-md-6">
          <h2 class="color-main mb-2">@lang('about.vision_title')</h2>
          <p class="fs-5">@lang('about.vision_description')</p>

          <h2 class="color-main mb-2">@lang('about.mission_title')</h2>
          <p class="fs-5">@lang('about.mission_description')</p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
