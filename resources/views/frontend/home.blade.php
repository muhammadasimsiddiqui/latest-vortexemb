@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Embriodery Section -->
    @include('frontend.partials.embroidery-digitizing.embroidery')
    <!-- Embriodery Section -->

    <!-- Vector Section -->
    @include('frontend.partials.vector-conversation.vector')
    <!-- /Vector Section -->

    <!-- Start Services Section -->
    @include('frontend.partials.services')
    <!-- /Start Services Section -->

    <!-- Vector Section -->
    @include('frontend.partials.whoweare')
    <!-- /Vector Section -->

    <!-- Why Choose Us Section -->
    @include('frontend.partials.whychooseus')
    <!-- /Why Choose Us Section -->

    <!-- Testimonials Section -->
    @include('frontend.partials.testinomial')
    <!-- /Testimonials Section -->

    		<!-- ========================= pricing style-1 start ========================= -->
		<section class="pricing-section pricing-style-1 mb-80">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
            <div class="section-title text-center mb-60">
              <h3 class="mb-15">Pricing Plan</h3>
              <p>Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-pricing">
              <h6>Basic</h6>
              <h4>$ 25.00</h4>
              <h3>$ 18.00</h3>
              <p class="font-weight-medium caption-font-size mb-6">20,000 STITCHES</p>
              <p class="font-weight-medium caption-font-size mb-6">FOR JACKET BACK *</p>
              <ul>
                <li><i class="fa-solid fa-check availabilityIcon"></i>&nbsp;Turnaround 18-24</li>
                <li><i class="fa-solid fa-check availabilityIcon"></i>&nbsp;Support:&nbsp;<strong>Normal</strong>
                </li>
                <li>
                  <i class="fa-solid fa-check availabilityIcon"></i>&nbsp;$2 Per 1000 Stitches
                </li>
                <li>
                  <i class="fa-solid fa-check availabilityIcon"></i
                  >&nbsp;Quality Check
                </li>
                <li>
                  <i class="fa-solid fa-check availabilityIcon"></i
                  >&nbsp; Real Sewout
                  <i
                    class="bi bi-info-circle"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="We run designs on machine for quality check."
                  ></i>
                </li>
                <li>
                  <i class="fa-solid fa-xmark availabilityIcon"></i
                  >&nbsp; Discounted Coupons
                </li>
                <li>
                  <i class="fa-solid fa-xmark availabilityIcon"></i
                  >&nbsp; Minor Edits
                </li>
                <li>
                  <i class="fa-solid fa-xmark availabilityIcon"></i
                  >&nbsp; Major Edits
                </li>
                <li>
                  <i class="fa-solid fa-xmark availabilityIcon"></i
                  >&nbsp; Source File
                </li>
                <li>
                  <i class="fa-solid fa-xmark availabilityIcon"></i
                  >&nbsp; Size Change&nbsp;
                  <strong>(Within 15%)</strong>
                </li>
                          
              </ul>
              <a href="#0" class="button radius-30">Get Started</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-pricing active">
              <span class="button button-sm radius-30 popular-badge">Popular</span>
              <div class="image">
                <img src="assets/img/pricing/pricing-1/pricing-2.svg" alt="">
              </div>
              <h6>Standard Design</h6>
              <h4>Web Development</h4>
              <h3>$ 89.00</h3>
              <ul>
                <li> <i class="lni lni-checkmark-circle"></i> Carefully crafted components</li>
                <li> <i class="lni lni-checkmark-circle"></i> Amazing page examples</li>
                <li> <i class="lni lni-checkmark-circle"></i> Super friendly support team</li>
                <li> <i class="lni lni-checkmark-circle"></i> Awesome Support</li>
              </ul>
              <a href="#0" class="button radius-30">Get Started</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-pricing">
              <div class="image">
                <img src="assets/img/pricing/pricing-1/pricing-3.svg" alt="">
              </div>
              <h6>Pro Design</h6>
              <h4>Design & Develop</h4>
              <h3>$ 199.00</h3>
              <ul>
                <li> <i class="lni lni-checkmark-circle"></i> Carefully crafted components</li>
                <li> <i class="lni lni-checkmark-circle"></i> Amazing page examples</li>
                <li> <i class="lni lni-checkmark-circle"></i> Super friendly support team</li>
                <li> <i class="lni lni-checkmark-circle"></i> Awesome Support</li>
              </ul>
              <a href="#0" class="button radius-30">Get Started</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ========================= pricing style-1 end ========================= -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <div class="container">
        <div class="pricing-area">
          <div class="container">
            <div class="row gy-4 align-items-stretch">
              <div class="col-md-3 d-flex discount-banner">
                <div class="align-items-center">
                  <div class="discBanner">
                    <h4 class="discHeading">
                      <span class="discGet">GET</span><br />
                      <span class="disc50 text-gradient">50%</span>
                      <br />DISCOUNT ON YOUR FIRST ORDER
                    </h4>
                    <p class="tca">Terms & Conditions Applied <span>*</span></p>
                  </div>
                </div>
              </div>
              <div class="col-md-9 justify-content-evenly d-flex p-0">
                <div class="row gy-4 w-100">
                  <div class="col-md-4 basic">
                    <div class="single-price">
                      <div class="deal-top">
                        <div class="deal-head">
                          <h3 class="planTitle">Basic</h3>
                          <h4 class="planPriceDisc">$25.00</h4>
                          <h4 class="planPrice">
                            <i class="fa-solid fa-dollar-sign"></i>18.00
                          </h4>
                          <p class="planOffering">20,000 STITCHES</p>
                          <p class="planDesc">FOR JACKET BACK <span>*</span></p>
                        </div>
                        <div class="dealList">
                          <ul class="deal-item">
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Turnaround 18-24
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Support:
                              <strong>Normal</strong>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;$2 Per 1000 Stitches
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Quality Check
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Real Sewout
                              <i
                                class="bi bi-info-circle"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="We run designs on machine for quality check."
                              ></i>
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Discounted Coupons
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Minor Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Major Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Source File
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Size Change
                              <strong class="sizeSub">(Within 15%)</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="deal-bottom">
                        <ul>
                          <a href="portfolio.html">
                            <li class="samples">VIEW SAMPLES</li></a
                          >
                          <li class="ord">
                            <a href="order.html">ORDER NOW</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 standard">
                    <div class="single-price">
                      <div class="deal-top">
                        <div class="deal-head">
                          <h3 class="planTitle">Standard</h3>
                          <h4 class="planPriceDisc">$35.00</h4>
                          <h4 class="planPrice">
                            <i class="fa-solid fa-dollar-sign"></i>25.00
                          </h4>
                          <p class="planOffering">30,000 STITCHES</p>
                          <p class="planDesc">FOR JACKET BACK <span>*</span></p>
                        </div>
                        <div class="dealList">
                          <ul class="deal-item">
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Turnaround 18-24
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Support:
                              <strong>Normal</strong>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;$2 Per 1000 Stitches
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Quality Check
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Real Sewout
                              <i
                                class="bi bi-info-circle"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="We run designs on machine for quality check."
                              ></i>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Discounted Coupons
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Minor Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Major Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Source File
                            </li>
                            <li>
                              <i class="fa-solid fa-xmark availabilityIcon"></i
                              >&nbsp; Size Change
                              <strong class="sizeSub">(Within 15%)</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="deal-bottom">
                        <ul>
                          <a href="portfolio.html">
                            <li class="samples">VIEW SAMPLES</li></a
                          >
                          <li class="ord">
                            <a href="order.html">ORDER NOW</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 professional">
                    <div class="single-price">
                      <div class="deal-top">
                        <div class="deal-head">
                          <h3 class="planTitle">Professional</h3>
                          <h4 class="planPriceDisc">$45.00</h4>
                          <h4 class="planPrice">
                            <i class="fa-solid fa-dollar-sign"></i>35.00
                          </h4>
                          <p class="planOffering">30,000 STITCHES</p>
                          <p class="planDesc">FOR JACKET BACK <span>*</span></p>
                        </div>
                        <div class="dealList">
                          <ul class="deal-item">
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Turnaround 18-24
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Support:
                              <strong>Normal</strong>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;$2 Per 1000 Stitches
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp;Quality Check
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Real Sewout
                              <i
                                class="bi bi-info-circle"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="We run designs on machine for quality check."
                              ></i>
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Discounted Coupons
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Minor Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Major Edits
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Source File
                            </li>
                            <li>
                              <i class="fa-solid fa-check availabilityIcon"></i
                              >&nbsp; Size Change
                              <strong class="sizeSub">(Within 15%)</strong>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="deal-bottom">
                        <ul>
                          <a href="portfolio.html">
                            <li class="samples">VIEW SAMPLES</li></a
                          >
                          <li class="ord">
                            <a href="order.html">ORDER NOW</a>
                          </li>
                        </ul>
                      </div>
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

    <!-- Feature Section -->
    @include('frontend.partials.feature')
    <!-- /Feature Section -->

@endsection
