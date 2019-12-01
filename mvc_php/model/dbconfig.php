<?php 
class database{
	private $hostname='localhost';
	private $username='root';
	private $pass='';
	private $dbname='duan1';

	private $conn= null;
	private $resurt=null;

	public function connect(){
		$this->conn=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
		if (!$this->conn) {
		echo "ket noi that bai";
		exit();	
		}
		else{
			mysqli_set_charset($this->conn,'utf8');
		}
		return $this->conn;
	}

	public function execute($sql){
		$this->resurt=$this->conn->quyery($sql);
		return $this->resurt;
	}

	public function getdata(){
		if ($this->resurt) {
			$data= mysqli_fetch_array($this->resurt);
		}
		else{
			$data=0;
		}
		return $data;
	}

	public function getalldata(){
		if (!$this->resurt) {
			$data=0;
		}
		else{
			while($datas=$this->getdata()){
				$data[]=$datas;
			}
		}
		return $data;
	}

	//phuong thuc dem so ban ghi
	

	//phuong thuc them du lieu
	public function insertdata($tendm){
		$sql= "insert into danhmuc(iddm,tendm) values(null,'$tendm')";
		return $this->execute($sql); 
	}

	//phuong thuc sua du lieu
	public function updatedata($iddm,$tendm){
		$sql= "update danhmuc set tendm='$tendm' where iddm='$iddm'";
		return $this->execute($sql); 
	}
	// xoa du lieu
	public function dete($iddm){
		$sql="DELETE FROM danhmuc WHERE iddm='$iddm'";
		return $this->execute($sql); 
	}
}


?>