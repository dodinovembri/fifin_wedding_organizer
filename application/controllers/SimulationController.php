<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SimulationController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ClothesModel', 'ContactModel', 'DecorationModel', 'BuildingModel', 'OrderModel']);
    }

	public function index()
	{
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['clothess'] = $this->ClothesModel->get()->result();
        $data['clothes'] = $this->ClothesModel->get(1)->row();    
        $data['decorations'] = $this->DecorationModel->get(1)->result();
        $data['decoration'] = $this->DecorationModel->get(1)->row();  
        $data['buildings'] = $this->BuildingModel->get(1)->result();
        
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
        $data['buildings'] = $this->BuildingModel->get(1)->result();
        
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
        $data['buildings'] = $this->BuildingModel->get(1)->result();

        
        $this->load->view('templates/header');
        $this->load->view('simulation/index', $data);
        $this->load->view('templates/footer');
	}    

    public function check_price()
    {
        $decoration_id = $this->session->userdata('decoration_id');
        $clothes_id = $this->session->userdata('clothes_id');
        $building_id = $this->input->post('building_id');
        $total_guest = $this->input->post('total_guest');

        if (isset($decoration_id)) {
            $decoration = $this->DecorationModel->getById($this->session->userdata('decoration_id'))->row(); 
        }else{
            $decoration = $this->DecorationModel->get(1)->row();
        }
        if (isset($clothes_id)) {
            $clothes = $this->ClothesModel->getById($this->session->userdata('clothes_id'))->row(); 
        }else{
            $clothes = $this->ClothesModel->get(1)->row();
        }

        $building = $this->BuildingModel->getById($building_id)->row();    

        $total_price = $decoration->price + $clothes->price + $building->price + ($total_guest * 50000);
        $data['total_price'] = $total_price;
        $data['decoration'] = $decoration;
        $data['clothes'] = $clothes;    
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['decorations'] = $this->DecorationModel->get(1)->result();
        $data['clothess'] = $this->ClothesModel->get()->result();
        $data['buildings'] = $this->BuildingModel->get(1)->result();

        $simulation_session = array(
            'decoration_id' => $decoration_id,
            'clothes_id' => $clothes_id,
            'building_id' => $building->id,
            'total_guest' => $total_guest,
            'price' => $total_price
        );
        $this->session->set_userdata($simulation_session);

        $this->load->view('templates/header');
        $this->load->view('simulation/index', $data);
        $this->load->view('templates/footer');        
    }

    public function order()
    {
        $data = array(
            'decoration_id'   => $this->session->userdata('decoration_id'),
            'clothes_id'   => $this->session->userdata('clothes_id'),
            'building_id'   => $this->session->userdata('building_id'),
            'total_guest'   => $this->session->userdata('total_guest'),
            'price'   => $this->session->userdata('price'),
            'status'   => 1
        );

        $this->OrderModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/contact'));
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