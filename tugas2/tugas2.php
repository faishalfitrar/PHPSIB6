<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <form action="#" method="post">
        <table border="1" align="center" cellpadding="15" width="40%">
            <thead>
                <tr bgcolor="cream">
                    <th colspan="2">Form Belanja</th>
                </tr>
            </thead>
            <tfoot bgcolor="cream">
                <tr>
                    <th colspan="2">
                        <input type="submit" name="beli" value="Beli"> 
                        <input type="reset" name="batal" value="Batal">
                    </th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>
                        <label for=""> Nama Pelanggan : </label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="" placeholder="Masukkan Nama" size="30">
                    </td>
                </tr>    
                <tr>
                    <td>
                        <label for="">Produk Pilihan : </label>
                    </td>
                    <td>
                        <select id="produk" name="produk" class="custom-select">
                            <option value="">--PILIHAN PRODUK--</option>
                            <option value="TV">TV</option>
                            <option value="Kulkas">Kulkas</option>
                            <option value="AC">AC</option>
                            <option value="Radio">Radio</option>
                        </select>
                    </td>
                </tr>        
                <tr>
                    <td>
                        <label for="">Jumlah Beli : </label>
                    </td>
                    <td>
                        <input type="number" name="jml" id="" placeholder="Masukkan Harga Satuan">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>    
</body>
</html>

<?php 
if(isset($_POST['beli'])){
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jml'];

    switch($produk){
        case 'TV': 
            $harsat = 1250000;
            break;
        case 'Kulkas':
            $harsat = 1500000;
            break;
        case 'AC':
            $harsat = 1750000;
            break;
        case 'Radio':
            $harsat = 2000000;
    }
    $total = $harsat * $jumlah;
    $diskon = 0.2 * $total;
    $pajak = 0.1 * ($total - $diskon);
    $harber = ($total - $diskon) + $pajak; 
?>
<center>
    <h5>Nama Pelanggan : Rp<?= $nama ?></h5>
    <h5>Produk Pilihan : Rp<?= $produk ?></h5>
    <h5>Jumlah Beli : Rp<?= $jumlah ?></h5>
    <h5>Harga Satuan : Rp<?= number_format($harsat) ?></h5>
    <h5>Total Belanja : Rp<?= number_format($total) ?></h5>
    <h5>Potongan Diskon : Rp<?= number_format($diskon) ?></h5>
    <h5>PPN : Rp<?= number_format($pajak) ?></h5>
    <h5>Harga Bersih : Rp<?= number_format($harber)?></h5>
</center>
<?php } ?>