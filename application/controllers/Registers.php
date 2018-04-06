<?php
    class Registers extends CI_Controller{
        public function register(){
            if(isset($_POST['register'])){
                $this->form_validation->set_rules('nama','Nama','required');
                $this->form_validation->set_rules('no_telp','No_telp','required|min_length[13]');
                $this->form_validation->set_rules('email','email','required');
                $this->form_validation->set_rules('alamat','Alamat','required');
                $this->form_validation->set_rules('kabupaten','Kabupaten','required');
                $this->form_validation->set_rules('jenis_kelamin','Jenis_kelamin','required');
                $this->form_validation->set_rules('tgl_lahir','Tgl_lahir','required');
                $this->form_validation->set_rules('status_member','Status_member','required');
                $this->form_validation->set_rules('username','Username ','required');
                $this->form_validation->set_rules('password','Password','required');
                
                //if form validation true
                if($this->form_validation->run()==TRUE){
                    echo 'form validated';

                    //add user in database
                    $data=array(
                        'id'=>'NULL',
                        'nama'=> $_POST['nama'],
                        'no_telp'=> $_POST['no_telp'],
                        'email'=> $_POST['email'],
                        'alamat'=> $_POST['alamat'],
                        'id_kabupaten'=> $_POST['kabupaten'],
                        'jenis_kelamin'=> $_POST['jenis_kelamin'],
                        'create_at'=> date('Y-m-d'),
                        'tgl_lahir'=> $_POST['tgl_lahir'],
                        'status_member'=> $_POST['status_member'],
                        'username'=> $_POST['username'],
                        'password'=> $_POST['password']
                    );
                    $this->db->insert('member',$data);
                    redirect(base_url().'signupform');
                }
            }
        }
    }
?>