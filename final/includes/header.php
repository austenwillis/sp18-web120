<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<link href="css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>



    
</head>
<body>
<header>

     
    <nav>
       
        <a href="index.php" id="logo"><img src="images/logo.png" id="logoimage" alt="logo"></a>
        <span id="toggle"><i class="fas fa-bars"></i></span>
       
        <ul id="nav_ul">
            <li ><a href="about.php"><br>about</a></li>
            <li><a href="music.php"><br>music</a></li>
            <li id="redlogo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></li>
            <li><a href="shows.php"><br>shows</a></li>
            <li><a href="contact.php"><br>contact</a></li>
</ul>
<script>var nav = document.getElementById('nav_ul');
var navToggle = document.getElementById('toggle');

navToggle.addEventListener('click',function(){

    if(this.classList.contains('active')){
        nav.style.display="none";
        this.classList.remove('active');
    }
    else{
        nav.style.display="flex";
        this.classList.add('active');

    }
});
</script> 

</nav>
</header>
   <div id="wrapper">
 <h1 class="PageID"><?=$PageID?></h1>
        