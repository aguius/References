<?php include("db.php") ?>
<?php include("./includes/header.php") ?>


<div class="register">
    <h1>Welcome!</h1><br>
    <form action="login_task.php" method="POST">
<div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" class="form-control"  name="username" placeholder="Username">
</div>
<div class="mb-3">
  <label for="password" class="form-label" >Type your password</label>
  <input type="password" class="form-control"  name="password" placeholder="Password">
</div>
<input type="submit" class="btn btn-success" value="Login" name="login_task"> <button class="btn btn-warning"><a href="register.php">Click here to sign up</a></button>
</form>



<br><br>
<?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible   fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 

            <?php session_unset(); } ?>

</div>

<?php include("./includes/footer.php") ?>


