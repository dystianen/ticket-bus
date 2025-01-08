<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="d-flex flex-column align-items-center justify-content-center gap-4">
  <img src="/assets/images/ic_checked.svg" alt="Icon Checked" width="100px" height="100px">
  <div class="d-flex flex-column align-items-center text-center">
    <h2>Payment Successful</h2>
    <p>Thank you for your payment! Your transaction has been successfully processed. You can <br class="d-none d-md-block"> now enjoy our services. Check your email for the receipt and further details.</p>
  </div>
  <button class="btn btn-primary rounded-pill px-4" onclick="handleMyOrder()">My Order</button>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  async function handleMyOrder() {
    try {
      // Define API endpoint
      const apiUrl = '<?= base_url('update-status-order') ?>/success_payment/under_packaging';

      // Send POST request without payload
      const response = await fetch(apiUrl, {
        method: "POST",
        headers: {
          "Content-Type": "application/json", // Optional, based on server requirement
        },
      });

      // Handle errors if the response is not ok
      if (!response.ok) {
        const errorData = await response.json();
        throw new Error(errorData.message || 'Failed to update order status');
      }

      // Redirect on success
      window.location.href = '/my-order';
    } catch (error) {
      console.error('Error:', error.message); // Log error for debugging
      alert('Failed to process your order. Please try again later.'); // Inform user about failure
    }
  }
</script>
<?= $this->endSection() ?>