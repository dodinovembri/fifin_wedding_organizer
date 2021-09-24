<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model(['OrderModel', 'BannerModel', 'ContactModel', 'FeatureModel',  'WeddingPackageModel', 'EventModel']);

        if ($this->session->userdata('logged_in') != 2) {
            return redirect(base_url('customer'));
        }
    }

    public function index()
	{
        $data['banner'] = $this->BannerModel->get(1)->row();
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['features'] = $this->FeatureModel->get(1)->result();
        $data['wedding_packages'] = $this->WeddingPackageModel->get(1)->result();
        $data['orders'] = $this->OrderModel->get()->result();

        $this->load->view('templates/header');
        $this->load->view('manage/index', $data);
        $this->load->view('templates/footer');
	}

    public function edit($id)
	{
        $data['banner'] = $this->BannerModel->get(1)->row();
        $data['contact'] = $this->ContactModel->get(1)->row();
        $data['features'] = $this->FeatureModel->get(1)->result();
        $data['wedding_packages'] = $this->WeddingPackageModel->get(1)->result();    
        $data['order'] = $this->OrderModel->getById($id)->row();

        $this->load->view('templates/header');
        $this->load->view('manage/edit', $data);
        $this->load->view('templates/footer');
	}    

    public function update($id)
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/payment/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';            
        $config['file_name']            = $image;

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload('image'))
        {
            $data = array(
                'payment_note' => $this->upload->data('file_name'),
                'status' => 2
            );

            $this->OrderModel->update($data, $id);
            
            $order = $this->OrderModel->getById($id)->row();
            $data2 = array(
                'building_id' => $order->building_id,
                'start_date' => $order->start_date,
                'end_date' => $order->end_date,
                'title' => $order->title,
                'description' => "",
                'status' => 1
            );
            $this->EventModel->insert($data2);

            $this->session->set_flashdata('success', "Success update data!");
            return redirect(base_url('manage'));
        }else{
            $this->session->set_flashdata('error', "Failed update data!");
            return redirect(base_url('manage'));
        }
        
    }
}
