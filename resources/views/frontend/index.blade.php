@extends('layouts.header')
@section('title', "Welcome to Kitara Cloud Techlabs")
@section('description', "Kitaracloud is the team of Expert and Certified Professionals in Salesforce CRM domain who is able take you the next level.")
@section('keywords', "Salesforce Consulting Services, Salesforce Implementation Services, Community Cloud Implementation")

@section('content')
<!----- End Techno Banner Area ----->
<div class="banner_area banner1 d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="single_banner">
          <div class="single_banner_content">
            <div class="banner_text_content">
              <h1>Kitaracloud Techlabs Salesforce</h1>
              <h1 class="cd-headline clip is-full-width">
                <span class="cd-words-wrapper">
                  <b class="is-visible">Consulting Company</b>
                  <b>Implementation Company</b>
                  <b>Integration Company</b>
                </span>
              </h1>
            </div>
            <div class="banner_content_text pt-30">
              <p>We are certified, experienced, innovative and qualified professionals with focus to provide outstanding services to individuals, small and medium sized companies and corporate clients. we ensure 100% customer satisfaction by providing best, innovative, robust and scalable solutions within your deadline and budget. We are always reliable and help out our clients on time.</p>
            </div>
            <div class="slider_button pt-25 d-flex">
              <div class="button">
                <a href="{{ url('/services') }}">How IT Work <i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="data_science_video">
              <div class="data_science_video_inner">
                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
                  <i class="fa fa-play"></i>
                  <div id="spinnerbtn"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="single_banner_thumb">
          <div class="banner_shape">
            <div class="banner_shape_inner1 bounce-animate5">
              <img src="{{ asset('theme') }}/assets/images/shape/2.png" alt="" />
            </div>
            <div class="banner_shape_inner2 bounce-animate">
              <img src="{{ asset('theme') }}/assets/images/shape/3.png" alt="" />
            </div>
            <div class="banner_shape_inner3 rotateme">
              <img src="{{ asset('theme') }}/assets/images/shape/4.png" alt="" />
            </div>
            <div class="banner_shape_inner4">
              <img src="{{ asset('theme') }}/assets/images/shape/text1.png" alt="" />
            </div>
            <div class="banner_shape_inner5 bounce-animate2">
              <img src="{{ asset('theme') }}/assets/images/shape/text2.png" alt="" />
            </div>
            <div class="banner_shape_inner6 bounce-animate3">
              <img src="{{ asset('theme') }}/assets/images/shape/text3.png" alt="" />
            </div>
          </div>
          <div class="single_banner_thumb_inner">
            <img src="{{ asset('theme') }}/assets/images/shape/1.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- Start Techno Banner Area ----->

<!----- Start Techno Service Area ----->
<div class="service_area bg_color2 pt-80 pb-70">
  <div class="container">
    <div class="row">
      <!-- Start Section Tile -->
      <div class="col-lg-12">
        <div class="section_title text-center mb-50">
          <div class="section_sub_title uppercase mb-3">
            <h6>Our Services</h6>
          </div>
          <div class="section_main_title">
            <h2>Explore Our Salesforce Services</h2>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <!-- <i class="fad fa-bolt"></i> -->
              <img src="{{ asset('theme') }}/assets/images/flash.png" alt="Field Service Lightning" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="{{ url('/field-service-lightning-implementation') }}">Salesforce FSL Implementation</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Salesforce Field Service Lightning (FSL) Implementation helps to deliver fast and efficient on-site service to the customer.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/field-service-lightning-implementation') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/implementation.png" alt="" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="{{ url('/implementation-services') }}">Salesforce Implementation</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Our Salesforce architect analyzes your business needs and pain points, providing effective technical solutions within Salesforce.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/implementation-services') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/cloud-service.png" alt="" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4>
                <a href="{{ url('/community-cloud-implementation') }}">Community Cloud Implementation</a>
              </h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>A Salesforce Community Cloud is a platform to Collaborate with your Partners, Customers and Employees.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/community-cloud-implementation') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/consulting.png" alt="Salesforce Consulting" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4>
                <a href="{{ url('/consulting-services') }}">Salesforce Consulting</a>
              </h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>We Provide Salesforce CRM Consulting Services to support your sales, marketing and customer service needs.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/consulting-services') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/thunder.png" alt="Salesforce Lightning Migration" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4>
                <a href="{{ url('/lightning-migration') }}">Salesforce Lightning Migration</a>
              </h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Are you looking for migrating your org from Salesforce Classic to Lighting?</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/lightning-migration') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/migration.png" alt="Salesforce Data Migration" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4>
                <a href="{{ url('/data-migration') }}">Salesforce Data Migration</a>
              </h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Data migration is a complicated and time-consuming task which involves data export,</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/data-migration') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno Service Area ----->

