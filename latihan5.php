<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Input Nilai</h1>
<form action="#" method="post">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--PILIHAN MATA KULIAH--</option>
        <option value="HTML">HTML</option>
        <option value="UI/UX">UI/UX</option>
        <option value="PHP">PHP</option>
        <option value="Laravel">Laravel</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php

$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];
$proses = $_POST['proses'];

// ternary
$ket = ($nilai >= 60) ? "lulus" : "gagal";

//if else
if ($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if ($nilai >= 75 && $nilai < 85) $grade = 'B';
else if ($nilai >= 50 && $nilai < 75) $grade = 'C';
else if ($nilai >= 30 && $nilai < 50) $grade = 'D';
else if ($nilai >= 0 && $nilai < 30) $grade = 'E';
else $grade = '';

//switch case
switch($grade){
    case 'A': 
        $predikat = 'Memuaskan';
        break;
    case 'B': 
        $predikat = 'Bagus';
        break;
    case 'C': 
        $predikat = 'Cukup';
        break;
    case 'D': 
        $predikat = 'Kurang';
        break;
    case 'E': 
        $predikat = 'Jelek';
        break;
    default:
        $predikat = '';
}

echo '<hr>';
if(isset($proses)){ // sebagai pencegah error handling
?>

<h3>Nama Mahasiswa: <?= $nama ?></h3>
<h4>Mata Kuliah:   <?= $matkul ?></h4>
<h4>Nilai: <?= $nilai ?></h4>
<h4>Keterangan: <?= $ket ?></h4>
<h4>Grade: <?= $grade ?></h4>
<h4>Predikat: <?= $predikat ?></h4>

<?php } ?>