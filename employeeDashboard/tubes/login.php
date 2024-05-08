<?php
    session_start();
	include ("config.php");

	$username = $_POST['username'];
	$password = ($_POST['password']);

	$login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'" );
	$cek = mysqli_num_rows($login);
    if($cek > 0){
        $data = mysqli_fetch_assoc($login);

        if($data['level'] == 'admin'){
            $_SESSION['username']=$username;
            $_SESSION['level']='admin';
            header("location:admindex.php");
        }
        else{
            $_SESSION['username'] = $username;
		    $_SESSION['level'] = "pegawai";
            header("location:index.php");
        }
        
    }else{
        header("location:loginindex.php?msg=failed");
        
    }
	
?>