<?php $this->load->view('header'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<style>
.paginate_button {
    background: transparent;
}

.card-body {
    background-color: #f7f7f7 !important;
}

.dropdown-toggle {

    font-size: 11px;
    padding: 8px 5px;
    color: #000;
    background: white;
    border: 1px solid #ffffff;
    border-radius: 4px;
}

.leads {
    z-index: 99999;
}

.date_pic {
    padding: 6px;
    border-radius: 5px;
    background: #ffffff;
    border: 1px solid #eb7d4a;
    color: black;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
}

#dropdownMenuButton {
    text-align: center;

}

/* .table-bordered{
    width:auto !important;
    display: block;
    overflow-x: scroll;
    
  }
 .dataTables_length{
  text-align: left;
 } */
.imageIcon {
    width: 5%;
    height: 23px;
    cursor: pointer;
    border-top-width: 15px;
    margin-top: 8px;
    margin-left: 8px;
    border-left-width: 13px;
}

th {
    font-weight: 400;
}

/* .custom-select {
      background: linear-gradient(98deg, #de6057, #f7973d 94%) !important;
    color: white;
    text-align: center;
} */
</style>

<div class="content-wrapper">

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="  ml-3" style=" text-align: left;"><img
                            src="      https://cdn-icons-png.flaticon.com/512/2471/2471120.png   " style="width:5%;">
                        View Customers</h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right ml-3">

                        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="#">View Customers</a></li>

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

                        <!-- <div class="card-header  "> -->

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
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="dropdown">
                                            <h3 class="card-title m-2" id="stat"><a
                                                    href="<?= base_url(); ?>admin/knowledge_base/add"
                                                    class="btn-gradient-primary textCol"><i
                                                        class="bi bi-plus-square"></i> Add New</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        <!-- </div> -->
                        <div class="row mb-2">


                            <!-- /.card-header -->

                            <div class="card-body">

                                <table id="example" class="table table-bordered table-striped">

                                    <thead>
                                        <tr>

                                            <!-- <th><input onclick="toggle(this,'cbgroup1')" id="foo[]" name="foo[]" type="checkbox" value="" /></th> -->

                                            <th>No.</th>

                                            <th>Name</th>

                                            <th>Phone</th>

                                            <th>Email</th>

                                            <th>City</th>

                                            <th>Country</th>

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
        url = url + 'admin/view_customer?type=' + sortBy;
        window.location.href = url;

    })

});
</script>


<script type="text/javascript">
function delsingleRow(id)

{

    var confrm = confirm("Are you sure you want to delete?");

    if (confrm)

    {

        $.ajax({

            type: "POST",

            url: '<?php echo base_url()."admin/view_customer/delete"; ?>',

            data: {

                id: id,

            },

            success: function(response) {

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

    <?php
         $from_date = isset($_GET['from_date'])?'&from_date='.$_GET['from_date']:"";
         $to_date = isset($_GET['to_date'])?'&to_date='.$_GET['to_date']:"";
         $type = isset($_GET['type'])?'type='.$_GET['type']:"";
    ?>
    var getpayment_data =
        "<?php echo  isset($_GET['daterange'])?'?daterange='.$_GET['daterange'].$from_date.$to_date."&".$type:"?".$type?>";


    table = $('#example').DataTable({

        "processing": true, //Feature control the processing indicator.

        "serverSide": true, //Feature control DataTables' server-side processing mode.

        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('admin/view_customer/ajax_list')?>" + getpayment_data,

            "type": "POST"

        },

        //Set column definition initialisation properties.

        "columnDefs": [

            {

                "targets": [0], //first column / numbering column

                "orderable": false, //set not orderable

            },

        ],

    });

});
</script>

<?php $this->load->view('footer'); ?>
