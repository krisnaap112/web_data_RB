<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    
    //method index user
    public function index()
    {
        $data['title']  = "My Profile";
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['mahasiswa'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        

        $this->load->view('profile', $data);
       
    }


   
    //method edit user profile
    public function edit()
    {
        $data['title'] = "Edit Profile";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name_user', 'Full Name', 'required|trim');

        if($this->form_validation->run() == false) {
           
            $this->load->view('edit', $data);
           
        } else {
            $name        = $this->input->post('name_user');
            $username    = $this->input->post('username');
           
            // cek jika ada gambar
            $uploadImage = $_FILES['image']['name'];

            if($uploadImage) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|docx';
                $config['max_size']      = '6144';
                $config['upload_path']   = './assets/images/profiles/';
                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $old_image = $data['user']['image'];
                    if($old_image != 'default.jpg'){
                        unlink(FCPATH . 'assets/images/profiles/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            // jalankan query / insert ke database
            $this->db->set('name_user', $name);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your Profile Has Been Updated</div>');
            redirect('user');
        }
    }


    //method change user password
    public function changePassword()
    {
        $data['title'] = "Change Password";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('currentPassword', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newPassword', 'New Password', 'required|trim|min_length[8]|matches[newPassword1];');
        $this->form_validation->set_rules('newPassword1', 'Confirm New Password', 'required|trim|min_length[8]|matches[newPassword];');

        if($this->form_validation->run() == false ){
            
            $this->load->view('changepassword', $data);
           
        } else {
            $current_password = $this->input->post('currentPassword');
            $new_password = $this->input->post('newPassword');
            if(!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
                    redirect('user/changepassword');
            } else {
                if($current_password == $new_password){
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password Can Not Be The Same As Current Password</div>');
                        redirect('user/changepassword');
                } else {
                    // password sudah benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Password Has Been Changed</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }


    //method edit user role and status
    public function editMember($id)
    {
        $where          = ['id' => $id];
        $data['title']  = "Updated Account Member";
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->Member_model->editData($where, 'user')->result();

        
        $this->load->view('update_member', $data);
        
    }



    //method view list member page
    public function updateAccountMember()
    {
        $id           = $this->input->post('id');
        $name         = $this->input->post('name_user');
        $username        = $this->input->post('username');
        $role_id      = $this->input->post('role_id');
        $status       = $this->input->post('is_active');
       
            
        // siapkan data
        $data = [
            'name_user' => $name,
            'username'  => $username,
            'role_id'   => $role_id,
            'is_active' => $status,
            
        ];

        $where = ['id' => $id];

        $this->Member_model->updateAccountMember($where, $data, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Account Member Berhasil Diubah</div>');
        redirect('memberlist/listmember');
    }


    //method remove user account
    public function deleteMember($id)
    {
        $where = ['id' => $id];
        $this->Member_model->deleteAccountMember($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account Member Berhasil Dihapus</div>');
        redirect('memberlist/listmember');
    }


public function tambahdatasp()
    {
       
        $data['title'] = "Sasaran Program";
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();      
        $data['sasa1a']  = $this->db->get_where('sasaran_program_1', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa2a']  = $this->db->get_where('sasaran_program_2', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa3a']  = $this->db->get_where('sasaran_program_3', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa4a']  = $this->db->get_where('sasaran_program_4', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa5a']  = $this->db->get_where('sasaran_program_5', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa6a']  = $this->db->get_where('sasaran_program_6', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa7a']  = $this->db->get_where('sasaran_program_7', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa8a']  = $this->db->get_where('sasaran_program_8', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa9a']  = $this->db->get_where('sasaran_program_9', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa10a']  = $this->db->get_where('sasaran_program_10', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa11a']  = $this->db->get_where('sasaran_program_11', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa12a']  = $this->db->get_where('sasaran_program_12', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa13a']  = $this->db->get_where('sasaran_program_13', ['username' => $this->session->userdata('username')])->row_array();
        $data['sasa14a']  = $this->db->get_where('sasaran_program_14', ['username' => $this->session->userdata('username')])->row_array();
        

        //$data['sasa1c']  = $this->db->get_where('sasaran_program_1', ['skor_s1a' => $this->session->userdata('skor_s1a')])->row_array();
        
        $data['sasaran_program'] = $this->Dosen_data_a_model->tampilDataSasaranP1('sasaran_program_1')->result();
        $data['sasaran_program2'] = $this->Dosen_data_a_model->tampilDataSasaranP2('sasaran_program_2')->result();
        $data['sasaran_program3'] = $this->Dosen_data_a_model->tampilDataSasaranP3('sasaran_program_3')->result();
        $data['sasaran_program4'] = $this->Dosen_data_a_model->tampilDataSasaranP4('sasaran_program_4')->result();
        $data['sasaran_program5'] = $this->Dosen_data_a_model->tampilDataSasaranP5('sasaran_program_5')->result();
        $data['sasaran_program6'] = $this->Dosen_data_a_model->tampilDataSasaranP6('sasaran_program_6')->result();
        $data['sasaran_program7'] = $this->Dosen_data_a_model->tampilDataSasaranP7('sasaran_program_7')->result();
        $data['sasaran_program8'] = $this->Dosen_data_a_model->tampilDataSasaranP8('sasaran_program_8')->result();
        $data['sasaran_program9'] = $this->Dosen_data_a_model->tampilDataSasaranP9('sasaran_program_9')->result();
        $data['sasaran_program10'] = $this->Dosen_data_a_model->tampilDataSasaranP10('sasaran_program_10')->result();
        $data['sasaran_program11'] = $this->Dosen_data_a_model->tampilDataSasaranP11('sasaran_program_11')->result();
        $data['sasaran_program12'] = $this->Dosen_data_a_model->tampilDataSasaranP12('sasaran_program_12')->result();
        $data['sasaran_program13'] = $this->Dosen_data_a_model->tampilDataSasaranP13('sasaran_program_13')->result();
        $data['sasaran_program14'] = $this->Dosen_data_a_model->tampilDataSasaranP14('sasaran_program_14')->result();


        $this->form_validation->set_rules('username', 'username', 'required');    
        if($this->form_validation->run()==true ) {
        

            $this->load->view('test/test1d', $data);

            
        }

        else{

            $this->load->view('test/test1d', $data);
        
        
    }
}



public function addskors1()
{
        $this->form_validation->set_rules('skor_s1a', 'skor_s1a', 'required');
        $data['sasaran_program'] = $this->Dosen_data_a_model->tampilDataSasaranP1('sasaran_program_1')->result();
        

        $id_skor_s1     = $this->input->post('id_skor_s1');
        $skor_s1a       = $this->input->post('skor_s1a');
        $skor_s1b       = $this->input->post('skor_s1b');
        $username       = $this->input->post('username');


        $where = ['id_skor_s1' => $id_skor_s1];
            $this->Dosen_data_a_model->update_skors1($where, $data, $table);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
            redirect('user/tambahdatasp');
        }


        
        
public function addskors2()
    {
        $this->form_validation->set_rules('skor_s2a', 'skor_s2a', 'required');
        $data['sasaran_program2'] = $this->Dosen_data_a_model->tampilDataSasaranP2('sasaran_program_2')->result();
                
        $id_skor_s2     = $this->input->post('id_skor_s2');
        $skor_s2a       = $this->input->post('skor_s2a');
        $username       = $this->input->post('username');
        
        $where = ['id_skor_s2' => $id_skor_s2];
            $this->Dosen_data_a_model->update_skors2($where, $data, $table);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
            redirect('user/tambahdatasp');
                }
        

public function addskors3()
    {
        $this->form_validation->set_rules('skor_s3a', 'skor_s3a', 'required');
        $data['sasaran_program3'] = $this->Dosen_data_a_model->tampilDataSasaranP3('sasaran_program_3')->result();
                        
                
                        $id_skor_s3     = $this->input->post('id_skor_s3');
                        $skor_s3a       = $this->input->post('skor_s3a');
                        $skor_s3b       = $this->input->post('skor_s3b');
                        $username       = $this->input->post('username');
                
                
                        $where = ['id_skor_s3' => $id_skor_s3];
                            $this->Dosen_data_a_model->update_skors3($where, $data, $table);
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
                            redirect('user/tambahdatasp');
                        }
                


public function addskors4(){
        $this->form_validation->set_rules('skor_s4a', 'skor_s4a', 'required');
        $data['sasaran_program4'] = $this->Dosen_data_a_model->tampilDataSasaranP4('sasaran_program_4')->result();
                                            
                                    
                    $id_skor_s4     = $this->input->post('id_skor_s4');
                    $skor_s4a       = $this->input->post('skor_s4a');
                    $username       = $this->input->post('username');
                                    
                                    
                    $where = ['id_skor_s4' => $id_skor_s4];
                            $this->Dosen_data_a_model->update_skors4($where, $data, $table);
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
                            redirect('user/tambahdatasp');
                                            }

                                        

public function addskors5(){
        $this->form_validation->set_rules('skor_s5a', 'skor_s5a', 'required');
        $data['sasaran_program5'] = $this->Dosen_data_a_model->tampilDataSasaranP5('sasaran_program_5')->result();
                                                                                    
                                                                            
        $id_skor_s5     = $this->input->post('id_skor_s5');
        $skor_s5a       = $this->input->post('skor_s5a');
        $username       = $this->input->post('username');
                                                                            
                                                                            
        $where = ['id_skor_s5' => $id_skor_s5];
        $this->Dosen_data_a_model->update_skors5($where, $data, $table);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
        redirect('user/tambahdatasp');
}

        
public function addskors6(){
            $this->form_validation->set_rules('skor_s6a', 'skor_s6a', 'required');
            $data['sasaran_program6'] = $this->Dosen_data_a_model->tampilDataSasaranP6('sasaran_program_6')->result();
                                                                                        
                                                                                
            $id_skor_s6     = $this->input->post('id_skor_s6');
            $skor_s6a       = $this->input->post('skor_s6a');
            $username       = $this->input->post('username');
                                                                                
                                                                                
            $where = ['id_skor_s6' => $id_skor_s6];
            $this->Dosen_data_a_model->update_skors6($where, $data, $table);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
            redirect('user/tambahdatasp');
}
    


public function addskors7(){
    $this->form_validation->set_rules('skor_s7a', 'skor_s7a', 'required');
    $data['sasaran_program7'] = $this->Dosen_data_a_model->tampilDataSasaranP7('sasaran_program_7')->result();
                                                                                
                                                                        
    $id_skor_s7     = $this->input->post('id_skor_s7');
    $skor_s7a       = $this->input->post('skor_s7a');
    $skor_s7b       = $this->input->post('skor_s7b');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s7' => $id_skor_s7];
    $this->Dosen_data_a_model->update_skors7($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}


public function addskors8(){
    $this->form_validation->set_rules('skor_s8a', 'skor_s8a', 'required');
    $data['sasaran_program8'] = $this->Dosen_data_a_model->tampilDataSasaranP8('sasaran_program_8')->result();
                                                                                
                                                                        
    $id_skor_s8     = $this->input->post('id_skor_s8');
    $skor_s8a       = $this->input->post('skor_s8a');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s8' => $id_skor_s8];
    $this->Dosen_data_a_model->update_skors8($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}


public function addskors9(){
    $this->form_validation->set_rules('skor_s9a', 'skor_s9a', 'required');
    $data['sasaran_program9'] = $this->Dosen_data_a_model->tampilDataSasaranP9('sasaran_program_9')->result();
                                                                                
                                                                        
    $id_skor_s9     = $this->input->post('id_skor_s9');
    $skor_s9a       = $this->input->post('skor_s9a');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s9' => $id_skor_s9];
    $this->Dosen_data_a_model->update_skors9($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}


public function addskors10(){
    $this->form_validation->set_rules('skor_s10a', 'skor_s10a', 'required');
    $data['sasaran_program10'] = $this->Dosen_data_a_model->tampilDataSasaranP10('sasaran_program_10')->result();
                                                                                
                                                                        
    $id_skor_s10     = $this->input->post('id_skor_s10');
    $skor_s10a       = $this->input->post('skor_s10a');
    $skor_s10b       = $this->input->post('skor_s10b');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s10' => $id_skor_s10];
    $this->Dosen_data_a_model->update_skors10($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}



public function addskors11(){
    $this->form_validation->set_rules('skor_s11a', 'skor_s11a', 'required');
    $data['sasaran_program11'] = $this->Dosen_data_a_model->tampilDataSasaranP11('sasaran_program_11')->result();
                                                                                
                                                                        
    $id_skor_s11     = $this->input->post('id_skor_s11');
    $skor_s11a       = $this->input->post('skor_s11a');
    $skor_s11b       = $this->input->post('skor_s11b');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s11' => $id_skor_s11];
    $this->Dosen_data_a_model->update_skors11($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}



public function addskors12(){
    $this->form_validation->set_rules('skor_s12a', 'skor_s12a', 'required');
    $data['sasaran_program12'] = $this->Dosen_data_a_model->tampilDataSasaranP12('sasaran_program_12')->result();
                                                                                
                                                                        
    $id_skor_s12     = $this->input->post('id_skor_s12');
    $skor_s12a       = $this->input->post('skor_s12a');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s12' => $id_skor_s12];
    $this->Dosen_data_a_model->update_skors12($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}


public function addskors13(){
    $this->form_validation->set_rules('skor_s13a', 'skor_s13a', 'required');
    $data['sasaran_program13'] = $this->Dosen_data_a_model->tampilDataSasaranP13('sasaran_program_13')->result();
                                                                                
                                                                        
    $id_skor_s13     = $this->input->post('id_skor_s13');
    $skor_s13a       = $this->input->post('skor_s13a');
    $skor_s13b       = $this->input->post('skor_s13b');
    $skor_s13c       = $this->input->post('skor_s13c');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s13' => $id_skor_s13];
    $this->Dosen_data_a_model->update_skors13($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}


public function addskors14(){
    $this->form_validation->set_rules('skor_s14a', 'skor_s14a', 'required');
    $data['sasaran_program14'] = $this->Dosen_data_a_model->tampilDataSasaranP14('sasaran_program_14')->result();
                                                                                
                                                                        
    $id_skor_s14     = $this->input->post('id_skor_s14');
    $skor_s14a       = $this->input->post('skor_s14a');
    $skor_s14b       = $this->input->post('skor_s14b');
    $skor_s14c       = $this->input->post('skor_s14c');
    $skor_s14d       = $this->input->post('skor_s14d');
    $skor_s14e       = $this->input->post('skor_s14e');
    $username       = $this->input->post('username');
                                                                        
                                                                        
    $where = ['id_skor_s14' => $id_skor_s14];
    $this->Dosen_data_a_model->update_skors14($where, $data, $table);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di Ubah</div>');
    redirect('user/tambahdatasp');
}



}