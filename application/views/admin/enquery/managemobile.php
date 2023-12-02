<?php $this->load->view('header'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
  .paginate_button{
        background: transparent;
  }
  .dropdown-toggle{
    align-items: center;
    font-weight: 600 !important;
    background-color: initial;
    background-image: linear-gradient(#464d55, #25292e);
    border-radius: 5px;
    border-width: 0;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .1), 0 3px 6px rgba(0, 0, 0, .05);
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    font-family: expo-brand-demi,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 11px;
    /* height: 40px; */
    justify-content: center;
    line-height: 1;
    margin: 0;
    outline: none;
    overflow: hidden;
    /* padding: 12px; */
    text-align: center;
    text-decoration: none;
    transform: translate3d(0, 0, 0);
    transition: all 150ms;
    vertical-align: baseline;
    white-space: nowrap;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    margin-left: 7px;
    /* margin-top: 1px; */
    padding: 11px 4px !important;
    margin-top: 3px !important;
    margin-right: 7px !important;
  }
  .leads{
    z-index: 99999;
  }
  #dropdownMenuButton{
    text-align: center;

  }
  .table-bordered{
    width:auto !important;
    display: block;
    overflow-x: scroll;
    
  }
  .content-wrapper>.content {
    padding-left: 0px !important;
}
 
.card-title{
  margin-left: 10px !important;
    margin-top: 6px !important;
}
#example_filter{
  text-align: left !important;
}

.dataTables_length{
  text-align: left !important;
}
.btn-gradient-primary {
  align-items: center;
    background-color: initial;
    background-image: linear-gradient(#464d55, #25292e);
    border-radius: 8px;
    border-width: 0;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .1), 0 3px 6px rgba(0, 0, 0, .05);
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    font-family: expo-brand-demi,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 10px !important;
    height: 52px;
    justify-content: center;
    line-height: 1;
    margin: 0;
    outline: none;
    overflow: hidden;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    transform: translate3d(0, 0, 0);
    transition: all 150ms;
    vertical-align: baseline;
    white-space: nowrap;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
}

</style>
<div class="content-wrapper">

<div class="content-header">

<div class="container-fluid">

    <div class="row mb-2">

        <div class="col-sm-6">

            <h1 class="  ml-3" style=" text-align: left;"><img src="   https://cdn-icons-png.flaticon.com/512/2139/2139551.png  " style="width:5%;"> Manage Inquiry</h1>

        </div>

        <!-- /.col -->

        <div class="col-sm-6">

        <ol class="breadcrumb float-sm-right ml-3">

              <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url()?>admin/enquery">Inquiry</a></li>
              <li class="breadcrumb-item"><a href="#">Manage Inquiry</a></li>
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

        <div class="row">

          <div class="col-12">

            <div class="card">

              <div class="card-header px-1 py-3">

              <?php if($this->session->flashdata('success')): ?>

              <div class="alert alert-success">

                <button type="button" class="close" data-close="alert"></button>

                <?php echo $this->session->flashdata('success');unset($_SESSION['success']) ?>

              </div>

              <?php endif; ?>

              <!-- for failed message  -->
              <?php if($this->session->flashdata('failed')): ?>

              <div class="alert alert-danger">

              <button type="button" class="close" data-close="alert"></button>

              <?php echo $this->session->flashdata('failed'); unset($_SESSION['failed']) ?>

              </div>

              <?php endif; ?>
              <div class="d-flex flex-row">
                <div class="dropdown">
                  <div class="dropdown-toggle" title="View Lead By Filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL LEADS</div>
                    <div class="dropdown-menu leads " aria-labelledby="dropdownMenuButton">
                      <ul>
                        <li class="clickCase" data-value="all">All</li>
                        <li class="clickCase" data-value="1">Website</li>
                        <li class="clickCase" data-value="2">WhatsApp</li>
                        <li class="clickCase" data-value="3">Online Chat</li>
                        <li class="clickCase" data-value="4">Direct Call</li>
                        <li class="clickCase" data-value="5">Reference</li>
                        <li class="clickCase" data-value="e0">New Leads</li>
                        <li class="clickCase" data-value="e1">FollowUp Leads</li>
                        <li class="clickCase" data-value="e2">Not Interested</li>
                        <li class="clickCase" data-value="e3">Converted Leads</li>
                        <li class="clickCase" data-value="e4">In Process</li>
                        <li class="clickCase" data-value="e5">Low Budget</li>
                        <li class="clickCase" data-value="e6">Job Enquiry</li>
                        <li class="clickCase" data-value="t5">Top 5 Leads</li>
                        <li class="clickCase" data-value="today">Today FollowUp</li>
                        <li class="clickCase" data-value="e7">Spam</li>
                      </ul>
                    </div>
                  </div>
                  <h3 class="card-title " title="Add new inquiry" id="stat"><a href="<?php echo base_url(); ?>admin/enquery/add" class="btn-gradient-primary">ADD NEW</a></h3>
                  <h3 class="card-title  export-btn" title="Export in Excel" onclick="exportTableToExcel('example')" id="stat"><a href="#" class="btn-gradient-primary"><i class="bi bi-download"></i> EXPORT</a></h3>
                  <h3 class="card-title  sendEmail" title="Send Email For Festival" id="stat"><a href="#" class="btn-gradient-primary"><i class="bi bi-envelope-open-heart"></i> SEND EMAIL</a></h3>
                </div>
              </div>

              <!-- /.card-header -->

              <div class="card-body ">

                <table id="example" class="table table-bordered table-striped">

                  <thead>

                  <tr>

                    <!-- <th><input onclick="toggle(this,'cbgroup1')" id="foo[]" name="foo[]" type="checkbox" value="" /></th> -->

                    <th>Sr No.</th>

                    <th>Name</th>
                    
                    <!-- <th>Lead IP</th> -->

                    <!-- <th>City</th> -->

                    <!-- <th>Phone</th> -->

                    <!-- <th>Email</th> -->

                    <!-- <th>Rep.</th> -->

                    <!-- <th>Source</th> -->
                    
                    <!-- <th>Status</th> -->

                    <th>FollowUp</th>

                    <!-- <th>Lead Update</th> -->

                    <!-- <th>Lead Created</th> -->

                    <th>Action</th>

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

