<?= $this->extend('./layouts/dashboard_layout') ?>

<?= $this->section('content') ?>
<section>
  <h1>Manage Order</h1>
  <div class="card-body py-3">
    <!-- begin::Table container -->
    <div class="table-responsive">
      <!-- begin::Table -->
      <table class="table table-bordered table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tabledtbuku">
        <!-- begin::Table head -->
        <thead>
          <tr class="fw-bold">
            <th>Customer ID</th>
            <th>Customer</th>
            <th>Brand</th>
            <th>Product</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($carts as $d) : ?>
            <tr>
              <td><?= $d["user_id"] ?></td>
              <td><?= $d["username"] ?></td>
              <td><?= $d["brand_name"] ?></td>
              <td><?= $d["product_name"] ?></td>
              <td><?= $d["price"] ?></td>
              <td><?= $d["status"] ?></td>
              <td>
                <!-- Edit Icon to Open Modal -->
                <i class="fas fa-edit" title="Edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $d['cart_id'] ?>"></i>

                <!-- Modal for Editing Status -->
                <div class="modal fade" id="editModal<?= $d['cart_id'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Update Order Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" action="/admin/update-order-status/<?= $d['cart_id'] ?>">
                          <div class="mb-3">
                            <label for="status" class="form-label">Select Status</label>
                            <select class="form-select" name="status" required>
                              <?php foreach ($status as $statusKey => $statusLabel): ?>
                                <option value="<?= $statusKey ?>" <?= ($d['status'] == $statusKey) ? 'selected' : '' ?>>
                                  <?= $statusLabel ?>
                                </option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Update Status</button>
                        </form>
                      </div>
                    </div>
                  </div>
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