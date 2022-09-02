<?php include("db.php") ?>


<?php

if(isset($_POST['register_task'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT into users(username,password) VALUES('$username','$password')";

    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query Failed");
    }

    header("location:first.php");

    $_SESSION['message']= "Thank you for joining";
    $_SESSION['message_type'] = "success" ;

    header("Location: first.php");
}
?>