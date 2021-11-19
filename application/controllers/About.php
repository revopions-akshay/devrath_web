<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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
				'<link href="http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel="stylesheet"
					type="text/css">',
				'<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">',
			
				
				'<link href="' . base_url() . 'assets/devrath/css/lib/font-lotusicon.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/font-awesome.min.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/bootstrap.min.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/owl.carousel.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/jquery-ui.min.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/magnific-popup.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/settings.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/lib/bootstrap-select.min.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/helper.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/custom.css"   rel="stylesheet" type="text/css"  >',
				'<link href="' . base_url() . 'assets/devrath/css/responsive.css"   rel="stylesheet" type="text/css"  >',

				'<link href="' .base_url() . 'assets/devrath/css/style.css" rel="stylesheet" type="text/css" >',
		);



		$data['scripts'] = array(
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery-1.11.0.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery-ui.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/bootstrap.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/bootstrap-select.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.themepunch.revolution.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.themepunch.tools.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/owl.carousel.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.appear.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.countTo.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.countdown.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.parallax-1.1.3.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.magnific-popup.min.js" type="text/javascript" ></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/SmoothScroll.js" type="text/javascript" ></script>',
		
			// '<script  src="' . base_url() . 'assets/devrath/orm.min.js" type="text/javascript"></script>',
			'<script  src="' . base_url() . 'assets/devrath/js/lib/jquery.validate.min.js" type="text/javascript" ></script>',
		
			'<script  src="' . base_url() . 'assets/devrath/js/scripts.js" type="text/javascript" ></script>',
		);



		// Get Website Settings
		$setting = $this->home_model->getWebsiteSettings();
		$data['title'] = "Home | " . $setting['name'];
		$data['logo'] = $setting['logo'];
		$data['footer_logo'] = $setting['footer_logo'];
		$data['footer_background'] = $setting['footer_background'];
		$data['footer_about'] = $setting['footer_about'];
		$data['footer_map'] = $setting['footer_map'];
		$data['footer_copyright'] = $setting['footer_copyright'];

		$data['alt'] = $setting['name'];
		$data['settings'] = $setting;

		// Sliders
		$data['sliders'] = $this->home_model->getWebsiteSliders();

		// Main Navbar
		$data['navigations'] = $this->home_model->getNavigation();

		// Our Services
		$data['services'] = $this->home_model->getCategoryProduct(3);

		// Our Counter
		$data['counters'] = $this->home_model->getCounters();

		// Our Counter Background
		$data['countersbackground'] = $this->home_model->getCountersBackground();


		// About
		$data['about'] = $this->home_model->getAboutContent();

		

		// Gallery
		$data['galleries'] = $this->home_model->getGallery();

		// Facilities
		$data['facilities'] = $this->home_model->getfacilities();

		// Gallery Category
		$data['galleriescat'] = $this->home_model->getGalleryCategory();

		// Partners
		$data['partners'] = $this->home_model->getPartner();

		// Blogs
		$data['blog4home'] = $this->home_model->getBlogsOnly(3);

		
		// Rooms
		$data['room4home'] = $this->home_model->getRoomsOnly(6);

		// Testiminials
		$data['testimonials'] = $this->home_model->getTestimonials(6);

		// Testiminials
		$data['testiBackground'] = $this->home_model->getTestiBackground();

		// Footer Menu
		$data['quick_links'] = $this->home_model->getFooterMenu(6);

		// Social Links
		$data['sociallinks'] = $this->home_model->getSocialLinks();

		$this->load->view('includes/header', $data);
		$this->load->view('includes/navigation', $data);
	
		$this->load->view('about_view', $data);
		$this->load->view('includes/footer', $data);
	}
}
