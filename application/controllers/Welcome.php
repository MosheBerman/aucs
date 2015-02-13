<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct() {
		parent::__construct();

		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('global/header');

		if ($this->session->has_userdata('user')) {
			/**
			 * TODO: Check permissions and show organizer options if appropriate.
			 */
			$this->load->view('menu/user_menu');
		}
		else
		{
			$this->load->view('menu/default_menu');
		}


		$this->load->view('welcome_message');
		$this->load->view('global/footer');
	}

	public function tickets(){
		$this->load->view('global/header');

		if ($this->session->has_userdata('user')) {
			/**
			 * TODO: Check permissions and show organizer options if appropriate.
			 */
			$this->load->view('menu/user_menu');
		}
		else
		{
			$this->load->view('menu/default_menu');
		}

		$this->load->view('global/footer');
	}


}

