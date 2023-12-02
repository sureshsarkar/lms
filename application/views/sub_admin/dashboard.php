<style>
.dash-widget .card-body .dash-widget-icon {
    color: #ff9b44;
    font-size: 41px;
    height: 60px;
    line-height: 76px;
    text-align: center;
    width: 60px;
    border-radius: 50%;
    padding: 20px 24px;
    background: #e2ebf9;
}

.dash-widget-info {
    display: inline-block;
    float: right;
    max-width: 100%;
}

.dash-widget-info h3 {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 8px;
    text-align: right;
}

.dash-widget-info h5 {
    font-weight: 700;
    font-size: 13px;
    color: #474646;
}

.sub_admin {
    color: #505050 !important;
    font-weight: 700 !important;
    text-align: left;
}

td {
    padding: 9px 5px !important;
}

tr {
    border-bottom: 1px solid #c5c5c5 !important;
}

@media (min-width: 768px) {
    .col-md-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 14% !important;
    }
}

.card-title {
    float: left;
    font-size: 23px;
    font-weight: 600;
    margin: 0;
}

td a {
    text-decoration: none;
    color: #000;
}

td a:hover {
    text-decoration: none;
    color: #ff8821;
}

.top5lead {
    color: black;
    font-size: 34px;
}

#chart_div {
    padding: 18px 24px;
}

#chart_div div {
    position: relative;
    max-width: 1193px;
    max-height: 400px;
}

.saf__boxlight {
    width: 100%;
    background: white;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border-radius: 5px;
    padding-bottom: 10px;
}

