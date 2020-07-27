<?php
session_start();
if(!isset($_SESSION['session_id']))// Session not exists
{
  header("Location:../index.php"); //Redirect to Login Page
}
?>