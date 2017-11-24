<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('session');
    }

    public function index() {
        $this->load->view('index');
    }

    public function inicio() {
        $this->load->model('quadroaviso_model');
        $aviso['quadroaviso'] = $this->quadroaviso_model->buscaQuadro();
        $this->load->view('inicio', $aviso);
    }

    public function sobre() {
        $this->load->view('sobre');
    }

    public function meusdados() {
        $codanac = $this->session->userdata('canac');
        $this->load->model('meusdados_model');
        $dados['meusdados'] = $this->meusdados_model->buscaDados($codanac);
        $this->load->view('meusdados', $dados);
    }

    public function alunos() {
        $this->load->view('alunos');
    }

    public function biblioteca() {
        $this->load->model('biblioteca_model');
        $attc['lib'] = $this->biblioteca_model->buscaAtt();
        $this->load->view('biblioteca', $attc);
    }

    public function pessoafisica() {
        $this->load->model('Pessoafisica_model');
        
        $config = array(
            "base_url" => base_url('portal/p'),
            "per_page" => 3,
            "num_links" => 3,
            "uri_segment" => 3,
            "total_rows" => $this->Pessoafisica_model->CountAll(),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "Anterior",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => "Próxima",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['usuarios'] = $this->Pessoafisica_model->buscaPessoa('cod_pessoafisica', 'asc', $config['per_page'], $offset);
        
        
        
        
        
        $this->load->view('pessoafisica', $data);
    }

    public function matricula() {
        $this->load->view('matricula');
    }

    public function gerarlogin() {
        $this->load->view('gerarlogin');
    }

    public function novasemana() {
        $this->load->view('novasemana');
    }

    public function agenda() {
        $this->load->view('agenda');
    }

    public function instrutores() {
        $this->load->view('instrutores');
    }

    public function restricoes() {
        $this->load->view('restricoes');
    }

    public function aeronaves() {
        $this->load->view('aeronaves');
    }

    public function bancoimagens() {
        $this->load->view('bancoimagens');
    }

    public function noticias() {
        $this->load->view('noticias');
    }

    public function nivelacesso() {
        $this->load->view('nivelacesso');
    }

    public function do_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function cursos() {
        $this->load->view('cursos');
    }

    public function contato() {
        $this->load->view('contato');
    }

    public function simulador() {
        $this->load->view('simulador');
    }

    public function frota() {
        $this->load->view('frota');
    }

    public function instalacoes() {
        $this->load->view('instalacoes');
    }

    public function login() {
         $this->load->model('quadroaviso_model');
        $aviso['quadroaviso'] = $this->quadroaviso_model->buscaQuadro();
        $this->load->view('login', $aviso);
        }

    public function quadroaviso() {
        $this->load->model('quadroaviso_model');
        $dataAviso['quadroaviso'] = $this->quadroaviso_model->getAviso();
        $this->load->view('quadroaviso', $dataAviso);
    }

    public function portal() {
        $vetmenu = $this->session->userdata('datamenu');
        $nivelacesso = $this->session->userdata('cod_nivelacesso');
        $this->load->model('menu_model');
        $this->load->model('quadroaviso_model');
        $data['menu'] = $this->menu_model->buscaMenus($vetmenu);
        $data['submenu'] = $this->menu_model->buscaSubmenu($nivelacesso);
        $data['quadroaviso'] = $this->quadroaviso_model->buscaQuadro();
        $this->load->view('portal', $data);
    }

    public function sendemail() {
        // Carrega a library email
        $this->load->library('email');
        //Recupera os dados do formulário
        $dados = $this->input->post();

        //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'smtp'; // define o protocolo utilizado
        $config['smtp_host'] = 'email-ssl.com.br'; // host do email 
        $config['smtp_user'] = 'secretaria@aeroeldorado.com.br'; // usuario do email
        $config['smtp_pass'] = 'eldoradosec2017'; // senha do email
        $config['smtp_port'] = 465; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";
        $config['charset'] = 'UTF-8';
        $config['mailtype'] = 'html';



        // Inicializa a library Email, passando os parâmetros de configuração
        $this->email->initialize($config);

        // Define remetente e destinatário
        $this->email->from('secretaria@aeroeldorado.com.br', 'Remetente'); // Remetente
        $this->email->to($dados['email'], $dados['nome']); // Destinatário
        // Define o assunto do email
        $this->email->subject('Enviando emails com a library nativa do CodeIgniter');

        /*
         * Se o usuário escolheu o envio com template, passa o conteúdo do template para a mensagem
         * caso contrário passa somente o conteúdo do campo 'mensagem'
         */
        if (isset($dados['template']))
            $this->email->message($this->load->view('email-template', $dados, TRUE));
        else
            $this->email->message($dados['mensagem']);




        /*
         * Se o envio foi feito com sucesso, define a mensagem de sucesso
         * caso contrário define a mensagem de erro, e carrega a view home
         */
        if ($this->email->send()) {
            $this->session->set_flashdata('success', 'Email enviado com sucesso!');
            $this->load->view('contato');
            echo "javascript:alert('Email enviado com Sucesso!');";
        } else {
            $this->session->set_flashdata('error', $this->email->print_debugger());
            $this->load->view('cursos');
        }


        echo $this->email->print_debugger();
    }

}
