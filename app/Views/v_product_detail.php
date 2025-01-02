<?= $this->extend('./layouts/base_layout') ?>

<?= $this->section('content') ?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item">Shop</li>
      <li class="breadcrumb-item active" aria-current="page">ADIDAS Samba OG</li>
    </ol>
  </nav>

  <div class="row mt-5 gap-5">
    <div class="col-7">
      <div class="d-flex gap-4" style="width: 100%;">
        <div class="d-flex flex-column gap-3">
          <div class="card d-flex align-items-center" style="width: 90px; height: 90px">
            <img src="/assets/images/converse-1.png" alt="" style="width: 80px; height: 80px; object-fit: contain">
          </div>
          <div class="card d-flex align-items-center" style="width: 90px; height: 90px">
            <img src="/assets/images/converse-1.png" alt="" style="width: 80px; height: 80px; object-fit: contain">
          </div>
          <div class="card d-flex align-items-center" style="width: 90px; height: 90px">
            <img src="/assets/images/converse-1.png" alt="" style="width: 80px; height: 80px; object-fit: contain">
          </div>
        </div>

        <img src="/assets/images/converse-1.png" alt="" width="100%">
      </div>
    </div>
    <div class="col">
      <h1 class="text-primary" style="font-weight: 700;">Adidas - Samba OG Sneakers
        ftwr white</h1>

      <div class="d-flex gap-3">
        <h1 style="font-weight: 700;">$260</h1>
        <h1 class="text-secondary" style="font-weight: 700; text-decoration: line-through;">$260</h1>
      </div>

      <p>The Adidas Samba is a classic sneaker that has stood the test of time. Originally designed as an indoor football shoe in 1950, it has evolved into a cultural icon and a streetwear staple.</p>

      <div class="my-4">
        <h5>Size</h5>
        <div class="d-flex gap-2 flex-wrap">
          <button class="btn btn-sm btn-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
          <button class="btn btn-sm btn-outline-primary rounded-0">EU 37</button>
        </div>
      </div>
      <hr>

      <div class="d-flex gap-2">
        <div class="rounded-pill border-0 bg-light d-flex flex-row align-items-center gap-4 px-2 py-1" style="width: max-content;">
          <button class="btn btn-sm"><i data-feather="minus"></i></button>
          <span>1</span>
          <button class="btn btn-sm"><i data-feather="plus"></i></button>
        </div>

        <button class="btn btn-primary rounded-pill" style="width: 100%;">Add to Cart</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>