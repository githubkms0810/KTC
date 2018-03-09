<?php 
namespace freelancer;
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends \Base_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("freelancer/freelancer_m");
     
    }

//     public function get($id)
//     {
//         parent::get($id);
//     }
//     public function list()
//     {
//         parent::list();
//     }
    public function add(){

        $this->freelancer_m->setRulesWhenAdd();
        if($this->form_validation->run() === false){
            $data["content_view"] = "base/addUpdate";
            $this->template->render($data);
        }
        else{
            $this->db->trans_start();
            $insert_id=$this->freelancer_m->addByPostData();
            $this->load->model("freelancer_translation_language/freelancer_translation_language_m");
            $this->freelancer_translation_language_m->addByFreelancerIdAndLanguages($insert_id,post('languages'));
            $this->db->trans_complete();
            
            if($this->db->trans_status() === false){
                alert("추가 실패.ERRORCODE :".transectionError);
                my_redirect($this->referer);
            }
            else{
                alert("프리랜서 등록이 완료 되었습니다. 검수 후 문자 통보해드립니다.");
                my_redirect("/");
            }
        }
    }
  
    
    
//     public function update($id)
//     {
//         parent::update($id);
//     }
//     public function delete($id)
//     {
//         parent::_ajaxDelete($id);
//     }
}

/* End of file Admin.php */

?>