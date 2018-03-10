<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends Public_Controller 
{
	public function __construct()
	{
        parent::__construct();
     
		if($this->userstate->isAdmin() === false)
		{
			alert("접근불가");
            my_redirect("/",false);
            exit;
        }
        
		$data["mainMenus"] = $this->_createMainMenus();
		$data["subMenus"] = $this->_createSubMenus();
		$this->template->load("admin/template",$data);
    }
    //Functions : Creating menuData that will be used on template
	private function _createMainMenus()
	{
		$this->menudata_creator->addMainMenu("메인","main","dashboard",site_url("admin/main/index"));
        if($this->userstate->isDeveloper()){
            $this->menudata_creator->addMainMenu("유저","user","users",site_url("admin/user/list"));
            $this->menudata_creator->addMainMenu("게시판","board","boards",site_url("admin/board/list"));
        }
        $this->menudata_creator->addMainMenu("프리랜서","freelancer","freelancer_list",site_url("admin/freelancer/list"));
        $this->menudata_creator->addMainMenu("번역/통역","translation_order","translation_order_list",site_url("admin/translation_order/list"));
        $this->menudata_creator->addMainMenu("제휴문의","contact","contact_list",site_url("admin/contact/list"));
        
		// $this->menudata_creator->addMainMenu("상품","product","products",site_url("admin/product/list"));
		// $this->menudata_creator->addMainMenu("파일","file","files",site_url("admin/file/list"));
		// $this->menudata_creator->addMainMenu("API","API","APIS",site_url("admin/api/list"));
		// $this->menudata_creator->addMainMenu("총매출액","total_revenue","total_revenue",site_url("admin/global_info/total_revenue"));

		// $this->menudata_creator->addMainMenu("phpMyAdmin","phpMyAdmin","",site_url("/phpmyadmin/db_structure.php?server=1&db=program"),false,"_blank");
		// $this->menudata_creator->addMainMenu("설치","설치","",site_url("init"));
		return $this->menudata_creator->getMainMenus();
	}
	private function _createSubMenus()
	{
		$this->menudata_creator->addSubMenu("main","대쉬보드","dashboard",site_url("admin/main/index"));
		$this->menudata_creator->addSubMenu("main","설정","globalInfo",site_url("admin/global_info/update/1"));
		// $this->menudata_creator->addSubMenu("user","설정","setting",site_url("admin/user/setting"));
		// $this->menudata_creator->addSubMenu("user","유저","users",site_url("admin/user/list"));
		// $this->menudata_creator->addSubMenu("user","포인트신청","point_order",site_url("admin/point_order/list"));
		$this->menudata_creator->addSubMenu("user","로그","user_log",site_url("admin/user_log/list"));
		$this->menudata_creator->addSubMenu("user","세션","session",site_url("admin/session/list"));
		$this->menudata_creator->addSubMenu("board","게시판","boards",site_url("admin/board/list"));
		$this->menudata_creator->addSubMenu("board","게시물","contents",site_url("admin/content/list"));
		$this->menudata_creator->addSubMenu("board","게시물 로그","content_log",site_url("admin/content_log/list"));
		// $this->menudata_creator->addSubMenu("board","댓글","replys",site_url("admin/reply/list"));
		// $this->menudata_creator->addSubMenu("product","설정","setting",site_url("admin/product/setting"));
		// $this->menudata_creator->addSubMenu("product","주문","priduct_orders",site_url("admin/product_order/list"));
		// $this->menudata_creator->addSubMenu("product","카테고리","categories",site_url("admin/category/list"));
		// $this->menudata_creator->addSubMenu("product","상품","products",site_url("admin/product/list"));
		// $this->menudata_creator->addSubMenu("product","리뷰","reviews",site_url("admin/review/list"));
        // $this->menudata_creator->addSubMenu("product","라이센스","licenses",site_url("admin/license/list"));
        // $this->menudata_creator->addSubMenu("product","라이센스 로그","license_log",site_url("admin/license_log/list"));
        // $this->menudata_creator->addSubMenu("product","카페 글쓰기 로그","naverCafeWriteLog",site_url("admin/navercafelog/list"));
        // $this->menudata_creator->addSubMenu("file","파일","files",site_url("admin/file/list"));
        // $this->menudata_creator->addSubMenu("file","다운로드 로그","download_log",site_url("admin/download_log/list"));
        // $this->menudata_creator->addSubMenu("API","APIS","APIS",site_url("admin/api/list"));
        // $this->menudata_creator->addSubMenu("API","captchas","captchas",site_url("admin/captcha/list"));
		return $this->menudata_creator->getSubMenus();
	}

	//Controller :: CRUD

    public function index()
    {
        $data["content_view"] = "admin/index";
        $this->template->render($data);
    }
    public function setting()
    {
        $this->load->model('setting_m');
         //get
         if ($this->input->method() !== "post") 
         {
             $data['mode'] = "setting";
             $data['row'] = $this->setting_m->p_get(1);
             $data["componentData"] = $this->{$this->modelName}->settingComponent();
             $data["content_view"] = "admin/addUpdate";
             $this->template->render($data);
             return;
         }
         //post
         $this->ajax_helper->headerJson();
         
         foreach ($_POST as $key=>$POST) {
             $this->form_validation->set_rules($key, $key, 'trim');
             break;
         }
         if ($this->form_validation->run() === false) 
         {
            $data['notify']["title"] = "유효성검사";
            $data['notify']["message"] = $this->form_validation->errors("<br>");
            $data['notify']["type"] = "danger";
         } 
         else 
         {
             $result=$this->setting_m->update("1");
             if($result === true)
                 $this->session->set_flashdata('message',["message"=>"수정 되었습니다.","type"=>"success"]);
            else
                $this->session->set_flashdata('message',["message"=>"수정 실패.","type"=>"danger"]);
             $data['reload'] =true;
         }
         $this->ajax_helper->json($data);
    }


    public function deleteRange()
    {
        $this->ajax_helper->headerJson();
        $result=$this->{$this->modelName}->p_deleteRange();
        if($result === true)
            $this->session->set_flashdata('message',["message"=>"삭제되었습니다.","type"=>"success"]);
        else
            $this->session->set_flashdata('message',["message"=>"문제발생.","type"=>"danger"]);
        $data['reload'] = true;
        $this->ajax_helper->json($data);
    }

}

/* End of file Admin_Controller.php */
/* Location: ./application/core/Admin_Controller.php */