<!----- Start Techno HOw IT Work Area ----->
<div class="how_it_work style_three pt-80 pb-30">
  <div class="container">
    <div class="row">
      <!-- Start Section Tile -->
      <div class="col-lg-12">
        <div class="section_title text-center mb-90">
          <div class="section_sub_title uppercase mb-3">
            <h6>Salesforce CRM Solutions</h6>
          </div>
          <div class="section_main_title">
            <h2>We provide best industry standard<br>Business solutions</h2>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single_how_it_work text-center mb-60 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms pl-3 pr-3">
          <div class="how_it_work_content">
            <div class="how_it_work_number">
              <h4>01</h4>
            </div>
            <div class="how_it_work_icon">
              <div class="icon">
                <i class="flaticon-report"></i>
              </div>
              <div class="how_it_work_icon_bg_thumb">
                <div class="how_it_work_icon_bg_thumb_inner">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk1.png" alt="" />
                </div>
                <div class="how_it_work_bg_thumb_inner_hv">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="how_it_work_title pt-65">
              <h4>Easy To Use</h4>
            </div>
            <div class="how_it_work_text pt-2">
              <p>Build solution which is easily adaptable and user friendly.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="how_it_work_content">
            <div class="how_it_work_number">
              <h4>02</h4>
            </div>
            <div class="how_it_work_icon">
              <div class="icon">
                <i class="flaticon-process"></i>
              </div>
              <div class="how_it_work_icon_bg_thumb">
                <div class="how_it_work_icon_bg_thumb_inner">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk1.png" alt="" />
                </div>
                <div class="how_it_work_bg_thumb_inner_hv">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="how_it_work_title pt-65">
              <h4>High Performance</h4>
            </div>
            <div class="how_it_work_text pt-2">
              <p>Offer complex solutions with fasterexecution.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="how_it_work_content">
            <div class="how_it_work_number">
              <h4>03</h4>
            </div>
            <div class="how_it_work_icon">
              <div class="icon">
                <i class="flaticon-data"></i>
              </div>
              <div class="how_it_work_icon_bg_thumb">
                <div class="how_it_work_icon_bg_thumb_inner">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk1.png" alt="" />
                </div>
                <div class="how_it_work_bg_thumb_inner_hv">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="how_it_work_title pt-65">
              <h4>Customize Your Solution</h4>
            </div>
            <div class="how_it_work_text pt-2">
              <p>Offers multiple best custom solution and acquire which is best suit in your business.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <div class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="how_it_work_content">
            <div class="how_it_work_number">
              <h4>04</h4>
            </div>
            <div class="how_it_work_icon">
              <div class="icon">
                <i class="flaticon-24h"></i>
              </div>
              <div class="how_it_work_icon_bg_thumb">
                <div class="how_it_work_icon_bg_thumb_inner">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk1.png" alt="" />
                </div>
                <div class="how_it_work_bg_thumb_inner_hv">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="how_it_work_title pt-65">
              <h4>Customer Support</h4>
            </div>
            <div class="how_it_work_text pt-2">
              <p>You get 24×7 hours of support for your Salesforce applications.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <div class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="how_it_work_content">
            <div class="how_it_work_number">
              <h4>05</h4>
            </div>
            <div class="how_it_work_icon">
              <div class="icon">
                <i class="flaticon-business-and-finance"></i>
              </div>
              <div class="how_it_work_icon_bg_thumb">
                <div class="how_it_work_icon_bg_thumb_inner">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk1.png" alt="" />
                </div>
                <div class="how_it_work_bg_thumb_inner_hv">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="how_it_work_title pt-65">
              <h4>Scalability</h4>
            </div>
            <div class="how_it_work_text pt-2">
              <p>We always provide a solution which is scalable.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <div class="single_how_it_work text-center pl-3 pr-3 mb-60 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="how_it_work_content">
            <div class="how_it_work_number">
              <h4>06</h4>
            </div>
            <div class="how_it_work_icon">
              <div class="icon">
                <i class="flaticon-intelligent"></i>
              </div>
              <div class="how_it_work_icon_bg_thumb">
                <div class="how_it_work_icon_bg_thumb_inner">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk1.png" alt="" />
                </div>
                <div class="how_it_work_bg_thumb_inner_hv">
                  <img src="{{ asset('theme') }}/assets/images/shape/wk2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="how_it_work_title pt-65">
              <h4>Continuous Innovation</h4>
            </div>
            <div class="how_it_work_text pt-2">
              <p>We believe in learning new things every day.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno How IT Work Area ----->

