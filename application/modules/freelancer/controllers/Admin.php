<?php 
namespace freelancer;
//의존성 :: product, user
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends \Admin_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function list()
    {
        $data["languages"]=explode("," ,$this->setting->translation_languages);
        $this->data += $data;
        parent::list();
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