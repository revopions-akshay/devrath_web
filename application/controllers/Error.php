<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index()
	{

		$data['metatags'] = array();

		$data['styles'] = array(
			'<link href="' . base_url() . 'assets/frontend/css/3/bootstrap.min.css" rel="stylesheet">',
			'<link href="' . base_url() . 'assets/frontend/css/bootstrap.min.css" rel="stylesheet">',
			'<link href="' . base_url() . 'assets/frontend/css/style.css" rel="stylesheet">',
		);

		$data['scripts'] = array(
			'<script src="' . base_url() . 'assets/frontend/js/jquery-min.js"></script>',
			'<script src="' . base_url() . 'assets/frontend/js/popper.min.js"></script>',
			'<script src="' . base_url() . 'assets/frontend/js/jquery.mainmenu.js"></script>',
			'<script src="' . base_url() . 'assets/frontend/js/plugins.js"></script>',
			'<script src="' . base_url() . 'assets/frontend/js/wow.js"></script>',
			'<script src="' . base_url() . 'assets/frontend/js/magnific-popup.min.js"></script>',
			'<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>',
			'<script src="' . base_url() . 'assets/frontend/js/custom.js"></script>',
		);

	
		// Get Website Settings
		$setting = $this->home_model->getWebsiteSettings();
		$data['title'] = "Home | " . $setting['name'];
		$data['logo'] = $setting['logo'];
		$data['site_icon'] = $setting['site_icon'];
		$data['mobile_logo'] = $setting['mobile_logo'];
		$data['footer_logo'] = $setting['footer_logo'];
		$data['footer_background'] = $setting['footer_background'];
		$data['footer_about'] = $setting['footer_about'];
		$data['footer_map'] = $setting['footer_map'];
		$data['footer_copyright'] = $setting['footer_copyright'];

		$data['alt'] = $setting['name'];
		$data['settings'] = $setting;

		

		// Main Navbar
		$data['navigations'] = $this->home_model->getNavigation();



		$this->load->view('includes/header', $data);
		$this->load->view('includes/navigation', $data);
		$this->load->view('404', $data);
		$this->load->view('includes/footer', $data);
	}
}
