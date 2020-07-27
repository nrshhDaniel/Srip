<?php
$hostname="localhost";
$db_user="root";
$db_pwd="";
$db_name="srip";
$conn=new mysqli($hostname,$db_user,$db_pwd,$db_name);

//Check Connection
if($conn->connect_error)
{
    die('Connection failed'.$conn->connect_error);
}
?>