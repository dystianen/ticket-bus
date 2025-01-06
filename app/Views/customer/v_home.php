<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>

<section class="hero-section d-flex align-items-center">
  <div class="row align-items-center" style="height: 100%">
    <div class="gap-4 flex-column col-12 col-md-7 d-flex">
      <h1 class="text-primary hero-title" style="font-weight: 700">FIND SHOES <br> THAT MATCHES <br> YOUR STYLE</h1>
      <p>Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
      <a href="/product" class="px-5 rounded-pill btn btn-primary btn-lg" style="width: max-content;">Shop Now</a>

      <div class="row">
        <div class="col">
          <h3 class="text-primary" style="font-weight: 700">200+</h3>
          <p>International Brands</p>
        </div>
        <div class="col">
          <h3 class="text-primary" style="font-weight: 700">300+</h3>
          <p>High-Quality Products</p>
        </div>
        <div class="col">
          <h3 class="text-primary" style="font-weight: 700">40,000+</h3>
          <p>Happy Customers</p>
        </div>
      </div>
    </div>
    <div class="col" style="position: relative; height: 100%">
      <img src="/assets/images/people-style-2.png" alt="people-style-2">
      <div style="position: absolute; bottom: 80px; right: 0px">
        <img src="/assets/images/people-style-1.png" alt="people-style-1">
      </div>
    </div>
  </div>

</section>

<section>
  <div class="row">
    <div class="col">
      <img src="/assets/images/logo_converse.svg" alt="">
    </div>
    <div class="col">
      <img src="/assets/images/logo_adidas.svg" alt="">
    </div>
    <div class="col">
      <img src="/assets/images/logo_reebok.svg" alt="">
    </div>
    <div class="col">
      <img src="/assets/images/logo_nb.svg" alt="">
    </div>
    <div class="col">
      <img src="/assets/images/logo_jordan.svg" alt="">
    </div>
    <div class="col">
      <img src="/assets/images/logo_asics.svg" alt="">
    </div>
  </div>
</section>

<section class="d-flex flex-column align-items-center gap-4" style="margin-top: 100px">
  <h2 class="text-primary" style="font-weight: 700;">NEW ARRIVALS</h2>

  <div class="row gap-5 mt-5">
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
  </div>

  <button class="btn btn-outline-primary" onclick="window.location.href= '/new-arrival'">View All</button>
</section>

<section class="d-flex flex-column align-items-center gap-4" style="margin-top: 100px">
  <h2 class="text-primary" style="font-weight: 700;">TOP SELLING</h2>

  <div class="row gap-5 mt-5">
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
    <div class="col card-product">
      <img src="/assets/images/converse-1.png" alt="">
      <div>
        <a href="#" style="font-weight: 700;">Nike Air Max</a>
        <h4 style="font-weight: 700;">$120</h4>
      </div>
    </div>
  </div>

  <button class="btn btn-outline-primary" onclick="window.location.href= '/top-selling'">View All</button>
</section>

<section class="style-section gap-3 my-5 rounded-5 d-flex flex-column" style="background-color: var(--bs-cream); width: 100%;">
  <h2 class="text-center text-primary" style="font-weight: 700">BROWSE Shoes BY Dress STYLE</h2>

  <div class="gap-3 row">
    <div class="col card-style" style="background-image: url(/assets/images/casual.png);">
      <h5>Casual</h5>
    </div>
    <div class="col-12 col-md-7 card-style" style="background-image: url(/assets/images/formal.png);">
      <h5>Formal</h5>
    </div>
  </div>

  <div class="gap-3 row">
    <div class="col-12 col-md-7 card-style" style="background-image: url(/assets/images/party.png);">
      <h5>Party</h5>
    </div>
    <div class="col card-style" style="background-image: url(/assets/images/sport.png);">
      <h5>Sport</h5>
    </div>
  </div>
</section>

<?= $this->endSection() ?>