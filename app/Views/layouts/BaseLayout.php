<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>e-Commerce Shoes</title>
  <!-- JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- TAILWIND CSS -->
  <link href="<?= base_url() ?>css/output.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/218d5eb4ba.js" crossorigin="anonymous"></script>
</head>

<body>
  <header class="pt-1 pb-2 text-center text-white bg-primary">Sign up and get 20% off to your first order. <a class="underline" href="/signup"> Sign Up Now</a></header>
  <div class="flex items-center justify-between w-full h-10 gap-4">
    <a class="tw-text-primary" href="#">IMAGINE</a>
    <div class="flex gap-4">
      <ul class="flex gap-4">
        <li>
          <a aria-current="page" href="#">Shop</a>
        </li>
        <li>
          <a href="#">Top Selling</a>
        </li>
        <li>
          <a>New Arrivals</a>
        </li href="#">
      </ul>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <ul class="flex gap-4">
        <li>
          <a aria-current="page" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa-regular fa-circle-user"></i></a>
        </li>
      </ul>
    </div>
  </div>

  <main class="container">
    <article>
      <?= $this->renderSection('content') ?>
    </article>
  </main>
</body>

</html>