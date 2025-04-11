<?= $this->extend('./layouts/base_layout') ?>
<?= $this->section('content') ?>

<div style="background-image: url('assets/images/background-bus.jpeg'); background-size: cover; height: 100vh">
  <div class="container mt-5" style="width: 400px;">
    <div class="card shadow-sm">
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
            <select name="destionation_id" class="form-control" required>
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