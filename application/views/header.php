<?php

if(!isset($title))
{
    $title="empty";
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo (isset($title))? ucwords($title):"Kashi";?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/ionicons.min.css">

    <!-- Ionicons -->

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

    <link rel="stylesheet" href="<?=base_url()?>assets/css/admin-style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/images/favicon.png">

</head>

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

.active {
    box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
    background-image: linear-gradient(98deg, #de6057, #f7973d 94%) !important;
    border-radius: 5px 25px 25px 5px !important;
    color: #fff !important;
    font-size: 16px;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
.sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background: linear-gradient(to right, #b046e3, #792ce9);
    color: #fff !important;
}
</style>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light"
            style="background: linear-gradient(0deg, #f6f6f6, #ceccf4db);border-bottom: 1px solid #dcdcf0;">
            <ul class="navbar-nav">
                <li class="nav-item pushmenu">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="super_admin">
                        <img src="https://cdn-icons-png.flaticon.com/512/610/610106.png" style="width:5%; height"> Lead
                        Management Panel
                    </h1>
                </li>

                </li>

            </ul>

            <!-- Right navbar links -->

            <ul class="navbar-nav ml-auto">
            <li class="nav-item menu-open">
                    <img class="kloi" src="   https://cdn-icons-png.flaticon.com/512/1156/1156949.png " alt="TC Logo" style="    width: 3%;
    /* margin-left: -20px; */
    position: absolute;
    top: 17px;
    right: 236px;
    border: 1px solid black;
    border-radius: 41px;
    padding: 8px;">

                </li>
                <li class="nav-item menu-open">
                    <img class="kloi" src="<?=base_url()?>assets/images/tc-logo.png" alt="TC Logo" style="    width: 10%;
    /* margin-left: -20px; */
    position: absolute;
    top: 0px;
    right: 15px;">

                </li>

            </ul>

        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:100%">

            <!-- Brand Logo -->

            <a href="#" class="brand-link" style="    margin-left: -11px;
    width: 105%;">
                <h1 class="welcome-text   text-center"> <b style="color: black;">नमस्कार <img
                            src="<?= base_url()?>assets/images/namaste.gif" style="
    width: 25%;
     
"></b></h1>
            </a>

            <!-- Sidebar -->

            <div class="sidebar">
                <!-- Sidebar Menu -->

                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <!-- Add icons to the links using the .nav-icon class

             with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>admin/dashboard"
                                class="nav-link <?php if ( $title == "Techcentrica :Super Admin Dashboard" ) { ?>active<?php } ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-speedometer2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                    <path fill-rule="evenodd"
                                        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                </svg>
                                <p>

                                    Dashboard

                                </p>

                            </a>

                        </li>

                        <!-- end code for activites  -->

                        <!-- start code for Inquiry  -->
                        <li class="nav-item">

                            <a href="#"
                                class="nav-link  <?php if ( $title == "Inquiry" || $title == "add_inquiry" || $title == "edit_inquiry" || $title=="Add FollowUp" ) { ?>active<?php } ?>">

                                <i class="bi bi-graph-up-arrow"></i>

                                <p>

                                    Inquiry <i class="fa  fa-caret-down"></i>



                                </p>

                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">

                                    <a href="<?=base_url()?>admin/enquery/add" class="nav-link bggrey">

                                        <i class="fa  fa-plus" style="margin-right: 1px;
                  font-size: 13px;"></i>

                                        <p>Add</p>

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="<?=base_url()?>admin/enquery" class="nav-link bggrey">

                                        <i class="fa fa-tasks" aria-hidden="true" style="margin-right: 1px;
                  font-size: 13px;"></i>


                                        <p>Manage</p>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <!-- Top Imported Imquiry -->

                        <li class="nav-item">

                            <a href="#"
                                class="nav-link  <?php if ( $title == "imported_imquiry" || $title == "add_imported_imquiry" || $title == "edit_imported_imquiry" || $title == "Inquiry Add FollowUp") { ?>active<?php } ?>">

                                <i class="fa  fa-list"></i>

                                <p>

                                    Imported Inquiry <i class="fa  fa-caret-down"></i>



                                </p>

                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">

                                    <a href="<?=base_url()?>admin/imported_imquiry" class="nav-link bggrey">

                                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>


                                        <p>All Inquiries</p>

                                    </a>

                                </li>

                                <!-- <li class="nav-item">

                <a href="<?=base_url()?>admin/imported_imquiry/import" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Import</p>

                </a>

              </li> -->

                            </ul>

                        </li>

                        <!-- Top Sub Admin menu -->

                        <li class="nav-item">

                            <a href="#"
                                class="nav-link  <?php if ( $title == "sub_admin" || $title == "add_sub_admin" || $title == "edit_sub_admin" || $title == "View History") { ?>active<?php } ?>">

                                <i class="bi bi-people-fill"></i>

                                <p>

                                    Sub Admin <i class="fa  fa-caret-down"></i>




                                </p>

                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">

                                    <a href="<?=base_url()?>admin/sub_admin/add" class="nav-link bggrey">
                                        <i class="fa  fa-plus" style="margin-right: 1px;
                  font-size: 13px;"></i>
                                        <p>Add</p>

                                    </a>

                                </li>

                                <li class="nav-item">

                                    <a href="<?=base_url()?>admin/sub_admin" class="nav-link bggrey">

                                        <i class="fa fa-file-archive-o"></i>

                                        <p>Manage</p>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <!-- View Customer -->

                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>admin/view_customer"
                                class="nav-link <?php if ( $title == "Techcentrica :View Customer" || $title == "Techcentrica :View Customer" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="fa  fa-user"></i> View Customers
                                </p>

                            </a>

                        </li>

                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>admin/knowledge_base"
                                class="nav-link <?php if ( $title == "Techcentrica :Knowledge Base" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-database-check"></i> Knowledge Base
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>admin/documents"
                                class="nav-link <?php if ( $title == "Techcentrica :Documents" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-file-earmark-bar-graph"></i> Documents
                                </p>

                            </a>

                        </li>
                        <li class="nav-item menu-open">

                            <a href="<?=base_url()?>admin/campaign"
                                class="nav-link <?php if ( $title == "Techcentrica :Campaign" ) { ?>active<?php } ?>">

                                <p>
                                    <i class="bi bi-tv-fill"></i> Campaign
                                </p>

                            </a>

                        </li>


                        <!-- Top Sub Admin menu -->

                        <li class="nav-item">

                            <a href="#"
                                class="nav-link  <?php if ( $title == "spam_leads" || $title == "add_spam_leads" || $title == "edit_spam_leads" ) { ?>active<?php } ?>">

                                <i class="bi bi-patch-question"></i>

                                <p>

                                    Spam Inqueries <i class="fa  fa-caret-down"></i>



                                </p>

                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">

                                    <a href="<?=base_url()?>admin/spam_leads?type=s" class="nav-link bggrey">

                                        <i class="fa fa-tasks" aria-hidden="true" style="margin-right: 1px;
                  font-size: 13px;"></i>

                                        <p>Manage</p>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <!-- code for logout start  -->
                        <li class="nav-item logoutcls">

                            <a href="<?=base_url()?>admin/login/logout"
                                class="nav-link  <?php if ( $title == "hotel_category" || $title == "add_hotel_category" ) { ?>active<?php } ?>">

                                <i class="bi bi-box-arrow-right" style="color:white;"></i>

                                <p style="color:white;">

                                    Logout

                                </p>

                            </a>

                        </li>

                        <!-- end code for banner  -->

                    </ul>

                </nav>

                <!-- /.sidebar-menu -->

            </div>

            <!-- /.sidebar -->

        </aside>