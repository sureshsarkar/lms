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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
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

    .respodiv {
        margin-left: 12px;
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

    .respodiv {
        margin-left: 12px;
    }
}

@media (min-width: 1340px) {
    .bignone {
        display: none;
    }
}
</style>

<div class="content-wrapper">

    <!-- Main content -->
    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class=" ml-3 left" style="font-weight: 400;">Import Leads <img src="<?= base_url()?>assets/images/download.gif" class="resgif" alt="" style="width: 10%;"></h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right ml-3">

                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/dashboard') ?>">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/imported_imquiry') ?>">Import Leads</a>
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

                            <div class="row mb-2">

                                <div class="d-flex">
                                    <!-- <div class="">
                          <h3 class="card-title m-2" title="Add New Lead" id="stat"><a href="<?= base_url(); ?>sub_admin/imported_imquiry/add" class="btn-gradient-primary textCol">+ ADD NEW</a></h3>
                      </div> -->
                                    <div class="respodiv">
                                        <h3 class="card-title m-2" title="Import Excel Sheet" id="stat"
                                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href="#"
                                                class="btn-gradient-primary textCol"><i
                                                    class="bi bi-cloud-arrow-down-fill"></i> IMPORT SHEET</a></h3>
                                    </div>

                                  


                                    <div class="">
                                        <h3 class="card-title m-2 export-btn" title="Export in Excel"
                                            onclick="exportTableToExcel('example')" id="stat"><a href="#"
                                                class="btn-gradient-primary textCol"><i class="bi bi-download"></i>
                                                EXPORT</a></h3>
                                    </div>
                                    <div class="">
                                        <h3 class="card-title m-2 deletByCheck" ttle=""><a href="#"
                                                class="btn-gradient-primary textCol"><i class="bi bi-trash"></i> DELETE
                                            </a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mb-2">

                        <!-- /.card-header -->
                        <div class="col-md-12 col-sm-12">
                            <div class="card-body">

                                <table id="example" class="table table-bordered table-striped">

                                    <thead>
                                        <tr>

                                            <th></th>
                                            <th>No.</th>

                                            <th>Name</th>

                                            <th>Phone</th>

                                            <th>Email</th>

                                            <th>City</th>

                                            <th>Campaign Name</th>

                                            <th>State</th>

                                            <th>platform</th>

                                            <!-- <th>Camp</th> -->

                                            <!-- <th>Lead Update</th> -->

                                            <th>Created</th>

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
<!-- model form -->


  <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Import leads <i
                                                            class="bi bi-cloud-download" style="color: #04aa6d;"></i>
                                                    </h5>
                                                    <a href="<?= base_url()?>assets/images/import-format.xlsx" download>
                                                        <button type="button" class="b-20">Download Format <i
                                                                class="bi bi-download"></i></button>
                                                    </a>
                                                </div>
                                                <form action="<?= base_url()?>sub_admin/imported_imquiry/excelSheet"
                                                    class="form-horizontal " method="post"
                                                    enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="card-body boxWidth">
                                                            <label for="text">Upload Excel Sheet</label>
                                                            <input type="file" name="excel_file" class="form-control"
                                                                accept=".xls,.xlsx">
                                                            <input type="hidden" name="type" value="1">
                                                            <div class="text-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success ">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
        url = url + 'sub_admin/imported_imquiry?type=' + sortBy;
        window.location.href = url;

    })

});
</script>




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
            var hitURL = "<?php echo base_url() ?>sub_admin/imported_imquiry/deleteByCheck";
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
        } else {
            alert("Please Select Check box which you want to delete!");
        }
    });
})
</script>




<script type="text/javascript">
function delsingleRow(id)

{

    var confrm = confirm("Are you sure you want to delete?");

    if (confrm)

    {

        $.ajax({

            type: "POST",

            url: '<?php echo base_url()."sub_admin/imported_imquiry/delete"; ?>',

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

            url: '<?php echo base_url()."sub_admin/imported_imquiry/deleteAll"; ?>',

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

            "url": "<?php echo site_url('sub_admin/imported_imquiry/ajax_list')?>" + getpayment_data,

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
        hitURL = "<?php echo base_url() ?>sub_admin/imported_imquiry/assignMe";
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
        url = url + 'sub_admin/imported_imquiry/?type=' + type;
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
        hitURL = "<?php echo base_url() ?>sub_admin/imported_imquiry/moveToSpam";
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