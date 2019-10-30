<?php session_start();

$connection = new mysqli("localhost","root","",$_SESSION['ssuniversity']);

if (!isset($_SESSION['ssemail'])) {
        header("Location: ../index.php");
}

$idToDel = $_GET['id'];

$sql = "DELETE FROM alumni_data WHERE Alumni_alumni_id=".$idToDel.";";
$sql.="DELETE FROM alumni WHERE alumni_id=".$idToDel;

// print_r($sql);
// exit();


 if (!$connection->multi_query($sql)) {
 		
 }
 else{
 	header("Location: all-alumni.php");
 }
?>