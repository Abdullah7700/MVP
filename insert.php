<?php

$link = mysqli_connect("localhost", "root", "", "mvp-test1");
if($link == false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Name = mysqli_real_escape_string($link, $_POST['Name']);
$Email = mysqli_real_escape_string($link, $_POST['Email']);
$Contact = mysqli_real_escape_string($link, $_POST['Contact']);
$Probtype = mysqli_real_escape_string($link, $_POST['Probtype']);
$Price = mysqli_real_escape_string($link, $_POST['Price']);
$Detail = mysqli_real_escape_string($link, $_POST['Detail']);
$Feedback = mysqli_real_escape_string($link, $_POST['Feedback']);

$sql = "INSERT INTO centre (Name, Email, Contact, Probtype, Price, Detail, Feedback) VALUES ('$Name', '$Email', '$Contact', '$Probtype', '$Price', '$Detail', '$Feedback')";

if(mysqli_query($link, $sql)){
   echo "Data successfully saved.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);

?>