<script>
// get lawyer list by click the active,pending& new  

$(document).ready(function() {
    $(".clickCase").click(function() {
        var sortBy = $(this).attr("data-value");
        var url = "<?php echo base_url();?>";
        url = url + 'admin/enquery?type=' + sortBy;
        window.location.href = url;

    })

});
</script>

<script type="text/javascript">

   function delsingleRow(id)

   {

   var confrm = confirm("Are you sure you want to delete?");

   if(confrm)

   {

   $.ajax({

     type:"POST",

     url:'<?php echo base_url()."admin/enquery/delete"; ?>',

     data:{

       id : id,

     },

     success:function(response){

       location.reload();

       },

     });

   }

   }

</script>

<script type="text/javascript">

   function delRow()

   {

   var confrm = confirm("Are you sure you want to delete?");

   if(confrm)

   {

   ids = values();

   $.ajax({

     type:"POST",

     url:'<?php echo base_url()."admin/enquery/deleteAll"; ?>',

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

<script type="text/javascript">

var table;

$(document).ready(function() {

    //datatables
    var type = "<?php echo  isset($_GET['type'])?'?type='.$_GET['type']:''?>";

    table = $('#example').DataTable({ 

        "processing": true, //Feature control the processing indicator.

        "serverSide": true, //Feature control DataTables' server-side processing mode.

        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('admin/enquery/mobile_ajax_list')?>"+ type,

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



<!-- assignBtn Script-->
<script type="text/javascript">
    jQuery(document).ready(function(){
        //$('#example').DataTable();
        jQuery(document).on("click", ".moveToSpam", function(){
          var tableId = $(this).attr("data_id");
      //   alert(tableId);
      // return false;
          hitURL = "<?php echo base_url() ?>admin/enquery/moveToSpam";
          var confirmation = confirm("Are you sure to move to spam this lead ?");
          if(confirmation)
          {
            $.ajax({
                    type: "POST",
                    url: hitURL,
                    data: {id:tableId}, // serializes the form's elements.
                    success: function(data)
                    {
                      if(data.status = true) { 
                        location.reload();
                      }else if(data.status = false) {
                       alert("Failed to assign");
                       }else { 
                        alert("Access denied..!"); 
                      }
                    }
                  });
          }
       });
    });
   
</script>


<!-- send Email Script-->
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(document).on("click", ".sendEmail", function(){
          hitURL = "<?php echo base_url() ?>admin/enquery/sendEmail";
          var confirmation = confirm("Are you sure to send email to every lead user ?");
          if(confirmation)
          {
            $.ajax({
                    type: "POST",
                    url: hitURL,
                    data: {sendEmail:"1"}, // serializes the form's elements.
                    success: function(data)
                    {
                      alert(data);
                        location.reload();
                    }
                  });
          }
       });
    });
   
</script>


<!-- script to download excel sheet  -->

<script src="<?php echo base_url() ?>assets/js/tableHTMLExport.js"></script>

<script>
  $('.export-btn').on('click', function(){
    var wb = XLSX.utils.table_to_book(document.getElementById('example'),{sheet: "enquiry"})

    var wbout = XLSX.write(wb, {bookType: 'xlsx', bookSST: true, type: 'binary'});

    function s2ab(s) {
      var buf = new ArrayBuffer(s.length);
      var view = new Uint8Array(buf);
      for (var i = 0; i < s.length; i++) {
        view[i] = s.charCodeAt(i) & 0xFF;
      }
      return buf;
    }

    saveAs(new Blob([s2ab(wbout)], {type:"application/octet-stream"}), 'inquiryl-list.xlsx');
  })
</script>



<!-- <script>
  function reloadPage(){
    location.reload();
  }
  setInterval(reloadPage, 180000); // 180000 milliseconds = 3 minute

</script> -->



<?php $this->load->view('footer'); ?>



