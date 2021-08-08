<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarController extends CI_Controller { 

    function __construct()
    {
        parent::__construct();
        $this->load->model(['UserModel', 'ContactModel', 'FeatureModel', 'EventModel']);
    }

	public function index()
	{
        $search = $this->input->post('search');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $date_now = date("d");
        $data['years'] = $this->EventModel->getYear()->result();

        if (isset($search)) {
            $data['search'] = 1;
            $date = date("$year-$month-$date_now");
            $data['contact'] = $this->ContactModel->get(1)->row();
            $data['features'] = $this->FeatureModel->get(1)->result();
            $data['calendars'] = $this->EventModel->get(1)->result();
            $data['now'] = $date;
            $data['month'] = $month;
            $data['year'] = $year;
        }else{
            $data['search'] = 0;
            $data['contact'] = $this->ContactModel->get(1)->row();
            $data['features'] = $this->FeatureModel->get(1)->result();
            $data['calendars'] = $this->EventModel->get(1)->result();
        }

        $this->load->view('templates/header');
        $this->load->view('calendar/index', $data);
        $this->load->view('templates/footer');
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
        // 
    }

    public function destroy($id)
    {
        // 
    }  
}