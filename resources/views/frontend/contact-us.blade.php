@extends('frontend.layouts.header')
@section('title', "Connect with Us - Kitara Cloud")
@section('keywords', "IT Services, Account Management services, Digital marketing services, Website Design company, Website design services, End to end sales, outsourcing, Affordable digital marketing services, Website marketing services, SEO service agency, Social media marketing, SEO company for business")

@section('content')
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section two inner">
    <div class="banner-element-four two">
        <img src="{{ asset('theme') }}/assets/images/element/element-5.png" alt="element">
    </div>
    <div class="banner-element-five two">
        <img src="{{ asset('theme') }}/assets/images/element/element-7.png" alt="element">
    </div>
    <div class="banner-element-nineteen two">
        <img src="{{ asset('theme') }}/assets/images/element/element-6.png" alt="element">
    </div>
    <div class="banner-element-twenty-two two">
        <img src="{{ asset('theme') }}/assets/images/element/element-69.png" alt="element">
    </div>
    <div class="banner-element-twenty-three two">
        <img src="{{ asset('theme') }}/assets/images/element/element-70.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-30-none">
            <div class="col-xl-12 mb-30">
                <div class="banner-content two">
                   <div class="banner-content-header">
                        <h2 class="title">We Are Happy To Help You</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                </ol>
                            </nav>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="contact-item-section ptb-120">
    <div class="contact-item-element-one">
        <img src="{{ asset('theme') }}/assets/images/element/element-71.png" alt="element">
    </div>
    <div class="contact-item-element-two">
        <img src="{{ asset('theme') }}/assets/images/element/element-72.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="contact-item text-center">
                    <div class="contact-icon-area">
                        <div class="contact-icon">
                            <i class="las la-map-marked-alt"></i>
                        </div>
                    </div>
                    <div class="contact-content">                       
                        <p>310, Arth Business Center (ABC), Nikol Ring Road, Nikol, Ahmedabad, Gujarat 382350.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="contact-item text-center">
                    <div class="contact-icon-area">
                        <div class="contact-icon">
                            <i class="las la-phone"></i>
                        </div>
                    </div>
                    <div class="contact-content">
                        <h3 class="title">Call Us</h3>
                        <p><a href="tel:919033648701">+91 90336-48701</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="contact-item text-center">
                    <div class="contact-icon-area">
                        <div class="contact-icon">
                            <i class="las la-envelope-open-text"></i>
                        </div>
                    </div>
                    <div class="contact-content">
                        <h3 class="title">Mail Us</h3>
                        <p><a href="mailto:info@kitaracloud.com">info@kitaracloud.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="contact-section pt-5">
    <div class="contact-element-one">
        <img src="{{ asset('theme') }}/assets/images/element/element-73.png" alt="element">
    </div>
    <div class="contact-element-two">
        <img src="{{ asset('theme') }}/assets/images/element/element-74.png" alt="element">
    </div>
    <div class="container">
        <form class="contact-form">
            <div class="row justify-content-center mb-25-none align-items-center">
                <div class="col-xl-6 col-lg-6 col-6 mb-30">
                    <div class="box-wrapper two">
                        <div class="box3"></div>
                        <div class="box1">
                            <div class="box-element-one">
                                <img src="http://127.0.0.1:8000/theme/assets/images/element/element-59.png" alt="element">
                            </div>
                            <div class="box-element-two">
                                <img src="http://127.0.0.1:8000/theme/assets/images/element/element-7.png" alt="element">
                            </div>
                        </div>
                        <div class="box2">
                            <div class="box-element-five">
                                <img src="http://127.0.0.1:8000/theme/assets/images/element/element-16.png" alt="element">
                            </div>
                            <div class="box-element-six">
                                <img src="http://127.0.0.1:8000/theme/assets/images/element/element-7.png" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="about-thumb">
                        <img src="http://127.0.0.1:8000/theme/assets/images/element/element-58.png" alt="element">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content">
                        <h2 class="title">We’d love to hear from you. Kindly feel free to <span class="text--base">get in touch with us.</span></h2>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 form-group">
                                <label>Enter Name</label>
                                <input type="text" name="name" class="form--control" placeholder="Jhon david smith">
                            </div>
                            <div class="col-xl-6 col-lg-6 form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form--control" placeholder="jhonsmith@gmail.com">
                            </div>
                            <div class="col-xl-6 col-lg-6 form-group">
                                <label>Your Phone</label>
                                <input type="text" name="number" class="form--control" placeholder="+1 (900) 696 3600" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                            </div>
                            <div class="col-xl-6 col-lg-6 form-group">
                                <label>Select Subject</label>
                                <div class="contact-select">
                                    <select class="form--control">
                                        <option disabled selected>Select Service</option>
                                        <option value="1">Salesforce consulting</option>
                                        <option value="2">Salesforce Implementation</option>
                                        <option value="3">Community Cloud Implementation</option>
                                        <option value="4">Salesforce Field Service Lightning Implementation</option>
                                        <option value="4">Salesforce Integration</option>
                                        <option value="4">Salesforce Lightning Migration</option>
                                        <option value="4">Data Migration</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 form-group">
                                <label>Write Message</label>
                                <textarea name="message" class="form--control" placeholder="Write Here ..."></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 form-group text-center">
                                <button type="submit" class="btn--base mt-20">Send Message <i class="fas fa-arrow-right ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Map
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5117560216154!2d72.67552487438839!3d23.0416924791604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e870783fa4169%3A0x254f8f5c2f0a375f!2sKitaracloud%20Techlabs!5e0!3m2!1sen!2sin!4v1731069462038!5m2!1sen!2sin" style="border:0;" allowfullscreen></iframe>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Map
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection