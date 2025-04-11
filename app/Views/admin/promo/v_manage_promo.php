<?= $this->extend('./layouts/dashboard_layout') ?>

<?= $this->section('content') ?>
<section>
  <h1>Manage Promo</h1>
  <a href="/admin/promo/create" class="btn btn-primary mt-4">+ Add Promo</a>
  <div class="card-body py-3">
    <div class="table-responsive">
      <table class="table table-bordered table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tablePromo">
        <thead>
          <tr class="fw-bold">
            <th>Promo Code</th>
            <th>Description</th>
            <th>Discount (%)</th>
            <th>Max Discount</th>
            <th>Valid From</th>
            <th>Valid Until</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($promos as $promo) : ?>
            <tr>
              <td><?= esc($promo['code']) ?></td>
              <td><?= esc($promo['description']) ?></td>
              <td><?= esc($promo['discount_percent']) ?>%</td>
              <td>Rp <?= number_format($promo['max_discount'], 0, ',', '.') ?></td>
              <td><?= date('d M Y', strtotime($promo['valid_from'])) ?></td>
              <td><?= date('d M Y', strtotime($promo['valid_until'])) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?= $this->endSection() ?>