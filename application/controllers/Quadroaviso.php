<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quadroaviso extends CI_Controller {

  
   public function index()
   {
      $this->load->model('quadroaviso');
      $data['quadroaviso'] = $this->quadroaviso->getAviso();
      $this->load->view('quadroaviso');
   }
   
      
   public function update(){
       $this->load->model('quadroaviso_model');      
       $dados['desc_quadroaviso'] = $this->input->post('desc_quadroaviso');
       $date = new DateTime();
       date_default_timezone_set('America/Sao_Paulo');
       $dados['data_quadroaviso'] = date('d/m/y H:i:s');
       $dados['cod_pessoafisica'] = $this->input->post('cod_pessoafisica');
       $this->quadroaviso_model->updateAviso($dados);    
       return false;
   }
   
   
   



  
  

}
