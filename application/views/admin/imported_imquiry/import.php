

<?php $this->load->view('header'); ?>

<style>
  .boxWidth{
    width: 600px;
    margin: auto;
  }
  .form-control {
    display: block;
    width: 60% !important;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

<div class="container-fluid">

    <div class="row mb-2">

        <div class="col-sm-6">

            <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/1091/1091007.png  " style="width:5%;"> Import</h1>

        </div>

        <!-- /.col -->

        <div class="col-sm-6">

        <ol class="breadcrumb float-sm-right ml-3">

              <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url()?>admin/enquery">Imported Inquiry</a></li>
              <li class="breadcrumb-item"><a href="#">Import</a></li>
              <a href=""><li class="breadcrumb-item"><a href="<?= base_url()?>admin/enquery"> <span aria-hidden="true" class="crossbtn">&times;</span></a></li></a> 
        </ol>

        </div>

        <!-- /.col -->

    </div>

    <!-- /.row -->

</div>

<!-- /.container-fluid -->

</div>



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

       

        <!-- START ALERTS AND CALLOUTS -->

        <!-- <h5 class="mt-4 mb-2">View hotel_category</h5> -->



        <div class="row">

          

          <div class="col-md-12">

            <div class="card card-default">

              <div class="card-header">

                <h3 class="card-title">

                  <i class="fas fa-bullhorn"></i>

                    

                </h3>

              </div>

              <!-- /.card-header -->

              <div class="card-body boxWidth">

                <form action="<?= base_url()?>admin/imported_imquiry/excelSheet" class="form-horizontal " method="post" enctype="multipart/form-data">

                    <label for="text">Upload Excel Sheet</label>
                    <input type="file" name="excel_file" class="form-control" accept=".xls,.xlsx">
                    <input type="hidden" name="type" value="1">
                    <div class="text-center">
                      <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>

                </form>

              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->

          </div>

          <!-- /.col -->

        </div>

        </div>

        <!-- /.row -->

        <!-- END TYPOGRAPHY -->

      </div><!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->
    
  <?php $this->load->view('footer'); ?>