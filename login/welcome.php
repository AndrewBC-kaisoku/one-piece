<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <?php
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="widht=device-widht,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Navigation -->
    <nav class="nav-main">
      <!-- Brand -->
      <img src="img/brand.jpg" alt="TechNews Logo" class="nav-brand">
      <!-- Left Nav -->
      <ul class="nav-menu">
        <li>
          <a href="#">Tomos de One Piece</a>
        </li>
        <li>
          <a href="#">Datos de One Piece</a>
        </li>
        <li>
          <a href="#"> Comentarios de nuestros usuarios</a>
        </li>
        <li>
          <a href="#"> ¿Donde nos hubicamos? </a>
        </li>
        <li>
          <a href="#">Musicas de One Piece</a>
        </li>
        <li>
          <a href="welcome.php">Tu perfil</a>
        </li>
        <li>
          <a href="welcome.php">Registrate o inicia seción  </a>
           
        </li>
      </ul>

      <!-- Right Nav -->
      <ul class="nav-menu-right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>
    </nav>
    <hr>
   
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a tu perfil.</h1>
        
    
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
        
    </p>
    

</body>
</html>



