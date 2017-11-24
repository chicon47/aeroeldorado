<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login_model', 'lm');
    }

    public function index() {
        $this->login();
    }
    
    public function resetPassword(){
        $cpf = $this->input->post('cpf');
        $canac = $this->input->post('canac');
        $codaes = $this->input->post('codaes');
        $email = $this->input->post('email');
        $result = $this->lm->resetPassword($cpf, $canac, $codaes, $email);
        echo json_encode($result);
    }

    public function autenticar() {

        $this->form_validation->set_rules('codaes_matricula', 'Username', 'required', 'exact_length[4]', 'numeric');
        $this->form_validation->set_rules('senha', 'Password', 'required');
      

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {

            $this->load->model("login_model"); // chama o modelo usuarios_model
            $codaes_matricula = $this->input->post("codaes_matricula"); // pega via post o email que venho do formulario
            $string_senha = $this->input->post("senha"); // pega via post a senha que venho do formulario
            $senha = md5($string_senha); //CRIA O HASH MD5 DO CAMPO SENHA.
            $usuario = $this->login_model->getLogin($codaes_matricula, $senha); // acessa a função buscaPorEmailSenha do modelo

            if (!$usuario) {
             
                redirect('login');
                
                
            } else {


                $dadoslogin = array(
                    'cod_pessoafisica' => $usuario[0]->cod_pessoafisica,
                    'nome_pessoafisica' => $usuario[0]->nome_pessoafisica,
                    'codaes_matricula' => $usuario[0]->codaes_matricula,
                    'cod_nivelacesso' => $usuario[0]->cod_nivelacesso,
                    'canac' => $usuario[0]->anac_pessoafisica,
                    'foto_pessoafisica' => $usuario[0]->foto_pessoafisica,
                    'nomeguerra_pessoafisica' => $usuario[0]->nomeguerra_pessoafisica,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($dadoslogin);

                $this->load->model('menu_model');
                
               
                //BUSCA MENU DO ALUNO
                if($usuario[0]->cod_nivelacesso == 1){
                    $vetmenu = " cod_nivelacesso = 1";
                } 
                
                //BUSCA MENU DO USUÁRIO ESCALA
                else if($usuario[0]->cod_nivelacesso == 2){
                    $vetmenu = " cod_nivelacesso = 1 or cod_nivelacesso = 2"; 
                }
                
                //BUSCA MENU DO USUÁRIO SECRETARIA
                else if($usuario[0]->cod_nivelacesso == 3){
                    $vetmenu = " cod_nivelacesso = 1 or cod_nivelacesso = 2 or cod_nivelacesso = 3"; 
                }
                
                //BUSCA MENU DO USUÁRIO ADMIN
                else if($usuario[0]->cod_nivelacesso == 4){
                    $vetmenu = " cod_nivelacesso = 1 or cod_nivelacesso = 2 or cod_nivelacesso = 3 or cod_nivelacesso = 4"; 
                }
                
                //BUSCA MENU DO USUÁRIO ADMIN
                else if($usuario[0]->cod_nivelacesso == 5){
                    $vetmenu = " cod_nivelacesso = 1 or cod_nivelacesso = 2 or cod_nivelacesso = 3 or cod_nivelacesso = 4 or cod_nivelacesso = 5"; 
                }

                $data['menu'] = $this->menu_model->buscaMenus($vetmenu);
                
                
                $dadoslogin = array(
                   
                    'datamenu' => $vetmenu,
                );

                $this->session->set_userdata($dadoslogin);
                 
                redirect('a6BMnaIGv6', $data);
                //$this->load->view('portal', $data);
            }
        }
    }

    
    
    
    
}

?>