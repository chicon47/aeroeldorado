<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model {

    var $table = "aes_agenda";

    function __construct() {
        parent::__construct();
    }

    public function desmarcaVoo($cod_agenda) {

        $this->db->where('cod_agenda', $cod_agenda);
        $this->db->delete('aes_agenda');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function marcaVoos() {
        $horarios = $this->input->post('horarios');
        $exp_hora = explode("&", $horarios);


        foreach ($exp_hora as $exp) {
            $field = array(
                'cod_pessoafisica' => $this->input->post('cod_pessoafisica'),
                'cod_aeronave' => $this->input->post('cod_aeronave'),
                'cod_missao' => $this->input->post('cod_missao'),
                'cod_instrutor' => $this->input->post('cod_instrutor'),
                'cod_cursomatricula' => $this->input->post('cod_curso'),
                'horario' => $exp,
                'data' => $this->input->post('dia_mes'),
                'cod_curso' => $this->input->post('cod_curso'),
            );
            $this->db->insert('aes_agenda', $field);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function buscaDiasSemana($limit) {

        $query = $this->db->query("SELECT * FROM aes_diasemana limit " . $limit);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function cabecalho($dia_mes) {
        $query = $this->db->query("select * from aes_diasemana ds where ds.dia_mes = '" . $dia_mes . "'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function carregaAgenda($dia_mes) {
        $query = $this->db->query("select * from aes_agenda ag where ag.data = '" . $dia_mes . "'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function carregaInvasAdmin($dia_mes, $array_dias) {
        $pieces = explode("-", $array_dias);

        $sqla = "";
        $indice = 1;
        $sqla .= "select  pf10.nomeguerra_pessoafisica, ";

        foreach ($pieces as $pie) {
            $v = ',';
            $sqla .= " CASE WHEN (SELECT COUNT(pf2.nomeguerra_pessoafisica)

                from aes_agenda ag2
                inner join aes_pessoafisica pf2 on pf2.cod_pessoafisica = ag2.cod_pessoafisica
				inner join aes_pessoafisica pf3 on pf3.cod_pessoafisica = ag2.cod_instrutor
                left join aes_aeronaves acft on acft.cod_aeronave = ag2.cod_aeronave
                left join aes_cursos cur on cur.cod_cursomatricula = ag2.cod_cursomatricula
                left join aes_missoes mis on mis.cod_missao = ag2.cod_missao

                where ag2.cod_instrutor = inva.cod_pessoafisica ";

            if (sizeof($pieces) == $indice) {

                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "')  > 0 then(";
            } else {
                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "') > 0 then(";
            }

            $sqla .= "(select concat( '<b>',pf2.nomeguerra_pessoafisica,'</b>', ' - ' ,acft.sigla_acft,'<br>' , '(',cur.cur_sigla, '-', mis.sigla_escala,')',' ','<a href=\"javascript:;\" class=\"btn btn-xs btn-danger glyphicon glyphicon-remove item-delete-voo\" data=\"' ,ag2.cod_agenda, '\"></a>')

                from aes_agenda ag2
                inner join aes_pessoafisica pf2 on pf2.cod_pessoafisica = ag2.cod_pessoafisica
				inner join aes_pessoafisica pf3 on pf3.cod_pessoafisica = ag2.cod_instrutor
                left join aes_aeronaves acft on acft.cod_aeronave = ag2.cod_aeronave
                left join aes_cursos cur on cur.cod_cursomatricula = ag2.cod_cursomatricula
                left join aes_missoes mis on mis.cod_missao = ag2.cod_missao

                where ag2.cod_instrutor = inva.cod_pessoafisica";


            if (sizeof($pieces) == $indice) {

                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "'))else '' end as hora" . $indice . "";
            } else {
                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "')) else '' end as hora" . $indice . "$v";
            }
            $indice++;
        }

        $sqla .=" from aes_instrutores inva
                inner join aes_pessoafisica pf10 on pf10.cod_pessoafisica = inva.cod_pessoafisica order by inva.cod_instrutor";
        $query = $this->db->query($sqla);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function carregaInvasDefault($dia_mes, $array_dias) {
        $pieces = explode("-", $array_dias);

        $sqla = "";
        $indice = 1;
        $sqla .= "select  pf10.nomeguerra_pessoafisica, ";

        foreach ($pieces as $pie) {
            $v = ',';
            $sqla .= " CASE WHEN (SELECT COUNT(pf2.nomeguerra_pessoafisica)

                from aes_agenda ag2
                inner join aes_pessoafisica pf2 on pf2.cod_pessoafisica = ag2.cod_pessoafisica
				inner join aes_pessoafisica pf3 on pf3.cod_pessoafisica = ag2.cod_instrutor
                left join aes_aeronaves acft on acft.cod_aeronave = ag2.cod_aeronave
                left join aes_cursos cur on cur.cod_cursomatricula = ag2.cod_cursomatricula
                left join aes_missoes mis on mis.cod_missao = ag2.cod_missao

                where ag2.cod_instrutor = inva.cod_pessoafisica ";

            if (sizeof($pieces) == $indice) {

                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "')  > 0 then(";
            } else {
                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "') > 0 then(";
            }

            $sqla .= "(select concat( '<b>',pf2.nomeguerra_pessoafisica,'</b>', ' - ' ,acft.sigla_acft,'<br>' , '(',cur.cur_sigla, '-', mis.sigla_escala,')',' ')

                from aes_agenda ag2
                inner join aes_pessoafisica pf2 on pf2.cod_pessoafisica = ag2.cod_pessoafisica
				inner join aes_pessoafisica pf3 on pf3.cod_pessoafisica = ag2.cod_instrutor
                left join aes_aeronaves acft on acft.cod_aeronave = ag2.cod_aeronave
                left join aes_cursos cur on cur.cod_cursomatricula = ag2.cod_cursomatricula
                left join aes_missoes mis on mis.cod_missao = ag2.cod_missao

                where ag2.cod_instrutor = inva.cod_pessoafisica ";


            if (sizeof($pieces) == $indice) {

                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "'))else '' end as hora" . $indice . "";
            } else {
                $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "')) else '' end as hora" . $indice . "$v";
            }
            $indice++;
        }

        $sqla .=" from aes_instrutores inva
                inner join aes_pessoafisica pf10 on pf10.cod_pessoafisica = inva.cod_pessoafisica";
        $query = $this->db->query($sqla);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    /* public function carregaInvas($dia_mes, $array_dias) {
      $pieces = explode("-", $array_dias);

      $sqla = "";
      $indice = 1;
      $sqla .= "select  pf10.nomeguerra_pessoafisica, ";

      foreach ($pieces as $pie) {
      $v = ',';
      $sqla .= " (select concat(acft.sigla_acft , ' - ' , pf2.nomeguerra_pessoafisica, '<br>' , '(',cur.cur_sigla, '-', mis.sigla_escala,')',' ','<a href=\"javascript:;\" class=\"btn btn-xs btn-danger glyphicon glyphicon-remove item-delete-voo\" data=\"' ,ag2.cod_agenda, '\"></a>')

      from aes_agenda ag2
      inner join aes_pessoafisica pf2 on pf2.cod_pessoafisica = ag2.cod_pessoafisica
      inner join aes_pessoafisica pf3 on pf3.cod_pessoafisica = ag2.cod_instrutor
      left join aes_aeronaves acft on acft.cod_aeronave = ag2.cod_aeronave
      left join aes_cursos cur on cur.cod_cursomatricula = ag2.cod_cursomatricula
      left join aes_missoes mis on mis.cod_missao = ag2.cod_missao

      where ag2.cod_instrutor = inva.cod_pessoafisica ";
      if (sizeof($pieces) == $indice) {

      $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "') as hora" . $indice . "";
      } else {
      $sqla .=" and ag2.horario = " . $pie . " and ag2.data ='" . $dia_mes . "') as hora" . $indice . "$v";
      }
      $indice++;
      }

      $sqla .=" from aes_instrutores inva
      inner join aes_pessoafisica pf10 on pf10.cod_pessoafisica = inva.cod_pessoafisica";
      $query = $this->db->query($sqla);
      if ($query->num_rows() > 0) {
      return $query->result();
      } else {
      return null;
      }
      } */
}