<!----- Start Techno About Area ----->
<div class="about_area bg_color2 pt-80 pb-70">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
        <div class="section_title text_left mb-40 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>Why Trust Us?</h6>
          </div>
          <div class="section_main_title">
            <h2>The Benefits of Choosing Us</h2>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
          <div class="section_content_text pt-4">
            <p>Kitaracloud is the team of Expert and Certified Professionals in Salesforce CRM domain who is able take you the next level.</p>
          </div>
        </div>
        <div class="singel_about_left mb-30">
          <div class="singel_about_left_inner d-flex mb-30">
            <div class="data_science_about_icon mr-4">
              <div class="icon">
                <i class="flaticon-padlock"></i>
              </div>
            </div>
            <div class="singel-about-content">
              <h5>Always Reliable</h5>
              <p class="pt-2">You can rely on us in any technical challenge and difficult situation. We are always available to help you out.</p>
            </div>
          </div>
          <div class="singel_about_left_inner d-flex mb-30">
            <div class="data_science_about_icon mr-4">
              <div class="icon">
                <i class="fal fa-chart-line"></i>
              </div>
            </div>
            <div class="singel-about-content">
              <h5>Grow your business</h5>
              <p class="pt-2">We help to grow your business</p>
            </div>
          </div>
          <div class="singel_about_left_inner d-flex">
            <div class="data_science_about_icon mr-4">
              <div class="icon">
                <i class="fal fa-file-certificate"></i>
              </div>
            </div>
            <div class="singel-about-content">
              <h5>Certified Professionals</h5>
              <p class="pt-2">We are team of Salesforce Experienced Certified resources.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
        <div class="single_about_thumb">
          <div class="single_about_thumb_inner">
            <img src="{{ asset('theme') }}/assets/images/new/data-about.png" alt="" />
          </div>
          <div class="shape_thumb">
            <div class="about_shape_thumb bounce-animate">
              <img src="{{ asset('theme') }}/assets/images/shape/3.png" alt="" />
            </div>
            <div class="about_shape_thumb2 bounce-animate">
              <img src="{{ asset('theme') }}/assets/images/shape/5.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno About Area ----->

<!----- Start Techno Brand Area ----->
<div class="brand_area bg_color2 pb-50">
  <div class="container">
    <div class="row g-3 justify-content-center">
      <div class="col-md-2">
        <img src="{{ asset('theme') }}/assets/images/app-dev.png" alt=""/>
      </div>
      <div class="col-md-2">
        <img src="{{ asset('theme') }}/assets/images/elioplus.png" alt=""/>
      </div>
    </div>
  </div>
</div>
<!----- End Techno Brand Area ----->

<!----- Start Techno Call Do Action Area ----->
<div class="call_do_action pt-100 pb-100 bg_color" style="background-image: url({{ asset('theme') }}/assets/images/slider/slider-6.jpg); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title white text_center mt-3">
          <div class="phone_number mb-3">
            <h5>+91 90336-48701</h5>
          </div>
          <div class="section_main_title">
            <h2>Have a project in mind?<br>Let's get to work</h2>
          </div>
          <div class="button three mt-40">
            <a href="{{ url('/contactus') }}">Contact Us<i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno Call Do Action Area ----->

