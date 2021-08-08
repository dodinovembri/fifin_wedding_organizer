<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BannerController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['BannerModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['banners'] = $this->BannerModel->get()->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/banner/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/banner/create');
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/banner/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'image'      => $this->upload->data('file_name'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );

        $this->BannerModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/banner'));
        

    }

    public function show($id)
    {
        $data['banner'] = $this->BannerModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/banner/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['banner'] = $this->BannerModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/banner/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        // for image
        $image = uniqid();
        $config['upload_path']          = './uploads/employee/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'image'       => $this->input->post('image'),
                'description'        => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        } else {
            $data = array(
                'description'       => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }

        $this->BannerModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/banner'));
    }

    public function destroy($id)
    {
        $this->BannerModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/banner'));
    }
}
