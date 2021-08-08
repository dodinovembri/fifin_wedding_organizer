<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WeddingPackageController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['WeddingPackageModel', 'FeatureModel', 'WeddingPackageDetailModel']);

        if ($this->session->userdata('logged_in') != 1) {
            return redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['wedding_packages'] = $this->WeddingPackageModel->get(1)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_package/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $data['features'] = $this->FeatureModel->get(1)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_package/create', $data);
        $this->load->view('admin/templates/footer');
    }

    public function store()
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/wedding_package/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $data = array(
            'code'   => $this->input->post('code'),
            'name'   => $this->input->post('name'),
            'price'   => $this->input->post('price'),
            'image'   => $this->upload->data('file_name'),
            'type'   => $this->input->post('type'),
            'description'   => $this->input->post('description'),
            'status'   => $this->input->post('status')
        );
        $this->WeddingPackageModel->insert($data);
        $wedding_package_id = $this->db->insert_id();

        $features = $this->input->post('features');
        foreach ($features as $key => $value) {
            $wedding_package_detail = array(
                'wedding_package_id'   => $wedding_package_id,
                'feature_id'   => $value,
            );

            $this->WeddingPackageDetailModel->insert($wedding_package_detail);
        }

        $this->session->set_flashdata('success', "Success insert data!");
        return redirect(base_url('admin/wedding_package'));
    }

    public function show($id)
    {
        $data['wedding_package'] = $this->WeddingPackageModel->getById($id)->row();
        $data['wedding_package_details'] = $this->WeddingPackageDetailModel->PackageDetail($id)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_package/show', $data);
        $this->load->view('admin/templates/footer');
    }

    public function edit($id)
    {
        $data['wedding_package'] = $this->WeddingPackageModel->getById($id)->row();
        $data['wedding_package_details'] = $this->WeddingPackageDetailModel->PackageDetail($id)->result();
        $data['features'] = $this->FeatureModel->getNotIn($id)->result();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/wedding_package/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $image = uniqid();
        $config['upload_path']          = './uploads/wedding_package/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $image;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $data = array(
                'code'   => $this->input->post('code'),
                'name'   => $this->input->post('name'),
                'price'   => $this->input->post('price'),
                'image'   => $this->upload->data('file_name'),
                'type'   => $this->input->post('type'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        } else {
            $data = array(
                'code'   => $this->input->post('code'),
                'name'   => $this->input->post('name'),
                'price'   => $this->input->post('price'),
                'type'   => $this->input->post('type'),
                'description'   => $this->input->post('description'),
                'status'   => $this->input->post('status')
            );
        }

        $this->WeddingPackageModel->update($data, $id);
        $this->WeddingPackageDetailModel->destroyAll($id);
        $features = $this->input->post('features');

        foreach ($features as $key => $value) {
            $wedding_package_detail = array(
                'wedding_package_id'   => $id,
                'feature_id'   => $value,
            );

            $this->WeddingPackageDetailModel->insert($wedding_package_detail);
        }        
        $this->session->set_flashdata('success', "Success update data!");
        return redirect(base_url('admin/wedding_package'));
    }

    public function destroy($id)
    {
        $this->WeddingPackageModel->destroy($id);
        $this->session->set_flashdata('success', "Success delete data!");
        return redirect(base_url('admin/wedding_package'));
    }
}
