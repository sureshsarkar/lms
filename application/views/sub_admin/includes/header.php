<?php

if(!isset($title))
{
    $title="empty";
}else{
  $title = $title;
}


if(isset($_GET['method']) && $_GET['method'] =='export'){
  $title = "Techcentrica :Export leads";
}


?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo (isset($title))? ucwords($title):"Techcentrica";?></title>



    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/ionicons.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 4 -->

    <link rel="stylesheet"
        href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


    <!-- iCheck -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->



    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">

    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.css">

    <!-- DataTables -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <script src="<?=base_url()?>assets/plugins/jquery.min.js"></script>


    <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/sub-admin-style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/images/favicon.png">


    <style>
    body {

        zoom: 90%;

    }

    .delete {

        background: #c31414;

        border: red;

    }

    .eye {

        background: #143ac3;

        border: #0300ad;

    }

    @media screen and (min-width: 361px) and (max-width: 414px) {
        .kloi {
            width: 30% !important;
            /* margin-left: -20px; */
            position: absolute !important;
            top: -11px !important;
            right: 143px !important;
        }

    }

    @media screen and (max-width: 360px) {
        .kloi {
            width: 30% !important;
            /* margin-left: -20px; */
            position: absolute !important;
            top: -11px !important;
            right: 143px !important;
        }

    }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->

        <!-- <div class="preloader flex-column justify-content-center align-items-center">

  <img class="animation__shake" src="<?=base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">

</div> -->

        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item pushmenu">

                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

                </li>


                <li class="nav-item d-none d-sm-inline-block">

                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text ml-3"> <b style="color: black;"><?= ucwords($_SESSION['name'])?></b> 🥳</h1>
                    <h3 class="welcome-sub-text ml-3">Check out the latest leads!</h3>
                </li>

                </li>

            </ul>

            <!-- Right navbar links -->

            <ul class="navbar-nav ml-auto">
                <li class="nav-item menu-open">
                    <img class="kloi" src="   https://cdn-icons-png.flaticon.com/512/1156/1156949.png " alt="TC Logo"
                        style="    width: 3%;
    /* margin-left: -20px; */
    position: absolute;
    top: 17px;
    right: 236px;
    border: 1px solid black;
    border-radius: 41px;
    padding: 8px;">

                </li>
                <li class="nav-item menu-open">
                    <img class="kloi" src="<?=base_url()?>assets/images/tc-logo.png" alt="TC Logo" style="width: 14%;
    /* margin-left: -20px; */
    position: absolute;
    top: -17px;
    right: 15px;">

                </li>

            </ul>

        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:100%">

            <!-- Brand Logo -->
            <!-- 
  <a href="#" class="brand-link">

    <img src="https://cdn-icons-png.flaticon.com/512/7977/7977409.png" alt="AdminLTE Logo" class="brand-image  " style="opacity: .8">

    <span class="brand-text font-weight-light"><?= (isset($_SESSION['name']))?$_SESSION['name']:"Sub Admin"?></span>

  </a> -->

            <!-- Sidebar -->

            <div class="sidebar">

                <!-- Sidebar Menu -->

                <nav class="mt-2">
                    <h1 class="welcome-text   text-center"> <b style="color: black;">नमस्कार <img
                                src="<?= base_url()?>assets/images/namaste.gif" style="
    width: 30%;
    margin-right: -13px;
"></b></h1>

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false" style="margin-top:19px;">

                        <!-- Add icons to the links using the .nav-icon class

             with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/dashboard"
                                class="nav-link <?php if ( $title == "Techcentrica :Dashboard" ) { ?>active<?php } ?>">

                                <p>

                                    <i class="bi bi-speedometer"></i> Dashboard

                                </p>

                            </a>

                        </li>

                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/enquery"
                                class="nav-link <?php if ( $title == "Techcentrica :Enquery List" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-activity"></i> View All Leads
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/enquery/add"
                                class="nav-link <?php if ( $title == "Techcentrica :Add Lead" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-building-fill-add"></i> Add New Lead
                                </p>

                            </a>

                        </li>
                        <!-- <li class="nav-item menu-open">

  <a href="<?=base_url()?>sub_admin/enquery?method=export" class="nav-link <?php if ( $title == "Techcentrica :Export leads" ) { ?>active<?php } ?>">
    <p>
    <i class="bi bi-upload"></i> Export Leads
    </p>
  </a>
</li> -->
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/imported_imquiry"
                                class="nav-link <?php if ( $title == "Techcentrica :Imported leads" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-download"></i> Import Leads
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/view_customer"
                                class="nav-link <?php if ( $title == "Techcentrica :View Customer" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-people-fill"></i> View Customers
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/knowledge_base"
                                class="nav-link <?php if ( $title == "Techcentrica :Knowledge Base" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-database-check"></i> Knowledge Base
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/documents"
                                class="nav-link <?php if ( $title == "Techcentrica :Documents" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-file-earmark-bar-graph"></i> Documents
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>sub_admin/campaign"
                                class="nav-link <?php if ( $title == "Techcentrica :Campaign" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-tv-fill"></i> Campaign
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?= base_url('sub_admin/login/logout')?>" class="nav-link">

                                <p>
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </p>

                            </a>

                        </li>

                    </ul>

                </nav>

                <!-- /.sidebar-menu -->

            </div>

            <!-- /.sidebar -->

        </aside>

        <!-- 
<script>
      var base_url = "<?php echo base_url()?>";
      function sessionOut() {
      window.location.href = base_url+"sub_admin/login/logout";
      }
      setInterval(sessionOut, 300000); // 300000 milliseconds = 5 minute
</script> -->