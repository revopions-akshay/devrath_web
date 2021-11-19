<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index($seourl)
	{

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




		// $data['styles'] = array(
		// 	'<link href="' . base_url() . 'assets/frontend/css/3/bootstrap.min.css" rel="stylesheet">',
		// 	'<link href="' . base_url() . 'assets/frontend/css/bootstrap.min.css" rel="stylesheet">',
		// 	'<link href="' . base_url() . 'assets/frontend/css/style.css" rel="stylesheet">',
		// );

		// $data['scripts'] = array(
		// 	'<script src="' . base_url() . 'assets/frontend/js/jquery-min.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/popper.min.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/jquery.mainmenu.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/plugins.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/wow.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/magnific-popup.min.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/custom.js"></script>',
		// );

		// Check Page created or not
		$chkBlogData = $this->home_model->checkSeoURLPages($seourl);


		// Main Navbar
		$data['navigations'] = $this->home_model->getNavigation();


		// 404
		if (!$chkBlogData) {
			$data['metatags'] = array();
			$setting = $this->home_model->getWebsiteSettings();
			$data['logo'] = $setting['logo'];
			$data['alt'] = $setting['name'];
			$data['footer_logo'] = $setting['footer_logo'];
			$data['footer_about'] = $setting['footer_about'];
			$data['title'] = "404 Page Not Found!";
			$data['settings'] = $setting;
			// Partners
			$data['partners'] = $this->home_model->getPartner();

			// Social Links
			$data['sociallinks'] = $this->home_model->getSocialLinks();

			$this->load->view('includes/header', $data);
			$this->load->view('includes/navigation', $data);
			$this->load->view('404', $data);
			$this->load->view('includes/footer', $data);
		} else {
			// Blog Page
			$BlogData = $this->home_model->getSeoURLPages($seourl);

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
			$data['blog'] = $BlogData;
			// print_r($BlogData);
			// exit;

			$data['metatags'] = $BlogData[0]->metatags;

			// Partners
			$data['partners'] = $this->home_model->getPartner();

			// Social Links
			$data['sociallinks'] = $this->home_model->getSocialLinks();

			$this->load->view('includes/header', $data);
			$this->load->view('includes/navigation', $data);
			$this->load->view('blog_view', $data);
			$this->load->view('includes/footer', $data);
		}
	}

	public function all()
	{


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


	
		// $data['styles'] = array(
		// 	'<link href="' . base_url() . 'assets/frontend/css/3/bootstrap.min.css" rel="stylesheet">',
		// 	'<link href="' . base_url() . 'assets/frontend/css/bootstrap.min.css" rel="stylesheet">',
		// 	'<link href="' . base_url() . 'assets/frontend/css/style.css" rel="stylesheet">',
		// );

		// $data['scripts'] = array(
		// 	'<script src="' . base_url() . 'assets/frontend/js/jquery-min.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/popper.min.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/jquery.mainmenu.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/plugins.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/wow.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/magnific-popup.min.js"></script>',
		// 	'<script src="' . base_url() . 'assets/frontend/js/custom.js"></script>',
		// );

		// Main Navbar
		$data['navigations'] = $this->home_model->getNavigation();

		// // Get Website Settings
		// $setting = $this->home_model->getWebsiteSettings();
		// $data['title'] = "Home | " . $setting['name'];
		// $data['logo'] = $setting['logo'];
		// $data['footer_logo'] = $setting['footer_logo'];
		// $data['footer_about'] = $setting['footer_about'];
		// $data['alt'] = $setting['name'];
		// $data['settings'] = $setting;

		// Blogs
		$data['blog4home'] = $this->home_model->getBlogsOnly(3);

		// Partners
		$data['partners'] = $this->home_model->getPartner();

		// Social Links
		$data['sociallinks'] = $this->home_model->getSocialLinks();

		$this->load->view('includes/header', $data);
		$this->load->view('includes/navigation', $data);
		$this->load->view('blogs_all_view', $data);
		$this->load->view('includes/footer', $data);
	}
}
