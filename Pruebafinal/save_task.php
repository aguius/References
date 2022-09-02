<?php 

include("db.php") ?>

<?php

if(isset($_POST['save_task'])){
    $email = $_POST['email'];
    $description = $_POST['description'];

    $query = "INSERT into infocontact(email,description) VALUES('$email','$description')";

    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query Failed");
    }


    $_SESSION['message']= "Thank you for your time!";
    $_SESSION['message_type'] = "success" ;

    header("Location: contact.php");
}
?>