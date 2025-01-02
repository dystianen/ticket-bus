<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
  </nav>

  <div class="row gap-4">
    <div class="col-3">
      <?= $this->include('components/sidebar_filter') ?>
    </div>
    <div class="col">
      <h3>New Arrival</h3>

      <section>
        <div class="row gap-5 mt-5">
          <div class="col card-product">
            <img src="/assets/images/converse-1.png" alt="">
            <div class="d-flex flex-column">
              <a href="#" style="font-weight: 700;">Nike Air Max</a>
              <div class="d-flex gap-2">
                <div class="d-flex gap-1">
                  <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                  <span style="font-weight: 700;">5</span>
                </div>
                <span style="font-weight: 700;">$120</span>
              </div>
            </div>
          </div>
          <div class="col card-product">
            <img src="/assets/images/converse-1.png" alt="">
            <div class="d-flex flex-column">
              <a href="#" style="font-weight: 700;">Nike Air Max</a>
              <div class="d-flex gap-2">
                <div class="d-flex gap-1">
                  <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                  <span style="font-weight: 700;">5</span>
                </div>
                <span style="font-weight: 700;">$120</span>
              </div>
            </div>
          </div>
          <div class="col card-product">
            <img src="/assets/images/converse-1.png" alt="">
            <div class="d-flex flex-column">
              <a href="#" style="font-weight: 700;">Nike Air Max</a>
              <div class="d-flex gap-2">
                <div class="d-flex gap-1">
                  <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                  <span style="font-weight: 700;">5</span>
                </div>
                <span style="font-weight: 700;">$120</span>
              </div>
            </div>
          </div>
          <div class="col card-product">
            <img src="/assets/images/converse-1.png" alt="">
            <div class="d-flex flex-column">
              <a href="#" style="font-weight: 700;">Nike Air Max</a>
              <div class="d-flex gap-2">
                <div class="d-flex gap-1">
                  <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                  <span style="font-weight: 700;">5</span>
                </div>
                <span style="font-weight: 700;">$120</span>
              </div>
            </div>
          </div>
          <div class="col card-product">
            <img src="/assets/images/converse-1.png" alt="">
            <div class="d-flex flex-column">
              <a href="#" style="font-weight: 700;">Nike Air Max</a>
              <div class="d-flex gap-2">
                <div class="d-flex gap-1">
                  <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                  <span style="font-weight: 700;">5</span>
                </div>
                <span style="font-weight: 700;">$120</span>
              </div>
            </div>
          </div>
          <div class="col card-product">
            <img src="/assets/images/converse-1.png" alt="">
            <div class="d-flex flex-column">
              <a href="#" style="font-weight: 700;">Nike Air Max</a>
              <div class="d-flex gap-2">
                <div class="d-flex gap-1">
                  <img src="/assets/images/star.svg" alt="star" width="20" height="20">
                  <span style="font-weight: 700;">5</span>
                </div>
                <span style="font-weight: 700;">$120</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<?= $this->endSection() ?>