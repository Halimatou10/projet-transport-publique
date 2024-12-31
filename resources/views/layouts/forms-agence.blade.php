<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - TransPub </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TransPub
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">TransPub</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Dah-le Alamine</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Dah-le Alamine</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mon Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-login.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Se Déconnecter</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Acceuil</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('reserver') }}">
          <i class="bi bi-menu-button-wide"></i><span>Réservation</span><i class="bi ms-auto"></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{ route('geolocaliser') }}">
          <i class="bi bi-geo-alt"></i><span>Géolocalisation</span><i class="bi ms-auto"></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{ route('contact') }}">
          <i class="bi bi-envelope"></i><span>Contactez-Nous</span><i class="bi ms-auto"></i>
        </a>
      </li><!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Agences de voyage</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('index') }}">Acceuil</a></li>
          <li class="breadcrumb-item">Agences</li>
          <li class="breadcrumb-item active">Réservation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Réservation</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Nom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Prénom</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label">Agence de Voyage</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Choisir une agence</option>
                      <option value="1">Danay Express</option>
                      <option value="2">Mistral Voyage</option>
                      <option value="3">Touristique Express</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-4 col-form-label">Numéro de téléphone</label>
                  <div class="col-sm-10 input-group">
                    <span class="input-group-text">+237</span>
                    <input type="tel" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label">Lieu de départ</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Adamaoua</option>
                      <option value="1">Extreme-Nord</option>
                      <option value="2">Nord</option>
                      <option value="3">Center</option>
                    </select>
                  </div>
                <div class="row mb-3">
                  <label class="col-sm-4 col-form-label">lieu d'arrivée</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Ngaoundéré</option>
                      <option value="1">Maiganga</option>
                      <option value="2">Garoua</option>
                      <option value="3">Yaoundé</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-4 col-form-label">Date de départ</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-4 col-form-label">Heure de départ</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-4 col-form-label">Nombre de places</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-4 col-form-label">CNI/PASSPORT</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-4 pt-0">Avez-vous plus de 10 Kg de bagage?</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Oui
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Non
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div class="row mb-3">
                  <label for="prix">Prix</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text">FCFA</span>
                    <input type="text" id="prix" class="form-control" value="15500" disabled aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>


                <div class="row mb-3">
                  <div class="col-sm-10 text-center">
                    <button type="submit" class="btn btn-primary">Réserver</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>TransPub</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">Dah-le Alamine</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
