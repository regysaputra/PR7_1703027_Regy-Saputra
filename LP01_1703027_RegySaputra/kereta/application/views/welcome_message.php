<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php include "Head.php"; ?>

<div class="container-fluid">
		<div class="row" style="padding-top:40px;padding-left:10px;padding-right:10px;">
		<br>
		<br>
		<div class="">
			<a href="<?php echo site_url(); ?>/Welcome/index"><button class="btn btn-success" type="button">LEFT JOIN</button></a>
			<a href="<?php echo site_url(); ?>/Welcome/index1"><button class="btn btn-success" type="button">RIGHT JOIN</button></a>
			<a href="<?php echo site_url(); ?>/Welcome/index2"><button class="btn btn-success" type="button">INNER JOIN</button></a>
		</div>

		<br><br><br><br>
			<div style="padding-left:350px;">

				<br><br>
				<h2><b>LOKOMOTIF LEFT JOIN KURSI</b></h2>
			</div>


	<table class="table table-hover">
		<thead class="table-success">
			<tr >
				<th scope="col">No</th>
				<th scope="col">Kode Kereta</th>
				<th scope="col">Nama</th>
				<th scope="col">Kode Kursi</th>
				<th scope="col">Kode Gerbong</th>
			</tr>
		</thead>
				<?php $i=1;
						foreach($tb_lj as $key){ ?>

							<tbody>
								<tr class="table-dafault">
									<th scope="row"><?php echo $i ?></th>
									<td><?php echo $key->kd_kereta ?></td>
									<td><?php echo $key->nama ?></td>
									<td><?php echo $key->kd_kursi ?></td>
									<td><?php echo $key->kd_gerbong ?></td>
								</tr>
							</tbody>
				<?php $i++; }
				?>
				</table>
				<?php
						if ($i == 1){
							echo " <b>Data Inner Join Kosong !</b> <?php";
						}
				 ?>

			</div>
		</div>
				</html>

<?php include "Foot.php"; ?>
