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

                    <h1 class="  ml-3" style=" text-align: left;">View Document</h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                      
                    <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/dashboard">Dashboard </a> </li>

                    <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/documents">Documents </a> </li>

                    <li class="breadcrumb-item"><a href="#">View Documents </a> </li>

                    <a href=""><li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/documents"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a> 

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
                                                    <th>Name </th>
                                                    <td>: <?= $edit_data->filename?></td>
                                                </tr>
                                                    <th>Created </th>
                                                    <td>: <?= $edit_data->created_at?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="table-responsiv1e">
                                            <table class="table table-bordered table-striped">
                                            <tr>
                                                    <th>Updated</th>
                                                    <td>: <?= $edit_data->updated_at?></td>
                                                </tr>

                                                <?php 
                                         $fileType = "";
                                         $fileExtension = "";
                                       if(isset($edit_data->image) && !empty($edit_data->image)){
                                         $fileInfo = pathinfo($edit_data->image);
                                         // Get the file extension
                                         $fileExtension = $fileInfo['extension'];
                                       }

                                                if($fileExtension == "docx"){
                                                    $fileType = '<img src="'.base_url().'assets/images/docx.png" style="width:48px"  alt="'.$edit_data->filename.'">';
                                                }else if($fileExtension == "xlsx"){
                                                    $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:48px"  alt="'.$edit_data->filename.'">';
                                                }else if($fileExtension == "xls"){
                                                    $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:48px"  alt="'.$edit_data->filename.'">';
                                                }else{
                                                    $fileType = '<img src="'.base_url().'assets/images/dummy.png" style="width:48px"  alt="'.$edit_data->filename.'">';
                                                }

                                                ?>
                                                <tr>
                                                    <th>View Image</th>
                                                    <td>: <a href="<?= base_url().$edit_data->image?>" target="_blank"><?= $fileType?></a></td>
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
                                <a href="<?= base_url()?>sub_admin/documents" class="btn-gradient-primary"><i class="bi bi-arrow-left-short"></i> Back</a>
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

