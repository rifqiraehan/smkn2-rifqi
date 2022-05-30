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
	}}
?>