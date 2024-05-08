<?php
    include ("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM datakaryawan ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
<br><div class = 'container' syle="background-color:grey">
    
    <h1>Daftar Karyawan</h1>
    <div class="bgcolor"></div>
</div>

<br>
<div class ="container-fluid">
<div class="btn-toolbarr">
    <a href="tambahkaryawan.php" class="btn btn-outline-info"><div>+</div></a>
</div>
</div>
<div class="container">
<div class="well">
    <table id="customers">
    <tr>
        <th>Nama</th>
        <th>email</th>
        <th>No HP</th>
        <th>Action</th>
    </tr>
    <?php
        while($user_data = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['nohp']."</td>";
            echo "<td><a href='editkaryawan.php?id=$user_data[id]'>Edit</a>";
        }
    ?>
    </table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>