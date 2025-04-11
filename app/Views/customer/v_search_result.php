<?= $this->extend('./layouts/base_layout') ?>
<?= $this->section('content') ?>

<div class="container">
  <?php if (empty($schedules)) : ?>
    <p>Tidak ada jadwal ditemukan.</p>
  <?php else : ?>
    <?php foreach ($schedules as $s) : ?>
      <div class="card mb-3">
        <div class="card-body">
          <h5><?= esc($s['from_terminal']) ?> → <?= esc($s['to_terminal']) ?></h5>
          <p><?= esc($s['bus_name']) ?> (<?= esc($s['bus_type']) ?>)</p>
          <p>Berangkat: <?= $s['departure_date'] ?> <?= $s['departure_time'] ?></p>
          <p>Durasi: <?= $s['estimated_time'] ?></p>
          <p>Harga: Rp<?= number_format($s['price'], 0, ',', '.') ?></p>
          <a href="/booking/form/<?= $s['id'] ?>" class="btn btn-primary">Pilih Tiket</a>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<?= $this->endSection() ?>