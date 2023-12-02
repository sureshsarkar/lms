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

         $this->load->model('sub_admin/imported_imquiry_model', 'imported_imquiry');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedInSubAdmin();
    }

    function index()
    {

        $data['imported_imquiry'] = $this->imported_imquiry->getList('imported_imquiry');
        $this->global['title'] = 'Techcentrica :Imported leads';
      
        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->loadSubAdminViews("sub_admin/imported_imquiry/managemobile", $this->global, $data , NULL,'sub_admin');
        }else{
            $this->loadSubAdminViews("sub_admin/imported_imquiry/manage", $this->global, $data , NULL,'sub_admin');
        }

    }

    function import()
    {
        $this->global['title'] = 'Techcentrica :Imported leads';
        $this->loadSubAdminViews("sub_admin/imported_imquiry/import", $this->global,NULL , NULL,'sub_admin');
    }

    
    // Add 
    public function add()
    {
        $data = null;

        $this->form_validation->set_rules('name', 'Name ', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {

            // end code for get category list 
        $this->global['title'] = 'Techcentrica :Imported leads';

        $this->loadSubAdminViews("sub_admin/imported_imquiry/add", $this->global,NULL , NULL,'sub_admin');

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
            redirect('sub_admin/imported_imquiry');
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
				redirect(base_url('sub_admin/imported_imquiry'));
			}
			else
			{
				$this->session->set_flashdata('error','File is not uploaded');
				redirect(base_url('sub_admin/imported_imquiry'));
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
               redirect('sub_admin/imported_imquiry/');
           } else {
               $this->session->set_flashdata('error', ' imported_imquiry Published  Failed');
               redirect('sub_admin/imported_imquiry/');
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
               redirect('sub_admin/imported_imquiry/');
           } else {
               $this->session->set_flashdata('error', 'imported_imquiry UnPublished   Failed');
               redirect('sub_admin/imported_imquiry/');
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

                $this->load->model('sub_admin/category_model','category');
                $this->load->model('sub_admin/imported_imquiry_model','imported_imquiry');
                
                $editData = $this->imported_imquiry->find($id);
                $data['edit_data'] = $editData;

               

                $this->global['title'] = 'Techcentrica :Imported leads';

                $this->loadSubAdminViews("sub_admin/imported_imquiry/edit", $this->global,$data , NULL,'sub_admin');


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
                            redirect('sub_admin/imported_imquiry');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('sub_admin/imported_imquiry/edit/'.$id);
                        }
            }
        }

    }

    // Edit
    function addfollowup($id)
    {
        
        if (isset($id) and !empty($id)) {
            $data = null;
         
            $this->form_validation->set_rules('id', 'ID ', 'required');
            $this->form_validation->set_rules('enquery_status', 'Enquery Status ', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('sub_admin/category_model','category');
                $this->load->model('sub_admin/imported_imquiry_model','imported_imquiry');
                
                $editData = $this->imported_imquiry->find($id);
                $data['edit_data'] = $editData;

                $this->global['title'] = 'Techcentrica :Imported leads';

                $this->loadSubAdminViews("sub_admin/imported_imquiry/addfollowup", $this->global,$data , NULL,'sub_admin');


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
                    $followup_note[] = array('followup_note'=>$_POST['followup_note'],'followup_date'=>$datetime,"enquery_mode"=>$_POST['enquery_mode'],"enquery_type"=>$_POST['enquery_status'],'created_at'=>$date);
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
                    $updateData['followup_date']      = $datetime;
                    $updateData['enquery_type']       = $_POST['enquery_status'];
                    $updateData['enquery_mode']       = $_POST['enquery_mode'];
                    $updateData['followup_note']      = json_encode($arr);
                    $updateData['updated_at']         = date("Y-m-d H:i:s");
                 
                    $result  = $this->imported_imquiry->save($updateData);
                    // pre($updateData);
                    // exit();
                        if($result >0){
                            $this->session->set_flashdata('success', 'Imported Imquiry Updated Successfully!');
                            redirect('sub_admin/imported_imquiry');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('sub_admin/imported_imquiry/edit/'.$id);
                        }
            }
        }

    }

    //  code for ajax list 
    // Sub category  list

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
          
           
            $no++;
            $row = [];
            $row[] ='<input type="checkbox" name="checkbox" class="checkbox" value="'.$currentObj->id.'">';
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('sub_admin/imported_imquiry/addfollowup/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            $row[]=$currentObj->phone;
            $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]=$currentObj->city;
            $row[]=$currentObj->campaign_name;
            $row[]=$currentObj->state;
            $row[]=$currentObj->platform;
            // $row[]=$currentObj->campaign_name;
            // $row[]=$currentObj->status;
            // $row[] = $currentObj->updated_at;
            $row[] = $date_at;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'sub_admin/imported_imquiry/view/' .$currentObj->id .'" title="View Leads" ><i class="bi bi-eye-fill"></i> View Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'sub_admin/imported_imquiry/edit/' .$currentObj->id .'" title="Edit Leads" ><i class="bi bi-pencil-square"></i> Edit Leads</i></a></li>
                          <li class=""><a class="" href="' .base_url() .'sub_admin/imported_imquiry/addfollowup/' .$currentObj->id .'" title="Add Followup" ><i class="bi bi-clipboard-plus-fill"></i> Add Followup</i></a></li>
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
          
           
            $no++;
            $row = [];
            $row[] ='<input type="checkbox" name="checkbox" class="checkbox" value="'.$currentObj->id.'">';
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('sub_admin/imported_imquiry/addfollowup/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            $row[]=$currentObj->phone;
            // $row[]=$currentObj->city;
            // $row[] = $date_at;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                        <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                            <ul>
                                <li class=""><a class="" href="' .base_url() .'sub_admin/imported_imquiry/view/' .$currentObj->id .'" title="View Leads" ><i class="bi bi-eye-fill"></i> View Leads</i></a></li>
                                <li class=""><a class="" href="' .base_url() .'sub_admin/imported_imquiry/edit/' .$currentObj->id .'" title="Edit Leads" ><i class="bi bi-pencil-square"></i> Edit Leads</i></a></li>
                                <li class=""><a class="" href="' .base_url() .'sub_admin/imported_imquiry/addfollowup/' .$currentObj->id .'" title="Add Followup" ><i class="bi bi-clipboard-plus-fill"></i> Add Followup</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>';
                

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
    // end code for get total list of places

    // end code for ajax list 

    function view($id)
    {
        if (isset($id) and !empty($id)) {
           
            $editData = $this->imported_imquiry->getRow('imported_imquiry', $id);

            $data['edit_data'] = $editData;

            $this->global['title'] = 'Techcentrica :Imported leads';

            $this->loadSubAdminViews("sub_admin/imported_imquiry/view", $this->global,$data , NULL,'sub_admin');

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
             $this->isLoggedInSubAdmin();
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
                        redirect('sub_admin/imported_imquiry');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('sub_admin/imported_imquiry');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('sub_admin/imported_imquiry');
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


