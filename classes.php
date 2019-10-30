<?php include "connection/index.php"; ?>
<?php

class connection{
	public $connect;


	public function setter($university){
		$this->connect = new mysqli("localhost","root","",$university); 
	}
	public function getter(){
		return $connect;
	}
}

class alumni{
	public $name;
	public $alumni_id;
	public $uni_id;
	public $contact_info;
	public $photo;
	public $address;
	public $username;
	public $batch;


	function requests(){

		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$query = "SELECT count(*) AS COUNT FROM approval_data";
		$data  = mysqli_query($connect,$query);
		$counter = mysqli_fetch_assoc($data);
		echo $counter['COUNT'];
	}

	public function display(){
		
		
		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$query = "SELECT * FROM alumni,alumni_data WHERE alumni.alumni_id=alumni_data.Alumni_alumni_id";
		$data  = mysqli_query($connect,$query);

		if (mysqli_num_rows($data) > 0 ) {

			
			while($rowdata = mysqli_fetch_assoc($data)){
				if ($_SESSION['ssrole']== 'Alumni') {
					echo "<tr>
                  <td>".$rowdata['alumni_id']."</td>
                  <td>".$rowdata['first_name']." ".$rowdata['last_name']."</td>
                  <td>".$rowdata['email_address']."</td>
                  <td>".$rowdata['contact_no']."</td>
                  <td>".$rowdata['batch']."</td>
                  
            </tr>";
				}
				else{
					echo "<tr>
                  <td>".$rowdata['alumni_id']."</td>
                  <td>".$rowdata['first_name']." ".$rowdata['last_name']."</td>
                  <td>".$rowdata['email_address']."</td>
                  <td>".$rowdata['contact_no']."</td>
                  <td>".$rowdata['batch']."</td>
                  <td style='text-align:center;'>
                  	<a onclick='confirm_deletion(".$rowdata['alumni_id'].")'> <i class='fa fa-trash'></i></a> 
                  	<a href='edit-alumni.php?id=".$rowdata['alumni_id']."' > <i class='fa fa-edit'></i></a> 
                  	<a href='share-alumni.php?id=".$rowdata['password']."' > <i class='fas fa-share'></i></a> 
                  	</td>
            </tr>";
				}
			}
		}
		else{
			echo "<div align='center' style='font-family:Calibri;color:#006DF0;' class='container'><h1>No Alumni Signed up yet!</h1></div><br>";
		}
	}
	public function addalumni($fname,$lname,$email,$contact,$pass,$batch,$dob,$address,$idtoDel){

	    
		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$countrows = "SELECT MAX(alumni_id) AS COUNT from alumni";
	    $rows = mysqli_query($connect,$countrows);
	    $rows = mysqli_fetch_assoc($rows);

	    $addalumni = "INSERT INTO alumni(alumni_id,batch,email_address,password) VALUES(".($rows['COUNT']+1).",'".$batch."','".$email."','".$pass."');";
	    $addalumni.= "INSERT INTO alumni_data(id,Alumni_alumni_id,first_name,last_name,date_of_birth,contact_no,photo,address) VALUES(".($rows['COUNT']+1).",".($rows['COUNT']+1).",'".$fname."','".$lname."','".$dob."','".$contact."','','".$address."');";
	    $addalumni.="DELETE FROM approval_data WHERE Approve_to_portal_alumni_id=".$idtoDel.";";
	    $addalumni.="DELETE FROM approve_to_portal where alumni_id=".$idtoDel;
	    // print_r($addalumni);
	    // exit();
	    if (!$connect->multi_query($addalumni)) {
	        echo "<script>alert('Sorry.Error encountered while adding Alumni.');</script>";
	    }
	    else{
	        echo "<script>alert('Alumni approved Successfully!!');</script>";
	    }
	    
	}


	public function display_approve(){
		
		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);

		$query = "SELECT * FROM approve_to_portal,approval_data WHERE approve_to_portal.alumni_id=approval_data.approve_to_portal_alumni_id";
		$data  = mysqli_query($connect,$query);

