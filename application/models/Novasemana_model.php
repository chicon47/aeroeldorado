<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Novasemana_model extends CI_Model {

    var $table = "aes_diasemana";

    function __construct() {
        parent::__construct();
    }

    public function addSemana() {
        /* QUANDO $DIAS = 0, VAI GERAR AS TRÊS SEMANAS A PARTRIR DA DATA ATUAL 
         * QUANDO $DIAS = 15, VAI GERAR APENAS MAIS UMA SEMANA A PARTIR DA DATA ATUAL
         */
        $dias = 0;
        $data_escala = '';
        $data_sim = '';
        if (isset($_POST['0700'])) {
            $data_escala .= "0700-";
        }

        if (isset($_POST['0730'])) {
            $data_escala .= "0730-";
        }

        if (isset($_POST['0800'])) {
            $data_escala .= "0800-";
        }

        if (isset($_POST['0830'])) {
            $data_escala .= "0830-";
        }

        if (isset($_POST['0900'])) {
            $data_escala .= "0900-";
        }

        if (isset($_POST['0930'])) {
            $data_escala .= "0930-";
        }

        if (isset($_POST['1000'])) {
            $data_escala .= "1000-";
        }

        if (isset($_POST['1030'])) {
            $data_escala .= "1030-";
        }

        if (isset($_POST['1100'])) {
            $data_escala .= "1100-";
        }

        if (isset($_POST['1130'])) {
            $data_escala .= "1130-";
        }

        if (isset($_POST['1200'])) {
            $data_escala .= "1200-";
        }

        if (isset($_POST['1300'])) {
            $data_escala .= "1300-";
        }

        if (isset($_POST['1330'])) {
            $data_escala .= "1330-";
        }

        if (isset($_POST['1400'])) {
            $data_escala .= "1400-";
        }

        if (isset($_POST['1430'])) {
            $data_escala .= "1430-";
        }

        if (isset($_POST['1500'])) {
            $data_escala .= "1500-";
        }
        if (isset($_POST['1530'])) {
            $data_escala .= "1530-";
        }
        if (isset($_POST['1600'])) {
            $data_escala .= "1600-";
        }
        if (isset($_POST['1630'])) {
            $data_escala .= "1630-";
        }
        if (isset($_POST['1730'])) {
            $data_escala .= "1730-";
        }
        if (isset($_POST['1800'])) {
            $data_escala .= "1800-";
        }


        if (isset($_POST['s0700'])) {
            $data_sim .= "0700-";
        }

        if (isset($_POST['s0730'])) {
            $data_sim .= "0730-";
        }

        if (isset($_POST['s0800'])) {
            $data_sim .= "0800-";
        }

        if (isset($_POST['s0830'])) {
            $data_sim .= "0830-";
        }

        if (isset($_POST['s0900'])) {
            $data_sim .= "0900-";
        }

        if (isset($_POST['s0930'])) {
            $data_sim .= "0930-";
        }

        if (isset($_POST['s1000'])) {
            $data_sim .= "1000-";
        }

        if (isset($_POST['s1030'])) {
            $data_sim .= "1030-";
        }

        if (isset($_POST['s1100'])) {
            $data_sim .= "1100-";
        }

        if (isset($_POST['s1130'])) {
            $data_sim .= "1130-";
        }

        if (isset($_POST['s1200'])) {
            $data_sim .= "1200-";
        }

        if (isset($_POST['s1300'])) {
            $data_sim .= "1300-";
        }

        if (isset($_POST['s1330'])) {
            $data_sim .= "1330-";
        }

        if (isset($_POST['s1400'])) {
            $data_sim .= "1400-";
        }

        if (isset($_POST['s1430'])) {
            $data_sim .= "1430-";
        }

        if (isset($_POST['s1500'])) {
            $data_sim .= "1500-";
        }
        if (isset($_POST['s1530'])) {
            $data_sim .= "1530-";
        }
        if (isset($_POST['s1600'])) {
            $data_sim .= "1600-";
        }
        if (isset($_POST['s1630'])) {
            $data_sim .= "1630-";
        }
        if (isset($_POST['s1700'])) {
            $data_sim .= "1730-";
        }
        if (isset($_POST['s1800'])) {
            $data_sim .= "1800-";
        }


        var_dump($data_escala);



        while ($dias <= 20) {
            $xdata = "86400" * $dias + mktime(0, 0, 0, date('m'), date('d'), date('Y'));

            $xdata = date("d/m/Y", $xdata);

            $diaa = substr($xdata, 0, 2);

            $mes = substr($xdata, 3, 2);
            $ano = substr($xdata, 6, 4);


            $diasemana = date("w", mktime(0, 0, 0, $mes, $diaa, $ano));

            switch ($diasemana) {
                case"0": $dia_semana = "Domingo";
                    break;
                case"1": $dia_semana = "Segunda-Feira";
                    break;
                case"2": $dia_semana = "Terça-Feira";
                    break;
                case"3": $dia_semana = "Quarta-Feira";
                    break;
                case"4": $dia_semana = "Quinta-Feira";
                    break;
                case"5": $dia_semana = "Sexta-Feira";
                    break;
                case"6": $dia_semana = "Sábado";
                    break;
            }
            switch ($diasemana) {
                case"0": $dia_semana2 = "domingo";
                    break;
                case"1": $dia_semana2 = "segunda";
                    break;
                case"2": $dia_semana2 = "terca";
                    break;
                case"3": $dia_semana2 = "quarta";
                    break;
                case"4": $dia_semana2 = "quinta";
                    break;
                case"5": $dia_semana2 = "sexta";
                    break;
                case"6": $dia_semana2 = "sabado";
                    break;
            }

            $dias = $dias + 1;

            $field = array(
                'dia_semana' => $dia_semana2,
                'dia_mes' => $xdata,
                'dia_nome' => $dia_semana,
                'horario_escala' => $data_escala,
                'horario_simulador' => $data_sim,
            );
            $this->db->insert('aes_diasemana', $field);
            

            echo'<br>';

            /* $myDates = array();

              $date = new DateTime();
              $lastDate = $date->format('d/m/Y');
              $dia = 7;

              $field = array(
              'dia_semana' => 'segunda',
              'dia_mes' => '13/11/2017',
              'dia_nome' => 'Segunda-Feira',
              'horario_escala' => '0830-1030-1330-1530-1730',
              'horario_simulador' => '0830-1130-1330-1530',
              );
              $this->db->insert('aes_diasemana', $field);
              $dia--;



              for ($x = 0; $x <= 6; $x++) {
              $myDates[] = $lastDate;
              $lastDate = date('d/m/Y', strtotime($lastDate . ' +7 days'));
              echo '<br>';
              var_dump(date("l", mktime(0,0,0,11,9,2017)));
              }


              if ($this->db->affected_rows() > 0) {
              return true;
              } else {
              return false;
              } */
        }
        
        if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return true;
            }
    }

}
