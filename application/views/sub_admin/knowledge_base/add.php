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

                    <p class="h2 ml-3"> <i class="bi bi-book-half"></i> Add Knowledge Base Data</p>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/dashboard">Dashboard </a> </li>

                        <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/dashboard">Add Knowledge </a> </li>

                        <a href=""><li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/knowledge_base"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a> 

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

                            <h3 class="card-title">
                            Add Knowledge Base Data
                            </h3>

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action=""  class="form-horizontal " method="post" enctype= multipart/form-data>

                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">

                                    <!-- code for Name  -->
                                    <div class="col-md-6">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-file-break-fill"></i> File Name*</label>

                                        <input type="text" name="filename" class="form-control" placeholder="File Name" required>

                                      </div>

                                    </div>
                                    <!-- end code for Name  -->

                                    <!-- code for image  -->
                                    
                                    <div class="col-md-6">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-cloud-upload"></i> Upload*</label>

                                        <input type="file" name="image" class="form-control" placeholder="Upload File" required>

                                      </div>

                                    </div>
                                    <!-- end code for image  -->
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

<script>
  $(document).ready(function(){
    $('.showFollowup').click(function(){
      var data = $(this).attr('data-val');
      // alert(data);
        if(data == 0){
          $(".addFollow").removeClass('d-none');
          $(this).attr('data-val','1');
          $(this).html('-');
        }else{
          $(".addFollow").addClass('d-none');
          $(this).attr('data-val','0');
          $(this).html('+');
        }
});
    
   
  })
</script>