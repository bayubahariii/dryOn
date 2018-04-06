<?php
    class Pages extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->model('registerform', 'regis_model',TRUE);
        }
        public function view($page = 'dashbor'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            $data['kabupaten'] = $this->regis_model->getKabupaten();
            $this->load->view('pages/'.$page, $data);
        }
        
    }  
?>