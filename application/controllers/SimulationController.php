<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SimulationController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ClothesModel', 'ContactModel', 'DecorationModel']);
    }

	public function index()
	{
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['clothess'] = $this->ClothesModel->get()->result();
        $data['clothes'] = $this->ClothesModel->get(1)->row();    
        $data['decorations'] = $this->DecorationModel->get(1)->result();
        $data['decoration'] = $this->DecorationModel->get(1)->row();
        
        $this->load->view('templates/header');
        $this->load->view('simulation/index', $data);
        $this->load->view('templates/footer');
	}

	public function decoration($decoration_id)
	{
        $simulation_session = array(
            'decoration_id' => $decoration_id
        );
        $this->session->set_userdata($simulation_session);
        
        $clothes_id = $this->session->userdata('clothes_id');
        if (isset($clothes_id)) {
            $data['clothes'] = $this->ClothesModel->getById($this->session->userdata('clothes_id'))->row(); 
        }else{
            $data['clothes'] = $this->ClothesModel->get(1)->row();
        }
        
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['clothess'] = $this->ClothesModel->get()->result();
        $data['decorations'] = $this->DecorationModel->get(1)->result();
        $data['decoration'] = $this->DecorationModel->getById($this->session->userdata('decoration_id'))->row();         
        
        $this->load->view('templates/header');
        $this->load->view('simulation/index', $data);
        $this->load->view('templates/footer');
	}

	public function clothes($clothes_id)
	{
        $simulation_session = array(
            'clothes_id' => $clothes_id
        );
        $this->session->set_userdata($simulation_session);

        $decoration_id = $this->session->userdata('decoration_id');
        if (isset($decoration_id)) {
            $data['decoration'] = $this->DecorationModel->getById($this->session->userdata('decoration_id'))->row(); 
        }else{
            $data['decoration'] = $this->DecorationModel->get(1)->row();
        }

        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['clothes'] = $this->ClothesModel->get()->result();
        $data['decorations'] = $this->DecorationModel->get(1)->result();
        $data['clothess'] = $this->ClothesModel->get()->result();
        $data['clothes'] = $this->ClothesModel->getById($this->session->userdata('clothes_id'))->row();    
        
        $this->load->view('templates/header');
        $this->load->view('simulation/index', $data);
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
}