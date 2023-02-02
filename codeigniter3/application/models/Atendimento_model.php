<?php

/*author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>
version 1.1
copyright 2023. */

class Atendimento_model extends CI_model {
    public function __construct(){
        parent::__construct();
    }

    /**Traz todos os Bairos do municipios cadrastrados no Banco de Dados*/

    public function getAtendimentosByIdCidades($bairro = null){

        return $this->db->select('DISTINCT(TipoDeAtendimento)')
        ->where("Bairro", $bairro)
        //->order_by('Nome')
        ->get('i_rededeatendimento');
    }
        /**Monta um select com tipo de atendimento*/

        public function selectAtendimentos($bairro = null){

            $atendimentos = $this->getAtendimentosByIdCidades($bairro);

            $options = "<option>Selecione</option>";
    
            foreach ($atendimentos ->result() as $atendimento) {
                $options .= "<option value='{$atendimento->TipoDeAtendimento}'>$atendimento->TipoDeAtendimento</option>".PHP_EOL;
            }
    
            return $options;
    
        }
    }