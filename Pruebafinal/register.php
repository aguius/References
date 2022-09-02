<?php  include("db.php")   ?>
<?php include("./includes/header.php") ?>

<div class="register">
    <h1>Join us today for free!</h1><br>
    <form action="register_task.php" method="POST">
<div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" class="form-control"  name="username" placeholder="Username">
</div><br>
<div class="mb-3">
  <label for="password" class="form-label" >Type your password</label>
  <input type="password" class="form-control"  name="password" placeholder="Password">
  <br>
<label for="passwordconfirm" class="form-label" >Confirm your password</label>
  <input type="password" class="form-control"  name="passwordconfirm" placeholder="Password">
</div>
<input type="submit" class="btn btn-success" value="Register" name="register_task"> 
</form>

<?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible   fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 

            <?php session_unset(); } ?>

</div>


<?php include("./includes/footer.php") ?>