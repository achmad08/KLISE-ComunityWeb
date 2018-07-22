
<?php 
include_once "header1.php";
?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

<form class="form-horizontal" method = 'POST' action="aksi_tambah.php">
<fieldset>

<!-- Form Name -->
<legend ></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="nama" class="form-control input-md">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Jenis_kelamin">Jenis Kelamin</label>
  <div class="col-md-2">
    <select id="Jenis_kelamin" name="Jenis_kelamin" class="form-control">
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="HP">No HP</label>  
  <div class="col-md-4">
  <input id="HP" name="HP" type="text" placeholder="No HP/WA/BBM" class="form-control input-md">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="Masukkan Email Anda" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nominal">Nominal Donasi</label>
  <div class="col-md-2">
    <select id="nominal" name="nominal" class="form-control">
      <option value="100000">Rp.100.000</option>
      <option value="250000">Rp.250.000</option>
      <option value="300000">500.000</option>
      <option value="400000">1.000.000</option>
      <option value="500000">1.500.000</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="metode">Metode Pembayaran</label>
  <div class="col-md-2">
    <select id="metode" name="metode" class="form-control">
      <option value="Datang Langsung">Datang Langsung</option>
      <option value="Transfer">Transfer</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kirim"></label>
  <div class="col-md-4">
    <a id="kirim" name="kirim" class="btn btn-success" value="kirim" href="thanks.html" >kirim</a>
  </div>
</div>
</fieldset>
</form>
<?php 
include_once "footer.php";
?>

                                		
