<?php

/*author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>
version 1.1
copyright 2023. */

class Cidade extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function getCidades(){

        $id_estado = $this->input->post('id_estado');

        echo $this->cidade_model->selectCidades($id_estado);
    }
}