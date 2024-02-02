<?php
if(isset($_POST['loginbutton'])){
$user_id=$_POST['user_id'];
$user_pass=$_POST['user_pass'];
$connect=mysqli_connect('localhost','root','','shash');
$query="SELECT * FROM user_details WHERE user_id='$user_id'";
$qrun=mysqli_query($connect,$query);
if(mysqli_num_rows($qrun)==1){
    while($row=mysqli_fetch_array($qrun)){
        if($user_pass==$row['user_pass']){
            header('Location: lib.php');
            echo "login successful";
        }
        else{
            echo "incorrect password";
        }
    }
    }
else{
    echo "invalid user_id";
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
    <input type="text" placeholder="enter the id" name="user_id">
    <br><br>
    <input type="password" placeholder="enter the password" name="user_pass">
    <br><br>
    <button type="submit" name="loginbutton">SUBMIT</button>

    </form>
</body>
</html>