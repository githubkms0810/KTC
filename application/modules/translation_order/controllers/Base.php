<?php 
namespace translation_order;
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends \Base_Controller {
    public $limit = 8;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("translation_order/translation_order_m");
    }
    public function selectType()
    {
        $data["content_view"] = 'base/selectTranstionType';
        $this->template->render($data);
        
    }
    public function listWithJscroll()
    {
        $data["offset"] = $offset = get("offset");
        $data["limit"] = $limit = get("limit");
        $data["portfolioes"] = $this->translation_order_m->listIsPortfolioWithLimit($limit,$offset);
        $this->load->view("base/listWithJscroll",$data);

    }
    public function get($id)
    {
        $portfolio = $this->translation_order_m->p_get($id);
        $portfolioType = $portfolio->type;
        if($portfolio->is_use_confidential === "1")
            $portfolio=$this->changeConfidential($portfolio);

        $this->db->where("type",$portfolioType);
        $data["portfolioes"] = $this->translation_order_m->listIsPortfolioWithLimit(3,0);
        $data["portfolio"] = $portfolio;
		$data["content_view"] = "base/get";
		$this->template->render($data);
    }
    private function changeConfidential($portfolio)
    {
        foreach ($portfolio as $key => $value) 
            $portfolio->$key = "기밀사항";
        return $portfolio;
    }
    public function list()
    {
        $limit = $this->limit;
        $portfolioes_count = $this->translation_order_m->countPortFolioes();
        $data["num_pages"]  =  ceil($portfolioes_count/ $limit);
		$data["content_view"] = "base/list";
		$this->template->render($data);
    }   
    public function add()
    {

        $this->translation_order_m->setRulesWhenAdd();
        var_dump(validation_errors());
      
        if($this->form_validation->run() === false){
            $data['type'] = get("type");
            $data["content_view"] = "base/addUpdate";
            $this->template->render($data);
        }
        else{
          
            $this->db->trans_start();
            $this->load->model('file/file_m');
            $group_id=$this->file_m->add();
            $this->db->set("file_group_id",$group_id);
            $insert_id=$this->translation_order_m->addByPostData();
            $this->db->trans_complete();
            
            if($this->db->trans_status() === false){
                alert("추가 실패.ERRORCODE :".transectionError);
                my_redirect($this->referer);
            }
            else{            
                alert("의뢰가 신청 되었습니다. 연락드리겠습니다.\\r메인페이지로 이동합니다.");
                my_redirect("/");
            }
        }
    }

 
}

/* End of file Admin.php */

?>