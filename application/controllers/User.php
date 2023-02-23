<?php  

    class User extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('User_model');
        }

        public function index(){
            $data['users'] = $this->User_model->list();
            $this->load->view('list',$data);
        }
        
        public function create(){

            // add validation rules
            $this->form_validation->set_rules('username', 'Username','required');
            $this->form_validation->set_rules('email', 'Email','required|valid_email');

            if($this->form_validation->run() == false){
                $this->load->view('create');
            }else{
                $formArray = array(
                    'user_name' => $this->input->post('username'),
                    'user_email' => $this->input->post('email'),
                    'created_at' => date('Y-m-d')
                );
                $this->User_model->create($formArray);
                $this->session->set_flashdata('success', 'Record successfully created');
                redirect(base_url().'index.php/user/index');
            }


        }

        public function edit($id) {
            $data['user'] = $this->User_model->getUser($id);
            $this->load->view('edit',$data);
        }

        public function update(){
            // add validation rules
            $this->form_validation->set_rules('username', 'Username','required');
            $this->form_validation->set_rules('email', 'Email','required|valid_email');

            if($this->form_validation->run() == false){
                $this->load->view('edit');
            }else{
                $userId = $this->input->post('user_id');
                $userName = $this->input->post('username');
                $userEmail = $this->input->post('email');
                $data = $this->User_model->updateUser($userId,$userName,$userEmail);
                $this->session->set_flashdata('success', 'Record successfully Updated');
                redirect(base_url().'index.php/user/index');
            }
        }

        public function delete($id){
            $this->User_model->deleteUser($id);
            $this->session->set_flashdata('error', 'Record successfully Deleted');
            redirect(base_url('index.php/user/index'));
        }
    }



?>