<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ujian Online</title>
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="colapse navbar-colapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<?php echo anchor('matpel','Daftar Mata Pelajaran');?>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<?php $this->load->view($content); ?>
	</div>

	<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"</script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"</script>	
</body>
</html>