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

<?= $this->section('scripts') ?>
<script>
  let checkPaymentInterval; // Declare interval variable

  async function checkPayment() {
    try {
      const response = await fetch('<?= base_url() ?>check-payment');
      const isSuccess = await response.json();

      if (isSuccess) {
        clearInterval(checkPaymentInterval); // Clear the interval
        window.location.href = '/success-payment'
        console.log('Payment is successful for all items. Stopping checks.');
      }
    } catch (error) {
      console.error('Failed to fetch cart:', error);
    }
  }

  // Start interval to check payment every 5 seconds
  window.addEventListener('DOMContentLoaded', () => {
    checkPayment(); // Initial check on page load
    checkPaymentInterval = setInterval(checkPayment, 5000); // Repeat check every 5 seconds
  });
</script>
<?= $this->endSection() ?>