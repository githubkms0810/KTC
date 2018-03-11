<?php 
namespace freelancer;
//의존성 :: product, user
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends \Admin_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function confirm($id)
    {
        $this->db->set("is_admin_confirm","1");
        $this->freelancer_m->p_update($id);
        redirect($this->referer);
    }
    public function cancelConfirm($id)
    {
        $this->db->set("is_admin_confirm","0");
        $this->freelancer_m->p_update($id);
        redirect($this->referer);
    }
    public function sendEamilAndUpdateIsSendEmail($email,$id)
    {
        $this->$this->load->library('email');
        $this->email->from = "admin";
        $subject = $this->setting->freelancer_admin_confirm_mail_subject;
        $content = $this->setting->freelancer_admin_confirm_mail_content; 
        $this->email->send_email($email,$subject,$content);
        $this->db->set("is_send_email" ,"1");
        $this->freelancer_m->p_update($id);
    }
    
    public function get($id)
    {
        $data['row'] = $row = $this->{$this->modelName}->get($id);
        $this->load->model('file/file_m');
        
        $data["application_files"]  = $this->file_m->list_ByGroupId($row->file_group_id);
        $data["fieldData"] = $this->{$this->modelName}->{"getData"}();
		// $data = $this->{$this->modelName}->additionalGetData();
		$data["content_view"] = "{$this->className}/get";

		$this->data += $data;
        $this->template->render($this->data);
    }
}

/* End of file Admin.php */

?>