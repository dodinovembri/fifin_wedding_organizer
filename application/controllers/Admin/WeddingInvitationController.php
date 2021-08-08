<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WeddingInvitationController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['WeddingInvitationModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['wedding_invitations'] = $this->WeddingInvitationModel->get(1)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_invitation/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_invitation/create');
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $file_name = [];

        // home image
        $home_image = uniqid();
        $config['upload_path']          = './uploads/wedding_invitation/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $home_image;
        $this->load->library('upload', $config);
        $this->upload->do_upload('home_background');
        $home_image_insert = $this->upload->data('file_name');
        array_push($file_name, $home_image_insert);

        // groom image
        $groom_image = uniqid();
        $config['upload_path']          = './uploads/wedding_invitation/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $groom_image;
        $this->load->library('upload', $config);
        $this->upload->do_upload('groom_image');
        $groom_image_insert = $this->upload->data('file_name');    
        array_push($file_name, $groom_image_insert);
        
        // bride image
        $bride_image = uniqid();
        $config['upload_path']          = './uploads/wedding_invitation/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $bride_image;
        $this->load->library('upload', $config);
        $this->upload->do_upload('bride_image');
        $bride_image_insert = $this->upload->data('file_name');      
        array_push($file_name, $bride_image_insert);   

        $data = array(
            'code'   => $this->input->post('code'),
            'home_background'   => $file_name[0],
            'groom_name'   => $this->input->post('groom_name'),
            'groom_image'   => $file_name[1],
            'groom_text'   => $this->input->post('groom_text'),
            'groom_facebook_id'   => $this->input->post('groom_facebook_id'),
            'groom_twitter_id'   => $this->input->post('groom_twitter_id'),
            'groom_instagram_id'   => $this->input->post('groom_instagram_id'),
            'bride_name'   => $this->input->post('bride_name'),
            'bride_image'   => $file_name[2],
            'bride_text'   => $this->input->post('bride_text'),
            'bride_facebook_id'   => $this->input->post('bride_facebook_id'),
            'bride_twitter_id'   => $this->input->post('bride_twitter_id'),
            'bride_instagram_id'   => $this->input->post('bride_instagram_id'),
            'main_ceremony_date'   => $this->input->post('main_ceremony_date'),
            'main_ceremony_time'   => $this->input->post('main_ceremony_time'),
            'main_ceremony_location'   => $this->input->post('main_ceremony_location'),
            'main_ceremony_latitude'   => $this->input->post('main_ceremony_latitude'),
            'main_ceremony_longitude'   => $this->input->post('main_ceremony_longitude'),
            'wedding_date'   => $this->input->post('wedding_date'),
            'wedding_time'   => $this->input->post('wedding_time'),
            'wedding_location'   => $this->input->post('wedding_location'),
            'wedding_latitude'   => $this->input->post('wedding_latitude'),
            'wedding_longitude'   => $this->input->post('wedding_longitude'),
            'special_message'   => $this->input->post('special_message'),
            'special_message_by'   => $this->input->post('special_message_by'),
            'status'   => $this->input->post('status'),
        );
        $this->WeddingInvitationModel->insert($data);

        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/wedding_invitation'));
    }

    public function show($id)
    {
        $data['wedding_invitation'] = $this->WeddingInvitationModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_invitation/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['wedding_invitation'] = $this->WeddingInvitationModel->getById($id)->row();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_invitation/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $file_name = [];

        // home image
        $home_image = uniqid();
        $config['upload_path']          = './uploads/wedding_invitation/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $home_image;
        $this->load->library('upload', $config);
        $this->upload->do_upload('home_background');
        $home_image_insert = $this->upload->data('file_name');
        array_push($file_name, $home_image_insert);

        // groom image
        $groom_image = uniqid();
        $config['upload_path']          = './uploads/wedding_invitation/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $groom_image;
        $this->load->library('upload', $config);
        $this->upload->do_upload('groom_image');
        $groom_image_insert = $this->upload->data('file_name');    
        array_push($file_name, $groom_image_insert);
        
        // bride image
        $bride_image = uniqid();
        $config['upload_path']          = './uploads/wedding_invitation/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name'] = $bride_image;
        $this->load->library('upload', $config);
        $this->upload->do_upload('bride_image');
        $bride_image_insert = $this->upload->data('file_name');      
        array_push($file_name, $bride_image_insert);   

        $data = array(
            'code'   => $this->input->post('code'),
            'home_background'   => $file_name[0],
            'groom_name'   => $this->input->post('groom_name'),
            'groom_image'   => $file_name[1],
            'groom_text'   => $this->input->post('groom_text'),
            'groom_facebook_id'   => $this->input->post('groom_facebook_id'),
            'groom_twitter_id'   => $this->input->post('groom_twitter_id'),
            'groom_instagram_id'   => $this->input->post('groom_instagram_id'),
            'bride_name'   => $this->input->post('bride_name'),
            'bride_image'   => $file_name[2],
            'bride_text'   => $this->input->post('bride_text'),
            'bride_facebook_id'   => $this->input->post('bride_facebook_id'),
            'bride_twitter_id'   => $this->input->post('bride_twitter_id'),
            'bride_instagram_id'   => $this->input->post('bride_instagram_id'),
            'main_ceremony_date'   => $this->input->post('main_ceremony_date'),
            'main_ceremony_time'   => $this->input->post('main_ceremony_time'),
            'main_ceremony_location'   => $this->input->post('main_ceremony_location'),
            'main_ceremony_latitude'   => $this->input->post('main_ceremony_latitude'),
            'main_ceremony_longitude'   => $this->input->post('main_ceremony_longitude'),
            'wedding_date'   => $this->input->post('wedding_date'),
            'wedding_time'   => $this->input->post('wedding_time'),
            'wedding_location'   => $this->input->post('wedding_location'),
            'wedding_latitude'   => $this->input->post('wedding_latitude'),
            'wedding_longitude'   => $this->input->post('wedding_longitude'),
            'special_message'   => $this->input->post('special_message'),
            'special_message_by'   => $this->input->post('special_message_by'),
            'status'   => $this->input->post('status'),
        );

        $this->WeddingInvitationModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/wedding_invitation'));
    }

    public function destroy($id)
    {
        $this->WeddingInvitationModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/wedding_invitation'));
    }
}
