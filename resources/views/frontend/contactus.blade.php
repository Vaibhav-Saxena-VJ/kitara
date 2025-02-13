@extends('layouts.header')
@section('title', "Contact Us - Kitaracloud")
@section('description', "We are always responsive and reliable, this is our keys to Success, we promise and deliver excellent work all time.")
@section('keywords', "Salesforce Consulting Services, Salesforce Implementation Services, Community Cloud Implementation")

@section('content')
<!-- Start Techno Breatcome Area -->
<div class="breatcome_area d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 p-0">
        <div class="breatcome_title_inner pb-2">
          <h2>Contact Us: We Are Happy To Help You!</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Techno Breatcome Area -->

<!----- Start Techno Contact Area ----->
<div class="main_contact_area style_three pt-80 pb-90">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="section_title text_left mb-50 mt-3">
          <div class="section_sub_title uppercase mb-3">
            <h6>Advance Digital Metrics</h6>
          </div>
          <div class="section_main_title">
            <h1>We’d love to hear from you. Kindly feel free to get in touch with us.</h1>
          </div>
          <div class="section_title_text pt-2">
            <p>We are looking forward to start a project with you. We’d love to hear from you. Kindly feel free to get in touch with us.</p>
          </div>
          <div class="em_bar">
            <div class="em_bar_bg"></div>
          </div>
        </div>
        <div class="contact_address">
          <div class="contact_address_company mb-3">
            <ul>
              <li>
                <i class="fal fa-envelope"></i><span><a href="mailto:info@kitaracloud.com">info@kitaracloud.com</a></span>
              </li>
              <li>
                <i class="fal fa-mobile-android"></i><span><a href="tel:+919033648701">+91 90336-48701</a></span>
              </li>
              <li>
                <i class="fal fa-map-marker-alt"></i>
                <span>310, Arth Business Center, Nikol Ring Road, Ahmedabad, Gujarat 382350.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="contact_from">
          <div class="contact_from_box">
            <div class="contact_title pb-4">
              <h3>Get in Touch</h3>
            </div>
            <form id="contact_form" action="#" method="POST" id="dreamit-form">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form_box mb-30">
                    <input type="text" name="name" placeholder="Name" />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form_box mb-30">
                    <input type="email" name="email" placeholder="Email Address"/>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form_box mb-30">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                  </div>
                  <div class="quote_btn">
                    <button class="btn" type="submit">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="status"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----- End Techno Contact Area ----->

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d469953.5029537218!2d72.6781!3d23.041693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e870783fa4169%3A0x254f8f5c2f0a375f!2sKitaracloud%20Techlabs!5e0!3m2!1sen!2sus!4v1737547315036!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection