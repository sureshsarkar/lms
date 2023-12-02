<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Index extends BaseController
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
    public function index()
    {
        $slug = "";
        $data1['table']  = 'category';
        $data1['id']     = '-id'; // Desc when - add
        $data1['limit']     = '20'; // Desc when - add
        $data['categoryMenu']      = $this->getCategory($data1); 
        // pre($data['categoryMenu']);
        // exit;

        
        // Get using slug
        $w = array();
        $w['status'] = 1;
        $w['table'] = "home";
        $w['slug'] =$slug;
        $pageData = $this->category_model->findDynamic($w);
        
        if(count($pageData) > 0){
            $data['pageData'] = $pageData[0];
            $metaData = json_decode($pageData[0]->meta_data);
        }else{
            redirect("errorpage");
        }


        $pageType="Home";
        $w = array();
        $w['cat_name'] = $pageType;
        $w['field'] = "id,cat_name";
        $categoryData = $this->category_model->findDynamic($w);



        // get topfooter data
        $w = array();
        $w['table'] = 'topfooter';
        $topFooter = $this->category_model->findDynamic($w);
        $data['topFooter'] = $topFooter[0];

        
        // Get Banners
       if(count($categoryData) > 0){
           $w = array();
           $w['status'] = 1;
           $w['category_id'] =$categoryData[0]->id;
           $w['field'] = "image_alt,image,slug";
           $banners = $this->banner_model->findDynamic($w);
           if(isset($banners[0])){
            $data['banners'] = $banners[0];
        }
        }       

        // Get Details from sub category table
        $w = array();
        $w['category_id'] =$categoryData[0]->id;
        $w['table'] ="sub_category";
        $details = $this->category_model->findDynamic($w);
        
        if(count($details) > 0){
            $data['details'] = $details[0];
        }
    // $metaData = json_decode($data['details']->meta_data);
    //SEO DATA FOR HEADER START===================================================
    $data["title"]=(isset($metaData->meta_title))?$metaData->meta_title:"";
    $data["keywords"]=(isset($metaData->meta_keyword))?$metaData->meta_keyword:"";
    $data["description"]=(isset($metaData->meta_description))?$metaData->meta_description:"";
    $data["og_url"]=(isset($metaData->og_url))?$metaData->og_url:"";
    $data["og_image"]=(isset($metaData->og_image))?$metaData->og_image:"";
    $data["og_title"]=(isset($metaData->og_title))?$metaData->og_title:"";
    $data["og_description"]=(isset($metaData->og_description))?$metaData->og_description:"";
    $data["og_site_name"]=(isset($metaData->og_site_name))?$metaData->og_site_name:"";
    $data["canonical"]=(isset($metaData->canonical))?$metaData->canonical:"";
        $data['page'] = 'Home';
        
        //SEO DATA FOR HEADER END======================================================
        // Define ===========================  
        $data["file"]="front/index";
        $this->load->view('front/includes/template',$data);
    } 
     

}

?>