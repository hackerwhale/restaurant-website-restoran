<?php
require('admin/connection/config.php');

 if (isset($_POST['btnname'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $people = $_POST['people'];
      $request = $_POST['request'];


     $query = "INSERT INTO comment(name, email, date, people, request) VALUES ('$name','$email','$date','$people','$request') ";
     $result = mysqli_query($conn, $query);
    if ($result) {
        ?>
        <script>
        alert('Your booking has been requested.');
        window.location.href = 'booking.php';
        </script>
        <?php
        }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
?>