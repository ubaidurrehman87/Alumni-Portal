<?php include "../classes.php"?>

<?php  $mysqli = new mysqli("localhost", "root", "");?>

<?php

//$adduniversity = new connection;
$name = $_GET['name'];
$email = $_GET['email'];
$university = $_GET['university'];
$address = $_GET['address'];
$sql1 = "CREATE DATABASE ".$university;
$password = 'fadsfasdfa@4!';
//$password = md5($password);
$password = str_shuffle($password);
if (!mysqli_query($mysqli, $sql1)) {
    echo "Database did not CREATE<br>";
} else {
    

// $connect=seter($university);
$mysqli2 = new mysqli("localhost", "root", "",$university);
  $sql='CREATE TABLE Representative(
	    rep_id             	     INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	    user_name                VARCHAR (38) NOT NULL ,
	    email_address            VARCHAR (38) NOT NULL UNIQUE KEY,
	    password                 VARCHAR (100) NOT NULL
			);';
	$sql.='CREATE TABLE Admin
	  (
	    admin_id                 INTEGER NOT NULL ,
	    email_address            VARCHAR (38) NOT NULL UNIQUE KEY,
	    password                 VARCHAR (100) NOT NULL
	  );';
  	$sql.='ALTER TABLE Admin ADD CONSTRAINT Admin_PK PRIMARY KEY AUTO_INCREMENT ( admin_id ) ;';
	$sql.='CREATE TABLE Alumni
  (
    alumni_id                INTEGER NOT NULL ,
    batch                    VARCHAR (38) NOT NULL ,
    email_address            VARCHAR (38) NOT NULL UNIQUE KEY,
    password                 VARCHAR (100) NOT NULL
  ) ;';
	$sql.='ALTER TABLE Alumni ADD CONSTRAINT Alumni_PK PRIMARY KEY AUTO_INCREMENT ( alumni_id ) ;';
	$sql.='CREATE TABLE Approve_to_portal
  (
    alumni_id                INTEGER NOT NULL ,
    password                 VARCHAR (100) NOT NULL ,
    email_address            VARCHAR (20) NOT NULL UNIQUE KEY,
    batch                    VARCHAR (38) NOT NULL
  ) ;';
	$sql.='ALTER TABLE Approve_to_portal ADD CONSTRAINT Approve_to_portal_PK PRIMARY KEY AUTO_INCREMENT ( alumni_id ) ;';
	$sql.='CREATE TABLE Chat_Room
  (
    chat_id       INTEGER NOT NULL ,
    sender_id     INTEGER NOT NULL ,
    sender_name   VARCHAR (38) NOT NULL ,
    reciever_id   INTEGER NOT NULL ,
    receiver_name VARCHAR (38) NOT NULL ,
                  DATETIME DATE NOT NULL
  ) ;';
	$sql.='ALTER TABLE Chat_Room ADD CONSTRAINT Chat_Room_PK PRIMARY KEY AUTO_INCREMENT ( chat_id ) ;';
	$sql.='CREATE TABLE Posts
  (
    post_ID    INTEGER NOT NULL ,
    poster_id  INTEGER NOT NULL ,
    post_title VARCHAR (38) NOT NULL ,
    dateW timestamp NOT NULL ,
    comments   VARCHAR (200) ,
    post_data BLOB
  ) ;';
	$sql.='ALTER TABLE Posts ADD CONSTRAINT Posts_PK PRIMARY KEY AUTO_INCREMENT ( post_ID ) ;';
	$sql.='CREATE TABLE WorkShop
  (
    workshop_id INTEGER NOT NULL ,
    speaker VARCHAR(38) NOT NULL,
    name        VARCHAR (38) NOT NULL UNIQUE KEY,
    venue       VARCHAR (38) NOT NULL ,
    dateW date NOT NULL,
    timeW time NOT NULL,
    description VARCHAR(100) NOT NULL,
    status  ENUM("coming","ongoing","canceled","postponed","done") NOT NULL
  ) ;';
	$sql.='ALTER TABLE WorkShop ADD CONSTRAINT WorkShop_PK PRIMARY KEY AUTO_INCREMENT ( workshop_id ) ;
