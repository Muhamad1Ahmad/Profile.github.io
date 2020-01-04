<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['email']);
$email = mysqli_real_escape_string($link, $_REQUEST['comment']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (name, email, comment) VALUES ('$first_name', '$email_name', 'comment')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>