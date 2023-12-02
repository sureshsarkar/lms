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
    background: linear-gradient(to right, #da8cff, #9a55ff);
    font-size: 14px;
    padding: 10px 30px;
    color: #fff;
    border: 0;
    border-radius: 50px;
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
  .resbtn{
    cursor: pointer;
  }
</style>
<div class="content-wrapper">

<section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

        <div class="col-sm-6">

        <h1 class="  ml-3" style=" text-align: left;"><img src="         https://cdn-icons-png.flaticon.com/512/3262/3262401.png    " style="width:5%;"> Spam Inquiry</h1>

        </div>

        <!-- /.col -->

        <div class="col-sm-6">

        <ol class="breadcrumb float-sm-right ml-3">

        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Spam Inquiry</a></li>
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
                  <!-- <div class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Leads</div>
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
                  </div> -->
                  <!-- <h3 class="card-title m-2" id="stat"><a href="<?php echo base_url(); ?>admin/spam_leads/add" class="btn-gradient-primary">ADD NEW</a></h3> -->
                  <h3 class="card-title m-2 export-btn" onclick="exportTableToExcel('example')" id="stat"><a href="#" class="btn-gradient-primary"><i class="bi bi-download"></i> EXPORT</a></h3>
                  <h3 class="card-title m-2 deletByCheck resbtn"  ><a   class="btn-gradient-primary"> <i class="bi bi-archive"></i> DELETE ALL</a></h3>
                </div>
              </div>

              <!-- /.card-header -->

              <div class="card-body px-0">

                <table id="example" class="table table-bordered table-striped">

                  <thead>

                  <tr>

                    <!-- <th><input onclick="toggle(this,'cbgroup1')" id="foo[]" name="foo[]" type="checkbox" value="" /></th> -->

                    <th></th>
                    <th>Sr No.</th>

                    <th>Name</th>
                    
                    <th>Phone</th>

                    <th>Email</th>

                    <th>Sales Representative</th>

                    <th>Source</th>
                    
                    <th>Status</th>

                    <th>FollowUp</th>

                    <!-- <th>Lead Update</th> -->

                    <th>Lead Created</th>

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
        url = url + 'admin/spam_leads?type=' + sortBy;
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

     url:'<?php echo base_url()."admin/spam_leads/delete"; ?>',

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

     url:'<?php echo base_url()."admin/spam_leads/deleteAll"; ?>',

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

            "url": "<?php echo site_url('admin/spam_leads/ajax_list')?>"+ type,

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
        jQuery(document).on("click", ".moveToNotSpam", function(){
          var tableId = $(this).attr("data_id");
      //   alert(tableId);
      // return false;
          hitURL = "<?php echo base_url() ?>admin/spam_leads/moveToNotSpam";
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
                        // alert("successfully Moved"); 
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

<script>
  function reloadPage(){
    location.reload();
  }
  setInterval(reloadPage, 180000); // 180000 milliseconds = 1 minute

</script>

<?php $this->load->view('footer'); ?>

<!-- script to delete multiple -->
<script>
jQuery(document).ready(function() {

    $(".deletByCheck").attr('disabled', 'disabled');
    jQuery(document).on("click", ".checkbox", function() {
        var da = $("input:checkbox[name=checkbox]:checked");
        if (da.length != "") {
            jQuery(".deletByCheck").removeAttr("disabled");
        } else {
            $(".deletByCheck").attr('disabled', 'disabled');
        }
    });

    var allVals = [];
    jQuery(document).on("click", ".deletByCheck", function() {
        $("input:checkbox[name=checkbox]:checked").each(function() {
            allVals.push($(this).val());
        })
        if (allVals.length > 0) {
            var hitURL = "<?php echo base_url() ?>admin/spam_leads/deleteByCheck";
            $.ajax({
                type: 'POST',
                url: hitURL,
                data: {
                    allVals: allVals
                },
            }).done(function(res) {
                if (res == 1) {
                    alert("Deleted Successfully");
                    location.reload();
                }
            });
        }
    });
})
</script>