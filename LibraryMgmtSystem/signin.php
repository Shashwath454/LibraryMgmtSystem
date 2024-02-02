<?php
if(isset($_POST['submitbutton'])){
    $user_id=$_POST['user_id'];
    $user_pass=$_POST['user_pass'];
    $conn_pass=$_POST['confirm_password'];
    $connect=mysqli_connect('localhost','root','','shash');
    $query2="SELECT * FROM user_details WHERE user_id='$user_id'";
    $qrun=mysqli_query($connect,$query2);
    if(mysqli_num_rows($qrun)==1){
        echo 'user name taken';
    }
    else{
        $passwordregex="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$/";
        if($user_pass==$conn_pass){
            if(preg_match($passwordregex,$conn_pass)){
    $query="INSERT INTO user_details VALUES('$user_id','$user_pass')";
    if($connect->query($query)){
        echo 'Inserted';
        header('Location: login.php');
    }
    else{
         echo 'NOT INSERTED';
    }
}
else{
    echo "Password Must Match its Contraints";
}
}       
else{
    echo "Password Doesnt Match";
}
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
    <br>
    <input type="password" placeholder="enter the password" name="user_pass">
    <br>
    <input type="password" placeholder="confirm password" name="confirm_password">
    <br>
    <button type="submit" name="submitbutton">Sign in</button>
    </form>
</body>
</html>