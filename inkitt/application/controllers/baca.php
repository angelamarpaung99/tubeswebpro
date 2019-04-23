<?php
class Baca extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model("novel_model");
		$this->load->model("baca_model");
		$this->load->library("form_validation");
	}
    
    public function novel($id)
	{

        $data['judul'] = 'Book Novel';
        $data['isi_novel'] = $this->baca_model->getAll($id);
		$this->load->view('headerlogged', $data);
		$this->load->view('baca', $data);
		$this->load->view('Landing/Footer');
    }
}