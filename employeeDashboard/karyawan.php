<?php
    include ("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM datakaryawan ORDER BY id ASC");
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

<br>
<div class="btn-toolbar">
<button >
        <a href="tambahkaryawan.php">Tambah</a>
    </button></br>
</div>
<br>
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
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a>";
        }
        ?>
    </table>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>

</body>
</html>