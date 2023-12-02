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
  .table td, .table th {
    padding: 4px !important;
    vertical-align: top !important;
    border-top: 1px solid #dee2e6 !important;
    width: 30%;
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

            <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/11751/11751623.png " style="width:5%;">View User History</h1>

        </div>

        <!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url()?>admin/sub_admin">Sub Admin</a></li>
            <li class="breadcrumb-item"><a href="#">View User History</a></li>
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

                        <div  >

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 
 

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action="" id="" class="form-horizontal " method="post">
                        <input type="hidden" name="id" value="<?= $view_data->id?>">

                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th> <i class="bi bi-person-check-fill text-info"></i> Name </th>
                                                    <td> <?= $view_data->name?></td>
                                                </tr>

                                                <tr>
                                                    <th><i class="bi bi-envelope-open text-info"></i> Email </th>
                                                    <td> <?= $view_data->email?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th><i class="bi bi-telephone text-info"></i> Phone </th>
                                                    <td> <?= $view_data->phone?></td>
                                                </tr>
                                                <tr>
                                                    <th><i class="bi bi-calendar-check text-info"></i> Lead Created</th>
                                                    <td> <?= date("Y-m-d h:i A",strtotime($view_data->created_at))?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php if(isset($by_date) && count($by_date)>0 ){
                                      $i = 0;
                                    foreach ($by_date as $key => $value) {?>
                                    <!-- show followup_note start -->
                                    <div class="col-md-12">
                                      <span class="badge bg-per text-light"><?= date("l-F-Y",strtotime($value->created_at))?></span>
                                      <?php foreach ($user_history as $k => $v) {
                                      if($value->created_at == $v->created_at){
                                      ?>
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="exampleInputFile"><i class="bi bi-chat-dots"></i>Login At:</label>
                                            <span class="badge bg-inverse-success"><?= $v->login_at?></span>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="exampleInputFile">Logout At:</label>
                                            <span class="badge bg-inverse-danger"><?= $v->logout_at?></span>
                                          </div>
                                        </div>
                                        <?php 
                                        if($v->updated_at != NULL){
                                        $seconds = strtotime($v->logout_at) - strtotime($v->login_at);

                                        // Calculate years
                                        $years = floor($seconds / (365 * 24 * 60 * 60));

                                        // Calculate remaining seconds after removing years
                                        $seconds -= $years * (365 * 24 * 60 * 60);

                                        // Calculate months
                                        $months = floor($seconds / (30*24*60*60));

                                        // Calculate remaining seconds after removing months
                                        $seconds -= $months * (30*24*60*60);

                                        // Calculate days
                                        $days = floor($seconds / (24*60*60));

                                        // Calculate remaining seconds after removing days
                                        $seconds -= $days * (24*60*60);

                                        // Calculate hours
                                        $hours = floor($seconds / (60 * 60));

                                        // Calculate remaining seconds after removing hours
                                        $seconds -= $hours * (60 * 60);

                                        // Calculate minutes
                                        $minutes = floor($seconds / 60);

                                        // Calculate remaining seconds
                                        $seconds = $seconds % 60;

                                        $years = (isset($years) && $years !=0)?$years.' year':'';
                                        $months = (isset($months) && $months !=0)?$months.' month':'';
                                        $days = (isset($days) && $days !=0)?$days.' day':'';
                                        $hours = (isset($hours) && $hours !=0)?$hours.' hour':'';
                                        $minutes = (isset($minutes) && $minutes !=0)?$minutes.' minute':'';
                                        $seconds = (isset($seconds) && $seconds !=0)?$seconds.' second':'';

                                        $last_activity = $years.' '.$months.' '.$days.' '.$hours.' '.$minutes.' '.$seconds;

                                        ?>

                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="exampleInputFile">= Total Hour:</label>
                                            <span class="badge bg-inverse-success"><?= $last_activity?></span>
                                          </div>
                                        </div>

                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label for="exampleInputFile">= Logout IP:</label>
                                            <span class="badge bg-inverse-success"><?= $v->logout_ip?></span>
                                          </div>
                                        </div>
                                          <?php }?>
                                    </div>
                                    <?php }}?>
                                    <hr>
                                    <?php }?>
                                  </div>
                                  <hr>
                                    <!-- show followup_note end  -->
                                <?php }?>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
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