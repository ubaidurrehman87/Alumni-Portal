<?php session_start();

$connection = new mysqli("localhost","root","",$_SESSION['ssuniversity']);
if (!isset($_SESSION['ssemail'])) {
        header("Location: ../index.php");
    }


$idToDel = $_GET['id'];

$sql = "DELETE FROM approval_data WHERE Approve_to_portal_alumni_id=".$idToDel.";";
$sql.="DELETE FROM approve_to_portal WHERE alumni_id=".$idToDel;


print_r($sql);

 if (!$connection->multi_query($sql)) {
 		mysqli_error($connection);
 }
 else{
 	header("Location: requests.php");
 }
?>