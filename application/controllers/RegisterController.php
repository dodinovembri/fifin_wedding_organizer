<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller { 

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
        // 
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