.card-header {
    width: 100%;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    /* padding-right: 20px !important; */
    text-align: center;
    background: url(https://demos.themeselection.com/materio-mui-react-nextjs-admin-template-free/images/misc/triangle-light.png);
}

td {
    text-align: left !important;
}

th {
    text-align: left !important;
}

.pCalss {
    margin-left: 38px;
    margin-top: 9px;
    width: 194%;
    text-align: justify;
}

.pCalss span {
    font-size: 18px;
    font-weight: 500;
}

@media (max-width: 600px) and (min-width: 200px) {
    h3 {
        font-size: 20px !important;
    }
}

#weeklyChart {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

#todayChart {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

@media screen and (min-width: 361px) and (max-width: 414px) {
    .smnone {
        display: none;
    }

    .smres {
        width: 100% !important;
        margin-top: 20px;
        text-align: justify;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
        /* padding-right: 20px !important; */
        text-align: left !important;
        background: url(https://demos.themeselection.com/materio-mui-react-nextjs-admin-template-free/images/misc/triangle-light.png);
    }

    .dash-widget-info h5 {
        font-weight: 700;
        font-size: 15px !important;
        color: #474646;
    }

    .resimg {
        width: 20% !important;
    }

    .content-header h1 {
        font-size: 22px !important;

    }

    .resgif {
        width: 15% !important;
    }

}

@media screen and (max-width: 360px) {
    .smnone {
        display: none;
    }

    .smres {
        width: 100% !important;
        margin-top: 20px;
        text-align: justify;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
        /* padding-right: 20px !important; */
        text-align: left !important;
        background: url(https://demos.themeselection.com/materio-mui-react-nextjs-admin-template-free/images/misc/triangle-light.png);
    }

    .dash-widget-info h5 {
        font-weight: 700;
        font-size: 15px !important;
        color: #474646;
    }

    .resimg {
        width: 20% !important;
    }

    .content-header h1 {
        font-size: 22px !important;

    }

    .resgif {
        width: 15% !important;
    }

}

.card-animate:hover {
    -webkit-transform: translateY(calc(-1.5rem / 5));
    transform: translateY(calc(-1.5rem / 5));
    -webkit-box-shadow: 0 5px 10px rgba(30, 32, 37, .12);
    box-shadow: 0 5px 10px rgba(30, 32, 37, .12);
}

.card-animate {
    -webkit-transition: all .4s;
    transition: all .4s;
}

.simnbhu {
    width: 153%;
    background: #f6f6f6;
    padding: 10px;
    margin-top: 35px;
    border-radius: 10px;
    border: 1px solid;
}
</style>
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



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-md-8 col-sm-12">

                    <!-- <h1 class="m-0 text-left">Dashboard</h1> -->
                    <h1 class="sub_admin">
                        <img src="<?= base_url()?>assets/images/protection.gif" class="resgif" alt=""
                            style="width: 5%;"> FOR LOYAL CUSTOMERS
                    </h1>

                    <p class="pClass smres simnbhu">
                        <span><b>Build great customer relationships</b></span><br>Providing personalized experiences is
                        crucial in today's competitive business landscape. TCLMS, which stands for Total Customer
                        Relationship Management, is a comprehensive approach to managing and nurturing customer
                        relationships across all touchpoints.
                    </p>
                </div><!-- /.col -->

                <div class="col-md-4 col-sm-12">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                        <li class="breadcrumb-item"><?= (isset($_SESSION['name']))?$_SESSION['name']:"Dashboard"?></li>

                    </ol>

                </div><!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] ==1){?>
                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg"
                                    src="      https://cdn-icons-png.flaticon.com/512/11511/11511322.png  "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info ">
                                <h3><?= (isset($newLeads) && !empty($newLeads))?$newLeads:0; ?></h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e0">
                                    <h5>NEW LEADS</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg" src="     https://cdn-icons-png.flaticon.com/512/3893/3893258.png "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info">
                                <h3><?= (isset($totalFollowUpLeads) && !empty($totalFollowUpLeads))?$totalFollowUpLeads:0; ?>
                                </h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e1">
                                    <h5>FOLLOW UP </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg" src="   https://cdn-icons-png.flaticon.com/512/391/391247.png "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info">
                                <h3><?= (isset($totalNotUseful) && !empty($totalNotUseful))?$totalNotUseful:0; ?></h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e2">
                                    <h5>NOT INTERESTED</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg" src="     https://cdn-icons-png.flaticon.com/512/7756/7756163.png "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info">
                                <h3><?= (isset($totalConverted) && !empty($totalConverted))?$totalConverted:0; ?></h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e3">
                                    <h5>CONVERTED </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg"
                                    src="      https://cdn-icons-png.flaticon.com/512/7955/7955509.png  "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info">
                                <h3><?= (isset($inProcess) && !empty($inProcess))?$inProcess:0; ?></h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e4">
                                    <h5>IN PROCESS </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg" src="    https://cdn-icons-png.flaticon.com/512/5834/5834794.png  "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info">
                                <h3><?= (isset($lowBudget) && !empty($lowBudget))?$lowBudget:0; ?></h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e5">
                                    <h5>LOW BUDGET </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card dash-widget">
                        <div class="card-body card-animate">
                            <span class="dash-widget-icon">
                                <img class="resimg" src="    https://cdn-icons-png.flaticon.com/512/3850/3850285.png "
                                    style="width:40%;margin-bottom: 13px;">
                            </span>
                            <div class="dash-widget-info">
                                <h3><?= (isset($jobInquiry) && !empty($jobInquiry))?$jobInquiry:0; ?></h3>
                                <a href="<?= base_url()?>sub_admin/enquery?type=e6">
                                    <h5>JOB ENQUIRY </h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- --------------------------------  -->
                <div class="col-md-12 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <!-- <h3 class="card-title mb-0 top5lead"><img src="<?= base_url()?>assets/images/rocket.gif"
                                    class="resgif" alt="" style="width: 5%;">
                                Today FollowUp Leads
                              </h3> -->

                            <h3 class="sub_admin mb-0">
                                <img src="<?= base_url()?>assets/images/rocket.gif" class="resgif" alt=""
                                    style="width: 4%;"> Today FollowUp Leads
                            </h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-nowrap custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Phone</th>
                                            <th>Executive</th>
                                            <th>Source</th>
                                            <th>Status</th>
                                            <th>FollowUp Date</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                
                $countryImg = '';
                if(isset($todayFollowUpData) && !empty($todayFollowUpData)){
                  foreach ($todayFollowUpData as $k => $v) {
  
                    if($v->enquery_type==1){
  
                      $enquery_type = '<span class="btn-success badge">Active</span>
                      <p>
                          <a style="margin-top:10px;" class=" btn-danger badge" href="'.base_url().'sub_admin/enquery/Unpublished/'.$v->id.'">Click  InActive</a>
                      </p>';
                      
                  }else{
                         $enquery_type = '<span class="btn-danger badge">InActive</span>
                         <p>
                          <a style="margin-top:10px;" class=" btn-success badge" href="'.base_url().'sub_admin/enquery/published/'.$v->id.'">Click  Active</a>
                      </p>
                         ';
                  }
                 
                  if($v->source==1){
                      $source = '<span class="btn-info badge">'.$this->config->item('source')[$v->source].'</span>';
                  }else if($v->source==2){
                      $source = '<span class="btn-success badge">'.$this->config->item('source')[$v->source].'</span>';
                  }else if($v->source==3){
                      $source = '<span class="btn-warning badge">'.$this->config->item('source')[$v->source].'</span>';
                  }else if($v->source==4){
                      $source = '<span class="btn-danger badge">'.$this->config->item('source')[$v->source].'</span>';
                  }else{
                      $source ="";
                  }
      
                  if($v->enquery_type==0){
                      $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                  }else if($v->enquery_type==1){
                     $enquery_status= '<span class="btn-success badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                  }else if($v->enquery_type==2){
                      $enquery_status = '<span class="btn-info badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                  }else if($v->enquery_type==3){
                      $enquery_status = '<span class="btn-warning badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                  }else{
                      $enquery_status ="";
                  }
                  $followup_date = date("Y-m-d h:i A", strtotime($v->followup_date));
                  $created_at = date("Y-m-d h:i A", strtotime($v->created_at));
  
                  if($v->lead_owner == '0'){
                    $assignLead = '<li class=""><a  title="Assign Lead"   class="assignBtn" href="javascript:void(0)" data_id="' . $v->id .'" ><i class="bi bi-person-fill-add"></i> Assign Lead</a></li>';
                    }else{
                      $assignLead = '';
                    }
  
                    if(isset($v->lead_ip) && !empty($v->lead_ip) && $v->city == ''){
                
                      $responce = getLocation($v->lead_ip);
                      $city = $responce['city'];
                      $country = $responce['country'];
                      
                      if($city !==''){
                          $w = array();
                          $w['city'] = $city;
                          $w['country'] = $country;
                          $this->db->where('id', $v->id);
                          $this->db->update('enquery', $w);
                      }
                  }else{
                      $city = (!empty($v->city))?$v->city:'';
                      $country = (!empty($v->country))?$v->country:'';
                  }
      
                  if($country == "IN"){
                    $countryImg = '<img src="'.base_url().'assets/images/flag/india.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
                }
                if($country == "RU"){
                    $countryImg = '<img src="'.base_url().'assets/images/flag/russia.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
                }
                if($country == "CZ"){
                    $countryImg = '<img src="'.base_url().'assets/images/flag/cz.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
                }
                if($country == "FR"){
                    $countryImg = '<img src="'.base_url().'assets/images/flag/fr.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
                }
                if($country == "DE"){
                    $countryImg = '<img src="'.base_url().'assets/images/flag/de.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
                }
  
                  ?>
                                        <tr>
                                            <td><?= $k+1?></td>
                                            <td><a
                                                    href="<?= base_url('sub_admin/enquery/edit/').$v->id?>"><?= $v->name?></a>
                                            </td>
                                            <td><?= (!empty($city))?'<span class="d-flex">'.$countryImg.' '.$city.'</span>':'<span class="badge bg-inverse-danger">N/A</span>'?>
                                            </td>
                                            <td><?= $v->phone?></td>
                                            <?php
                  $lead_owner = '<span class="badge bg-inverse-danger">N/A</span>';
                   if(isset($subAdminList)){
                      foreach ($subAdminList as $key => $value) {
                        if ($v->lead_owner==$value->id) {
                          $currentDate = date("y-m-d H:i:s");
                          $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
                          // $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
                           $last_activity = $value->last_activity;
                          if($fiveMinutLost < strtotime($last_activity)){
                              $online = '<span class="circle pulse green"></span>';
                          }else{
                              $online = '<span class="circle pulse red"></span>';
                          }
                         $lead_owner = $online.'<img src="'.base_url().$value->picture.'" title="'.$value->name.'" alt="'.$value->picture.'" class="imgWid">'; 
                      }
                    }
                    }
                    ?>

                                            <td><?= $lead_owner?></td>
                                            <td><?= $source?></td>
                                            <td><?= $enquery_status?></td>
                                            <td><?= $followup_date?></td>
                                            <td><?= $created_at?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <div class="" type="button" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                    </div>
                                                    <div class="dropdown-menu leads showMe"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <ul>
                                                            <li class=""><a class=""
                                                                    href="<?= base_url('sub_admin/enquery/edit/').$v->id ?>"
                                                                    title="View Lead">View Lead</i></a></li>
                                                            <li class=""><a class=""
                                                                    href="<?= base_url('sub_admin/enquery/edit/').$v->id ?>"
                                                                    title="Add FollowUp">Add FollowUp</i></a></li>
                                                            <?= $assignLead?>
                                                        </ul>
                                                    </div>
                                                </div>
                            </div>
                            </td>
                            </tr>
                            <?php }}else{?>
                            <tr>
                                <td colspan="10">
                                    <h5 class="text-center">No Data Found</h5>
                                </td>
                            </tr>
                            <?php }?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill gfty">
                    <div class="card-header">



                        <h3 class="sub_admin mb-0">
                            <img src="<?= base_url()?>assets/images/top-file.gif" class="resgif" alt=""
                                style="width: 4%;"> Top 5 Leads
                        </h3>
                        <!-- <p>Lorem Ipsum Dolorsit Emmet Construct Lorem Ipsum Dolorsit Emmet Construct</p> -->
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-nowrap custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Executive</th>
                                        <th>Source</th>
                                        <th>Status</th>
                                        <th>FollowUp Date</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
              $countryImg = '';
              if(isset($top5LeadsData) && !empty($top5LeadsData)){
                foreach ($top5LeadsData as $k => $v) {

                  if($v->enquery_type==1){

                    $enquery_type = '<span class="btn-success badge">Active</span>
                    <p>
                        <a style="margin-top:10px;" class=" btn-danger badge" href="'.base_url().'sub_admin/enquery/Unpublished/'.$v->id.'">Click  InActive</a>
                    </p>';
                    
                }else{
                       $enquery_type = '<span class="btn-danger badge">InActive</span>
                       <p>
                        <a style="margin-top:10px;" class=" btn-success badge" href="'.base_url().'sub_admin/enquery/published/'.$v->id.'">Click  Active</a>
                    </p>
                       ';
    
                }
               
                if($v->source==1){
                    $source = '<span class="btn-info badge">'.$this->config->item('source')[$v->source].'</span>';
                }else if($v->source==2){
                    $source = '<span class="btn-success badge">'.$this->config->item('source')[$v->source].'</span>';
                }else if($v->source==3){
                    $source = '<span class="btn-warning badge">'.$this->config->item('source')[$v->source].'</span>';
                }else if($v->source==4){
                    $source = '<span class="btn-danger badge">'.$this->config->item('source')[$v->source].'</span>';
                }else{
                    $source ="";
                }
    
                if($v->enquery_type==0){
                    $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                }else if($v->enquery_type==1){
                   $enquery_status= '<span class="btn-success badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                }else if($v->enquery_type==2){
                    $enquery_status = '<span class="btn-info badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                }else if($v->enquery_type==3){
                    $enquery_status = '<span class="btn-warning badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                }else if($v->enquery_type==4){
                  $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
               }else if($v->enquery_type==5){
                $enquery_status = '<span class="bg-pink badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                }else if($v->enquery_type==6){
                  $enquery_status = '<span class="bg-blue badge">'.$this->config->item('enquery_status')[$v->enquery_type].'</span>';
                }else{
                    $enquery_status ="";
                }
                
                $followup_date = date("Y-m-d h:i A", strtotime($v->followup_date));
                $created_at = date("Y-m-d h:i A", strtotime($v->created_at));

                if($v->lead_owner == '0'){
                  $assignLead = '<li class=""><a  title="Assign Lead"   class="assignBtn" href="javascript:void(0)" data_id="' . $v->id .'" > <i class="bi bi-person-fill-add"></i> Assign Lead</a></li>';
                  }else{
                    $assignLead = '';
                  }

                  if(isset($v->lead_ip) && !empty($v->lead_ip) && $v->city == ''){
              
                    $responce = getLocation($v->lead_ip);
                    $city = $responce['city'];
                    $country = $responce['country'];
                    
                    if($city !==''){
                        $w = array();
                        $w['city'] = $city;
                        $w['country'] = $country;
                        $this->db->where('id', $v->id);
                        $this->db->update('enquery', $w);
                    }
                }else{
                    $city = (!empty($v->city))?$v->city:'';
                    $country = (!empty($v->country))?$v->country:'';
                }
    
                if($country == "IN"){
                  $countryImg = '<img src="'.base_url().'assets/images/flag/india.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
              }
              if($country == "RU"){
                  $countryImg = '<img src="'.base_url().'assets/images/flag/russia.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
              }
              if($country == "CZ"){
                  $countryImg = '<img src="'.base_url().'assets/images/flag/cz.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
              }
              if($country == "FR"){
                  $countryImg = '<img src="'.base_url().'assets/images/flag/fr.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
              }
              if($country == "DE"){
                  $countryImg = '<img src="'.base_url().'assets/images/flag/de.png" style="width:15px;height:15px;margin: 4px 4px 0px 0px;" alt="'.$country.'">';
              }


                ?>
                                    <tr>
                                        <td><?= $k+1?></td>
                                        <td><a
                                                href="<?= base_url('sub_admin/enquery/edit/').$v->id?>"><?= $v->name?></a>
                                        </td>
                                        <td><?= (!empty($city))?'<span class="d-flex">'.$countryImg.'  '.$city.'</span>':'<span class="badge bg-inverse-danger">N/A</span>'?>
                                        </td>
                                        <td><?= $v->phone?></td>
                                        <?php
                  $lead_owner = '<span class="badge bg-inverse-danger">N/A</span>';
                   if(isset($subAdminList)){
                      foreach ($subAdminList as $key => $value) {
                        if ($v->lead_owner==$value->id) {
                          $currentDate = date("y-m-d H:i:s");
                          $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
                           $last_activity = $value->last_activity;
                          if($fiveMinutLost < strtotime($last_activity)){
                              $online = '<span class="circle pulse green"></span>';
                          }else{
                              $online = '<span class="circle pulse red"></span>';
                          }
                         $lead_owner = $online.'<img src="'.base_url().$value->picture.'" title="'.$value->name.'" alt="'.$value->picture.'" class="imgWid">'; 
                      }
                    }
                    }
                    ?>
                                        <td><?= $lead_owner?></td>
                                        <td><?= $source?></td>
                                        <td><?= $enquery_status?></td>
                                        <td><?= $followup_date?></td>
                                        <td><?= $created_at?></td>
                                        <td>
                                            <div class="dropdown">
                                                <div class="" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                        class="bi bi-three-dots-vertical"></i></div>
                                                <div class="dropdown-menu leads showMe"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <ul>
                                                        <li class=""><a class=""
                                                                href="<?= base_url('sub_admin/enquery/edit/').$v->id ?>"
                                                                title="View Lead"><i class="bi bi-eye-fill"></i> View
                                                                Lead</i></a></li>
                                                        <li class=""><a class=""
                                                                href="<?= base_url('sub_admin/enquery/edit/').$v->id ?>"
                                                                title="Add FollowUp"><i
                                                                    class="bi bi-clipboard-plus-fill"></i> Add
                                                                FollowUp</i></a></li>
                                                        <?= $assignLead;?>
                                                    </ul>
                                                </div>
                                            </div>
                        </div>
                        </td>
                        </tr>
                        <?php }}else{?>
                        <tr>
                            <td colspan="10">
                                <h5 class="text-center">No Data Found</h5>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- weekly graph bar start  -->
        <div class="col-md-12 col-sm-12 mb-4 smnone">
            <div class="row saf__boxlight m-0 pb-0">
                <div class="col-md-6 col-sm-12 px-0">
                    <div class="card-header">
                        <h3 class="sub_admin mb-0">
                        <img src="<?= base_url()?>assets/images/line-bars.gif" class="resgif" alt=""
                            style="width: 6%;">Weekly Lead Bifurcation
                    </h3>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12  px-0 smnone">
                    <div class="card-header">
                        <h3 class="sub_admin mb-0">
                        <img src="<?= base_url()?>assets/images/wave-chart.gif" class="resgif" alt=""
                            style="width: 6%;">Daily Leads Activity Bifurcation
                    </h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 bg_color_bar p-0  ">
                    <div id="weeklyChart" class="mr-2">
                        <div id="columnchart_values"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 bg_color_bar p-0  ">

                    <div id="todayChart" class="ml-2">
                        <script type="text/javascript">
                        var TodayData = <?php echo $jsonTodayData ?>;
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable(TodayData);

                            var options = {
                                title: '',
                                is3D: true,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                        }
                        </script>

                        <div id="piechart_3d" style="width: 600px; height: 400px;"></div>

                    </div>
                </div>
            </div>
        </div>
        <!-- weekly graph bar end  -->

        <!-- monthly graph bar start  -->
        <div class="col-md-12 col-sm-12 mb-4 smnone">
            <div class="row saf__boxlight m-0">
                <div class="card-header">
                  
                    <h3 class="sub_admin mb-0">
                        <img src="<?= base_url()?>assets/images/calender.gif" class="resgif" alt=""
                            style="width: 4%;">Monthly Lead Bifurcation
                    </h3>
                </div>
                <!-- graph start -->
                <div class="col-md-12 col-sm-12 bg_color_bar p-0">
                    <div id="myChart" class="px-3">
                        <div id="chart_div"></div>
                        <br />
                    </div>
                </div>
                <!-- graph end  -->
            </div>
        </div>
        <!-- monthly graph bar end  -->
        <?php }?>


</div>

<!-- /.row -->

<!-- Main row -->

<div class="row">

    <!-- Left col -->

    <section class="col-lg-7 connectedSortable">

</div>

<!-- /.row (main row) -->

</div><!-- /.container-fluid -->

</section>

<!-- /.content -->

</div>

<!-- /.content-wrapper -->

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
<!-- weekly grapg  script start-->
<script type="text/javascript">
var weeklyResult = <?php echo $jsonWeeklyData ?>;
var newRow = ['Element', 'Number', {
    role: 'style'
}];
weeklyResult.unshift(newRow);
google.charts.load("current", {
    packages: ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable(weeklyResult);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
        {
            calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation"
        },
        2
    ]);

    var options = {
        title: "",
        width: 600,
        height: 400,
        bar: {
            groupWidth: "95%"
        },
        legend: {
            position: "none"
        },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
}
</script>
<!-- weekly grapg  script start-->



<!--monthly graph script start  -->
<script>
$(document).ready(function() {

    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);
    var result = <?php echo $jsonData ?>;
    // console.log(result);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(result);
        var options = {
            chart: {
                title: 'Techcentrica LMS',
                subtitle: 'Leads Data: <?= $year?>',
            },
            bars: 'vertical', // Required for Material Bar Charts.
            hAxis: {
                format: 'decimal'
            },
            height: 400,
            colors: ['#1b9e77', '#8e44ad']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function(e) {
            if (e.target.tagName === 'BUTTON') {
                options.hAxis.format = e.target.id === 'none' ? '' : e.target.id;
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        }
    }
})
</script>
<!--monthly graph script end  -->