<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengguna extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['pengguna_model']);
	}
	public function index()
	{
		$this->load->view('modul/pengguna/index');
	}
	public function getPengguna()
	{
		$this->output->set_content_type('application/json');
		$pengguna = $this->pengguna_model->getPengguna();
		echo json_encode($pengguna);
	}
	public function savePengguna()
	{
		$input = $this->pengguna_model->savePengguna();
		if ($input) {
			echo json_encode(['success' => true]);
		}else {
			echo json_encode(['errorMsg'=>'Some Error occured!.']);
		}
	}
	public function updatePengguna($id)
	{
		$input = $this->pengguna_model->updatePengguna($id);
		if ($input) {
			echo json_encode(['success1' => true]);
		}else {
			echo json_encode(['errorMsg'=>'Some Error occured!.']);
		}
	}
	public function destroyCustomer()
	{
		$id = intval($_REQUEST['kd_pengguna']);
		$input = $this->pengguna_model->destroyCustomer($id);
		if ($input) {
			echo json_encode(array('success'=>true));
		}else {
			echo json_encode(array('errorMsg'=>'Some errors occured.'));
		}
	}
	// public function deleteCustomer(){
  //
	// }
}
