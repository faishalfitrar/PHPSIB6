<?php 
    $a1 = ["kode" => '1111', 'buah' => 'Apel', 'harga' => 20000, 'jumlah' => 4];
    $a2 = ["kode" => '2222', 'buah' => 'Jeruk', 'harga' => 25000, 'jumlah' => 5];
    $a3 = ["kode" => '3333', 'buah' => 'Mangga', 'harga' => 30000, 'jumlah' => 6];
    $a4 = ["kode" => '4444', 'buah' => 'Jambu', 'harga' => 35000, 'jumlah' => 7];
    $a5 = ["kode" => '5555', 'buah' => 'Durian', 'harga' => 40000, 'jumlah' => 8];

    $ar_buah = [$a1, $a2, $a3, $a4, $a5];

    //deklarasikan nama2 judul pada tabel header menggunakan looping array
    $ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];

    //fungsi agregat di array
    $jumlah_harga = array_column($ar_buah, 'harga');
    $jumlah_total = array_sum($jumlah_harga);
    $harga_tertinggi = max($jumlah_harga);
    $harga_terendah = min($jumlah_harga);
    $jumlah_transaksi = count($ar_buah);
    $harga_rata2 = $harga_total/$jumlah_transaksi;

    $keterangan = [
        'Harga Total' => $jumlah_total,
        'Harga Tertinggi' => $harga_tertinggi,
        'Harga Terendah' => $harga_terendah,
        'Jumlah Buah' => $jumlah_transaksi,
        'Rata-Rata Harga' => $harga_rata2
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah-Buahan</title>
</head>
<body>
    <h3 align="center">Daftar Buah - Buahan</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
            <?php foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($ar_buah as $nama) {
                    //harga bruto = harga * jumlah
                    $bruto = $nama['harga'] * $nama['jumlah'];
                    //diskon = jika durian dengan jumlah beli >= 5 dpt diskon 20%, selain itu 10%
                    $diskon = ($nama['buah'] == 'Durian' && $nama['jumlah'] >= 5) ? 0.2 : 0.1;
                    $harga_diskon = $diskon * $bruto;
                    $harga_bayar = $bruto - $harga_diskon;
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $nama['kode'] ?></td>
                <td><?= $nama['buah'] ?></td>
                <td>Rp<?= number_format($nama['harga']) ?></td>
                <td><?= $nama['jumlah'] ?></td>
                <td>Rp <?= number_format($bruto) ?></td>
                <td>Rp <?= number_format($harga_diskon) ?></td>
                <td>Rp <?= number_format($harga_bayar) ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
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