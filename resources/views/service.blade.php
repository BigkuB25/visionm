@extends('layouts.main')

@section('title')
  @lang('menu.service')
@endsection

@section('nav')
  @include('layouts.nav-page')
@endsection

@section('content')

<section class="page-title page-title-pattern">
  <div class="container">
    <div class="page-title-row">
      <div class="page-title-content">
        <h1 class="text-white">@lang('menu.service')</h1>
      </div>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">@lang('menu.home')</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">@lang('menu.service')</a></li>
        </ol>
      </nav>

    </div>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div id="oc-features" class="owl-carousel owl-carousel-full image-carousel carousel-widget customjs">
        <div class="oc-item">
          <div class="row cleafix">
            <div class="col-xl-8">
              <img src="{{ asset('images/carousel/1.jpg') }}" alt="Image">
            </div>
            <div class="col-xl-4" style="padding: 20px 0 0 20px;">
              <h3>IT Infrastructure</h3>
              <p>@lang('content.our_service_content_1')</p>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="row cleafix">
            <div class="col-xl-8">
              <img src="{{ asset('images/carousel/2.jpg') }}" alt="Image">
            </div>
            <div class="col-xl-4" style="padding: 20px 0 0 20px;">
              <h3>IT Security</h3>
              <p>@lang('content.our_service_content_2')</p>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="row cleafix">
            <div class="col-xl-8">
              <img src="{{ asset('images/carousel/3.jpg') }}" alt="Image">
            </div>
            <div class="col-xl-4" style="padding: 20px 0 0 20px;">
              <h3>Video Surveillance</h3>
              <p>@lang('content.our_service_content_3')</p>
            </div>
          </div>
        </div>
        <div class="oc-item">
          <div class="row cleafix">
            <div class="col-xl-8">
              <img src="{{ asset('images/carousel/3.jpg') }}" alt="Image">
            </div>
            <div class="col-xl-4" style="padding: 20px 0 0 20px;">
              <h3>Application Software Development</h3>
              <p>@lang('content.our_service_content_4')</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')

<script>
  jQuery(window).on( 'load', function(){
    jQuery('#oc-features').owlCarousel({
      items: 1,
      margin: 60,
        nav: true,
        navText: ['<i class="bi-arrow-left"></i>','<i class="bi-arrow-right"></i>'],
        dots: false,
        stagePadding: 30,
        responsive:{
        768: { items: 2 },
        1200: { stagePadding: 200 }
      },
    });
  });
</script>

@endsection
