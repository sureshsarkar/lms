<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

require APPPATH . '/libraries/BaseController.php';
require 'vendor/autoload.php';
class View_customer extends BaseController
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        // $this->load->library('ion_auth');

        $this->load->library('form_validation');

         $this->load->model('sub_admin/view_customer_model', 'view_customer');
         $this->load->model('admin/category_model', 'category');
        
         $this->isLoggedInSubAdmin();
    }

    public function index()
    {

        $data['imported_imquiry'] = $this->view_customer->getList('imported_imquiry');
        $this->global['title'] = 'Techcentrica :View Customer';
        
        $deviceType = getDevice();
        if(isset($deviceType) && $deviceType == "mobile"){
            $this->loadSubAdminViews("sub_admin/view_customer/managemobile", $this->global, $data , NULL,'sub_admin');
        }else{
            $this->loadSubAdminViews("sub_admin/view_customer/manage", $this->global, $data , NULL,'sub_admin');
        }
    }

    
    // Sub category  list

    public function ajax_list()
    {
        $list = $this->view_customer->get_datatables();

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
            $countryImg = "";
            $country = (!empty($currentObj->country))?$currentObj->country:'';

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

            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="#" class="nameClass">'.$currentObj->name.'</a>';
            $row[]=$currentObj->phone;
            $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            $row[]=$currentObj->city;
            $row[]=(!empty($countryImg))?$countryImg:'<span class="badge bg-inverse-danger">N/A</span>';
           
            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->view_customer->count_all(),
            "recordsFiltered" => $this->view_customer->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }
    // end code for ajax list 

    
    public function mobile_ajax_list()
    {
        $list = $this->view_customer->get_datatables();

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
            $countryImg = "";
            $country = (!empty($currentObj->country))?$currentObj->country:'';

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

            $no++;
            $row = [];
            $row[] = '<a href="#"><span class="person-circle-a person-circle">'.$no.'</span></a>';
            $row[] ='<a href="#" class="nameClass">'.$currentObj->name.'</a>';
            $row[]=$currentObj->phone;
            // $row[]=(!empty($currentObj->email))?$currentObj->email:'<span class="badge bg-inverse-danger">N/A</span>';
            // $row[]=$currentObj->city;
            $row[]=(!empty($countryImg))?$countryImg:'<span class="badge bg-inverse-danger">N/A</span>';
           
            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->view_customer->count_all(),
            "recordsFiltered" => $this->view_customer->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
    }


    function view($id)
    {
        if (isset($id) and !empty($id)) {
           
            $editData = $this->view_customer->find($id);
// pre($id);
// exit;
            $data['edit_data'] = $editData;
            
            $this->global['title'] = 'Techcentrica :View Customer';

            $this->loadSubAdminViews("sub_admin/view_customer/view", $this->global,$data , NULL,'sub_admin');

        }
    }


        public function sendEmail(){
            return true;
            exit();
            if(isset($_POST['sendEmail']) && $_POST['sendEmail'] =='1'){
                
                $w = array();
                $w['field'] = "email";
                $emailData = $this->view_customer->findDynamic($w);

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


