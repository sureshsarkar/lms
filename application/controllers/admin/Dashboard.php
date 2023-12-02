<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.

 * @since : 15 November 2016
 */
class Dashboard extends BaseController
{
	function __construct()
	{

		parent::__construct();

		$this->load->library('pagination');

		 $this->load->helper('url');

		//$this->load->library('ion_auth');

		$this->load->library('form_validation');

		$this->load->model('admin/category_model','category');
        // end live codes 
		$this->isLoggedIn();
	}

    

	function index()
	{


     
        $this->load->model('admin/enquery_model','enquery');

        	 // check login
             $w = array();
            //  $w['id'] = $_SESSION['userId'];
             $w['status'] = 1;
             $w['table'] = "sub_admin";
 
             $res = $this->enquery->findDynamic($w);
 
             if(empty($res)){
                session_unset();
                redirect("admin/login");
             }

        $data['totalEnquery'] = $this->enquery->countRow();

        $w = array();
        $w['table'] ='sub_admin';
        $w['field'] ='id,name,last_activity,picture';
        $data['subAdminList'] = $this->enquery->findDynamic($w);

        $w = array();
        $w['orderby'] = '-id';
        $w['enquery_type'] =1;
        $w['field'] ="id";
        // $w['lead_owner'] = $_SESSION['userId'];
        $totalFollowUpLeads = $this->enquery->findDynamic($w);
        $data['totalFollowUpLeads'] = count($totalFollowUpLeads);

        $w = array();
        $w['orderby'] = '-id';
        $w['enquery_type'] =2;
        $w['field'] ="id";
        // $w['lead_owner'] = $_SESSION['userId'];
        $totalNotUseful = $this->enquery->findDynamic($w);
        $data['totalNotUseful'] = count($totalNotUseful);

        $w = array();
        $w['orderby'] = '-id';
        $w['enquery_type'] =3;
        $w['field'] ="id";
        // $w['lead_owner'] = $_SESSION['userId'];
        $totalConverted = $this->enquery->findDynamic($w);
        $data['totalConverted'] = count($totalConverted);

        $w = array();
        $w['orderby'] = '-id';
        $w['enquery_type'] =4;
        $w['field'] ="id";
        // $w['lead_owner'] = $_SESSION['userId'];
        $inProcess = $this->enquery->findDynamic($w);
        $data['inProcess'] = count($inProcess);

        $w = array();
        $w['orderby'] = '-id';
        $w['enquery_type'] =5;
        $w['field'] ="id";
        // $w['lead_owner'] = $_SESSION['userId'];
        $lowBudget = $this->enquery->findDynamic($w);
        $data['lowBudget'] = count($lowBudget);

        $w = array();
        $w['orderby'] = '-id';
        $w['enquery_type'] =6;
        $w['field'] ="id";
        // $w['lead_owner'] = $_SESSION['userId'];
        $jobInquiry = $this->enquery->findDynamic($w);
        $data['jobInquiry'] = count($jobInquiry);

        $this->db->from('enquery');
        $this->db->select('*');
        // $this->db->where_in('lead_owner',array('0',$_SESSION['userId']));
        $this->db->where('spam_Id','0');
        $this->db->order_by('enquery.id', 'DESC');
        $this->db->limit(5);
        $q = $this->db->get();
        $top5Leads = $q->result();
        $data['top5Leads'] = count($top5Leads);
        $data['top5LeadsData'] = $top5Leads;

        $this->db->from('enquery');
        $this->db->select('id');
        $this->db->where('enquery.enquery_type','0');
        $this->db->where('spam_Id','0');
        // $this->db->where_in('lead_owner',array('0',$_SESSION['userId']));
        $q = $this->db->get();
        $newLeads = $q->result();
        $data['newLeads'] = count($newLeads);

        //todayFollowUp
        $fromdate = date("Y-m-d 00:00:00");
        $curentdate=date("Y-m-d 23:59:59");
        $this->db->from('enquery');
        $this->db->select('*');
        // $this->db->where_in('lead_owner',array($_SESSION['userId']));
        $this->db->where('enquery_type','1');
        $this->db->where('enquery.followup_date >=', $fromdate);
        $this->db->where('enquery.followup_date <=', $curentdate);
        $query = $this->db->get();
        $todayFollowUp = $query->result();
        $data['todayFollowUp'] = count($todayFollowUp);
        $data['todayFollowUpData'] = $todayFollowUp;
        
       // code to show grph chart start 
       $monthArr = array();
       $monthSubArr = array();
       $weekArr = array();
       $todayArr = array();
       $todaySubArr = array();

       // month
       $monthSubArr[] = 'Month and Year';
       $monthSubArr[] = 'Leads';
       $monthSubArr[] = 'Users';
       $monthArr[] = $monthSubArr;
      
       // today
       $todaySubArr[] = "Task";
       $todaySubArr[] = "Hours per Day";
       $todayArr[] = $todaySubArr;
       // get year using podt method
       if(isset($_POST['year']) && !empty($_POST['year'])){
           $currentYear = intval($_POST['year']);
           $y = $currentYear;
       }else{
       $currentYear = intval(date("Y"));
       $y = $currentYear;
       }
           // pass year in view
           // create month data in array
           $months = ["1"=>"Jan", "2"=>"Feb", "3"=>"Mar", "4"=>"Apr", "5"=>"May", "6"=>"June", "7"=>"July", "8"=>"Aug", "9"=>"Sept", "10"=>"Oct", "11"=>"Nov", "12"=>"Dec"];
           $year = "";
           //while loop to pass the year and fetch data from database by Year 
           while($y <= $currentYear) {
             $y;
             $currentYear;

             $year  .='-'.$y;
              //for loop to fetch data from database by Month 
               for ($i=1; $i <= count($months) ; $i++) { 
               $sql ='';
               $sql ="SELECT id,created_at FROM `enquery` WHERE created_at BETWEEN '".$y."-0".$i."-01' AND '".$y."-".$i."-31'";
               $pData =  $this->enquery->rawquery($sql);

               $sql ='';
               $sql ="SELECT id,created_at FROM `sub_admin` WHERE created_at BETWEEN '".$y."-0".$i."-01' AND '".$y."-".$i."-31' ";
               $mData =  $this->enquery->rawquery($sql);

                   // store data in a array after geting data one by one
                   $monthSubArr = array();
                   $monthSubArr[] =$y.'-'.$months[$i];
                   $monthSubArr[] = (empty($pData))?0:count($pData); 
                   $monthSubArr[] = (empty($mData))?0:count($mData); 
                   $monthArr[] = $monthSubArr;
               }
           $y++;
           }

       $data['jsonData'] = json_encode($monthArr);
       $data['year']  = $year;
// code to show grph chart end

// weekly code start 
$weekly =0;

for ($a=-6; $a <= $weekly ; $a++) { 
   $color = ["-6"=>"#6F1E51", "-5"=>"#20bf6b", "-4"=>"#17c0eb", "-3"=>"$1b9e77", "-2"=>"#c56cf0", "-1"=>"#82589F", "0"=>"#e84393"];

    $weekSubArr = array();
    if($a == 0){
        $tofrom = date("Y-m-d 00:00:00");
        $tonow=date("Y-m-d 23:59:59");
        $weekSubArr[] = date('D');
    }else{
        $tofrom = date('Y-m-d 00:00:00', strtotime("$a days"));
        $tonow = date('Y-m-d 23:59:59', strtotime("$a days"));
        $weekSubArr[] = date('D', strtotime("$a days"));
    }
   
    $sql ='';
    $sql ="SELECT id FROM `enquery` WHERE created_at BETWEEN '".$tofrom."' AND '".$tonow."'";
    $wData =  $this->enquery->rawquery($sql);

      // store data in a array after geting data one by one
    
     
      $weekSubArr[] = (empty($wData))?0:count($wData); 
      $weekSubArr[] = (empty($wData))?$color[$a]:$color[$a]; 


      $weekArr[] = $weekSubArr;

    }

    $data['jsonWeeklyData'] = json_encode($weekArr,true);

// weekly code end 


// today code start 
    $todaySubArr = array();
    $todayTotalLead = array();
    $todayTotalSpamLead = array();
    $todayLeadTime = array();
    $presentDate = array();
    $tofrom = date("Y-m-d 00:00:00");
    $tonow= date("Y-m-d 23:59:59");
    $DateTo =  date("Y-m-d 00:00:00");
    $Date =  date("Y-m-d 02:00:00");
    for ($i=1; $i<=24; $i++) { 
        $i++;
         $todate =  date("Y-m-d h:i:s",strtotime($DateTo. ' + '.$i.' hour'));
        // echo "<br>";
          $presentDate = date("Y-m-d h:i:s",strtotime($Date. ' + '.$i.' hour'));
        // echo "<br>";

    $sql ='';
    $sql ="SELECT id,created_at FROM `enquery` WHERE created_at BETWEEN '".$todate."' AND '".$presentDate."' AND `enquery_type` = '1'";
    $todayData =  $this->enquery->rawquery($sql);
    
    $sql ='';
    $sql ="SELECT id,created_at FROM `enquery` WHERE created_at BETWEEN '".$todate."' AND '".$presentDate."' AND `spam_Id` = '1'";
    $todaySpamData =  $this->enquery->rawquery($sql);

    $todayTotalLead[] = (isset($todayData) && !empty($todayData))?count($todayData):0;
    $todayTotalSpamLead[] = (isset($todaySpamData) && !empty($todaySpamData))?count($todaySpamData):0;
    $todayLeadTime[] = (isset($todayData) && !empty($todayData))?date("h:iA",strtotime($todate)):date("h:iA",strtotime($todate));
    // pre($todayData);
    }

    
    $data['todayTotalLead'] = json_encode($todayTotalLead,true);
    $data['todayTotalSpamLead'] = json_encode($todayTotalSpamLead,true);
    $data['todayLeadTime'] = json_encode($todayLeadTime,true);
// today code end 
// pre($data['todayTotalLead']);
// pre($data['todayTotalSpamLead']);
// pre($data['todayLeadTime']);
// exit();
        $data['title'] = 'Techcentrica :Super Admin Dashboard';
        $this->load->view('admin/dashboard',$data);

    }




