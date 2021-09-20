<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BuildingController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['BuildingModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['buildings'] = $this->BuildingModel->get()->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/building/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/building/create');
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/building/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'code'   => $this->input->post('code'),
            'name'   => $this->input->post('name'),
            'image'   => $this->upload->data('file_name'),
            'price'   => $this->input->post('price'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );

        $this->BuildingModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/building'));
    }

    public function show($id)
    {
        $data['building'] = $this->BuildingModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/building/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['building'] = $this->BuildingModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/building/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/building/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'code'   => $this->input->post('code'),
                'name'   => $this->input->post('name'),
                'image'   => $this->upload->data('file_name'),
                'price'   => $this->input->post('price'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }else{
            $data = array(
                'code'   => $this->input->post('code'),
                'name'   => $this->input->post('name'),
                'price'   => $this->input->post('price'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }

        $this->BuildingModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/building'));
    }

    public function destroy($id)
    {
        $this->BuildingModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/building'));
    }
}
