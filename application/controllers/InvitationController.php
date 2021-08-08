<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvitationController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'ContactModel', 'FeatureModel', 'WeddingInvitationModel', 'WeddingGuestBookModel', 'WeddingPhotosModel']);
    }

	public function index()
	{
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['features'] = $this->FeatureModel->get(1)->result();
        $data['wedding_invitations'] = $this->WeddingInvitationModel->get(1)->result();

        $this->load->view('templates/header');
        $this->load->view('invitation/index', $data);
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

    public function store_guest_book()
    {
        $code = $this->input->post('code');
        $data = array(
            'wedding_invitation_id'   => $this->input->post('wedding_invitation_id'),
            'name'   => $this->input->post('name'),
            'message'   => $this->input->post('message')
        );

        $this->WeddingGuestBookModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url("invitation/show/$code"));
    }    

    public function show($id)
    {
        $data['wedding_invitation'] = $this->WeddingInvitationModel->getByCode($id)->row();  
        $data['wedding_galleries'] = $this->WeddingPhotosModel->get(1)->result();
        $data['wedding_guest_books'] = $this->WeddingGuestBookModel->get(1)->result();
        
        $this->load->view('invitation/show', $data);
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