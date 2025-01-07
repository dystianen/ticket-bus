<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">New Arrival</li>
  </ol>
</nav>

<div class="row flex-nowrap gap-1">
  <div class="col-2">
    <?= $this->include('components/sidebar_filter') ?>
  </div>
  <div class="col-10">
    <h3>New Arrival</h3>

    <div class="d-flex flex-wrap gap-2 mt-4" style="width: 100%;">
      <?php foreach ($products as $p) : ?>
        <a href="<?php base_url() ?>product/<?= $p['product_id'] ?>" class="card-product">
          <img src="<?= $p['file_path'] ?>" alt="">
          <div class="d-flex flex-column">
            <span style="font-weight: 700; color: #e21936; text-transform: uppercase"><?= $p['brand_name'] ?></span>
            <h5 style="font-weight: 700; font-size: 18px"><?= $p['product_name'] ?></h5>
            <div class="d-flex flex-column gap-2 mt-1">
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
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>