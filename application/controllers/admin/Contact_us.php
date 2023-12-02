<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';

class Contact_us extends BaseController
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        // $this->load->library('ion_auth');

        $this->load->library('form_validation');

         $this->load->model('admin/contact_us_model', 'contact_us');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedIn();
    }

    function index()
    {
        $data['contact_us'] = $this->contact_us->getList('contact_us');
        $data['title'] = "contact_us";
        $this->load->view('admin/contact_us/manage', $data); 
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
           $result = $this->contact_us->save($updateData);
           if ($result) {
               $this->session->set_flashdata('success', 'contact_us  Published  Sucessfully');
               redirect('admin/contact_us/');
           } else {
               $this->session->set_flashdata('error', ' contact_us Published  Failed');
               redirect('admin/contact_us/');
           }
       }
       //  end code for publish user
       //  code for Unpublish user 
       public function Unpublished($id)
       {
           $updateData  = array();
           $updateData['id']  = $id;
           $updateData['status'] = 0;
           $result = $this->contact_us->save($updateData);
           if ($result) {
               $this->session->set_flashdata('success', 'contact_us UnPublished  Sucessfully');
               redirect('admin/contact_us/');
           } else {
               $this->session->set_flashdata('error', 'contact_us UnPublished   Failed');
               redirect('admin/contact_us/');
           }
       }
   
       //  end code for publish user
   
    // remove image on places images 

    public function removeImage()
    {

        if (isset($_POST['id']) && $_POST['id'] != '') {

            $contact_usData = $this->contact_us->find($_POST['id']);

            $image_array = [];

            $image_array = json_decode($contact_usData->all_temp_data);
            $new_image_array = [];
            
            foreach ($image_array as $key => $value) {
              

                if ($value->short_image == $_POST['imageName']) {

                    unset($image_array[$key]);

                    $file = $_POST['imageName'];

                    unlink($file);

                } else {

                    $new_image_array[] = $value->short_image;

                }
            }

            $updateArr = [];

            $updateArr['id'] = $_POST['id'];

            $updateArr['image'] = json_encode($new_image_array, true);

            $this->contact_us->save($updateArr);

            echo 1;

        }
    }

    // end code remove image on product


    // Add 
    public function add()
    {
        
        $data = null;

        $this->form_validation->set_rules('category_id', 'category ID', 'required');
        $this->form_validation->set_rules('sub_category_id', 'Sub category ID', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {

            // code for get category list 
            $w = array();
            $w['status'] = 1;
            $w['field'] = 'id,cat_name';
            $categoryList = $this->category->findDynamic($w);
            if(!empty($categoryList)){
                $data['categoryList']  = $categoryList;
            }
             
            // end code for get category list 
            $data['title'] = "add_contact_us";
            $this->load->view('admin/contact_us/add', $data);
           } else {
               //  code for insert data 
               $card_data = array();
               $card_data2 = array();
               $solutions = array('digital_solutions'=>$_POST['digital_solutions'],'success_delivered'=>$_POST['success_delivered'],'manag_more'=>$_POST['manag_more'],'drop_resume'=>$_POST['drop_resume'],'growth_per_annum'=>$_POST['growth_per_annum']);

            //    to store head 
            if(isset($_POST['head'][0]) && $_POST['head'][0] !=""){
                for ($i=0; $i < count($_POST['head']); $i++) { 
                 $card_data2[] = array('head'=>$_POST['head'][$i],'para'=>$_POST['para'][$i]);
                }
            }
              // upload og image start
                if(isset($_FILES['og_image']['name']) && $_FILES['og_image']['name'] !=""){
                            $f_name         =$_FILES['og_image']['name'];
                            $f_tmp          =$_FILES['og_image']['tmp_name'];
                            $f_size         =$_FILES['og_image']['size'];
                            $f_extension    =explode('.',$f_name);
                            $f_extension    =strtolower(end($f_extension));
                            $f_newfile      ='techcentrica_'.uniqid().'.'.$f_extension;
                            $store          ="uploads/meta_image/".$f_newfile;
                            if(!move_uploaded_file($f_tmp,$store))
                            {
                                $this->session->set_flashdata('failed', 'Image Upload Failed .');
                            }
                    $og_image = $store;
                }
              // upload og image end
            $card_data[] = array("card_heading"=>$_POST['card_heading'],"card_content"=>$_POST['card_content']);

            $insertData  = array();
            $insertData['category_id']        = $_POST['category_id'];
            $insertData['sub_category_id']    = $_POST['sub_category_id'];
            $insertData['title']              = $_POST['title'];
            $insertData['Heading']            = $_POST['Heading'];
            $insertData['description']        = $_POST['description'];
            $insertData['solutions']          = json_encode($solutions);
            $insertData['card_data']          = json_encode($card_data);
            $insertData['card_data2']          = json_encode($card_data2);
            $insertData['meta_data']          = json_encode($_POST['meta']);
            $insertData['og_image']           = (isset($og_image))?$og_image:"";
            $insertData['status']             = $_POST['status'];
            $insertData['slug']               = $_POST['slug'];
            $insertData['created_at']         = date("Y-m-d H:i:s");
                
            $insert_id  = $this->contact_us->save($insertData);
         
            if($insert_id > 0){
                $this->session->set_flashdata('success', 'Contact Us  Added Successfully!');
            }else{
                $this->session->set_flashdata('failed', 'Failed to  Add Contact Us !');
            }
            redirect('admin/contact_us');
        }
    }


    // Edit
    function edit($id)
    {
        if (isset($id) and !empty($id)) {
            $data = null;

            $this->form_validation->set_rules('category_id', 'category ID', 'required');
            $data['errors'] = [];

            if ($this->form_validation->run() == false) {

                $this->load->model('admin/category_model','category');
                $this->load->model('admin/contact_us_model','contact_us');
                
                $editData = $this->contact_us->find($id);
                $data['edit_data'] = $editData;

                // code for get cayegory list 
                 $categoryList   = $this->category->all();
                if (!empty($categoryList)) {
                    $data['categoryList']  = $categoryList;
                }
                
                // code for get cayegory list
                $w['table'] = "sub_category"; 
                $w['category_id'] = $editData->category_id; 
                 $subCategoryList   = $this->category->findDynamic($w);
                if (!empty($subCategoryList)) {
                    $data['subCategoryList']  = $subCategoryList;
                }
                $data['title'] = "edit_contact_us";
                $this->load->view('admin/contact_us/edit', $data);

            } else {
                //  code for insert data 
              
                $id  = $_POST['id'];
                $card_data = array();
                $card_data2 = array();
                $solutions = array('digital_solutions'=>$_POST['digital_solutions'],'success_delivered'=>$_POST['success_delivered'],'manag_more'=>$_POST['manag_more'],'drop_resume'=>$_POST['drop_resume'],'growth_per_annum'=>$_POST['growth_per_annum']);
                
                //    to card data 
                if(isset($_POST['card_heading'][0]) && $_POST['card_heading'][0] !=""){
                    for ($i=0; $i < count($_POST['card_heading']); $i++) { 
                        if(isset($_POST['card_heading'][$i]) && $_POST['card_heading'][$i] !=""){
                            $card_data[] = array('card_heading'=>$_POST['card_heading'][$i],'card_content'=>$_POST['card_content'][$i]);
                        }
                    }
                }

                //    to scard data2 
                if(isset($_POST['head'][0]) && $_POST['head'][0] !=""){
                    for ($i=0; $i < count($_POST['head']); $i++) { 
                    $card_data2[] = array('head'=>$_POST['head'][$i],'para'=>$_POST['para'][$i]);
                    }
                }
               
          
                // upload og image start
                if(isset($_FILES['og_image']['name']) && $_FILES['og_image']['name'] !=""){
                    $f_name         =$_FILES['og_image']['name'];
                    $f_tmp          =$_FILES['og_image']['tmp_name'];
                    $f_size         =$_FILES['og_image']['size'];
                    $f_extension    =explode('.',$f_name);
                    $f_extension    =strtolower(end($f_extension));
                    $f_newfile      ='techcentrica_'.uniqid().'.'.$f_extension;
                    $store          ="uploads/meta_image/".$f_newfile;
                    if(!move_uploaded_file($f_tmp,$store))
                    {
                        $this->session->set_flashdata('failed', 'Image Upload Failed .');
                    }else{
                        $file =(isset($_POST['old_og_image']))?$_POST['old_og_image']:"";
                        if(file_exists ( $file))
                        {
                            unlink($file);
                        }
                        $og_image = $store;
                    }
                }else{
                    $og_image = $_POST['old_og_image'];
                }
            // upload og image end

                    $updateData  = array();
                    $updateData['id']                 = $id;
                    $updateData['category_id']        = $_POST['category_id'];
                    $updateData['sub_category_id']    = $_POST['sub_category_id'];
                    $updateData['title']              = $_POST['title'];
                    $updateData['Heading']            = $_POST['Heading'];
                    $updateData['description']        = $_POST['description'];
                    $updateData['solutions']          = json_encode($solutions);
                    $updateData['card_data']          = json_encode($card_data);
                    $updateData['card_data2']         = json_encode($card_data2);
                    $updateData['meta_data']          = json_encode($_POST['meta']);
                    $updateData['og_image']           = (isset($og_image))?$og_image:"";
                    $updateData['status']             = $_POST['status'];
                    $updateData['slug']               = $_POST['slug'];
                    $updateData['updated_at']         = date("Y-m-d H:i:s");
                    // pre($_POST);
                    // pre($updateData);
                    // exit();
                    $result  = $this->contact_us->save($updateData);

                        if($result >0){
                            $this->session->set_flashdata('success', 'Contact Us  Updated Successfully!');

                        }else{
                            $this->session->set_flashdata('failed', ' Invalid Id !');
                            redirect('admin/contact_us/edit/'.$id);
                        }
                        redirect('admin/contact_us/edit/'.$id);
                        // redirect('admin/contact_us');
            }
        }

    }

    //  code for ajax list 
    // Sub category  list

    public function ajax_list()
    {
        $list = $this->contact_us->get_datatables();

        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            error_reporting(0);
            // pre($currentObj);
            // end code for iamge 
            $temp_date = $currentObj->created_at;
            $date_at = date("d-m-Y", strtotime($temp_date));
            $temp_updated_at = $currentObj->updated_at;
            $updated_at = date("d-m-Y", strtotime($temp_updated_at));
          
           
            if($currentObj->status==1){

                $status = '<span class="btn-success badge">Active</span>
                <p>
                    <a style="margin-top:10px;" class=" btn-danger badge" href="'.base_url().'admin/contact_us/Unpublished/'.$currentObj->id.'">Click  InActive</a>
                </p>';
                
            }else{
                   $status = '<span class="btn-danger badge">InActive</span>
                   <p>
                    <a style="margin-top:10px;" class=" btn-success badge" href="'.base_url().'admin/contact_us/published/'.$currentObj->id.'">Click  Active</a>
                </p>
                   ';

            }
           
            $no++;
            $row = [];
            $row[] = $no;
            $row[]=$currentObj->cat_name;
            $row[]=$currentObj->sub_category_name;
            $row[] = $status;
            $row[] = $date_at;
            // $row[] = $updated_at;
            $row[] =
                '<a class="btn btn-sm btn-info" href="' .
                base_url() .
                'admin/contact_us/edit/' .
                $currentObj->id .
                '" title="Edit" ><i class="fa fa-pen"></i></a> &nbsp;&nbsp; <a  title="Delete"   class="btn btn-sm btn-danger deletebtn" href="javascript:void(0)" title="delete"  data_id="' .
                $currentObj->id .
                '" ><i class="fa fa-trash"></i></a> ';

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->contact_us->count_all(),
            "recordsFiltered" => $this->contact_us->count_filtered(),
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
                $this->load->model('admin/contact_us_model','contact_us');

                $editData = $this->contact_us->getRow('contact_us', $id);



                // end code for get state list 

                 // code for get cayegory list 
                $categoryId      =  $editData->category_id;

                 $categoryList   = $this->category->all();
                if (!empty($categoryList)) {
                    $data['categoriesList']  = $categoryList;
                }

                $subcategoryId      =  $editData->contact_us_id;

                 $subcategoryList   = $this->contact_us->all();
                 if (!empty($subcategoryList)) {
                    $data['subcategoriesList']  = $subcategoryList;
                }
               


                $data['edit_data'] = $editData;

                $this->load->view('admin/contact_us/view', $data);
            } else {
                redirect('admin/contact_us/view');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');

            redirect('admin/contact_us/view');
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
            $count = $this->contact_us->getCount('contact_us', 'contact_us.id', $id);

            if (isset($count) and !empty($count)) {
                $this->contact_us->delete('contact_us', 'id', $id);

                $this->session->set_flashdata('message', ' contact_us Deleted Successfully !');

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
                    $this->contact_us->delete('contact_us', 'id', $all_ids[$a]);

                    $this->session->set_flashdata('message', ' contact_us(s) Deleted Successfully !');
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

        $result = $this->contact_us->getList("contact_us");

        if ($filetype == 'csv') {
            header('Content-Type: application/csv');

            header('Content-Disposition: attachment; filename=contact_us.csv');

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
                if (!is_null($contact_us = $this->contact_us->getRow('contact_us', $id))) {
                    $status = $contact_us->$field;

                    if ($status == 1) {
                        $status = 0;
                    } else {
                        $status = 1;
                    }

                    $statusData[$field] = $status;

                    $this->contact_us->updateData('contact_us', $statusData, $id);

                    $this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

                    if (isset($_GET['redirect']) && $_GET['redirect'] != '') {
                        redirect($_GET['redirect']);
                    } else {
                        redirect('admin/contact_us');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Invalid Record Id!');

                    redirect('admin/contact_us');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Record Id!');

                redirect('admin/contact_us');
            }
        }
    }
}


