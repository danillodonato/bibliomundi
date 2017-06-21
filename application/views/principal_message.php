<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to MyEggs</title>

	<link href=<?php echo base_url("bootstrap/vendor/bootstrap/css/bootstrap.min.css rel=stylesheet");?>>

	<!-- MetisMenu CSS -->
	<link href=<?php echo base_url("bootstrap/vendor/metisMenu/metisMenu.min.css rel=stylesheet");?>>

	<!-- DataTables CSS -->
	<link href=<?php echo base_url("bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css rel=stylesheet");?>>

	<!-- DataTables Responsive CSS -->
	<link href=<?php echo base_url("bootstrap/vendor/datatables-responsive/dataTables.responsive.css rel=stylesheet");?>>

	<!-- Custom CSS -->
	<link href=<?php echo base_url("bootstrap/dist/css/sb-admin-2.css rel=stylesheet");?>>

	<!-- Custom Fonts -->
	<link href=<?php echo base_url("bootstrap/vendor/font-awesome/css/font-awesome.min.css rel=stylesheet type=text/css");?>>
	
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>Lista de autores</h1>
	<div class="panel-body">
		<div class="panel-body">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>Autor</th>
						<th>Ebooks</th>
						<th>Fatura R$</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach ($dados as $key => $dado) {
					echo "<tr class='odd gradeX'>";
					echo "<td>".$dado['author_name']."</td>";
					echo "<td>".$dado['size']."</td>";
					echo "<td>".$dado['sales']."</td>";
				}
				?>
				</tbody>
			</table>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
	<!-- jQuery -->
	<script src="//localhost/bibliomundi/bootstrap/vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="//localhost/bibliomundi/bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="//localhost/bibliomundi/bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src=<?php echo base_url("bootstrap/vendor/datatables/js/jquery.dataTables.min.js");?>></script>
	<script src=<?php echo base_url("bootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js");?>></script>
	<script src=<?php echo base_url("bootstrap/vendor/datatables-responsive/dataTables.responsive.js");?>></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});
	</script>
</body>
</html>