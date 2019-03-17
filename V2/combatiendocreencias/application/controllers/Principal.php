<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Bases');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('encabezado_Principal');
		$this->load->view('principal');
		$this->load->view('footer');
	}
	public function login(){
		$this->load->view('header');
		$this->load->view('encabezado_Principal');
		$this->load->view('login');
	}
	public function validaUsuario()
	{
		$usuario=$this->input->post('txtusuario',TRUE);
		$password=$this->input->post('txtpassword',TRUE);
    $data = array(
               'txtusuario'=> $usuario,
							 'txtpassword'=>$password);
    $data["txtusuario"]=$this->Bases->validaUsuario($data);

    if ($data["txtusuario"]==FALSE)
    	redirect('/Principal/login/', 'location');
    else
    {
      $usuario=$data["txtusuario"]->row_array(0);
      $datasession = array(
      	'login'=> $usuario["login"],
      	'password'=> $usuario["password"],
      	'nivel'=> $usuario["nivel"],);
      $this->session->set_userdata($datasession);
      $this->load->view('header');
		  $this->load->view('encabezado_Principal');
		  $this->load->view('charts');
		  $this->load->view('footer');
    }
	}
	public function cerrar_sesion()
	{
		$datasession=array('nivel'=>'');
		$this->session->unset_userdata($datasession);
		$this->session->sess_destroy();
		redirect('/Principal/index/','refresh');
	}
	/*LLAMADAS A VISTAS*/
	public function charts(){
		$this->load->view('header');
		$this->load->view('encabezado_Principal');
		$this->load->view('charts');
		$this->load->view('footer');
	}
	public function nosotros(){
		$this->load->view('header');
		$this->load->view('encabezado_Principal');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}
	public function privacidad(){
		$this->load->view('header');
		$this->load->view('encabezado_Principal');
		$this->load->view('politica_Privacidad');
		$this->load->view('footer');
	}
	public function cuestionarioInicial(){
		$this->load->view('header');
		$this->load->view('encabezado_Principal');
		$this->load->view('cuestionario_Inicial');
		$this->load->view('footer');
	}
	/*ENVIO FORMULARIO*/
	public function insertaCuestionario(){
		$p1respuesta = $this->input->post('p1respuesta', TRUE);
    $p2respuesta = $this->input->post('p2respuesta', TRUE);
		$p3respuesta = $this->input->post('p3respuesta', TRUE);
    $p4respuesta = $this->input->post('p4respuesta', TRUE);
		$p5respuesta = $this->input->post('p5respuesta', TRUE);
    $p6respuesta = $this->input->post('p6respuesta', TRUE);
		$p7respuesta = $this->input->post('p7respuesta', TRUE);
    $p8respuesta = $this->input->post('p8respuesta', TRUE);
		$p9respuesta = $this->input->post('p9respuesta', TRUE);
    $p10respuesta = $this->input->post('p10respuesta', TRUE);
		$p11respuesta = $this->input->post('p11respuesta', TRUE);
    $p12respuesta = $this->input->post('p12respuesta', TRUE);
		$p13respuesta = $this->input->post('p13respuesta', TRUE);
    $p14respuesta = $this->input->post('p14respuesta', TRUE);
		$p15respuesta = $this->input->post('p15respuesta', TRUE);

		$data = array(
               'p1respuesta'=> $p1respuesta,
              'p2respuesta' => $p2respuesta,
							'p3respuesta' => $p3respuesta,
							'p4respuesta' => $p4respuesta,
							'p5respuesta' => $p5respuesta,
							'p6respuesta' => $p6respuesta,
							'p7respuesta' => $p7respuesta,
							'p8respuesta' => $p8respuesta,
							'p9respuesta' => $p9respuesta,
							'p10respuesta' => $p10respuesta,
							'p11respuesta' => $p11respuesta,
							'p12respuesta' => $p12respuesta,
							'p13respuesta' => $p13respuesta,
							'p14respuesta' => $p14respuesta,
							'p15respuesta' => $p15respuesta);

    $this->Bases->insertaRespuesta($data);
    redirect('/Principal/index/', 'refresh');
	}
}
