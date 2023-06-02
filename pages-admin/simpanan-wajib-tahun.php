<?php
// include 'functions/functions-admin.php';

$query_tampil = "SELECT * FROM tahun";
$tahun = tampilData($query_tampil);

?>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i class="ace-icon fa fa-file-o"></i> Data Tahun
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Data Tahun
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Tahun</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody>
								<?php
								$i = 1;
								foreach ($tahun as $value) {
								?>
									<tr>
										<td class="center"><?= $i ?></td>
										<td class="center"><?= $value['tahun'] ?></td>
										<td class="center">
											<div class="action-buttons">
												<a data-rel="tooltip" data-placement="top" title="Detail Bulan" href="indexAdmin.php?p=simpanan-wajib-bulan&id_tahun=<?=$value['id']?>">
													<i class="ace-icon fa fa-info-circle bigger-130"></i>
												</a>
												<a data-rel="tooltip" data-placement="top" title="Cetak" target="_blank" href="pages-admin/cetak.php?tahun=<?=$value['tahun'] ?>">
													<i class="ace-icon glyphicon glyphicon-print"></i>
												</a>
											</div>
										</td>
									</tr>
								<?php
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->