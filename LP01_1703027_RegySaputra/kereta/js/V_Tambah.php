<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
      <form action="index.php?versi=tambah" method="post">
  <fieldset>
    <br>
    <legend>Formulir CV</legend>
    <div class="form-group row">
        <div class="container-fluid">
          <p>Isilah formulir CV ini dengan data yang benar.</p>
        </div>
    </div>

    <legend> <b>Data Pribadi</b></legend>
    <div class="form-group">
      <label >Nama</label>
      <input class="form-control" type="text" name="nama" placeholder="Masukan Nama" required>
    </div>
    <div class="form-group">
      <label >Tempat Lahir</label>
      <input class="form-control" type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required>
    </div>
    <div class="form-group">
      <label >Tanggal Lahir</label>
      <input class="form-control" type="date" name="tanggal_lahir" required>
    </div>
    <div class="form-group">
      <label>Email</label>
      <input class="form-control" type="email" name="email" placeholder="Masukan Email" required>
    </div>
		<div class="form-group">
      <label >Telephone</label>
      <input class="form-control" type="text" name="telephone" placeholder="Masukan Telephone" required>
    </div>
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" name="jenis_kelamin">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label>Agama</label>
      <select class="form-control" name="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Khong Hu Cu">Khong Hu Cu</option>
      </select>
    </div>
		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status" required>
				<option value="Menikah">Menikah</option>
				<option value="Belum_Menikah">Belum Menikah</option>
			</select>
		</div>
    <div class="form-group">
      <label >Tinggi Badan</label>
      <input class="form-control" type="number" name="tinggi_badan" placeholder="Masukan Tinggi Badan" required>
      <small class="form-text text-muted">Tinggi Badan dalam Cm.</small>
    </div>
    <div class="form-group">
      <label >Berat Badan</label>
      <input class="form-control" type="number" name="berat_badan" placeholder="Masukan Berat Badan" required>
      <small class="form-text text-muted">Berat Badan dalam Kg.</small>
    </div>
		<div class="form-group">
      <label>Golongan Darah</label>
      <select class="form-control" name="golongan_darah">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
      </select>
    </div>
    <div class="form-group">
      <label >Kewarganegaraan</label>
      <input class="form-control" type="text" name="kewarganegaraan" placeholder="Masukan Kewarganegaraan" required>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Alamat</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="alamat" required></textarea>
    </div>
    <br>
    <fieldset class="form-group">
      <legend></legend>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"  value="" required>
          Saya yakin data yang saya masukkan sudah benar.
        </label>
      </div>
    </fieldset>
    <button class="btn btn-success" type="submit" name="submit">Submit</button><br><br><br>
  </fieldset>
</form>
    </div>
  </div>
</div>
