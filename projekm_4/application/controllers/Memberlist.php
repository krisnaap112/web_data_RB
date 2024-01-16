<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberlist extends CI_Controller {


 

 public function listmember()
    {
        $data['title']  = "List Member";
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->Member_model->tampilData('user')->result();

        $this->load->view('daftarlistmember', $data);
 
    }

}
