<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Banquet extends Admin_Base_Controller
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
            $crud = $this->getGroceryCRUD('about', 'About', 'Manage About', 'Manage About');

            // data Grid view fields
            $crud->columns('title_one', 'content_one', 'file_path', 'title_two', 'content_two', 'file_path_two');

            // Insert form
            // $crud->add_fields('title_one', 'content_one', 'file_path', 'title_two', 'content_two', 'file_path_two');

            // Update form
            $crud->edit_fields('title_one', 'content_one', 'file_path', 'title_two', 'content_two', 'file_path_two');

            //File upload
            $crud->set_field_upload('file_path', 'assets/devrath/images/banquet');
            $crud->set_field_upload('file_path_two', 'assets/devrath/images/banquet');

            // Required fields
            $crud->required_fields('title_one', 'title_two', 'content_one', 'content_two', 'file_path_two', 'file_path');
            // $crud->unset_texteditor(['metatags', 'full_text']);
         
            // Rename field level
            $crud->display_as('file_path', 'Banner One(w580 x h420)');
            $crud->display_as('file_path_two', 'Banner Two(w580 x h420)');
            // $crud->display_as('short', 'Short Description');

            $crud->callback_read_field('file_path', array($this, '_callback_view_photo'));
            $crud->callback_read_field('file_path_two', array($this, '_callback_view_photo'));
           


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
    public function _callback_view_photo($value, $row)
    {
        $image_url = base_url('assets/devrath/images/about' . $value);
        return "<a href=$image_url class='fancybox'><img class='img-responsive img-thumbnail' src=$image_url  width='200px'/></a>";
    }

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
