<?php
// servername => localhost
// username => root
// password => empty
// database name => csrc
$conn = mysqli_connect("localhost", "root", "", "csrc");
     
// Check connection
if($conn == false){
die("ERROR: Could not connect. "
      . mysqli_connect_error());
}
         
// Taking values from the form data(input)
$name =  $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$subject =  $_REQUEST['subject'];
$message = $_REQUEST['message'];
         
// Performing insert query execution
// Table name contact
$sql = "INSERT INTO trial VALUES ('$name','$phone','$email','$subject','$message')";
         
if(mysqli_query($conn, $sql)){
echo "<h3>Message sent.";
}
else{
      echo "ERROR: Hush! Sorry $sql."
          . mysqli_error($conn);
}
         
// Close connection
mysqli_close($conn);

$target_dir = "Uploaded/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$docFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
