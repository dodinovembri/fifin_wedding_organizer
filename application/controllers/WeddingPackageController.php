<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WeddingPackageController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'ContactModel', 'FeatureModel', 'WeddingPackageModel', 'WeddingPackageDetailModel']);
    }

	public function index()
	{
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['features'] = $this->FeatureModel->get(1)->result();
        $data['wedding_packages'] = $this->WeddingPackageModel->get(1)->result();

        $this->load->view('templates/header');
        $this->load->view('wedding_package/index', $data);
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
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['features'] = $this->FeatureModel->get(1)->result();
        $data['wedding_packages'] = $this->WeddingPackageDetailModel->PackageDetail($id)->result();
        $data['wedding_package'] = $this->WeddingPackageModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('wedding_package/show', $data);
        $this->load->view('templates/footer');
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
}