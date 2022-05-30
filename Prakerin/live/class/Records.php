<?php
class Records {

	private $recordsTable = 'tstudent';
	public $id;
    public $name;
    public $alamat;
	public $kelas;
	public $jurusan;
	public $nis;
	private $conn;

	public function __construct($db){
        $this->conn = $db;
    }

	public function listRecords(){

		$sqlQuery = "SELECT * FROM ".$this->recordsTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR jurusan LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR kelas LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR alamat LIKE "%'.$_POST["search"]["value"].'%") ';
		}

		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id ASC ';
		}

		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();

		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordsTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;

		$displayRecords = $result->num_rows;
		$records = array();
		while ($record = $result->fetch_assoc()) {
			$rows = array();
			$rows[] = $record['id'];
			$rows[] = $record['nis'];
			$rows[] = $record['name'];
			$rows[] = $record['alamat'];
			$rows[] = $record['kelas'];
			$rows[] = $record['jurusan'];
			$rows[] = '<button type="button" name="update" id="'.$record["id"].'" class="btn btn-warning btn-xs update">Update</button>';
			$rows[] = '<button type="button" name="delete" id="'.$record["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$records[] = $rows;
		}

		$output = array(
			"draw"	=>	intval($_POST["draw"]),
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$records
		);

		echo json_encode($output);
	}

	public function getRecord(){
		if($this->id) {
			$sqlQuery = "
				SELECT * FROM ".$this->recordsTable."
				WHERE id = ?";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);
			$stmt->execute();
			$result = $stmt->get_result();
			$record = $result->fetch_assoc();
			echo json_encode($record);
		}
	}
	public function updateRecord(){

		if($this->id) {

			$stmt = $this->conn->prepare("
			UPDATE ".$this->recordsTable."
			SET name= ?, nis = ?, alamat = ?, kelas = ?, jurusan = ?
			WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->nis = htmlspecialchars(strip_tags($this->nis));
			$this->alamat = htmlspecialchars(strip_tags($this->alamat));
			$this->kelas = htmlspecialchars(strip_tags($this->kelas));
			$this->jurusan = htmlspecialchars(strip_tags($this->jurusan));


			$stmt->bind_param("sisssi", $this->name, $this->nis, $this->alamat, $this->kelas, $this->jurusan, $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}
	public function addRecord(){

		if($this->name) {

			$stmt = $this->conn->prepare("
			INSERT INTO ".$this->recordsTable."(`name`, `nis`, `alamat`, `kelas`, `jurusan`)
			VALUES(?,?,?,?,?)");

			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->nis = htmlspecialchars(strip_tags($this->nis));
			$this->alamat = htmlspecialchars(strip_tags($this->alamat));
			$this->kelas = htmlspecialchars(strip_tags($this->kelas));
			$this->jurusan = htmlspecialchars(strip_tags($this->jurusan));


			$stmt->bind_param("sisss", $this->name, $this->nis, $this->alamat, $this->kelas, $this->jurusan);

			if($stmt->execute()){
				return true;
			}
		}
	}
	public function deleteRecord(){
		if($this->id) {

			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->recordsTable."
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}
}
?>