<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('profile', $data);
       
    }

    public function contact()
    {
        $data['title'] = "Message";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['message'] = $this->db->get('message')->result_array();

        $this->load->view('profile', $data);
       
    }

    public function delete($id)
    {
        $where = ['id' => $id];
        $this->Message_model->delete($where, 'message');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Message Has Been Delete</div>');
            redirect('administrator/contact');
    }

     public function role()
    {
        $data['title'] = "Access";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['role']  = $this->db->get('access')->result_array();

       
        $this->load->view('role', $data);
        
    }

     public function roleAccess($role_id)
    {
        $data['title'] = "Role Access";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['role']  = $this->db->get_where('access', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        
        $this->load->view('role-access', $data);
        
    }

    public function roleUpdate($id){
        $where = ['id' => $id];
        $data['title'] = "Update Role";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['role']  = $this->Admin_model->edit_data($where, 'access')->result();

       
        $this->load->view('role_update', $data);
       
    }

    public function updateAccess(){
        $id    = $this->input->post('id');
        $role  = $this->input->post('access');
        $where = ['id' => $id];

        $this->Admin_model->updateRole($where, $data, 'access');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Has been Updated</div>');
        redirect('administrator/role');
    }

    public function deleteRole($id){
        $where = ['id' => $id];
        $this->Admin_model->deleteRole($where, 'access');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Role Has been Deleted</div>');
        redirect('administrator/role');
    }

    public function addRole(){
        $data['title'] = "Add New Role";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // rules
        $this->form_validation->set_rules('access', 'Access', 'required');

        // kondisi
        if ($this->form_validation->run() == false)
        {
            $this->load->view('templates/header_stisla', $data);
            $this->load->view('templates/sidebar_stisla', $data);
            $this->load->view('templates/navbar_stisla', $data);
            $this->load->view('akademik/jurusan', $data);
            $this->load->view('templates/footer_stisla');
        } else {
            // insert ke database
                $this->Admin_model->addRole();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role Has Been Added</div>');
                redirect('administrator/role');
        }
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1){
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed</div>');
    }

   

}