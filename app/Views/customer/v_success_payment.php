<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="d-flex flex-column align-items-center justify-content-center gap-4">
    <img src="/assets/images/ic_checked.svg" alt="Icon Checked">
    <div class="d-flex flex-column align-items-center w-50 text-center">
      <h2>Payment Successful</h2>
      <p>Thank you for your payment! Your transaction has been successfully processed. You can now enjoy our services. Check your email for the receipt and further details.</p>
    </div>
    <button class="btn btn-primary rounded-pill px-4" onclick="handleMyOrder()">My Order</button>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  function handleMyOrder() {
    window.location.href = '/my-order'
  }
</script>
<?= $this->endSection() ?>