<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COSMOS Cosmatic's </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{url('UserAssets/')}}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('UserAssets/')}}/images/apple-touch-icon.png">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('AdminAssets/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('AdminAssets/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('AdminAssets/')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('AdminAssets/')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('AdminAssets/')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{url('AdminAssets/')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{url('AdminAssets/')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('AdminAssets/')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">

   
   <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <!-- End Notification Nav -->

        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{url('AdminAssets/')}}/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">RKD-2</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>RKD-2</h6>
              <span>Developers</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <hr class="dropdown-divider">
            </li>

           
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Header ======= -->
  

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('addproduct')}}">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            <a href="{{route('viewproduct')}}">
              <i class="bi bi-circle"></i><span>View Product</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Manage Categroy</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
            <a href="{{route('addcategory')}}">
              <i class="bi bi-circle"></i><span>Add category</span>
            </a>
          </li>
         <li>
            <a href="{{route('viewcategory')}}">
              <i class="bi bi-circle"></i><span>View category</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#brand" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage Brand</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="brand" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
            <a href="{{route('addbrand')}}">
              <i class="bi bi-circle"></i><span>Add Brand</span>
            </a>
          </li>

           <li>
            <a href="{{route('viewbrand')}}">
              <i class="bi bi-circle"></i><span>View Brand</span>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#User" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="User" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            

           <li>
            <a href="{{route('viewuser')}}">
              <i class="bi bi-circle"></i><span>View User</span>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contact" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage query</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contact" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            

           <li>
            <a href="{{route('viewquery')}}">
              <i class="bi bi-circle"></i><span>View query</span>
            </a>
          </li>

        </ul>
      </li>
      <!-- End Components Nav -->
     <!-- End Components Nav -->
       
         

         </ul>

  </aside><!-- End Sidebar-->

 

  <!-- ======= Footer ======= -->
 