	function index1()
	{
        $this->load->model('admin/contact_us_model','contact_us');
        $this->load->model('admin/enquery_model','enquery');
        $this->load->model('admin/sub_admin_model','sub_admin');

        $data['totalContact'] = $this->contact_us->countRow();
        $data['totalSubAdmin'] = $this->sub_admin->countRow();
        
        $w = array();
        $w['spam_Id'] = 1; 
        $totalSpamLeads = $this->enquery->findDynamic($w);
        $data['totalSpamLeads'] = count($totalSpamLeads);
        
               
        $w = array();
        $w['spam_Id'] = 0; 
        $totalEnquery = $this->enquery->findDynamic($w);
        $data['totalEnquery'] = count($totalEnquery);
               
        $w = array();
        $w['table'] = "imported_imquiry"; 
        $totalImportedInquiry = $this->enquery->findDynamic($w);
        $data['totalImportedInquiry'] = count($totalImportedInquiry);

		// end code for total enquiry 
        $data['title']="dashboard";
        $this->load->view('admin/dashboard',$data);
    }

	public function total_list(){
		$list = $this->enquiry_model->get_datatables();
        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            $temp_date = $currentObj->date_at;
            $date_at = date("d-m-Y", strtotime($temp_date));
          
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $currentObj->DestinationName;
            $row[] = $currentObj->type;
            $row[] = $currentObj->name;
            $row[] = $currentObj->email;
            $row[] = $currentObj->mobile;
            $row[] = $currentObj->message;
            $row[] = $currentObj->date_at;

            // $row[] = $currentObj->DestinationName;
            if($currentObj->status==1){
                $status1 = '<span class="btn-success badge">Active</span>
                
                ';
            }else{
                $status1 = '<span class="btn-danger badge">In-Active</span
                
                ';
            }
            $row[] = $status1;
            $row[] =
                '<a class="btn btn-sm btn-info" href="'.base_url().'admin/dashboard/viewEnq/'.$currentObj->id .'" title="Edit" ><i class="fa fa-eye"></i></a>&nbsp;&nbsp;  <a  title="Delete"   class="btn btn-sm btn-danger deletebtn deletebtn" href="javascript:void(0)" title="delete"  data_id="' .
                $currentObj->id .
                '" ><i class="fa fa-trash"></i></a> ';

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->enquiry_model->count_all(),
            "recordsFiltered" => $this->enquiry_model->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
	}

