<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['ContactModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['contacts'] = $this->ContactModel->get()->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/contact/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/contact/create');
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/contact/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'email'   => $this->input->post('email'),
            'facebook'   => $this->input->post('facebook'),
            'twitter'   => $this->input->post('twitter'),
            'instagram'   => $this->input->post('instagram'),
            'phone'   => $this->input->post('phone'),
            'opening_hours'   => $this->input->post('opening_hours'),
            'address'   => $this->input->post('address'),
            'about_title'   => $this->input->post('about_title'),
            'about_image'   => $this->upload->data('file_name'),
            'about'   => $this->input->post('about'),
            'account_number'   => $this->input->post('account_number'),
            'status'   => $this->input->post('status')
        );

        $this->ContactModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/contact'));
    }

    public function show($id)
    {
        $data['contact'] = $this->ContactModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/contact/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['contact'] = $this->ContactModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/contact/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/contact/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'email'   => $this->input->post('email'),
                'facebook'   => $this->input->post('facebook'),
                'twitter'   => $this->input->post('twitter'),
                'instagram'   => $this->input->post('instagram'),
                'phone'   => $this->input->post('phone'),
                'opening_hours'   => $this->input->post('opening_hours'),
                'address'   => $this->input->post('address'),
                'about_title'   => $this->input->post('about_title'),
                'about_image'   => $this->upload->data('file_name'),
                'about'   => $this->input->post('about'),
                'account_number'   => $this->input->post('account_number'),
                'status'   => $this->input->post('status')
            );
        }else{
            $data = array(
                'email'   => $this->input->post('email'),
                'facebook'   => $this->input->post('facebook'),
                'twitter'   => $this->input->post('twitter'),
                'instagram'   => $this->input->post('instagram'),
                'phone'   => $this->input->post('phone'),
                'opening_hours'   => $this->input->post('opening_hours'),
                'address'   => $this->input->post('address'),
                'about_title'   => $this->input->post('about_title'),
                'about'   => $this->input->post('about'),
                'account_number'   => $this->input->post('account_number'),
                'status'   => $this->input->post('status')
            );
        }

        $this->ContactModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/contact'));
    }

    public function destroy($id)
    {
        $this->ContactModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/contact'));
    }
}
