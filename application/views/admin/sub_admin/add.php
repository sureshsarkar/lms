<style>
  hr{
    border-top: 2px solid #0a4297 !important;
  }
  #show-password {
  float: right;
    z-index: 99999;
    margin-top: -26px;
    margin-right: 10px;
    color: gray;
    cursor: pointer;
    font-size: 1rem;
}
</style>
<?php $this->load->view('header'); ?>
<?php $coloraArray = ['#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4','#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4'];?>

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>
<!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen.css"> -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/1165/1165674.png  " style="width:5%;"> Add Sub Admin</h1>
 
                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right ml-3">

                <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
                
                <li class="breadcrumb-item"><a href="<?= base_url()?>admin/sub_admin">Add Sub Admin</a></li>
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

                                        <label for="exampleInputFile"><i class="bi bi-person-check-fill text-info"></i> Name*</label>

                                        <input type="text" name="name" class="form-control" placeholder="Enter Sub Admin Name" required>

                                      </div>

                                    </div>
                                    <!-- end code for Name  -->

                                    <!-- code for Email  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-envelope-open text-info"></i> Email*</label>

                                        <input type="text" name="email" class="form-control" placeholder="Enter Sub Admin Email" required>

                                      </div>

                                    </div>
                                    <!-- end code for Email  -->

                                    <!-- code for Phone  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-telephone text-info"></i> Phone*</label>

                                        <input type="number" name="phone" class="form-control" placeholder="Enter Sub Admin Phone" required>

                                      </div>

                                    </div>
                                    <!-- end code for Phone  -->

                                    <!-- code for password  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-file-lock text-info"></i> Password*</label>

                                        <input type="password" value="" name="password" id="password" class="form-control" placeholder="Enter Password" required autocomplete="off"><span id="show-password"><i class="bi bi-eye-fill"></i></span>

                                      </div>

                                    </div>
                                    <!-- end code for password  -->

                                    <!-- code for status  -->
                                    <!-- <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile"><i class="bi bi-people text-info"></i> Role</label>

                                        <select name="role" id="status" class="form-control">

                                            <option value="1">Contact Type Admin</option>
                                            <option value="2">Career Type Admin</option>

                                        </select>

                                      </div>

                                    </div> -->
                                    <!-- end code for status  -->

                                </div>

                               
                                </div>
                              </div>
                              <br>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn-gradient-primary textCol px-4">Submit</button>
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
    const passwordInput = document.getElementById("password");
    const showPasswordButton = document.getElementById("show-password");

      showPasswordButton.addEventListener("click", () => {
        if (passwordInput.type === "password"){
          passwordInput.type = "text";
        $(".bi-eye-fill").addClass('bi-eye-slash');
        $(".bi-eye-fill").removeClass('bi-eye-fill');
        } else {
          passwordInput.type = "password";
          $(".bi-eye-slash").addClass('bi-eye-fill');
        $(".bi-eye-slash").removeClass('bi-eye-slash');
        }
      });
</script>