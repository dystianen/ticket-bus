<?= $this->extend('./layouts/dashboard_layout') ?>

<?= $this->section('content') ?>
<section>
  <h1>Manage Payment</h1>
  <div class="card-body py-3">
    <div class="table-responsive">
      <table class="table table-bordered table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tabledtbuku">
        <thead>
          <tr class="fw-bold">
            <th>Customer ID</th>
            <th>Customer</th>
            <th>Total</th>
            <th>Proof of Payment</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($payments as $d) : ?>
            <tr>
              <td><?= $d["user_id"] ?></td>
              <td><?= $d["username"] ?></td>
              <td><?= $d["total"] ?></td>
              <td><img src="<?= $d["proof_of_transfer"] ?>" width="120px" height="150px" alt=""></td>
              <td>
                <?php if ($d["status"] === 'waiting_confirmation'): ?>
                  <!-- Tombol untuk membuka modal -->
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal"
                    data-payment-id="<?= $d['payment_id'] ?>">
                    Confirm
                  </button>
                <?php else: ?>
                  <span>-</span>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Confirm Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to confirm this payment?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <!-- Tombol konfirmasi untuk submit -->
        <form id="confirmForm" method="post">
          <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  // Mengatur form action saat modal dibuka
  const confirmModal = document.getElementById('confirmModal');
  confirmModal.addEventListener('show.bs.modal', function(event) {
    const button = event.relatedTarget; // Tombol yang diklik
    const paymentId = button.getAttribute('data-payment-id'); // Ambil payment ID

    // Update form action dengan ID pembayaran
    const confirmForm = document.getElementById('confirmForm');
    confirmForm.action = `/admin/confirm-payment/${paymentId}`;
  });
</script>

<?= $this->endSection() ?>