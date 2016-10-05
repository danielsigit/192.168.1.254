<?php
include ('configadmin.php');
?>
<html>
<head>
</head>
<body>
<table border=0 width="100%">
<form method="post" action="simpandata.php">

<tr><td><h3> Registrasi User </h3></td></tr>
<tr><td width="10%" valign="center">Username</td><td><input type="text" name="username" placeholder="Masukan username anda" size=75></td></tr>

<tr><td width="10%" valign="center">Password</td><td><input type="password" name="password" placeholder="Masukan password anda" size=75></td></tr>

<tr><td width="10%" valign="center">Nama</td><td><input type="text" name="nama" placeholder="Masukan nama lengkap anda" size=75></td></tr>

<tr><td width="10%" valign="center">Status</td>
<td>
<?php
	require_once('configadmin.php');
	
	?>
	<select name="status" id="status">
		<option value="status"> Status </option>
		<?php
		$binding_id="";
		$sql="select* from binding;";
		$result5=mysql_query($sql);
		if($result5){
			while ($row5=mysql_fetch_array ($result5))
			{
			echo "<option value=\"".$row5['status']."\"";
			if ($binding_id==$row5['id']) {
				echo "selected";
				}
		echo "> " .$row5['status']."</option>";
			}
		}
		?>
</label>
</td></tr>

<tr><td width="10%" valign="center"></td><td><input type="submit" value="Kirim" class="tombol_content"></td></tr>
</body>
</html>