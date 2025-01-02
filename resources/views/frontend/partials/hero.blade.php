  <!-- ========================= hero-section-wrapper-1 start ========================= -->
    <section class="hero-section-wrapper-1">

      <!-- ========================= header-4 start ========================= -->
      @include('frontend.partials.navbar')
      <!-- ========================= header-2 end ========================= -->

      <!-- ========================= hero-1 start ========================= -->
      <div class="hero-section hero-style-1 align-content-center">
        <div class="container">
          <div class="row justify-content-around">
            <div class="col-md-6">
              <div class="hero-content-wrapper pt-120 pb-120">
               <div class="text-center justify-content-center">
                <p class="font-weight-bold caption-font-size text-center text-danger d-inline-block px-4 rounded-5 mb-15" style="background-color: #ffe8eb;">VORTEXEMB</p>
                <h3 class="text-center mb-15 font-weight-bold"><span class="text-danger">Embriodery</span><br/>Digitizing & <span class="text-danger">Vector</span><br/>Conversation</h3>
                <p class="text-center mb-15">High-quality digitizing and vector conversion services starting at great prices. Elevate your brand with professional designs crafted for perfection. Get started today!</p>
                <div class="justify-content-center d-flex">
                  <a href="#0" class="button button-sm radius-50">More Info</a>
                </div>
                <img src="frontend/assets/img/hero/hero-1/shape-5.svg" alt="" class="shape shape-5">
                <img src="frontend/assets/img/hero/hero-1/shape-5.svg" alt="" class="shape shape-6">
               </div>
              </div>
            </div>
            <div class="col-md-5 align-self-center">
            @include('frontend.partials.heroform')
            <img src="frontend/assets/img/hero/hero-1/shape-7.svg" alt="">
            </div>
          </div>
        </div>
        <div class="shapes">
          {{-- <img src="frontend/assets/img/hero/hero-1/shape-1.svg" alt="" class="shape shape-1"> --}}
          <img src="frontend/assets/img/hero/hero-1/shape-2.svg" alt="" class="shape shape-2">
          <img src="frontend/assets/img/hero/hero-1/shape-3.svg" alt="" class="shape shape-3">
          <img src="frontend/assets/img/hero/hero-1/shape-4.svg" alt="" class="shape shape-4">
        </div>
      </div>
      <!-- ========================= hero-1 end ========================= -->

</section>
