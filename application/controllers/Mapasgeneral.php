<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapasgeneral extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapageneral");
	}

	public function index()
	{
		$data["mapasgeneral"] = $this->Mapageneral->obtenerTodos();
		$this->load->view('mapasgeneral', $data);
	}
}
