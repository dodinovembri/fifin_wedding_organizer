<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WeddingGalleryController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['WeddingPhotosModel', 'WeddingInvitationModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index($id)
    {
        $wedding_invitation = $this->WeddingInvitationModel->getById($id)->row();
        $wedding_invitation_id = array(
            'wedding_invitation_id' => $id,
            'wedding_invitation_code' => $wedding_invitation->code
        );
        $this->session->set_userdata($wedding_invitation_id);  


        $data['wedding_galleries'] = $this->WeddingPhotosModel->get(1)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_gallery/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_gallery/create');
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/wedding_gallery/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'wedding_invitation_id'   => $this->session->userdata('wedding_invitation_id'),
            'image'   => $this->upload->data('file_name'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );

        $this->WeddingPhotosModel->insert($data);
        $wedding_invitation_id = $this->session->userdata('wedding_invitation_id');
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url("admin/wedding_galleries/$wedding_invitation_id"));
    }

    public function show($id)
    {
        $data['wedding_gallery'] = $this->WeddingPhotosModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_gallery/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['wedding_gallery'] = $this->WeddingPhotosModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_gallery/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/wedding_gallery/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'image'   => $this->upload->data('file_name'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        } else {
            $data = array(
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }

        $this->WeddingPhotosModel->update($data, $id);
        $wedding_invitation_id = $this->session->userdata('wedding_invitation_id');
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url("admin/wedding_galleries/$wedding_invitation_id"));
    }

    public function destroy($id)
    {
        $this->WeddingPhotosModel->destroy($id);
        $wedding_invitation_id = $this->session->userdata('wedding_invitation_id');
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url("admin/wedding_galleries/$wedding_invitation_id"));
    }
}
