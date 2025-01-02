@extends('layouts.main')

@section('title')
  @lang('menu.home')
@endsection

@section('nav')
  @include('layouts.nav')
@endsection

@section('content')
  <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-loop="true" data-autoplay="4000" data-speed="1000">
    <div class="slider-inner">
      <div class="swiper swiper-parent">
        <div class="swiper-wrapper">
          <div class="swiper-slide dark">
            <div class="container">
              <div class="slider-caption slider-caption-center">
                <div>
                  <h2 class="font-primary text-transform-none">Creative Work.</h2>
                  <p class="fw-light font-primary d-none d-sm-block">Quickly communicate bleeding-edge best practices.</p>
                  <a href="#" class="button button-rounded button-large text-transform-none ls-0 font-primary">Get Started</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide-bg" style="background-image: url('/images/slider/1.jpg');"></div>
          </div>
          <div class="swiper-slide dark">
            <div class="container">
              <div class="slider-caption slider-caption-center">
                <div>
                  <h2 class="font-primary">Amazing Prospects.</h2>
                  <p class="fw-light font-primary d-none d-sm-block">Seamlessly engineer effective synergy after e-business experiences.</p>
                  <a href="#" class="button button-rounded button-large text-transform-none ls-0 font-primary">Get Started</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide-bg" style="background-image: url('/images/slider/2.jpg');"></div>
          </div>
          <div class="swiper-slide dark">
            <div class="container">
              <div class="slider-caption slider-caption-center">
                <div>
                  <h2 class="font-primary">Flexible Works.</h2>
                  <p class="fw-light font-primary d-none d-sm-block">Completely incubate worldwide users before imperatives.</p>
                  <a href="#" class="button button-rounded button-large text-transform-none ls-0 font-primary">Get Started</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide-bg" style="background-image: url('/images/slider/3.jpg');"></div>
          </div>
        </div>

        <div class="slider-arrow-left" class="bg-transparent"><i class="bi-arrow-left"></i></div>
        <div class="slider-arrow-right" class="bg-transparent"><i class="bi-arrow-right"></i></div>
      </div>

      <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="{{ asset('images/mouse.svg') }}" alt="Image" ></a>
    </div>
	</section>

  <section id="content">
    <div class="content-wrap py-5" style="z-index: 1;">
      <div class="container mt-1">
        <div class="heading-block text-center border-0">
          <h3>VISION M TECHNOLOGY CO., LTD.</h3>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="row mb-2">
              <img class="w-100" src="{{ asset('images/image1.jpg') }}">
            </div>
            <div class="row">
              <img class="w-100" src="{{ asset('images/image2.jpg') }}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <img class="w-68" src="{{ asset('images/image3.jpg') }}">
            </div>
          </div>
          <div class="col-md-5">
            <h4 class="text-muted mb-2">@lang('content.about_title')</h4>
            <span>@lang('content.about_content')</span>
          </div>
        </div>
      </div>

      <div class="section bg-transparent border-top">
        <div class="container">
          <div class="text-center">
            <h1>@lang('content.our_solutions')</h1>
          </div>
          <div class="row">
            <div class="col-md-7">
              <div class="heading-block">
                <h2 class="color-main">Network</h2>
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
                <h2 class="color-main">MOBILITY AND WIRELESS</h2>
              </div>
              <p class="text-wrap mb-2">Wireless networking is a foundation for the enterprise installations today and The evolution for Wi-FI 6 and Wi-FI 6E that adoption of extended unlicensed spectrum around the world. Users and applications today expect a constant, connected mobility, The key expected for wireless infrastructure are performance, simplify, automate, scale, reliable and secure your network experience from anywhere, anytime, and with any devices.</p>
              <button class="button button-3d m-0" type="button">Read more</button>
            </div>

          </div>
          <div class="divider"></div>
          <div class="row">
            <div class="col-md-7">
              <div class="heading-block">
                <h2 class="color-main">SECURITY</h2>
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
                <h2 class="color-main">VIDEO SURVEILLANCE</h2>
              </div>
              <p class="text-wrap mb-2">When you install a surveillance solution, you are looking for more than visibility. You want to alleviate concern and strengthen peace of mind in the face of day-to-day activities and unforeseen events. To achieve that, your video security system should give you the tools and confidence to protect products, places, and, most importantly, people. We are experts at incorporating video surveillance systems into a variety of environments that meet your needs, regardless of location size or safety requirements.</p>
              <button class="button button-3d m-0" type="button">Read more</button>
            </div>
          </div>
        </div>
      </div>

      <div class="section bg-transparent border-top">
        <div class="container">
          <div class="heading-block mb-6 text-center border-0" data-heading="S">
            <h3 class="text-transform-none ls-0">@lang('content.our_service_title')</h3>
          </div>
        </div>

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

      <div class="section p-0 m-0 pt-3">
        <div class="container">
          <div class="text-center">
            <img src="{{ asset('images/cisco-partner-logo-1.png') }}" class="w-25">
          </div>
          <div class="row text-center">
            <div class="col-sm-4">
              <img src="{{ asset('images/ccnp-enterprise-logo.png') }}">
            </div>
            <div class="col-sm-4">
              <img src="{{ asset('images/ccnp-data-center-logo.png') }}">
            </div>
            <div class="col-sm-4">
              <img src="{{ asset('images/ccnp-security-logo.png') }}">
            </div>
          </div>
        </div>
      </div>

      <div class="section m-0 bg-transparent" style="padding: 80px 0">
        <div class="container">
          <div class="mx-auto">
            <div class="heading-block text-center mx-auto border-bottom-0">
              <h2>@lang('content.our_partners')</h2>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Aruba_Networks-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/axis-logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Check_Point-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Cisco_Systems-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/F5_Networks-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Fortinet-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Genetec-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/H3C-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Hewlett_Packard_Enterprise-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Palo_Alto_Networks-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Robert_Bosch_GmbH-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/SolarWinds-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Trellix-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/Trend_Micro-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>
            <div class="col-sm-2 col-6 grow">
              <img src="{{ asset('images/partners/VMware-Logo.wine.png') }}" alt="Partner" class="clients">
            </div>

          </div>
        </div>
      </div>

      <div class="section m-0" style="padding: 80px 0">
        <div class="text-center">
          <h1>@lang('content.customer_success')</h1>
        </div>
        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
          <div class="oc-item"><a href="#"><img src="{{ asset('images/customer/exat-logo.png') }}" class="mx-auto w-auto" height="100" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/customer/redcross-logo.jpg') }}" class="mx-auto w-auto" height="100" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/customer/i-ea-t-logo.png') }}" class="mx-auto w-auto" height="100" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/customer/aot-logo.png') }}" class="mx-auto w-auto" height="100" alt="Brands"></a></div>
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
