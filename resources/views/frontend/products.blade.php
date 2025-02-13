@extends('layouts.header')
@section('title', "Our Best Products - Kitaracloud")
@section('description', "We are always responsive and reliable, this is our keys to Success, we promise and deliver excellent work all time.")
@section('keywords', "Salesforce Consulting Services, Salesforce Implementation Services, Community Cloud Implementation")

@section('content')
<!-- Start Techno Breatcome Area -->
<div class="breatcome_area d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 p-0">
        <div class="">
          <div class="breatcome_title_inner pb-2">
            <h2>Our Products</h2>
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
      <!-- Start Section Tile -->
      <div class="col-lg-12">
        <div class="section_title text-center mb-50">
          <div class="section_sub_title uppercase mb-3">
            <h6>Our Products</h6>
          </div>
          <div class="section_main_title">
            <h2>Explore Our Salesforce Products</h2>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <!-- <i class="fad fa-bolt"></i> -->
              <img src="{{ asset('theme') }}/assets/images/exchange.png" alt="Field Service Lightning" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N4V00000IzEfYUAV&tab=d" target="_blannk">Currency Conversion</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Our application helps users to Update latest Conversion rates automatically using Scheduler and On-demand. This application automatically updates currencies values based on latest rates.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N4V00000IzEfYUAV&tab=d" target="_blannk">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="feature_style_eight mb-30 wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
          <div class="feature_style_eight_content">
            <div class="feature_style_eight_icon">
              <img src="{{ asset('theme') }}/assets/images/delete.png" alt="" />
              <div class="anim-icon">
                <span class="icon icon-1"></span>
                <span class="icon icon-2"></span>
                <span class="icon icon-3"></span>
              </div>
            </div>
            <div class="feature_style_eight_title pt-4">
              <h4><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N4V00000IyWhZUAV" target="_blannk">User Deactivation</a></h4>
            </div>
            <div class="feature_style_eight_text pt-15">
              <p>Our AppExchange solution makes Salesforce customer's life easy during deactivation of user. Our app guide user at granular level steps for user deactivation so your org's existing functionality will not impact.</p>
            </div>
            <div class="feature_style_eight_button pt-3">
              <div class="button style-four">
                <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N4V00000IyWhZUAV" target="_blannk">Know More</a>
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
<div class="call_do_action pt-20" style="background-image: url(../theme/assets/images/glob-bg.png)">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <div class="section_title text_left mb-40 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>Get in Touch</h6>
          </div>
          <div class="section_main_title">
            <h2>Got an AppExchange idea? We can build and list it for you!</h2>
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
