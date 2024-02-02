<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['logout'])){
        if(isset($_SESSION['user'])){
            session_unset();
            session_destroy(); ?>
            <script>alert('logout successful');
            </script> <?php
        }
        else{
            echo "Login Into Your Account";
        }
    }
}
?>