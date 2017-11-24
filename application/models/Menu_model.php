<?php

class Menu_model extends CI_Model {

    
     public function buscaMenus($vetmenu) {
        $query = $this->db->query("select * from aes_menu where cod_menu < 99 and " . $vetmenu. " order by cod_menu" );
        return $query->result();
    }
    
    public function buscaSubmenu($nivelacesso) {        
        $query = $this->db->query("select * from aes_menu where ordem = null or cod_menu > 14 "); 
        return $query->result();
    }
    
    
    

}

?>
