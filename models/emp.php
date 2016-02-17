<?php 
class Emp_model extends BaseModel{
	private $database;
	public function __construct(){
		parent::__construct();
	}

	public function get_emp_data($arr){
		$this->database=$this->load->library('DB');
		$sql="SELECT * FROM emp_master";
		$stmt=DB_library::$conn->prepare($sql);
		try{
			$res=$this->database->get_data($stmt);
		}catch(PDOException $e){
			echo "Error:".$e->getMessage();
		}
		return $res;
	}
}