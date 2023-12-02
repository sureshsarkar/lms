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

.dropdown-toggle {

    font-size: 13px;
    padding: 8px 10px 8px 10px;
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

.table-bordered {
    width: auto !important;
    display: block;
    overflow-x: scroll;

}

.dataTables_length {
    text-align: left;
}

.imageIcon {
    width: 5%;
    height: 23px;
    cursor: pointer;
    border-top-width: 15px;
    margin-top: 8px;
    margin-left: 8px;
    border-left-width: 13px;
}

/* .card-body{
  max-width: 1300px;
} */
/* .custom-select {
      background: linear-gradient(98deg, #de6057, #f7973d 94%) !important;
    color: white;
    text-align: center;
} */
th {
    font-weight: 400;
}

@media screen and (min-width: 361px) and (max-width: 414px) {
    .smnone {
        display: none;
    }

    .mthirty {
        margin-top: 30px !important;
    }

    .resrt {
        justify-content: flex-start !important;
        margin-left: -8px !important;
    }
}

@media screen and (max-width: 360px) {
    .smnone {
        display: none;
    }

    .mthirty {
        margin-top: 30px !important;
    }

    .resrt {
        justify-content: flex-start !important;
        margin-left: -8px !important;
    }
}

@media (min-width: 1340px) {
    .bignone {
        display: none;
    }
}



.button-62 {
    background: #24446b;
    border: 0;
    border-radius: 12px;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 2.5;
    outline: transparent;
    padding: 0 1rem;
    text-align: center;
    text-decoration: none;
    transition: box-shadow .2s ease-in-out;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
}

.button-62:not([disabled]):focus {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
    box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}
</style>

<div class="content-wrapper">


    <!-- Main content -->
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class=" ml-3 left" style="    font-weight: 400;">View All Leads<img
                            src="<?= base_url()?>assets/images/eye.gif" class="resgif" alt="" style="
width: 10%;
"></h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right ml-3">

                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/dashboard') ?>">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/dashboard') ?>">View All Lead</a>
                        </li>

                    </ol>

                </div>

                <!-- /.col -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </div>
    <section class="content1">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 col-sm-12">

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

                                            <div class="dropdown-toggle button-62" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                    class="fa fa-bullhorn" aria-hidden="true"></i> ALL LEADS</div>
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
                                                    <li class="clickCase" data-value="b">Bookmark</li>
                                                    <li class="clickCase" data-value="e7">Spam</li>
                                                </ul>
                                            </div>
                                        </div>
                                      <?php if(!isset($_SESSION['isLoggedInSubAdmin'])){?>
                                        <h3 class="card-title m-2 export-btn" onclick="exportTableToExcel('example')"
                                            id="stat">
                                            <a style="margin-top: -8px;" href="<?= base_url(); ?>sub_admin/enquery"
                                                class="button-62 textCol"><i class="bi bi-download"></i> EXPORT</a>
                                        </h3>
                                      <?php }?>
                                    </div>
                                </div>
                                <div class="col-md-6 mthirty">
                                    <div class="d-flex resrt" style="justify-content: end;">
                                        <span style="margin-left:10px;">
                                            <input type="Date" class="  date_pic from_date" placeholder="To Date">
                                        </span>
                                        <span style="margin-left:10px;color:black;">To</span>
                                        <span style="margin-left:10px;">
                                            <input type="Date" class=" date_pic to_date" placeholder="To Date">

                                        </span>
                                        <h3 class="card-title smnone " id="stat"
                                            style="margin-left: 9px; margin-top: 4px;"><a href="#"
                                                class="btn-gradient-primary textCol find_by_date"><i
                                                    class="fa-solid fa-magnifying-glass"></i> SEARCH
                                                LEADS</a></h3>
                                        <h3 class="card-title bignone  " id="stat"
                                            style="margin-left: 9px; margin-top: 4px;"><a href="#"
                                                class="btn-gradient-primary textCol find_by_date"><i
                                                    class="fa-solid fa-magnifying-glass"></i></a></h3>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row mb-2">

                        <!-- /.card-header -->
                        <div class="col-md-12 col-sm-12">
                            <div class="card-body p-0">

                                <table id="example" class="table table-bordered table-striped">

                                    <thead>
                                        <tr>

                                            <th>No.</th>

                                            <th> </th>

                                            <th>Name</th>


                                            <th>Phone</th>

                                            <th>Email</th>

                                            <th>Executive</th>

                                            <th>Source</th>

                                            <th>Status</th>

                                            <th>Follow</th>

                                            <!-- <th>Update</th> -->

                                            <th>Created</th>
                                            <!-- <th>Lead IP</th> -->

                                            <th>City</th>


                                            <th>Action</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                    </tbody>

                                </table>

                            </div>

                            <!-- /.card-body -->
                        </div>
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


