<?php $this->load->view('header'); ?>




    <!-- Carousel Start -->
    <!-- <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">Insurance Creates Wealth For Everyone</h1>
                                    <p class="fs-5 text-body mb-5">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">The Best Insurance Begins Here</h1>
                                    <p class="fs-5 text-body mb-5">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <!-- Carousel End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my- py- wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row py-4 g-5">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <h1 class="text-white">Get Your Insurance Now</h1>
                        <img class="position-absolute w-100 h-100" src="<?= base_url(); ?>assets\img\team-2.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-success rounded p-5">
                    <?php
                    if($this->session->flashdata('success')){
                        echo "<div class='text-bold alert alert-success'>".$this->session->flashdata('success')."<br/></div>";
                    }elseif($this->session->flashdata('failure')){
                        echo "<div class='alert alert-danger'>".$this->session->flashdata('failure')."<br/></div>";
                    }
                ?>
                
                    <div class="forms">
                <div class="arrow-form "><img class="" src="<?= base_url(); ?>assets\img\WhatsApp_Image_2023-09-28_at_18.12.40-removebg-removebg-preview.png"></div>
                
                <div class="text-center">
                    <h1>Get Your Free Quote</h1>
                  <!--<img class="h-50 w-50" src="<?= base_url(); ?>assets\img\undraw_Firmware_re_fgdy-removebg-preview.png" alt="">-->
                </div>
                </div>
                
                
                    <form action="<?= base_url('Web/leadRegister'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                            <div class="col-12 col-md-6">
                                        <input type="text" name="fname" class="form-control border-1" placeholder="First Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-md-6">
                                        <input type="text" name="lname" class="form-control border-1" placeholder="Last Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-md-6">
                                        <input type="number" name="mobile" class="form-control border-1" placeholder="Mobile No" style="height: 55px;" min="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                </div>
                                <div class="col-12 col-md-6">
                                        <input type="text" name="zcode" class="form-control border-1" placeholder="Zip Code" style="height: 55px;" min="5" maxlength="5"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                </div>
                                
                                <div class="col-12">
                                        <input type="email" name="email" class="form-control border-1" placeholder="Your Email" style="height: 55px;" required>  
                                </div>
                                <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                                <div class="col-12">
                                
                                <input  name="radio_chek" type="checkbox" id="leadid_tcpa_disclosure" required/>
                                <label style="color:white;" for="leadid_tcpa_disclosure">Agree to the terms and conditions</label>
                                </div>

                                <!-- <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cage" placeholder="Child Age">
                                        <label for="cage">Service Type</label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Get A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
            
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Free Health Insurance Quote.</h1>
                    <p class="text-white mb-5">A free health insurance quote is an estimate of the cost and coverage details for a health insurance plan, provided by an insurance company or agent without any charge. It outlines the premiums you would pay, deductibles, copayments, and coverage specifics such as doctor visits, prescriptions, hospital stays, and other medical services. This information helps individuals evaluate and compare different health insurance options before making a decision that aligns with their healthcare needs and budget.</p>
                    
                        <!-- <div class=" p-3">
                            <button class="btn btn-warning p-3">SIGN UP NOW</button>
                        </div> -->
                    
                </div>

                
        </div>
    </div>
    </div>
    <!-- Appointment End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?= base_url(); ?>assets\img\undraw_Firmware_re_fgdy-removebg-preview.png" alt="" style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                                <h1 class="text-white mb-0">25</h1>
                                <h2 class="text-white">Years</h2>
                                <h5 class="text-white mb-0">Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">Why Health insurance Plans</h1>
                        <p class="fs-5 text-primary mb-4">Health insurance is Federal Health Insurance for people 65 or plus. Health insurance also covers some younger people with disabilities and people with End-Stage Renal Disease. We at NewHealth insurance, your one-stop shop, offer no obligation Health insurance Quotes, compare plans, and reduce healthcare costs for older adults.</p>
                        <!-- <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-04-primary.png" alt="">
                                    <h5 class="mb-0">Flexible Insurance Plans</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-03-primary.png" alt="">
                                    <h5 class="mb-0">Money Back Guarantee</h5>
                                </div>
                            </div>
                        </div> -->
                        <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="">
                                <h5 class="mb-0">Call Us: +1 689-999-4084</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">We Provide professional Insurance Services</h1>
            </div> -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/icon/icon-10-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Compare Health insurance Plans & Options</h4>
                            
                        </div>
                        <h6>From Several Insurance Providers</h6>
                        <p class="mb-4">Get Quotes and compare Health insurance plans from different providers in the United States!</p>
                        <!--<a class="btn btn-light px-3" href="">Read More</a>-->
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/icon/icon-01-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Health insurance Advantage Plans</h4>
                        </div>
                        <h6>Possible Additional Benefits</h6>
                        <p class="mb-4">Health insurance Advantage plans may include extra benefits such as Dental Routine, Vision, Hearing, and Prescription Drug coverage. Get your no obligation quote and review a plan that fits YOU!</p>
                        <!--<a class="btn btn-light px-3" href="">Read More</a>-->
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/icon/icon-05-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Health insurance Supplement Plans</h4>
                        </div>
                        <h6>Minimize Your Out-of-Pocket Costs</h6>
                        <p class="mb-4">Health insurance Supplement Insurance Plans known as Medigap helps cover out-of-pocket costs not paid by Original Health insurance. Get No Obligation Quotes to purchase a Health insurance Supplement Plan, which could cover and protect you from unexpected medical expenses.</p>
                        <!--<a class="btn btn-light px-3" href="">Read More</a>-->
                    </div>
                </div>
                <div class=" col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/icon/icon-08-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Simple & Easy, No Obligation Quotes</h4>
                        </div>
                        <h6>Click “Get A Quote” and fill the Contact Form with the Required Info.</h6>
                        <p class="mb-4">Get your anonymous and no interference with your Health insurance plans quote.</p>
                        <!--<a class="btn btn-light px-3" href="">Read More</a>-->
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/icon/icon-07-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Business Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/img/icon/icon-06-light.png" alt="">
                            </div>
                            <h4 class="mb-0">Property Insurance</h4>
                        </div>
                        <p class="mb-4">Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->

