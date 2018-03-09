
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//의존성 ::
class Translation_order_m extends Pagination_Model 
{
	// protected $numRows_moduleName = "file";
	// protected $numRows_foreignKey = "file_id";
	// protected $numRows_fieldName = "num_download_log";
	public function __construct()
	{
		$this->table = "translation_order";
		$this->as = "translation_order";
		parent::__construct();
	}
	
	//------@component addUpdate  정의
	// protected function _component_addUpdate()
	// {
	// 	return array(
	// 		array(
	// 			array("method"=>"text","fieldName"=>["total_price"],"displayName"=>["총가격"],"inputName"=>""),
	// 			array("inputName"=>"name","displayName"=>"이름"),
	// 			array("inputName"=>"version","type"=>"radio","inputValue"=>["정식","베타"],"inputDisplayName"=>["정식","베타"],"displayName"=>"버전"),
	// 			array("method"=>"summernote","inputName"=>"desc","displayName"=>"설명"),
	// 			array("updateDefault"=>"displayName","method"=>"inputSearch","table"=>"user","searchField"=>["displayName","userName","name"],"searchFieldDisplayName"=>["별명","아이디","이름"],"displayName"=>"유저검색","inputName"=>"user_id","inputValue"=>"id"),
	// 			array("type"=>"hidden","inputName"=>"product_id","default"=>function($row){return $row->id;}),
	// 			array("type"=>"number","inputName"=>"num","displayName"=>"개수"),
	//			array("method"=>"ajaxImage","displayName"=>"프로필 사진","inputName"=>"profile_image", "default"=>"/public/images/unknown.png"),
	// 		),
	// 		array(
	// 			"moduleName"=>"product_order_detail",
	// 			array("type"=>"hidden","inputName"=>"order_id","default"=>function($row){return $row->id;}),
	// 			array("updateDefault"=>false,"method"=>"inputSearch","table"=>"product","searchField"=>["name"],"searchFieldDisplayName"=>["상품이름"],"displayName"=>"주문 디테일 추가","inputName"=>"product_id","inputValue"=>"id"),
	// 			array("type"=>"number","inputName"=>"num","displayName"=>"개수"),
	// 			array("type"=>"number","inputName"=>"price","displayName"=>"가격"),
				
	// 			"rows" => array(
	// 				"displayName" =>"주문 디테일",
	// 				"variableName"=>"product_order_details",
	// 				"moduleName"=>"product_order_detail",
	// 				"alertButton"=>false,
	// 				array("method"=>"text","fieldName"=>["product_name","num","price"],"displayName"=>["이름","개수","개당 가격"],"href"=>function($row){return "/admin/product_order_detail/update/{$row->id}";}),
	// 			),
	// 		),
	// 	);
	// }
	// protected function _component_add()
	// {
	// 	return array();
	// }
	// protected function _component_update()
	// {
	// 	return array();
	// }
	

	//------@addUpdate 정의
		
	// protected function _add_admin()
	// {
	// 	return parent::_add_admin();
	// }

	// protected function _update_admin($id)
	// {
	// 	parent::_update_admin($id);
	// }
	// protected function _add_base()
	// {
	// 	$this->set_post("name");
	// 	$insert_id= $this->p_add();
	// 	return $insert_id;
	// }

	// protected function _update_base($id)
	// {
	// 	$this->set_post("name");
	// 	$this->p_update($id);
	// }


	//------ @validation addUpdate 정의

	// protected function _set_rules_addUpdate()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }
	// protected function _set_rules_add()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }
	// protected function _set_rules_update()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }

	// protected function _set_rules_addUpdate_admin()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }
	// protected function _set_rules_add_admin()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }
	// protected function _set_rules_update_admin()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }

	// protected function _set_rules_addUpdate_base()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }
	// protected function _set_rules_add_base()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }
	// protected function _set_rules_update_base()
	// {
	// 	$this->form_validation->set_rules('name', '이름', 'trim|required');
	// }

