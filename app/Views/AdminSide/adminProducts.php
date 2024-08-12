<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/css/logo.png') ?>" />
  <link rel="stylesheet" href="<?= base_url('AdminSideAssets/css/styles.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('AdminSideAssets/css/table.css') ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
   <!--  Body Wrapper -->
   <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>

      <!-- logo -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php <?= base_url('/admin') ?>" class="text-nowrap logo-img">
            <img src="<?= base_url('assets/images/logo.png') ?>" width="150" alt="" />
          </a>
        </div>


        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">

            <!-- HEADER - HOME -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>

            <!-- DASHBOARD -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url("/admin") ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

                    <!-- space between dashboard and the bottom menus -->
                    <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    </li>



            <!-- TRANSACTIONS  -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url("/admin/transactions") ?>" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-store"></i>
                </span>
                <span class="hide-menu">Transactions</span>
              </a>
            </li>



            <!-- PRODUCT  -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url("/admin/products") ?>" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-store"></i>
                </span>
                <span class="hide-menu">Product</span>
              </a>
            </li>


            <!-- MANAGE USERS -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url("/admin/manageUsers") ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Users</span>
              </a>
            </li>

            
            <!-- HEADING - dash line -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">---------------------------</span>
            </li>

            <!-- Log out button -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url("Signup_Login/logout") ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>

            <!-- Register new admin button -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= base_url("/admin/adminRegister") ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Create new admin</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->




    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
     
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <a href="addNewProduct.php"><button class="btn btn-primary w-30 py-8 fs-4 mb-4 rounded-2" value="submit"> Add New Product </button></a>
              <h5 class="card-title fw-semibold mb-4">Products </h5>          

              <div class="card">
                <div class="card-body p-4">
              
                  <table>
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     










                    

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>