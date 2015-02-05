<?php if (!defined('BASEPATH')) die();

class Sample extends Main_Controller {

   function __construct()
   {
      parent::__construct();
   }

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}

	public function page_campaign()
	{
		$this->load->view('pages/access/camp');
	}

   public function page_admin()
   {
      $this->load->view('pages/access/admin');
   }
    
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */

