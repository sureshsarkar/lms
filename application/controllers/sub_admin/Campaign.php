<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';
require 'vendor/autoload.php';
class Campaign extends BaseController
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        // $this->load->library('ion_auth');

        $this->load->library('form_validation');

         $this->load->model('sub_admin/campaign_model', 'campaign');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedInSubAdmin();
    }

    function index()
    {

        $data['campaign'] = $this->campaign->getList('campaign');
        $this->global['title'] = 'Techcentrica :Campaign';
        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->loadSubAdminViews("sub_admin/campaign/managemobile", $this->global, $data , NULL,'sub_admin');
        }else{
            $this->loadSubAdminViews("sub_admin/campaign/manage", $this->global, $data , NULL,'sub_admin');
        }
    }
    
    // Add 
    public function add()
    {
        $data = null;

        $this->form_validation->set_rules('filename', 'File Name ', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {

            // end code for get category list 
        $this->global['title'] = 'Techcentrica :Campaign';

        $this->loadSubAdminViews("sub_admin/campaign/add", $this->global,NULL , NULL,'sub_admin');

           } else {
             $image = "";
            // upload image start
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !=""){
                $f_name         =$_FILES['image']['name'];
                $f_tmp          =$_FILES['image']['tmp_name'];
                $f_size         =$_FILES['image']['size'];
                $f_extension    =explode('.',$f_name);
                $f_extension    =strtolower(end($f_extension));
                $f_newfile      ='techcentrica_'.uniqid().'.'.$f_extension;
                $store          ="uploads/campaign/".$f_newfile;
                if(!move_uploaded_file($f_tmp,$store))
                {
                    $this->session->set_flashdata('failed', 'Image Upload Failed .');
                }
            $image = $store;
            }

        // upload image end
        
            $insertData  = array();
            $insertData['subject']            = $_POST['subject'];
            $insertData['filename']           = $_POST['filename'];
            $insertData['image']              = $image;
            $insertData['created_by']         = $_SESSION['userId'];
            $insertData['created_at']         = date("Y-m-d H:i:s");
         
            $result  = $this->campaign->save($insertData);
        //  pre($result);
        //  exit();
            if($result > 0){
                $this->session->set_flashdata('success', 'Campaign Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to Campaign !');
            }
            redirect('sub_admin/campaign');
        }
    }


    // Edit
    function edit($id)
    {
        
        if (isset($id) and !empty($id)) {
            $data = null;

            $this->form_validation->set_rules('id', 'ID ', 'required');
            $this->form_validation->set_rules('filename', 'Name ', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('sub_admin/category_model','category');
                $this->load->model('sub_admin/campaign_model','campaign');
                
                $editData = $this->campaign->find($id);
                $data['edit_data'] = $editData;

               

                $this->global['title'] = 'Techcentrica :Campaign';

                $this->loadSubAdminViews("sub_admin/campaign/edit", $this->global,$data , NULL,'sub_admin');


            } else {
                //  code for insert data 
               
                   $id  = $_POST['id'];
          
                  
             $image = "";
             // upload image start
             if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !=""){
                 $f_name         =$_FILES['image']['name'];
                 $f_tmp          =$_FILES['image']['tmp_name'];
                 $f_size         =$_FILES['image']['size'];
                 $f_extension    =explode('.',$f_name);
                 $f_extension    =strtolower(end($f_extension));
                 $f_newfile      ='techcentrica_'.uniqid().'.'.$f_extension;
                 $store          ="uploads/campaign/".$f_newfile;
                 if(!move_uploaded_file($f_tmp,$store))
                 {
                     $this->session->set_flashdata('failed', 'Image Upload Failed .');
                 }else{
                    $file =(isset($_POST['old_image']))?$_POST['old_image']:"";
                    if(file_exists ( $file))
                    {
                        unlink($file);
                    }
                    $image = $store;
                 }
             }else{
                $image = $_POST['old_image'];
             }
           // upload image end

                    $updateData  = array();
                    $updateData['id']                 = $id;
                    $updateData['subject']            = $_POST['subject'];
                    $updateData['filename']           = $_POST['filename'];
                    $updateData['image']              = $image;
                    $updateData['updated_at']         = date("Y-m-d H:i:s");
                    // pre($updateData);
                    // exit();
                    $result  = $this->campaign->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Knowledge Base Updated Successfully!');
                            redirect('sub_admin/campaign');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('sub_admin/campaign/edit/'.$id);
                        }
            }
        }

    }

    // ajax_list
    public function ajax_list()
    {
        $list = $this->campaign->get_datatables();

        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre($currentObj);
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("Y-m-d h:i A", strtotime($temp_date));
          

            $fileInfo = pathinfo($currentObj->image);

            // Get the file extension
            $fileExtension = $fileInfo['extension'];

            $fileType = "";

            if($fileExtension == "docx"){
                $fileType = '<img src="'.base_url().'assets/images/docx.png" style="width:48px;" alt="">';
            }else if($fileExtension == "xlsx"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:48px;" alt="">';
            }else if($fileExtension == "xls"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:48px;" alt="">';
            }else{
                $fileType = '<img src="'.base_url().'assets/images/dummy.png" style="width:48px;" alt="">';
            }


            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] = '<a href="'.base_url('sub_admin/campaign/view/').$currentObj->id.'" class="nameClass">'.$fileType.'</a>';
            $row[] ='<a href="'.base_url('sub_admin/campaign/view/').$currentObj->id.'" class="nameClass">'.$currentObj->filename.'</a>';
            $row[] =$currentObj->sname;
            $row[] = $currentObj->updated_at;
            $row[] = $date_at;
             $row[] ='<a class="" href="' .base_url() .'sub_admin/campaign/edit/' .$currentObj->id .'" title="Edit campaign Base" ><button type="button" class="btn-gradient-primary"><i class="bi bi-pencil-square"></i> Edit</button></a>&nbsp;&nbsp;<button type="button" class="btn-gradient-primary sendEmail" imgUrl="'.$currentObj->image.'" filename="'.$currentObj->filename.'" subject="'.$currentObj->subject.'"> <i class="bi bi-envelope-check-fill"></i> E-mail</button>';
           

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->campaign->count_all(),
            "recordsFiltered" => $this->campaign->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }
    // ajax_list
    public function mobile_ajax_list()
    {
        $list = $this->campaign->get_datatables();
        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre($currentObj);
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("Y-m-d h:i A", strtotime($temp_date));
          

            $fileInfo = pathinfo($currentObj->image);

            // Get the file extension
            $fileExtension = $fileInfo['extension'];

            $fileType = "";

            if($fileExtension == "docx"){
                $fileType = '<img src="'.base_url().'assets/images/docx.png" style="width:48px;" alt="">';
            }else if($fileExtension == "xlsx"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:48px;" alt="">';
            }else if($fileExtension == "xls"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:48px;" alt="">';
            }else{
                $fileType = '<img src="'.base_url().'assets/images/dummy.png" style="width:48px;" alt="">';
            }


            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] = '<a href="'.base_url('sub_admin/campaign/view/').$currentObj->id.'" class="nameClass">'.$fileType.'</a>';
            $row[] = $date_at;
             $row[] ='<a class="" href="' .base_url() .'sub_admin/campaign/edit/' .$currentObj->id .'" title="Edit campaign Base" ><button type="button" class="btn-gradient-primary"><i class="bi bi-pencil-square"></i> Edit</button></a>&nbsp;&nbsp;<button type="button" class="btn-gradient-primary sendEmail" imgUrl="'.$currentObj->image.'" filename="'.$currentObj->filename.'" subject="'.$currentObj->subject.'"> <i class="bi bi-envelope-check-fill"></i> E-mail</button>';
           

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->campaign->count_all(),
            "recordsFiltered" => $this->campaign->count_filtered(),
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
           
            $editData = $this->campaign->getRow('campaign', $id);

            $data['edit_data'] = $editData;

            $this->global['title'] = 'Techcentrica :Campaign';

            $this->loadSubAdminViews("sub_admin/campaign/view", $this->global,$data , NULL,'sub_admin');

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
            $count = $this->campaign->getCount('campaign', 'campaign.id', $id);

            if (isset($count) and !empty($count)) {
                $this->campaign->delete('campaign', 'id', $id);

                $this->session->set_flashdata('message', ' campaign Deleted Successfully !');

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
             $delete = $this->db->delete('campaign');
             echo $delete;
             exit();
         }


    function status($field, $id)
    {
        if (in_array($field, ['status'])) {
            if (isset($id) && !empty($id)) {
                if (!is_null($campaign = $this->campaign->getRow('campaign', $id))) {
                    $status = $campaign->$field;

                    if ($status == 1) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $statusData[$field] = $status;

                    $this->campaign->updateData('campaign', $statusData, $id);

                    $this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

                    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
                        redirect($_GET['redirect']);
                    } else {
                        redirect('sub_admin/campaign');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('sub_admin/campaign');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('sub_admin/campaign');
            }
        }
    }


        public function sendEmail(){
         
            if(isset($_POST['sendEmail']) && $_POST['sendEmail'] =='1'){
                
                $w = array();
                $w['field'] = "email";
                $w['table'] = "enquery";
                $emailData = $this->campaign->findDynamic($w);
        
                $imgurl = $_POST['imgurl'];
                $filename = $_POST['filename'];
                $message = '';
                $subject = $_POST['subject'];
                $message .= '<div style="text-align:center;">';
                $message .= '<img src="'.base_url().$imgurl.'" alt="Attachment">';
                $message .= '</div>';
       
                $toEmail = "";
                foreach ($emailData as $k => $v) {
                    if(isset($v->email) && !empty($v->email) && (strlen($v->email) >4)){
                        $comma =  ($k==0)?'':',';
                        $toEmail .= $comma.$v->email;

                        $this->send_email($v->email, $subject, $message);
                    }
                }
                return true;

            }
        }

}