';
	$sql.='CREATE TABLE admin_data
  (
    id             INTEGER NOT NULL ,
    Admin_admin_id INTEGER NOT NULL ,
    first_name     VARCHAR (38) NOT NULL ,
    last_name      VARCHAR (38) NOT NULL ,
    date_of_birth  DATE NOT NULL ,
    contact_no     VARCHAR (38) ,
    photo BLOB ,
    address VARCHAR (50) NOT NULL
  ) ;';
	$sql.='CREATE UNIQUE INDEX admin_data__IDX ON admin_data
  (
    Admin_admin_id ASC
  )
  ;';
	$sql.='ALTER TABLE admin_data ADD CONSTRAINT admin_data_PK PRIMARY KEY AUTO_INCREMENT ( id ) ;';
	$sql.='CREATE TABLE alumni_data
  (
    id               INTEGER NOT NULL ,
    Alumni_alumni_id INTEGER NOT NULL ,
    first_name       VARCHAR (38) NOT NULL ,
    last_name        VARCHAR (38) NOT NULL ,
    date_of_birth    DATE NOT NULL ,
    contact_no       VARCHAR (38) ,
    photo BLOB ,
    address VARCHAR (50) NOT NULL
  ) ;';
	$sql.='CREATE UNIQUE INDEX alumni_data__IDX ON alumni_data
  (
    Alumni_alumni_id ASC
  )
  ;';
	$sql.='CREATE UNIQUE INDEX alumni_data__IDXv1 ON alumni_data
  (
    Alumni_alumni_id ASC
  )
  ;';
	$sql.='ALTER TABLE alumni_data ADD CONSTRAINT alumni_data_PK PRIMARY KEY AUTO_INCREMENT ( id ) ;';
	$sql.='CREATE TABLE approval_data
  (
    id            INTEGER NOT NULL ,
    first_name    VARCHAR (38) NOT NULL ,
    last_name     VARCHAR (38) NOT NULL ,
    date_of_birth DATE NOT NULL ,
    contact_no    VARCHAR (38) ,
    photo BLOB ,
    address                     VARCHAR (50) NOT NULL ,
    Approve_to_portal_alumni_id INTEGER NOT NULL
  ) ;';
	$sql.='CREATE UNIQUE INDEX approval_data__IDX ON approval_data
  (
    Approve_to_portal_alumni_id ASC
  )
  ;';

	$sql.='CREATE UNIQUE INDEX approval_data__IDXv1 ON approval_data
  (
    Approve_to_portal_alumni_id ASC
  )
  ;';
	$sql.='ALTER TABLE approval_data ADD CONSTRAINT approval_data_PK PRIMARY KEY AUTO_INCREMENT ( id ) ;';

	$sql.='CREATE TABLE documents
  (
    file_id     INTEGER NOT NULL ,
    file_type   VARCHAR (25) NOT NULL ,
    sender_id   INTEGER NOT NULL ,
    reciever_id INTEGER NOT NULL ,
    file BLOB NOT NULL
  ) ;';
	$sql.='ALTER TABLE documents ADD CONSTRAINT documents_PK PRIMARY KEY AUTO_INCREMENT ( file_id ) ;';
	$sql.='CREATE TABLE registered
  (
    registered_id        INTEGER NOT NULL ,
    WorkShop_workshop_id INTEGER NOT NULL ,
    Alumni_alumni_id     INTEGER NOT NULL
  ) ;';
	$sql.='ALTER TABLE registered ADD CONSTRAINT registered_PK PRIMARY KEY AUTO_INCREMENT ( registered_id ) ;';
	$sql.='ALTER TABLE admin_data ADD CONSTRAINT admin_data_Admin_FK FOREIGN KEY ( Admin_admin_id ) REFERENCES Admin ( admin_id ) ;';
	$sql.='ALTER TABLE alumni_data ADD CONSTRAINT alumni_data_Alumni_FK FOREIGN KEY ( Alumni_alumni_id ) REFERENCES Alumni ( alumni_id ) ;';
	$sql.='ALTER TABLE approval_data ADD CONSTRAINT approval_to_portal_FK FOREIGN KEY ( Approve_to_portal_alumni_id ) REFERENCES Approve_to_portal ( alumni_id ) ;';
	$sql.='ALTER TABLE registered ADD CONSTRAINT registered_Alumni_FK FOREIGN KEY ( Alumni_alumni_id ) REFERENCES Alumni ( alumni_id ) ;';
	$sql.='ALTER TABLE registered ADD CONSTRAINT registered_WorkShop_FK FOREIGN KEY ( WorkShop_workshop_id ) REFERENCES WorkShop ( workshop_id ) ;';
  $sql.="INSERT INTO representative values(1,'".$name."','".$email."','".md5($password)."')";
  $mysqli3 = mysqli_connect("localhost", "root", "","university"); 
  $sqluni="INSERT INTO uninames(name) values('".$university."')";
  $data = mysqli_query($mysqli3,$sqluni);
    

if ((!$mysqli2->multi_query($sql))) {
	
    echo "<script>alert('Query did not execute!')</script>";
    echo mysqli_error($mysqli2);  
  
  

} else {
    echo "<script>alert('University has been successfully registered!');</script>";

}
}

	echo "<a href='senddetails.php?uni=".$university."&email=".$email."&pass=".$password."'>Send login details Login Details(Mandatory)!</a>";

?>