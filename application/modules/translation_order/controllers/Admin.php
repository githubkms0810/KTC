<?php 
namespace translation_order;
//의존성 :: product, user
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends \Admin_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    

    public function get($id)
    {
        $data['row'] = $row = $this->{$this->modelName}->get($id);
        $this->load->model('file/file_m');
        $data["files"]  = $this->file_m->list_ByGroupId($row->file_group_id);
		$data["content_view"] = "{$this->className}/get";
		$this->data += $data;
        $this->template->render($this->data);
    }
    public function setting()
    {
        $this->load->model('setting_m');
        //get
        if ($this->input->method() !== "post") 
        {
            $data['mode'] = "setting";
            $data['row'] = $this->setting_m->p_get(1);
            $data["content_view"] = "admin/setting";
            $this->template->render($data);
            return;
        }
        //post
            $this->ajax_helper->headerJson();
            $uploadResult=$this->upload->multiUpload("file","admin");
            if($uploadResult["result"] === "success")
            {

                $this->db->set("security_file_directory",$uploadResult["files"][0]["uri"]);
                $this->db->set("security_file_name",$uploadResult["files"][0]["original_name"]);
                $this->setting_m->p_update("1");
                $this->session->set_flashdata('message',["message"=>"수정 되었습니다.","type"=>"success"]);
            }
            else if($uploadResult["result"] === "fail")
            {
                $error=str_replace("\n","",$uploadResult["errors"]);
                $this->session->set_flashdata('message',["message"=>$error,"type"=>"danger"]);
            }
            else
            {
                $this->session->set_flashdata('message',["message"=>"파일을 선택해주세요.","type"=>"danger"]);
            }
            $data['reload'] =true;
        // }
        $this->ajax_helper->json($data);
    }

}

/* End of file Admin.php */

?>