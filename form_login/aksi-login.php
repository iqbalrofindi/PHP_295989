<?php
	session_start(); 
	$username=$_POST['username']; 	//tangkap data yg di input dari form login input username
	$password=$_POST['password']; 	//tangkap data yg di input dari form login input password

	//$query=mysql_query("select * from admin where username='$username' and password='$password'");	 //melakukan pengampilan data dari database untuk di cocokkan
	//$xxx=mysql_num_rows($query);	 //melakukan pencocokan
	if($username=="admin" && $password=="admin")
	{ 		
		$_SESSION['username']=$username; 
		$_SESSION['password']=$password; //jika cocok, buat session dengan nama sesuai dengan username
		header("location:index.php");     // dan alihkan ke index.php
	}else{   				//jika tidak tampilkan pesan gagal login
		echo "gagal login";
	}

?>