	// `id` INT UNSIGNED NULL AUTO_INCREMENT, 
	// `order_id` INT UNSIGNED,
	// `translation_status` ENUM('전달중','전달완료','진행중','완료') NOT NULL DEFAULT '전달중',
	// `image` varchar(255),
	// `buyer` ENUM('회사','개인') NOT NULL DEFAULT '회사',
	// `company` varchar(255),
	// `department` varchar(255),
	// `manager` varchar(255),
	// `company_phone` varchar(255),
	// `manager_phone` varchar(255),
	// `personal_name` varchar(255),
	// `personal_phone` varchar(255),
	// `is_exist_fax` boolean NOT NULL DEFAULT '1',
	// `fax` varchar(255),
	// `email` varchar(255),
	// `translation_kind` varchar(255),
	// `translation_before` varchar(255),
	// `translation_after` varchar(255),
	// `deadline` varchar(255),
	// `is_exist_budget` boolean NOT NULL DEFAULT '1',
	// `budget` varchar(255),
	// `requirements` varchar(255),
	// `is_get_tax_bill` boolean NOT NULL DEFAULT '1',
	// `is_get_cash_receipt` boolean NOT NULL DEFAULT '1',
	// `is_use_confidential` boolean NOT NULL DEFAULT '1',

	// `file_group_id` INT UNSIGNED,

	// `interpret_kind` varchar(255),
	// `interpret_address` varchar(255),
	// `interpret_address_detail` varchar(255),
	// `interpret_start_date` varchar(255),
	// `interpret_end_date` varchar(255),
	// `is_need_equiment` boolean NOT NULL DEFAULT '0',
	// `num_equiment` INT UNSIGNED DEFAULT '0',

	//------ @cusotm
	public function listIsPortfolioWithLimit($limit)
	{
		$this->db->where("is_portfolio","1");
		$this->db->limit(8,0);
		return $this->list();
	}
	public function setRulesWhenAdd()
	{
		if(post("buyer")=== "회사"){
			$this->form_validation->set_rules('company', '회사이름', 'trim|required');
			$this->form_validation->set_rules('manager', '담당자', 'trim|required');
			$this->form_validation->set_rules('manager_phone_first', '담당자 전화번호', 'trim|required');
			$this->form_validation->set_rules('manager_phone_second', '담당자 전화번호', 'trim|required');
			$this->form_validation->set_rules('manager_phone_third', '담당자 전화번호', 'trim|required');
		}
		else if(post("buyer")=== "개인"){
			$this->form_validation->set_rules('personal_name', '이름', 'trim|required');
			$this->form_validation->set_rules('personal_phone_first', '전화번호', 'trim|required');
			$this->form_validation->set_rules('personal_phone_second', '전화번호', 'trim|required');
			$this->form_validation->set_rules('personal_phone_third', '전화번호', 'trim|required');
		}

	}
	public function addByPostData()
	{
		$this->load->library("post_helper");

		$this->set_post("buyer");
		$this->set_post("company");
		$this->set_post("department");
		$this->set_post("manager");
		$this->set("company_phone",$this->post_helper->makePhoneByPostData("company_phone_first","company_phone_second","company_phone_third"));
		$this->set("manager_phone",$this->post_helper->makePhoneByPostData("manager_phone_first","manager_phone_second","manager_phone_third"));
		$this->set_post("personal_name");
		$this->set("personal_phone",$this->post_helper->makePhoneByPostData("personal_phone_first","personal_phone_second","personal_phone_third"));
		$this->set("fax",$this->post_helper->makePhoneByPostData("fax_first","fax_second","fax_third"));
		$this->post_helper->ifNullSetQueryByDefaultOrDo("is_exist_fax","1");
		$this->set("email",$this->post_helper->makeEmailByPostData());
		$this->set_post("interpret_kind");
		$this->set_post("translation_kind");
		$this->set_post("translation_before");
		$this->set_post("translation_after");
		$this->set_post("interpret_address");
		$this->set_post("interpret_address_detail");
		$this->set_post("interpret_start_date");
		$this->set_post("interpret_end_date");
		$this->set_post("interpret_pay_date");
		$this->set_post("budget");
		$this->post_helper->ifNullSetQueryByDefaultOrDo("is_need_equiment","0");
		$this->set_post("num_equiment");
		$this->post_helper->ifNullSetQueryByDefaultOrDo("is_need_profile","0");
		$this->set_post("requirements");
		$this->post_helper->ifNullSetQueryByDefaultOrDo("is_get_tax_bill","0");
		$this->post_helper->ifNullSetQueryByDefaultOrDo("is_get_cash_receipt","0");
		$this->post_helper->ifNullSetQueryByDefaultOrDo("is_use_confidential","0");
		$this->set_post("message");
		$insert_id= $this->p_add();
		return $insert_id;
	}
	
