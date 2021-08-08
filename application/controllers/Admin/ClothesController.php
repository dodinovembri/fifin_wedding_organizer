<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClothesController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ClothesModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['clothes'] = $this->ClothesModel->get()->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/clothes/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/clothes/create');
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/clothes/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'code'   => $this->input->post('code'),
            'name'   => $this->input->post('name'),
            'image'   => $this->upload->data('file_name'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );

        $this->ClothesModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/clothes'));
    }

    public function show($id)
    {
        $data['clothes'] = $this->ClothesModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/clothes/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['clothes'] = $this->ClothesModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/clothes/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/clothes/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'code'   => $this->input->post('code'),
                'name'   => $this->input->post('name'),
                'image'   => $this->upload->data('file_name'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }else{
            $data = array(
                'code'   => $this->input->post('code'),
                'name'   => $this->input->post('name'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }

        $this->ClothesModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/clothes'));
    }

    public function destroy($id)
    {
        $this->ClothesModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/clothes'));
    }
}
