<?php 
namespace main;
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends \Base_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		
		$data["content_view"] = "base/index";
		$this->template->render($data);
	}

}

/* End of file Admin.php */

?>