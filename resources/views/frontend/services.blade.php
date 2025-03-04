@extends('layouts.header')
@section('title', "Our Best Cloud Services - Kitaracloud")
@section('description', "We are always responsive and reliable, this is our keys to Success, we promise and deliver excellent work all time.")
@section('keywords', "Salesforce Consulting Services, Salesforce Implementation Services, Community Cloud Implementation")

@section('content')
<!-- Start Techno Breatcome Area -->
<!-- <div class="breatcome_area d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 p-0">
        <div class="breatcome_title_inner pb-2">
          <h2>Our Service</h2>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- End Techno Breatcome Area -->

<div class="about_area pb-50">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <img src="{{ asset('theme') }}/assets/images/project-plan.png" class="w-100" alt="Salesforce Project Plan" />
      </div>
    </div>
  </div>
</div>

<!----- Start Techno About Area ----->
<div class="about_area pb-70">
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
            <h1>We Provide Best <span>Cloud Services</span> For Your Success</h1>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
          <div class="section_content_text bold pt-5">
            <p>At Kitaracloud Techlabs, we are dedicated to empowering businesses by leveraging the full potential of Salesforce. Our comprehensive suite of services is designed to address diverse business challenges, ensuring seamless integration, enhanced productivity, and accelerated growth. Below is an overview of the services we offer:</p>
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
            <h2>Our Best Cloud Services</h2>
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
            <img src="{{ asset('theme') }}/assets/images/data.png" alt="Salesforce Development" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/salesforce-development') }}">
                <h4>Salesforce Development</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <ul>
                <li><i class="fas fa-check-circle"></i> Custom Development and Automation</li>
                <li><i class="fas fa-check-circle"></i> Implement robust security and Compliance</li>
                <li><i class="fas fa-check-circle"></i> User Experience Enhancement</li>
                <li><i class="fas fa-check-circle"></i> Seamless Integration</li>
                <li><i class="fas fa-check-circle"></i> Enhanced Productivity</li>
                <li><i class="fas fa-check-circle"></i> Build a scalable Salesforce ecosystem</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
              <div class="button style-four">
                <a href="{{ url('/salesforce-development') }}">Know More</a>
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
              <ul>
                <li><i class="fas fa-check-circle"></i> Custom API Development (REST, SOAP)</li>
                <li><i class="fas fa-check-circle"></i> Integrate Salesforce with External Systems</li>
                <li><i class="fas fa-check-circle"></i> Middleware Solutions (MuleSoft, Dell Boomi)</li>
                <li><i class="fas fa-check-circle"></i> Real-Time Data Sync</li>
                <li><i class="fas fa-check-circle"></i> Scalability & Performance</li>
                <li><i class="fas fa-check-circle"></i> Security & Compliance</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
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
            <img src="{{ asset('theme') }}/assets/images/consulting.png" alt="Salesforce Support" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/salesforce-support') }}">
                <h4>Salesforce Support</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <ul>
                <li><i class="fas fa-check-circle"></i> Proactive System Monitoring</li>
                <li><i class="fas fa-check-circle"></i> Proactive Issue Resolution</li>
                <li><i class="fas fa-check-circle"></i> Routine Maintenance and Upgrades</li>
                <li><i class="fas fa-check-circle"></i> User Support and Training</li>
                <li><i class="fas fa-check-circle"></i> Performance Optimization</li>
                <li><i class="fas fa-check-circle"></i> Data Management Assistance</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
              <div class="button style-four">
                <a href="{{ url('/salesforce-support') }}">Know More</a>
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
              <ul>
                <li><i class="fas fa-check-circle"></i> Custom Community Development</li>
                <li><i class="fas fa-check-circle"></i> Security Model Configuration</li>
                <li><i class="fas fa-check-circle"></i> User Experience Optimization</li>
                <li><i class="fas fa-check-circle"></i> Mobile Accessibility</li>
                <li><i class="fas fa-check-circle"></i> Performance Analytics</li>
                <li><i class="fas fa-check-circle"></i> Integration & Automation</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
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
              <ul>
                <li><i class="fas fa-check-circle"></i> Business Process Analysis</li>
                <li><i class="fas fa-check-circle"></i> Customization and Configuration</li>
                <li><i class="fas fa-check-circle"></i> Custom Technical Solutions</li>
                <li><i class="fas fa-check-circle"></i> Scalability & Flexibility</li>
                <li><i class="fas fa-check-circle"></i> Data Migration and Validation</li>
                <li><i class="fas fa-check-circle"></i> User Adoption & Training</li>
                <li><i class="fas fa-check-circle"></i> Ongoing Support & Enhancements</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
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
            <img src="{{ asset('theme') }}/assets/images/flash.png" alt="Field Service Lightning" />
          </div>
          <div class="service_style_seven_content">
            <div class="service_style_seven_title pb-3">
              <a href="{{ url('/field-service-lightning-implementation') }}">
                <h4>Salesforce Field Service Lightning Implementation</h4>
              </a>
            </div>
            <div class="service_style_seven_text">
              <ul>
                <li><i class="fas fa-check-circle"></i> Work Order & Service Appointment Customization</li>
                <li><i class="fas fa-check-circle"></i> Dispatcher Console Setup</li>
                <li><i class="fas fa-check-circle"></i> Service Resource Management </li>
                <li><i class="fas fa-check-circle"></i> Inventory & Asset Management</li>
                <li><i class="fas fa-check-circle"></i> FSL Mobile App Customization </li>
                <li><i class="fas fa-check-circle"></i> Generate Service Reports</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
              <div class="button style-four">
                <a href="{{ url('/field-service-lightning-implementation') }}">Know More</a>
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
              <ul>
                <li><i class="fas fa-check-circle"></i> Metadata Migration</li>
                <li><i class="fas fa-check-circle"></i> Data Extraction & Mapping</li>
                <li><i class="fas fa-check-circle"></i> Data Cleansing & Transformation</li>
                <li><i class="fas fa-check-circle"></i> Seamless Data Migration</li>
                <li><i class="fas fa-check-circle"></i> Validation & Quality Assurance</li>
                <li><i class="fas fa-check-circle"></i> Post-Migration Support & Optimization</li>
              </ul>
            </div>
            <div class="feature_style_eight_button mt-3">
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
            <h2>Looking for an experienced Salesforce team?</h2>
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
