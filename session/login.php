<?php
session_start();
if (isset($_POST['Login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //periksa login
    if ($user == "roby" && $pass = "123") {

        //menciptakan session
        $_SESSION['login'] = $user;
    
        echo "<center><h1> Anda Berhasil Login</h1>";
        echo "<h4> Klik <a href='index.php'>Lanjut >> </a> untuk menuju ke halaman utama</h4>";
        
    }
    else {
        echo "<center><h1>Login Gagal</h1>";
        echo "<a href='login.php'>KEMBALI</a>";
       
    }
    } else {
?> 
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    
        
        <form action="" method="post">
            <h2>Login here...!!</h2>
            Username : <input type="text" name="user"><br></br>
            Password : <input type="password" name="pass"><br></br>
            <center><button type="submit" name="Login">Login</button></center>
    
    </form>
    <style>
        body {
            font-family: Arial,sans-serif ;
            background-color: #a3d2d8;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content:center;
            height: 100vh;
        }
        button{
            background-color: #2d48be;
            color: #fff;
            border: color(srgb red green blue);
            padding: 10px;
            width: 30%;
            border-radius: 15px;
            cursor: pointer;

        }
        input {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        } 
    </style>
    </body>
</html>
<?php
}
?>