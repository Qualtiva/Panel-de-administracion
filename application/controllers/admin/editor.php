<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
	    // necesita cargar los 2 ayudantes
	    $this->load->helper('language');
	    $this->load->helper('url');
	 
	    // carga los idiomas
	    $this->lang->load('inicio');

		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') == 'suscriptor')
		{
			redirect('admin/login');
		}
		$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('perfil');
		$this->load->view('admin/editor_view',$data);
	}
}
