<style>
  hr{
    border: 1px solid #11b798 !important;
    width: 100%;
  }
</style>

<!-- Content Wrapper. Contains page content -->

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <p class="h3 mb-3"><img src="https://cdn-icons-png.flaticon.com/512/1160/1160515.png" style="width:5%"  > Edit Campaign</p>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/dashboard">Dashboard </a> </li>

                    <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/campaign">Documents </a> </li>

                    <li class="breadcrumb-item"><a href="#">Edit Documents </a> </li>

                    <a href=""> <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/campaign"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a>

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
                        <input type="hidden" name="id" value="<?= $edit_data->id?>">
                            <div class="card-body pb-0">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">
                                                          <!-- code for subject  -->
                                  <div class="col-md-4">

                                    <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-file-richtext-fill"></i> Subject*</label>

                                    <input type="text" name="subject" value="<?= $edit_data->subject?>" class="form-control" placeholder="Subject" required>

                                    </div>

                                    </div>
                                    <!-- end code for subject  -->

                                  <!-- code for Name  -->
                                  <div class="col-md-4">

                                  <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-file-break-fill"></i> File Name*</label>

                                    <input type="text" name="filename" value="<?= $edit_data->filename?>" class="form-control" placeholder="Enter Campaign Name" required>

                                  </div>

                                  </div>
                                  <!-- end code for Name  -->

                                  <!-- code for image  -->

                                  <div class="col-md-4">

                                  <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-cloud-upload text-info"></i> Upload*</label>

                                    <input type="hidden" name="old_image" value="<?= $edit_data->image?>">
                                    <input type="file" name="image" class="form-control" placeholder="Campaign image" accept=".webp, .jpg, .jpeg">

                                  </div>

                                  </div>
                                  <!-- end code for image  -->

                                  <!-- code for image  -->

                                  <div class="col-md-2">

                                  <div class="form-group">

                                    <label for="exampleInputFile"><i class="bi bi-eye"></i> View Image*</label>
                                      <br>
                                    <?php 
                                                $fileType = "";
                                                $fileExtension = "";
                                              if(isset($edit_data->image) && !empty($edit_data->image)){
                                                $fileInfo = pathinfo($edit_data->image);
                                                // Get the file extension
                                                $fileExtension = $fileInfo['extension'];
                                              }


                                                if($fileExtension == "docx"){
                                                    $fileType = '<img src="'.base_url().'assets/images/docx.png" style="width:88px;height:24px;"  alt="'.$edit_data->filename.'">';
                                                }else if($fileExtension == "xlsx"){
                                                    $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:88px;height:24px;"  alt="'.$edit_data->filename.'">';
                                                }else if($fileExtension == "xls"){
                                                    $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:88px;height:24px;"  alt="'.$edit_data->filename.'">';
                                                }else{
                                                    $fileType = '<img src="'.base_url().'assets/images/dummy.png" style="width:88px;height:24px;"  alt="'.$edit_data->filename.'">';
                                                }

                                                ?>


                                        <a href="<?=base_url().$edit_data->image?>" title="Click To View Full" target="_blank">
                                         <?= $fileType;?>
                                        </a> 
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


<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 