		if (mysqli_num_rows($data) > 0 ) {

			
			while($rowdata = mysqli_fetch_assoc($data)){
				echo "<tr>
                  <td>".$rowdata['alumni_id']."</td>
                  <td>".$rowdata['first_name']." ".$rowdata['last_name']."</td>
                  <td>".$rowdata['email_address']."</td>
                  <td>".$rowdata['contact_no']."</td>
                  <td>".$rowdata['batch']."</td>
                  <td style='text-align:center;'>
                  	<a onclick='confirm_deletion(".$rowdata['alumni_id'].")'> <i class='fa fa-trash'> </i></a> 
                  	<a href='addalumni.php?id=".$rowdata['alumni_id']."' > <i class='fa fa-check-circle'> </i> </a> 
                  	</td>
            </tr>";
			}
		}
		else{
			echo "<div align='center' style='font-family:Calibri;color:#006DF0;' class='container'><h1>No new requests, Enjoy!</h1></div><br>";
		}
	}

}
class admin{


	public function display(){
		
		$class = "style='visibility:hidden;'";
		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$query = "SELECT * FROM admin,admin_data WHERE admin.admin_id=admin_data.Admin_admin_id";
		$data  = mysqli_query($connect,$query);

		if (mysqli_num_rows($data) > 0 ) {


			while($rowdata = mysqli_fetch_assoc($data)){
				
				if ($_SESSION['ssrole']=='Admin' || $_SESSION['ssrole']=='Alumni') { 
					echo "<tr>
                  		<td>".$rowdata['admin_id']."</td>
                  		<td>".$rowdata['first_name']." ".$rowdata['last_name']."</td>
                  		<td>".$rowdata['email_address']."</td>
                  		<td>".$rowdata['contact_no']."</td></tr>";

				}
				else{
					echo "<tr>
                  		<td>".$rowdata['admin_id']."</td>
                  		<td>".$rowdata['first_name']." ".$rowdata['last_name']."</td>
                  		<td>".$rowdata['email_address']."</td>
                  		<td>".$rowdata['contact_no']."</td>
                  
                  		<td style='text-align:center;'>
                  		<a onclick='confirm_deletion(".$rowdata['admin_id'].")'> <i class='fa fa-trash'></i></a> 
                  		<a  > <i class='fa fa-edit'></i></a> 
                  		</td>
            			</tr>";					
				}

			}
		}
	}
	public function addadmins($fname,$lname,$dob,$email,$password,$contact,$address){

		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$countrows1= "SELECT MAX(admin_id) AS COUNT1 from admin;";
		$countrows2= "SELECT MAX(id) AS COUNT2 from admin_data";
		
	    $rows = mysqli_query($connect,$countrows1);
	    $rows2 = mysqli_query($connect,$countrows2);
	    $rows = mysqli_fetch_assoc($rows);
	    $rows2 = mysqli_fetch_assoc($rows2);
	    
	    $addadmins= "INSERT INTO admin(admin_id,email_address,password) VALUES(".($rows['COUNT1']+1).",'".$email."','".$password."');";
	    $addadmins.= "INSERT INTO admin_data(id,Admin_admin_id,first_name,last_name,date_of_birth,contact_no,photo,address) VALUES(".($rows2['COUNT2']+1).",".($rows['COUNT1']+1).",'".$fname."','".$lname."','".$dob."','".$contact."','','".$address."')";
	    // print_r($addadmins1);
	    // print_r($addadmins2);
	    // exit();

	    if (!$connect->multi_query($addadmins)) {
	        echo "<script>alert('Sorry.Error encountered while adding Admin.');</script>";
	    }
	    else{
	        echo "<script>alert('Admin added Successfully!!');</script>";
	    }
	}


}
class representative{

}


class workshop{
	public $workshop_name;
	public $speaker;
	public $venue;
	private $date;
	private $Time;
	public $description;
	public $status;

