<?php include("db.php"); ?>

<?php

      $username = $_POST['username'];
      $password = $_POST['password'];
    
        $_SESSION['username']=$username;

        $query  = "SELECT * from users WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn,$query);


    $rows =  mysqli_num_rows($result);


    if($rows){
        header("location:index.php");

    } else{
        ?>
       <?php $_SESSION['message_type'] = "warning";
             $_SESSION['message'] = "Wrong Username and/or Password";
        ?>
        <?php header("location: first.php"); ?>

    <?php
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>