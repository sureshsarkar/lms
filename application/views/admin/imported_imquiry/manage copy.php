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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<style>
.paginate_button {
    background: transparent;
}

.dropdown-toggle {
    background: linear-gradient(to right, #da8cff, #9a55ff);
    font-size: 14px;
    padding: 10px 30px;
    color: #fff;
    border: 0;
    border-radius: 50px;
}

.leads {
    z-index: 99999;
}

#dropdownMenuButton {
    text-align: center;

}

.table-bordered {
    width: auto !important;
    display: block;
    overflow-x: scroll;

}

.btn-gradient-danger {
    font-size: 14px;
    padding: 10px 30px;
    color: #fff;
    border: 0;
    border-radius: 50px;
    background: #ff033d;
}

th {
    font-weight: 600 !important;
}

@media screen and (min-width: 361px) and (max-width: 414px) {
    .resbtn {
        margin-top: 10px;
    }

    .smres {
        width: 100% !important;
        margin-top: 20px;
        text-align: justify;
    }
}

@media screen and (max-width: 360px) {
    .resbtn {
        margin-top: 10px;
    }

    .smres {
        width: 100% !important;
        margin-top: 20px;
        text-align: justify;
    }
}
.deletByCheck{
  cursor: pointer;
}
</style>
<div class="content-wrapper">

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="  ml-3" style=" text-align: left;"><img
                            src="   https://cdn-icons-png.flaticon.com/512/1022/1022082.png  " style="width:5%;"> All
                        Enquiry</h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right ml-3">

                        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url()?>admin/imported_imquiry">Imported
                                Inquiry</a></li>
                        <li class="breadcrumb-item"><a href="#">All Enquiry</a></li>
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
                                    <h3 class="card-title m-2" title="Import Excel Sheet" id="stat" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <a href="#" class="btn-gradient-primary textCol"><i class="bi bi-cloud-arrow-down-fill"></i> IMPORT SHEET</a>
                                    </h3>
                                    <!-- Import excel sheet Modal start-->
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
                                                <form action="<?= base_url()?>admin/imported_imquiry/excelSheet"
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
                                    <!-- Import excel sheet Modal end-->

                                    <h3 class="card-title m-2 export-btn" title="Export in Excel" onclick="exportTableToExcel('example')" id="stat">
                                       <a href="#" class="btn-gradient-primary"><i class="bi bi-download"></i> EXPORT</a>
                                    </h3>
                                    <h3 class="card-title m-2" title="Add new inquiry" id="stat">
                                      <a  href="<?php echo base_url(); ?>admin/imported_imquiry/add" class="btn-gradient-primary"> <i class="bi bi-plus-circle"></i> ADD</a>
                                    </h3>
                                    <h3 class="card-title m-2 deletByCheck resbtn">
                                      <a class="btn-gradient-primary"><i class="bi bi-archive"></i> DELETE ALL</a>
                                    </h3>
                                </div>
                            </div>

                            <!-- /.card-header -->

                            <div class="card-body ">

                                <table id="example" class="table table-bordered table-striped">

                                    <thead>

                                        <tr>

                                            <!-- <th><input onclick="toggle(this,'cbgroup1')" id="foo[]" name="foo[]" type="checkbox" value="" /></th> -->

                                            <th></th>
                                            <th style="font-weight: 600;">No.</th>

                                            <th>Name</th>

                                            <th>Phone</th>

                                            <th>Email</th>

                                            <!-- <th>City</th>? -->

                                            <th>State</th>

                                            <th>platform</th>

                                            <th>Camp Name</th>

                                            <!-- <th>Status</th> -->

                                            <th>Lead Update</th>

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
        url = url + 'admin/enquery?type=' + sortBy;
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
            $("a").css("background-color", "yellow");

        }
    });

    var allVals = [];
    jQuery(document).on("click", ".deletByCheck", function() {
        $("input:checkbox[name=checkbox]:checked").each(function() {
            allVals.push($(this).val());
        })
        if (allVals.length > 0) {
            var hitURL = "<?php echo base_url() ?>admin/imported_imquiry/deleteByCheck";
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

            url: '<?php echo base_url()."admin/imported_imquiry/delete"; ?>',

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

    table = $('#example').DataTable({

        "processing": true, //Feature control the processing indicator.

        "serverSide": true, //Feature control DataTables' server-side processing mode.

        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source

        "ajax": {

            "url": "<?php echo site_url('admin/imported_imquiry/ajax_list')?>" + type,

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


<!-- send Email Script-->
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery(document).on("click", ".sendEmail", function() {
        hitURL = "<?php echo base_url() ?>admin/imported_imquiry/sendEmail";
        var confirmation = confirm("Are you sure to send email to every lead user ?");
        if (confirmation) {
            $.ajax({
                type: "POST",
                url: hitURL,
                data: {
                    sendEmail: "1"
                }, // serializes the form's elements.
                success: function(data) {
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



<!-- <script>
  function reloadPage(){
    location.reload();
  }
  setInterval(reloadPage, 180000); // 180000 milliseconds = 1 minute

</script>
 -->


<?php $this->load->view('footer'); ?>