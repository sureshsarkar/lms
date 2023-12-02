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

</style>

<div class="content-wrapper">

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="  ml-3" style=" text-align: left;"><img
                            src="    https://cdn-icons-png.flaticon.com/512/1165/1165674.png  " style="width:5%;"> Sub
                        Admin</h1>
                </div>

                <!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right ml-3">

                        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Sub Admin</a></li>
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

                        <div class="card-header  ">

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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="dropdown">
                                            <!-- <h3 class="card-title m-2" id="stat"><a href="<?= base_url(); ?>admin/knowledge_base/add" class="btn-gradient-primary textCol"><i class="bi bi-plus-square"></i> Add New</a></h3> -->
                                            <h3 class="card-title" id="stat"> <a
                                                    href="<?php echo base_url(); ?>admin/sub_admin/add"
                                                    class="btn-gradient-primary textCol"> <i
                                                        class="bi bi-file-plus"></i> ADD
                                                    NEW</a></h3>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-2">


                            <!-- /.card-header -->

                            <div class="card-body">

                                <table id="example" class="table table-bordered table-striped">

                                    <thead>
                                        <tr>

                                            <th>Sr No.</th>

                                            <th>Name</th>

                                            <th>System IP</th>

                                            <th>Email </th>

                                            <th> Role</th>

                                            <th> Status</th>

                                            <th>Last Login</th>

                                            <th> Created At</th>

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

<script type="text/javascript">
function delsingleRow(id)

{

    var confrm = confirm("Are you sure you want to delete?");

    if (confrm)

    {

        $.ajax({

            type: "POST",

            url: '<?php echo base_url()."admin/sub_admin/delete"; ?>',

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
function delRow()

{

    var confrm = confirm("Are you sure you want to delete?");

    if (confrm)

    {

        ids = values();

        $.ajax({

            type: "POST",

            url: '<?php echo base_url()."admin/sub_admin/deleteAll"; ?>',

            data: {

                allIds: ids,

                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'

            },

            success: function() {

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

    table = $('#example').DataTable({

        "processing": true, //Feature control the processing indicator.

        "serverSide": true, //Feature control DataTables' server-side processing mode.

        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('admin/sub_admin/ajax_list')?>",

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

<!-- Delete Script-->
<script type="text/javascript">
jQuery(document).ready(function() {
    //$('#example').DataTable();
    jQuery(document).on("click", ".deletebtn", function() {
        var tableId = $(this).attr("data_id");
        currentRow = $(this);
        hitURL = "<?php echo base_url() ?>admin/sub_admin/delete";
        var confirmation = confirm("Are you sure to delete this banners ?");
        if (confirmation) {
            $.ajax({
                type: "POST",
                url: hitURL,
                data: {
                    id: tableId
                }, // serializes the form's elements.
                success: function(data) {
                    currentRow.parents('tr').remove();
                    if (data.status = true) {
                        alert("successfully deleted");
                    } else if (data.status = false) {
                        alert("deletion failed");
                    } else {
                        alert("Access denied..!");
                    }
                }
            });
        }
    });
});
</script>


<script>
function reloadPage() {
    location.reload();
}
setInterval(reloadPage, 180000); // 180000 milliseconds = 1 minute
</script>

<?php $this->load->view('footer'); ?>