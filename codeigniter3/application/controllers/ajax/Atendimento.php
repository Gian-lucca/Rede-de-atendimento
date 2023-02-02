<?php

/*author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>
version 1.1
copyright 2023. */

class Atendimento extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function getAtendimentos(){
        
        $bairro = $this->input->post('bairro');

        echo $this->atendimento_model->selectAtendimentos($bairro);
    }
}