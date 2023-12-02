<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';

class Enquery extends BaseController
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        // $this->load->library('ion_auth');

        $this->load->library('form_validation');

         $this->load->model('sub_admin/enquery_model', 'enquery');
         $this->load->model('admin/category_model', 'category');
        
		$this->isLoggedInSubAdmin();
         
    }

    function index()
    {

         // check login
         $w = array();
         $w['id'] = $_SESSION['userId'];
         $w['status'] = 1;
         $w['table'] = "sub_admin";

         $res = $this->enquery->findDynamic($w);

         if(empty($res)){
             session_unset();
        redirect("sub_admin/login");
         }

        // pre($_SESSION);
        // exit();
        $data['enquery'] = $this->enquery->getList('enquery');
        $this->global['title'] = 'Techcentrica :Enquery List';
        
        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->loadSubAdminViews("sub_admin/enquery/managemobile", $this->global, $data , NULL,'sub_admin');
        }else{
            $this->loadSubAdminViews("sub_admin/enquery/manage", $this->global, $data , NULL,'sub_admin');
        }


    }

    // code for get list   // like  country , state , city 
    public function getList(){

        if(!empty($_POST['id']))
        {
            // $talbeName  = $_POST['tableName'];
            // $sql  = "SELECT * FROM ";
            $tablename = $_POST['tableName'];
            $columnNam = $_POST['columnNam'];
            $id = $_POST['id'];
            $sql="Select * from  $tablename where  $columnNam=$id";    
            $result  = $this->states->rawQuery($sql);
            if(!empty($result)){
                
                $p= '';
                foreach ($result as $key => $value) {

                    $p.='<option value="'.$value->id.'">'.$value->name.'</option>';
                }
            }else{
                $p.='<option value=""> -- No State Found -- </option>';
            }
            echo $p;
        }
    }


    // end code for get list // like country , state , city 

       //  code for publish user 
       public function published($id)
       {
           $updateData  = array();
           $updateData['id']  = $id;
           $updateData['status'] = 1;
           $result = $this->enquery->save($updateData);
           if ($result) {
               $this->session->set_flashdata('success', 'enquery  Published  Sucessfully');
               redirect('sub_admin/enquery/');
           } else {
               $this->session->set_flashdata('error', ' enquery Published  Failed');
               redirect('sub_admin/enquery/');
           }
       }
       //  end code for publish user
       //  code for Unpublish user 
       public function Unpublished($id)
       {
           $updateData  = array();
           $updateData['id']  = $id;
           $updateData['status'] = 0;
           $result = $this->enquery->save($updateData);
           if ($result) {
               $this->session->set_flashdata('success', 'enquery UnPublished  Sucessfully');
               redirect('sub_admin/enquery/');
           } else {
               $this->session->set_flashdata('error', 'enquery UnPublished   Failed');
               redirect('sub_admin/enquery/');
           }
       }
   
       //  end code for publish user
   

    // Add 
    public function add()
    {

         // check login
         $w = array();
         $w['id'] = $_SESSION['userId'];
         $w['status'] = 1;
         $w['table'] = "sub_admin";

         $res = $this->enquery->findDynamic($w);

         if(empty($res)){
             session_unset();
             redirect("sub_admin/login");
         }

        $data = null;

        $this->form_validation->set_rules('name', 'Name ', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {

            // end code for get category list 
            $this->global['title'] = 'Techcentrica :Add Lead';
            $this->loadSubAdminViews("sub_admin/enquery/add", $this->global, $data , NULL,'sub_admin');

           } else {
               //  code for insert data 

             $followup_note = array();
             $date = date("Y-m-d H:i:s");

            if(isset($_POST['followup_note']) && !empty($_POST['followup_note'])){
                $datetime = $_POST['followup_date'] . ' ' . $_POST['followup_time'];
                $datetime     = date("Y-m-d H:i:s",strtotime($datetime));
                $followup_note[] = array('followup_note'=>$_POST['followup_note'],'followup_date'=>$datetime,"enquery_type"=>$_POST['enquery_type']);
            }

            $insertData  = array();
            $insertData['name']               = $_POST['name'];
            $insertData['email']              = $_POST['email'];
            $insertData['phone']              = $_POST['phone'];
            $insertData['source']             = $_POST['source'];
            $insertData['comments']           = $_POST['comments'];
            $insertData['lead_owner']           = $_SESSION['userId'];
            $insertData['followup_note']      = json_encode($followup_note);
            $insertData['status']             = 1;
            $insertData['created_at']         = $date;


            $result  = $this->enquery->save($insertData);
         
            if($result > 0){
                $this->session->set_flashdata('success', 'Enquery  Added Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to  Add Enquery !');
            }
            redirect('sub_admin/enquery');
        }
    }


    // Edit
    function edit($id)
    {
        
         // check login
         $w = array();
         $w['id'] = $_SESSION['userId'];
         $w['status'] = 1;
         $w['table'] = "sub_admin";

         $res = $this->enquery->findDynamic($w);


         if(empty($res)){
             session_unset();
        redirect("sub_admin/login");
         }

        if (isset($id) and !empty($id)) {
            $data = null;
            $this->enquery->save(array('id'=> $id,'seen'=>1));

            $this->form_validation->set_rules('id', 'ID ', 'required');
            $this->form_validation->set_rules('followup_note', 'Followup Note ', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('admin/category_model','category');
                $this->load->model('admin/enquery_model','enquery');
                
                $editData = $this->enquery->find($id);
                $data['edit_data'] = $editData;

                $up = array();
                $up['id'] = $id;
                $up['count_seen'] = $editData->count_seen + 1;
                $this->enquery->save($up);
               
                $this->global['title'] = 'Techcentrica :Add FollowUp';
                $this->loadSubAdminViews("sub_admin/enquery/edit", $this->global, $data , NULL,'sub_admin');

            } else {
                //  code for insert data 
                $date = date("Y-m-d H:i:s");
                $followup_note = array();
                $oldFollowupData = array();
                $arr = array();
                $id  = $_POST['id'];
                $datetime = $_POST['followup_date'] . ' ' . $_POST['followup_time'];
                $datetime     = date("Y-m-d H:i:s",strtotime($datetime));

                
                $w = array();
                $w['id'] = $id;
                $w['field'] = 'followup_note';
                $FollowupData = $this->enquery->findDynamic($w);
                
                if(isset($FollowupData) && count($FollowupData) >0){
                    $oldFollowupData = $FollowupData[0];
                    $oldFollowupData = json_decode($oldFollowupData->followup_note);
                }
                
                
                if(isset($_POST['followup_note']) && !empty($_POST['followup_note'])){
                    $followup_note[] = array('followup_note'=>$_POST['followup_note'],'followup_date'=>$datetime,"enquery_mode"=>$_POST['enquery_mode'],"lead_quality"=>$_POST['lead_quality'],"enquery_type"=>$_POST['enquery_status'],"created_at"=>$date);
                }
                   
                if(!empty($oldFollowupData) >0 && count($followup_note) >0){
                    $arr = array_merge($oldFollowupData, $followup_note);
                }else if(!empty($oldFollowupData) && count($oldFollowupData) >0){
                    $arr = $oldFollowupData;
                }else if(count($followup_note) >0){
                    $arr = $followup_note;
                }
                // pre($_POST);
                // exit();
                // pre($_POST);
                // exit();
                    $updateData  = array();
                    $updateData['id']                 = $id;
                    $updateData['lead_owner']         = $_SESSION['userId'];
                    $updateData['enquery_type']       = $_POST['enquery_status'];
                    $updateData['enquery_mode']       = $_POST['enquery_mode'];
                    $updateData['lead_quality']       = $_POST['lead_quality'];
                    $updateData['followup_date']      = $datetime;
                    $updateData['followup_note']      = json_encode($arr);
                    $updateData['updated_at']         = $date;
                    // pre($updateData);
                    // exit();
                    $result  = $this->enquery->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Enquery Updated Successfully!');
                            redirect('sub_admin/enquery');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('sub_admin/enquery/edit/'.$id);
                        }
            }
        }

    }

    //  code for ajax list 
    public function ajax_list()
    {
        $list = $this->enquery->get_datatables();

        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre(gettype($currentObj->lead_owner).$currentObj->lead_owner);
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("y-m-d", strtotime($temp_date));
            $followup_date = date("Y-m-d h:i A", strtotime($currentObj->followup_date));
            $temp_updated_at = $currentObj->updated_at;
            $updated_at = date("Y-m-d h:i A", strtotime($temp_updated_at));
          
           
            if($currentObj->source==1){
                $source = '<span class="bg-inverse-warning badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==2){
                $source = '<span class="btn-success badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==3){
                $source = '<span class="btn-warning badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==4){
                $source = '<span class="btn-danger badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==5){
                $source = '<span class="bg-per badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else{
                $source ="";
            }

            if($currentObj->enquery_type==0){
                $enquery_status = '<span class="bg-inverse-success py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==1){
               $enquery_status= '<span class="bg-inverse-blue py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==2){
                $enquery_status = '<span class="btn-info py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==3){
                $enquery_status = '<span class="btn-warning py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==4){
                $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==5){
                $enquery_status = '<span class="bg-pink py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==6){
                $enquery_status = '<span class="bg-blue py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==7){
                $enquery_status = '<span class="bg-danger py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else{
                $enquery_status ="N/A";
            }
           
            $new = ($currentObj->seen == 0)?'style="font-weight:bold"':'';
            $currentDate = date("y-m-d H:i:s");
            $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
            // $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
             $last_activity = $currentObj->last_activity;
            if($fiveMinutLost < strtotime($last_activity)){
                $online = '<span class="circle pulse green"></span>';
            }else{
                $online = '<span class="circle pulse red"></span>';
            }

            if(isset($currentObj->lead_ip) && !empty($currentObj->lead_ip) && $currentObj->city == ''){
              
                $responce = getLocation($currentObj->lead_ip);
                $city = $responce['city'];
                $country = $responce['country'];
                
                if($city !==''){
                    // echo "ok";
                    $w = array();
                    $w['id'] = $currentObj->id;
                    $w['city'] = $city;
                    $w['country'] = $country;
                    $r = $this->enquery->save($w);
                }
            }else{
                $city = (!empty($currentObj->city))?$currentObj->city:'';
                $country = (!empty($currentObj->country))?$currentObj->country:'';
            }
            $countryImg = '';
            if($country == "IN"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/india.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;"  alt="'.$country.'">';
            }
            if($country == "RU"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/russia.png" style="width:15px;height:15px; margin-right:5px; margin-top: 5px;" alt="'.$country.'">';
            }
            if($country == "CZ"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/cz.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;" alt="'.$country.'">';
            }
            if($country == "FR"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/fr.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;" alt="'.$country.'">';
            }
            if($country == "DE"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/de.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;" alt="'.$country.'">';
            }

            if($currentObj->lead_owner == 0){
              $assignLead =   '<li class=""><a  title="Assign Lead" class="assignBtn" href="javascript:void(0)" data_id="' . $currentObj->id .'" ><i class="bi bi-person-fill-add"></i> Assign Lead</a></li>';
              }else{
                $assignLead = '';
              }

            if($currentObj->bookmark == 0){
              $bookmark =   '<a href="javascript:void(0)" title="Bookmark" booktype="' . $currentObj->bookmark .'"  data_id="' . $currentObj->id .'" class="text-dark bookmark"><i class="bi bi-star"></i></a></>';
              }else{
                $bookmark = '<a href="javascript:void(0)" title="UnBookmark" booktype="' . $currentObj->bookmark .'" data_id="' . $currentObj->id .'" style="color: #f48228;" class="bookmark"><i class="bi bi-star-fill"></i></a>';
              }

              $picture =  $online.'<img src="'.base_url().$currentObj->picture.'" title="'.$currentObj->sname.'" alt="'.$currentObj->picture.'" class="imgWid">'; 
              
            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] = $bookmark;
            $row[] ='<a href="'.base_url('sub_admin/enquery/edit/').$currentObj->id.'" class="nameClass" '.$new.'>'.$currentObj->name.'</a>';
             $row[]=(!empty($currentObj->phone))?$currentObj->phone:'N/A';
            $row[]=(!empty($currentObj->email))?$currentObj->email:'N/A';
            $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$picture:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]=$source;
            $row[] = $enquery_status;
            $row[] = $followup_date;
              $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
            // $row[] = $fiveMinutLost." ".$currentObj->last_activity;
            // $row[] = $currentObj->updated_at;
            $row[] = $date_at;
            // $row[]=(!empty($currentObj->lead_ip))?$currentObj->lead_ip:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]= (!empty($city))?'<span class="d-flex">'.$countryImg.' '.$city.'</span>':'<span class="badge bg-inverse-danger">N/A</span>';
           
            $actionData = '<div class="dropdown">
            <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
              <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                <ul>
                <li class=""><a class="" href="' .base_url() .'sub_admin/enquery/edit/' .$currentObj->id .'" title="View Lead" ><i class="bi bi-eye-fill"></i> View Lead</i></a></li>
                <li class=""><a class="" href="' .base_url() .'sub_admin/enquery/edit/' .$currentObj->id .'" title="Add FollowUp" ><i class="bi bi-clipboard-plus-fill"></i> Add FollowUp</i></a></li>'.$assignLead.'
                <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" ><i class="bi bi-trash-fill"></i> Move To Spam</a></li>
                </ul>
              </div>
            </div>
        </div>';
            $row[] = $actionData;
                
                

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->enquery->count_all(),
            "recordsFiltered" => $this->enquery->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }
    // end code for ajax list 

    //  code for mobile ajax list 
    public function mobile_ajax_list()
    {
        $list = $this->enquery->get_datatables();

        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre(gettype($currentObj->lead_owner).$currentObj->lead_owner);
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("y-m-d", strtotime($temp_date));
            $followup_date = date("Y-m-d h:i A", strtotime($currentObj->followup_date));
            $temp_updated_at = $currentObj->updated_at;
            $updated_at = date("Y-m-d h:i A", strtotime($temp_updated_at));
          
           
            if($currentObj->source==1){
                $source = '<span class="bg-inverse-warning badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==2){
                $source = '<span class="btn-success badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==3){
                $source = '<span class="btn-warning badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==4){
                $source = '<span class="btn-danger badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==5){
                $source = '<span class="bg-per badge py-2">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else{
                $source ="";
            }

            if($currentObj->enquery_type==0){
                $enquery_status = '<span class="bg-inverse-success py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==1){
               $enquery_status= '<span class="bg-inverse-blue py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==2){
                $enquery_status = '<span class="btn-info py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==3){
                $enquery_status = '<span class="btn-warning py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==4){
                $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==5){
                $enquery_status = '<span class="bg-pink py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==6){
                $enquery_status = '<span class="bg-blue py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==7){
                $enquery_status = '<span class="bg-danger py-2 badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else{
                $enquery_status ="N/A";
            }
           
            $new = ($currentObj->seen == 0)?'style="font-weight:bold"':'';
            $currentDate = date("y-m-d H:i:s");
            $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
            // $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
             $last_activity = $currentObj->last_activity;
            if($fiveMinutLost < strtotime($last_activity)){
                $online = '<span class="circle pulse green"></span>';
            }else{
                $online = '<span class="circle pulse red"></span>';
            }

            if(isset($currentObj->lead_ip) && !empty($currentObj->lead_ip) && $currentObj->city == ''){
              
                $responce = getLocation($currentObj->lead_ip);
                $city = $responce['city'];
                $country = $responce['country'];
                
                if($city !==''){
                    // echo "ok";
                    $w = array();
                    $w['id'] = $currentObj->id;
                    $w['city'] = $city;
                    $w['country'] = $country;
                    $r = $this->enquery->save($w);
                }
            }else{
                $city = (!empty($currentObj->city))?$currentObj->city:'';
                $country = (!empty($currentObj->country))?$currentObj->country:'';
            }
            $countryImg = '';
            if($country == "IN"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/india.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;"  alt="'.$country.'">';
            }
            if($country == "RU"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/russia.png" style="width:15px;height:15px; margin-right:5px; margin-top: 5px;" alt="'.$country.'">';
            }
            if($country == "CZ"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/cz.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;" alt="'.$country.'">';
            }
            if($country == "FR"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/fr.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;" alt="'.$country.'">';
            }
            if($country == "DE"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/de.png" style="width:15px;height:15px; margin-right:5px;margin-top: 5px;" alt="'.$country.'">';
            }

            if($currentObj->lead_owner == 0){
              $assignLead =   '<li class=""><a  title="Assign Lead" class="assignBtn" href="javascript:void(0)" data_id="' . $currentObj->id .'" ><i class="bi bi-person-fill-add"></i> Assign Lead</a></li>';
              }else{
                $assignLead = '';
              }

            if($currentObj->bookmark == 0){
              $bookmark =   '<a href="javascript:void(0)" title="Bookmark" booktype="' . $currentObj->bookmark .'"  data_id="' . $currentObj->id .'" class="text-dark bookmark"><i class="bi bi-star"></i></a></>';
              }else{
                $bookmark = '<a href="javascript:void(0)" title="UnBookmark" booktype="' . $currentObj->bookmark .'" data_id="' . $currentObj->id .'" style="color: #f48228;" class="bookmark"><i class="bi bi-star-fill"></i></a>';
              }

              $picture =  $online.'<img src="'.base_url().$currentObj->picture.'" title="'.$currentObj->sname.'" alt="'.$currentObj->picture.'" class="imgWid">'; 
              
            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('sub_admin/enquery/edit/').$currentObj->id.'" class="nameClass" '.$new.'>'.$currentObj->name.'</a>';
            // $row[]=(!empty($currentObj->phone))?$currentObj->phone:'N/A';
            $row[] = $followup_date;
       
            $actionData = '<div class="dropdown">
            <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
              <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                <ul>
                <li class=""><a class="" href="' .base_url() .'sub_admin/enquery/edit/' .$currentObj->id .'" title="View Lead" ><i class="bi bi-eye-fill"></i> View Lead</i></a></li>
                <li class=""><a class="" href="' .base_url() .'sub_admin/enquery/edit/' .$currentObj->id .'" title="Add FollowUp" ><i class="bi bi-clipboard-plus-fill"></i> Add FollowUp</i></a></li>'.$assignLead.'
                <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" ><i class="bi bi-trash-fill"></i> Move To Spam</a></li>
                </ul>
              </div>
            </div>
        </div>';
            $row[] = $actionData;
                
                

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->enquery->count_all(),
            "recordsFiltered" => $this->enquery->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }
    // end code for mobile ajax list 


    function view($id)
    {
        if (isset($id) and !empty($id)) {
            $data = null;

            $this->form_validation->set_rules('name', 'Name Name', 'required');
            $this->form_validation->set_rules('status', 'Status Name', 'trim|xss_clean');
            $this->form_validation->set_rules('created_at', 'Created_at Name', 'trim');
            $this->form_validation->set_rules('update_at', 'Update_at Name', 'trim');

            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('admin/category_model','category');
                $this->load->model('admin/enquery_model','enquery');

                $editData = $this->enquery->getRow('enquery', $id);



                // end code for get state list 

                 // code for get cayegory list 
                $categoryId      =  $editData->category_id;

                 $categoryList   = $this->category->all();
                if (!empty($categoryList)) {
                    $data['categoriesList']  = $categoryList;
                }

                $subcategoryId      =  $editData->enquery_id;

                 $subcategoryList   = $this->enquery->all();
                 if (!empty($subcategoryList)) {
                    $data['subcategoriesList']  = $subcategoryList;
                }
               


                $data['edit_data'] = $editData;

                $this->load->view('sub_admin/enquery/view', $data);
            } else {
                redirect('sub_admin/enquery/view');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');

            redirect('sub_admin/enquery/view');
        }
    }


