<?php
    class Registration extends CI_Controller {
        public function __construct() { 
            parent::__construct();

            $this->load->database();
            $this->load->helper('url');
            $this->load->model('Reg_Model');
        }
        public function savedata(){
            $this->load->view('registration_form');

            if($this->input->post('save')){
                $User_name=$this->input->post('User_name');
                $User_email=$this->input->post('User_email');
                $User_mobile=$this->input->post('User_mobile');
                $this->Reg_Model->saverecords($User_name,$User_email,$User_mobile);
                echo "Records Saved Successfully.";
                
            }
        }
        public function displaydata(){
            $result['data']=$this->Reg_Model->display_users();
            $this->load->view('display_users' ,$result);
        }
        public function deletedata(){
            $User_id=$this->input->get('User_id');
            $this->Reg_Model->delete_users($User_id);
            redirect("Registration/displaydata");
        }
        public function updatedata(){
            $User_id=$this->input->get('User_id');
            $result['data']=$this->Reg_Model->displayusersbyid($User_id);
            $this->load->view('update_users',$result);

            if($this->input->post('update')){
                $User_id=$this->input->get('User_id');
                $User_name=$this->input->post('User_name');
                $User_email=$this->input->post('User_email');
                $User_mobile=$this->input->post('User_mobile');
                $this->Reg_Model->update_users($User_id,$User_name,$User_email,$User_mobile);
                echo "Records Saved Successfully";
                redirect("Registration/displaydata");
            }
        }
    }
?>