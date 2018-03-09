<?php 
namespace contact;
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends \Base_Controller {

    public function __construct()
    {
        parent::__construct();
   
    }
    public function add()
    {
        $data["content_view"] = "base/addUpdate";
        $this->template->render($data);
    }

}

/* End of file Admin.php */

?>