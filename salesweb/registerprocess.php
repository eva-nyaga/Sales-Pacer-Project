<?php
include('configure.php');

$phonenumber=$_POST['phonenumber'];
$discussion=($_POST['discussion']);



$sql = "INSERT INTO details(phone_no, discussion_matter) values ('$phonenumber', '$discussion')";

$result =mysql_query($sql) or die(mysql_error());

?>