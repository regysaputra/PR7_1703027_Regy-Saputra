<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function  __construct(){
		parent:: __construct();
		$this->load->model('M_Mod');
	}

	public function index()
	{
		$data1['tb_lj']=$this->M_Mod->lj_lokomotif_kursi()->result();
		$this->load->view('welcome_message',$data1);
	}

	public function index1()
	{
		$data1['tb_rj']=$this->M_Mod->lj_lokomotif_kursi()->result();
		// $data2['tb_rj']=$this->M_Mod->rj_kursi_gerbong()->result();
		// $data3['tb_ij']=$this->M_Mod->ij_lokomotif_kursi_gerbong()->result();
		$this->load->view('Right_Join',$data1);
	}

	public function index2()
	{
		$data1['tb_ij']=$this->M_Mod->ij_lokomotif_kursi_gerbong()->result();
		// $data2['tb_rj']=$this->M_Mod->rj_kursi_gerbong()->result();
		// $data3['tb_ij']=$this->M_Mod->ij_lokomotif_kursi_gerbong()->result();
		$this->load->view('Inner_Join',$data1);
	}
}
