<?php
    include ("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM statuscuti ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Employee Management System</title>
  <link rel="stylesheet" type="text/css" href="csscuti.css">
</head>
<body>
  <div class="banner">
    <div class="navbar">
      <img src="images/logo.png" class="logo">
      <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="statuscuti.php">Status Cuti</a></li>
          <li><a href="resign.php">Pengajuan Resign</a></li>
          <li><a href="gaji.php">Rincian Gaji</a></li>
          <li><a href="libur.php">Daftar Hari Libur</a></li>
          <li><a href="loginindex.php">Logout</a></li>
        </ul>
</div>
<br>
<div class = "container">
<div class="coy">
    <table id="cutii">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Cuti Terpakai</th>
        <th>Jumlah Cuti</th>
    </tr>
    <?php
        while($user_data = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['cutiterpakai']."</td>";
            echo "<td>".$user_data['jumlahcuti']."</td>";
        }
        ?>
    </table>
</div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>