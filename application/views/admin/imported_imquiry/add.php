<style>
  hr{
    border: 1px solid #11b798 !important;
    width: 100%;
  }
</style>
<?php $this->load->view('header'); ?>

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

                <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/2921/2921226.png  " style="width:5%;"> Add Inquiry</h1>


                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right m-2">

                    <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url()?>admin/imported_imquiry">Inquiry</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Inquiry</a></li>
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

                        <!-- </div> -->
                   
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

                                        <label for="exampleInputFile">Name*</label>

                                        <input type="text" name="name" class="form-control" placeholder="Enter Inquiry Name" required>

                                      </div>

                                    </div>
                                    <!-- end code for Name  -->

                                    <!-- code for Email  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Email*</label>

                                        <input type="text" name="email" class="form-control" placeholder="Enter Inquiry Email" required>

                                      </div>

                                    </div>
                                    <!-- end code for Email  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Phone*</label>

                                        <input type="number" name="phone" class="form-control" placeholder="Enter Inquiry Phone" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">City*</label>

                                        <input type="text" name="city" class="form-control" placeholder="Enter Inquiry city" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">State*</label>

                                        <input type="text" name="state" class="form-control" placeholder="Enter Inquiry state" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Platform*</label>

                                        <input type="text" name="platform" class="form-control" placeholder="Enter Inquiry platform" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Preference*</label>

                                        <input type="text" name="preference" class="form-control" placeholder="Enter Inquiry preference" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Campaign Name</label>

                                        <input type="text" name="campaign_name" class="form-control" placeholder="Enter Inquiry campaign name">

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Campaingn date</label>

                                        <input type="date" name="campaingn_date" class="form-control" placeholder="Enter Inquiry campaingn date" >

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-4">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Interested For</label>

                                        <input type="text" name="interested_for" class="form-control" placeholder="Enter Inquiry Interested">

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

<?php $this->load->view('footer'); ?>

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