<!-- script to download excel sheet  -->

<script src="<?php echo base_url() ?>assets/js/tableHTMLExport.js"></script>

<script>
$('.export-btn').on('click', function() {
    var wb = XLSX.utils.table_to_book(document.getElementById('example'), {
        sheet: "enquiry"
    })

    var wbout = XLSX.write(wb, {
        bookType: 'xlsx',
        bookSST: true,
        type: 'binary'
    });

    function s2ab(s) {
        var buf = new ArrayBuffer(s.length);
        var view = new Uint8Array(buf);
        for (var i = 0; i < s.length; i++) {
            view[i] = s.charCodeAt(i) & 0xFF;
        }
        return buf;
    }

    saveAs(new Blob([s2ab(wbout)], {
        type: "application/octet-stream"
    }), 'inquiryl-list.xlsx');
})
</script>

<script>
// get lawyer list by click the active,pending& new  

$(document).ready(function() {
    $(".clickCase").click(function() {
        var sortBy = $(this).attr("data-value");
        var url = "<?php echo base_url();?>";
        url = url + 'sub_admin/enquery?type=' + sortBy;
        window.location.href = url;

    })

});
</script>




<!-- Bookmark Script-->
<script type="text/javascript">
jQuery(document).ready(function() {
    //$('#example').DataTable();
    jQuery(document).on("click", ".bookmark", function() {
        var tableId = $(this).attr("data_id");
        var booktype = $(this).attr("booktype");
        let bookmark;
        if (booktype == 0) {
            bookmark = 1;
        } else {
            bookmark = 0;
        }
        hitURL = "<?php echo base_url() ?>sub_admin/enquery/bookmark";
        var confirmation = confirm("Are you sure to bookmark this lead ?");
        if (confirmation) {
            $.ajax({
                type: "POST",
                url: hitURL,
                data: {
                    id: tableId,
                    bookmark: bookmark
                }, // serializes the form's elements.
                success: function(data) {
                    location.reload();
                }
            });
        }
    });
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

            url: '<?php echo base_url()."sub_admin/enquery/delete"; ?>',

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

            url: '<?php echo base_url()."sub_admin/enquery/deleteAll"; ?>',

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

            "url": "<?php echo site_url('sub_admin/enquery/ajax_list')?>" + getpayment_data,

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

<!-- assignBtn Script-->
<script type="text/javascript">
jQuery(document).ready(function() {
    //$('#example').DataTable();
    jQuery(document).on("click", ".assignBtn", function() {
        var tableId = $(this).attr("data_id");
        //   alert(tableId);
        // return false;
        hitURL = "<?php echo base_url() ?>sub_admin/enquery/assignMe";
        var confirmation = confirm("Are you sure to assign this Lead ?");
        if (confirmation) {
            $.ajax({
                type: "POST",
                url: hitURL,
                data: {
                    id: tableId
                }, // serializes the form's elements.
                success: function(data) {
                    if (data.status = true) {
                        // alert("successfully assigned"); 
                        location.reload();
                    } else if (data.status = false) {
                        alert("Failed to assign");
                    } else {
                        alert("Access denied..!");
                    }
                }
            });
        }
    });
});
</script>


<!-- Get Databse List by date  -->
<script type="text/javascript">
$(document).ready(function() {
    $(".find_by_date").click(function() {
        var type = "<?php echo  isset($_GET['type'])?$_GET['type']:"";?>";
        var from_date = $(".from_date").val();
        var to_date = $(".to_date").val();
        if (from_date == '' || to_date == '') {
            alert("Please select dates");
            return false;
        }
        var url = "<?php echo base_url();?>";
        url = url + 'sub_admin/enquery/?type=' + type;
        url = url + '&daterange=daterangefilter&from_date=' + from_date + '&to_date=' + to_date;

        window.location.href = url;
    });
});
</script>


<!-- assignBtn Script-->
<script type="text/javascript">
jQuery(document).ready(function() {
    //$('#example').DataTable();
    jQuery(document).on("click", ".moveToSpam", function() {
        var tableId = $(this).attr("data_id");
        //   alert(tableId);
        // return false;
        hitURL = "<?php echo base_url() ?>sub_admin/enquery/moveToSpam";
        var confirmation = confirm("Are you sure to move to spam this lead ?");
        if (confirmation) {
            $.ajax({
                type: "POST",
                url: hitURL,
                data: {
                    id: tableId
                }, // serializes the form's elements.
                success: function(data) {
                    if (data.status = true) {
                        // alert("successfully Moved"); 
                        location.reload();
                    } else if (data.status = false) {
                        alert("Failed to assign");
                    } else {
                        alert("Access denied..!");
                    }
                }
            });
        }
    });
});
</script>