	//------ @query @list@Get 정의
		
	protected function _select()
	{
		$this->db->select("
		{$this->as}.*,
		");
	}
	// protected function _select_admin()
    // {
    //     $this->_select();
    // }
    // protected function _select_base()
    // {
    //     $this->_select();
	// }
	protected function _select_api()
	{
		$this->db->select("
		{$this->as}.id,
		");
	}

	protected function _from()
	{
		$this->db->from("$this->table as {$this->as}");
		// $this->db->join("user as u","{$this->as}.user_id = u.id","LEFT");
	}

	protected function _get_admin()
	{
	}
	protected function _get_base()
	{
		
	}
	
	protected function _list_admin()
	{
	}
	protected function _list_base()
	{
	
	}
	

	//@listGet 필드네임 정의
	//admin
	public function listData_admin()
	{
		return array(
			array("displayName"=>"ID","fieldName"=>"id"),
			array("displayName"=>"종류","fieldName"=>"type"),
			array("displayName"=>"상태","fieldName"=>"translation_status"),
			array("displayName"=>"생성일","fieldName"=>"created"),
		);
	}
	// public function getData_admin()
	// {
	// 	return array(
	// 		array("displayName"=>"ID","fieldName"=>"id"),
	// 		array("displayName"=>"이름","fieldName"=>"name"),
	// 		array("displayName"=>"보이기","fieldName"=>"is_display"),
	// 	);
	// }
	//base
	// public function listData_base()
	// {
	// 	return array(
	// 		array("displayName"=>"ID","fieldName"=>"id"),
	// 		array("displayName"=>"이름","fieldName"=>"name"),
	// 		array("displayName"=>"보이기","fieldName"=>"is_display"),
	// 	);
	// }
	// public function getData_base()
	// {
	// 	return array(
	// 		array("displayName"=>"ID","fieldName"=>"id"),
	// 		array("displayName"=>"이름","fieldName"=>"name"),
	// 		array("displayName"=>"보이기","fieldName"=>"is_display"),
	// 	);
	// }




	//------@search 검색을 허용할 필드들을 정의합니다 


	// protected function _searchData()
    // {
    //     return array(
	// 		"title"=>array("displayName"=>"제목","fieldName"=>"b_c.title","kind"=>"or"),
	// 		"desc"=>array("displayName"=>"내용","fieldName"=>"desc","kind"=>"textfull-or"),
	// 		"titleDesc"=>array("displayName"=>"제목+내용","fieldName"=>["b_c.title","desc"],"kind"=>["or","textfull-or"]),
	// 		"displayName"=>array("displayName"=>"글쓴이","fieldName"=>"u.displayName","kind"=>"or"),
	// 	);
		
	// }
	// protected function _searchData_admin()
	// {
	// 	return array(
	// 	);
	// }
	// protected function _searchData_base()
    // {
    //     return array(
			
	// 	);
	// }

	//------ @order 정렬 할 필드들을 정의합니다.
	// protected function _orderByData()
    // {
    //     return array(
	// 		"newset"=>array("displayName"=>"최근순","fieldName"=>"{$this->as}.id","sort"=>"desc"),
	// 		"lastest"=>array("displayName"=>"등록순","fieldName"=>"{$this->as}.id","sort"=>"asc"),
    //     );
    // }
    // protected function _orderByData_admin()
    // {
    //     return array();
    // }
    // protected function _orderByData_base()
    // {
    //     return array(
    //     );
    // }
	//---- @setting 어드민 페이지의 세팅을 정의합니다.

	// protected function _settingComponent_admin()
	// {
	// 	return array();
	// }



	//------@table 다음 테이블을 만듭니다.
	public function createTable ()
	{
		$createTableQuery = "CREATE TABLE `{$this->table}`(
		`id` INT UNSIGNED NULL AUTO_INCREMENT, 
		-- `order_id` INT UNSIGNED,
		`title` varchar(255),
		`desc` text,
		`type` ENUM('번역','통역') NOT NULL,
		`translation_status` ENUM('전달중','전달완료','진행중','완료') NOT NULL DEFAULT '전달중',
		`image` varchar(255) DEFAULT '/public/images/portfolio-1.png',
		`buyer` ENUM('회사','개인') NOT NULL DEFAULT '회사',
		`company` varchar(255),
		`department` varchar(255),
		`manager` varchar(255),
		`company_phone` varchar(255),
		`manager_phone` varchar(255),
		`personal_name` varchar(255),
		`personal_phone` varchar(255),
		`is_exist_fax` boolean NOT NULL DEFAULT '1',
		`fax` varchar(255),
		`email` varchar(255),
		`translation_kind` varchar(255),
		`translation_before` varchar(255),
		`translation_after` varchar(255),
		`deadline` varchar(255),
		`is_exist_budget` boolean NOT NULL DEFAULT '1',
		`budget` varchar(255),
		`requirements` varchar(255),
		`is_get_tax_bill` boolean NOT NULL DEFAULT '1',
		`is_get_cash_receipt` boolean NOT NULL DEFAULT '1',
		`is_use_confidential` boolean NOT NULL DEFAULT '1',
		`message` text(255),
		`file_group_id` INT UNSIGNED,

		`interpret_kind` varchar(255),
		`interpret_address` varchar(255),
		`interpret_address_detail` varchar(255),
		`interpret_start_date` varchar(255),
		`interpret_end_date` varchar(255),
		`interpret_pay_date` varchar(255),
		`is_need_equiment` boolean NOT NULL DEFAULT '0',
		`is_need_profile` boolean NOT NULL DEFAULT '0',
		`is_portfolio` boolean NOT NULL DEFAULT '0',
		`num_equiment` INT UNSIGNED DEFAULT '0',
	
		`is_display` boolean NOT NULL DEFAULT '1',
		`is_secret` boolean NOT NULL DEFAULT '0',
		`sort` INT NOT NULL DEFAULT '0',
		`created` datetime NOT NULL DEFAULT NOW(),
	-- CONSTRAINT `fkTranslationOrdeR_order_id` FOREIGN KEY (`order_id`) REFERENCES product_order(`id`)
	-- ON UPDATE CASCADE
	-- ON DELETE CASCADE
	-- ,
		KEY `idx_type` (`type`),
		KEY `idx_title` (`title`),
		KEY `idx_desc` (`desc`),
			KEY `idx_translation_status` (`translation_status`),
			KEY `idx_buyer` (`buyer`),
			KEY `idx_is_exist_fax` (`is_exist_fax`),
			KEY `idx_translation_kind` (`translation_kind`),
			KEY `idx_translation_before` (`translation_before`),
			KEY `idx_translation_after` (`translation_after`),
			KEY `idx_is_exist_budget` (`is_exist_budget`),
			KEY `idx_is_get_tax_bill` (`is_get_tax_bill`),
			KEY `idx_is_get_cash_receipt` (`is_get_cash_receipt`),
			KEY `idx_is_use_confidential` (`is_use_confidential`),
			KEY `idx_file_group_id` (`file_group_id`),
			KEY `idx_interpret_kind` (`interpret_kind`),
			KEY `idx_interpret_start_date` (`interpret_start_date`),
			KEY `idx_interpret_end_date` (`interpret_end_date`),
			KEY `idx_interpret_pay_date` (`interpret_pay_date`),
			KEY `idx_is_need_equiment` (`is_need_equiment`),
			KEY `idx_is_need_profile` (`is_need_profile`),
			KEY `idx_num_equiment` (`num_equiment`),
			KEY `idx_is_portfolio` (`is_portfolio`),

			KEY `idx_is_display` (`is_display`),
			KEY `idx_is_secret` (`is_secret`),
			KEY `idx_sort` (`sort`),
			KEY `idx_created` (`created`),
		PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

		$this->_createTable($createTableQuery);
	}
	// @field
	public function alertTable()
	{
		
		// $fieldName = "test";
		// $addFieldQuery = "ALTER TABLE `{$this->table}` ADD `{$fieldName}` INT UNSIGNED NOT NULL AFTER `created`, ADD INDEX `idx_{$fieldName}` (`{$fieldName}`);";
		// $this->_addField($fieldName,$addFieldQuery);

		// $fieldName = "kind";
		// $alterFiledQuery="ALTER TABLE `{$this->table}` CHANGE `{$fieldName}` `{$fieldName}` ENUM('developer','admin','general') DEFAULT 'general';";
		// $this->_alterField($fieldName,$alterFiledQuery);
		
	}
}