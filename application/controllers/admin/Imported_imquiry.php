<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';
require 'vendor/autoload.php';
class Imported_imquiry extends BaseController
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        // $this->load->library('ion_auth');

        $this->load->library('form_validation');

         $this->load->model('admin/imported_imquiry_model', 'imported_imquiry');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedIn();
    }

    function index()
    {

        // pre($_SESSION);
        // exit;
        $data['imported_imquiry'] = $this->imported_imquiry->getList('imported_imquiry');
        $data['title'] = "imported_imquiry"; 

        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->load->view('admin/imported_imquiry/managemobile', $data); 
        }else{
            $this->load->view('admin/imported_imquiry/manage', $data); 
        }

    }

    function import()
    {
        $data['title'] = "imported_imquiry"; 
        $this->load->view('admin/imported_imquiry/import', $data); 
    }

    
    // Add 
    public function add()
    {
        $data = null;

        $this->form_validation->set_rules('name', 'Name ', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {

            // end code for get category list 
            $data['title'] = "imported_imquiry";
            $this->load->view('admin/imported_imquiry/add', $data);
           } else {
               //  code for insert data 
            //  $followup_note = array();
            //  $date = date("Y-m-d H:i:s");

            // if(isset($_POST['followup_note']) && !empty($_POST['followup_note'])){
            //     $datetime = $_POST['followup_date'] . ' ' . $_POST['followup_time'];
            //     $datetime     = date("Y-m-d H:i:s",strtotime($datetime));
            //     $followup_note[] = array('followup_note'=>$_POST['followup_note'],'followup_date'=>$datetime,"enquery_type"=>$_POST['enquery_type']);
            // }
            // pre($_POST);
            // exit;
            $insertData  = array();
            $insertData['name']               = $_POST['name'];
            $insertData['email']              = $_POST['email'];
            $insertData['phone']              = $_POST['phone'];
            $insertData['city']               = $_POST['city'];
            $insertData['state']              = $_POST['state'];
            $insertData['platform']           = $_POST['platform'];
            $insertData['preference']         = $_POST['preference'];
            $insertData['campaign_name']      = $_POST['campaign_name'];
            $insertData['campaingn_date']     = $_POST['campaingn_date'];
            $insertData['interested_for']     = $_POST['interested_for'];
            $insertData['status']             = 1;
            $insertData['created_at']         = date("Y-m-d H:i:s");
         
            $result  = $this->imported_imquiry->save($insertData);
         
            if($result > 0){
                $this->session->set_flashdata('success', 'Inquiry  Added Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to  Add Inquiry !');
            }
            redirect('admin/imported_imquiry');
        }
    }



    public function excelSheet(){

        if(isset($_POST['type']) && $_POST['type'] == 1){


            if(isset($_FILES['excel_file']) && !empty($_FILES['excel_file']['name'])){
            
              $fileName = $_FILES['excel_file']['name'];
            }
        
			 $upload_status =  $this->uploadDoc();
            
			if($upload_status!=false)
			{
				$inputFileName = 'uploads/excel_files/'.$upload_status;
				$inputTileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
				$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputTileType);
				$spreadsheet = $reader->load($inputFileName);
				$sheet = $spreadsheet->getSheet(0);

                $dateTime = date("Y-m-d H:i:s");
				foreach($sheet->getRowIterator() as $row)
				{
                    $phone = $spreadsheet->getActiveSheet()->getCell('G'.$row->getRowIndex());

                    $w = array();
                    $w['phone'] = $phone;
                    $duplicateData  = $this->imported_imquiry->finddynamic($w);

                    if(isset($duplicateData) && count($duplicateData) >0){

                    }else{

                    $insertData['campaign_name'] = $spreadsheet->getActiveSheet()->getCell('A'.$row->getRowIndex());
                    $insertData['platform'] = $spreadsheet->getActiveSheet()->getCell('B'.$row->getRowIndex());
                    $insertData['interested_for'] = $spreadsheet->getActiveSheet()->getCell('C'.$row->getRowIndex());
                    $insertData['preference'] =$spreadsheet->getActiveSheet()->getCell('D'.$row->getRowIndex());
                    $insertData['name'] = $spreadsheet->getActiveSheet()->getCell('E'.$row->getRowIndex());
                    $insertData['email'] = $spreadsheet->getActiveSheet()->getCell('F'.$row->getRowIndex());
                    $insertData['phone'] = $spreadsheet->getActiveSheet()->getCell('G'.$row->getRowIndex());
                    $insertData['city'] = $spreadsheet->getActiveSheet()->getCell('H'.$row->getRowIndex());
                    $insertData['state'] = $spreadsheet->getActiveSheet()->getCell('I'.$row->getRowIndex());
                    $insertData['campaingn_date'] = $spreadsheet->getActiveSheet()->getCell('J'.$row->getRowIndex());
                    $insertData['status'] = 1;
                    $insertData['created_at'] = $dateTime;
				
					$this->db->insert('imported_imquiry',$insertData);
                    }
				}

				$this->session->set_flashdata('success','Successfulyy Data Imported');
				redirect(base_url('admin/imported_imquiry'));
			}
			else
			{
				$this->session->set_flashdata('error','File is not uploaded');
				redirect(base_url('admin/imported_imquiry'));
			}
		

        }
    }

    function uploadDoc()
	{
		$uploadPath = 'uploads/excel_files/';
		if(!is_dir($uploadPath))
		{
			mkdir($uploadPath,0777,TRUE); // FOR CREATING DIRECTORY IF ITS NOT EXIST
		}

		$config['upload_path']=$uploadPath;
		$config['allowed_types'] = 'csv|xlsx|xls';
		$config['max_size'] = 1000000;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if($this->upload->do_upload('excel_file'))
		{
			$fileData = $this->upload->data();
			return $fileData['file_name'];
		}
		else
		{
			return false;
		}
	}


    // end code for get list // like country , state , city 

       //  code for publish user 
       public function published($id)
       {
           $updateData  = array();
           $updateData['id']  = $id;
           $updateData['status'] = 1;
           $result = $this->imported_imquiry->save($updateData);
           if ($result) {
               $this->session->set_flashdata('success', 'imported_imquiry  Published  Sucessfully');
               redirect('admin/imported_imquiry/');
           } else {
               $this->session->set_flashdata('error', ' imported_imquiry Published  Failed');
               redirect('admin/imported_imquiry/');
           }
       }
       //  end code for publish user
       //  code for Unpublish user 
       public function Unpublished($id)
       {
           $updateData  = array();
           $updateData['id']  = $id;
           $updateData['status'] = 0;
           $result = $this->imported_imquiry->save($updateData);
           if ($result) {
               $this->session->set_flashdata('success', 'imported_imquiry UnPublished  Sucessfully');
               redirect('admin/imported_imquiry/');
           } else {
               $this->session->set_flashdata('error', 'imported_imquiry UnPublished   Failed');
               redirect('admin/imported_imquiry/');
           }
       }
   
       //  end code for publish user


    // Edit
    function edit($id)
    {
        
        if (isset($id) and !empty($id)) {
            $data = null;
            $this->imported_imquiry->save(array('id'=> $id,'seen'=>1));

            $this->form_validation->set_rules('id', 'ID ', 'required');
            $this->form_validation->set_rules('name', 'Name ', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('admin/category_model','category');
                $this->load->model('admin/imported_imquiry_model','imported_imquiry');
                
                $editData = $this->imported_imquiry->find($id);
                $data['edit_data'] = $editData;

               
                $data['title'] = "edit_imported_imquiry";
                $this->load->view('admin/imported_imquiry/edit', $data);

            } else {
                //  code for insert data 
               
                   $id  = $_POST['id'];
             
                    $updateData  = array();
                    $updateData['id']                 = $id;
                    $updateData['name']               = $_POST['name'];
                    $updateData['email']              = $_POST['email'];
                    $updateData['phone']              = $_POST['phone'];
                    $updateData['city']               = $_POST['city'];
                    $updateData['state']              = $_POST['state'];
                    $updateData['platform']           = $_POST['platform'];
                    $updateData['preference']         = $_POST['preference'];
                    $updateData['campaign_name']      = $_POST['campaign_name'];
                    $updateData['campaingn_date']     = $_POST['campaingn_date'];
                    $updateData['interested_for']     = $_POST['interested_for'];
                    $updateData['status']             = 1;
                    $updateData['updated_at']         = date("Y-m-d H:i:s");
                    // pre($updateData);
                    // exit();
                    $result  = $this->imported_imquiry->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Imported Imquiry Updated Successfully!');
                            redirect('admin/imported_imquiry');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('admin/imported_imquiry/edit/'.$id);
                        }
            }
        }

    }

    function addfollowup($id)
    {
        $this->load->model('admin/category_model','category');
        $this->load->model('admin/imported_imquiry','imported_imquiry');

        if (isset($id) and !empty($id)) {
            $data = null;
            $this->imported_imquiry->save(array('id'=> $id,'seen'=>1));

            $this->form_validation->set_rules('id', 'ID ', 'required');
            $this->form_validation->set_rules('followup_note', 'Followup Note ', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {
                
                $editData = $this->imported_imquiry->find($id);
                $data['edit_data'] = $editData;

               
                $data['title'] = 'Inquiry Add FollowUp';
                $this->load->view('admin/imported_imquiry/addfollowup', $data);

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
                $FollowupData = $this->imported_imquiry->findDynamic($w);
                
                if(isset($FollowupData) && count($FollowupData) >0){
                    $oldFollowupData = $FollowupData[0];
                    $oldFollowupData = json_decode($oldFollowupData->followup_note);
                }
                
                
                if(isset($_POST['followup_note']) && !empty($_POST['followup_note'])){
                    $followup_note[] = array('followup_note'=>$_POST['followup_note'],'followup_date'=>$datetime,"enquery_mode"=>$_POST['enquery_mode'],"enquery_type"=>$_POST['enquery_status'],"created_at"=>$date);
                }
                   
                if(!empty($oldFollowupData) >0 && count($followup_note) >0){
                    $arr = array_merge($oldFollowupData, $followup_note);
                }else if(!empty($oldFollowupData) && count($oldFollowupData) >0){
                    $arr = $oldFollowupData;
                }else if(count($followup_note) >0){
                    $arr = $followup_note;
                }
              
                    $updateData  = array();
                    $updateData['id']                 = $id;
                    // $updateData['lead_owner']         = $_SESSION['userId'];
                    $updateData['enquery_type']       = $_POST['enquery_status'];
                    $updateData['enquery_mode']       = $_POST['enquery_mode'];
                    $updateData['followup_date']      = $datetime;
                    $updateData['followup_note']      = json_encode($arr);
                    $updateData['updated_at']         = $date;
                    // pre($updateData);
                    // exit();
                    $result  = $this->imported_imquiry->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Enquery Updated Successfully!');
                            redirect('admin/imported_imquiry');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('admin/imported_imquiry/addfollowup/'.$id);
                        }
            }
        }

    }

    //  code for ajax list 
    public function ajax_list()
    {
        $list = $this->imported_imquiry->get_datatables();

        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre($currentObj);
            // exit;
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("Y-m-d h:i A", strtotime($temp_date));
          
           
            // if($currentObj->source==1){
            //     $source = '<span class="btn-info badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==2){
            //     $source = '<span class="btn-success badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==3){
            //     $source = '<span class="btn-warning badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==4){
            //     $source = '<span class="btn-danger badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==5){
            //     $source = '<span class="bg-per badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else{
            //     $source ="";
            // }

            // if($currentObj->imported_imquiry_type==0){
            //     $imported_imquiry_status = '<span class="bg-per badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==1){
            //    $imported_imquiry_status= '<span class="btn-success badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==2){
            //     $imported_imquiry_status = '<span class="btn-info badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==3){
            //     $imported_imquiry_status = '<span class="btn-warning badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==4){
            //     $imported_imquiry_status = '<span class="bg-per badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==5){
            //     $imported_imquiry_status = '<span class="bg-pink badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==6){
            //     $imported_imquiry_status = '<span class="bg-blue badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==7){
            //     $imported_imquiry_status = '<span class="bg-danger badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else{
            //     $imported_imquiry_status ="N/A";
            // }
           
            // $new = ($currentObj->seen == 0)?'<span class="badge bg-info text-light blink_now" >New</span>':'';
            // $currentDate = date("y-m-d H:i:s");
            // $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
            //  $last_activity = $currentObj->last_activity;
            // if($fiveMinutLost < strtotime($last_activity)){
            //     $online = '<span class="circle pulse green"></span>';
            // }else{
            //     $online = '<span class="circle pulse red"></span>';
            // }
            
            // if(isset($currentObj->lead_ip) && !empty($currentObj->lead_ip) && $currentObj->city == ''){
              
            //     $city = getLocation($currentObj->lead_ip);
            //     $city = (!empty($city))?$city:'';
            //     $w = array();
            //     $w['id'] = $currentObj->id;
            //     $w['city'] = $city;
            //     $this->imported_imquiry->save($w);
            // }else{
            //     $city = (!empty($currentObj->city))?$currentObj->city:'';
            // }
            $no++;
            $row = [];
            $row[] ='<input type="checkbox" name="checkbox" class="checkbox" value="'.$currentObj->id.'">';
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('admin/imported_imquiry/view/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            $row[]=$currentObj->phone;
            $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]=$currentObj->city;
            $row[]=$currentObj->state;
            $row[]=$currentObj->platform;
            $row[]=$currentObj->campaign_name;
            // $row[]=$currentObj->status;
            $row[] = $currentObj->updated_at;
            $row[] = $date_at;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'admin/imported_imquiry/view/' .$currentObj->id .'" title="View Leads" >View Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'admin/imported_imquiry/edit/' .$currentObj->id .'" title="Edit Leads" >Edit Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'admin/imported_imquiry/addfollowup/' .$currentObj->id .'" title="Add Followup" >Add Followup</i></a></li>
                          </ul>
                          </div>
                          </div>
                          </div>';
                        //   <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Spam</a></li>
                

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->imported_imquiry->count_all(),
            "recordsFiltered" => $this->imported_imquiry->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }
    // end code for ajax list 

    //  code for mobile ajax list 
    public function mobile_ajax_list()
    {
        $list = $this->imported_imquiry->get_datatables();

        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre($currentObj);
            // exit;
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("Y-m-d h:i A", strtotime($temp_date));
          
           
            // if($currentObj->source==1){
            //     $source = '<span class="btn-info badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==2){
            //     $source = '<span class="btn-success badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==3){
            //     $source = '<span class="btn-warning badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==4){
            //     $source = '<span class="btn-danger badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else if($currentObj->source==5){
            //     $source = '<span class="bg-per badge">'.$this->config->item('source')[$currentObj->source].'</span>';
            // }else{
            //     $source ="";
            // }

            // if($currentObj->imported_imquiry_type==0){
            //     $imported_imquiry_status = '<span class="bg-per badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==1){
            //    $imported_imquiry_status= '<span class="btn-success badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==2){
            //     $imported_imquiry_status = '<span class="btn-info badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==3){
            //     $imported_imquiry_status = '<span class="btn-warning badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==4){
            //     $imported_imquiry_status = '<span class="bg-per badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==5){
            //     $imported_imquiry_status = '<span class="bg-pink badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==6){
            //     $imported_imquiry_status = '<span class="bg-blue badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else if($currentObj->imported_imquiry_type==7){
            //     $imported_imquiry_status = '<span class="bg-danger badge">'.$this->config->item('imported_imquiry_status')[$currentObj->imported_imquiry_type].'</span>';
            // }else{
            //     $imported_imquiry_status ="N/A";
            // }
           
            // $new = ($currentObj->seen == 0)?'<span class="badge bg-info text-light blink_now" >New</span>':'';
            // $currentDate = date("y-m-d H:i:s");
            // $fiveMinutLost = strtotime("-7 minutes", strtotime($currentDate));
            //  $last_activity = $currentObj->last_activity;
            // if($fiveMinutLost < strtotime($last_activity)){
            //     $online = '<span class="circle pulse green"></span>';
            // }else{
            //     $online = '<span class="circle pulse red"></span>';
            // }
            
            // if(isset($currentObj->lead_ip) && !empty($currentObj->lead_ip) && $currentObj->city == ''){
              
            //     $city = getLocation($currentObj->lead_ip);
            //     $city = (!empty($city))?$city:'';
            //     $w = array();
            //     $w['id'] = $currentObj->id;
            //     $w['city'] = $city;
            //     $this->imported_imquiry->save($w);
            // }else{
            //     $city = (!empty($currentObj->city))?$currentObj->city:'';
            // }
            $no++;
            $row = [];
            $row[] ='<input type="checkbox" name="checkbox" class="checkbox" value="'.$currentObj->id.'">';
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('admin/imported_imquiry/view/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            // $row[]=$currentObj->phone;
            // $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]=$currentObj->city;
            // $row[]=$currentObj->state;
            // $row[]=$currentObj->platform;
            // $row[]=$currentObj->campaign_name;
            // $row[]=$currentObj->status;
            // $row[] = $currentObj->updated_at;
            $row[] = $date_at;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'admin/imported_imquiry/view/' .$currentObj->id .'" title="View Leads" >View Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'admin/imported_imquiry/edit/' .$currentObj->id .'" title="Edit Leads" >Edit Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'admin/imported_imquiry/addfollowup/' .$currentObj->id .'" title="Add Followup" >Add Followup</i></a></li>
                          </ul>
                          </div>
                          </div>
                          </div>';
                        //   <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Spam</a></li>
                

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->imported_imquiry->count_all(),
            "recordsFiltered" => $this->imported_imquiry->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }
    // end code for ajax list 

    function view($id)
    {
        if (isset($id) and !empty($id)) {
           
            $editData = $this->imported_imquiry->getRow('imported_imquiry', $id);

            $data['edit_data'] = $editData;
            $data['title'] = "imported_imquiry";

            $this->load->view('admin/imported_imquiry/view', $data);
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
            $count = $this->imported_imquiry->getCount('imported_imquiry', 'imported_imquiry.id', $id);

            if (isset($count) and !empty($count)) {
                $this->imported_imquiry->delete('imported_imquiry', 'id', $id);

                $this->session->set_flashdata('message', ' imported_imquiry Deleted Successfully !');

                echo "success";

                exit();
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }

         // delete contact row 
         public function deleteByCheck()
         {
             // define path for file location 
             $this->isLoggedIn();
             $allVals = $_POST['allVals'];
             // get image path 
             $this->db->where_in('id', $allVals);	
             $delete = $this->db->delete('imported_imquiry');
             echo $delete;
             exit();
         }


    function status($field, $id)
    {
        if (in_array($field, ['status'])) {
            if (isset($id) && !empty($id)) {
                if (!is_null($imported_imquiry = $this->imported_imquiry->getRow('imported_imquiry', $id))) {
                    $status = $imported_imquiry->$field;

                    if ($status == 1) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $statusData[$field] = $status;

                    $this->imported_imquiry->updateData('imported_imquiry', $statusData, $id);

                    $this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

                    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
                        redirect($_GET['redirect']);
                    } else {
                        redirect('admin/imported_imquiry');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('admin/imported_imquiry');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('admin/imported_imquiry');
            }
        }
    }


        public function sendEmail(){
            return true;
            exit();
            if(isset($_POST['sendEmail']) && $_POST['sendEmail'] =='1'){
                
                $w = array();
                $w['field'] = "email";
                $emailData = $this->imported_imquiry->findDynamic($w);

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


