<table>
	<form method="POST">
		<tr>
			<td>
				NIM
			</td>
			<td>
				<input type="text" name="nim">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<input type="text" name="pass">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="login">
			</td>
		</tr>
	</form>
</table>
<?php 
if (isset($_POST['login'])) {
	$nim = $_POST['nim'];
	$password = $_POST['pass'];
	 
	$query = mysql_query("select * from admin where NIM='$nim' and password='$password'");
	$cek = mysql_num_rows($query);

	if (isset($cek)) {
		header("location: view.php");
	}
}
?>