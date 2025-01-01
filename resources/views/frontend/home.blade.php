@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

     <!-- Who We Are Section -->
     @include('frontend.partials.whoweare')
    <!-- /Who We Are Section -->

    <!-- Start Services Section -->
    @include('frontend.partials.home.whatwedo')
    <!-- /Start Services Section -->

    <!-- Why Choose Us Section -->
    @include('frontend.partials.whychooseus')
    <!-- /Why Choose Us Section -->

    <!-- ========================= portfolio start ========================= -->
    @include('frontend.partials.home.portfolio')
    <!-- ========================= portfolio end ========================= -->

    <!-- Testimonials Section -->
    @include('frontend.partials.faq')
    <!-- /Testimonials Section -->

    <!-- Testimonials Section -->
    @include('frontend.partials.home.pricing')
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


    <!-- /Pricing Section -->
    {{--  --}}
    <!-- Feature Section -->
    {{-- @include('frontend.partials.feature') --}}
    <!-- /Feature Section -->

    <!-- Feature Section -->
    @include('frontend.partials.more-customers')
    <!-- /Feature Section -->

@endsection
