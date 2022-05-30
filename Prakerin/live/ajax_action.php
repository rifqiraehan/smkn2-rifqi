<?php
include_once 'config/Database.php';
include_once 'class/Records.php';

$database = new Database();
$db = $database->getConnection();

$record = new Records($db);

if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
if(!empty($_POST['action']) && $_POST['action'] == 'addRecord') {
	$record->name = $_POST["name"];
    $record->nis = $_POST["nis"];
    $record->alamat = $_POST["alamat"];
	$record->kelas = $_POST["kelas"];
	$record->jurusan = $_POST["jurusan"];
	$record->addRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'getRecord') {
	$record->id = $_POST["id"];
	$record->getRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'updateRecord') {
	$record->id = $_POST["id"];
	$record->name = $_POST["name"];
    $record->nis = $_POST["nis"];
    $record->alamat = $_POST["alamat"];
	$record->kelas = $_POST["kelas"];
	$record->jurusan = $_POST["jurusan"];
	$record->updateRecord();
}
if(!empty($_POST['action']) && $_POST['action'] == 'deleteRecord') {
	$record->id = $_POST["id"];
	$record->deleteRecord();
}
?>