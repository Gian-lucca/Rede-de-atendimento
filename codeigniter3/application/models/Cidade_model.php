<?php

/*author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>
version 1.1
copyright 2023. */

class Cidade_model extends CI_model {
    public function __construct(){
        parent::__construct();
    }

    /**Traz todos os Bairos do municipios cadrastrados no Banco de Dados*/

    public function getCidadesByIdEstados($id_estado = null){

        return $this->db
            ->where("ID_ESTADO", $id_estado)
            ->order_by('NOME')
            ->get('cidade');
    }

    /**Monta um select com os Bairros cadastrados*/

    public function selectCidades($id_estado = null){

        $cidades = $this->getCidadesByIdEstados($id_estado);

        $options = "<option>Selecione o Bairro</option>";

        foreach ($cidades ->result() as $cidade) {
            $options .= "<option value='{$cidade->id}'>$cidade->NOME</option>".PHP_EOL;
        }

        return $options;

    }
}