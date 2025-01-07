<?= $this->extend('./layouts/dashboard_layout') ?>

<?= $this->section('content') ?>
<section>
  <h1>Manage Product</h1>
  <a href="/admin/product/create" class="btn btn-primary">+ Add Product</a>
  <div class="card-body py-3">
    <!-- begin::Table container -->
    <div class="table-responsive">
      <!-- begin::Table -->
      <table class="table table-bordered table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tabledtbuku">
        <!-- begin::Table head -->
        <thead">
          <tr class="fw-bold">
            <th>Category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
            <?php foreach ($products as $d) : ?>
              <tr>
                <td><?= $d["category_name"] ?></td>
                <td><?= $d["product_name"] ?></td>
                <td><?= $d["description"] ?></td>
                <td><?= $d["rating"] ?></td>
                <td><?= $d["price"] ?></td>
                <td>
                  <div>
                    <i class="fas fa-edit" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $d['product_id'] ?>"></i>
                    <i class="fas fa-trash-alt" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $d['product_id'] ?>"></i>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
      </table>
    </div>
  </div>
</section>

<?= $this->endSection() ?>