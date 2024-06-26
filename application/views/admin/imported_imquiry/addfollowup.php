<?php $this->load->view('header'); ?>

<style>
  hr{
    border: -1px!important;
    width: 100%;
  }
  .textClass{
    width: 100%;
    height: 118px;
    border-radius: 6px;
  }
  .table td, .table th {
    padding: 4px !important;
    vertical-align: top !important;
    border-top: 1px solid #dee2e6 !important;
    width: 30%;
}
.card-header{
  border:none;
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

          <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/2921/2921226.png  " style="width:5%;"> Add FollowUp</h1>

          </div>

          <!-- /.col -->

          <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

          <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url()?>admin/imported_imquiry">Inquiry</a></li>
          <li class="breadcrumb-item"><a href="#">Add FollowUp</a></li>
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

                        <div class="card-header  p-0 customwhite"  >

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 

                            <!-- <h3 class="card-title">Inquiry</h3> -->

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action="" id="" class="form-horizontal " method="post">
                        <input type="hidden" name="id" value="<?= $edit_data->id?>">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                        <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Name </th>
                                                    <td>: <?= $edit_data->name?></td>
                                                </tr>

                                                <tr>
                                                    <th>Email </th>
                                                    <td>: <?= $edit_data->email?></td>
                                                </tr>

                                                <tr>
                                                    <th>City </th>
                                                    <td>: <?= $edit_data->city?></td>
                                                </tr>

                                                <tr>
                                                    <th>State </th>
                                                    <td>: <?= $edit_data->state?></td>
                                                </tr>

                                                <tr>
                                                    <th>Preference </th>
                                                    <td>: <?= $edit_data->preference?></td>
                                                </tr>

                                                <tr>
                                                    <th>Lead Created </th>
                                                    <td>: <?= $edit_data->created_at?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                        <table class="table table-bordered table-striped">
                                                <tr>
                                                    <th>Phone </th>
                                                    <td>: <?= $edit_data->phone?></td>
                                                </tr>
                                                <tr>
                                                    <th>Source </th>
                                                    <td>: <?= $edit_data->platform?></td>
                                                </tr>
                                                <tr>
                                                    <th>Campaign Name </th>
                                                    <td>: <?= $edit_data->campaign_name?></td>
                                                </tr>
                                             
                                                <tr>
                                                    <th>Campaingn Date</th>
                                                    <td>: <?= $edit_data->campaingn_date?></td>
                                                </tr>
                                                <tr>
                                                    <th>Interested For</th>
                                                    <td>: <?= $edit_data->interested_for?></td>
                                                </tr>
                                                <tr>
                                                    <th>Lead Updated</th>
                                                    <td>: <?= $edit_data->updated_at?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
                            </div>
                            <!-- /.card -->
                            </div>
                            </div>
                               
                  

                <!--/.col (left) -->

                <!-- right column -->

                <!--/.col (right) -->
            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </section>


    <!-- second section start  -->
    
    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <!-- left column -->

                <div class="col-md-12">

                    <!-- general form elements -->

                    <div class="card card-primary">

                        <div class="card-header  p-0 customwhite"  >

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 

                            <!-- <h3 class="card-title">Inquiry</h3> -->

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action="" id="" class="form-horizontal " method="post">
                        <input type="hidden" name="id" value="<?= $edit_data->id?>">
                            <div class="card-body" style=" background: #ffff002e; border: 2px solid white;
">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">
                                     <!-- addFollow start  -->
                                     <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputFile" style="font-size: 17PX;"><i class="bi bi-chat-dots"></i> ENTER YOUR COMMENTS:</label>
                                                <textarea name="followup_note" class="textClass" placeholder="Enter FollowUp Note-" required autofocus style="border: 1PX solid #b3afaf;"></textarea>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="row" >
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile"><i class="bi bi-calendar-date-fill"></i> FollowUp Date</label>
                                                        <input type="date" name="followup_date" id="type" class="form-control" required autofocus>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile"><i class="bi bi-calendar-date-fill"></i> Followup Time</label>
                                                        <input type="time" name="followup_time" class="form-control" required autofocus>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                        <label for="exampleInputFile"><i class="bi bi-journal-album"></i> Inquiry Status</label>
                                                        <select name="enquery_status" class="form-control" required autofocus>
                                                            <option value="4">Please Select</option>
                                                            <option value="4"><?= $this->config->item('enquery_status')[4]?></option>
                                                            <option value="1"><?= $this->config->item('enquery_status')[1]?></option>
                                                            <option value="3"><?= $this->config->item('enquery_status')[3]?></option>
                                                            <option value="5"><?= $this->config->item('enquery_status')[5]?></option>
                                                            <option value="6"><?= $this->config->item('enquery_status')[6]?></option>
                                                            <option value="2"><?= $this->config->item('enquery_status')[2]?></option>
                                                            <option value="7"><?= $this->config->item('enquery_status')[7]?></option>
                                                        </select>
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                        <label for="exampleInputFile"><i class="bi bi-journal-album"></i> Inquiry Mode</label>
                                                        <select name="enquery_mode" class="form-control" required autofocus>
                                                            <option value="0">Please Select</option>
                                                            <option value="1"><?= $this->config->item('enquery_mode')[1]?></option>
                                                            <option value="2"><?= $this->config->item('enquery_mode')[2]?></option>
                                                        </select>
                                                  </div>
                                                </div>
                                                <!-- code for FollowUp Date  -->
                                                <div class="col-md-8">
                                                 <label for="text"> </label>
                                                  <button type="submit" class="active" style="width: 100%;">Submit Follow up Notes</button>
                                                </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            </form>
                            </div>
                            <!-- /.card -->
                            </div>
                            </div>
                               
                  

                <!--/.col (left) -->

                <!-- right column -->

                <!--/.col (right) -->
            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </section>
    <!-- second section end -->

       <!-- third section start  -->
    
       <section class="content">

<div class="container-fluid">

    <div class="row">

        <!-- left column -->

        <div class="col-md-12">

            <!-- general form elements -->

            <div class="card card-primary">

                <div class="card-header  p-0 customwhite"  >

                    <?php if($this->session->flashdata('success')): ?>

                    <div class="alert alert-success">

                        <button type="button" class="close" data-close="alert"></button>

                        <?php echo $this->session->flashdata('success'); ?>

                    </div>

                    <?php endif; ?> 

                    <!-- <h3 class="card-title">Inquiry</h3> -->

                </div>
           
                <!-- /.card-header -->

                <!-- form start -->

                <form action="" id="" class="form-horizontal " method="post">
                <input type="hidden" name="id" value="<?= $edit_data->id?>">
                    <div class="card-body" style="padding-top: 14px;">
                      <div class="row">
                        <div class="col-md-12 col-lg-12">
                         <div class="row">
                            <div class="col-md-8">
                                
                                <label for="exampleInputFile"><i class="bi bi-pencil-square"></i> FollowUp Note:</label>
                            </div>
                            <div class="col-md-1">
                            <label for="exampleInputFile"><i class="bi bi-journal-album"></i> Mode:</label>
                            </div>
                            <div class="col-md-1">
                            <label for="exampleInputFile"><i class="bi bi-journal-album"></i> Status:</label>
                            </div>
                        
                            <div class="col-md-2" style="text-align: center;" >
                            <label for="exampleInputFile"  style=" margin-left: 16px;"><i class="bi bi-calendar-date-fill"></i> Next FollowUp Date:</label>
                            </div>

                            <?php
                            $followData = json_decode($edit_data->followup_note);
                           
                            if(isset($followData) && count($followData)>0 ){
                            foreach ($followData as $key => $value) {?>
                            
                          
                            <!-- show followup_note start -->
                            <div class="col-md-12 py-2"style="background:#f7973d2e;border-radius: 10px;" >
                              <!-- <span class="badge bg-per text-light"><?= $key+1?></span> -->
                              
                              <div class="row" >
                                  
                                  <div class="col-md-8 pt-2" >
                                    <i class="bi bi-alarm-fill"></i> <span class="badge bg-inverse-success p-2"><?= (isset($value->created_at))? date("d F Y h:i A", strtotime($value->created_at)):'N/A'?></span>
                                  
                                  <div class="form-group">
                                    
                                    <p class="ml-3"><?= $value->followup_note?></p>


                                  </div>
                                  
                                </div>
                                <div class="col-md-1 pt-2">
                                  <div class="form-group">
                                    <span class="badge bg-inverse-success"><?= (isset($value->enquery_mode))? $this->config->item('enquery_mode')[$value->enquery_mode]:"N/A"?></span>
                                  </div>
                                </div>
                                <div class="col-md-1 pt-2">
                                  <div class="form-group">
                                    <span class="badge bg-inverse-success"><?= $this->config->item('enquery_status')[$value->enquery_type]?></span>
                                  </div>
                                </div>
                                <div class="col-md-2 pt-2"style="text-align: right;" >
                                  
                                  <!-- <div class="form-group"> -->
                                    
                                 
                                    <span class="badge bg-inverse-warning p-2"><?= date("d F Y h:i A", strtotime($value->followup_date))?></span>
                                    
                                  <!-- </div> -->
                                  
                                </div>
                               
                            </div>

                            </div>
                          <hr>
                            <!-- show followup_note end  -->
                        <?php }?>
                        
                        <?php }?>
                    </div>
                    <!-- /.card-body -->
                    </form>
                    </div>
                    <!-- /.card -->
                    </div>
                    </div>
                       
          

        <!--/.col (left) -->

        <!-- right column -->

        <!--/.col (right) -->
    </div>

    <!-- /.row -->

</div>

<!-- /.container-fluid -->

</section>
<!-- third section end -->

</div>


<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 


<?php $this->load->view('footer'); ?>
