<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Reservation - Azzura</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">AZZURA</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-tachometer"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Reservation -->
            <li class="menu-item">
              <a href="reservation.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                <div data-i18n="Layouts">Reservation</div>
              </a>
            </li>

            <!-- Sales Report -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link">
              <i class="menu-icon tf-icons bx bx-chart"></i>
                <div data-i18n="Layouts">Sales Report</div>
              </a>
            </li>
            <!-- Cashier -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Cashier</span>
            </li>
            <li class="menu-item">
              <a href="payment.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-credit-card"></i>
                <div data-i18n="Account Settings">Payment</div>
              </a>
            </li>
            <!-- Admin -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Admin</span></li>
            <!-- Accommodation Settings -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Extended UI">Accommodation Settings</div>
              </a>
              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="type.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Hotel Room Type &amp; No.</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="villatype.php" class="menu-link">
                    <div data-i18n="Text Divider">Villa Type &amp; No.</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cottagetype.php" class="menu-link">
                    <div data-i18n="Text Divider">Cottage Type &amp; No.</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Inclusion</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Accommodation -->
            <li class="menu-item active open">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Extended UI">Accommodation</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="hotel.php" class="menu-link"> 
                    <div data-i18n="Perfect Scrollbar">Hotel Room</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="villa.php" class="menu-link">
                    <div data-i18n="Text Divider">Villa</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cottage.php" class="menu-link">
                    <div data-i18n="Text Divider">Cottage</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Discount -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-tag"></i>
                <div data-i18n="Extended UI">Discounts &amp; Promos</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="discount.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Discounts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="promo.php" class="menu-link">
                    <div data-i18n="Text Divider">Promos</div>
                  </a>
                </li>
              </ul>
            </li>

             <!-- Other Amenities -->
            <li class="menu-item">
              <a href="other.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-layer"></i>
                <div data-i18n="Boxicons">Other Amenities</div>
              </a>
            </li>

            <!-- Accounts -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Extended UI">Accounts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="staff.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Staffs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Customers</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Archives -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-archive"></i>
                <div data-i18n="Extended UI">Archives</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Reservation</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Payments</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Settings -->
            <li class="menu-item">
              <a href="icons-boxicons.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Boxicons">Settings</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Bernard</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Welcome! Bernard</h5>
                          <p class="mb-4">
                             <h3 class="fw-bold">Manage Hotel Rooms</h3>
                          </p>
                    </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" style="float: right; background-color: #0B6623;">
                              <a href="addroom.php" style="text-decoration: none; color: white;">  Add Hotel Rooms</a>
                            </button>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="myDataTable">
                            <thead style="text-align: center;">
                                <tr>
                                <th>#</th>
                                <th>Photos</th>
                                <th>Room Type &amp; No.</th>
                                <th>Description</th>
                                <th>Capacity</th>
                                <th>Free Entrance</th>
                                <th>Inclusion</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="white-space: nowrap;">
                                        <a href="#"><i class="menu-icon tf-icons bx bx-show view_btn" style="color: #00308F; font-size: 1.3rem;"></i></a>
                                        <a href="editroom.php"><i class="menu-icon tf-icons bx bx-edit edit_btn"style="color: #3F704D; font-size: 1.3rem;"></i></a>
                                        <a href=""><i class="menu-icon tf-icons bx bx-trash delete_btn" style="color: #C21807; font-size: 1.3rem;"></i></a>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

             <!-- Footer -->
             <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                 Reserve Operational Technology Corporation
                </div>
              </div>
            </footer>
            <!-- / Footer -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Include jQuery and DataTables scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  </body>
</html>


<!-- Initialize the DataTable -->
<script>
  $(document).ready(function() {
    $('#myDataTable').DataTable();
  });
</script>