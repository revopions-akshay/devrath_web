<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getWebsiteSettings()
    {

        $query = $this->db->get('settings', 1);
        if ($query->num_rows() > 0) {
            $result = $query->result();

            $setting = array(
                'name' => $result[0]->name,
                'phone' => $result[0]->contact,
                'email' => $result[0]->email,
                'footer_about' => $result[0]->footer_about,
                'logo' => 'assets/devrath/images/setting/' . $result[0]->file_path,
                'footer_logo' => 'assets/devrath/images/setting/' . $result[0]->footer_logo,
                'address' => $result[0]->address,
                'footer_background' => 'assets/devrath/images/setting/' . $result[0]->footer_background,
                'footer_map' => $result[0]->footer_map,
                'footer_copyright' => $result[0]->footer_copyright,
            );
            return $setting;
        }
        return false;
    }


    // Get Counters --------------------
    public function getCounters()
    {
        $query = $this->db->order_by('sort', 'ASC')->get('counters');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        }
        return false;
    }

    // Get Counters Background --------------------
    public function getCountersBackground()
    {
        $query = $this->db->order_by('id', 'ASC')->get('counters_background');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        }
        return false;
    }
    

    public function getWebsiteSliders()
    {
        $query = $this->db->order_by('sort', 'ASC')->get('sliders');
        if ($query->num_rows() > 0) {
            $result = $query->result();
            return $result;
        }
        return false;
    }


    public function getNavigation()
    {
        $query = $this->db->order_by('sort', 'ASC')->get('navigation');
        if ($query->num_rows() > 0) {
            $results = $query->result();
            $mainmenu = array();
            foreach ($results as $result) {
                $menu = array(
                    'menu' => $result->catname,
                    'link' => $result->link,
                    'flag' => $result->flag,
                    'level1' => $this->getCategoryProduct($result->id)
                );
                array_push($mainmenu, $menu);
            }
            return $mainmenu;
        }
        return false;
    }

    public function getCategoryProduct($navid)
    {
        $query = $this->db->order_by('sort', 'ASC')->where('navid', $navid)->get('categories');
        if ($query->num_rows() > 0) {
            $results = $query->result();
            $mainmenu = array();
            foreach ($results as $result) {
                $menu = array(
                    'submenu' => $result->catname,
                    'link' => $result->link,
                    'flag' => $result->flag,
                    'level2' => $this->getSubCategoryProduct($result->id)
                );
                array_push($mainmenu, $menu);
            }
            return $mainmenu;
        }
        return false;
    }

    public function getSubCategoryProduct($pid)
    {
        $query = $this->db->order_by('sort', 'ASC')->where('pid', $pid)->get('subcategories');
        if ($query->num_rows() > 0) {
            $results = $query->result();
            $submenu = array();
            foreach ($results as $result) {
                $sub = array(
                    'catname' => $result->catname,
                    'link' => $result->link,
                );
                array_push($submenu, $sub);
            }
            return $submenu;
        }
        return false;
    }

    // Blogs & Pages ===========================
    public function getSeoURLPages($seourl)
    {
        $this->db->select('blogs.*,categories.catname,categories.link');
        $this->db->join('categories', 'categories.id=blogs.pid', 'left');
        $this->db->where('seourl', $seourl);
        $this->db->where('status', 'active');

        $query = $this->db->get('blogs');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }


    public function checkSeoURLPages($seourl)
    {
        $query = $this->db->where('seourl', $seourl)->where('status', 'active')->get('blogs');
        if ($query->num_rows() > 0) {
            $results = $query->result();
            return true;
        }
        return false;
    }



    // Gallery 
    public function getGallery()
    {
        $query = $this->db->order_by('sort', 'ASC')->get('gallery');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }

    // Gallery  categories

    public function getGalleryCategory()
    {
        $query = $this->db->order_by('sort', 'ASC')->get('gallery_category');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }
       
       

    // Partner 
    public function getPartner()
    {
        $query = $this->db->order_by('sort', 'ASC')->get('partners');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }

    // Blogs & Pages ===========================
    public function getBlogsOnly($no)
    {
        $query = $this->db->where('type', 'blog')->where('status', 'active')->order_by('id', 'DESC')->get('blogs', 3);

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }

    // Social Media ===========================
    public function getSocialLinks()
    {
        $query = $this->db->order_by('id', 'ASC')->get('socialmedia');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }



    
    // Facilities ===========================
    public function getfacilities()
    {
        $query = $this->db->order_by('id', 'ASC')->get('facilities');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }




    // Client Says
    // Testimonials ===========================
    public function getTestimonials($no)
    {
        $query = $this->db->order_by('id', 'DESC')->get('testimonials', $no);

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }

    // Testimonials  background===========================
    public function getTestiBackground()
    {
        $query = $this->db->order_by('id', 'DESC')->get('parallex_image');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }



    
   
    // Team ===========================
    public function getTeams()
    {
        $query = $this->db->order_by('sort', 'DESC')->get('team');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }







 // Rooms ===========================
    public function getSeoURLRooms($seourl)
    {
        $this->db->select('rooms.*,categories.catname,categories.link');
        $this->db->join('categories', 'categories.id=rooms.pid', 'left');
        $this->db->where('seourl', $seourl);
        $this->db->where('status', 'active');

        $query = $this->db->get('rooms');
        // var_dump($query); exit;

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }


    public function checkSeoURLRooms($seourl)
    {
        $query = $this->db->where('seourl', $seourl)->where('status', 'active')->get('rooms');
        if ($query->num_rows() > 0) {
            $results = $query->result();
            return true;
        }
        return false;
    }

    public function getRoomsOnly($no)
    {
        $query = $this->db->where('status', 'active')->order_by('id', 'DESC')->get('rooms', 3);

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }



    // About Us ===========================
    public function getAboutContent()
    {
        $query = $this->db->order_by('id', 'DESC')->get('about');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }



    
    // Footer 
    // Footer ===========================
    public function getFooterMenu($no)
    {
        $query = $this->db->order_by('sort', 'ASC')->get('footer_menu_one', $no);

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }

    // Footer  background===========================
    public function getFooterBackground()
    {
        $query = $this->db->order_by('id', 'DESC')->get('footer_background');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }


    // Footer  map===========================
    public function getFooterMap()
    {
        $query = $this->db->order_by('id', 'DESC')->get('footer_map');

        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        }
        return false;
    }


       // Coontact About Section===========================
       public function getContactAbout()
       {
           $query = $this->db->order_by('id', 'DESC')->get('contactabout');
   
           if ($query->num_rows() > 0) {
               $results = $query->result();
               return $results;
           }
           return false;
       }
    










}
