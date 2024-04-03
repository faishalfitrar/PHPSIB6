<?php
    //sertakan file classnya
    require_once 'Siswa.php';

    //ciptakan objek
    $ns1 = new Siswa('Jamal', 40, 'PHP');
    $ns2 = new Siswa('Dono', 90, 'UIUX');
    $ns3 = new Siswa('Tina', 50, 'Laravel');

    $ar_siswa = [$ns1, $ns2, $ns3];

    //cetak
    foreach ($ar_siswa as $value) {
        echo $value->nama.'<br>';
        echo $value->nilai.'<br>';
        echo $value->pelajaran.'<br>';
    }

    echo '<hr>';

    //ciptakan objek
    // $ns1 = new Siswa();
    // $ns1 -> nama = "Jamal";
    // $ns1 -> nilai = 90;
    // $ns1 -> pelajaran = "PHP";

    //cetak
    // echo $ns1 -> nama;
    // echo $ns1 -> nilai;
    // echo $ns1 -> pelajaran;
    // echo $ns1 -> getHasil();
?>
<h2 align="center">Daftar Nilai Siswa</h2>
<table border="1" align="center" width="50%" >
    <thead>
        <tr align="center">
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Pelajaran</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach ($ar_siswa as $sis){
        ?>
        <tr align="center">
            <td><?= $no ?></td>
            <td><?= $sis -> nama ?></td>
            <td><?= $sis -> nilai ?></td>
            <td><?= $sis -> pelajaran ?></td>
            <td><?= $sis -> getHasil() ?></td>
        </tr>

        <?php $no++; } ?>
    </tbody>
</table>