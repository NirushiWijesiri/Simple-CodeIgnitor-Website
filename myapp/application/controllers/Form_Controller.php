<?php
    class Form_Controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form'));
            $this->load->library(array('form_validation'));
        }
        public function form(){
            $this->form_validation->set_rules('User_name','Name','required');
            $this->form_validation->set_rules('User_email','Email','required');

            if ($this->form_validation->run()==FALSE){
                $this->load->view('form');
            }
            else{
                $this->load->view('success');
            }
        }
    }
?>