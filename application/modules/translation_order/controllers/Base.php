<?php 
namespace translation_order;
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends \Base_Controller {

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
    public function get($id)
    {
        $data["portfolioe"] = $this->translation_order_m->p_get($id);
		$data["content_view"] = "base/get";
		$this->template->render($data);
    }
    public function list()
    {
        $data["portfolioes"] = $this->translation_order_m->listIsPortfolioWithLimit(10);
		$data["content_view"] = "base/list";
		$this->template->render($data);
    }   
    public function add()
    {
        $this->translation_order_m->setRulesWhenAdd();
        if($this->form_validation->run() === false){
            echo validation_errors();
            $data['type'] = get("type");
            $data["content_view"] = "base/addUpdate";
            // $this->load->view("base/addUpdate");
            $this->template->render($data);
        }
        else{
            $this->db->trans_start();
            $insert_id=$this->translation_order_m->addByPostData();
            $this->db->trans_complete();
            
            if($this->db->trans_status() === false){
                alert("추가 실패.ERRORCODE :".transectionError);
                my_redirect($this->referer);
            }
            else{            
                alert("주문이 완료 되었습니다. 연락드리겠습니다.");
                my_redirect("/");
            }
        }
    }

 
}

/* End of file Admin.php */

?>