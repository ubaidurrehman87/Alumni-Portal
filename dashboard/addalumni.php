<?php session_start(); 

include "../classes.php";

$connection = new mysqli("localhost","root","",$_SESSION['ssuniversity']);
if (!isset($_SESSION['ssemail'])) {
        header("Location: ../index.php");
    }


$idToAdd = $_GET['id'];


 $selection = "SELECT * FROM approve_to_portal,approval_data WHERE approve_to_portal.alumni_id=approval_data.approve_to_portal_alumni_id AND approve_to_portal.alumni_id=".$idToAdd;
 	
 	$data = mysqli_query($connection,$selection);

 		if (mysqli_num_rows($data) > 0 ) {

			
			while($rowdata = mysqli_fetch_assoc($data)){
				
                  $fname = $rowdata['first_name'];
                  $lname = $rowdata['last_name'];
                  $email = $rowdata['email_address'];
                  $contact = $rowdata['contact_no'];
                  $pass = $rowdata['password'];
                  $batch = $rowdata['batch'];
                  $dob = $rowdata['date_of_birth'];
                  $address = $rowdata['address'];
                  $alumni = new alumni();
                  $alumni->addalumni($fname,$lname,$email,$contact,$pass,$batch,$dob,$address,$idToAdd);
			}
		}
				header("Location: requests.php");
?>