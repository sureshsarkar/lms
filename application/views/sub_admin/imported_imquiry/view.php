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
  .btn-gradient-primary {
    background: linear-gradient(to right, #da8cff, #9a55ff);
    font-size: 14px;
    padding: 10px 30px;
    color: #fff;
    border: 0;
    border-radius: 50px;
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

                    <h1 class="  ml-3" style=" text-align: left;">View Inquiry</h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item">Dashboard </li>

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

                        <div >

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 

                            <!-- <h3 class="card-title">View Inquiry
 

                            </h3> -->

                        </div>
                   
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
                                                    <th><i class="bi bi-person-check-fill text-info"></i> Name </th>
                                                    <td>: <?= $edit_data->name?></td>
                                                </tr>

                                                <tr>
                                                    <th><i class="bi bi-envelope-open text-info"></i> Email </th>
                                                    <td>: <?= $edit_data->email?></td>
                                                </tr>

                                                <tr>
                                                    <th><i class="bi bi-pin-map-fill text-info"></i> City </th>
                                                    <td>: <?= $edit_data->city?></td>
                                                </tr>

                                                <tr>
                                                    <th><i class="bi bi-globe-central-south-asia text-info"></i> State </th>
                                                    <td>: <?= $edit_data->state?></td>
                                                </tr>

                                                <tr>
                                                    <th><i class="bi bi-sliders"></i> Preference </th>
                                                    <td>: <?= $edit_data->preference?></td>
                                                </tr>

                                                <tr>
                                                    <th><i class="bi bi-calendar-check text-info"></i> Created </th>
                                                    <td>: <?= $edit_data->created_at?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th><i class="bi bi-telephone text-info"></i> Phone </th>
                                                    <td>: <?= $edit_data->phone?></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="bi bi-usb-symbol text-info"></i> Source </th>
                                                    <td>: <?= $edit_data->platform?></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="bi bi-bullseye text-info"></i> Campaign Name </th>
                                                    <td>: <?= $edit_data->campaign_name?></td>
                                                </tr>
                                             
                                                <tr>
                                                    <th><i class="bi bi-calendar-check text-info"></i> Campaingn Date</th>
                                                    <td>: <?= $edit_data->campaingn_date?></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="bi bi-file-earmark-person text-info"></i> Interested For</th>
                                                    <td>: <?= $edit_data->interested_for?></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="bi bi-calendar-check text-info"></i> Lead Updated</th>
                                                    <td>: <?= $edit_data->updated_at?></td>
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
                                <a href="<?= base_url()?>sub_admin/imported_imquiry" class="btn-gradient-primary"><i class="bi bi-arrow-left-short"></i> Back</a>
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