	public function addWorkshop($workshop_name,$speaker,$venue,$date,$time,$description){

		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$countrows = "SELECT MAX(workshop_id) AS COUNT from workshop";
	    $rows = mysqli_query($connect,$countrows);
	    $rows = mysqli_fetch_assoc($rows);

	    $addWorkshop = "INSERT INTO workshop(workshop_id,speaker,name,venue,dateW,timeW,description,status) VALUES(".($rows['COUNT']+1).",'".$speaker."','".$workshop_name."','".$venue."','".$date."','".$time."','".$description."','coming')";
	      // echo $addWorkshop;
	      // exit();
	    if (!mysqli_query($connect,$addWorkshop)) {
	        
	        echo "<script>alert('Sorry.Error encountered while adding wokrshop.');</script>";
	    }
	    else{
	        echo "<script>alert('Workshop added Successfully!!');</script>";
	    }
	}
	public function dislpayworkshops(){
		
		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$query = "SELECT * FROM workshop";
		$data  = mysqli_query($connect,$query);

	    echo '<div class="contacts-area mg-b-15">
	            <div class="container-fluid">
	                <div class="row">';
	                $counter= 1;
	    if (mysqli_num_rows($data) > 0) {
	        while($row = mysqli_fetch_assoc($data)){
	           
	            echo'<div id="single-workshop" class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
	                            <div class="panel-body custom-panel-jw">
	                                
	                                <img alt="Workshop" class="img-circle m-b" style="height:100px; width:100px;" src="img/contact/work.jpg">
	                                <h3><a href="">'.$row['name'].'</a></h3>
	                                <p class="all-pro-ad">'.$row['venue'].'</p>
	                                <p>By : '.$row['speaker'].'</p>
	                                <a type="button" class="" data-toggle="modal" style="cursor:pointer; text-decoration:underline;" data-target="#Modal'.$counter.'">View Details</a>
	                                <br>
	                                <br>
	                            </div>
	                            <div class="panel-footer contact-footer">
	                                <div class="professor-stds-int" >
	                                    
	                                    <div class="professor-stds" style="margin:10px;">
	                                        <div class="contact-stat"><span>Attendees: </span> <strong> 50 </strong></div>
	                                    </div>
	                                    <div class="professor-stds" style="margin:10px;">
	                                        <div class="contact-stat"><span>Applicants: </span> <strong> 55 </strong></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="modal fade" id="Modal'.$counter.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                    <div class="modal-dialog" role="document">
	                        <div class="modal-content">
	                        <div class="modal-header">
	                            <h5 class="modal-title" id="exampleModalLabel">'.$row['name'].'</h5>
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                            <span aria-hidden="true">&times;</span>
	                            </button>
	                        </div>
	                        <div class="modal-body">

	                            <table>
	                                <tr>
	                                    <th><b>Speaker:</b><p>'.$row['speaker'].'</p></th>
	                                </tr>
	                                <tr>
	                                    <th><b>Number of Applicants: </b><p>55</p></th>
	                                </tr>
	                                <tr>
	                                    <th><b>Date & Time : </b><p>'.$row['dateW'].' '.$row['timeW'].'</p></th>
	                                </tr>
	                                <tr>
	                                    <th><b>Number of Attendees:</b><p>50</p></th>
	                                </tr>
	                               
	                                <tr>
	                                    <th><b>Status:&nbsp;</b><p>'.$row['status'].'</p></th>
	                                </tr>
	                                <tr>
	                                    <th><b>Description:&nbsp;</b></th>
	                                </tr>
	                                <tr>
	                                    <td>'.$row['description'].'</td>
	                                </tr>
	                            </table>
	                        </div>
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                        </div>
	                        </div>
	                    </div>
	                    </div>';
	                    $counter++;
	        }
	        echo '  </div></div></div>';
	    }
	    else{
	    	echo "<div align='center' style='margin-top:200px;font-family:Calibri;color:#006DF0;' class='container'><h1>No workshops to Show!</h1></div>";
	    }
	    
		}



}


class chatRoom{
	public $sender_id;
	public $senderP_name;
	public $reciever_id;
	public $reciever_name;
	public $dateTime;
	private $message;
}

class approveToPortal{

}

class university{
	

