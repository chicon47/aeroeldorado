<?php

class Meusdados_model extends CI_Model {

       public function buscaDados($canac) {
        $query = $this->db->query("
          select max(mt.cod_cursomatricula) as cod_cursomatricula,pf.*, c.descricao_cursomatricula,  
          (CASE WHEN pf.sexo_pessoafisica = 'M' THEN 'Masculino' ELSE 'Feminino' END ) AS sexo, 
                    pf.datanascto_pessoafisica from aes_pessoafisica pf
                    inner join aes_matricula mt on mt.cpf_matricula = pf.cpf_pessoafisica
                    inner join aes_cursos c on c.cod_cursomatricula = mt.cod_cursomatricula
                    where pf.anac_pessoafisica = " .$canac. " and mt.matricula_vigente = 's'");
        return $query->result();
    }
    
    
     

}