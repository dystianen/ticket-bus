<?= $this->extend('./layouts/dashboard_layout') ?>
<?= $this->section('content') ?>

<section>
  <h1>Add New Promo</h1>

  <?php if (session()->getFlashdata('errors')) : ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
          <li><?= esc($error) ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif; ?>

  <form action="/admin/promo/store" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
      <label for="code" class="form-label">Promo Code</label>
      <input type="text" class="form-control" id="code" name="code" value="<?= old('code') ?>" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" required><?= old('description') ?></textarea>
    </div>

    <div class="mb-3">
      <label for="discount_percent" class="form-label">Discount (%)</label>
      <input type="number" class="form-control" id="discount_percent" name="discount_percent" value="<?= old('discount_percent') ?>" required>
    </div>

    <div class="mb-3">
      <label for="max_discount" class="form-label">Max Discount (Rp)</label>
      <input type="number" class="form-control" id="max_discount" name="max_discount" value="<?= old('max_discount') ?>" required>
    </div>

    <div class="mb-3">
      <label for="valid_from" class="form-label">Valid From</label>
      <input type="date" class="form-control" id="valid_from" name="valid_from" value="<?= old('valid_from') ?>" required>
    </div>

    <div class="mb-3">
      <label for="valid_until" class="form-label">Valid Until</label>
      <input type="date" class="form-control" id="valid_until" name="valid_until" value="<?= old('valid_until') ?>" required>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="/admin/promo" class="btn btn-secondary">Cancel</a>
  </form>
</section>

<?= $this->endSection() ?>