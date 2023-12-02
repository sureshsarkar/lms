<?php $this->load->view('header'); ?>
<style>
hr {
    border: 1px solid #11b798 !important;
    width: 100%;
}

::placeholder {
    font-size: 12px !important;
}

.card-footer {
    padding: 0px 11.25rem 10px 20px;
    margin-top: -17px;
    background-color: rgba(0, 0, 0, .03);
    border-top: 0 solid rgba(0, 0, 0, .125);
}

.form-control {
    display: block;
    width: 100%;
    height: calc(3rem + 1px) !important;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057 !important;
    background-color: #fff !important;
    background-clip: padding-box;
    border: 1px solid #24446bd4 !important;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>

<!-- Content Wrapper. Contains page content -->

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>

<div class="content-wrapper">
    <!-- ================ -->

    <!-- ================ -->
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class=" ml-3 left">Add New Lead <img src="<?= base_url()?>assets/images/plus.gif" class="resgif"
                            alt="" style="
    width: 5%;
"></h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right ml-3">

                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/dashboard') ?>">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="<?= base_url('sub_admin/enquery') ?>">Inquiry</a></li>
                        <li class="breadcrumb-item"><a href="#">Add New Lead</a></li>
                        <a href="">
                            <li class="breadcrumb-item"><a href="<?= base_url()?>sub_admin/enquery"> <span
                                        aria-hidden="true" class="crossbtn">&times;</span></a></li>
                        </a>

                    </ol>

                </div>

                <!-- /.col -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <!-- left column -->

                <div class="col-md-12">

                    <!-- general form elements -->

                    <div class="card card-primary">

                        <div>

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?>



                            </h3>

                        </div>

                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action="" id="" class="form-horizontal " method="post">

                            <div class="card-body" style="padding-bottom: 0px;">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="row">

                                            <!-- code for Name  -->
                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label for="exampleInputFile"><i
                                                            class="bi bi-person-check-fill text-info"></i> Name*</label>

                                                    <input type="text" name="name" class="form-control"
                                                        placeholder=" Full Name" required>

                                                </div>

                                            </div>
                                            <!-- end code for Name  -->

                                            <!-- code for Email  -->
                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label for="exampleInputFile"><i
                                                            class="bi bi-envelope-open text-info"></i> Email*</label>

                                                    <input type="text" name="email" class="form-control"
                                                        placeholder=" Email Id" required>

                                                </div>

                                            </div>
                                            <!-- end code for Email  -->

                                            <!-- code for Phone  -->
                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label for="exampleInputFile"><i
                                                            class="bi bi-telephone text-info"></i> Phone*</label>

                                                    <input type="number" name="phone" class="form-control"
                                                        placeholder="Phone no." required>

                                                </div>

                                            </div>
                                            <!-- end code for Phone  -->

                                            <!-- code for Source  -->
                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label for="exampleInputFile"><i
                                                            class="bi bi-usb-symbol text-info"></i> Source</label>

                                                    <select name="source" id="Source" class="form-control">

                                                        <option value="1"><?= $this->config->item('source')[1]?>
                                                        </option>
                                                        <option value="2"><?= $this->config->item('source')[2]?>
                                                        </option>
                                                        <option value="3"><?= $this->config->item('source')[3]?>
                                                        </option>
                                                        <option value="4"><?= $this->config->item('source')[4]?>
                                                        </option>
                                                        <option value="5"><?= $this->config->item('source')[5]?>
                                                        </option>

                                                    </select>

                                                </div>

                                            </div>
                                            <!-- end code for Source  -->

                                            <!-- code for comments  -->
                                            <div class="col-md-8">

                                                <div class="form-group">

                                                    <label for="exampleInputFile"><i
                                                            class="bi bi-chat-dots text-info"></i> Comments</label>

                                                    <input name="comments" id="comments" class="form-control"
                                                        placeholder="Comments">

                                                </div>

                                            </div>
                                            <!-- end code for comments  -->


                                        </div>
                                    </div>
                                </div>
                                <br>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn-gradient-primary textCol px-4" style="
    font-size: 14px;    font-family: 'Source Sans Pro';
">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>

                <!--/.col (left) -->

                <!-- right column -->

                <!--/.col (right) -->
            </div>

            <!-- /.row -->

        </div>

        <!-- /.container-fluid -->

    </section>

    <!-- /.content -->

</div>

<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>

<script>
$(document).ready(function() {
    $('.showFollowup').click(function() {
        var data = $(this).attr('data-val');
        // alert(data);
        if (data == 0) {
            $(".addFollow").removeClass('d-none');
            $(this).attr('data-val', '1');
            $(this).html('-');
        } else {
            $(".addFollow").addClass('d-none');
            $(this).attr('data-val', '0');
            $(this).html('+');
        }
    });
})
</script>
<?php $this->load->view('footer'); ?>