    public function total_list1(){
		$list = $this->visa_enquiry_model->get_datatables();
        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list

        foreach ($list as $currentObj) {
            $temp_date = $currentObj->date_at;
            $date_at = date("d-m-Y", strtotime($temp_date));
          
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $currentObj->DestinationName;
            $row[] = $currentObj->type;
            $row[] = $currentObj->name;
            $row[] = $currentObj->email;
            $row[] = $currentObj->mobile;
            $row[] = $currentObj->message;
            $row[] = $currentObj->date_at;

            // $row[] = $currentObj->DestinationName;
            if($currentObj->status==1){
                $status1 = '<span class="btn-success badge">Active</span>
                
                ';
            }else{
                $status1 = '<span class="btn-danger badge">In-Active</span
                
                ';
            }
            $row[] = $status1;
            $row[] =
                '<a class="btn btn-sm btn-info" href="'.base_url().'admin/dashboard/viewEnq1/'.$currentObj->id .'" title="Edit" ><i class="fa fa-eye"></i></a>&nbsp;&nbsp;  <a  title="Delete"   class="btn btn-sm btn-danger deletebtn deletebtn" href="javascript:void(0)" title="delete"  data_id="' .
                $currentObj->id .
                '" ><i class="fa fa-trash"></i></a> ';

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->visa_enquiry_model->count_all(),
            "recordsFiltered" => $this->Visa_Enquiry_model->count_filtered(),
            "data" => $data,
        ];
        //output to json format
        echo json_encode($output);
	}
    public function total_list2(){
    
		$list = $this->Cus_Enquiry_model->get_datatables();
      
        $data = [];
        $no = isset($_POST['start']) ? $_POST['start'] : '';
        // save data for parent catelgory list

        // save data for parent catelgory list
        foreach ($list as $currentObj) {
            $temp_date = $currentObj->date_at;
            $date_at = date("d-m-Y", strtotime($temp_date));
            if(!empty($currentObj->hotelRattings)){
                $hotel_rating = json_decode($currentObj->hotelRattings);
            }else{
                $hotel_rating='';
            }
            if(!empty($currentObj->country_name)){
                $country_name = $currentObj->country_name;
            }else{
                $country_name='';
            }
            if($currentObj->flighttobeIncluded==1){
                $flighttobeIncluded='Yes';
            }else{
                $flighttobeIncluded="No";
            }
            if($currentObj->cabforlocal==1){
                $cabforlocal='Yes';
            }else{
                $cabforlocal="No";
            }
            if(!empty($currentObj->totalPrice)){
                $totalPrice ='	₹ '.$currentObj->totalPrice;
            }else{
                $totalPrice='';
            }

            if(!empty($currentObj->message)){
                $message =$currentObj->message;
            }else{
                $message='';
            }
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $currentObj->packageType;
            $row[] = $country_name;
            $row[] = $currentObj->name;
            $row[] = $currentObj->email;
            $row[] = $currentObj->mobile;
            $row[] = $message;
            $row[] = $hotel_rating;
            $row[] = $flighttobeIncluded;
            $row[] = $currentObj->adult;
            $row[] = $currentObj->Infant;
            $row[] = $currentObj->child;
            $row[] = $currentObj->iwillbook;
            $row[] = $cabforlocal;
            $row[] = $currentObj->packageprefer;
            $row[] = $currentObj->prefertocall;
            $row[] = $currentObj->age;
            $row[] = $currentObj->tourType;
            $row[] = $totalPrice;
            if($currentObj->status==1){
                $status1 = '<span class="btn-success badge">Active</span>
                
                ';
            }else{
                $status1 = '<span class="btn-danger badge">In-Active</span
                
                ';
            }
            $row[] = $status1;
            $row[] = $currentObj->date_at;

            // $row[] = $currentObj->DestinationName;
         
            $row[] =
                '<a class="btn btn-sm btn-info" href="'.base_url().'admin/dashboard/viewEnq2/'.$currentObj->id .'" title="Edit" ><i class="fa fa-eye"></i></a>&nbsp;&nbsp;  <a  title="Delete"   class="btn btn-sm btn-danger deletebtn deletebtn" href="javascript:void(0)" title="delete"  data_id="' .
                $currentObj->id .
                '" ><i class="fa fa-trash"></i></a> ';

            $data[] = $row;
        }
        $output = [
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : '',
            "recordsTotal" => $this->Cus_Enquiry_model->count_all(),
            "recordsFiltered" => $this->Cus_Enquiry_model->count_filtered(),
            "data" => $data,
        ];

        //output to json format
        echo json_encode($output);
	}

 
	// code for delete enq 
	function Enqdelete($id = '')
    {
       
        if (isset($_POST)) {
            $id = $_POST["id"];
        }

        if (isset($id) and !empty($id)) {
          	$count = $this->enquiry_model->countRow();
            if (isset($count) and !empty($count)) {
                $this->enquiry_model->delete($id);

                $this->session->set_flashdata('message', ' Enquiry Deleted Successfully !');

                echo "success";

                exit();
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }
    function Enqdelete2($id = '')
    {
       
        if (isset($_POST)) {
            $id = $_POST["id"];
        }

        if (isset($id) and !empty($id)) {
          	$count = $this->Cus_Enquiry_model->countRow();
            if(isset($count) and !empty($count)) {
                $this->Cus_Enquiry_model->delete($id);
                $this->session->set_flashdata('message', ' Enquiry Deleted Successfully !');
                echo "success";
                exit();
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }
    function Enqdelete1($id = '')
    {
        if (isset($_POST)) {
            $id = $_POST["id"];
        }
        if (isset($id) and !empty($id)) {
          	$count = $this->visa_enquiry_model->countRow();
            if (isset($count) and !empty($count)) {
                $this->visa_enquiry_model->delete($id);

                $this->session->set_flashdata('message', ' Visa Enquiry Deleted Successfully !');

                echo "success";

                exit();
            } else {
                $this->session->set_flashdata('message', ' Invalid Id !');
            }
        } else {
            $this->session->set_flashdata('message', ' Invalid Id !');
        }
    }

	// end code for delete enq 

}