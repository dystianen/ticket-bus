<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IMAGINE!</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
  <link rel="icon" href="<?= base_url() ?>assets/images/logo_imagine.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <style>
    :root {
      --bs-primary: #153448;
      --bs-light-primary: #3C5B6F;
      --bs-primary-rgb: 60, 91, 111;
      --bs-cream: #FAF0E6
    }

    body {
      font-family: 'Roboto', sans-serif;
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
      background-color: var(--bs-light-primary) !important;
      border-color: var(--bs-light-primary);
    }

    .nav-link {
      color: black;
      opacity: 60%;
    }

    .nav-link:hover {
      color: var(--bs-primary);
      opacity: 100%;
    }

    .navbar-nav .nav-link.active,
    .navbar-nav .nav-link.show {
      color: var(--bs-primary);
      opacity: 100%;
    }

    .btn-outline-primary {
      color: var(--bs-primary) !important;
      border-color: var(--bs-primary) !important;
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:active,
    .btn-check:checked+.btn,
    .btn.active,
    .btn.show,
    .btn:first-child:active,
    :not(.btn-check)+.btn:active {
      color: white !important;
      border-color: var(--bs-primary) !important;
      background-color: var(--bs-primary) !important;
    }

    .btn:disabled {
      border-color: grey;
      background-color: grey;
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
  <nav class="position-fixed navbar navbar-expand-lg z-3 glass-navbar" style="height: 80px; width: 100%">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand text-white" style="font-family: 'Lobster', sans-serif; font-weight: 700; font-size: 40px; text-decoration: none; letter-spacing: 5px" href="/">
        TICKET.com
      </a>

      <!-- Toggler Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Content -->
      <div class="gap-4 collapse navbar-collapse align-items-center d-flex justify-content-between" id="navbarSupportedContent">
        <!-- Navigation Links -->
        <!-- <ul class="mb-2 navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/product" style="font-weight: 500;">All Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/top-selling" style="font-weight: 500;">Top Selling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/new-arrival" style="font-weight: 500;">New Arrivals</a>
          </li>
        </ul> -->

        <!-- Search Form -->
        <!-- <form class="d-flex" role="search" onsubmit="handleSearch(event)">
          <input id="search-input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
        </form> -->
        <div></div>

        <!-- User Section -->
        <div class="d-flex justify-content-start align-items-center gap-3 mt-4 mt-md-0 ml-3">
          <?php if (session()->get('is_logged_in')): ?>
            <!-- Cart Button -->
            <a href="/cart" class="btn position-relative">
              <i data-feather="shopping-cart"></i>
              <span id="cart-badge" class="position-absolute top-10 start-10 translate-middle badge rounded-pill bg-danger" style="visibility: hidden;">
                0
              </span>
            </a>

            <!-- User Dropdown -->
            <div class="dropdown">
              <a class="dropdown-toggle d-flex align-items-center text-gray-600 gap-2" href="#" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px;">
                <i data-feather="user"></i> <span class="mt-1"><?= session()->get('username') ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item" href="<?= base_url(); ?>profile">
                    <i class="fa-regular fa-address-card me-2"></i> Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url(); ?>my-order">
                    <i class="fa-solid fa-list me-2"></i> My Order
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= base_url(); ?>logout">
                    <i class="fa-solid fa-power-off me-2"></i> Logout
                  </a>
                </li>
              </ul>
            </div>
          <?php else: ?>
            <!-- Login/Register Button -->
            <a href="/login" class="btn btn-outline-light rounded-pill">Login/Register</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>


  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <!-- <footer class="pt-5 bg-primary" style="margin-top: 10rem;">
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
  </footer> -->

  <!-- SCRIPT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js" type="text/javascript"></script>
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
      if (window.location.pathname === '/') {
        window.location.href = `/product?search=${value}`;
      } else {
        window.location.href = `?search=${value}`;
      }
    }

    async function fetchCart() {
      try {
        const response = await fetch('<?= base_url('cart/get') ?>');
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const cartItems = await response.json();

        // Update cart icon badge count
        const cartBadge = document.getElementById('cart-badge');
        if (cartItems.length > 0) {
          cartBadge.innerText = cartItems.length;
          cartBadge.style.visibility = "visible"
        }
      } catch (error) {
        console.error('Failed to fetch cart:', error);
      }
    }

    // Fetch cart on page load if the user is logged in
    if (<?= json_encode(session()->get('is_logged_in')) ?>) {
      window.addEventListener('DOMContentLoaded', fetchCart);
    }

    // Get all nav-link elements
    const navLinks = document.querySelectorAll('.nav-link');

    // Get the current path
    const currentPath = window.location.pathname;

    // Loop through each nav-link
    navLinks.forEach(link => {
      if (link.getAttribute('href') === currentPath) {
        console.log("masuk")
        // Add the 'active' class to the matching link
        link.classList.add('active');
      } else {
        // Remove the 'active' class from other links
        link.classList.remove('active');
      }
    });
  </script>

  <?= $this->renderSection('scripts') ?>
</body>

</html>