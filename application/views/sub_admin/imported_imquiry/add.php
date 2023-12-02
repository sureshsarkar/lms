<style>
  hr{
    border: 1px solid #11b798 !important;
    width: 100%;
  }
</style>

<!-- Content Wrapper. Contains page content -->

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>

<div class="content-wrapper">
<!-- ================ -->

<!-- ================ -->
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <p class="h3 mb-3"><img src="https://cdn-icons-png.flaticon.com/512/1160/1160515.png" style="width:5%"  > Add Inquiry</p>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/imported_imquiry') ?>">Inquiry</a></li>
                        <a href=""><li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/imported_imquiry"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a> 

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

                            <!-- <h3 class="card-title">Edit Inquiry 

                            </h3> -->

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action=""  class="form-horizontal " method="post">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">

                                    <!-- code for Name  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-person-check-fill text-info"></i> Name*</label>

                                        <input type="text" name="name" class="form-control" placeholder="  Name" required>

                                      </div>

                                    </div>
                                    <!-- end code for Name  -->

                                    <!-- code for Email  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-envelope-open text-info"></i> Email*</label>

                                        <input type="text" name="email" class="form-control" placeholder="Email" required>

                                      </div>

                                    </div>
                                    <!-- end code for Email  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-telephone text-info"></i> Phone*</label>

                                        <input type="number" name="phone" class="form-control" placeholder=" Phone" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-pin-map-fill text-info"></i> City*</label>

                                        <input type="text" name="city" class="form-control" placeholder="City" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-globe-central-south-asia text-info"></i> State*</label>

                                        <input type="text" name="state" class="form-control" placeholder="State" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-input-cursor-text text-info"></i> Platform*</label>

                                        <input type="text" name="platform" class="form-control" placeholder="Platform" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-sliders text-info"></i> Preference*</label>

                                        <input type="text" name="preference" class="form-control" placeholder="Preference" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-graph-up-arrow text-info"></i> Campaign Name</label>

                                        <input type="text" name="campaign_name" class="form-control" placeholder="Campaign name">

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-calendar-check text-info"></i> Campaingn date</label>

                                        <input type="text" name="campaingn_date" class="form-control" placeholder="Campaingn date" >

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-file-earmark-person text-info"></i> Interested For</label>

                                        <input type="text" name="interested_for" class="form-control" placeholder="Interested">

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    
                                    </div>
                                  </div>
                                </div>
                                <br>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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
