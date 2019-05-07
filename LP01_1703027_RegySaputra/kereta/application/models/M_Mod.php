<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mod extends CI_Model {

    public function lj_lokomotif_kursi()
    {
      $hasil=$this->db->query("SELECT lokomotif.kd_kereta,nama,kd_kursi,kd_gerbong from lokomotif left join kursi on lokomotif.kd_kereta=kursi.kd_kereta");

      return $hasil;
    }

    public function rj_kursi_gerbong()
    {
      $hasil=$this->db->query("SELECT kursi.kd_kursi,kursi.kd_gerbong,kursi.kd_kereta,nama from kursi right join gerbong on kursi.kd_gerbong = gerbong.kd_gerbong");

      return $hasil;
    }

    public function ij_lokomotif_kursi_gerbong()
    {
      $hasil=$this->db->query("SELECT lokomotif.kd_kereta,lokomotif.nama,kd_kursi,gerbong.kd_gerbong,gerbong.nama from lokomotif inner join kursi on lokomotif.kd_kereta=kursi.kd_kereta inner join gerbong on kursi.kd_gerbong = gerbong.kd_gerbong");

      return $hasil;
    }

}
