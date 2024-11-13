@extends('layouts.main')

@section('title')
  Home
@endsection

@section('nav')
  @include('layouts.nav')
@endsection

@section('content')
  <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-loop="true">
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
              <img class="w-75" src="{{ asset('images/image3.jpg') }}">
            </div>
          </div>
          <div class="col-md-5">
            <h4 class="text-muted mb-2">@lang('content.about_title')</h4>
            <span>@lang('content.about_content')</span>
          </div>
        </div>
      </div>

      <div class="line"></div>

      <div class="section bg-transparent">
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

      <div class="section bg-transparent mt-0">
        <div class="container">
          <div class="row mt-2">
            <div class="col-lg-6 p-0">
              <!-- Youtube Video Link
              ============================================= -->
              <a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
                <img src="{{ asset('images/sections/video.jpg') }}" alt="Youtube Video"  style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
                <i class="bi-play" style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
              </a>
            </div>
            <!-- Video Texts
            ============================================= -->
            <div class="col-lg-6" style="padding-left: 60px;">
              <div class="heading-block mt-4 mb-4 border-0">
                <h3 class="text-transform-none" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A small Video from Our Customers.</h3>
              </div>
              <p class="fw-normal">Interactively facilitate.<br>Tactical systems with compelling materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="section parallax scroll-detect mt-6 mb-0 border-top-0">
        <img src="{{ asset('images/sections/2.jpg') }}" class="parallax-bg">
        <div class="container">

          <div class="row col-mb-50 cleafix">
            <div class="col-md-6 dark" style="padding-left: 60px;">
              <div class="heading-block mb-4 border-0">
                <h3 class="text-transform-none" style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">Collections from Our Customers.</h3>
              </div>
              <p>Appropriately implement user friendly e-markets and backend processes. Competently expedite competitive vortals rather than client-based testing procedures. Professionally matrix exceptional schemas vis-a-vis leveraged paradigms. Authoritatively coordinate just in time networks with strategic potentialities.</p>
              <a href="#" class="button-link ms-0">Read More</a>
            </div>

            <div class="col-md-5 offset-md-1">
              <h4 class="dark">Testimonials Scroller</h4>
              <div class="fslider testimonial bg-white p-5 rounded" data-animation="slide" data-arrows="false">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <div class="slide">
                      <p class="mb-4 font-primary">Great support, great documentation and you guys done a fantastic job in commenting everything, makes it very easy to customize, so thank you.</p>
                      <h4 class="h6 mb-1 fw-bold text-uppercase ls-1">SmileyDot</h4>
                      <small class="text-muted d-block mb-3">ThemeForest user</small>
                      <div>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                      </div>
                    </div>
                    <div class="slide">
                      <p class="mb-4 font-primary">I wish that I could choose more than one reason for my 5-star rating! The Design is great, the features are fantastic, the documentation top-notch.</p>
                      <h4 class="h6 mb-1 fw-bold text-uppercase ls-1">georgewhoffman</h4>
                      <small class="text-muted d-block mb-3">ThemeForest user</small>
                      <div>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                      </div>
                    </div>
                    <div class="slide">
                      <p class="mb-4 font-primary">Excellent Template really versatile and well documented. Makes anyone look like a design professional.</p>
                      <h4 class="h6 mb-1 fw-bold text-uppercase ls-1">georgeuser077</h4>
                      <small class="text-muted d-block mb-3">ThemeForest user</small>
                      <div>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                      </div>
                    </div>
                    <div class="slide">
                      <p class="mb-4 font-primary">This is the most robust template I've ever worked with. So much can be done with this multi-purpose package. Regular updates and enhancements add tremendous value.</p>
                      <h4 class="h6 mb-1 fw-bold text-uppercase ls-1">rmandaro</h4>
                      <small class="text-muted d-block mb-3">ThemeForest user</small>
                      <div>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                      </div>
                    </div>
                    <div class="slide">
                      <p class="mb-4 font-primary">I've been using Canvas for months now and it has exceeded my expectations. Their support has been great too.</p>
                      <h4 class="h6 mb-1 fw-bold text-uppercase ls-1">kwelch2</h4>
                      <small class="text-muted d-block mb-3">ThemeForest user</small>
                      <div>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                        <i class="bi-star-fill text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="section p-0 m-0 pt-3">
        <div class="container">
          <div class="text-center">
            <img src="{{ asset('images/cisco-partner-logo-1.png') }}" class="w-25">
            <p class="mt-2 mb-1 fs-3">Hyperflex Specialization</p>
            <p class="fs-3">Customer Experience Specialized</p>
          </div>
        </div>
      </div>

      <div class="section p-0 bg-transparent">
        <div class="container">
          <div class="text-center">
            <h1>@lang('content.our_partners')</h1>
          </div>
          <div class="d-flex justify-content-center">
            <div>
              <img src="{{ asset('images/partners/partner-cisco-300x200-1.gif') }}" alt="">
            </div>
            <div>
              <img src="{{ asset('images/partners/partner-microsoft-300x200-1.gif') }}" alt="">
            </div>
            <div>
              <img src="{{ asset('images/partners/partner-checkpoint-300x200-1.gif') }}" alt="">
            </div>
            <div>
              <img src="{{ asset('images/partners/partner-paloalto-300x200-1.gif') }}" alt="">
            </div>
            <div>
              <img src="{{ asset('images/partners/partner-vm-300x200-1.gif') }}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="section m-0" style="padding: 80px 0">
        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0" data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
          <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/linkedin.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/nat-geo.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/jetblue.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/zillow.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
          <div class="oc-item"><a href="#"><img src="{{ asset('images/clients/amazon.svg') }}" class="mx-auto w-auto" height="24" alt="Brands"></a></div>
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
