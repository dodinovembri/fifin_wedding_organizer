<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'WeddingPackageModel', 'WeddingInvitationModel', 'EventModel']);
        
        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }        
    }

	public function index()
	{
        $data['total_wedding_package'] = $this->WeddingPackageModel->count();
        $data['total_wedding_invitation'] = $this->WeddingInvitationModel->count();
        $data['total_event'] = $this->EventModel->count();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/home/index', $data);
        $this->load->view('admin/templates/footer');
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
}