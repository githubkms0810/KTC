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
    // public function list()
    // {

    // }
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
                redirect("/translation_order/complete/$insert_id");
            }
        }
    }

    function complete($id){
        $data["order"] =$this->translation_order_m->p_get($id);
        $data["content_view"]= "base/complete";
        $this->template->render($data);
    }
 
}

/* End of file Admin.php */

?>