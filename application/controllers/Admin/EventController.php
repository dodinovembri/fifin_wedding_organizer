<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['EventModel', 'BuildingModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['events'] = $this->EventModel->get()->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/event/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $data['buildings'] = $this->BuildingModel->get(1)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/event/create', $data);
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $data = array(
            'code'   => $this->input->post('code'),
            'building_id'   => $this->input->post('building_id'),
            'start_date'   => $this->input->post('start_date'),
            'end_date'   => $this->input->post('end_date'),
            'title'   => $this->input->post('title'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );

        $this->EventModel->insert($data);
        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/event'));
    }

    public function show($id)
    {
        $data['event'] = $this->EventModel->getById($id)->row();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/event/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['event'] = $this->EventModel->getById($id)->row();
        $data['buildings'] = $this->BuildingModel->get(1)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/event/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $data = array(
            'code'   => $this->input->post('code'),
            'building_id'   => $this->input->post('building_id'),
            'start_date'   => $this->input->post('start_date'),
            'end_date'   => $this->input->post('end_date'),
            'title'   => $this->input->post('title'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );

        $this->EventModel->update($data, $id);
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/event'));
    }

    public function destroy($id)
    {
        $this->EventModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/event'));
    }
}
