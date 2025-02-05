@extends('layouts.header')
@section('title', "Our Best Cloud Services - Kitaracloud")
@section('description', "We are always responsive and reliable, this is our keys to Success, we promise and deliver excellent work all time.")
@section('keywords', "Salesforce Consulting Services, Salesforce Implementation Services, Community Cloud Implementation")

@section('content')
<!-- Start Techno Breatcome Area -->
<div class="breatcome_area d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breatcome_title">
          <div class="breatcome_title_inner pb-2">
            <h2>Our Service</h2>
          </div>
          <div class="breatcome_content">
            <ul>
              <li>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Our Services</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Techno Breatcome Area -->

<!----- Start Techno About Area ----->
<div class="about_area pt-85 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
        <div class="about_thumb">
          <img src="{{ asset('theme') }}/assets/images/about-2.jpg" alt="" />
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
        <div class="section_title text_left mb-40 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>5 YEARS OF EXPERIENCE</h6>
          </div>
          <div class="section_main_title">
            <h1>We Provide Best <span>Cloud Solutions</span> For Your Success</h1>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
          <div class="section_content_text bold pt-5">
            <p>Our team believe in respecting and caring for each other. We have an amazing team of Expert and Certified Professionals who are always happy to help our customers in any situation. our team’s motto is our customer should get maximum revenue out of their investment. We provide Innovative, accurate, high-quality and best solutions at good prices.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno About Area ----->

<!----- Start Techno Service Area ----->
<div class="service_area pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title text_center mb-60 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>Services</h6>
          </div>
          <div class="section_main_title">
            <h2>Our Best Cloud Solutions</h2>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center service_cta">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/consulting.png" alt="Salesforce Consulting" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/consulting-services') }}">
                <h4>Salesforce consulting</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>We Provide Salesforce CRM Consulting Services to support your sales, marketing and customer service needs. In case you decide to implement Salesforce CRM, migrate from another CRM to Salesforce, optimize existing Salesforce solution, add automation for Sales, Service and marketing department, we provide outstanding, best and cost-effective Salesforce consulting services.</p>
            </div>
            <div class="feature_style_eight_button">
              <div class="button style-four">
                <a href="{{ url('/consulting-services') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/cloud-service.png" alt="" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/community-cloud-implementation') }}">
                <h4>Community Cloud Implementation</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>Broadcast messages, news, updates to your customers, Partners and Employees and receive their feedback and suggestions. Using community, we can address large group of people. Using community, customers can get solutions to their issues from the knowledge base of the community using Question and answer discussion, customer support channel, agent support.</p>
            </div>
            <div class="feature_style_eight_button">
              <div class="button style-four">
                <a href="{{ url('/community-cloud-implementation') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/implementation.png" alt="" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/implementation-services') }}">
                <h4>Salesforce Implementation</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>Our Salesforce architects thoroughly understand your business functionality, pain points & unique requirements, providing strategic guidance, innovative ideas & tailored technical solutions to address challenges effectively, optimize processes, maximize Salesforce's potential & drive sustainable business growth.</p>
            </div>
            <div class="feature_style_eight_button">
              <div class="button style-four">
                <a href="{{ url('/implementation-services') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/plug.png" alt="Integration" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/integration') }}">
                <h4>Salesforce Integration</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>We have vital expertise in salesforce integration with any third-party system. We help you to create Restful or SOAP web-service inside salesforce which can be consumed by external system. We suggest you about which integration approach is best suitable for your applications based on your business needs.</p>
            </div>
            <div class="feature_style_eight_button">
              <div class="button style-four">
                <a href="{{ url('/integration') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/flash.png" alt="Field Service Lightning" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/field-service-lightning-implementation') }}">
                <h4>Salesforce Field Service Lightning Implementation</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>Salesforce FSL helps to deliver fast and efficient on-site service to the customer. Salesforce Field Service provides valuable insight so all team can work efficiently, this will save lots of time and money of the organization. Field Service Lightning (FSL) is part of the Salesforce Service Cloud suite that provides a comprehensive view of workforce management.</p>
            </div>
            <div class="feature_style_eight_button">
              <div class="button style-four">
                <a href="{{ url('/field-service-lightning-implementation') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/thunder.png" alt="Salesforce Lightning Migration" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/lightning-migration') }}">
                <h4>Salesforce Lightning Migration</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>Are you looking to migrate your org from Salesforce Classic to Lightning? Our expert team can help with this migration. Why migrate to Lightning? Salesforce releases enhancements every four months, available only on the Lightning Platform. Lightning users access new features at no extra cost, while others may incur additional fees. Lightning offers a better user experience, a responsive UI, and improved sales and marketing forecasts.</p>
            </div>
            <div class="feature_style_eight_button">
              <div class="button style-four">
                <a href="{{ url('/lightning-migration') }}">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-6 col-sm-12">
        <div class="service_style_seven pt-3 pb-3 pl-4 pr-3 mb-30">
          <div class="service_style_seven_icon">
            <img src="{{ asset('theme') }}/assets/images/migration.png" alt="Salesforce Data Migration" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/data-migration') }}">
                <h4>Salesforce Data Migration</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <p>Salesforce Data Migration is a complicated and time-consuming task which involves data export, data mapping, data cleansing and data moving from any CRM, old On-premise or Cloud system to Salesforce org. Before we migrate data, first we have to migrate metadata. After Setting up new Salesforce CRM system, we will get all your existing data from your present CRM platform to your newly configured Salesforce org.</p>
            </div>
            <div class="feature_style_eight_button">
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

<!----- Start Techno Call Do Action Area ----->
<div class="call_do_action bg_color2 pt-20" style="background-image: url(../theme/assets/images/glob-bg.png)">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <div class="section_title text_left mb-40 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>Get in Touch</h6>
          </div>
          <div class="section_main_title">
            <h2>We’d love to hear from you. Kindly feel free to get in touch with us.</h2>
          </div>
        </div>
        <div class="call_do_action_button">
          <div class="button two">
            <a href="{{ url('/contactus') }}">Let's Contact</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="acction_thumb">
          <img src="{{ asset('theme') }}/assets/images/shape2.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!----- Start Techno Call Do Action Area ----->
@endsection
