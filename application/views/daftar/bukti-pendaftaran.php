<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB BAITUN NAIM - Kode Pendaftaran ditemukan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?=base_url()?>public/app-icon.png">
  <link rel="stylesheet" href="<?=base_url()?>public/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/css/daftar.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        .mobile {
            display:none;
        }
        @media only screen and (max-width: 768px) {
            .desktop {
                display:none;
            }
          .mobile {
            display: block;
          }
        }
        fieldset {
            width:100%!important;
            margin:auto!important;
        }
    </style>
</head>
<body>
<div class="container">
<!-- MultiStep Form -->
<div class="row">
    <div id="msform" class="desktop">
        <div class="col-md-12">
            <!-- fieldsets -->
            <fieldset class="active">
              <center>
                <h2>Informasi Pendaftaran</h2>
                <br>
                <img src="<?=$pas_foto->file_url?>" width="150px" height="200px" style="object-fit: cover;object-position: center;">
                <br>
                <p></p>
              </center>
              <table width="100%">
                <tr>
                  <td valign="top">
                    <table class="table table-bordered">
                      <tr>
                        <td width="250px">No. Pendaftaran</td>
                        <td><b><?=$siswa->register_number?></b></td>
                      </tr>
                      <tr>
                        <td>Jenjang</td>
                        <td><?=explode('.',$siswa->register_number)[0]?></td>
                      </tr>
                      <tr>
                        <td>Tempat / Tanggal Lahir</td>
                        <td><?=$siswa->birthplace?>, <?=tanggal_indo($siswa->birthdate)?></td>
                      </tr>
                      <tr>
                        <td>Waktu Mendaftar</td>
                        <td><?=tanggal_indo(date('Y-m-d',strtotime($siswa->registered_at))).', '.date('H:i:s',strtotime($siswa->registered_at))?></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td><b><?=$siswa->status?></b></td>
                      </tr>
                      <tr>
                        <td>QR Code</td>
                        <td><img src="<?=$qrcode?>" width="150px" height="200px" style="object-fit: contain;object-position: center;"></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </fieldset>
        
        <!-- /.link to designify.me code snippets -->
        </div>
    </div>
    
    <div id="msform" class="mobile">
        <div class="col-md-12">
            <!-- fieldsets -->
            <fieldset class="active">
              <center>
                <h2>Informasi Pendaftaran</h2>
                <br>
                <img src="<?=$pas_foto?>" width="150px" height="200px" style="object-fit: cover;object-position: center;display:block">
                <br>
              </center>
                <table class="table table-bordered">
                  <tr>
                    <td width="250px">No. Pendaftaran</td>
                    <td><b><?=$siswa->register_number?></b></td>
                  </tr>
                  <tr>
                    <td>Jenjang</td>
                    <td><?=explode('.',$siswa->register_number)[0]?></td>
                  </tr>
                  <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td><?=$siswa->birthplace?>, <?=tanggal_indo($siswa->birthdate)?></td>
                  </tr>
                  <tr>
                    <td>Waktu Mendaftar</td>
                    <td><?=tanggal_indo(date('Y-m-d',strtotime($siswa->registered_at))).', '.date('H:i:s',strtotime($siswa->registered_at))?></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td><b><?=$siswa->status?></b></td>
                  </tr>
                  <tr>
                    <td>QR Code</td>
                    <td><img src="<?=$qrcode?>" width="150px" height="200px" style="object-fit: contain;object-position: center;"></td>
                  </tr>
                </table>
            </fieldset>
        
        <!-- /.link to designify.me code snippets -->
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
</div>
<!-- jQuery 3 -->
</body>
</html>