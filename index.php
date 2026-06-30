<?php

session_start();

// 
if (!isset($_SESSION['email'])) {
   
    header("Location: login.php?error=please login first");
    exit(); 
}
$nav_class = '';


include "inc/header.php"; 
?>



<section class="hero-wrap js-fullheight" style="background-image: url('assets/img/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-10 ftco-animate text-center">
        <div class="icon">
          <span class="flaticon-lotus"></span>
        </div>
        <h1>Spa &amp; Beauty Center</h1>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-3">
            <p>Welcome to Sparlex - your trusted beauty clinic for professional spa, skincare, and relaxation treatments.</p>
          </div>
        </div>
        <p>
          <a href="booking.php" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Book Appointment</a>
          <a href="contact.php" class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">Contact Us</a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(assets/img/intro.jpg);">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6">
        <div class="heading-section ftco-animate">
          <h2 class="mb-4">Benefits of Doing Spa &amp; Massage</h2>
        </div>
        <p class="ftco-animate">Experience the ultimate relaxation and rejuvenation at Sparlex. Our professional treatments help you look and feel your best.</p>
        <ul class="mt-5 do-list">
          <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa &amp; Massage boosts brain power</a></li>
          <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa &amp; Massage helps you to breathe better</a></li>
          <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa &amp; Massage improves your strength</a></li>
          <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa &amp; Massage helps you to focus</a></li>
          <li class="ftco-animate"><a href="#"><span class="ion-ios-checkmark-circle mr-3"></span>Spa &amp; Massage helps give meaning to your day</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="offer-deal text-center px-2 px-lg-5">
          <div class="img" style="background-image: url(assets/img/offer-deal-1.jpg);"></div>
          <div class="text mt-4">
            <h3 class="mb-4">Book Your Treatment</h3>
            <p class="mb-5">Schedule your appointment today and experience our premium beauty services.</p>
            <p><a href="booking.php" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="offer-deal active text-center px-2 px-lg-5">
          <div class="img" style="background-image: url(assets/img/offer-deal-2.jpg);"></div>
          <div class="text mt-4">
            <h3 class="mb-4">Great Gift Packages</h3>
            <p class="mb-5">Surprise your loved ones with our special gift packages and vouchers.</p>
            <p><a href="contact.php" class="btn btn-white px-4 py-3"> Learn More <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="offer-deal text-center px-2 px-lg-5">
          <div class="img" style="background-image: url(assets/img/offer-deal-3.jpg);"></div>
          <div class="text mt-4">
            <h3 class="mb-4">Special Offer &amp; Deal</h3>
            <p class="mb-5">Check out our seasonal discounts and special offers for best deals.</p>
            <p><a href="price.php" class="btn btn-white px-4 py-3"> View Offers <span class="ion-ios-arrow-round-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-section-services bg-light">
  <div class="container-fluid px-md-5">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="services text-center ftco-animate">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-candle"></span>
          </div>
          <div class="text mt-3">
            <h3>Aromatheraphy</h3>
            <p>Relax your mind and body with our essential oil treatments.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="services text-center ftco-animate">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-beauty-treatment"></span>
          </div>
          <div class="text mt-3">
            <h3>Skin Care</h3>
            <p>Professional skincare treatments for a radiant and healthy glow.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="services text-center ftco-animate">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-stone"></span>
          </div>
          <div class="text mt-3">
            <h3>Herbal Spa</h3>
            <p>Natural herbal treatments to rejuvenate your body and soul.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="services text-center ftco-animate">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-relax"></span>
          </div>
          <div class="text mt-3">
            <h3>Body Massage</h3>
            <p>Therapeutic massage treatments for complete relaxation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-12 heading-section ftco-animate text-center">
        <h3 class="subheading">Services</h3>
        <h2 class="mb-1">Treatments</h2>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="row no-gutters">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-candle"></span>
              </div>
              <div class="text mt-2">
                <h3>Salt &amp; Aroma</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-spa-1"></span>
              </div>
              <div class="text mt-2">
                <h3>Hydro</h3>
                <p>A small river named Duden flows.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-stone"></span>
              </div>
              <div class="text mt-2">
                <h3>Hot Stone</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-lotus"></span>
              </div>
              <div class="text mt-2">
                <h3>Aroma</h3>
                <p>A small river named Duden flows.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 d-flex align-items-stretch">
        <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
          <div>
            <h3>Prices</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
          </div>
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Spa Therapies
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body text-left">
                <ul>
                  <li class="d-flex"><span>Face Treatments</span><span>40 min.</span><span>$10</span></li>
                  <li class="d-flex"><span>Nail Treatments</span><span>30 min.</span><span>$20</span></li>
                  <li class="d-flex"><span>Medical Treatments</span><span>60 min.</span><span>$10</span></li>
                  <li class="d-flex"><span>Hair Treatments</span><span>30 min.</span><span>$30</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Massage Therapies
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body text-left">
                <ul>
                  <li class="d-flex"><span>Face Treatments</span><span>40 min.</span><span>$10</span></li>
                  <li class="d-flex"><span>Nail Treatments</span><span>30 min.</span><span>$20</span></li>
                  <li class="d-flex"><span>Medical Treatments</span><span>60 min.</span><span>$10</span></li>
                  <li class="d-flex"><span>Hair Treatments</span><span>30 min.</span><span>$30</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="row no-gutters">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-beauty-treatment"></span>
              </div>
              <div class="text mt-2">
                <h3>Relaxation</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-relax"></span>
              </div>
              <div class="text mt-2">
                <h3>Athlete</h3>
                <p>A small river named Duden flows.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-massage"></span>
              </div>
              <div class="text mt-2">
                <h3>Thai</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-rose"></span>
              </div>
              <div class="text mt-2">
                <h3>Rose</h3>
                <p>A small river named Duden flows.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h3 class="subheading">Pricing Tables</h3>
        <h2 class="mb-1">Pricing Treatments</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Year Card</h2>
            <span class="price"><sup>$</sup> <span class="number">449</span></span>
            <span class="excerpt d-block">For 1 Year</span>
            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
            <ul class="pricing-text mb-5">
              <li>Face Treatments</li>
              <li>Nail Treatments</li>
              <li>Medical Treatments</li>
              <li>Hair Removal</li>
            </ul>
            <a href="booking.php" class="btn btn-primary d-block px-2 py-4">Get Started</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Monthly Card</h2>
            <span class="price"><sup>$</sup> <span class="number">200</span></span>
            <span class="excerpt d-block">For 1 Month</span>
            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
            <ul class="pricing-text mb-5">
              <li>Face Treatments</li>
              <li>Nail Treatments</li>
              <li>Medical Treatments</li>
              <li>Hair Removal</li>
            </ul>
            <a href="booking.php" class="btn btn-primary d-block px-2 py-4">Get Started</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">Weekly Card</h2>
            <span class="price"><sup>$</sup> <span class="number">85</span></span>
            <span class="excerpt d-block">For 1 Week</span>
            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
            <ul class="pricing-text mb-5">
              <li>Face Treatments</li>
              <li>Nail Treatments</li>
              <li>Medical Treatments</li>
              <li>Hair Removal</li>
            </ul>
            <a href="booking.php" class="btn btn-primary d-block px-2 py-4">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-10 heading-section ftco-animate text-center">
        <h3 class="subheading">Testimony</h3>
        <h2 class="mb-1">Successful Stories</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Amazing service! The facial treatment was incredible. My skin has never looked better.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(assets/img/person_1.jpg)"></div>
                  <div class="ml-4">
                    <p class="name">Gabby Smith</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">The massage therapy was fantastic. I feel completely rejuvenated after each session.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(assets/img/person_2.jpg)"></div>
                  <div class="ml-4">
                    <p class="name">Floyd Weather</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="text">
                <div class="line pl-5">
                  <p class="mb-4 pb-1">Professional staff and amazing atmosphere. Highly recommended for anyone looking for quality spa services.</p>
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(assets/img/person_3.jpg)"></div>
                  <div class="ml-4">
                    <p class="name">James Dee</p>
                    <span class="position">Customer</span>
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

<section class="ftco-counter img" id="section-counter" style="background-image: url(assets/img/bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2560">0</strong>
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="60">0</strong>
                <span>Treatments</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
                <span>Years of Experience</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>Treatments</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-gallery ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h3 class="subheading">Gallery</h3>
        <h2 class="mb-1">See the latest photos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <a href="assets/img/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/img/gallery-1.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="assets/img/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/img/gallery-2.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="assets/img/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/img/gallery-3.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="assets/img/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets/img/gallery-4.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include "inc/footer.php"; ?>
