<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
			$this->load->view('login.php');
		
	}
	public function access(){
		$this->load->view('index.html');
	}
	
	public function calendar(){
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('calendar.php');
		}
		else {
			redirect(base_url().'home/access');
		}
	}
	
	public function form(){
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('forms.php');
		}
		//$this->load->view('forms.php');
		else {
			redirect(base_url().'home/access');
		}
	}
	public function landing(){
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('home');
		}
		else {
			redirect(base_url().'home/access');
		}
	}
	
	public function table(){
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('tables.php');
		}
		else {
			redirect(base_url().'home/access');
		}
	}
	public function edit(){
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('edit.php');
		}
		else {
			redirect(base_url().'home/access');
		}
	}
	public function payment(){
		
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('payment.php');
		}
		else {
			redirect(base_url().'home/access');
		}
	}
	public function viewtab(){
		
		$uid=$this->session->userdata('uid');
		$sql = "Select * from user Where id='$uid'";
		$query=$this->db->query($sql);
		if($query->num_rows>0){
			$this->load->view('tableview.php');
		}
		else {
			redirect(base_url().'home/access');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */