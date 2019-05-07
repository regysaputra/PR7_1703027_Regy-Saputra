<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<?php include "Head.php"; ?>

				<h2><b>KURSI RIGHT JOIN GERBONG</b></h2>
			</div>
    <table class="table table-hover">
      <thead class="table-success">
        <tr >
          <th scope="col">No</th>
          <th scope="col">Kode Kursi</th>
          <th scope="col">Kode Gerbong</th>
          <th scope="col">Kode Kereta</th>
          <th scope="col">Nama</th>
        </tr>
      </thead>
          <?php $j=1;
              foreach($tb_rj as $key){ ?>

                <tbody>
                  <tr class="table-dafault">
                    <th scope="row"><?php echo $j ?></th>
                    <td><?php echo $key->kd_kursi ?></td>
                    <td><?php echo $key->kd_gerbong ?></td>
                    <td><?php echo $key->kd_kereta ?></td>
                    <td><?php echo $key->nama ?></td>
                  </tr>
                </tbody>
          <?php $j++; }
          ?>
          </table>
          <?php
              if ($j == 1){
                echo " <b>Data Inner Join Kosong !</b> <?php";
              }
           ?>

			</div>
		</div>

<?php include "Foot.php"; ?>
