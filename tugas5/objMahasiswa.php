<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
<form action="#" method="post">
        <table border="1" align="center" cellpadding="15" width="60%">
            <thead bgcolor="#5755FE">
                <tr>
                    <th colspan="2">Form Nilai Ujian</th>
                </tr>
            </thead>
            <tfoot bgcolor="#5755FE">
                <tr>
                    <th colspan="2">
                        <input type="submit" value="Kirim" name="proses">
                    </th>
                </tr>
            </tfoot>
            <tbody align="center" bgcolor="#8B93FF">
                <tr>
                    <td>
                        <label for=""> Masukkan NIM : </label>
                    </td>
                    <td>
                        <input type="number" name="nim" id="" placeholder="Masukkan NIM" size="22">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=""> Masukkan Nama : </label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="" placeholder="Masukkan Nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Kuliah : </label>
                    </td>
                    <td>
                        <select name="kuliah" id="" class="custom-select">
                            <option value=""> ---PILIH TEMPAT KULIAH--- </option>
                            <option value="Universitas Sriwijaya">Universitas Sriwijaya</option>
                            <option value="Universitas Indonesia">Universitas Indonesia</option>
                            <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mata Kuliah : </label>
                    </td>
                    <td>
                        <select name="matkul" id="" class="custom-select">
                            <option value="">---- PILIH MATA KULIAH ---- </option>
                            <option value="PHP">PHP</option>
                            <option value="HTML">HTML</option>
                            <option value="Laravel">Laravel</option>
                            <option value="MySQL">MySQL</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=""> Masukkan Nilai : </label>
                    </td>
                    <td>
                        <input type="number" name="nilai" id="" placeholder="Masukkan Nilai" size="22">
                    </td>
                </tr>
            </tbody>
        </table>
    </form><hr>
    <?php 
        require_once 'Mahasiswa.php';
        if(isset($_POST['proses'])){

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $kuliah = $_POST['kuliah'];
            $matkul = $_POST['matkul'];
            $nilai = $_POST['nilai'];

            $ns1 = new Mahasiswa("$nim", "$nama", "$kuliah", "$matkul", "$nilai");
    ?>
    <table border="1" align="center" width="100%" >
    <thead bgcolor="#5755FE">
        <tr align="center">
            <th>NIM</th>
            <th>Nama</th>
            <th>Kuliah</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Status</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody bgcolor="#8B93FF">
        <tr align="center">
            <td><?= $ns1 -> nim ?></td>
            <td><?= $ns1 -> nama ?></td>
            <td><?= $ns1 -> kuliah ?></td>
            <td><?= $ns1 -> matkul ?></td>
            <td><?= $ns1 -> nilai ?></td>
            <td><?= $ns1 -> getStatus() ?></td>
            <td><?= $ns1 -> getGrade() ?></td>
            <td><?= $ns1 -> getPredikat() ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
</body>
</html>