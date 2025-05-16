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
              <h1 title="Welcome to Kitaracloud – Your Trusted Salesforce Partner">Welcome to Kitaracloud<br>Your <span style="color: #0c5adb;">Trusted Salesforce Partner</span></h1>
              <!-- <h1 class="cd-headline clip is-full-width">
                <span class="cd-words-wrapper">
                  <b class="is-visible">Consulting Company</b>
                  <b>Implementation Company</b>
                  <b>Integration Company</b>
                </span>
              </h1> -->
            </div>
            <div class="banner_content_text pt-30">
              <p>We specialize in delivering exceptional Salesforce solutions tailored to meet the unique needs of individuals, small and medium-sized businesses, and large enterprises. Our team comprises certified and highly experienced professionals who are committed to driving your success with innovative, robust, and scalable solutions.</p>
            </div>
            <div class="slider_button pt-25 d-flex">
              <div class="button">
                <a href="{{ url('/services') }}">How We Work? <i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
            <!-- <div class="data_science_video">
              <div class="data_science_video_inner">
                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
                  <i class="fa fa-play"></i>
                  <div id="spinnerbtn"></div>
                </a>
              </div>
            </div> -->
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
            <div class="banner_shape_inner3 bounce-animate">
              <img src="{{ asset('theme') }}/assets/images/shape/6.svg" alt="" />
            </div>
            <div class="banner_shape_inner4">
              <img src="{{ asset('theme') }}/assets/images/shape/text11.png" alt="" />
            </div>
            <div class="banner_shape_inner5 bounce-animate2">
              <img src="{{ asset('theme') }}/assets/images/shape/text22.png" alt="" />
            </div>
            <div class="banner_shape_inner6 bounce-animate3">
              <img src="{{ asset('theme') }}/assets/images/shape/text33.png" alt="" />
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
              <img src="{{ asset('theme') }}/assets/images/data.png" alt="Salesforce Development" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4>
                <a href="{{ url('/consulting-services') }}">Salesforce Development</a>
              </h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Custom development tailored to enhance your business processes and user experience. Tailoring Salesforce to meet your specific business needs for optimal performance.</p>
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
              <!-- <i class="fad fa-bolt"></i> -->
              <img src="{{ asset('theme') }}/assets/images/plug.png" alt="Integration" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="{{ url('/integration') }}">Salesforce Integration</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>We possess extensive expertise in Salesforce integration with various third-party systems. Our team assists in creating RESTful or SOAP web services within Salesforce, enabling seamless communication with external platforms.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="{{ url('/integration') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/consulting.png" alt="Support" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="{{ url('/lightning-migration') }}">Salesforce Support</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Partner with us to transform your operations through Salesforce's capabilities, driving growth, efficiency, scalability, innovation, superior customer experiences, data-driven insights, and long-term success.</p>
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
              <img src="{{ asset('theme') }}/assets/images/cloud-service.png" alt="Community Cloud Implementation" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="{{ url('/community-cloud-implementation') }}">Community Cloud Implementation</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Broadcast messages, news, and updates to your customers, partners & employees while receiving their feedback & suggestions.</p>
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
              <img src="{{ asset('theme') }}/assets/images/implementation.png" alt="community-cloud-implementation" />
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
              <img src="{{ asset('theme') }}/assets/images/flash.png" alt="Salesforce Lightning Migration" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4>
                <a href="{{ url('/field-service-lightning-implementation') }}">Salesforce FSL Implementation</a>
              </h4>
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
            <h2>Looking for an experienced<br>Salesforce team?</h2>
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
  <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
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
      </div>
      <!--Left Bubble Images-->

      <!--Center Testimonials-->
      <div class="container-quote carousel-on">
        <!--Testimonial 1-->
        <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
          <p>'Kitaracloud Techlabs automated the client's currency updates, resulting in a successful engagement. The team was responsive and professional and did everything they could to test and help diagnose the issue. The client was impressed with the team's responsiveness and resilience.' </p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Matthew Gill</div>
            <div class="job">Salesforce Admin</div>
          </div>
        </div>
        <!--Testimonial 2-->
        <div class="quote quote-text-2 show" data-ppquote="li-quote-2">
          <p>'Thanks to Kitaracloud Techlabs' efforts, the client was able to remove manual tasks, meeting the client's goal. The team delivered the project ahead of schedule and was empathetic to the client's situation and budget. Moreover, they stood out for their excellent service and hardworking attitude.'</p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Shay Staples</div>
            <div class="job">VP of Support</div>
          </div>
        </div>
        <!--Testimonial 3-->
        <div class="quote hide-bottom quote-text-3" data-ppquote="li-quote-3">
          <p>'Kitaracloud Techlabs successfully completed the projects on time, much to the client's delight. The team was highly proficient from a workflow standpoint, and internal stakeholders were impressed with the service provider's receptiveness to feedback.'</p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Grégoire Pasquet</div>
            <div class="job">Human Resources</div>
          </div>
        </div>
        <!--Testimonial 4-->
        <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
          <p>'The client is happy with Kitaracloud Techlabs' services. The team has managed the engagement well, communicating closely with the client through videos and Teams meetings. They're open to accepting projects outside of the initial scope of work, and their communication skills are truly remarkable.'</p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Nicolas Puran</div>
            <div class="job">Director - Process Management</div>
          </div>
        </div>
        <!--Testimonial 5-->
        <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
          <p>'Kitaracloud Techlabs successfully integrated the new software into the client's Salesforce. Their team impressed the client with their receptiveness to feedback and openness to learning their needs. They also communicated effectively via email, chat, and Zoom meetings.'</p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Mathieu Jouhet</div>
            <div class="job">VP of Sales & Integrations</div>
          </div>
        </div>
        <!--Testimonial 6-->
        <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9" >
          <p>'Kitaracloud Techlabs was professional, knowledgeable, and transparent throughout the project. They communicated by email and phone calls. The product was amazing, user-friendly, and made as per their requirements.'</p>
          <div class="container-info">
            <div class="pp"></div>
            <div class="name">Charles Jadran</div>
            <div class="job">Founder & CEO</div>
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
      </div>
    </section>
  </div>

  <div class="row wow fadeInLeft pt-3" data-wow-delay=".4">
    <div class="brand-list3 owl-carousel">
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl1.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl2.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl3.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl4.png" alt="" />
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl5.png" alt="" />
          </div>
        </div>
      </div> -->
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl6.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl7.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl8.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl9.png" alt="" />
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl10.png" alt="" />
          </div>
        </div>
      </div> -->
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl11.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl12.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl13.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl14.png" alt="" />
          </div>
        </div>
      </div>
      <!-- <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl15.png" alt="" />
          </div>
        </div>
      </div> -->
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl16.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl17.png" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="brand-thumb-box">
          <div class="brand-img">
            <img src="{{ asset('theme') }}/assets/images/brand/cl18.png" alt="" />
          </div>
        </div>
      </div>
    </div>
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
            <a href="{{ url('/blog/') }}">See All Blogs</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @if(isset($blogs) && $blogs->count() > 0)
        @foreach ($blogs as $blog)
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single_blog mb-4 wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
              <div class="single_blog_thumb">
                <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">
                  <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                </a>
              </div>
              <div class="single_blog_date">
                <div class="single_blog_date_inner">
                  <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</span>
                </div>
              </div>
              <div class="single_blog_content pt-4 pl-4 pr-4">
                <div class="blog_page_title pb-1">
                  <h3>
                    <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">
                      {{ Str::limit($blog->title, 40) }}
                    </a>
                  </h3>
                </div>
                <div class="blog_description">
                  <p>{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
                </div>
                <div class="blog_page_button style_two pb-5">
                  <a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">
                    Read More <i class="fa fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <p class="text-center">No blog posts available.</p>
      @endif
    </div>
  </div>
</div>
<!----- End Techno Blog Area ----->
@endsection