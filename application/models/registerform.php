<?php
    class registerform extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        function getKabupaten(){
            $query = $this->db->get('kabupaten');
            return $query->result();
        }
    }
?>