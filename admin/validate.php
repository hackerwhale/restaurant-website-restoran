<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if ($email != "" && $password != "") {
        $query = "SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = $result->fetch_assoc();
            //Starting session of the admin
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username']; 

            echo header("Location: ../dashboard.php?msg=login_success");
        } else {
            echo header("Location: ../index.php?msg=login_failed");
        }
    } else {
        echo "All fields are necessary.";
    }
}
?>