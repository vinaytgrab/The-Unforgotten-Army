<?php 

// if (isset($_POST['save'])) {
    $id=$_POST['id'];
    $rider_name = $_POST['rider_name'];
    $rider_email = $_POST['rider_email'];
    $rider_mob = $_POST['rider_mob'];
    $rider_pre = $_POST['rider_previous_detail'];
    $admin_id - $_SESSION['user_id'];
    mysqli_query($conn, "UPDATE rider SET rider_name='$rider_name', rider_email='$rider_email',  rider_mob='$rider_mob' WHERE id=$id");
    //  mysqli_query($conn, "INSERT into request_log (admin_id, rider_pre_value) Values("$_SESSION['user_id']")");
     mysqli_query ($conn, "INSERT INTO request_log (admin_id, rider_pre_value)VALUES('$admin_id', '$rider_pre')");

    $_SESSION['message'] = "Profile updated successfully!"; 
    header('location: designation.php');
// }
?>