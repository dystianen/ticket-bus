<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<section>
  <h3 class="mb-3">My Profile</h3>

  <div class="card p-4 rounded-lg card-auth">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input class="form-control rounded-pill" name="username" id="username" value="<?= $user['username'] ?>" disabled>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input class="form-control rounded-pill" name="email" id="email" value="<?= $user['email'] ?>" disabled>
    </div>
    <div>
      <label for="address" class="form-label">Address</label>
      <input class="form-control rounded-pill" name="address" id="address" value="<?= $user['address'] ?>" disabled>
    </div>
  </div>

</section>
<?= $this->endSection() ?>