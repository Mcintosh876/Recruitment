<?php
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $gender = $_POST['gender']; 
    $adress = $_POST['adress'];


    $result = $crud-> editAttendee($id, $fname,$lname,$dob,$email,$contact,$gender,$adress);

    if($result){
        header("Location: viewrecords.php");
    }
    else{
        include 'includes/errormessage.php';
    }
}

else {
    include 'includes/errormessage.php';  echo 'error';

} 





?>