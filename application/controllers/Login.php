<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
    }
	public function dashboard(){
        $data = array();
        if($this->session->userdata('email')){
            $this->load->view('dashboard', $data);
        }else{
             redirect('login');
        }
    }
    
	public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
				$email = $this->input->post('email'); 
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->Login_model->getRows($con);
                if($checkLogin){
					$session_data = array(  
                          'email'     =>     $email  
                     );  
					$this->session->set_userdata($session_data); 
                    redirect('dashboard');
                }else{
                    $data['error_msg'] = 'Wrong Email or Password, Please try again.';
                }
            }
        }
        $this->load->view('login', $data);
    }
	 public function logout(){
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        redirect('login');
    }
    
}
