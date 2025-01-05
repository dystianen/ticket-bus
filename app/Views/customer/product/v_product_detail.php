<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Shop</li>
      <li class="breadcrumb-item active" aria-current="page"><?= $product["brand_name"] ?></li>
    </ol>
  </nav>

  <div class="row mt-5 gap-5">
    <div class="col-7">
      <div class="d-flex gap-4" style="width: 100%;">
        <div class="d-flex flex-column gap-3">
          <?php foreach ($product["images"] as $i) : ?>
            <div class="card d-flex align-items-center" style="width: 90px; height: 90px">
              <img src="<?= $i ?>" alt="" style="width: 80px; height: 80px; object-fit: contain">
            </div>
          <?php endforeach; ?>
        </div>

        <img src="<?= $product["images"][0] ?>" alt="" height="500px" width="100%">
      </div>
    </div>
    <div class="col">
      <h1 class="text-primary" style="font-weight: 700;">
        <?= $product["product_name"] ?>
      </h1>

      <h1 style="font-weight: 700;"><?= $product["price"] ?></h1>

      <p><?= $product["description"] ?></p>

      <form action="<?= base_url() ?>add-to-cart/<?= $product['product_id'] ?>" method="POST">
        <div class="my-4">
          <h5>Size</h5>
          <div class="d-flex gap-2 flex-wrap">
            <?php foreach ($sizes as $index => $s) : ?>
              <input type="radio" class="btn-check" name="size_id" id="option<?= $index ?>" value="<?= $s['size_id'] ?>" autocomplete="off">
              <label class="btn btn-outline-primary" for="option<?= $index ?>"><?= $s["size_name"] ?></label>
            <?php endforeach; ?>
          </div>
        </div>
        <hr>

        <div class="d-flex gap-2">
          <div class="rounded-pill border-0 bg-light d-flex flex-row align-items-center gap-4 px-2 py-1" style="width: max-content;">
            <button class="btn btn-sm"><i data-feather="minus"></i></button>
            <span>1</span>
            <button class="btn btn-sm"><i data-feather="plus"></i></button>
          </div>

          <button type="submit" class="btn btn-primary rounded-pill" style="width: 100%;">Add to Cart</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>