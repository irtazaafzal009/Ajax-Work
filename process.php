<?php
$con = mysqli_connect('localhost','root','','ajax');
echo "Processing...";

if(isset($_POST['name'])){
    echo "in method";
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $query = "INSERT INTO users(name) VALUES ('$name')";

    if(mysqli_query($con,$query)){
        echo "User Added";
    }else{
        echo "ERROR ".mysqli_error($con);
    }
}
if(isset($_GET['name'])){
    echo "GET: Your name is" . $_GET['name'];
}