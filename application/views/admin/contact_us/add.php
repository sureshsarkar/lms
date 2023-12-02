<style>
  hr{
    border-top: 2px solid #0a4297 !important;
  }
</style>
<?php $this->load->view('header'); ?>
<?php $coloraArray = ['#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4','#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4'];?>

<!-- Content Wrapper. Contains page content -->

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>
<!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/chosen.css"> -->



<div class="content-wrapper">
<!-- ================ -->

<!-- ================ -->
    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="m-0">Our Solution</h1>

                </div>

                <!-- /.col -->

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Home</a></li>

                        <li class="breadcrumb-item active">Dashboard </li>

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

                        <div class="card-header">

                            <?php if($this->session->flashdata('success')): ?>

                            <div class="alert alert-success">

                                <button type="button" class="close" data-close="alert"></button>

                                <?php echo $this->session->flashdata('success'); ?>

                            </div>

                            <?php endif; ?> 

                            <h3 class="card-title">Add Our Solution 

                            </h3>

                        </div>
                   
                        <!-- /.card-header -->

                        <!-- form start -->

                        <form action="" id="" class="form-horizontal " method="post" enctype="multipart/form-data">

                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                 <div class="row">

                                 <!-- code for category start -->
                                  <div class="col-md-3">

                                      <?php if(!empty($categoryList)) {?>

                                      <div class="form-group">

                                        <label for="status">Select Category</label>

                                        <div id="output" class="output"></div>

                                        <select   data-placeholder="Parent Category..." name="category_id" id="category_id"  class="chosen-select1 form-control my_choosen  getList " data-columnName="category_id "  style="width: 100%;" required> 

                                            <option value="" >Select </option>

                                          <?php  foreach ($categoryList as $key => $value) {?>

                                              <option value="<?=$value->id?>" data_attr = "<?=$value->cat_name?>" class ="category_attr_<?=$value->id?>"><?=$value->cat_name?></option>
                                        
                                            <?php   } ?>

                                        </select>

                                      </div>

                                      <?php }?> 

                                    </div>
                                 <!-- code for category end -->

                                 <!-- code for sub category start -->
                                   <div class="col-md-3 sub_cat_sec">

                                   <?php if(!empty($categoryList)) {?>

                                      <div class="form-group">

                                        <label for="status">Select Sub Category</label>

                                        <div id="output" class="output"></div>

                                        <select   data-placeholder="Parent Category..." name="sub_category_id" id="sub_category_id"  class="chosen-select1 form-control my_choosen  getList " data-columnName="category_id "  style="width: 100%;" required> 

                                            <option value="" >Select </option>

                                        </select>

                                      </div>

                                      <?php }?> 

                                    </div>
                                 <!-- code for sub category end -->
                                    
                                    
                                    <!-- code for status  -->
                                    <div class="col-md-3">

                                      <div class="form-group">

                                        <label for="exampleInputFile">Status</label>

                                        <select name="status" id="status" class="form-control">

                                            <option value="1">Active</option>

                                            <option value="0">InActive</option>

                                        </select>

                                      </div>

                                    </div>
                                    <!-- end code for status  -->

                                     <!-- slug start  -->
                                     <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="slug">Slug</label>
                                      <input type="text" class="form-control" id="slug_url" placeholder="Auto Generated slug" name="slug">
                                    </div>
                                  </div>
                                    <!-- slug end  -->

                                </div>

                                <!-- description1 start  -->
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="form-group">
                                          <label for="Title">Title</label>
                                         <input type="text" name="title" class="form-control" placeholder="Enter Title">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                          <label for="Heading">Heading</label>
                                         <input type="text" name="Heading" class="form-control" placeholder="Enter Heading">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="description">Description</label>
                                          <textarea rows="5" id="description" name="description" class="form-control"
                                              placeholder="Enter your Description"></textarea>
                                      </div>
                                  </div>
                                </div>
                                 <!-- description end  -->
                                 <hr>
                                   <!-- Career Option start  -->
                                <h3 class="bg-primary px-2 rounded">Career Option</h3>
                                <br> <br>
                                <!-- =================================================================== -->
                                  <div id="contentBox" class="d-none">
                                    <div id="inputFormRow" style="background:#d1ffff;">
                                      <div class="row p-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="heading"> <span class="badge bg-primary">1</span> Card Heading</label>
                                              <input type="text" name="card_heading" class="form-control" placeholder="Enter heading">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                          <label for="card content">Card Content</label>
                                          <textarea id="card_content" name="card_content" class="form-control" placeholder="Enter your card_content"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="row m-1">
                                        <div class="col-md-4">
                                          <div class="form-group mb-0 mt-2">
                                          <br>
                                          <h1 style="margin-left: 86px;" type="button" id="removeRow" class="btn btn-danger btn-small">-</h1>
                                          </div>
                                        </div>
                                    </div>
                                    <hr>
                                    </div>
                                  </div>
                                  <!-- =================================================================== -->
                                 <div id="newCardRow"> </div>

                                  <h1 type="text" id="addCardRow" class="btn btn-info" title="Click to add multiple"><i class="fa fa-plus"></i></h1>
                                 <!-- Career Option end  -->

                                <hr>
                                 <!-- Digital Solutions start  -->
                                 <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="Resume Email">Resume Email:</label>
                                      <input type="text" name="drop_resume" class="form-control" placeholder="Enter Resume Email">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="Digital Solutions">Digital Solutions</label>
                                      <input type="text" name="digital_solutions" class="form-control" placeholder="Enter Digital Solutions">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="Successfully Delivered">Successfully Delivered</label>
                                      <input type="text" name="success_delivered" class="form-control" placeholder="Enter Successfully Delivered">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="Managing More Than">Managing More Than</label>
                                      <input type="text" name="manag_more" class="form-control" placeholder="Enter Managing More Than">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="Growth Per Annum">Growth Per Annum</label>
                                      <input type="text" name="growth_per_annum" value="<?= isset($solution['growth_per_annum'])?$solution['growth_per_annum']:""?>" class="form-control" placeholder="Enter Growth Per Annum">
                                    </div>
                                  </div>
                                </div>
                                 <!-- Digital Solutions end  -->
                                 <hr>
                                  <!-- heading and paragraph start  -->
                                <div class="row">
                                  <!-- code for Heading start -->
                                  <div class="col-md-4 col-12 sub_cat_sec">
  
                                    <div class="form-group">
  
                                    <label for="exampleInputFile"><span class="badge bg-info">1</span> Heading</label>
  
                                    <input type="text" name="head[]" class="form-control" placeholder="Enter Heading">
  
                                    </div>
  
                                  </div>
                                  <!-- code for Heading end -->
                                  
                                  <!-- code for Paragraph  -->
                                  <div class="col-md-8 col-12">
  
                                    <div class="form-group">
  
                                      <label for="exampleInputFile">Paragraph</label>
  
                                      <input type="text" name="para[]" class="form-control" placeholder="Enter paragraph">
  
                                    </div>
  
                                  </div>
                                  <!-- end code for Paragraph  -->
                                  
                                </div>
                                <div id="newRow"> </div>
                                <h1 type="text" id="addRow" class="btn btn-info" title="Click to add multiple"><i class="fa fa-plus"></i></h1>
                                  <!-- heading and paragraph end  -->
                                </div>
                              </div>
                              <br>

                              <h3 class="bg-primary px-2 rounded">Meta Data</h3>
                              <div class="row m-1">
                                <div class="col-md-4">
                                <div class="form-group">
                                <label for="text">Meta Title </label>
                                <input type="text" class="form-control" name="meta[meta_title]" placeholder="Meta Title">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label for="text">Meta Keyword </label>
                                <input type="text" class="form-control" name="meta[meta_keyword]" placeholder="Meta Keyword">
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label for="text">Meta Description </label>
                                <input type="text" class="form-control" name="meta[meta_description]" placeholder="Meta Description">
                                </div>
                                </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="text">OG URL </label>
                                      <input type="text" class="form-control" name="meta[og_url]" placeholder="OG URL">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="text">OG Image </label>
                                      <input type="file" class="form-control" name="og_image" placeholder="OG Image">
                                    </div>
                                  </div>
                                  
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="text">OG Title </label>
                                      <input type="text" class="form-control" name="meta[og_title]" placeholder="OG Title">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="text">OG Description </label>
                                      <input type="text" class="form-control" name="meta[og_description]" placeholder="OG Description">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="text">OG Site Name </label>
                                      <input type="text" class="form-control" name="meta[og_site_name]" placeholder="OG Site Name">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="text">Canonical </label>
                                      <input type="text" class="form-control" name="meta[canonical]" placeholder="Meta Canonical">
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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

