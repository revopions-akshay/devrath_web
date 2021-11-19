<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact_about extends Admin_Base_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->setTemplateFile('grocery_view');
        $this->load->model('settings_model');

        // check librarians groups or not
        $group = 'admin';
        if (!$this->ion_auth->in_group($group)) {
            $this->session->set_flashdata('message', 'You must be a admin to view this page.');
            redirect('admin/dashboard/access_denied');
        }
    }

    public function index()
    {
        try {

            // Grocery settings getGroceryCRUD( $TableName, $Subject, $PageTitle, $Breadcrumbs )
            $crud = $this->getGroceryCRUD('contactabout', 'Contact About', 'Manage Contact About', 'Manage Contact About');

            // data Grid view fields
            $crud->columns('title', 'content');

           // Insert form
            // $crud->add_fields('title', 'content');

            // Update form
            $crud->edit_fields('title', 'content');

           
            // Required fields
            $crud->required_fields('content');
            // $crud->unset_texteditor(['metatags', 'full_text']);
         
            // Rename field level
            // $crud->display_as('file_path', 'Banner One(w580 x h420)');
            // $crud->display_as('file_path_two', 'Banner Two(w580 x h420)');
            // $crud->display_as('short', 'Short Description');

            // $crud->callback_read_field('file_path', array($this, '_callback_view_photo'));
            // $crud->callback_read_field('file_path_two', array($this, '_callback_view_photo'));
           


            $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_delete();

            // render output result
            $output = $crud->render();
            $this->load->view('admin/settings/v_Settings', (array) $output);

            // error handle
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }


    // view user image in column
    // public function _callback_view_photo($value, $row)
    // {
    //     $image_url = base_url('assets/devrath/images/about' . $value);
    //     return "<a href=$image_url class='fancybox'><img class='img-responsive img-thumbnail' src=$image_url  width='200px'/></a>";
    // }

    // initial setup of grocery crud by table name, theme and others
    public function getGroceryCRUD($TableName, $Subject, $PageTitle, $Breadcrumbs)
    {
        $crud = new grocery_CRUD();
        $this->data['title'] = $PageTitle;
        $this->data['breadcrumbs'] = $Breadcrumbs;
        $crud->set_theme('bootstrap');
        $crud->set_table($TableName);
        $crud->set_subject($Subject);

        return $crud;
    }
}