<!-- Features Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">Enroll Now</h1>
                    <p class="mb-4">helps you find a Health insurance coverage option that works for you. Our licensed insurance agent can answer your questions and help you and help you find a right Health insurance plan that suits your needs. Your health is important, and we are here to make sure that you’re not overpaying for it.</p>
                    <div class="row g-3">
                        <div class="col-md-4" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-06-primary.png" alt="">
                                    <h5 class="mb-0">Fast</h5>
                                    <p>All Health insurance plans are state and carrier based, so it's great to work with a licensed insurance agent who knows the plans in your area, which helps you possibly save money and make the suitable choices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-03-primary.png" alt="">
                                    <h5 class="mb-0">SECURE</h5>
                                    <p>We'll pair you with the licensed insurance agent in your area to help you find MA plans. We'll help you enroll in the suitable choices, whether or not we represent those particular companies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-04-primary.png" alt="">
                                    <h5 class="mb-0">EASY</h5>
                                    <p>It is easy to get the suitable quotes for no obligation to enroll with NewHealth insurance.com. All you have to do is complete the form and wait for our licensed insurance agent to contact you.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="bg-light rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Money Saving</h5>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?= base_url(); ?>assets\img\team-3.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

     <!-- Features Start -->
     <div class="container-xxl appointment py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                    <div class="row g-3">
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-06-primary.png" alt="">
                                    <h5 class="mb-0">Check on Health insurance Plans</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-03-primary.png" alt="">
                                    <h5 class="mb-0">Compare Plans Easily</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-04-primary.png" alt="">
                                    <h5 class="mb-0">Get Knowledgeable Advice</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Get No Obligation Quotes</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Choose the Right Plan</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="service-item rounded h-100 p-3">
                                <div class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?= base_url(); ?>assets/img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">Affordable Health insurance Quotes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <main>

  <section class="faq">
    <h1>Frequently Asked Questions</h1>

    <div class="faq-container">
      <details class="faq-box" open>
        <summary class="faq-header">
          What is Original Health insurance?
        </summary>
        <div class="faq-content">
          <p>
          Health insurance, also known as medical insurance, is a financial arrangement that provides coverage for medical expenses, offering a safety net for individuals in managing healthcare costs. It typically covers hospitalization, doctor visits, prescription drugs, and preventive care.
          </p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">
          What is a health insurance Advantage plan?
        </summary>
        <div class="faq-content">
          <p>
          A health insurance advantage plan, often referred to as a Health insurance Advantage plan, is a private insurance plan that combines Health insurance Part A and Part B coverage and may include additional benefits like vision or dental coverage, offering an alternative to traditional Health insurance. These plans are offered by private insurance companies and can provide cost savings and added services for eligible individuals.
          </p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">
          What are Health insurance Supplemental insurance plans?
        </summary>
        <div class="faq-content">
          <p>
          Health insurance supplemental plans, also known as Medigap, provide additional coverage to help pay for healthcare costs not covered by Health insurance, such as deductibles and co-payments. They work alongside original Health insurance to reduce out-of-pocket expenses and offer more comprehensive health coverage.
          </p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">
          
