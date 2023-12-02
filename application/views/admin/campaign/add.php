<?php $this->load->view('header'); ?>

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

                    <p class="h3 mb-3"><i class="bi bi-cloud-plus-fill text-info"></i> Add Campaign</p>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/campaign">Campaign</a></li>
                        <li class="breadcrumb-item"><a href="#">Add Campaign</a></li>
                        <a href=""><li class="breadcrumb-item"><a href="<?= base_url()?>admin/campaign"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a> 

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

                            <!-- <h3 class="card-title">Edit Campaign 

                            </h3> -->

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action=""  class="form-horizontal " method="post" enctype= multipart/form-data>
                            <div class="card-body pb-0">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">
                                       <!-- code for subject  -->
                                  <div class="col-md-4">

                                    <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-file-richtext-fill text-info"></i> Subject*</label>

                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>

                                    </div>

                                    </div>
                                    <!-- end code for subject  -->

                                  <!-- code for Name  -->
                                  <div class="col-md-4">

                                  <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-file-break-fill text-info"></i> File Name*</label>

                                    <input type="text" name="filename" class="form-control" placeholder="File" required>

                                  </div>

                                  </div>
                                  <!-- end code for Name  -->

                                  <!-- code for image  -->

                                  <div class="col-md-4">

                                  <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-cloud-upload text-info"></i> Upload*</label>

                                    <input type="file" name="image" class="form-control" placeholder="Upload image" accept=".webp, .jpg, .jpeg" required >

                                  </div>

                                  </div>
                                  <!-- end code for image  -->
                                    </div>
                                  </div>
                                </div>
                                <br>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn-gradient-primary px-3">Submit</button>
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

<?php $this->load->view('footer'); ?>

<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 
