<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
    
   // method index
    public function index()
    {
        if($this->session->userdata('username')) {
            redirect('user');
        }
        // rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // condition
        if($this->form_validation->run() == false){
            $data['title'] = "User Login";
          $this->load->view('Navbar', $data);
          $this->load->view('login_view3', $data);
            
        } else {
            // validation success
            $this->logina();
        }
    }

    // method login
    public function logina()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $user       = $this->db->get_where('user', ['username' => $username])->row_array();

        if($user){
            // if the user active
            if($user['is_active'] == 1 ) {
                // cek the password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if( $user['role_id'] == 2 ) {
                        redirect('user');
                    }
                     else {
                        redirect('administrator');
                    }
                     
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Username Has Been Blocked</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Is Not Registered!</div>');
            redirect('login');
        }
    }


    //method view page list mahasiswa
    public function spview()
    {
        $data['title']  = "data pt";
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasap'] = $this->Dosen_data_a_model->tampilDataSasaranP1('sasaran_program_1')->result();
        $data['sasap2'] = $this->Dosen_data_a_model->tampilDataSasaranP2('sasaran_program_2')->result();
        $data['sasap3'] = $this->Dosen_data_a_model->tampilDataSasaranP3('sasaran_program_3')->result();
        $data['sasap4'] = $this->Dosen_data_a_model->tampilDataSasaranP4('sasaran_program_4')->result();
        $data['sasap5'] = $this->Dosen_data_a_model->tampilDataSasaranP5('sasaran_program_5')->result();
        $data['sasap6'] = $this->Dosen_data_a_model->tampilDataSasaranP6('sasaran_program_6')->result();
        $data['sasap7'] = $this->Dosen_data_a_model->tampilDataSasaranP7('sasaran_program_7')->result();
        $data['sasap8'] = $this->Dosen_data_a_model->tampilDataSasaranP8('sasaran_program_8')->result();
        $data['sasap9'] = $this->Dosen_data_a_model->tampilDataSasaranP9('sasaran_program_9')->result();
        $data['sasap10'] = $this->Dosen_data_a_model->tampilDataSasaranP10('sasaran_program_10')->result();
        $data['sasap11'] = $this->Dosen_data_a_model->tampilDataSasaranP11('sasaran_program_11')->result();
        $data['sasap12'] = $this->Dosen_data_a_model->tampilDataSasaranP12('sasaran_program_12')->result();
        $data['sasap13'] = $this->Dosen_data_a_model->tampilDataSasaranP13('sasaran_program_13')->result();
        $data['sasap14'] = $this->Dosen_data_a_model->tampilDataSasaranP14('sasaran_program_14')->result();
        $data['sasa1']  = $this->db->get_where('sasaran_program_1', ['username' => $this->session->userdata('username')])->row_array();
        
        
        $this->load->view('Navbar', $data);
        $this->load->view('sasaranprogram/sp_view', $data);
    }
 
    
    public function mapsview($id_maps)
    {
        $data['title'] = "";
        $where=['id_maps'=>$id_maps];
        $data['testz'] = $this->Dosen_data_a_model->tampilSrcMaps($where, 'tb_maps')->result();
        $this->load->view('Navbar', $data);
        $this->load->view('maps_src');
    }

  
    public function mapslist()
    {
        $data['title'] = "";
        $data['testz'] = $this->Dosen_data_a_model->tampilListMaps('tb_maps')->result_array();
        $this->load->view('Navbar', $data);
        $this->load->view('mapslist');
    }

    

    public function submenu_vihara()
	{
		$data['title']   = "List Vihara";
        $data['user']    = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(); 
        $data['testz'] = $this->Dosen_data_a_model->tampilListMaps('tb_maps')->result_array();
        $data['tb_maps'] = $this->db->get_where('tb_maps', ['id_maps' => $this->session->userdata('id_maps')])->row_array(); 
       

        $this->form_validation->set_rules('nama_vihara', 'Nama Vihara', 'required');
        $this->form_validation->set_rules('link_alamat', 'Link Alamat di GMaps', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Vihara', 'required');
        $this->form_validation->set_rules('nama_ketua', 'Nama Ketua Vihara', 'required');
        $this->form_validation->set_rules('foto_vihara', 'Foto Vihara', 'required');
       

        if($this->form_validation->run() == false){
        	
        // view   
	    $this->load->view('crud_vihara_view', $data);
       
	  
        } else {

            $data = [
                'nama_vihara'       => $this->input->post('nama_vihara'),
                'link_alamat'     => $this->input->post('link_alamat'),
                'alamat'         => $this->input->post('alamat'),
                'nama_ketua'        => $this->input->post('nama_ketua'),
                'foto_vihara'        => $this->input->post('foto_vihara')
            ];


        	$this->db->insert('tb_maps', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail Vihara Berhasil Di Tambahkan</div>');
            redirect('login/submenu_vihara');
        }
	}

    public function update_vihara1($id_maps)
    {
        $where           = ['id_maps' => $id_maps];
        $data['title']   = "Submenu Management";
        $data['user']    = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(); 
        $data['testz'] = $this->Dosen_data_a_model->edit_data($where, 'tb_maps')->result_array();

     
        $this->load->view('edit_vihara_view', $data);
       
    }

    public function update_vihara2()
    {
        $data['testz'] = $this->Dosen_data_a_model->edit_data($where, 'tb_maps')->result_array();

        $id_maps              = $this->input->post('id_maps');
        $nama_vihara           = $this->input->post('nama_vihara');
        $link_alamat         = $this->input->post('link_alamat');
        $alamat             = $this->input->post('alamat');
        $nama_ketua            = $this->input->post('nama_ketua');

        
         // cek jika ada gambar
         $uploadImage2 = $_FILES['foto_vihara']['name'];

         if($uploadImage2) {
             $config['allowed_types'] = 'gif|jpg|png|jpeg|docx';
             $config['max_size']      = '6144';
             $config['upload_path']   = './assets/images/foto_vihara/';
             $this->load->library('upload', $config);

             if($this->upload->do_upload('foto_vihara')){
                 $old_image2 = $data['testz']['foto_vihara'];
                 if($old_image != 'borobudur.jpg'){
                     unlink(FCPATH . 'assets/images/foto_vihara/' . $old_image2);
                 }

                 $new_image2 = $this->upload->data('file_name');
                 $this->db->set('foto_vihara', $new_image2);
             } else {
                 echo $this->upload->display_errors();
             }
         }

        
        $where = ['id_maps' => $id_maps];
            $this->Dosen_data_a_model->update_vihara_test($where, $data, $table);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sub Menu Berhasil Ubah</div>');
            redirect('login/submenu_vihara');
        }


    
    public function delete_vihara($id_maps)
    {
        $where = ['id_maps' => $id_maps];
        $this->Dosen_data_a_model->hapus_data_vihara($where, 'tb_maps');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Detail Vihara Berhasil Di Hapus</div>');
        redirect('login/submenu_vihara');
    }
    
    // method user registration
    public function register()
    {
       
       $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // form validation
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', ['is_unique' => 'This username is already registered']);

        $this->form_validation->set_rules('role_id', 'Role_id', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password1]', ['matches'   => 'Password Dont Matches!',
        'min_length'   => 'Password At Least Minimum 8 character']);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password]');
        
        // condition
        if( $this->form_validation->run() == false ) {
            $data['title'] = 'Registrasi akun';
            
            $this->load->view('registration', $data);
            
        } 

        else {
            $username   = $this->input->post('username', true);
            $role_id    = $this->input->post('role_id', true);

            if($role_id == "Member") {
                echo $role_id = 2;
            } else {
                echo $role_id = 1;
            }

            $data = [
                'name_user'    => htmlspecialchars($this->input->post('name', true)),
                'username'     => htmlspecialchars($username),
                'image'        => 'default.jpg',
                'password'     => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id'      => $role_id,
                'is_active'    => 1,
                'date_created' => time()
            ];

           // $data_init = [
             //   'skor_s1a'    => 0,
             //   'skor_s1b'    => 0,
             //   'username'    => htmlspecialchars($username)
           // ];


            // insert to database user
            $this->db->insert('user', $data);
            $this->db->insert('sasaran_program_1', $data_init);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your Accout Has Been Already Created!</div>');
             redirect('login/register');
            
        }
    }

    // method logout user
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('id_admin');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have Been Logged Out</div>');
        redirect('login');
    }

    
    // method redirect blocked user to block page
    public function blocked()
    {
       $this->load->view('auth/blocked');
    }

    
    //method change user password
    public function changePassword()
    {
        if(!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[password1]');
        $this->form_validation->set_rules('password1', 'Repeat Password', 'trim|required|min_length[8]|matches[password]');
        if($this->form_validation->run() == false){
            $data['title'] = "Change Password";
            $this->load->view('templates/header_stisla', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/footer_stisla');
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Has Been Reset</div>');
                redirect('auth');
        }
    }
    
}
