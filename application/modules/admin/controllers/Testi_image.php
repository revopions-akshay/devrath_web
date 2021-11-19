<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Testi_image extends Admin_Base_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->setTemplateFile('grocery_view');
        $this->load->model('settings_model');
        $this->load->helper('simple_helper');

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
            $crud = $this->getGroceryCRUD('parallex_image', 'Background Image', 'Manage Background', 'Manage Background');

            // data Grid view fields
            $crud->columns('name', 'file');

            // Insert form
            // $crud->add_fields('name', 'file');

            // Update form
            $crud->edit_fields('name', 'file');

            //File upload

            $crud->set_field_upload('file', 'assets/devrath/images/home-3');

            // Required fields
            $crud->required_fields('file');

            // Rename field level
            $crud->display_as('name', 'Name');
            $crud->display_as('file', 'image(1920w x 680h)');

            $crud->callback_read_field('file', array($this, '_callback_view_photo'));
            $crud->callback_column('name', array($this, '_callback_link'));

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
        $image_url = base_url('assets/devrath/images/home-3/' . $value);
        return "<a href=$image_url class='fancybox'><img class='img-responsive img-thumbnail' src=$image_url  width='200px'/></a>";
    }

    // view user image in column
    public function _callback_link($value, $row)
    {
        $seoURL = makeSeo($value);
        return $seoURL;
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
