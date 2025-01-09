<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">All Product</li>
  </ol>
</nav>

<div class="row g-4">
  <div class="col-12 col-lg-2">
    <?= $this->include('components/sidebar_filter') ?>
  </div>
  <div class="col-12 col-lg-10">
    <h3 class="mb-4">All Product</h3>

    <?php if (!empty($products) && is_array($products)): ?>
      <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3 g-lg-3">
        <?php foreach ($products as $p) : ?>
          <a href="<?= base_url() ?>product/<?= $p['product_id'] ?>" class="col">
            <div class="card-product">
              <img src="<?= $p['file_path'] ?>" alt="Product Image" onerror="this.src='/assets/images/default-placeholder.png';">
              <div class="d-flex flex-column">
                <span style="font-weight: 700; color: #e21936; text-transform: uppercase">
                  <?= htmlspecialchars($p['brand_name'], ENT_QUOTES, 'UTF-8') ?>
                </span>
                <h5 style="font-weight: 700; font-size: 18px">
                  <?= htmlspecialchars($p['product_name'], ENT_QUOTES, 'UTF-8') ?>
                </h5>
                <div class="d-flex flex-column gap-2 mt-1">
                  <div class="d-flex gap-1">
                    <?php
                    $rating = $p['rating'] ?? 0; // Fallback if rating is not set
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
                  <span style="font-weight: 700; opacity: 80%">
                    Rp <?= number_format($p['price'] ?? 0, 0, ',', '.') ?>
                  </span>
                </div>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <!-- Message for no products available -->
      <div class="text-center d-flex flex-column justify-content-center align-items-center gap-3">
        <img src="/assets/images/empty.png" alt="Empty" width="200px" height="200px">
        <h5 class="text-muted">No products available</h5>
      </div>
    <?php endif; ?>
  </div>
</div>
</div>
<?= $this->endSection() ?>