<script>

    // code to show and hide sub category
    $(document).ready(function(){

            $("#category_id").on('change',function(){
           var id = $(this).val();
                var data_attr   = $(".category_attr_"+id).attr('data_attr');
                if(data_attr =="Home"){
                  $(".sub_cat_sec").hide();
                }else{
                  $(".sub_cat_sec").show();
                }

            })

        });

    // end code for get list 

</script>

<?php $this->load->view('footer'); ?>

<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script> 


<!-- choose sub category start -->
<script type='text/javascript'>
// baseURL variable
var baseURL = "<?php echo base_url();?>";

$(document).ready(function() {

    // City change
    $('#category_id').change(function() {
        var val = $(this).val();
        // AJAX request
        $.ajax({
            url: '<?=base_url()?>admin/banner/get_subcategory',
            method: 'post',
            data: {
                id: val
            },
            dataType: 'json',
            success: function(response) {

                $('#sub_category_id').html('');
                // Add options
                $.each(response, function(index, data) {
                    $('#sub_category_id').append('<option class="'+data['id']+'" data_name="' + data['sub_category_name'] + '" value="' + data['id'] +
                        '">' + data['sub_category_name'] + '</option>');
                });
            }
        });
    });
});
</script>
<!-- choose sub category end -->




<script>
// add row
$("#addCardRow").click(function() {
  $("#contentBox").removeClass("d-none");
});

