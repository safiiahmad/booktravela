<!DOCTYPE html>
<html>
<head>
	<title>Lihat rute</title>
</head>
<body>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>From</th>
					<th>To</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($trute as $tuserr)
				{?>
					<tr>
						<td><?php echo $tuserr->id ?></td>
						<td><?php echo $tuserr->rute_from ?></td>
						<td><?php echo $tuserr->rute_to ?></td>
						<td><?php echo $tuserr->price ?></td>
						<td>
							
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