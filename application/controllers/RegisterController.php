<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'BannerModel', 'ContactModel', 'FeatureModel',  'WeddingPackageModel']);
    }

    public function index()
    {
        $data['banner'] = $this->BannerModel->get(1)->row();
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['features'] = $this->FeatureModel->get(1)->result();
        $data['wedding_packages'] = $this->WeddingPackageModel->get(1)->result();

        $this->load->view('templates/header');
        $this->load->view('register/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        // 
    }

    public function store()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $role_id = 1;

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Password yang dimasukkan tidak sama");
            return redirect(base_url('register'));
        } else {
            $password = md5($password);
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role_id' => $role_id
            );

            $this->UserModel->insert($data);
            $this->session->set_flashdata('success', "User berhasil ditambahkan!");
            return redirect(base_url('customer'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // 
    }

    public function update($id)
    {
        // 
    }

    public function destroy($id)
    {
        // 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'User Logout successfully');

        return redirect(base_url('login'));
    }
}
