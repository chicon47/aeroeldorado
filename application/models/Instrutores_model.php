<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instrutores_model extends CI_Model {

    var $table = "aes_instrutores";

    function __construct() {
        parent::__construct();
    }
    
    
    public function dpdInvas(){
        $this->db->select('cod_instrutor, nomeguerra_pessoafisica, cod_pessoafisica');
        
        $query = $this->db->query("select inva.cod_instrutor, pf.cod_pessoafisica, pf.nomeguerra_pessoafisica from aes_instrutores inva 
                inner join aes_pessoafisica pf on pf.cod_pessoafisica = inva.cod_pessoafisica
                order by inva.cod_pessoafisica")->result();
       
       
        $list = array();
        foreach ($query as $result) {
            $list[$result->cod_pessoafisica] = $result->nomeguerra_pessoafisica;
        }
        return $list;
        
    }

    public function adicionaInva() {
        
        if (!isset($_POST['pparea'])) {
            $pparea = "0";
        }  else{
            $pparea = $_POST['pparea'];
        }
                
        
        if (!isset($_POST['pptgl'])) {
            $pptgl = "0";
        }  else{
            $pptgl = $_POST['pptgl'];
        }
                
        
        if (!isset($_POST['ppap'])) {
            $ppap = "0";
        } else{
            $ppap = $_POST['ppap'];
        }
        
        
        
        if (!isset($_POST['ppnav'])) {
            $ppnav = "0";
        } else{
            $ppnav = $_POST['ppnav'];
        }
        
        
        
        if (!isset($_POST['pcaper'])) {
            $pcaper = "0";
        } else{
            $pcaper = $_POST['pcaper'];
        }
        
        
        
        if (!isset($_POST['pcaprox'])) {
            $pcaprox = "0";
        } else{
            $pcaprox = $_POST['pcaprox'];
        }
        
        if (!isset($_POST['pcnav'])) {
            $pcnav = "0";
        } else{
            $pcnav = $_POST['pcnav'];
        }
        
        
        if (!isset($_POST['invapi'])) {
            $invapi = "0";
        } else{
            $invapi = $_POST['invapi'];
        }
        
        
        if (!isset($_POST['invanav'])) {
            $invanav = "0";
        } else{
            $invanav = $_POST['invanav'];
        }
        
        
        if (!isset($_POST['arrow'])) {
            $arrow = "0";
        } else{
            $arrow = $_POST['arrow'];
        }
        
        
        if (!isset($_POST['ifraseni'])) {
            $ifraseni = "0";
        } else{
            $ifraseni = $_POST['ifraseni'];
        }
        
                
        if (!isset($_POST['ifraseniii'])) {
            $ifraseniii = "0";
        }  else{
            $ifraseniii = $_POST['ifraseniii'];
        }
        
        
        if (!isset($_POST['ne56_area'])) {
            $ne56_area = "0";
        }  else{
            $ne56_area = $_POST['ne56_area'];
        }
        
        
       if (!isset($_POST['ne56_tgl'])) {
            $ne56_tgl = "0";
        }  else{
            $ne56_tgl = $_POST['ne56_tgl'];
        }
        
        if (!isset($_POST['ne56_nav'])) {
            $ne56_nav = "0";
        }  else{
            $ne56_nav = $_POST['ne56_nav'];
        }
        
        
        
        if (!isset($_POST['ab11_area'])) {
            $ab11_area = "0";
        }  else{
            $ab11_area = $_POST['ab11_area'];
        }
        
        
       if (!isset($_POST['ab11_tgl'])) {
            $ab11_tgl = "0";
        }  else{
            $ab11_tgl = $_POST['ab11_tgl'];
        }
        
        if (!isset($_POST['ab11_nav'])) {
            $ab11_nav = "0";
        }  else{
            $ab11_nav = $_POST['ab11_nav'];
        }
        
        
        if (!isset($_POST['pa140_area'])) {
            $pa140_area = "0";
        }  else{
            $pa140_area = $_POST['pa140_area'];
        }
                
        if (!isset($_POST['pa140_tgl'])) {
            $pa140_tgl = "0";
        }  else{
            $pa140_tgl = $_POST['pa140_tgl'];
        }
        
        if (!isset($_POST['pa140_nav'])) {
            $pa140_nav = "0";
        }  else{
            $pa140_nav = $_POST['pa140_nav'];
        }
        
        
        
        if (!isset($_POST['emb712_area'])) {
            $emb712_area = "0";
        }  else{
            $emb712_area = $_POST['emb712_area'];
        }
                
        if (!isset($_POST['emb712_tgl'])) {
            $emb712_tgl = "0";
        }  else{
            $emb712_tgl = $_POST['emb712_tgl'];
        }
        
        if (!isset($_POST['emb712_nav'])) {
            $emb712_nav = "0";
        }  else{
            $emb712_nav = $_POST['emb712_nav'];
        }
        
        
        
        if (!isset($_POST['p28r_area'])) {
            $p28r_area = "0";
        }  else{
            $p28r_area = $_POST['p28r_area'];
        }
                
       
        
        if (!isset($_POST['p28r_nav'])) {
            $p28r_nav = "0";
        }  else{
            $p28r_nav = $_POST['p28r_nav'];
        }
        
        
        
         if (!isset($_POST['pa34_area'])) {
            $pa34_area = "0";
        }  else{
            $pa34_area = $_POST['pa34_area'];
        }
                
       
        
        if (!isset($_POST['pa34_nav'])) {
            $pa34_nav = "0";
        }  else{
            $pa34_nav = $_POST['pa34_nav'];
        }
        
        
        
          if (!isset($_POST['emb810d_area'])) {
            $emb810d_area = "0";
        }  else{
            $emb810d_area = $_POST['emb810d_area'];
        }
                
        
        
        if (!isset($_POST['emb810d_nav'])) {
            $emb810d_nav = "0";
        }  else{
            $emb810d_nav = $_POST['emb810d_nav'];
        }
        
        
        
        $field = array(
            'cod_pessoafisica' => $this->input->post('codaes_matriculainva'),
            'pparea' => $pparea,
            'pptgl' => $pptgl,
            'ppap' => $ppap,
            'ppnav' => $ppnav,
            'pcaper' => $pcaper,
            'pcaprox' => $pcaprox,
            'pcnav' => $pcnav,
            'arrow' => $arrow,
            'ifraseni' => $ifraseni,
            'ifraseniii' => $ifraseniii,
            
            'ne56_area' => $ne56_area,
            'ne56_tgl' => $ne56_tgl,
            'ne56_nav' => $ne56_nav,
            
            'ab11_area' => $ab11_area,
            'ab11_tgl' => $ab11_tgl,
            'ab11_nav' => $ab11_nav,
            
            'pa140_area' => $pa140_area,
            'pa140_tgl' => $pa140_tgl,
            'pa140_nav' => $pa140_nav,
            
            'emb712_area' => $emb712_area,
            'emb712_tgl' => $emb712_tgl,
            'emb712_nav' => $emb712_nav,
            
            'p28r_area' => $p28r_area,
            'p28r_nav' => $p28r_nav,
            
            'pa34_area' => $pa34_area,
            'pa34_nav' => $pa34_nav,
            
            'emb810d_area' => $emb810d_area,
            'emb810d_nav' => $emb810d_nav,
            
            'invapi' => $invapi,
            'invanav' => $invanav,
            
        );
        $this->db->insert('aes_instrutores', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return true;
        }
    }
    
    
    public function buscaInvas() {
        $query = $this->db->query("select "
                    ." i.cod_pessoafisica,"
                    ." pf.nomeguerra_pessoafisica, "
                    ." (CASE WHEN i.ne56_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS ne56_area,"
                    ." (CASE WHEN i.ne56_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS ne56_nav,"
                    ." (CASE WHEN i.ne56_tgl = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS ne56_tgl,"
                    ." (CASE WHEN i.ab11_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS ab11_area,"
                    ." (CASE WHEN i.ab11_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS ab11_nav,"
                    ." (CASE WHEN i.ab11_tgl = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS ab11_tgl,"
                    ." (CASE WHEN i.pa140_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS pa140_area,"
                    ." (CASE WHEN i.pa140_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS pa140_nav,"
                    ." (CASE WHEN i.pa140_tgl = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS pa140_tgl,"
                    ." (CASE WHEN i.emb712_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS emb712_area,"
                    ." (CASE WHEN i.emb712_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS emb712_nav,"
                    ." (CASE WHEN i.emb712_tgl = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS emb712_tgl,"
                    ." (CASE WHEN i.p28r_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS p28r_area,"
                    ." (CASE WHEN i.p28r_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS p28r_nav,"
                    ." (CASE WHEN i.pa34_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS pa34_area,"
                    ." (CASE WHEN i.pa34_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS pa34_nav,"
                    ." (CASE WHEN i.emb810d_area = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS emb810d_area,"
                    ." (CASE WHEN i.invapi = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS invapi,"
                    ." (CASE WHEN i.invanav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS invanav,"
                    ." (CASE WHEN i.emb810d_nav = '1' THEN '<span class=\'glyphicon glyphicon-ok\' style=\'color:green;\'></span>' ELSE '<span class=\'glyphicon glyphicon-remove\' style=\'color:red;\'></span>' END ) AS emb810d_nav"
                    ." from aes_instrutores i inner join aes_pessoafisica pf on pf.cod_pessoafisica = i.cod_pessoafisica order by i.cod_instrutor");
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function editarPermInva() {
        
        $cod_pessoafisica = $this->input->get('cod_pessoafisica');
        $query = $this->db->query("SELECT * FROM aes_instrutores i where i.cod_pessoafisica = '" . $cod_pessoafisica . "'");
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    
    
    function deletarInva() {
        $id = $this->input->post('cod_pessoafisica');
        $this->db->where('cod_pessoafisica', $id);
        $this->db->delete('aes_instrutores');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function updatePermInva() {
        $cod_pessoafisica = $this->input->post('codaes_matriculainva');
        
       if (!isset($_POST['pparea'])) {
            $pparea = "0";
        }  else{
            $pparea = $_POST['pparea'];
        }
                
        
        if (!isset($_POST['pptgl'])) {
            $pptgl = "0";
        }  else{
            $pptgl = $_POST['pptgl'];
        }
                
        
        if (!isset($_POST['ppap'])) {
            $ppap = "0";
        } else{
            $ppap = $_POST['ppap'];
        }
        
        
        
        if (!isset($_POST['ppnav'])) {
            $ppnav = "0";
        } else{
            $ppnav = $_POST['ppnav'];
        }
        
        
        
        if (!isset($_POST['pcaper'])) {
            $pcaper = "0";
        } else{
            $pcaper = $_POST['pcaper'];
        }
        
        
        
        if (!isset($_POST['pcaprox'])) {
            $pcaprox = "0";
        } else{
            $pcaprox = $_POST['pcaprox'];
        }
        
        if (!isset($_POST['pcnav'])) {
            $pcnav = "0";
        } else{
            $pcnav = $_POST['pcnav'];
        }
        
        
        if (!isset($_POST['invapi'])) {
            $invapi = "0";
        } else{
            $invapi = $_POST['invapi'];
        }
        
        
        if (!isset($_POST['invanav'])) {
            $invanav = "0";
        } else{
            $invanav = $_POST['invanav'];
        }
        
        
        if (!isset($_POST['arrow'])) {
            $arrow = "0";
        } else{
            $arrow = $_POST['arrow'];
        }
        
        
        if (!isset($_POST['ifraseni'])) {
            $ifraseni = "0";
        } else{
            $ifraseni = $_POST['ifraseni'];
        }
        
                
        if (!isset($_POST['ifraseniii'])) {
            $ifraseniii = "0";
        }  else{
            $ifraseniii = $_POST['ifraseniii'];
        }
        
        
        if (!isset($_POST['ne56_area'])) {
            $ne56_area = "0";
        }  else{
            $ne56_area = $_POST['ne56_area'];
        }
        
        
       if (!isset($_POST['ne56_tgl'])) {
            $ne56_tgl = "0";
        }  else{
            $ne56_tgl = $_POST['ne56_tgl'];
        }
        
        if (!isset($_POST['ne56_nav'])) {
            $ne56_nav = "0";
        }  else{
            $ne56_nav = $_POST['ne56_nav'];
        }
        
        
        
        if (!isset($_POST['ab11_area'])) {
            $ab11_area = "0";
        }  else{
            $ab11_area = $_POST['ab11_area'];
        }
        
        
       if (!isset($_POST['ab11_tgl'])) {
            $ab11_tgl = "0";
        }  else{
            $ab11_tgl = $_POST['ab11_tgl'];
        }
        
        if (!isset($_POST['ab11_nav'])) {
            $ab11_nav = "0";
        }  else{
            $ab11_nav = $_POST['ab11_nav'];
        }
        
        
        if (!isset($_POST['pa140_area'])) {
            $pa140_area = "0";
        }  else{
            $pa140_area = $_POST['pa140_area'];
        }
                
        if (!isset($_POST['pa140_tgl'])) {
            $pa140_tgl = "0";
        }  else{
            $pa140_tgl = $_POST['pa140_tgl'];
        }
        
        if (!isset($_POST['pa140_nav'])) {
            $pa140_nav = "0";
        }  else{
            $pa140_nav = $_POST['pa140_nav'];
        }
        
        
        
        if (!isset($_POST['emb712_area'])) {
            $emb712_area = "0";
        }  else{
            $emb712_area = $_POST['emb712_area'];
        }
                
        if (!isset($_POST['emb712_tgl'])) {
            $emb712_tgl = "0";
        }  else{
            $emb712_tgl = $_POST['emb712_tgl'];
        }
        
        if (!isset($_POST['emb712_nav'])) {
            $emb712_nav = "0";
        }  else{
            $emb712_nav = $_POST['emb712_nav'];
        }
        
        
        
        if (!isset($_POST['p28r_area'])) {
            $p28r_area = "0";
        }  else{
            $p28r_area = $_POST['p28r_area'];
        }
                
        
        if (!isset($_POST['p28r_nav'])) {
            $p28r_nav = "0";
        }  else{
            $p28r_nav = $_POST['p28r_nav'];
        }
        
        
        
         if (!isset($_POST['pa34_area'])) {
            $pa34_area = "0";
        }  else{
            $pa34_area = $_POST['pa34_area'];
        }
                
       
        
        if (!isset($_POST['pa34_nav'])) {
            $pa34_nav = "0";
        }  else{
            $pa34_nav = $_POST['pa34_nav'];
        }
        
        
        
          if (!isset($_POST['emb810d_area'])) {
            $emb810d_area = "0";
        }  else{
            $emb810d_area = $_POST['emb810d_area'];
        }
                
        
        
        if (!isset($_POST['emb810d_nav'])) {
            $emb810d_nav = "0";
        }  else{
            $emb810d_nav = $_POST['emb810d_nav'];
        }
        
        
        
        $field = array(
            'cod_pessoafisica' => $this->input->post('codaes_matriculainva'),
            'pparea' => $pparea,
            'pptgl' => $pptgl,
            'ppap' => $ppap,
            'ppnav' => $ppnav,
            'pcaper' => $pcaper,
            'pcaprox' => $pcaprox,
            'pcnav' => $pcnav,
            'arrow' => $arrow,
            'ifraseni' => $ifraseni,
            'ifraseniii' => $ifraseniii,
            
            'ne56_area' => $ne56_area,
            'ne56_tgl' => $ne56_tgl,
            'ne56_nav' => $ne56_nav,
            
            'ab11_area' => $ab11_area,
            'ab11_tgl' => $ab11_tgl,
            'ab11_nav' => $ab11_nav,
            
            'pa140_area' => $pa140_area,
            'pa140_tgl' => $pa140_tgl,
            'pa140_nav' => $pa140_nav,
            
            'emb712_area' => $emb712_area,
            'emb712_tgl' => $emb712_tgl,
            'emb712_nav' => $emb712_nav,
            
            'p28r_area' => $p28r_area,
            
            'p28r_nav' => $p28r_nav,
            
            'pa34_area' => $pa34_area,
           
            'pa34_nav' => $pa34_nav,
            
            'emb810d_area' => $emb810d_area,
            
            'emb810d_nav' => $emb810d_nav,
            
            'invapi' => $invapi,
            'invanav' => $invanav,
            
        );
        
        
        $this->db->where('cod_pessoafisica', $cod_pessoafisica);
        $this->db->update('aes_instrutores', $field);
        if ($this->db->affected_rows() > 0) {
            
            return true;
        } else {
            return false;
        }
    }

}
