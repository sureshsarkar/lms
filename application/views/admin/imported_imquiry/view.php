<?php $this->load->view('header'); ?>

<style>
  hr{
    border: -1px!important;
    width: 100%;
  }
  .textClass{
    width: 100%;
    height: 40px;
    border-radius: 6px;
  }
  .form-control {
    display: block;
    width: 60% !important;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<!-- Content Wrapper. Contains page content -->

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>
<!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen.css"> -->



<div class="content-wrapper">
<!-- ================ -->

<!-- ================ -->
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/2921/2921226.png  " style="width:5%;"> View Inquiry</h1>


                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url()?>admin/imported_imquiry">Inquiry</a></li>
                    <li class="breadcrumb-item"><a href="#">View Inquiry</a></li>
                    <a href=""><li class="breadcrumb-item"><a href="<?= base_url()?>admin/enquery"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a> 
                    </ol>

                </div>

                <!-- /.col -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <!-- left column -->

                <div class="col-md-12">

                    <!-- general form elements -->

                    <div class="card card-primary">

                        <!-- <div class="card-header"> -->

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 

                            <!-- <h3 class="card-title">Inquiry 

                            </h3> -->

                        <!-- </div> -->
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Name </th>
                                                    <td> <?= $edit_data->name?></td>
                                                </tr>

                                                <tr>
                                                    <th>Email </th>
                                                    <td> <?= $edit_data->email?></td>
                                                </tr>

                                                <tr>
                                                    <th>City </th>
                                                    <td> <?= $edit_data->city?></td>
                                                </tr>

                                                <tr>
                                                    <th>State </th>
                                                    <td> <?= $edit_data->state?></td>
                                                </tr>

                                                <tr>
                                                    <th>Preference </th>
                                                    <td> <?= $edit_data->preference?></td>
                                                </tr>

                                                <tr>
                                                    <th>Lead Created </th>
                                                    <td> <?= $edit_data->created_at?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Phone </th>
                                                    <td> <?= $edit_data->phone?></td>
                                                </tr>
                                                <tr>
                                                    <th>Source </th>
                                                    <td> <?= $edit_data->platform?></td>
                                                </tr>
                                                <tr>
                                                    <th>Campaign Name </th>
                                                    <td> <?= $edit_data->campaign_name?></td>
                                                </tr>
                                             
                                                <tr>
                                                    <th>Campaingn Date</th>
                                                    <td> <?= $edit_data->campaingn_date?></td>
                                                </tr>
                                                <tr>
                                                    <th>Interested For</th>
                                                    <td> <?= $edit_data->interested_for?></td>
                                                </tr>
                                                <tr>
                                                    <th>Lead Updated</th>
                                                    <td> <?= $edit_data->updated_at?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?= base_url()?>admin/imported_imquiry" class="btn-gradient-primary"><i class="bi bi-arrow-left-short"></i> Back</a>
                            </div>
                    </div>
                    <!-- /.card -->
                </div>

                <!--/.col (left) -->

                <!-- right column -->

                <!--/.col (right) -->
            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </section>

    <!-- /.content -->

</div>


<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 


<?php $this->load->view('footer'); ?>

