@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Embriodery Section -->
    <!-- @include('frontend.partials.embroidery-digitizing.embroidery') -->
    <!-- Embriodery Section -->

    <!-- Vector Section -->
    <!-- @include('frontend.partials.vector-conversation.vector') -->
    <!-- /Vector Section -->

     <!-- Who We Are Section -->
     @include('frontend.partials.whoweare')
    <!-- /Who We Are Section -->

    <!-- Start Services Section -->
    @include('frontend.partials.services')
    <!-- /Start Services Section -->

    <!-- Why Choose Us Section -->
    @include('frontend.partials.whychooseus')
    <!-- /Why Choose Us Section -->

    <!-- ========================= portfolio start ========================= -->
    <section class="pb-100 pt-100" >
      <div class="container">
        <div class="row"> 
            <div class="section-title mb-60">
                <div class="row justify-content-between">
                    <div class="col-md-12">
                      <p class="font-weight-semi-bold color-red caption-font-size mb-6">OUR PORTFOLIO</p>
                    </div>
                    <div class="col-md-5">
                        <h3 class="mb-15 font-weight-medium">We create<br/><span class="font-weight-bold color-red fst-italic">beautiful designs</span></h3>
                    </div>
                    <div class="col-md-6">
                      <p class="mb-15">
                        Our Custom Patches services offer clients the ability to enhance their brand with embroidered, PVC, leather, chenille, sublimation, and woven patches. Our Custom Patches services offer clients the ability to enhance their brand
                      </p>
                        <a href="{{ url('/portfolio') }}" class="button button-sm radius-3">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4">
          <div class="col-md-4">
            <div>
              <div class="comparison">
                <div class="labels">
                  <span class="label before">Before</span>
                  <span class="label after">After</span>
                </div>
                <figure>
                  <div
                    class="handle"
                    before-image="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-before.jpg"
                    after-image="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-after.jpg"
                  ></div>
                  <div class="divisor"></div>
                </figure>
                <input type="range" min="0" max="100" value="50" class="slider">
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <div class="comparison">
                <div class="labels">
                  <span class="label before">Before</span>
                  <span class="label after">After</span>
                </div>
                <figure>
                  <div
                    class="handle"
                    before-image="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-before.jpg"
                    after-image="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-after.jpg"
                  ></div>
                  <div class="divisor"></div>
                </figure>
                <input type="range" min="0" max="100" value="50" class="slider">
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <div class="comparison">
                <div class="labels">
                  <span class="label before">Before</span>
                  <span class="label after">After</span>
                </div>
                <figure>
                  <div
                    class="handle"
                    before-image="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-before.jpg"
                    after-image="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-after.jpg"
                  ></div>
                  <div class="divisor"></div>
                </figure>
                <input type="range" min="0" max="100" value="50" class="slider">
              </div>
              
            </div>
          </div>
        </div>
             
    </section>
    <!-- ========================= portfolio end ========================= -->

    <!-- Testimonials Section -->
    @include('frontend.partials.faq')
    <!-- /Testimonials Section -->

    <!-- Testimonials Section -->
    @include('frontend.partials.testinomial')
    <!-- /Testimonials Section -->



    <!-- ========================= pricing style-1 end ========================= -->
 {{-- 
                <section class="pricing">
                  <div class="container  pb-100 pt-100">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="pricingTable">
                        <h5 class="title"><span>BASIC</span></h5>
                        <ul class="pricing-content">
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Turnaround 18-24
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Support:
                            <strong>Normal</strong>
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>$2
                            Per 1000 Stitches
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Quality Check
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Real Sewout
                            <span
                              class="bi bi-info-circle"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="We run designs on machine for quality check."
                            ></span>
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Discounted Coupons
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Minor Edits
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Major Edits
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Source File
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Size Change (Within 15%)
                          </li>
                        </ul>
                        <div class="price-value">
                          <a href="#" class="pricingTable-signup">Order Now</a>
                          <span class="amount"> $10<span>/mo</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="pricingTable green">
                        <h5 class="title"><span>STANDARD</span></h5>
                        <ul class="pricing-content">
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Turnaround 18-24
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Support:
                            <strong>Normal</strong>
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>$2
                            Per 1000 Stitches
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Quality Check
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Real Sewout
                            <span
                              class="bi bi-info-circle"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="We run designs on machine for quality check."
                            ></span>
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Discounted Coupons
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Minor Edits
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Major Edits
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Source File
                          </li>
                          <li>
                            <i class="fa-solid fa-xmark availabilityIcon"></i>
                            Size Change (Within 15%)
                          </li>
                        </ul>
                        <div class="price-value">
                          <a href="#" class="pricingTable-signup">Order Now</a>
                          <span class="amount"> $20<span>/mo</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div class="pricingTable purple">
                        <h5 class="title"><span>Professional</span></h5>
                        <ul class="pricing-content">
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Turnaround 18-24
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Support:
                            <strong>Normal</strong>
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>$2
                            Per 1000 Stitches
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i
                            >Quality Check
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Real Sewout
                            <span
                              class="bi bi-info-circle"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="We run designs on machine for quality check."
                            ></span>
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Discounted Coupons
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Minor Edits
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Major Edits
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Source File
                          </li>
                          <li>
                            <i class="fa-solid fa-check availabilityIcon"></i>
                            Size Change (Within 15%)
                          </li>
                        </ul>
                        <div class="price-value">
                          <a href="#" class="pricingTable-signup">Order Now</a>
                          <span class="amount"> $30<span>/mo</span> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </section> --}}
            
    <!-- /Pricing Section -->


   
    
    <!-- Pricing Section -->
    <section id="pricing" class="pricing pt-100 pb-100 mt-100 mb-100">
      <div class="container">
          <div class="section-title mb-60">
              <div class="row justify-content-between">
                  <div class="col-md-12">
                      <p
                          class="font-weight-semi-bold text-white caption-font-size mb-6"
                      >
                          Pricing
                      </p>
                  </div>
                  <div class="col-md-5">
                      <h3 class="mb-15 font-weight-medium text-white">
                          Crafting excellence with
                          <span
                              class="font-weight-bold color-red text-white fst-italic"
                              >VortexEmb!</span
                          >
                      </h3>
                  </div>
                  <div class="col-md-6 text-white">
                      <p>
                          Transform your embroidery ideas into reality
                          with our top-tier digitizing and vector
                          conversion services. Experience unmatched
                          precision and creativity!
                      </p>
                  </div>
              </div>
          </div>
                  <div class="row align-items-stretch">
                      <div class="col-md-3 d-flex discount-banner">
                          <div class="align-items-center">
                              <div class="discBanner">
                                  <h4 class="discHeading">
                                      <span class="discGet">GET</span
                                      ><br />
                                      <span class="disc50 text-gradient"
                                          >50%</span
                                      >
                                      <br />DISCOUNT ON YOUR FIRST ORDER
                                  </h4>
                                  <p class="tca">
                                      Terms & Conditions Applied
                                      <span>*</span>
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-9 d-flex">
                          <div class="row w-100">
                              <div class="col-md-12 p-0">
                                  <div class="row g-0 align-items-stretch">
                                      <div
                                          class="col-md-4  d-flex pb-10 pt-10"
                                      >
                                          <div
                                              class="background-color shadow rounded-2 pb-25 pt-25 w-100"
                                          >
                                              <h6
                                                  class="font-weight-bold text-center mb-15"
                                              >
                                                  STARTER
                                              </h6>
                                              <h2
                                                  class="font-weight-semi-bold color-red text-center"
                                              >
                                                  $9
                                              </h2>
                                          </div>
                                      </div>
                                      <div class="col-md-4 d-flex p-0"
                                      style="margin-left: -3px !important ; margin-right: -3px; z-index: 1;"
                                      >
                                          <div
                                              class="background-col shadow-lg rounded-2 pb-25 pt-25 w-100" 
                                            style="background: #bb112"
                                              >
                                              <h6
                                                  class="font-weight-bold text-center mb-15"
                                              >
                                                  STARTER
                                              </h6>
                                              <h2
                                                  class="font-weight-semi-bold color-red text-center"
                                              >
                                                  $9
                                              </h2>
                                          </div>
                                      </div>
                                      <div
                                          class="col-md-4  d-flex pb-10 pt-10"
                                      >
                                          <div
                                              class="background-color shadow rounded-2 pb-25 pt-25 w-100"
                                          >
                                              <h6
                                                  class="font-weight-bold text-center mb-15"
                                              >
                                                  STARTER
                                              </h6>
                                              <h2
                                                  class="font-weight-semi-bold color-red text-center"
                                              >
                                                  $9
                                              </h2>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
      </div>
    </section>
    <!-- /Pricing Section -->
    {{--  --}}
    <!-- Feature Section -->
    {{-- @include('frontend.partials.feature') --}}
    <!-- /Feature Section -->

    <!-- Feature Section -->
    @include('frontend.partials.more-customers')
    <!-- /Feature Section -->

@endsection
