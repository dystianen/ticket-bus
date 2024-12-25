<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>e-Commerce Shoes</title>
  <link href="<?= base_url() ?>css/custom.css" rel="stylesheet">
</head>

<body>
  <header class="pt-1 pb-2 text-center text-white bg-primary">Sign up and get 20% off to your first order. <a class="underline" href="/signup"> Sign Up Now</a></header>

  <nav class="navbar navbar-expand-lg" style="height: 100px;">
    <div class="container">
      <a class="navbar-brand" style="font-weight: 700; font-size: 32px" href="#">IMAGINE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="gap-4 collapse navbar-collapse align-items-center" id="navbarSupportedContent">
        <ul class="mb-2 navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Top Selling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-disabled="true">New Arrival</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="d-flex">
          <a href="#" class="btn"><i class="fa-solid fa-cart-shopping" style="font-size: 20px"></i></a>
          <a href="#" class="btn"><i class="fa-regular fa-circle-user" style="font-size: 30px;"></i></a>
        </div>
      </div>
    </div>
  </nav>

  <main class="container">
    <article>
      <?= $this->renderSection('content') ?>
    </article>
  </main>

  <!-- SCRIPT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/218d5eb4ba.js" crossorigin="anonymous"></script>
</body>

</html>