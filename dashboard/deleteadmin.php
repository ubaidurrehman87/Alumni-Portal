<?php session_start();


$connection = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);

if (!isset($_SESSION['ssemail'])) {
        header("Location: ../index.php");
    }

$idToDel = $_GET['id'];

$sql = "DELETE FROM admin_data WHERE Admin_admin_id=".$idToDel.";";
$sql.="DELETE FROM admin WHERE admin_id=".$idToDel;


 if (!$connection->multi_query($sql)) {
 		mysqli_error($mysqli);
 }
 else{
 	header("Location: information.php");
 }
?>