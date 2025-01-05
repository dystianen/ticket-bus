<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMAGINE!</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    :root {
      --bs-primary: #352f44;
      --bs-primary-rgb: 53, 47, 68;
      --bs-cream: #FAF0E6
    }

    a {
      text-decoration: none;
      color: black;
    }

    .btn-primary {
      background-color: var(--bs-primary);
      border-color: var(--bs-primary);
    }

    .btn-primary:hover,
    .btn-primary:active {
      background-color: #4f4666 !important;
      border-color: #4f4666;
    }

    .btn-outline-primary {
      color: var(--bs-primary);
      border-color: var(--bs-primary);
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:active {
      color: white;
      border-color: var(--bs-primary);
      background-color: var(--bs-primary) !important;
    }

    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
      color: var(--bs-primary);
    }

    .border-primary {
      border-color: var(--bs-primary);
    }

    .alert-primary {
      background-color: var(--bs-primary);
      border-color: var(--bs-primary);
    }

    .form-control:focus {
      border-color: #4f4666;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <header class="pt-1 pb-2 px-2 text-center text-white bg-primary">Sign up and get 20% off to your first order. <a class="text-white text-decoration-underline" href="/signup"> Sign Up Now</a></header>

  <nav class="navbar navbar-expand-lg" style="height: 100px;">
    <div class="container">
      <a class="navbar-brand text-primary" style="font-weight: 700; font-size: 32px; text-decoration: none" href="/">IMAGINE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="gap-4 collapse navbar-collapse align-items-center" id="navbarSupportedContent">
        <ul class="mb-2 navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/product">All Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/top-selling">Top Selling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/new-arrival">New Arrival</a>
          </li>
        </ul>
        <form class="d-flex" role="search" onsubmit="handleSearch(event)">
          <input id="search-input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="d-flex">
          <a href="/cart" class="btn position-relative">
            <i data-feather="shopping-cart"></i>
            <span id="cart-badge" class="position-absolute top-10 start-10 translate-middle badge rounded-pill bg-danger">
              0
            </span>
          </a>
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link text-gray-600 d-flex align-items-center gap-2" style="text-decoration: none;" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-regular fa-circle-user" style="font-size: 30px;"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li class="ml-2">
                    <span class="dropdown-item"><?= session()->get('username') ?></span>
                  </li>
                  <li><a class="dropdown-item" style="text-decoration: none;" href="<?php echo base_url(); ?>/logout"><i class="fa-solid fa-power-off mr-2"></i>Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <main class="container">
    <article>
      <?= $this->renderSection('content') ?>
    </article>
  </main>

  <footer class="pt-5 bg-primary" style="margin-top: 10rem;">
    <section class="container mb-5 rounded-3" style="background-color: var(--bs-cream); margin-top: -7rem;">
      <div class="subscriber-section d-flex flex-column flex-md-row justify-content-between align-content-start align-lg-items-center gap-3">
        <h1 class="text-primary mb-0" style="font-weight: 700;">STAY UP TO DATE ABOUT <br> OUR LATEST OFFERS</h1>

        <div class="subscriber-input d-flex flex-column gap-2">
          <input type="email" class="form-control rounded-pill" placeholder="Enter your email address" aria-label="email" aria-describedby="basic-addon1">

          <button class="btn btn-primary rounded-pill">Subscribe to Newsletter</button>
        </div>
      </div>
    </section>

    <div class="container text-white d-flex flex-column gap-2">
      <h3 style="font-weight: 700;">IMAGINE</h3>
      <div class="row">
        <div class="col">
          <p>We have shoes that suits your style and which you’re proud to wear. From women to men.</p>
          <div class="d-flex gap-2">
            <button class="btn btn-outline-light"><i data-feather="twitter"></i></button>
            <button class="btn btn-outline-light"><i data-feather="facebook"></i></button>
            <button class="btn btn-outline-light"><i data-feather="instagram"></i></button>
            <button class="btn btn-outline-light"><i data-feather="github"></i></button>
          </div>
        </div>
        <div class="col link-footer">
          <a href="About">About</a>
          <a href="About">FeaturesFeatures</a>
          <a href="About">Works</a>
          <a href="About">Career</a>
        </div>
        <div class="col link-footer">
          <a href="About">Customer Support</a>
          <a href="About">Delivery Details</a>
          <a href="About">Terms & Conditions</a>
          <a href="About">Privacy Policy</a>
        </div>
        <div class="col link-footer">
          <a href="About">Account</a>
          <a href="About">Manage Deliveries</a>
          <a href="About">Orders</a>
          <a href="About">Payments</a>
        </div>
        <div class="col link-footer">
          <a href="About">Free eBooks</a>
          <a href="About">Development Tutorial</a>
          <a href="About">How to - Blog</a>
          <a href="About">Youtube Playlist</a>
        </div>
      </div>
      <p style="margin-top: 50px;">IMAGINE &copy;2024, All Rights Reserved</p>
    </div>
  </footer>

  <!-- SCRIPT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/218d5eb4ba.js" crossorigin="anonymous"></script>
  <script>
    feather.replace();

    $(".success").fadeTo(2000, 500).slideUp(500, function() {
      $(".success").slideUp(500);
    });

    $(".failed").fadeTo(2000, 500).slideUp(500, function() {
      $(".failed").slideUp(500);
    });

    function handleSearch(event) {
      event.preventDefault()
      const value = document.getElementById("search-input").value;
      window.location.replace(`/product?search=${value}`)
    }

    async function fetchCart() {
      try {
        const response = await fetch('<?= base_url() ?>cart/get');
        const cartItems = await response.json();

        // Update cart icon badge count
        const cartBadge = document.getElementById('cart-badge');
        cartBadge.innerText = cartItems.length;
      } catch (error) {
        console.error('Failed to fetch cart:', error);
      }
    }

    // Fetch cart on page load
    window.addEventListener('DOMContentLoaded', fetchCart);

    let checkPaymentInterval; // Declare interval variable

    async function checkPayment() {
      try {
        const response = await fetch('<?= base_url() ?>check-payment');
        const cartItems = await response.json();

        // Update cart icon badge count
        const cartBadge = document.getElementById('cart-badge');
        cartBadge.innerText = cartItems.length;

        // Check if all items have status 'success_payment'
        const isSuccess = cartItems.every(item => item.status === 'success_payment');

        // Stop interval when all items have 'success_payment'
        if (isSuccess) {
          clearInterval(checkPaymentInterval); // Clear the interval
          console.log('Payment is successful for all items. Stopping checks.');
        }
      } catch (error) {
        console.error('Failed to fetch cart:', error);
      }
    }

    // Start interval to check payment every 5 seconds
    window.addEventListener('DOMContentLoaded', () => {
      checkPayment(); // Initial check on page load
      checkPaymentInterval = setInterval(checkPayment, 5000); // Repeat check every 5 seconds
    });
  </script>
</body>

</html>