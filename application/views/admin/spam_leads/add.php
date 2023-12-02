<style>
  hr{
    border-top: 2px solid #0a4297 !important;
  }
</style>
<?php $this->load->view('header'); ?>
<?php $coloraArray = ['#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4','#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4'];?>

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

                    <h1 class="m-0">Sub Admin</h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active">Dashboard </li>
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

                        <div class="card-header">

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 

                            <h3 class="card-title">Add Sub Admin 

                            </h3>

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action="" id="" class="form-horizontal " method="post">

                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">

                                    <!-- code for Name  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Name*</label>

                                        <input type="text" name="name" class="form-control" placeholder="Enter Sub Admin Name" required>

                                      </div>

                                    </div>
                                    <!-- end code for Name  -->

                                    <!-- code for Email  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Email*</label>

                                        <input type="text" name="email" class="form-control" placeholder="Enter Sub Admin Email" required>

                                      </div>

                                    </div>
                                    <!-- end code for Email  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Phone*</label>

                                        <input type="number" name="phone" class="form-control" placeholder="Enter Sub Admin Phone" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for password  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Password*</label>

                                        <input type="password" value="" name="password" class="form-control" placeholder="Enter Password" required>

                                      </div>

                                    </div>
                                    <!-- end code for password  -->

                                    <!-- code for status  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Role</label>

                                        <select name="role" id="status" class="form-control">

                                            <option value="1">Contact Type Admin</option>
                                            <option value="2">Career Type Admin</option>

                                        </select>

                                      </div>

                                    </div>
                                    <!-- end code for status  -->

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

<?php $this->load->view('footer'); ?>

<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 

