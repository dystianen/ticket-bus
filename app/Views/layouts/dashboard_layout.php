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

    .nav-link {
      color: var(--bs-primary);
    }

    .nav-link:hover {
      color: #4f4666;
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
  <div class="d-flex gap-4" style="width: 100%;">
    <aside class="bg-primary px-5" style="height: 100dvh; width: 20rem">
      <nav class="navbar navbar-expand-lg d-flex flex-column align-items-start gap-4">
        <a class="navbar-brand text-white" style="font-weight: 700; font-size: 32px; text-decoration: none" href="#">IMAGINE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="gap-4 collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="mb-2 navbar-nav mb-lg-0 mx-0 d-flex flex-column gap-2">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="#">
                <i class="fa fa-box" style="width: 24px; font-size: 18px"></i> Manage Product
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">
                <i class="fa fa-users" style="width: 24px;"></i> Manage User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">
                <i class="fa fa-list" style="width: 24px;"></i> Manage Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">
                <i class="fa fa-ruler-horizontal" style="width: 24px;"></i> Manage Size
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </aside>

    <main class="container mt-4">
      <?= $this->renderSection('content') ?>
    </main>
  </div>

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
  </script>

  <?= $this->renderSection('scripts') ?>
</body>

</html>