<!----- Start Techno Testimonial Area ----->
<div id="testimonial-section" class="testimonial-bg pt-80 pb-70">
  <div
    id="container-general"
    class="ready anim-section-features anim-section-desc anim-section-quote"
  >
    <section id="section-quote">
      <div class="col-lg-12">
        <div class="section_title text_center mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>TESTIMONIAL</h6>
          </div>
          <div class="section_main_title">
            <h1>Our Happy <span>Clients Says</span></h1>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
      </div>
      <!--Left Bubble Images-->
      <div class="container-pe-quote left">
        <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
          <div class="img animated bounce"></div>
        </div>
        <div
          class="pp-quote li-quote-4 active"
          data-textquote="quote-text-4"
        >
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
          <div class="img animated bounce"></div>
        </div>
      </div>
      <!--Left Bubble Images-->
      <!--Center Testimonials-->
      <div class="container-quote carousel-on">
        <!--Testimonial 1-->
        <div
          class="quote quote-text-3 hide-bottom"
          data-ppquote="li-quote-3"
        >
          <p>
            'Managing everyday banking has finally become fun, fast and
            easy. Icing on the cake, customer support is super reactive: 5
            stars!'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Tom Abel De</div>
            <div class="job">Digital Marketing</div>
          </div>
        </div>
        <!--Testimonial 2-->
        <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
          <p>
            'Qonto met my needs straight away. ng has finally become fun,
            fast andCustomer care is awesome! Period.'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Sanuka Santa</div>
            <div class="job">To To Company</div>
          </div>
        </div>
        <!--Testimonial 3-->
        <div
          class="quote hide-bottom quote-text-5"
          data-ppquote="li-quote-5"
        >
          <p>
            'With Qonto, I've been able to order MasterCard cards in
            seconds. My purchasing team can now be autonomous with their
            payments. Qonto is game changer.'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Grégoire Pasquet</div>
            <div class="job">Solf Solution</div>
          </div>
        </div>
        <!--Testimonial 4-->
        <div
          class="quote hide-bottom quote-text-6"
          data-ppquote="li-quote-6"
        >
          <p>
            'Qonto? Easy, fast, efficient. Traditionalng has finally become
            fun, fast and banks' hassles belong to the past!'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Nicolas Puran</div>
            <div class="job">CEO Founder</div>
          </div>
        </div>
        <!--Testimonial 5-->
        <div
          class="quote hide-bottom quote-text-7"
          data-ppquote="li-quote-7"
        >
          <p>
            'Qonto? A flawless UX and a customer service ng has finally
            become fun, fast and that cares so much. This is just
            incredible!'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Mathieu Jouhet</div>
            <div class="job">Freelance @Hello Mat</div>
          </div>
        </div>
        <!--Testimonial 6-->
        <div
          class="quote hide-bottom quote-text-8"
          data-ppquote="li-quote-8"
        >
          <p>
            'I needed a bank similar to a SaaS for LiveMentor: ng has
            finally become fun, fast and I think I found it.'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Charles Jadran</div>
            <div class="job">Web Development</div>
          </div>
        </div>
        <!--Testimonial 7-->
        <div
          class="quote hide-bottom quote-text-9"
          data-ppquote="li-quote-9"
        >
          <p>
            'I can say 'Goodbye' to the banking pains I had to ng has
            finally become fun, fast and bear with, and 'hello' to a way to
            do finance that makes sense.'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Digong Frando</div>
            <div class="job">CEO Officience</div>
          </div>
        </div>
        <!--Testimonial 8-->
        <div
          class="quote hide-bottom quote-text-10"
          data-ppquote="li-quote-10"
        >
          <p>
            'Qonto is 100% in tune with what we do at Alan.eu: a
            user-friendly service, a user-centric interface and a very
            reactive customer support.'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Charles Samuelian</div>
            <div class="job">Director & Photo Man</div>
          </div>
        </div>
        <!--Testimonial 9-->
        <div
          class="quote hide-bottom quote-text-11"
          data-ppquote="li-quote-11"
        >
          <p>
            'I have been looking for a modern and efficient banking
            alternative that could support the development of my business.
            I'm just wondering why Qonto did not exist before!'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Khatry Firmanio</div>
            <div class="job">CEO Company</div>
          </div>
        </div>
        <!--Testimonial 10-->
        <div
          class="quote hide-bottom quote-text-13"
          data-ppquote="li-quote-13"
        >
          <p>
            'That's just perfect - It rocks baby! ng has finally become fun,
            fast and You wanna apply at TheFamily? Use Qonto first.'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Jadran Parvej Imon</div>
            <div class="job">CEO Managar</div>
          </div>
        </div>
        <!--Testimonial 11-->
        <div
          class="quote quote-text-1 hide-bottom"
          data-ppquote="li-quote-1"
        >
          <p>
            'I wish I could have had Qonto ng has finally become fun, fast
            andenrolled in the Techstars Paris's first batch!'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Bertier Luyt</div>
            <div class="job">Managing Director</div>
          </div>
        </div>
        <!--Testimonial 12-->
        <div
          class="quote quote-text-2 hide-bottom"
          data-ppquote="li-quote-2"
        >
          <p>
            'Thanks to a slick interface and simple ng has finally become
            fun, fast and features, managing payments and expenses has
            become a piece of cake!'
          </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Darpon Abir Khan</div>
            <div class="job">Founder Officience</div>
          </div>
        </div>
      </div>
      <!--Right Bubble Images-->
      <div class="container-pe-quote right">
        <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
          <div class="img animated bounce"></div>
        </div>
        <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
          <div class="img animated bounce"></div>
        </div>
      </div>
    </section>
  </div>
