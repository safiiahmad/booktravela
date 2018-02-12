<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<?php foreach($show as $u){ ?>
	<form action="<?php echo base_url('index.php/admin/admin/update_user'); ?>" method="post">
		<table style="margin:20px auto;">
		<tr><td><input type="text" name="id" value="<?php echo $u->id; ?>" hidden></td></tr>
			<tr>
				<td><label>Username</label></td>
				<td>
					<input class="form-control" type="text" name="username" value="<?php echo $u->username ?>">
				</td>
			</tr>
			<tr>
				<td><label>Fullname</label></td>
				<td><input class="form-control" type="text" name="fullname" value="<?php echo $u->fullname ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>