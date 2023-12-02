<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';

class Spam_leads extends BaseController
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
        $data['spam_leads'] = $this->enquery->getList('enquery');
        $data['title'] = "spam_leads";
        
        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->load->view('admin/spam_leads/managemobile', $data); 
        }else{
            $this->load->view('admin/spam_leads/manage', $data); 
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
               $this->session->set_flashdata('success', 'spam_leads  Published  Sucessfully');
               redirect('admin/spam_leads/');
           } else {
               $this->session->set_flashdata('error', ' spam_leads Published  Failed');
               redirect('admin/spam_leads/');
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
               $this->session->set_flashdata('success', 'spam_leads UnPublished  Sucessfully');
               redirect('admin/spam_leads/');
           } else {
               $this->session->set_flashdata('error', 'spam_leads UnPublished   Failed');
               redirect('admin/spam_leads/');
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

            // end code for get category list 
            $data['title'] = "add_spam_leads";
            $this->load->view('admin/spam_leads/add', $data);
           } else {
               //  code for insert data 
             
            //  pre($_POST);
            //  exit;
            $insertData  = array();
            $insertData['name']               = $_POST['name'];
            $insertData['email']              = $_POST['email'];
            $insertData['phone']              = $_POST['phone'];
            $insertData['password']           = md5($_POST['password']);
            $insertData['role']               = $_POST['role'];
            $insertData['status']             = 1;
            $insertData['created_at']         = date("Y-m-d H:i:s");
                
            $result  = $this->enquery->save($insertData);
         
            if($result > 0){
                $this->session->set_flashdata('success', 'Sub Admin  Added Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to  Add Sub Admin !');
            }
            redirect('admin/spam_leads');
        }
    }


    // Edit
    function edit($id)
    {
        if (isset($id) and !empty($id)) {
            $data = null;

            $this->form_validation->set_rules('name', 'Name ', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('admin/category_model','category');
                
                $editData = $this->enquery->find($id);
                $data['edit_data'] = $editData;

               
                $data['title'] = "edit_spam_leads";
                $this->load->view('admin/spam_leads/edit', $data);

            } else {
                //  code for insert data 
              
                    $id  = $_POST['id'];
               
                    $updateData  = array();
                    $updateData['id']                 = $id;
                    $updateData['name']               = $_POST['name'];
                    $updateData['email']              = $_POST['email'];
                    $updateData['phone']              = $_POST['phone'];
                    $updateData['password']           = (isset($_POST['password']) && !empty($_POST['password']) && strlen($_POST['password'])>5)?md5($_POST['password']):$_POST['old_password'];
                    $updateData['role']               = $_POST['role'];
                    $updateData['updated_at']         = date("Y-m-d H:i:s");
                    // pre($_POST);
                    // pre($updateData);
                    // exit;
                    $result  = $this->enquery->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Contact Us  Updated Successfully!');
                            redirect('admin/spam_leads');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('admin/spam_leads/edit/'.$id);
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
            // pre($currentObj);
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
            $no++;
            $row = [];
            $row[] ='<input type="checkbox" name="checkbox" class="checkbox" value="'.$currentObj->id.'">';
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('admin/enquery/edit/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            $row[]=$currentObj->phone;
            $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$online.$currentObj->sname:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]=$source;
            $row[] = $enquery_status;
            $row[] = $followup_date;
              $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
            // $row[] = $fiveMinutLost." ".$currentObj->last_activity;
            // $row[] = $currentObj->updated_at;
            $row[] = $date_at." ".$new;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'admin/enquery/edit/' .$currentObj->id .'" title="View Leads" >View Leads</i></a></li>
                          <li class=""><a  title="Move To Not Spam" class="moveToNotSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Not Spam</a></li>
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
            // pre($currentObj);
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
            $no++;
            $row = [];
            $row[] ='<input type="checkbox" name="checkbox" class="checkbox" value="'.$currentObj->id.'">';
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="'.base_url('admin/enquery/edit/').$currentObj->id.'" class="nameClass">'.$currentObj->name.'</a>';
            // $row[]=$currentObj->phone;
            // $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]= (isset($currentObj->sname) && !empty($currentObj->sname))?$online.$currentObj->sname:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]=$source;
            // $row[] = $enquery_status;
            $row[] = $followup_date." ".$new;;
            //   $fiveMinutLost = date("y-m-d H:i:s",$fiveMinutLost);
            // $row[] = $fiveMinutLost." ".$currentObj->last_activity;
            // $row[] = $currentObj->updated_at;
            // $row[] = $date_at;
            $row[] =
                '<div class="dropdown">
                    <div class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                      <div class="dropdown-menu leads showMe" aria-labelledby="dropdownMenuButton">
                        <ul>
                          <li class=""><a class="" href="' .base_url() .'admin/enquery/edit/' .$currentObj->id .'" title="View Leads" >View Leads</i></a></li>
                          <li class=""><a  title="Move To Not Spam" class="moveToNotSpam" href="javascript:void(0)" data_id="' . $currentObj->id .'" >Move To Not Spam</a></li>
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

                $editData = $this->enquery->getRow('spam_leads', $id);



                // end code for get state list 

                 // code for get cayegory list 
                $categoryId      =  $editData->category_id;

                 $categoryList   = $this->category->all();
                if (!empty($categoryList)) {
                    $data['categoriesList']  = $categoryList;
                }

                $subcategoryId      =  $editData->spam_leads_id;

                 $subcategoryList   = $this->enquery->all();
                 if (!empty($subcategoryList)) {
                    $data['subcategoriesList']  = $subcategoryList;
                }
               


                $data['edit_data'] = $editData;

                $this->load->view('admin/spam_leads/view', $data);
            } else {
                redirect('admin/spam_leads/view');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');

            redirect('admin/spam_leads/view');
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
            $count = $this->enquery->getCount('spam_leads', 'spam_leads.id', $id);

            if (isset($count) and !empty($count)) {
                $this->enquery->delete('spam_leads', 'id', $id);

                $this->session->set_flashdata('message', ' spam_leads Deleted Successfully !');

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
                    $this->enquery->delete('spam_leads', 'id', $all_ids[$a]);

                    $this->session->set_flashdata('message', ' spam_leads(s) Deleted Successfully !');
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
                if (!is_null($spam_leads = $this->enquery->getRow('spam_leads', $id))) {
                    $status = $spam_leads->$field;

                    if ($status == 1) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $statusData[$field] = $status;

                    $this->enquery->updateData('spam_leads', $statusData, $id);

                    $this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

                    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
                        redirect($_GET['redirect']);
                    } else {
                        redirect('admin/spam_leads');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('admin/spam_leads');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('admin/spam_leads');
            }
        }
    }


     // move To Not Spam
     function moveToNotSpam()
     {
         $id = "";
         if (isset($_POST)) {
             $id = $_POST["id"];
         }

         if (isset($id) and !empty($id)) {

                 $update = array();
                 $update['id'] = $id;
                 $update['spam_Id'] = 0;
                 $this->enquery->save($update);

                 $this->session->set_flashdata('message', ' Moved To Not Spam !');

                 echo "success";

                 exit();
         
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
        $delete = $this->db->delete('enquery');
        echo $delete;
        exit();
    }
    

}


