<?php
session_start();
 
//pemeriksaan session
if (!isset($_SESSION['login'])) { 
    header("Location: login.php");
    exit();
}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Welcome, <?php echo $_SESSION['login']; ?>!</h1>
    </header>  
    <div class="container">

        <div class="welcome-message">
            <h2><p>Kamu mau pilih siapa di pilpres tahun ini?</p></h2>   
        </div>

        <a class="logout-link" href="logout.php">>> Logout</a>
    </div>
</body> 
</html>