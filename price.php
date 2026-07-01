<?php session_start(); include "inc/header.php"; ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-3 bread">Pricing</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Pricing</span></p>
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
            <h2 class="heading">جلسة فردية</h2>
            <span class="price"><sup>$</sup> <span class="number">49</span></span>
            <span class="excerpt d-block">جلسة واحدة</span>
            <h3 class="heading-2 my-4">مشتملات الجلسة</h3>
            <ul class="pricing-text mb-5">
              <li>تنظيف بشرة عميق</li>
              <li>مساج استرخاء</li>
              <li>ماسك مغذي للوجه</li>
              <li>كريم واقي شمس</li>
            </ul>
            <a href="booking.php" class="btn btn-primary d-block px-2 py-4">احجز الآن</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">باقة 5 جلسات</h2>
            <span class="price"><sup>$</sup> <span class="number">199</span></span>
            <span class="excerpt d-block">وفر 18%</span>
            <h3 class="heading-2 my-4">مشتملات الباقة</h3>
            <ul class="pricing-text mb-5">
              <li>5 جلسات عناية كاملة</li>
              <li>مساج علاجي</li>
              <li>جلسة ليزر صغيرة</li>
              <li>هدية منتج عناية</li>
            </ul>
            <a href="booking.php" class="btn btn-primary d-block px-2 py-4">احجز الآن</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="block-7">
          <div class="text-center">
            <h2 class="heading">الباقة الماسية</h2>
            <span class="price"><sup>$</sup> <span class="number">399</span></span>
            <span class="excerpt d-block">وفر 30%</span>
            <h3 class="heading-2 my-4">مشتملات الباقة</h3>
            <ul class="pricing-text mb-5">
              <li>10 جلسات عناية شاملة</li>
              <li>جلسات ليزر كاملة</li>
              <li>مساج أسبوعي</li>
              <li>منتجات عناية مجانية</li>
            </ul>
            <a href="booking.php" class="btn btn-primary d-block px-2 py-4">احجز الآن</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include "inc/footer.php"; ?>