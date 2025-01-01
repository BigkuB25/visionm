@extends('layouts.main')

@section('title')
  @lang('menu.contact')
@endsection

@section('nav')
  @include('layouts.nav-page')
@endsection

@section('content')

<section class="page-title page-title-pattern">
  <div class="container">
    <div class="page-title-row">

      <div class="page-title-content">
        <h1 class="text-white">@lang('menu.contact')</h1>
      </div>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">@lang('menu.home')</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">@lang('menu.contact')</a></li>
        </ol>
      </nav>

    </div>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-4 col-sm-12">
          <div class="feature-box flex-column text-center">
            <div class="fbox-image text-center mb-3">
              <img src="{{ asset('images/pin.png') }}" alt="Feature Icon">
            </div>
            <div class="fbox-content">
              <h3 class="text-transform-none ls-0 mb-4">@lang('content.address_title')</h3>
              <address>@lang('content.address_content_1')</address>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="feature-box flex-column text-center">
            <div class="fbox-image text-center mb-3">
              <img src="{{ asset('images/phone-call.png') }}" alt="Feature Icon">
            </div>
            <div class="fbox-content">
              <h3 class="text-transform-none ls-0 mb-4">@lang('content.phone_title')</h3>
              <abbr title="Phone Number">@lang('content.phone_office')</abbr> <a href="tel:+6621036165">(+66) 2103 6165</a><br>
              <abbr title="Phone Number">@lang('content.phone_mobile')</abbr> <a href="tel:+66661046165">(+66)6 6104 6165</a><br>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="feature-box flex-column text-center">
            <div class="fbox-image text-center mb-3">
              <img src="{{ asset('images/email.png') }}" alt="Feature Icon">
            </div>
            <div class="fbox-content">
              <h3 class="text-transform-none ls-0 mb-4">@lang('content.email_title')</h3>
              <abbr title="Phone Number">@lang('content.email_title')</abbr> <a href="mailto:sale&marketing@visionm.co.th">sale&marketing@visionm.co.th</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="line"></div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15498.674541310997!2d100.5615345!3d13.7988384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d57dc9bd6e9%3A0xe843c520aebb71d4!2sVision%20M%20Technology%20Co.%2CLtd.!5e0!3m2!1sth!2sth!4v1731464127653!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6">
          <div class="form-widget" data-alert-type="inline">
            <div class="form-result"></div>

            <form class="mb-0" id="template-contactform" name="template-contactform" action="#" method="post" novalidate="novalidate">

              <div class="form-process">
                <div class="css3-spinner">
                  <div class="css3-spinner-scaler"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="template-contactform-name">@lang('contact.name') <small class="text-danger">*</small></label>
                  <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control required">
                </div>

                <div class="col-md-4 form-group">
                  <label for="template-contactform-email">@lang('contact.email') <small class="text-danger">*</small></label>
                  <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email form-control">
                </div>

                <div class="col-md-4 form-group">
                  <label for="template-contactform-phone">@lang('contact.phone') <small class="text-danger">*</small></label>
                  <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control required">
                </div>

                <div class="w-100"></div>

                <div class="col-md-12 form-group">
                  <label for="template-contactform-subject">@lang('contact.subject') <small class="text-danger">*</small></label>
                  <input type="text" id="template-contactform-subject" name="subject" value="" class="required form-control">
                </div>

                <div class="w-100"></div>

                <div class="col-12 form-group">
                  <label for="template-contactform-message">@lang('contact.message') <small class="text-danger">*</small></label>
                  <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                </div>

                <div class="col-12 form-group d-none">
                  <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
                </div>

                <div class="col-12 form-group">
                  <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
