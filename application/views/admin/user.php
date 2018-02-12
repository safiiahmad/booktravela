<!DOCTYPE html>
<html>
<head>
	<title>Lihat user</title>
</head>
<body>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Fullname</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($tuser as $tuserr)
				{?>
					<tr>
						<td><?php echo $tuserr->id ?></td>
						<td><?php echo $tuserr->username ?></td>
						<td><?php echo $tuserr->fullname ?></td>
						<td>
							<button class="btn btn-warning" onclick="ngedit_user(<?php echo $tuserr->id;?>)">Edit</button>
							<button class="btn btn-danger" onclick="ngapus_user(<?php echo $tuserr->id;?>)">Hapus</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<script type="text/javascript">va
	function ngedit_user(id)
	{
		var url = "<?php echo base_url() ?>";
		window.location = url+"index.php/admin/admin/edit_user/"+id;
	}

	function ngapus_user(id)
	{
		if (confirm("Yakin ingin mengpus user tersebut?")) 
		{
			if(true)
			{
				var url = "<?php echo base_url() ?>";
				window.location = url+"index.php/admin/admin/hapus_user/"+id;
			}
			else
			{
				return false;
			}
		}
	}

</script>