<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">New Arrival</li>
    </ol>
  </nav>

  <div class="row gap-4">
    <div class="col-3">
      <?= $this->include('components/sidebar_filter') ?>
    </div>
    <div class="col-8">
      <h3>New Arrival</h3>

      <section>
        <div class="row gap-5 mt-5">
          <?php foreach ($products as $p) : ?>
            <a href="<?php base_url() ?>product/<?= $p['product_id'] ?>" class="col-3 card-product">
              <img src="<?= $p['file_path'] ?>" alt="">
              <div class="d-flex flex-column">
                <h5 style="font-weight: 700; color: #e21936; text-transform: uppercase"><?= $p['brand_name'] ?></h5>
                <h5 style="font-weight: 700;"><?= $p['product_name'] ?></h5>
                <div class="d-flex gap-2">
                  <div class="d-flex gap-1">
                    <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                    <span style="font-weight: 700;"><?= $p['rating'] ?></span>
                  </div>
                  <span style="font-weight: 700;"><?= $p['price'] ?></span>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
  </div>
</div>
<?= $this->endSection() ?>