</div>
<!----- End Techno Testimonial Area ----->

<!----- Start Techno Blog Area ----->
<div class="blog_area bg_color2 pt-85 pb-65">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="section_title text_left mb-60 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>Technology solutions</h6>
          </div>
          <div class="section_main_title">
            <h2>Latest News & Blog</h2>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="section_button mt-50">
          <div class="button two">
            <a href="https://www.kitaracloud.com/blog/">See All Blogs</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single_blog text-center mb-4 wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
          <div class="single_blog_thumb">
            <a href="#"><img src="https://www.kitaracloud.com/wp-content/uploads/2022/03/Schedule-Apex-to-run-Every-24-HOUR.png" alt=""/></a>
          </div>
          <div class="single_blog_date">
            <div class="single_blog_date_inner">
              <span>12 MAR 2022</span>
            </div>
          </div>
          <div class="single_blog_content pt-4 pl-4 pr-4">
            <!-- <div class="techno_blog_meta">
              <a href="#">Techno </a>
              <span class="meta-date pl-3">Corporate</span>
            </div> -->
            <div class="blog_page_title pb-1">
              <h3>
                <a href="#">Schedule Apex to run Every 24 HOUR</a>
              </h3>
            </div>
            <div class="blog_description">
              <p>Following is the snippet of anonymous code which will help you to schedule your apex Job to run Every HOUR.</p>
            </div>
            <div class="blog_page_button style_two pb-5">
              <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single_blog text-center mb-4 wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
          <div class="single_blog_thumb">
            <a href="blog-details.html"><img src="https://www.kitaracloud.com/wp-content/uploads/2022/03/Oracle-to-Salesforce-Integration-A-Step-by-Step-Guide.png" alt=""/></a>
          </div>
          <div class="single_blog_date color2">
            <div class="single_blog_date_inner">
              <span>12 MAR 2022</span>
            </div>
          </div>
          <div class="single_blog_content pt-4 pl-4 pr-4">
            <!-- <div class="techno_blog_meta">
              <a href="#">Techno </a>
              <span class="meta-date pl-3">Business</span>
            </div> -->
            <div class="blog_page_title pb-1">
              <h3>
                <a href="#">A Step by Step Guide: Oracle-to-Salesforce Integration</a>
              </h3>
            </div>
            <div class="blog_description">
              <p>Below are the seven steps to integrate Salesforce with Oracle using Lightning Connect...</p>
            </div>
            <div class="blog_page_button style_two pb-5">
              <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single_blog text-center mb-4 wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
          <div class="single_blog_thumb">
            <a href="#"><img src="https://www.kitaracloud.com/wp-content/uploads/2022/03/Salesforce-Integration-With-.NET-using-WSDL.png" alt=""/></a>
          </div>
          <div class="single_blog_date color3">
            <div class="single_blog_date_inner">
              <span>09 MAR 2022</span>
            </div>
          </div>
          <div class="single_blog_content pt-4 pl-4 pr-4">
            <!-- <div class="techno_blog_meta">
              <a href="#">Techno </a>
              <span class="meta-date pl-3">Consulting</span>
            </div> -->
            <div class="blog_page_title pb-1">
              <h3>
                <a href="#">The five devices you need to work anytime</a>
              </h3>
            </div>
            <div class="blog_description">
              <p>Below are the four steps to integrate Salesforce with .NET using WSDL. Download the WSDL file from...</p>
            </div>
            <div class="blog_page_button style_two pb-5">
              <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno Blog Area ----->
@endsection