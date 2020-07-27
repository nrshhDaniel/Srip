<?php


include('layout/header.php');
?>
<h1 align="center">SRIP ONLINE SYSTEM</h1>
<div class="login_box">
<!--<h2 align="center">LOGIN</h2>-->
<p>__________________________________________________</p>
    <form method="POST" action="login_process.php">
    <div class="form-group">
        <label for="text">Username:</label>
        <input type="text" class="form-control" placeholder="Enter username" name="u_username">
    </div>

    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="u_pswd">
    </div>
    
    <button  type="submit" class="btn btn-primary btn-block">Log In</button>
    <?php
    if(isset($_SESSION['error']))
    {
    ?>
        <div class="alert alert-danger">
            Invalid Username and Password
        </div>
    <?php  
    }
    ?>
    </form>
</div>

<?php
include('layout/footer.php');
?>

<style>
body
{
    background-image:url('');
    background-size:cover;
}
.login_box
{
    border-radius:30px;
    -webkit-box-shadow: -14px 13px 36px 6px rgba(0,0,0,1);
    -moz-box-shadow: -14px 13px 36px 6px rgba(0,0,0,1);
    box-shadow: -14px 13px 36px 6px rgba(0,0,0,1);
    padding:20px;
    background-color:rgba(255,255,255,0.8);
    width:350px;
    height:325px;
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-175px;
    margin-top:-150px;
}
h1
{
    background-color:rgba(0,0,0);
    color:whitesmoke;
    
}
.btn
{
    border-radius: 200px;
}
</style>