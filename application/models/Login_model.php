
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
    public function resetPassword($cpf, $canac, $codaes, $email){
        $query = $this->db->query("select count(*) from aes_pessoafisica pf where pf.codaes_matricula = ".$codaes." and pf.cpf_pessoafisica = '". $cpf ."' and pf.email_pessoafisica = '". $email ."' and pf.anac_pessoafisica = ".$canac);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    
    
    //FUNÇÃO UTILIZADA PARA BUSCAR OS DADOS NO LONGIN DO USUÁRIO
    public function getLogin($codaes_matricula, $senha) {
        $query = $this->db->query("select 
        pef.cod_pessoafisica,
        pef.nome_pessoafisica, 
        pef.nomeguerra_pessoafisica,
        pef.codaes_matricula, 
        pef.foto_pessoafisica,
        pef.anac_pessoafisica,
        l.cod_nivelacesso,
        log.senha_login  from aes_login log INNER JOIN aes_pessoafisica pef on pef.cod_pessoafisica = log.cod_pessoafisica 
        INNER JOIN aes_login l on l.cod_pessoafisica = pef.cod_pessoafisica
        where log.ativo = 's' and pef.codaes_matricula = " . $codaes_matricula . " and log.senha_login = '" . $senha . "'");
        $query->result();
        if($query->num_rows() == 1){
            return $query->result();
        } else{
            return false;
        }
        
    }
    
    
    

    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function busca($variavel) {
        $query = $this->db->query("SELECT n.cod_nivelacesso, n.desc_nivelacesso FROM aes_nivelacesso n WHERE n.cod_nivelacesso = " . $variavel);
    }

    public function validate() {
// grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        echo "<script>alert(" . $username, $password . ");</script>";

// Prep the query
        $this->db->where('login_usuario', $username);
        $this->db->where('senha_usuario', $password);


        /*
          // Run the query
          $query = $this->db->get('aes_login');
          // Let's check if there are any results
          if($query->num_rows() == 1)
          {
          // If there is a user, then create session data
          $row = $query->row();
          $data = array(
          'cod_login' => $row->id_usuario,
          'senha_login' => $row->nome_usuario,
          'username' => $row->login_usuario,
          'validated' => true
          );
          $this->session->set_userdata($data);
          return true;

          }
         */
    }

    /* select 
      select
     * pef.nome_pessoafisica, 
     * pef.codaes_matricula, 
     * log.senha_login  from aes_login log INNER JOIN aes_pessoafisica pef on pef.cod_pessoafisica = log.cod_pessoafisica 
     * where log.cod_pessoafisica = $cod_pessoa */
}

?>