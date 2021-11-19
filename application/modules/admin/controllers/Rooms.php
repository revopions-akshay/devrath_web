<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Rooms extends Admin_Base_Controller
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
            $crud = $this->getGroceryCRUD('rooms', 'Rooms', 'Manage Rooms', 'Manage Rooms');

            // data Grid view fields
            $crud->columns('status', 'seourl', 'category', 'file_path', 'author');

            // Insert form
            $crud->add_fields('pid', 'seourl', 'title', 'short', 'category', 'status', 'author', 'content', 'file_path', 'room_home', 'max_person', 'bed', 'bedroom', 'view', 'room_size', 'metatags');

            // Update form
            $crud->edit_fields('pid', 'seourl', 'title', 'short', 'category', 'status', 'author', 'content', 'file_path', 'room_home', 'max_person', 'bed', 'bedroom', 'view', 'room_size', 'metatags');

            //File upload
            $crud->set_field_upload('file_path', 'assets/devrath/images/rooms');
            $crud->set_field_upload('room_home', 'assets/devrath/images/rooms');

            // Required fields
            $crud->required_fields('seourl', 'title', 'short', 'category', 'author', 'content', 'file_path');
            $crud->unset_texteditor(['metatags', 'full_text']);
            // Rename field level
            $crud->display_as('pid', 'Category');
            $crud->display_as('seourl', 'SeoURL');
            $crud->display_as('category', 'Room Category');
            $crud->display_as('file_path', 'Banner(w1903 x h531)');
            $crud->display_as('room_home', 'Room(home) Only(w600 x h400)');
            $crud->display_as('short', 'Short Description');

            $crud->callback_read_field('file_path', array($this, '_callback_view_photo'));
            $crud->callback_read_field('room_home', array($this, '_callback_view_photo'));
           
            $crud->set_relation('pid', 'categories', 'catname');
            // $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();
            // $crud->unset_delete();

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
        $image_url = base_url('assets/frontend/images/blogs/' . $value);
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
