<?php 
include "db.php";
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    // function validate($data){

    //    $data = trim($data);

    //    $data = stripslashes($data);

    //    $data = htmlspecialchars($data);
    //     print_r($data);
    //    return $data;

    // }

     $uname = $_POST['email'];
    

     $pass = $_POST['password'];
    

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        $sql = "SELECT * FROM user WHERE email='$uname' AND password='$pass'";
        
        $result = mysqli_query($conn, $sql);
    

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
        

            if ($row['email'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: designation.php");

                exit();

            }else{
                
                header("Location: index.php");

                exit();

            }

        }else{

            header("Location: index.php");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}