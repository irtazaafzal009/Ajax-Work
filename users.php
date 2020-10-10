<?php
$con = mysqli_connect('localhost','root','','ajax');
$query ='SELECT * FROM users';
$result = mysqli_query($con, $query);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($users);
?>