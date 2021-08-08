<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel']);
        if ($this->session->userdata('logged_in') == 1) {
            return redirect(base_url('home'));
        }
    }

	public function index()
	{
        $this->load->view('admin/auth/login');
	}

    public function login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $check_auth = $this->UserModel->check_auth($username, $password)->row();
        if ($check_auth) {
            $auth = array(
                    'id'        => $check_auth->id,
                    'username'     => $check_auth->email,
                    'logged_in' => 1,
            );
            
            $this->session->set_userdata($auth);
            return redirect(base_url('admin/home'));
        }else{
            $this->session->set_flashdata('warning', "Email or Password is wrong!");
            return redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }  
}