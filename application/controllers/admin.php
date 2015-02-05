<?php if (!defined('BASEPATH')) die();

class Admin extends Main_Controller {

   function __construct()
   {
      parent::__construct();
   }

   public function index()
	{
      $this->load->view('pages/access/admin');
	}

}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */

