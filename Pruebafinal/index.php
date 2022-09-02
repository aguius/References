<?php include("includes/header.php");  ?>

<?php  include("db.php") ?>

<?php if(empty($_SESSION['username'])){
    header("location:first.php");
} ?>


<header>
    <div id="title">
        <span>A.C.I</span>
    </div>
    <div class="header_nav">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="aboutme.php#" class="nav-link" >About Me</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link text-danger" style="--bs-bg-opacity: .5;" >Log Out</a></li>
      </ul>
    </div>
</header>


<main>
    <br><br>
    <div class="container bounce">
        <div class="containercards">
        <div class="title" ><b>LANGUAGES LEARNED</b></div><br>
        <div class="contenedor_C">
            

                        <div class="card" style="width: 18rem;"> <a href="https://developer.mozilla.org/es/docs/Web/HTML">
                            <img src="./img/html.svg" class="card-img-top" alt="..." title="HTML">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title">HTML</h5>
                                <br>
                                <?php
                $query = "SELECT * FROM cards";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)) {
                ?>
                                <p class="card-text"><?php echo $row['carddesc']?></p>
                                
                            </div>
                            </a>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="./img/css.svg" class="card-img-top" alt="..." title="CSS">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title">CSS</h5>
                                <br>
                                <p class="card-text"><?php echo $row['carddesc2']?></p>
                                
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="./img/js.svg" class="card-img-top" alt="..." title="JS">
                            <img src="./img/jquery.svg" class="card-img-top" alt="..." title="JQ">
                            <div class="card-body">
                                <h5 class="card-title">JAVASCRIPT/JQUERY</h5>
                                <br>
                                <p class="card-text"><?php echo $row['carddesc2']?>
                                    
                                </p>
                                
                            </div>
                        </div>
         
                            <div class="card" style="width: 18rem;">
                            <br>
                            <img src="./img/phpp.png" class="card-img-top" alt="..." title="PHP">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title">PHP</h5>
                                <p class="card-text"><?php echo $row['carddesc3']?></p>
                               
                            </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                            <img src="./img/mysql.svg" class="card-img-top" alt="..." title="MYSQL">
                            <div class="card-body">
                                <br>
                                <h5 class="card-title">MYSQL</h5>
                                <br>
                                <p class="card-text">
                                <?php echo $row['carddesc4']?>      
                            </p>
                            <?php } ?>
                            </div>
                            </div>
                </div>
            </div>
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


<?php include("includes/footer.php");  ?>

