<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['users'] = $this->UserModel->get()->result();

        $this->load->view('templates/header');
		$this->load->view('user/index', $data);
        $this->load->view('templates/footer');
	}

    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('user/create');
        $this->load->view('templates/footer');
    }

    public function store()
    {
        $nip = $this->input->post('nip');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $position = $this->input->post('position');
        $image = $this->input->post('image');
        $birth_place = $this->input->post('birth_place');
        $religion = $this->input->post('religion');
        $sex = $this->input->post('sex');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('phone_number');
        $role_id = $this->input->post('role_id');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $status = $this->input->post('status');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Your password is doesn't match");
            return redirect(base_url('user'));
        }else{
            $password = md5($password);    

            // for image
            $image = uniqid();
            $config['upload_path']          = './uploads/user/';
            $config['allowed_types']        = 'gif|jpg|png';            
            $config['file_name']            = $image;

            $this->load->library('upload', $config); 

            if ($this->upload->do_upload('image'))
            {
                $data = array(
                    'nip' => $nip,
                    'name' => $name,
                    'email' => $email,
                    'position' => $position,
                    'image' => $this->upload->data('file_name'),
                    'birth_place' => $birth_place,
                    'religion' => $religion,
                    'sex' => $sex,
                    'address' => $address,
                    'phone_number' => $phone_number,
                    'role_id' => $role_id,
                    'password' => $password,
                    'status' => $status
                );
            }
            else
            {                          
                $data = array(
                    'nip' => $nip,
                    'name' => $name,
                    'email' => $email,
                    'position' => $position,
                    'birth_place' => $birth_place,
                    'religion' => $religion,
                    'sex' => $sex,
                    'address' => $address,
                    'phone_number' => $phone_number,
                    'role_id' => $role_id,
                    'password' => $password,
                    'status' => $status
                );
            }

            $this->UserModel->insert($data);
            $this->session->set_flashdata('success', "Success create new user!");
            return redirect(base_url('user'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['user'] = $this->UserModel->get_data($id)->row();

        $this->load->view('templates/header');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $role = $this->input->post('role');
        $status = $this->input->post('status');

        if ($password != $password_confirm) {
            $this->session->set_flashdata('warning', "Your password is doesn't match");
            return redirect(base_url('user'));
        }else{
            $password = md5($this->input->post('password'));
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role_id' => $role,
                'status' => $status
            );

            $update = $this->UserModel->update($data, $id);
            $this->session->set_flashdata('success', "Success update user!");
            return redirect(base_url('user'));
        }
    }

    public function destroy($id)
    {
        $delete = $this->UserModel->destroy($id);        
        $this->session->set_flashdata('success', "Success deleted data!");
        return redirect(base_url('user'));
    }
}