// remove row
$(document).on('click', '#removeRow', function() {
    // $(this).closest('#inputFormRow').remove();
    $('#contentBox').addClass("d-none");
});
</script>



<script>
    // description
    CKEDITOR.replace('description', {
      height: 100,
    extraPlugins: 'colorbutton,colordialog,justify',
    removeButtons: 'PasteFromWord'
    });

    // card_content
    CKEDITOR.replace('card_content', {
      height: 120,
    extraPlugins: 'colorbutton,colordialog,justify',
    removeButtons: 'PasteFromWord'
    });
    
    // description2
    CKEDITOR.replace('description2', {
      height: 220,
    extraPlugins: 'colorbutton,colordialog,justify',
    removeButtons: 'PasteFromWord'
    });

</script> 

<!-- To add slug  -->
<script type="text/javascript">
$(document).ready(function() {
    $("#sub_category_id").change(function() {
        var text = $(this).val();
        var text = $("."+text).attr("data_name");
        var slug_text = convertToSlug(text);
        $("#slug_url1").val(slug_text);
    });
});
</script>



<script>
// add row
let coloraArray = ['#d7c3ff', '#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4','#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4', '#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4','#d7c3ff', '#d1ffff', '#fcdff9', '#ffdfd4'];
let i = 1;
$("#addRow").click(function() {
  i++;
    let html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="row" style="background:' + coloraArray[i] + '">';
        html += '<div class="col-md-4 col-12 sub_cat_sec">';
        html += '<div class="form-group">';
        html += '<label for="exampleInputFile"><span class="badge bg-info">'+i+'</span> Heading</label>';
        html += '<input type="text" name="head[]" class="form-control" placeholder="Enter Heading">';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-7 col-12">';
        html += '<div class="form-group">';
        html += '<label for="exampleInputFile">Paragraph</label>';
        html += '<input type="text" name="para[]" class="form-control" placeholder="Enter paragraph">';
        html += '</div>';
        html += '</div>';
        html +='<div class="col-md-1">';
        html +='<div class="form-group mb-0 mt-2">';
        html +='<br>';
        html += '<h1 style="margin-left: 0px;" type="button" id="removeRow" class="btn btn-danger btn-small">-</h1>';
        html +='</div>';
        html +='</div>';
        html +='</div>';
        html += '<hr>';
        html +='</div>';
        
                                         
    $('#newRow').append(html);
});

// remove row
$(document).on('click', '#removeRow', function() {
    $(this).closest('#inputFormRow').remove();
});
</script>
