<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<section class="hero-section d-flex align-items-center">
  <div class="row align-items-center g-3" style="height: 100%">
    <div class="gap-4 order-2 order-lg-1 flex-column col-12 col-md-7 d-flex">
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
    <div class="col order-1 order-lg-2" style="position: relative; height: 100%">
      <img src="/assets/images/people-style-2.png" alt="people-style-2">
      <div class="d-none d-lg-block" style="position: absolute; bottom: 80px; right: 0px">
        <img src="/assets/images/people-style-1.png" alt="people-style-1">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="row row-cols-2 row-cols-lg-6">
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
  <div class="text-center">
    <h2 class="text-primary" style="font-weight: 700;">TOP SELLING</h2>
    <span style="font-size: 18px;">The best-selling products with the highest sales that customers are most interested in.</span>
  </div>

  <div class="row row-cols-2 row-cols-lg-4 mt-2 g-3" style="width: 100%;">
    <?php foreach ($topSelling as $p): ?>
      <a href="<?php base_url() ?>product/<?= $p['product_id'] ?>" class="col">
        <div class="card-product">
          <img src="<?= $p['file_path'] ?>" alt="">
          <div class="d-flex flex-column">
            <h5 style="font-weight: 700; color: #e21936; text-transform: uppercase"><?= $p['brand_name'] ?></h5>
            <h5 style="font-weight: 700;"><?= $p['product_name'] ?></h5>
            <div class="d-flex flex-column gap-2">
              <div class="d-flex gap-1">
                <?php
                $rating = $p['rating'];
                $maxStars = 5;

                for ($i = 1; $i <= $maxStars; $i++) {
                  if ($i <= $rating) {
                    echo '<span class="fa fa-star checked"></span>';
                  } else {
                    echo '<span class="fa fa-star"></span>';
                  }
                }
                ?>
              </div>

              <span style="font-weight: 700; opacity: 80%">Rp <?= number_format($p['price'], 0, ',', '.') ?></span>
            </div>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <button class="btn btn-outline-primary px-5" onclick="window.location.href= '/top-selling'">View All</button>
</section>

<section class="d-flex flex-column align-items-center gap-4" style="margin-top: 100px">
  <div class="text-center">
    <h2 class="text-primary" style="font-weight: 700;">NEW ARRIVALS</h2>
    <span style="font-size: 18px;">The latest collection with modern and innovative designs.</span>
  </div>

  <div class="row row-cols-2 row-cols-lg-4 mt-2 g-3" style="width: 100%;">
    <?php foreach ($newArrival as $p): ?>
      <a href="<?php base_url() ?>product/<?= $p['product_id'] ?>" class="col">
        <div class="card-product">
          <img src="<?= $p['file_path'] ?>" alt="">
          <div class="d-flex flex-column">
            <h5 style="font-weight: 700; color: #e21936; text-transform: uppercase"><?= $p['brand_name'] ?></h5>
            <h5 style="font-weight: 700;"><?= $p['product_name'] ?></h5>
            <div class="d-flex flex-column gap-2">
              <div class="d-flex gap-1">
                <?php
                $rating = $p['rating'];
                $maxStars = 5;

                for ($i = 1; $i <= $maxStars; $i++) {
                  if ($i <= $rating) {
                    echo '<span class="fa fa-star checked"></span>';
                  } else {
                    echo '<span class="fa fa-star"></span>';
                  }
                }
                ?>
              </div>

              <span style="font-weight: 700; opacity: 80%">Rp <?= number_format($p['price'], 0, ',', '.') ?></span>
            </div>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <button class="btn btn-outline-primary px-5" onclick="window.location.href= '/new-arrival'">View All</button>
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