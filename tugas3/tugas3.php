<?php 
    $a1 = ['nama' => 'Faishal', "nim" => '0001', 'nilai' => 95];
    $a2 = ['nama' => 'Ilham', "nim" => '0002', 'nilai' => 80];
    $a3 = ['nama' => 'Ical', "nim" => '0032', 'nilai' => 60];
    $a4 = ['nama' => 'Aldi', "nim" => '0053', 'nilai' => 20];
    $a5 = ['nama' => 'Alda', "nim" => '0124', 'nilai' => 45];
    $a6 = ['nama' => 'Aldo', "nim" => '0421', 'nilai' => 65];
    $a7 = ['nama' => 'Umar', "nim" => '0006', 'nilai' => 70];
    $a8 = ['nama' => 'Ali', "nim" => '1235', 'nilai' => 100];
    $a9 = ['nama' => 'Lukman', "nim" => '1234', 'nilai' => 10];
    $a10 = ['nama' => 'Akbar', "nim" => '0023', 'nilai' => 25];

    $ar_siswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];

    //deklarasikan nama2 judul pada tabel header menggunakan looping array
    $ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

    //fungsi agregat di array
    $jumlah_nilai = array_column($ar_siswa, 'nilai');
    $jumlah_total = array_sum($jumlah_nilai);
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $jumlah_siswa = count($ar_siswa);
    $nilai_rata2 = $jumlah_total/$jumlah_siswa;

    $keterangan = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata-rata' => $nilai_rata2,
        'Jumlah Mahasiswa' => $jumlah_siswa,
        'Jumlah Keseluruhan Nilai' => $jumlah_total
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP - Pertemuan 3</title>
</head>
<body>
    <h1 align="center">Daftar Nilai Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="80%" align="center">
        <thead bgcolor="khaki">
            <tr>
            <?php foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($ar_siswa as $nama) {
                    $lulus = ($nama['nilai'] >= 65 ) ? 'Lulus' : 'Gagal';
                    $warnabg = ($lulus == 'Lulus' ) ? 'lime' : 'red';

                    if ($nama['nilai'] >= 85 && $nama['nilai'] <= 100 ) $grade = 'A';
                    else if ($nama['nilai'] >= 75 && $nama['nilai'] < 85) $grade = 'B';
                    else if ($nama['nilai'] >= 50 && $nama['nilai'] < 75) $grade = 'C';
                    else if ($nama['nilai'] >= 20 && $nama['nilai'] < 50) $grade = 'D';
                    else if ($nama['nilai'] >= 0 && $nama['nilai'] < 20) $grade = 'E';
                    else $grade = '';

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
                            $predikat = 'Buruk';
                            break;
                        default:
                            $predikat = '';
                    }
            ?>
            <tr bgcolor="<?= $warnabg ?>">
                <td><?= $no++ ?></td>
                <td><?= $nama['nama'] ?></td>
                <td><?= $nama['nim'] ?></td>
                <td><?= $nama['nilai'] ?></td>
                <td><?= $lulus ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot bgcolor="khaki">
            <?php foreach($keterangan as $ket => $hasil){ ?>
                <tr>
                    <th colspan="5"><?= $ket ?></th>
                    <th colspan="3"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>