<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - Tanda Terima</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<img src="<?=$kop?>" width="100%">
<center>
  <h2>Hasil Observasi</h2>
  <p>
  PENERIMAAN CALON PESERTA DIDIK BARU<br>TAHUN PELAJARAN 2022-2023<br>GELOMBANG REGULER
  </p>
  <br>
</center>
<table width="100%">
    <tr>
        <td>Berdasarkan hasil oservasi gelombang reguler, maka calon peserta didik berikut ini :</td>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" border="1" cellpadding="5" cellspacing="0">
                <tr>
                <td width="250px">No. Pendaftaran</td>
                <td><b><?=$siswa->register_number?></b></td>
                </tr>
                <tr>
                <td>Nama Calon Peserta Didik</td>
                <td><?=$siswa->name?></td>
                </tr>
                <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td><?=$siswa->birthplace?>, <?=tanggal_indo($siswa->birthdate)?></td>
                </tr>
                <tr>
                <td>Asal Sekolah</td>
                <td>-</td>
                </tr>
                <tr>
                <td>Gelombang</td>
                <td><b>REGULAR</b></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <br>
            <br>
            Dinyatakan
            <div style="padding:15px;border:1px solid #000;width:200px;margin:auto;text-align:center;"><h1>DITERIMA</h1></div>
            <br>
            <br>
        </td>
    </tr>
    <tr>
        <td>
        Menjadi Siswa MI Al Maarif Ngadri Tahun Pelajaran 2023-2024 Demikian surat keterangan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terimakasih.
        </td>
    </tr>
    <tr>
        <td>
            <br><br><br>
            <table width="100%" border="0" cellpadding="5" cellspacing="0">
                <tr>
                    <td width="62%" valign="bottom">
                        Mengetahui,
                        <br>
                        Kepala MI Al Maarif Ngadri
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        UMI KUMAIDAH, S.Pd.I
                    </td>
                    <td valign="bottom">
                        Blitar, <?=tanggal_indo(date('Y-m-d'))?>
                        <br>
                        <br>
                        Ketua Panitia
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        DESI PUTRIWULANDARI, S.Pd
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>