// delete
    function delete()
    {
        $id = "";


        if (isset($_POST)) {
            $id = $_POST["id"];
        }

        if (isset($id) and !empty($id)) {
            $count = $this->enquery->getCount('enquery', 'enquery.id', $id);

            if (isset($count) and !empty($count)) {
                $this->enquery->delete('enquery', 'id', $id);

                $this->session->set_flashdata('message', ' enquery Deleted Successfully !');

                echo "success";

                exit();
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }

// assignMe
    function assignMe()
    {
        $id = "";
        if (isset($_POST)) {
            $id = $_POST["id"];
        }

        if (isset($id) and !empty($id)) {

                $update = array();
                $update['id'] = $id;
                $update['lead_owner'] = $_SESSION['userId'];
                $this->enquery->save($update);

                $this->session->set_flashdata('message', ' Enquery Assigned Successfully !');

                echo "success";

                exit();
           
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }

// bookmark
    function bookmark()
    {
        $id = "";
        if (isset($_POST)) {
            $id = $_POST["id"];
        }

        if (isset($id) and !empty($id)) {

                $update = array();
                $update['id'] = $id;
                $update['bookmark'] = $_POST['bookmark'];
                $this->enquery->save($update);
                echo "success";
                exit();
           
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }


    function deleteAll($id = '')
    {


        $all_ids = $_POST["allIds"];

        if (isset($all_ids) and !empty($all_ids)) {
            //$count=$this->category->getCount('category','category.id',$id);

            for ($a = 0; $a < count($all_ids); $a++) {
                if ($all_ids[$a] != "") {
                    $this->enquery->delete('enquery', 'id', $all_ids[$a]);

                    $this->session->set_flashdata('message', ' enquery(s) Deleted Successfully !');
                }
            }

            echo "success";

            exit();
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }

    function export($filetype = 'csv')
    {


        $searchBy = '';

        $searchValue = '';

        $v_fields = ['name', 'status', 'created_at', 'update_at'];

        $data['sortBy'] = '';

        $order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields) ? $_GET['sortBy'] : '';

        $order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'asc' : 'desc';

        $searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields) ? $_GET['searchBy'] : null;

        $searchValue = isset($_GET['searchValue']) ? $_GET['searchValue'] : '';

        $searchValue = addslashes($searchValue);

        $pagi = ['order' => $order, 'order_by' => $order_by];

        $result = $this->enquery->getList("enquery");

        if ($filetype == 'csv') {
            header('Content-Type: application/csv');

            header('Content-Disposition: attachment; filename=enquery.csv');

            header('Pragma: no-cache');

            $csv = 'Sr. No,' . implode(',', $v_fields) . "\n";

            foreach ($result as $key => $value) {
                $line = $key + 1 . ',';

                foreach ($v_fields as $field) {
                    $line .= '"' . addslashes($value->$field) . '"' . ',';
                }

                $csv .= ltrim($line, ',') . "\n";
            }

            echo $csv;
            exit();
        } elseif ($filetype == 'pdf') {
            error_reporting(0);

            ob_start();

            $this->load->library('m_pdf');

            $table = '

			<html>

			<head><title></title>

			<style>

			table{

				border:1px solid;

			}

			tr:nth-child(even)

			{

			    background-color: rgba(158, 158, 158, 0.82);

			}

			</style>

			</head>

			<body>

			<h1 align="center">category</h1>

			<table><tr>';

            $table .= '<th>Sr. No</th>';

            foreach ($v_fields as $value) {
                $table .= '<th>' . $value . '</th>';
            }

            $table .= '</tr>';

            foreach ($result as $key => $value) {
                $table .= '<tr><td>' . ($key + 1) . '</td>';

                foreach ($v_fields as $field) {
                    $table .= '<td>' . $value->$field . '</td>';
                }

                $table .= '</tr>';
            }

            $table .= '</table></body></html>';

            ob_clean();

            $pdf = $this->m_pdf->load();

            $pdf->WriteHTML($table);

            $pdf->Output('category.pdf', "D");

            exit();
        } else {
            echo 'Invalid option';
            exit();
        }
    }

    function status($field, $id)
    {
        if (in_array($field, ['status'])) {
            if (isset($id) && !empty($id)) {
                if (!is_null($enquery = $this->enquery->getRow('enquery', $id))) {
                    $status = $enquery->$field;

                    if ($status == 1) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $statusData[$field] = $status;

                    $this->enquery->updateData('enquery', $statusData, $id);

                    $this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

                    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
                        redirect($_GET['redirect']);
                    } else {
                        redirect('sub_admin/enquery');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('sub_admin/enquery');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('sub_admin/enquery');
            }
        }
    }
    

        // moveToSpam
        function moveToSpam()
        {
            $id = "";
            if (isset($_POST)) {
                $id = $_POST["id"];
            }

            if (isset($id) and !empty($id)) {

                    $update = array();
                    $update['id'] = $id;
                    $update['spam_Id'] = 1;
                    $this->enquery->save($update);

                    $this->session->set_flashdata('message', ' Moved to Spam Successfully !');

                    echo "success";

                    exit();
            
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        }




}


