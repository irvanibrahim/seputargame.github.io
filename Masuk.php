html>
	<head>
		<title>Login Form Design</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="login-box">
		<img src="avatar.png" class="avatar">
		<h1>Login Here</h1>
		<form action="" method="post">
			<input type="text" name="email" placeholder="Masukkan Email">
			<input type="Password" name="Pass" placeholder="Masukkan Password">
			<input type="submit" name="submit" value="masuk"
		</form>
		<?php
			include "koneksi.php";
			if(isset($_POST['masuk'])){
				$cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."'AND Password = '".$_POST['pass']."'");
				$hasil = mysqli_fetch_array($cek);
				$count = mysqli_num_rows($cek);
				if($count > 0){
					header("location:index.php");
				}else{
					echo "gagal masuk";
				}
			}
		?>
	</div>
</body>

