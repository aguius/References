<?php
include("./includes/header.php");
?>

<?php include("db.php") ?>


<header>
    <div id="title">
        <span>A.C.I</span>
    </div>
    <div class="header_nav">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#"  class="nav-link active">Contact</a></li>
        <li class="nav-item"><a href="aboutme.php" class="nav-link">About Me</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link text-danger" style="--bs-bg-opacity: .5;" >Log Out</a></li>
      </ul>
    </div>
</header>




<main>
    <br><br>

    
    <div class="container">





    <br><h1>Leave your contact here</h1><br><br>
<div class="contenedor2">






    <form action="save_task.php" method="POST">
    <div class="mb-3">
 
  <input type="email" class="form-control" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  <br>
  

 
</div>
<input type="submit" class="btn btn-outline-dark" name="save_task" value="Send">
</form>

</div>
<div class="contener">
    <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible   fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 

            <?php session_unset(); } ?>
            </div>
</div>
<br><br>
</main>



<footer class="footer">
    </div>
    <div class="footer_nav">
    <p class="col-md-4 mb-0 text-muted">C0DED BY AGUIUS</p>
    </div>
</footer>


<?php
include("./includes/footer.php")
?>

