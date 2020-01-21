<?php
    

    $ItemCode =filter_input(INPUT_POST,'code');
    $name =filter_input(INPUT_POST,'name');
    $size=filter_input(INPUT_POST,'size');    
    $number=filter_input(INPUT_POST,'t-number');
    $email=filter_input(INPUT_POST,'email');
    $address = filter_input(INPUT_POST,'address');
    $message=filter_input(INPUT_POST,'comment');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";

    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO web (Itemcode,name,size,number,email,address,message) 
   
values('$ItemCode','$name','$size',' $number',' $email',' $address',' $message')";

if ($conn->query($sql) === TRUE) {
    echo "we will confirm your appointment as soon as possible";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>