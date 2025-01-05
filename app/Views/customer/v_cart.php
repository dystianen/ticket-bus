<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cart</li>
    </ol>
  </nav>

  <h3>Your Cart</h3>

  <div class="row">
    <div class="col-8">
      <div class="d-flex flex-column gap-2">
        <?php foreach ($carts as $c): ?>
          <div class="card d-flex justify-content-between p-3">
            <div class="d-flex align-content-center gap-0">
              <img src="<?= $c['file_path'] ?>" width="100px" alt="">
              <div class="d-flex flex-column">
                <h5><?= $c['product_name'] ?></h5>
                <span>Size: <?= $c['size_name'] ?></span>
                <span>Price: Rp <?= number_format($c['price'], 0, ',', '.') ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col">
      <form action="/checkout" method="POST">
        <div class="card p-3 d-flex flex-column gap-3">
          <h5>Order Summary</h5>
          <div class="d-flex justify-content-between">
            <span>Total</span>
            <span>Rp <?= number_format($totalPrice, 0, ',', '.') ?></span>
          </div>

          <!-- Hidden input for total price -->
          <input type="hidden" name="total_price" value="<?= $totalPrice ?>">

          <!-- Payment Button -->
          <button type="submit" class="btn btn-primary rounded-pill">Payment</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>