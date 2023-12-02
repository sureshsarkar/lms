<?php $this->load->view('header'); ?>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-left"> Group Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Group Package</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          

            <div class="card">
              <div class="card-header">
              <?php if($this->session->flashdata('message')): ?>

                <div class="alert alert-success">

                  <button type="button" class="close" data-close="alert"></button>

                  <?php echo $this->session->flashdata('message'); ?>

                </div>

                <?php endif; ?>
                
                <div class="row">
                  <div class="col-md-2">
                    <h3 class="card-title" id="stat">      <a href="<?php echo base_url(); ?>admin/group_package/add" class="btn btn-info">ADD NEW</a>  </h3>
                  </div>
                  <div class="col-md-10">
                    <?php
                        if (!empty($univerhalDetails)) {
                            $action = 'Univarshalupdate';
                            $buttontype = 'Update';
                        } else {
                            $action = 'addUnivarshal';
                            $buttontype = 'Submit';
                        }
                        ?>
                    <form action="<?=base_url()?>admin/group_package/<?=$action?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12 mt-4">
                                        <?php echo form_error("update_at", "<span class='label label-danger'>", "</span>") ?>
                                        <label for="exampleInputFile">Univarsal Image (1980 * 525 PX  )</label>
                                        <input type="file" id="univarsalImage" name="univarsalImage"  />
                                    </div>
                                    <?php if (!empty($univerhalDetails)) {?>
                                    <input type="hidden" name="id" id="id" value="<?=$univerhalDetails->id?>">
                                    <div class="col-md-12 mt-4">
                                        <?php echo form_error("update_at", "<span class='label label-danger'>", "</span>") ?>
                                        <label for="exampleInputFile">Old Univarsal Image </label>
                                        <img src="<?=base_url()?>uploads/grouppackage/<?=$univerhalDetails->univarsalImage?>" class="img-fluid"alt="image">
                                        <input type="hidden" name="oldimage" id="oldimage" value="<?=$univerhalDetails->univarsalImage?>">
                                    </div>
                                    <?php }?>
                                    <div class="col-md-12 mt-2">
                                        <div class="img_prew2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="col-12 mt-4 col-md-12">
                                    <?php
                                        if (!empty($univerhalDetails->universal_content)) {
                                            $universal_content = base64_decode($univerhalDetails->universal_content);
                                        }
                                        ?>
                                    <label for="exampleInputFile">Visa   Universal  Description </label>
                                    <textarea class="form-control" id="package_description" name="package_description" placeholder="Visa Description..." value="<?=!empty($universal_content) ? $universal_content : ''?>"><?=!empty($universal_content) ? $universal_content : ''?></textarea>
                                    <button type="submit" class="btn btn-danger mt-2"> <?=$buttontype?> </button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <!-- <th><input onclick="toggle(this,'cbgroup1')" id="foo[]" name="foo[]" type="checkbox" value="" /></th> -->
                    <th>Sr No.</th>
                   

                    <th>Title</th>


                   <th>No. Days </th>
                   <th>No. Nights</th>

                   
                   

                    <th> Status</th>

                            

                 

                    <th> Created At</th>

                            

                  

                    <th> Update At</th>

                            

                        <th> Action </th>
                  </tr>
                  </thead>
                    <tbody>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Get Databse List -->


<script type="text/javascript">
    CKEDITOR.replace('package_description');
       //  code for univarsal images
       $('#univarsalImage').change(function(){
            $("#frames").html('');
            for (var i = 0; i < $(this)[0].files.length; i++) {
                $(".img_prew2").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100%" height="150px"/>');
            }
        });
       // end code for univarsal images
   function delRow()

   {

   var confrm = confirm("Are you sure you want to delete?");

   if(confrm)

   {

   ids = values();

   $.ajax({

     type:"POST",

     url:'<?php echo base_url()."admin/group_package/deleteAll"; ?>',

     data:{

       allIds : ids,

       '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'

     },

     success:function(){

       location.reload();

       },

     });

   }

   }

</script>
<!-- Get Databse List -->


<!-- Delete Script-->
<script type="text/javascript">
    jQuery(document).ready(function(){
        //$('#example').DataTable();
          jQuery(document).on("click", ".deletebtn", function(){
          var del_id = $(this).attr("data_id");
         
          hitURL="<?php echo base_url()."admin/group_package/delete"; ?>";
          var confirmation = confirm("Are you sure to delete this Place ?");
          if(confirmation)
          {
            $.ajax({
            type : 'POST',
            url :hitURL,
            data: {id:del_id}, 
            }).done(function(data){ 
              location.reload();
            });



          }
     });
    });
   
</script>
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#example').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/group_package/ajax_list')?>",
            "type": "POST"
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
});
</script>



    <?php $this->load->view('footer'); ?>