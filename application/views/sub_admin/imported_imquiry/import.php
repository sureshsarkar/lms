<style>
  .boxWidth{
    width: 600px;
    margin: auto;
  }
</style>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <p class="h2 ml-2"> <i class="bi bi-cloud-upload"></i> Import Excel File</p>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item">Dashboard</li>

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



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

                <form action="<?= base_url()?>sub_admin/imported_imquiry/excelSheet" class="form-horizontal " method="post" enctype="multipart/form-data">

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
    