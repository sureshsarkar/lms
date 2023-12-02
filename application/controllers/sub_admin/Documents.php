<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';
require 'vendor/autoload.php';
class Documents extends BaseController
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        // $this->load->library('ion_auth');

        $this->load->library('form_validation');

         $this->load->model('sub_admin/documents_model', 'documents');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedInSubAdmin();
    }

    function index()
    {

        $data['documents'] = $this->documents->getList('documents');
        $this->global['title'] = 'Techcentrica :Documents';
        // $this->loadSubAdminViews("sub_admin/documents/manage", $this->global, $data , NULL,'sub_admin');

        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->loadSubAdminViews("sub_admin/documents/managemobile", $this->global, $data , NULL,'sub_admin');
        }else{
            $this->loadSubAdminViews("sub_admin/documents/manage", $this->global, $data , NULL,'sub_admin');
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
        $this->global['title'] = 'Techcentrica :Documents';

        $this->loadSubAdminViews("sub_admin/documents/add", $this->global,NULL , NULL,'sub_admin');

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
                $store          ="uploads/documents/".$f_newfile;
                if(!move_uploaded_file($f_tmp,$store))
                {
                    $this->session->set_flashdata('failed', 'Image Upload Failed .');
                }
            $image = $store;
            }
        // upload image end
        
            $insertData  = array();
            $insertData['filename']           = $_POST['filename'];
            $insertData['image']              = $image;
            $insertData['created_by']         = $_SESSION['userId'];
            $insertData['created_at']         = date("Y-m-d H:i:s");
         
            $result  = $this->documents->save($insertData);
        //  pre($result);
        //  exit();
            if($result > 0){
                $this->session->set_flashdata('success', 'Knowledge Base Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to Knowledge Base !');
            }
            redirect('sub_admin/documents');
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
                $this->load->model('sub_admin/documents_model','documents');
                
                $editData = $this->documents->find($id);
                $data['edit_data'] = $editData;

               

                $this->global['title'] = 'Techcentrica :Documents';

                $this->loadSubAdminViews("sub_admin/documents/edit", $this->global,$data , NULL,'sub_admin');


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
                 $store          ="uploads/documents/".$f_newfile;
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
                    $updateData['filename']               = $_POST['filename'];
                    $updateData['image']               = $image;
                    $updateData['updated_at']         = date("Y-m-d H:i:s");
                    // pre($updateData);
                    // exit();
                    $result  = $this->documents->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Knowledge Base Updated Successfully!');
                            redirect('sub_admin/documents');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('sub_admin/documents/edit/'.$id);
                        }
            }
        }

    }

    // ajax_list
    public function ajax_list()
    {
        $list = $this->documents->get_datatables();

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
                $fileType = '<img src="'.base_url().'assets/images/docx.png" style="width:50px;" alt="">';
            }else if($fileExtension == "xlsx"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:50px;" alt="">';
            }else if($fileExtension == "xls"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:50px;" alt="">';
            }else{
                $fileType = '<img src="'.base_url().'assets/images/dummy.png" style="width:50px;" alt="">';
            }


            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] = '<a href="'.base_url('sub_admin/documents/view/').$currentObj->id.'" class="nameClass">'.$fileType.'</a>';
            $row[] ='<a href="'.base_url('sub_admin/documents/view/').$currentObj->id.'" class="nameClass">'.$currentObj->filename.'</a>';
            $row[] =$currentObj->sname;
            $row[] = $currentObj->updated_at;
            $row[] = $date_at;
            $row[] ='<div class="dropdown">
                        <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                           <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                                <ul>
                                    <li class=""><a class="" href="' .base_url() .'sub_admin/documents/view/' .$currentObj->id .'" title="View Documents Base" ><i class="bi bi-eye-fill"></i> View</i></a></li>
                                    <li class=""><a class="" href="' .base_url() .'sub_admin/documents/edit/' .$currentObj->id .'" title="Edit Documents Base" ><i class="bi bi-pencil-square"></i> Edit</i></a></li>
                                </ul>
                           </div>
                        </div>
                    </div>';
                        //   <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Spam</a></li>
                

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->documents->count_all(),
            "recordsFiltered" => $this->documents->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }

    // end code for get total list of places

    
    // ajax_list
    public function mobile_ajax_list()
    {
        $list = $this->documents->get_datatables();

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
                $fileType = '<img src="'.base_url().'assets/images/docx.png" style="width:50px;" alt="">';
            }else if($fileExtension == "xlsx"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:50px;" alt="">';
            }else if($fileExtension == "xls"){
                $fileType = '<img src="'.base_url().'assets/images/xlsx.png" style="width:50px;" alt="">';
            }else{
                $fileType = '<img src="'.base_url().'assets/images/dummy.png" style="width:50px;" alt="">';
            }


            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] = '<a href="'.base_url('sub_admin/documents/view/').$currentObj->id.'" class="nameClass">'.$fileType.'</a>';
            // $row[] ='<a href="'.base_url('sub_admin/documents/view/').$currentObj->id.'" class="nameClass">'.$currentObj->filename.'</a>';
            // $row[] =$currentObj->sname;
            // $row[] = $currentObj->updated_at;
            $row[] = $date_at;
            $row[] ='<div class="dropdown">
                        <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                           <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                                <ul>
                                    <li class=""><a class="" href="' .base_url() .'sub_admin/documents/view/' .$currentObj->id .'" title="View Documents Base" ><i class="bi bi-eye-fill"></i> View</i></a></li>
                                    <li class=""><a class="" href="' .base_url() .'sub_admin/documents/edit/' .$currentObj->id .'" title="Edit Documents Base" ><i class="bi bi-pencil-square"></i> Edit</i></a></li>
                                </ul>
                           </div>
                        </div>
                    </div>';
                        //   <li class=""><a  title="Move To Spam" class="moveToSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Spam</a></li>
                

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->documents->count_all(),
            "recordsFiltered" => $this->documents->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }


    // end code for ajax list 

    function view($id)
    {
        if (isset($id) and !empty($id)) {
           
            $editData = $this->documents->getRow('documents', $id);

            $data['edit_data'] = $editData;

            $this->global['title'] = 'Techcentrica :Documents';

            $this->loadSubAdminViews("sub_admin/documents/view", $this->global,$data , NULL,'sub_admin');

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
            $count = $this->documents->getCount('documents', 'documents.id', $id);

            if (isset($count) and !empty($count)) {
                $this->documents->delete('documents', 'id', $id);

                $this->session->set_flashdata('message', ' documents Deleted Successfully !');

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
             $delete = $this->db->delete('documents');
             echo $delete;
             exit();
         }


    function status($field, $id)
    {
        if (in_array($field, ['status'])) {
            if (isset($id) && !empty($id)) {
                if (!is_null($documents = $this->documents->getRow('documents', $id))) {
                    $status = $documents->$field;

                    if ($status == 1) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $statusData[$field] = $status;

                    $this->documents->updateData('documents', $statusData, $id);

                    $this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

                    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
                        redirect($_GET['redirect']);
                    } else {
                        redirect('sub_admin/documents');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('sub_admin/documents');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('sub_admin/documents');
            }
        }
    }


        public function sendEmail(){
            return true;
            exit();
            if(isset($_POST['sendEmail']) && $_POST['sendEmail'] =='1'){
                
                $w = array();
                $w['field'] = "email";
                $emailData = $this->documents->findDynamic($w);

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


