<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $data['profile'] = $this->UserModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/profile/edit', $data);
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
        $image = uniqid();
        $config['upload_path']          = './uploads/profile/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'email'   => $this->input->post('email'),
                'name'   => $this->input->post('name'),
                'image'   => $this->upload->data('file_name'),
                'status'   => $this->input->post('status')
            );
        }else{
            $data = array(
                'email'   => $this->input->post('email'),
                'name'   => $this->input->post('name'),
                'status'   => $this->input->post('status')
            );
        }

        $this->UserModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/profile'));
    }

    public function destroy($id)
    {
        // 
    }

    public function setting()
    {
        $id = $this->session->userdata('id');
        $data['profile'] = $this->UserModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/profile/setting', $data);
        $this->load->view('admin/templates/footer');
    }

    public function store_pw($id)
    {
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Your password is doesn't match");
            return redirect(base_url('admin/profile/setting'));
        }else{
            $password = md5($password);                             
            $data = array(
                'password' => $password
            );

            $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Success update password!");
            return redirect(base_url('admin/profile/setting'));
        }
    }    
}
