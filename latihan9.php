<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="10" align="center">
        <thead>
            <tr bgcolor="yellow">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($no = 1; $no <= 10; $no++){
                    //tentukan warna genap/ganjil konsep ternary
                    //jika nomor modulus(%) 2 tidak ada 0
                    $warna = ($no % 2 == 0) ? 'red' : 'blue';

                    echo "<tr bgcolor='$warna'>";
                    echo "<td>$no</td>";
                    echo "<td>Nama Siswa $no</td>";
                    echo "<td>Jl. Bogor Raya No. $no</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</body>
</html>