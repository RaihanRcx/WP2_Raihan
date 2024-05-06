<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa </title>
</head>

<body>
    <center>
        <form action="<?= base_url('dlemas/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="isikan data">
                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                    </td>
                </tr>

                <tr>
                    <th>Nis</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="isikan data">
                        <div class="invalid-feedback"><?= form_error('nis') ?></div>
                    </td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="isikan data">
                        <div class="invalid-feedback"><?= form_error('kelas') ?></div>
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tanggal" id="tanggal" placeholder="yyyy-mm-dd">
                        <div class="invalid-feedback"><?= form_error('tanggal') ?></div>
                    </td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat" id="tempat" placeholder="isikan data">
                        <div class="invalid-feedback"><?= form_error('tempat') ?></div>
                    </td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="isikan data">
                        <div class="invalid-feedback"><?= form_error('alamat') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="kelamin" id="Pria" value="Pria">
                        <label for="laki">Pria</label>
                        <input type="radio" name="kelamin" id="Wanita" value="Wanita">
                        <label for="laki">Wanita</label>
                        <div class="invalid-feedback"><?= form_error('kelamin') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>

                        </select>
                        <div class="invalid-feedback"><?= form_error('agama') ?></div>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>