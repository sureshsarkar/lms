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

         $this->load->model('admin/enquery_model', 'enquery');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedIn();
    }

    function index()
    {

        // pre($_SESSION);
        // exit;
        $data['enquery'] = $this->enquery->getList('enquery');
        $data['title'] = "Inquiry";
        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->load->view('admin/enquery/managemobile', $data); 
        }else{
            $this->load->view('admin/enquery/manage', $data); 
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
               redirect('admin/enquery/');
           } else {
               $this->session->set_flashdata('error', ' enquery Published  Failed');
               redirect('admin/enquery/');
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
               redirect('admin/enquery/');
           } else {
               $this->session->set_flashdata('error', 'enquery UnPublished   Failed');
               redirect('admin/enquery/');
           }
       }
   
       //  end code for publish user
   

    // Add 
    public function add()
    {
        $data = null;

        $this->form_validation->set_rules('name', 'Name ', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {
            $w = array();
            $w['table'] = "sub_admin";
            $w['field'] = "id,name";

            $data['sub_admin'] = $this->enquery->findDynamic($w);
        
            // end code for get category list 
            $data['title'] = "add_inquiry";
            $this->load->view('admin/enquery/add', $data);
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
            $insertData['lead_owner']         = (isset($_POST['lead_owner']) && !empty($_POST['lead_owner']))?$_POST['lead_owner']:"";
            $insertData['phone']              = $_POST['phone'];
            $insertData['source']             = $_POST['source'];
            $insertData['comments']           = $_POST['comments'];
            $insertData['followup_note']      = json_encode($followup_note);
            $insertData['status']             = 1;
            $insertData['created_at']         = $date;
            // pre($insertData);
            // exit;
            $result  = $this->enquery->save($insertData);
         
            if($result > 0){
                $this->session->set_flashdata('success', 'Inquiry  Added Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to  Add Inquiry !');
            }
            redirect('admin/enquery');
        }
    }


    // Edit
    function edit($id)
    {

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

               
                $data['title'] = 'Add FollowUp';
                $this->load->view('admin/enquery/edit', $data);

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
                            redirect('admin/enquery');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('admin/enquery/edit/'.$id);
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
        $countryImg = "";
        foreach ($list as $currentObj) {
            error_reporting(0);
       
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("Y-m-d h:i A", strtotime($temp_date));
            $followup_date = date("Y-m-d h:i A", strtotime($currentObj->followup_date));
            // $temp_updated_at = $currentObj->updated_at;
            // $updated_at = date("Y-m-d h:i A", strtotime($temp_updated_at));
          
           
            if($currentObj->source==1){
                $source = '<span class="btn-info badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==2){
                $source = '<span class="btn-success badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==3){
                $source = '<span class="btn-warning badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==4){
                $source = '<span class="btn-danger badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==5){
                $source = '<span class="bg-per badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else{
                $source ="";
            }

            if($currentObj->enquery_type==0){
                $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==1){
               $enquery_status= '<span class="btn-success badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==2){
                $enquery_status = '<span class="btn-info badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==3){
                $enquery_status = '<span class="btn-warning badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==4){
                $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==5){
                $enquery_status = '<span class="bg-pink badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==6){
                $enquery_status = '<span class="bg-blue badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==7){
                $enquery_status = '<span class="bg-danger badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else{
                $enquery_status ="N/A";
            }
           
            $new = ($currentObj->seen == 0)?'<span class="badge bg-info text-light blink_now" >New</span>':'';
            $currentDate = date("y-m-d H:i:s");
            $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
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

            if($country == "IN"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/india.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "RU"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/russia.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "CZ"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/cz.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "FR"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/fr.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "DE"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/de.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }

            $picture =  $online.'<img src="'.base_url().$currentObj->picture.'" title="'.$currentObj->sname.'" alt="'.$currentObj->picture.'" class="imgWid">'; 

            
           
            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('admin/enquery/edit/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            // $row[]=(!empty($currentObj->lead_ip))?$currentObj->lead_ip:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]= (!empty($city))?'<span class="d-flex">'.$countryImg.' '.$city.'</span>':'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]=$currentObj->phone;
            $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$picture:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$online.$currentObj->sname:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]=$source;
            $row[] = $enquery_status;
            $row[] = $followup_date;
              $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
            // $row[] = $fiveMinutLost." ".$currentObj->last_activity;
            $row[] = $currentObj->updated_at;
            $row[] = $date_at." ".$new;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'admin/enquery/edit/' .$currentObj->id .'" title="View This Leads" >View This Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'admin/enquery/edit/' .$currentObj->id .'" title="Add New Followup" >Add New Followup</i></a></li>
                          <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Spam</a></li>
                        </ul>
                      </div>
                    </div>
                </div>';
                

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
        $countryImg = "";
        foreach ($list as $currentObj) {
            error_reporting(0);
       
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("Y-m-d h:i A", strtotime($temp_date));
            $followup_date = date("Y-m-d h:i A", strtotime($currentObj->followup_date));
            // $temp_updated_at = $currentObj->updated_at;
            // $updated_at = date("Y-m-d h:i A", strtotime($temp_updated_at));
          
           
            if($currentObj->source==1){
                $source = '<span class="btn-info badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==2){
                $source = '<span class="btn-success badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==3){
                $source = '<span class="btn-warning badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==4){
                $source = '<span class="btn-danger badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else if($currentObj->source==5){
                $source = '<span class="bg-per badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            }else{
                $source ="";
            }

            if($currentObj->enquery_type==0){
                $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==1){
               $enquery_status= '<span class="btn-success badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==2){
                $enquery_status = '<span class="btn-info badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==3){
                $enquery_status = '<span class="btn-warning badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==4){
                $enquery_status = '<span class="bg-per badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==5){
                $enquery_status = '<span class="bg-pink badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==6){
                $enquery_status = '<span class="bg-blue badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else if($currentObj->enquery_type==7){
                $enquery_status = '<span class="bg-danger badge">'.$this->config->item('enquery_status')[$currentObj->enquery_type].'</span>';
            }else{
                $enquery_status ="N/A";
            }
           
            $new = ($currentObj->seen == 0)?'<span class="badge bg-info text-light blink_now" >New</span>':'';
            $currentDate = date("y-m-d H:i:s");
            $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
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

            if($country == "IN"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/india.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "RU"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/russia.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "CZ"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/cz.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "FR"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/fr.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }
            if($country == "DE"){
                $countryImg = '<img src="'.base_url().'assets/images/flag/de.png" style="width:20px;height:20px;" alt="'.$country.'">';
            }

            $picture =  $online.'<img src="'.base_url().$currentObj->picture.'" title="'.$currentObj->sname.'" alt="'.$currentObj->picture.'" class="imgWid">'; 

            
           
            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('admin/enquery/edit/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            // $row[]=(!empty($currentObj->lead_ip))?$currentObj->lead_ip:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]= (!empty($city))?'<span class="d-flex">'.$countryImg.' '.$city.'</span>':'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]=$currentObj->phone;
            // $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$picture:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$online.$currentObj->sname:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]=$source;
            // $row[] = $enquery_status;
            $row[] = $followup_date." ".$new;
            //   $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
            // $row[] = $fiveMinutLost." ".$currentObj->last_activity;
            // $row[] = $currentObj->updated_at;
            // $row[] = $date_at;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'admin/enquery/edit/' .$currentObj->id .'" title="View This Leads" >View This Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'admin/enquery/edit/' .$currentObj->id .'" title="Add New Followup" >Add New Followup</i></a></li>
                          <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Spam</a></li>
                        </ul>
                      </div>
                    </div>
                </div>';
                

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

    // end code for get total list of places

    // end code for ajax list 

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

                $this->load->view('admin/enquery/view', $data);
            } else {
                redirect('admin/enquery/view');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');

            redirect('admin/enquery/view');
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
                        redirect('admin/enquery');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('admin/enquery');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('admin/enquery');
            }
        }
    }

    public function checkSubAdminLive(){
        if(isset($_POST['userActive']) && $_POST['userActive'] == '1'){
            
            $currentDate = date("y-m-d H:i:s");
            $fiveMinutLost = strtotime("-5 minutes", strtotime($currentDate));
            $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
            $sql = "";
            $sql .= "SELECT id,name FROM sub_admin ";
            $sql .= "WHERE last_activity BETWEEN '".$fiveMinutLost."' AND '".$currentDate."'";
            
            $res = $this->enquery->rawQuery($sql);
            echo json_encode(array("data"=>$res));
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
                    $update['lead_owner'] = $_SESSION['userId'];
                    $this->enquery->save($update);

                    $this->session->set_flashdata('message', ' Moved to Spam Successfully !');

                    echo "success";

                    exit();
            
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        }

       
        public function sendEmail(){
            return true;
            exit();
            if(isset($_POST['sendEmail']) && $_POST['sendEmail'] =='1'){
                
                $w = array();
                $w['field'] = "email";
                $emailData = $this->enquery->findDynamic($w);

                $toEmail = "";
                foreach ($emailData as $k => $v) {
                    if(isset($v->email) && !empty($v->email)){
                        // $comma =  ($k==0)?'':',';
                        // $toEmail .= $comma.$v->email;

                        $subject = "Test Email for Fastival";
                        $message = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, quibusdam.";
                    $r =  $this->send_email($v->email, $subject, $message);
                    }
                }
                return true;

            }
        }

}


