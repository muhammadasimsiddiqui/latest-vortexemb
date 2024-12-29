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

    <!-- Testimonials Section -->
    @include('frontend.partials.testinomial')
    <!-- /Testimonials Section -->

    <!-- ========================= portfolio start ========================= -->
    <section class="pb-100 pt-100" >
      <div class="container">
        <div class="row"> 
            <div class="section-title mb-60">
                <div class="row justify-content-between">
                    <div class="col-md-12">
                      <p class="font-weight-medium caption-font-size mb-6">OUR PORTFOLIO</p>
                    </div>
                    <div class="col-md-5">
                        <h3 class="mb-15">We create<br/><span>beautiful designs</span></h3>
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

    <!-- ========================= pricing style-1 end ========================= -->

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
                </section>
            
    <!-- /Pricing Section -->

    <!-- Feature Section -->
    @include('frontend.partials.feature')
    <!-- /Feature Section -->

@endsection
