<style>
    :root{
        --color-one:#09C6F9;
    }
    .text-color{
        color: var(--color-one);
    }
 .hero {
    position: relative;
    background: url('frontend/assets/img/hero/hero-bg.webp') no-repeat left center / cover;
    min-height: 100vh;
    z-index: 1;
    overflow: hidden;
}

.hero .hero-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.hero .hero-overlay .shape {
    position: absolute;

    top: 10px;
    left: -40px;
    z-index: 0;
    animation: moveBottom 5s linear infinite;
}

.hero .hero-overlay .shape-overlay {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
}

.hero .hero-overlay .shape-2 {
    position: absolute;
    bottom: 20px;
    right: -30px;
    z-index: 0;
    animation: moveBottom 5s linear infinite;
}

.z-index-2 {
    z-index: 9999 !important;
}

/* Keyframes for moveBottom animation */
@keyframes moveBottom {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(20px);
    }
    100% {
        transform: translateY(0);
    }
}
.moveBottom{
    animation: moveBottom 5s linear infinite;

}


</style>
<section class="hero d-flex">
    <div class="hero-overlay">
        <img src="frontend/assets/img/hero/overlay.webp" alt="Decorative Shape" class="shape-overlay">
        <img src="frontend/assets/img/hero/shape.webp" alt="Decorative Shape" class="shape">
        <img src="frontend/assets/img/hero/shape-2.webp" alt="Decorative Shape 2" class="shape-2">
    </div>

    <div class="container">
        <div class="row  z-index-2  align-content-center h-100 w-100">
            <div class="col-md-6 z-index-2">
                <h3 class="text-danger caption-font-size">Design your own custom patches</h3>
                <h2 class="text-start mb-15 font-weight-bold text-white">
                    Premium
                    Embroidery
                    Digitizing
                </h2>
                <p class="text-start text-white">
                    High-quality digitizing and vector conversion services starting at great prices. 
                    Elevate your brand with professional designs crafted for perfection. Get started today!
                </p>
                <div class="d-flex justify-content-start mt-20">
                    <a href="#0" class="button button-sm rounded-2">More Info</a>
                </div>
            </div>
        </div>
    </div>
</section>
