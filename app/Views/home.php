<?= $this->extend('./layouts/BaseLayout.php') ?>

<?= $this->section('content') ?>

<section class="bg d-flex align-items-center" style="height: 670px">
  <div class="row align-items-center" style="height: 100%">
    <div class="gap-4 flex-column col-7 d-flex">
      <h1 class="text-primary" style="font-size: 70px; font-weight: 700">FIND SHOES <br> THAT MATCHES <br> YOUR STYLE</h1>
      <p>Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.</p>
      <button class="px-5 rounded-pill btn btn-primary btn-lg" style="width: max-content;">Shop Now</button>

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

<section class="d-flex flex-column align-items-center" style="margin-top: 40px">
  <h2 class="text-primary" style="font-weight: 700;">NEW ARRIVALS</h2>

  <div class="row">
    <div class="col card-product">
      <img src="/assets/images/logo_converse.svg" alt="">
      <h5 style="font-weight: 600;">Nike Air Max</h5>

    </div>
    <div class="col card-product">
      <img src="/assets/images/logo_adidas.svg" alt="">
      <h5 style="font-weight: 600;">Nike Air Max</h5>

    </div>
    <div class="col card-product">
      <img src="/assets/images/logo_reebok.svg" alt="">
      <h5 style="font-weight: 600;">Nike Air Max</h5>

    </div>
    <div class="col card-product">
      <img src="/assets/images/logo_nb.svg" alt="">
      <h5 style="font-weight: 600;">Nike Air Max</h5>

    </div>
    <div class="col card-product">
      <img src="/assets/images/logo_jordan.svg" alt="">
      <h5 style="font-weight: 600;">Nike Air Max</h5>

    </div>
    <div class="col card-product">
      <img src="/assets/images/logo_asics.svg" alt="">
      <h5 style="font-weight: 600;">Nike Air Max</h5>

    </div>
  </div>
</section>

<section class="gap-3 my-5 rounded-5 d-flex flex-column" style="background-color: var(--bs-cream); width: 100%; padding: 40px 64px">
  <h2 class="text-center text-primary" style="font-weight: 700">BROWSE Shoes BY Dress STYLE</h2>

  <div class="gap-3 row">
    <div class="col card-style" style="background-image: url(/assets/images/casual.png);">
      <h5>Casual</h5>
    </div>
    <div class="col-7 card-style" style="background-image: url(/assets/images/formal.png);">
      <h5>Formal</h5>
    </div>
  </div>

  <div class="gap-3 row">
    <div class="col-7 card-style" style="background-image: url(/assets/images/party.png);">
      <h5>Party</h5>
    </div>
    <div class="col card-style" style="background-image: url(/assets/images/sport.png);">
      <h5>Sport</h5>
    </div>
  </div>
</section>

<?= $this->endSection() ?>