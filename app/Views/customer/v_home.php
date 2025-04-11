<?= $this->extend('./layouts/base_layout') ?>
<?= $this->section('content') ?>

<div class="d-flex align-items-center" style="background-image: url('assets/images/background-bus.jpg'); background-size: cover; background-position: center; height: 100vh">
  <div class="container d-flex justify-content-between align-items-end" style="width: 100%;">
    <h1 class="text-white" style="max-width: 60%; font-weight: 700; font-size: 60px; opacity: 0.9">Yuk, cari tiket <span style="font-family: 'Lobster', sans-serif; font-size: 80px">BUS</span> terbaik untuk kebutuhanmu.</h1>
    <div class="card shadow-sm" style="width: 400px; border: none">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Cari Tiket Bus</h4>
      </div>
      <div class="card-body">
        <form action="/search-ticket" method="get">
          <div class="mb-3">
            <label class="form-label">Terminal Keberangkatan</label>
            <select name="from_terminal_id" class="form-control" required>
              <option value="">-- Pilih Terminal --</option>
              <?php foreach ($terminals as $t) : ?>
                <option value="<?= $t['id'] ?>"><?= esc($t['name']) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Tujuan</label>
            <select name="destination_id" class="form-control" required>
              <option value="">-- Pilih Terminal --</option>
              <?php foreach ($terminals as $t) : ?>
                <option value="<?= $t['id'] ?>"><?= esc($t['name']) ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Keberangkatan</label>
            <input type="date" name="date" class="form-control" required min="<?= date('Y-m-d') ?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Jumlah Penumpang</label>
            <input type="number" name="passengers" class="form-control" value="1" min="1" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Cari Tiket</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>