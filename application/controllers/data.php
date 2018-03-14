<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {
	
	
	
	public function addStudent(){
		$name=$_POST['fullname'];
		$father = $_POST['father'];
		$mother = $_POST['mother'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$class = $_POST['class'];
		$school =$_POST['school'];
		$dob = $_POST['date'];
		$gender = $_POST['gender'];
		if(strlen($mobile)==10){
			$sql="INSERT INTO `student_details`(`name`, `father`, `mother`, `address`, `mobile`, `class`,`date`,`gender`, `school`, `isActive`)
			VALUES ('$name','$father','$mother','$address','$mobile','$class','$dob','$gender','$school','1')";
			$query = $this->db->query($sql);
			if($query){
				$this->session->set_userdata('status', "Successfully Added!");
				redirect('home/table');
			}
			else {
				$this->session->set_userdata('status', "Unable To Add!");
				redirect('home/form');
			}
		}
		else {
			$this->session->set_userdata('mobile', "Please Insert 10 digit!");
			redirect('home/form');
		}
		
	}
	public function load_student(){
		$this->load->view('data_fragment/student_data.php');
	}
	
	
	public function edit_student(){
		$this->load->view('edit.php');
	}
	public function update_student(){
		$id = $_POST['hidden_id'];
		$name= $_POST['fullname'];
		$gender=$_POST['gender'];
		$father = $_POST['father'];
		$mother = $_POST['mother'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$class = $_POST['class'];
		$school =$_POST['school'];
		$dob = $_POST['date'];
		
		$sql = "UPDATE `student_details` SET 
				`name`='$name',
				`father`='$father',
				`mother`='$mother',
				`address`='$address',
				`mobile`='$mobile',	
				`class`='$class',
				`date`='$dob',
				`gender`='$gender',
				`school`='$school',
				`isActive`='1'
				WHERE id='$id'";
		$query = $this->db->query($sql);
		if($query){
			$this->session->set_userdata('status', "Successfully Update!");
			redirect('home/table');
		}
		else {
			$this->session->set_userdata('status', "Unable To Update!");
			redirect('home/edit');
		}
	}
	
	public function delete_student(){
		$id =$_GET['id'];
		$sql = "UPDATE `student_details` SET `isActive`='0'
		WHERE id='$id'";
		$query = $this->db->query($sql);
		if($query){
			$this->session->set_userdata('delete', " Delete!");
			redirect('home/table');
		}
	}
	public function login(){
		$user;
		$pass;
		$username= $_POST['username'];
		//echo $username;
		$password= $_POST['password'];
		$sql="SELECT `id`, `username`, `password`, `isActive` FROM `user` WHERE username='$username' AND password='$password'";
		$query = $this->db->query($sql);
		if($query->num_rows>0){
			
				while ($result = mysql_fetch_array($query->result_id)){
					$UID = $result['id'];
					$user = $result['username'];
					$pass = $result['password'];
				}
				$this->session->set_userdata('username',$user);
				$this->session->set_userdata('password', $pass);
				$this->session->set_userdata('uid',$UID);
				$this->session->set_userdata('Login', true);
				
				redirect('home/table');
			
			
		}
		else {
			$this->session->set_userdata('login', " Username or Password incorrect!");
			redirect('home');
		}
		
	}
	public function logout(){
		$this->session->set_userdata('uid', null);
		$this->session->set_userdata('username', null);
		$this->session->set_userdata('password', null);
		$this->session->set_userdata('Login', false);
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */