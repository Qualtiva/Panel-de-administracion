<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suscriptor extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
	    // necesita cargar los 2 ayudantes
	    $this->load->helper('language');
	    $this->load->helper('url');
	 
	    // carga los idiomas
	    $this->lang->load('inicio');

		if($this->session->userdata('perfil') == FALSE)
		{
			redirect('admin/login');
		}
		$data['titulo'] = 'Bienvenido a la web '.$this->session->userdata('perfil');
		$this->load->view('admin/suscriptor_view',$data);
	}
}
