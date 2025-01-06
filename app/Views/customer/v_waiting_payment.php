<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<form action="<?php base_url() ?>already-transferred?paymentId=<?= $paymentId ?>" method="POST" enctype="multipart/form-data">
  <div class="d-flex flex-column align-items-center justify-content-center gap-4">
    <div class="d-flex flex-column align-items-center">
      <h5>BCA</h5>

      <div class="d-flex align-items-center gap-2">
        <span id="bank-account-number">0909039988985899</span>
        <i data-feather="clipboard" style="width: 20px; cursor: pointer" id="copy-to-clipboard"></i>
      </div>
    </div>
    <div class="card p-2">
      <div class="col mb-3">
        <label for="proof_of_transfer" class="form-label" style="font-weight: 600; text-align: center; width: 100%">Proof of transfer</label>
        <input type="file" class="form-control rounded-pill" name="proof_of_transfer" id="proof_of_transfer">
      </div>
    </div>
    <button type="submit" class="btn btn-primary rounded-pill px-4">Already Transferred</button>
  </div>
</form>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const copyButton = document.getElementById('copy-to-clipboard');
    const accountNumberText = document.getElementById('bank-account-number');

    // Clipboard function
    copyButton.addEventListener('click', () => {
      const accountNumber = accountNumberText.textContent.trim();

      if (accountNumber) {
        navigator.clipboard.writeText(accountNumber)
          .then(() => {
            alert('Bank account number copied to clipboard!');
          })
          .catch((err) => {
            console.error('Error copying text: ', err);
          });
      }
    });
  });
</script>
<?= $this->endSection() ?>