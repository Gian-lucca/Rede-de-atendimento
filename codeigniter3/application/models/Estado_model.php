<?php

/*author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>
version 1.1
copyright 2023. */

class Estado_model extends CI_model {
    public function __construct(){
        parent::__construct();
    }

    /**Traz todos os Municipios cadrastrados no Banco de Dados*/

    public function getAll(){
        return $this->db->select('DISTINCT(Municipio)')
            ->order_by('Municipio')
            ->get('i_rededeatendimento');
    }

    /**Monta um select com os Municipios cadastrados*/

    public function selectEstados(){

        $options = "<option value=''>Selecione o Municipio</option>";

        $estados = $this->getAll();

        foreach ($estados -> result() as $estado) {
            $options .= "<option value='{$estado->Municipio}'>{$estado->Municipio}</option>".PHP_EOL;
        }

        return $options;

    }
}