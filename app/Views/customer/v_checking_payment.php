<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="d-flex flex-column align-items-center justify-content-center gap-4">
    <span className="loader"></span>
    <div>
      <h3>Your payment is being processed</h3>
      <p>Your payment is being processed. We will notify you once the transaction is complete. Please check your email for updates and further details.</p>
    </div>
  </div>
</div>
<?= $this->endSection() ?>