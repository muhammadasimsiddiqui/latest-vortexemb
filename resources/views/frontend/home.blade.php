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

    <!-- ========================= pricing style-1 end ========================= -->
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
        <div class="row align-items-stretch">
              <div class="col-md-4 d-flex">
                <div class="serviceCard pr-25 pl-25 pt-25 pb-25 d-flex flex-column">
                  <div class="mb-25">
                   <img src="frontend/assets/img/icons/embriodery.svg"/>
                  </div>
                  <div class="content">
                    <h6 class="mb-20">Embriodery Digitizing</h6>
                    <p>The Vortexemb Design is the professioanl embriodery digitizing service provider who can perfectly digitize your artwork into the stitch file ready format without any thread breakage.</p>
                  </div>
                  <div class="moreIcon mt-auto">
                    <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                    <path d="M18.9203 6.0505C18.7834 5.86991 18.5665 5.75324 18.3223 5.75315L9.32695 5.75C8.91265 5.74985 8.57667 6.08545 8.57653 6.49958C8.57638 6.9137 8.91212 7.24954 9.32643 7.24968L16.5172 7.2522L5.79779 17.9716C5.5049 18.2645 5.5049 18.7394 5.79779 19.0323C6.09069 19.3252 6.56556 19.3252 6.85845 19.0323L17.5725 8.31828L17.5748 15.4945C17.5749 15.9086 17.9109 16.2442 18.3252 16.2441C18.7395 16.244 19.0752 15.9081 19.0751 15.494L19.0722 6.56074C19.0853 6.38214 19.0346 6.19976 18.9203 6.0505Z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex">
                <div class="serviceCard pr-25 pl-25 pt-25 pb-25">
                  <div class="mb-25">
                    <img src="frontend/assets/img/icons/vector-conversation.svg"/> 
                  </div>
                  <div class="content">
                    <h6 class="mb-20">Vector Conversation</h6>
                    <p class="mb-20">Vector Artwork creation is one of the key of task involved in selling promotional products. Generally the distributor help the customer to get the current art work, or at times create the artwork.</p> 
                  </div>
                  <div class="moreIcon">
                    <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                    <path d="M18.9203 6.0505C18.7834 5.86991 18.5665 5.75324 18.3223 5.75315L9.32695 5.75C8.91265 5.74985 8.57667 6.08545 8.57653 6.49958C8.57638 6.9137 8.91212 7.24954 9.32643 7.24968L16.5172 7.2522L5.79779 17.9716C5.5049 18.2645 5.5049 18.7394 5.79779 19.0323C6.09069 19.3252 6.56556 19.3252 6.85845 19.0323L17.5725 8.31828L17.5748 15.4945C17.5749 15.9086 17.9109 16.2442 18.3252 16.2441C18.7395 16.244 19.0752 15.9081 19.0751 15.494L19.0722 6.56074C19.0853 6.38214 19.0346 6.19976 18.9203 6.0505Z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex">
                <div class="serviceCard pr-25 pl-25 pt-25 pb-25 d-flex flex-column">
                  <div class="mb-25">
                    <img src="frontend/assets/img/icons/custom-patches.svg"/> 
                  </div>
                  <div class="content">
                    <h6 class="mb-20">Custom Patches</h6>
                    <p>Instantaneously dyeing the thread on demand allows for more unique and creative designs while also substantially improving overall economic competitiveness.</p>
                  </div>
                  <div class="moreIcon mt-auto">
                    <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" transform="rotate(0 0 0)">
                    <path d="M18.9203 6.0505C18.7834 5.86991 18.5665 5.75324 18.3223 5.75315L9.32695 5.75C8.91265 5.74985 8.57667 6.08545 8.57653 6.49958C8.57638 6.9137 8.91212 7.24954 9.32643 7.24968L16.5172 7.2522L5.79779 17.9716C5.5049 18.2645 5.5049 18.7394 5.79779 19.0323C6.09069 19.3252 6.56556 19.3252 6.85845 19.0323L17.5725 8.31828L17.5748 15.4945C17.5749 15.9086 17.9109 16.2442 18.3252 16.2441C18.7395 16.244 19.0752 15.9081 19.0751 15.494L19.0722 6.56074C19.0853 6.38214 19.0346 6.19976 18.9203 6.0505Z" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
      </div>       
    </section>
    <!-- ========================= pricing style-1 end ========================= -->
 
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
