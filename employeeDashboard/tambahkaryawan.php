<?php
    include ("config.php");
    
?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="styleidx.css" />
  <title>Admin Panel</title>
</head>
<body>
<div class="header">
    <h1></h1>
</div>
<div id="wrapper">

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
            <a href="#">
                Hello, Admin
            </a>
        </li>
        <li>
            <a href="admindex.php">Dashboard</a>
        </li>
        <li>
            <a href="#">Karyawan</a>
        </li>
        <li>
            <a href="#">Gaji</a>
        </li>
        <li>
            <a href="#">Cuti</a>
        </li>
        <li>
            <a href="#">Tentang</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>

    </ul>
</div>

<form action="tambahkaryawan.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <hr>
    <label for="nama"><b>Name</b></label> <br> 
    <input type="text" placeholder="Enter Name" name="nama" id="nama" required>
    <br> <br> <br> 

    <label for="email"><b>Email</b></label> <br> 
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br> <br> <br> 

    <label for="phone"><b>Phone</b></label> <br> 
    <input type="number" placeholder="Enter Number" name="nohp" id="nohp" required>
    <br> <br> <br> 

    <label for="username"><b>Username</b></label><br> 
    <input type="text" placeholder="Enter Username" name="username" id="username" required>
    <br> <br> <br> 

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
    
    <hr>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
</form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['nama'];
            $email = $_POST['email'];
            $phone = $_POST['nohp'];
            $usrname = $_POST['username'];
            $passwd = md5($_POST['password']);
            $result = mysqli_query($mysqli, "INSERT INTO datakaryawan(nama, email,nohp) VALUES('$name', '$email','$phone')");

            $result1 = mysqli_query($mysqli, "INSERT INTO user(username, password, level) VALUES('$usrname', '$passwd','employee')");

        }
    ?>


    </div>
</div>

</body>
</html>