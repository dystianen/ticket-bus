<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="d-flex flex-column align-items-center justify-content-center gap-4">
  <div class="d-flex flex-column align-items-center w-50 text-center">
    <h2>Device Unsupported</h2>
    <span>Sorry, this website is accessible only on desktop devices. Please access this page using a desktop or larger screen to continue.</span>
    <span>If you need assistance, feel free to contact our support team.</span>
  </div>
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