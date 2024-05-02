<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Inquirysubmit extends BaseController
{
    
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('base_library');
        // Cookie helper
        $this->load->helper('cookie');
        $this->load->model('admin/category_model');
        $this->load->model('admin/banner_model');
     }

    // Index =====================================================================
    public function index($slug)
    {
       
        $getMenu['table']  = 'category';
        $getMenu['id']     = '-id'; // Desc when - add
        $getMenu['limit']     = '20'; // Desc when - add
        $data['categoryMenu']      = $this->getCategory($getMenu); 
        // pre($data['categoryMenu']);
        // exit;

        // Get sub category using slug
        $w = array();
        $w['status'] = 1;
        $w['table'] = "contact_us";
        $w['slug'] =$slug;
        $pageData = $this->category_model->findDynamic($w);
        
        if(count($pageData) > 0){
            $data['pageData'] = $pageData[0];
            $metaData = json_decode($pageData[0]->meta_data);
        }else{
            redirect("errorpage");
        }
    
      
        // get all this category's sub categorys
        if(count($pageData) > 0){
            $w = array();
            $w['status'] = 1;
            $w['table'] = "sub_category";
            $w['category_id'] =$pageData[0]->category_id;
            $w['field'] = "id,category_id,sub_category_name,slug";
            $subCategoryList = $this->category_model->findDynamic($w);
            $data['subCategoryList'] = $subCategoryList;
         }
      
        // get this category
        if(count($pageData) > 0){
            $w = array();
            $w['status'] = 1;
            $w['id'] =$pageData[0]->category_id;
            $w['field'] = "id,cat_name";
            $categoryData = $this->category_model->findDynamic($w);
            $data['categoryData'] = $categoryData[0];
         }

           // get this sub categorys
        if(count($pageData) > 0){
            $w = array();
            $w['status'] = 1;
            $w['table'] = "sub_category";
            $w['id'] =$pageData[0]->sub_category_id;
            $w['field'] = "id,sub_category_name";
            $subCategoryData = $this->category_model->findDynamic($w);
            $data['subCategoryData'] = $subCategoryData[0];
         }
         
//  pre($data['subCategoryData']);
//         exit;

            // get topfooter data
            $w = array();
            $w['table'] = 'topfooter';
            $topFooter = $this->category_model->findDynamic($w);
            $data['topFooter'] = $topFooter[0];
        // Get Banners data
       if(count($pageData) > 0){
           $w = array();
           $w['status'] = 1;
           $w['table'] = "banner";
           $w['sub_category_id'] =$pageData[0]->sub_category_id;
           $w['field'] = "image_alt,image,slug";
           $banners = $this->category_model->findDynamic($w);
           if(isset($banners[0])){
            $data['banners'] = $banners[0];
        }
        }       
    
    //SEO DATA FOR HEADER START===================================================
        $data["title"]=(isset($metaData->meta_title))?$metaData->meta_title:"";
        $data["keywords"]=(isset($metaData->meta_keyword))?$metaData->meta_keyword:"";
        $data["description"]=(isset($metaData->meta_description))?$metaData->meta_description:"";
        $data["og_url"]=(isset($metaData->og_url))?$metaData->og_url:"";
        $data["og_image"]=(isset($metaData->og_image) && !empty($metaData->og_image))?base_url().$metaData->og_image:base_url('assets/images/logo.png');
        $data["og_title"]=(isset($metaData->og_title))?$metaData->og_title:"";
        $data["og_description"]=(isset($metaData->og_description))?$metaData->og_description:"";
        $data["og_site_name"]=(isset($metaData->og_site_name))?$metaData->og_site_name:"";
        $data["canonical"]=(isset($metaData->canonical))?$metaData->canonical:"";
        $data['pageName'] = $slug;
        $data['page'] = 'Contact Us';
        //SEO DATA FOR HEADER END======================================================
        // Define ===========================  
        if($slug =="join-us"){
            $data["file"]="front/join_us";
        }else{
            $data["file"]="front/contact_location";
        }
        $this->load->view('front/includes/template',$data);
    } 
    

    // Add 
    public function contact_enquery()
    {
        
        if (isset($_SERVER['HTTP_REFERER'])) {
            $lastPageUrl = $_SERVER['HTTP_REFERER'];
        }

        $this->load->model('admin/enquery_model');
        $data = null;

        $getMenu['table']  = 'category';
        $getMenu['id']     = '-id'; // Desc when - add
        $getMenu['limit']     = '20'; // Desc when - add
        $data['categoryMenu']      = $this->getCategory($getMenu);

        $this->form_validation->set_rules('name2', 'Name ', 'required');
        $this->form_validation->set_rules('cnum', 'Phone ', 'required');
        
        $data['errors'] = [];

        if ($this->form_validation->run() == false) {

            // end code for get category list 
            $data['title'] = "add_sub_admin";
           redirect('/');
           } else {
               //  code for insert data 
             
            //  pre($_POST);
            //  exit;

            $name = (isset($_POST['name2']))?$_POST['name2']:''; // required
            $email =(isset($_POST['email']))?$_POST['email']:''; // required
            $phone = (isset($_POST['cnum']))?$_POST['cnum']:''; // required
            $comments = (isset($_POST['comments']))?$_POST['comments']:''; // required
            $service = (isset($_POST['service']))?$_POST['service']:''; // required
            $lead_ip = $_SERVER['REMOTE_ADDR']; // required
            
            $insertData  = array();
            $insertData['name']               =$name;
            $insertData['email']              =$email;
            $insertData['phone']              = $phone;
            $insertData['comments']           = $comments;
            $insertData['service']            = $service;
            $insertData['lead_ip']            = $lead_ip;
            $insertData['status']             = 1;
            $insertData['source']             = 1;
            $insertData['created_at']         = date("Y-m-d H:i:s");
               
            $result  = $this->enquery_model->save($insertData);

            // sent Email 
            $toEmail = $email.',sales@techcentrica.com';
            $subject = "Contact Enquiry";
            $message =  $message = "Name: $name<br> Email: $email<br> Number: $phone<br> Comments: $comments<br>";
            $this->send_email($toEmail,$subject,$message);
           
            redirect('https://techcentrica.co.in/TechCentrica/ThankYou/thanks.html');
            if($result > 0){

                $this->session->set_flashdata('success', 'Enquiry Successfully Submited!');
                $data["file"]="front/welcome";
                $this->load->view('front/includes/template',$data);
            }else{
                $this->session->set_flashdata('failed', 'Failed to Submit Enquiry !');
                redirect($lastPageUrl);
            }
        }
    }


}

?>