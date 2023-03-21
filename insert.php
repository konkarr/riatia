<?php

 // servername => localhost
 // username => root
 // password => empty
 // database name => staff
 $conn = new mysqli('localhost', 'root', '', 'forms');
 // Taking all 5 values from the form data(input)
 $Clinic_Name = $_POST['Clinic_Name'];
 $Clinic_Adress = $_POST['Clinic_Adress'];
 $Contact_Name = $_POST['Contact_Name'];
 $Contact_Email = $_POST['Contact_Email'];
 $Your_Desired_Service = $_POST['Your_Desired_Service'];
 $Clinics_Online_Presence = $_POST['Clinics_Online_Presence'];

 // Check db connection
 if($conn->connect_error){
     die('ERROR: connection failed ' .$conn->connect_error);
 }
 else {
     $stmt = $conn->prepare("insert into clinic(Clinic_Name , Clinic_Adress, Contact_Name, Contact_Email, Your_Desired_Service, Clinics_Online_Presence)
     values(?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssss", $Clinic_Name , $Clinic_Adress,  $Contact_Name,  $Contact_Email,  $Your_Desired_Service, $Clinics_Online_Presence );
     $stmt->execute();
     $stmt-> close();
 }
 ?>
