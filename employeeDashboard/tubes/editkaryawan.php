<?php
include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];

    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['nohp'];
    $result = mysqli_query($mysqli, "UPDATE datakaryawan SET nama='$name',email='$email',nohp='$phone' WHERE id=$id");

    header("Location: karyawan.php");
}
?>
<?php
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM datakaryawan WHERE id=$id");
    while($user_data = mysqli_fetch_array($result)){
        $name = $user_data['nama'];
        $email = $user_data['email'];
        $phone = $user_data['nohp'];
    }
    
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
<br>
<div class="container-fluid">
    
</div>

<br>
<div class="btn-toolbar">
</div>
<br>
<div class="container-sm">
    <form name="update" method="post" action="editkaryawan.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input name="nama" type="text" class="form-control" value="<?php echo $name;?>"id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" value="<?php echo $email;?>"id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No Hp</label>
        <input name="nohp" type="text" class="form-control" value="<?php echo $phone;?>"id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <td><input type="hidden" name="id" value =<?php echo $_GET['id'];?>></td>

    <button type="submit" name="update" value="Update" class="btn btn-primary">Update</button>
    </form>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>