What is Part D of Health insurance?
        </summary>
        <div class="faq-content">
          <p>
          Health insurance Part D is a prescription drug coverage program in the United States, provided by private insurance companies, offering assistance with the costs of prescription medications and improving access to necessary drugs for Health insurance beneficiaries. It's an optional plan that helps individuals manage their prescription drug expenses.
          </p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">
          
Do I need to renew my health insurance every year?
        </summary>
        <div class="faq-content">
          <p>
          Yes, in most cases, you need to renew your health insurance every year during the open enrollment period, which typically occurs annually. This allows you to review and potentially update your coverage, premiums, and benefits for the upcoming year.
          </p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">
          
Can I use health insurance in every U.S. state?
        </summary>
        <div class="faq-content">
          <p>
          Yes, health insurance can typically be used in every U.S. state, but the coverage and network of healthcare providers may vary based on your insurance plan. Many health insurance plans have networks of preferred providers, and using in-network providers often results in lower out-of-pocket costs. It's important to check with your insurance provider regarding coverage details and the availability of in-network providers in different states, especially if you plan to use healthcare services while traveling or residing in another state.
          </p>
        </div>
      </details>

      <details class="faq-box">
        <summary class="faq-header">
          
Who is eligible for health insurance?
        </summary>
        <div class="faq-content">
          <p>
          Eligibility for health insurance typically includes employees and their dependents, individuals and families seeking coverage, those eligible for government programs like Health insurance and Medicaid, and specific populations such as veterans or individuals with certain health conditions or disabilities. Eligibility varies based on the country's healthcare system and specific program criteria.
          </p>
        </div>
      </details>


    </div>
  </section>

</main>


    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h1 class="text-white mb-4">DISCOVER YOUR Health Insurance PLAN OPTIONS</h1>
                        <p class="text-light mb-5">“By interacting with this website, you agree to all tracking, recording, and monitoring of all events and provide express written consent for NewHealth insurance.com or their marketing partners and/or their affiliates to contact via phone, SMS, email, or automated/pre-recorded telephone call even if you are on a Federal/State “Do Not Call” registry.”</p>
                        <!--<a href="" class="align-self-start btn btn-secondary py-3 px-5">More Details</a>-->
                    </div>
                </div>
                <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 px-4 pe-lg-0">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Happy Clients</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Projects Succeed</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Awards Achieved</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/team-1.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/team-2.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/team-3.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/team-4.jpg" alt="">
                        <div class="text-center p-4">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-text text-center bg-white p-4">
                            <h5>Full Name</h5>
                            <p>Designation</p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">What They Say About Our Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url(); ?>assets/img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url(); ?>assets/img/johnuser.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url(); ?>assets/img/alexuser.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="<?= base_url(); ?>assets/img/testimonial-1.jpg" alt="">
                            <p class="fs-5">"Having our insurance with this company has been a game-changer. The coverage is comprehensive, claims are handled swiftly, and the peace of mind it provides for me and my family is priceless. Highly recommended!"</p>
                            <h5>Sarah K.</h5>
                            <span></span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="<?= base_url(); ?>assets/img/johnuser.png" alt="">
                            <p class="fs-5">"Our experience with this insurance has been exceptional. The customer service is top-notch, and the policy has proven to be a reliable safety net during unexpected health issues. We feel secure and well taken care of."</p>
                            <h5>John M.</h5>
                            <span></span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="<?= base_url(); ?>assets/img/alexuser.jpg" alt="">
                            <p class="fs-5">"Choosing this insurance was a smart decision. The coverage is comprehensive, the service is excellent, and it has truly made a positive difference in my healthcare experience."</p>
                            <h5>Alex D.</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url(); ?>assets/img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url(); ?>assets/img/johnuser.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="<?= base_url(); ?>assets/img/alexuser.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <?php $this->load->view('footer'); ?>