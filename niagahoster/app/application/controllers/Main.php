<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('M_general'));
	}

	public function index()
	{
		$data['paket'] = $this->M_general->getData('package');
		
		foreach($data['paket'] as $row) {
			if($row->id == '1') {
				$data['paket_bayi'] = $row->harga;
				$data['paket_bayi_diskon'] = $row->harga_diskon;
			} elseif ($row->id == '2') {
				$data['paket_pelajar'] = $row->harga;
				$data['paket_pelajar_diskon'] = $row->harga_diskon;
			} elseif ($row->id == '3') {
				$data['paket_personal'] = $row->harga;
				$data['paket_personal_diskon'] = $row->harga_diskon;
			} elseif ($row->id == '4') {
				$data['paket_bisnis'] = $row->harga;
				$data['paket_bisnis_diskon'] = $row->harga_diskon;
			}
		}
		// var_dump($data['paket-bayi']);die();

		$this->load->view('frontend/header');
		$this->load->view('frontend/nav');
		$this->load->view('frontend/content', $data);
		// $this->load->view('frontend/content', $data);
		$this->load->view('frontend/footer');
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */