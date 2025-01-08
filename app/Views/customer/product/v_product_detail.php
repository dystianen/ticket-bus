<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/product">All Product</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $product["brand_name"] ?></li>
  </ol>
</nav>

<div class="row mt-5 g-3">
  <div class="col-12 col-md-7">
    <div class="d-flex flex-column-reverse flex-md-row gap-4" style="width: 100%;">
      <div class="d-flex flex-lg-column gap-4">
        <?php foreach ($product["images"] as $index => $i) : ?>
          <div class="card-image card d-flex align-items-center">
            <img src="<?= $i ?>" alt="" style="object-fit: contain" onclick="changeMainImage('<?= $i ?>')">
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Main Image Display -->
      <img class="main-image" id="mainImage" src="<?= $product["images"][0] ?>" alt="" width="100%">
    </div>
  </div>
  <div class="col">
    <h5 style="font-weight: 700; color: #e21936; text-transform: uppercase"><?= $product['brand_name'] ?></h5>
    <h1 class="text-primary" style="font-weight: 700;">
      <?= $product["product_name"] ?>
    </h1>

    <h3 style="font-weight: 700;">Rp <?= number_format($product['price'], 0, ',', '.') ?></h3>

    <p class="ellipsis-3"><?= $product["description"] ?></p>

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

      <button type="submit" class="btn btn-primary rounded-pill btn-lg" style="width: 100%;">Add to Cart</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  // Function to change the main image when clicking on any of the thumbnail images
  function changeMainImage(imageUrl) {
    const mainImage = document.getElementById("mainImage");
    mainImage.src = imageUrl; // Change the main image to the clicked image
  }
</script>
<?= $this->endSection() ?>