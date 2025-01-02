<div class="card p-4">
  <h5>Filters</h5>
  <hr>

  <div class="d-flex flex-column">
    <div class="d-flex justify-content-between align-items-center">
      <span>Nike</span>
      <button class="btn" onclick="handleClickFilter('nike')"><i data-feather="chevron-right"></i></button>
    </div>
    <div class="d-flex justify-content-between align-items-center">
      <span>Puma</span>
      <button class="btn" onclick="handleClickFilter('puma')"><i data-feather="chevron-right"></i></button>
    </div>
    <div class="d-flex justify-content-between align-items-center">
      <span>Asics</span>
      <button class="btn" onclick="handleClickFilter('asics')"><i data-feather="chevron-right"></i></button>
    </div>
    <div class="d-flex justify-content-between align-items-center">
      <span>Converse</span>
      <button class="btn" onclick="handleClickFilter('converse')"><i data-feather="chevron-right"></i></button>
    </div>
    <div class="d-flex justify-content-between align-items-center">
      <span>New Balance</span>
      <button class="btn" onclick="handleClickFilter('new-balance')"><i data-feather="chevron-right"></i></button>
    </div>
  </div>

  <!-- <button class="btn btn-primary rounded-pill mt-4">Apply Filter</button> -->
</div>

<script>
  function handleClickFilter(brand) {
    window.location.replace(`?brand=${brand}`)
  }
</script>