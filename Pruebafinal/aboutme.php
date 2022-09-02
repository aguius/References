<?php
include("./includes/header.php");
?>

<?php  include("db.php") ?>

<header>
    <div id="title">
        <span>A.C.I</span>
    </div>
    <div class="header_nav">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php"  class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link active" >About Me</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link text-danger" style="--bs-bg-opacity: .5;" >Log Out</a></li>
      </ul>
    </div>
</header>
<br><br>
<main>
    <div class="container">
        <figure>
       <img src="" alt="Foto de mi">
       </figure>
       <h1>Hello, my name is Agustin Casado</h1><br>
       <span>I'm From Argentina, I started programming in 2020 when Covid started, I didn't know how much i like it until i started seeing progress, i managed to learn some languages, i consider myself Junior, this is an example of what I can do, and everytime I learn something new, I will come back to this page and make it better and more likeable, you can leave your Email in the "contact" section or you can just send me an email to this direction: <br><br>
        Agustin_casad0@hotmail.com. <br><br>
        My objective is to find a job in another country, but i don't have any problem in having one in mine,
        it's just the payment isn't the same, and i want to take advantage of my knowledge of english.
<br><br><br>Thank you for reading up to this point.
       </span>
    </div>
   
</main>
<br><br>
<footer class="footer">
    </div>
    <div class="footer_nav">
    <p class="col-md-4 mb-0 text-muted">C0DED BY AGUIUS</p>
    </div>
</footer>


<?php
include("./includes/footer.php")
?>