	public function display(){

		$con = mysqli_connect("localhost","root","","university");
		$query = "SELECT * FROM uninames";
		$data  = mysqli_query($con,$query);

		if (mysqli_num_rows($data) > 0 ) {

			
			while($rowdata = mysqli_fetch_assoc($data)){
				echo "<option>".$rowdata['name']."</option>";
			}
		}

	}
}

class documents{

}

class comments{
	public $comment_id;
	public $comment;
	public $commenter;
}

class posts{
	public $post_id;
	public $post_description;
	public $post_data;
	


	public function addpost($title,$comments,$poster){
		$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$countrows = "SELECT MAX(post_id) AS COUNT from posts";
	    $rows = mysqli_query($connect,$countrows);
	    $rows = mysqli_fetch_assoc($rows);

	    $addpost = "INSERT INTO posts(post_id,poster,post_title,comments) VALUES(".($rows['COUNT']+1).",'".$poster."','".$title."','".$comments."')";

	    if (!mysqli_query($connect,$addpost)) {
	    	echo "<script>alert('Sorry, Error encountere adding Post!');</script>";
	    }
	    else{
	    	echo "<script>alert('Post added Successfully!');</script>";
	    }
	    header("location: all-posts.php");
	}

	public function displayposts(){

	$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
		$query = "SELECT * FROM posts";
		$data  = mysqli_query($connect,$query);

	    echo '<div class="contacts-area mg-b-15">
	            <div class="container-fluid">
	                <div class="row">';
	                $counter= 1;
	    if (mysqli_num_rows($data) > 0) {
	        while($row = mysqli_fetch_assoc($data)){
	           
	            echo'<div id="single-workshop" class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
	                            <div class="panel-body custom-panel-jw">
	                                
	                                <img alt="Workshop" class="img-circle m-b" style="height:100px; width:100px;" src="img/contact/work.jpg">
	                                <h3><a href="">'.$row['post_title'].'</a></h3>
	                                <p class="all-pro-ad">'.$row['dateW'].'</p>
	                                <p></p>
	                                <a type="button" class="" data-toggle="modal" style="cursor:pointer; text-decoration:underline;" data-target="#Modal'.$counter.'">View Details</a>
	                                <br>
	                                <br>
	                            </div>
	                            <div class="panel-footer contact-footer">
	                                <div class="professor-stds-int" >
	                                    
	                                    
	                                    <div class="professor-stds" style="margin:10px;">
	                                        <div class="contact-stat"><span>comments: </span> <strong> None </strong></div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="modal fade" id="Modal'.$counter.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                    <div class="modal-dialog" role="document">
	                        <div class="modal-content">
	                        <div class="modal-header">
	                            <h5 class="modal-title" id="exampleModalLabel">'.$row['post_title'].'</h5>
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                            <span aria-hidden="true">&times;</span>
	                            </button>
	                        </div>
	                        <div class="modal-body">

	                            <table>
	                                <tr>
	                                    <th><b>Added By:</b><p>'.ucfirst($row['poster']).'</p></th>
	                                </tr>
	                                
	                                <tr>
	                                    <th><b>Date & Time : </b><p>'.$row['dateW'].'</p></th>
	                                </tr>
	                                <tr>
	                                    
	                                </tr>
	                               
	                                <tr>
	                                    <th><b>Image(Optional):&nbsp;</b><p>'.$row['post_data'].'</p></th>
	                                </tr>
	                                <tr>
	                                    <th><b>Description:&nbsp;</b><p>'.$row['comments'].'</p></th>
	                                </tr>
	                                <tr>
	                                    <td></td>
	                                </tr>
	                            </table>
	                        </div>
	                        <div class="modal-footer">
	                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                        </div>
	                        </div>
	                    </div>
	                    </div>';
	                    $counter++;
	        }
	        echo '  </div></div></div>';
	    }
	    else{
	    	echo "<div align='center' style='margin-top:200px;font-family:Calibri;color:#006DF0;' class='container'><h1>No posts to Show!</h1></div>";
	    }
	    
		}	
}

?>
<style type="text/css">


.req{
	color:white;
	padding: 5px;
	background:#006DF0;
	border-radius:10px;
}



</style>