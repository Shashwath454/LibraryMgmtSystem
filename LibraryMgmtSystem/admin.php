<?php
if(isset($_POST['loginbutton'])){
$admin_id=$_POST['admin_id'];
$admin_pass=$_POST['admin_pass'];
$connect=mysqli_connect('localhost','root','','shash');
$query="SELECT * FROM admin WHERE admin_id='$admin_id'";
$qrun=mysqli_query($connect,$query);
if(mysqli_num_rows($qrun)==1){
    while($row=mysqli_fetch_array($qrun)){
        if($admin_pass==$row['admin_pass']){
            echo "login successful";
        }
        else{
            echo "incorrect password";
        }
    }
    }
else{
    echo "invalid admin_id";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" placeholder="enter the id" name="admin_id">
    <br>
    <input type="password" placeholder="enter the password" name="admin_pass">
    <br>
    <button type="submit" name="loginbutton">LOGIN</button>
    </form>
</body>
</html>