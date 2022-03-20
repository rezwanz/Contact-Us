<?php
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$Email=$_POST['email'];
$Message=$_POST['message'];

echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $Email;
echo "<br>";
echo $Message;
echo "<br>";

$link = mysqli_connect("localhost","root","","contact");

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
$sql = "INSERT INTO contactus(FirstName,Lastname,Emailaddress,Yourmessage) VALUES ('$fname','$lname','$Email','$Message')";
if(mysqli_query($link,$sql)){
    echo "Records added successfully.";
  } 
   else{
        echo "Error: Could not able to execute $sql. " . mysqli_error($link);
    }


?>