<?php

/*author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>
version 1.1
copyright 2023. */

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$dados =[
			'options_estados' => $this->estado_model->selectEstados()
		];

		$this->load->view('welcome_message', $dados);
	}
}
