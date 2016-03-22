<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
    header("location: index.html");
    exit();
}
$session_id=$_SESSION['id'];
$user_query = $conn->query("select * from members where member_id = '$session_id'");
$user_row = $user_query->fetch();
$name = $user_row['firstname']." ".$user_row['middlename']." ".$user_row['lastname'];
?>