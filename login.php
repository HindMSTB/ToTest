<?php

$host="localhost";
$user="root";
$password="";
$db="iadis";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password "];


	$sql="select * from users where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

	

		header("location:user.php");
	}

	elseif($row["usertype"]=="admin")
	{

	
		
		header("location:admin.php");
	}

	else
	{
		echo "username or password incorrect";
	}


}

?>











<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Construction Website Design Tutorial</title>
   <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/animate/animate.css" rel="stylesheet">

  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/devis.css" rel="stylesheet">

  
  
</head>
<body>

    <header class="header">
        <img style="width: 6%" src="image/Logo-IADIS.JPG" alt="" title="">
        
       
        <nav class="navbar">
           <a href="index.html">home</a>
       
         </nav>
      
         <div class="icons">
           
              <div>
                    <a href="login.html">  <div id="login-btn" class="fas fa-user"> </div></a> 
                 </div>
              </div>
           <!--div id="login-btn" class="fas fa-user">
              <a href="login.php"> </a>
           </div-->
        </div>
     
   
        
     
    
      </header>

      <!--section class="contact" id="contact">
        <h1 class="heading" id="pl"> Connectez-vous </h1>
        <div class="divC"> 
    
        
     
        <div class="row">
     
     
             <form action="#" method="POST">
              <h3></h3>
              <div class="inputBox">
                <input type="text" name="email" placeholder="email">
                 <input type="text" name="password" placeholder="mots de passe ">
                 
              </div>
            
              <input type="submit" name="submit" value="connecter" class="btn">

              </div>


      
          </div>

           </form>
     
        
 

     </section-->
        
     <div class="center">
      <h1>Login</h1>
      <form action="#" method="POST">
        <div class="txt_field">
          <input type="text"  name="email" required>
          <span></span>
          <label>email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
       
        <input type="submit" value="Login">
        
      </form>
    </div>

        
     








































































     
<footer class="footer" id="footer">
    <div class="containerF">
       <div class="row">
          <div class="footer-col">
            
              <img style="width: 25%" src="image/Logo-IADIS-removebg-preview.png" alt="" title="">
             <p style="font-size: 16px; color: #0f1b6f;">
              IADIS,une entreprise spécialisé dans la maintenance et la fourniture industrielle et automobile. 
             </p>
          </div>
          <div class="footer-col">
             <h4>LIENS UTILES</h4>
             <ul>
  
                <li> <a href="#home">home</a></li>
                   <li> <a href="#about">Qui sommes-nous </a></li>
                      <li> <a href="#services">produits</a></li>
                         <li> <a href="#projects">Services</a></li>
                            <li> <a href="#footer">contact</a></li>
                               <li> <a href="#reviews">FAQ</a></li>
                
             </ul>
          </div>
          <div class="footer-col">
             <h4>CONTACT</h4>
           
  
             <p style="font-size: 2.5ch;color: #0f1b6f;"> <i class="fas fa-map-marker-alt"></i> 120, Boulvard la grande ceinture lilya 2 N° 48, Casablanca  </p> 
             <p style="font-size: 2.5ch;color: #0f1b6f;"><i class="fas fa-phone"></i> +212 522 356 853 </p> 
       <p style="font-size: 2.5ch;color: #0f1b6f;"> <i class="fas fa-envelope"></i> Contact@iadis.ma </p>  
       <p style="font-size: 2.5ch;color: #0f1b6f;"><i class="fas fa-globe"></i> www.iadis.ma </p> 
  
          </div>
          <div class="footer-col">
             <h4>RÉSEAUX SOCIAUX</h4>
             <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
             </div>
          </div>
       </div>
    </div>
  </footer>
  
      </body>
      </html>