<?php
session_start();
include('config/connection.php');
//Receive Array from a Form
$p=$_POST;
$user=$p['u_username'];
$pwd=$p['u_pswd'];

//1.Select Statement
$sql="SELECT * FROM user WHERE u_username='$user' AND u_pswd='$pwd'";

//2.Get Result
$result=$conn->query($sql);

//3.Get num row
$num=$result->num_rows;

if($num>0) //Data exists
{
    //4.Get data
    $data=$result->fetch_assoc();
    $type=$data['u_type'] ;
    if($type==1)
    {
        header("Location:admin"); //redirect to Admin page
    }
    else if($type==2)
    {
        header("Location:user"); //redirect to User page
    }
    $_SESSION['session_id']=$data['u_id'];

    if(isset($_SESSION['error'])) // If Session Error exists
    {
        unset($_SESSION['error']); // Remove Session Error
    }
}
else{
    $_SESSION['error']=0;
    $_SESSION['username']=$user;
    header("Location:index.php");
}

?>