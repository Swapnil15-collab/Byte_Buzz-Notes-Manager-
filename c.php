


<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: splogin.html"); // Redirect to login page if not logged in
    exit();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn C </title>
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet" href="c.css">







    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html"><h4>ByteBuzz</h4></a>
            <ul class="nav__menu">
                
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="courses.html">COURSES</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="loginc.html">LOGIN </a></li>
            
    
            </ul>
    <button id="open-menu-btn"><i class="uil uil-bars" ></i> </button>
    <button id="close-menu-btn"><i class="uil uil-multiply" ></i></button>
        
        </div>
       </nav> 
      
    
       <div class="topics">
        <ul>
            <li><a href="C Programming Language.pdf">Introduction to C</a></li>
            <li><a href="First C Program - Copy.pdf">First C Program </a></li>
            <li><a href="Compilation process in c.pdf"> Compilation process in c</a></li>
            <li><a href="printf.pdf">Printf and scanf</a></li>
            <li><a href="Variables in C.pdf">Variables and Constants</a></li>
            <li><a href="Data Types in C.pdf">Data Types in C</a></li>
            <li><a href="Keywords in C.pdf">Keywords in C</a></li>
            <li><a href="Operators in C.pdf">Operator in C</a></li>
            <li><a href="Tokens in C.pdf">Tokens in c</a></li>
            <li><a href="Control Structures in C.pdf">Control Structures</a></li>
            <li><a href="C Functions.pdf">Functions</a></li>
            <li><a href="C Arrays.pdf">Arrays</a></li>
            <li><a href="C Pointers.pdf">Pointers</a></li>
            <li><a href="Strings in C.pdf">Strings</a></li>
            <li><a href="Structure.pdf">Structures</a></li>
            <li><a href="C Unions.pdf">Union</a></li>
            <li><a href="File Handling in C.pdf">File Handling</a></li>
            <li><a href="Imp Program.pdf">Imp Program's</a></li>
            
        </ul>
    </div>
    

 <!-----
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>ByteBuzz</h4></a>
                <P> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, nihil debitis nostrum maiores earum nobis.</P>
            </div>
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="courses.html">COURSES</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
          <div class="FOOTER__3">
        <H4>Privacy</H4>    
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Refund Policy</a></li>
        </ul>
        </div>
        <div class="footer__4">
            <h4>contact us</h4>
            <div>
                <p> +01 234 567 8910</p>
            <p>swapnilpanchadane237@gmail.com</p>
            </div>
            
        
        <ul class="footer__socials">
            <li>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-instagram-alt"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-linkedin-alt"></i></a>
            </li>
        </ul>
        
    <div class="footer__copyright">
        <small>Copyright &copy : techbuzz</small>
    </div>
    
        </div>
    </div>


    </footer>
    
   --> 

    




   <footer >
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.html" class="footer__logo"><h4>ByteBuzz</h4></a>
            <P> "Bringing education closer to you with carefully curated resources for every year of your computer science journey."</P>
        </div>
        <div class="footer__2">
            <h4>Permalinks</h4>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="courses.html">COURSES</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
      <div class="FOOTER__3">
    <H4>Privacy</H4>    
    <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms and conditions</a></li>
        <li><a href="#">Refund Policy</a></li>
    </ul>
    </div>
    <div class="footer__4">
        <h4>contact us</h4>
        <div>
            <p> +01 234 567 8910</p>
        <p>swapnilpanchadane237@gmail.com</p>
        </div>
        
    
    <ul class="footer__socials">
        <li>
            <a href="#"><i class="uil uil-facebook-f"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-instagram-alt"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="uil uil-linkedin-alt"></i></a>
        </li>
    </ul>
    
<div class="footer__copyright">
    <small>Copyright &copy : Bytebuzz</small>
</div>

    </div>
</div>
</footer>
    
    <script src="main.js"></script>
    
    
    
    
</body>
</html>