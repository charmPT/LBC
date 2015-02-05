<?php if (!defined('BASEPATH')) die();

class Campaign extends Main_Controller {

   function __construct()
   {
      parent::__construct();
   }

   public function index()
	{
      $this->load->view('pages/access/camp');
	}

}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */

