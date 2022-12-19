<center>
  <h2 class="fs-title">Data Pribadi</h2>
  <h3 class="fs-subtitle">Data Pribadi Calon Siswa</h3>
</center>
<div class="row equal">
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>NIK <small>*</small></label>
      <input type="text" pattern="[0-9]{16}" maxlength="16" name="data_pribadi[NIK]" placeholder="NIK" required="" class="form-control" value="<?=$siswa->NIK?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Nama Lengkap <small>*</small></label>
      <input type="text" name="data_pribadi[name]" placeholder="Nama Lengkap" required="" class="form-control" value="<?=$siswa->name?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Nama Panggilan <small>*</small></label>
      <input type="text" name="data_pribadi[nickname]" placeholder="Nama Panggilan" required="" class="form-control" value="<?=$siswa->nickname?>"/>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">  
    <div class="form-group">
      <label>Jenis Kelamin <small>*</small></label>
      <select name="data_pribadi[gender]" class="form-control" required="">
        <option value="">- Pilih Jenis Kelamin -</option>
        <option value="Laki-laki" <?=$siswa->gender=='Laki-laki'?'selected=""':''?>>Laki-laki</option>
        <option value="Perempuan" <?=$siswa->gender=='Perempuan'?'selected=""':''?>>Perempuan</option>
      </select>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tempat Lahir <small>*</small></label>
      <input type="text" name="data_pribadi[birthplace]" placeholder="Tempat Lahir" required="" class="form-control" value="<?=$siswa->birthplace?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tanggal Lahir <small>*</small></label>
      <input type="date" name="data_pribadi[birthdate]" placeholder="Tanggal Lahir" required="" class="form-control" value="<?=$siswa->birthdate?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Agama <small>*</small></label>
      <input type="text" name="data_pribadi[religion]" placeholder="Agama" required="" class="form-control" value="<?=$siswa->religion?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="data_pribadi[address]" placeholder="Alamat" required="" class="form-control"><?=$siswa->address?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Bahasa Sehari-hari <small>*</small></label>
      <select name="bahasa" class="form-control bahasa" required="">
        <option value="">- Pilih Bahasa -</option>
        <option value="Indonesia" <?=$siswa->language=='Indonesia'?'selected=""':''?>>Indonesia</option>
        <option value="Jawa" <?=$siswa->language=='Jawa'?'selected=""':''?>>Jawa</option>
        <option value="Lainnya" <?=!in_array($siswa->language,['Jawa','Indonesia'])?'selected=""':''?>>Lainnya</option>
      </select>
      <input type="text" name="data_pribadi[language]" placeholder="Bahasa Sehari-hari" required="" class="form-control" value="<?=$siswa->language?>" <?=!in_array($siswa->language,['Jawa','Indonesia'])?'':'style="display: none"'?> />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tinggal Dengan <small>*</small></label>
      <select name="tinggal_dengan" class="form-control tinggal_dengan" required="">
        <option value="">- Pilih -</option>
        <option value="Orang Tua" <?=$siswa->life_with=='Orang Tua'?'selected=""':''?>>Orang Tua</option>
        <option value="Kakek/Nenek" <?=$siswa->life_with=='Kakek/Nenek'?'selected=""':''?>>Kakek/Nenek</option>
        <option value="Saudara/Paman" <?=$siswa->life_with=='Saudara/Paman'?'selected=""':''?>>Saudara/Paman</option>
        <option value="Lainnya" <?=!in_array($siswa->life_with,['Orang Tua','Kakek/Nenek','Saudara/Paman'])?'selected=""':''?>>Lainnya</option>
      </select>
      <input type="text" name="data_pribadi[life_with]" placeholder="Tinggal Dengan" required="" class="form-control" value="<?=$siswa->life_with?>" <?=!in_array($siswa->life_with,['Orang Tua','Kakek/Nenek','Saudara/Paman'])?'':'style="display: none"'?> />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Anak Ke <small>*</small></label>
      <input type="number" min="1" name="data_pribadi[birth_order]" placeholder="Anak Ke" required="" class="form-control" value="<?=$siswa->birth_order?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Jumlah Saudara Kandung</label>
      <input min="0" type="number" name="data_pribadi[num_of_siblings]" placeholder="Jumlah Saudara Kandung" required="" class="form-control" onchange="appendSiblings(this.value)" value="<?=$siswa->num_of_siblings?>" />
    </div>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive siblings-field"></div>
  </div>
</div>

<?php if($jenjang !== 'PAUD'): ?>
<center>
  <h2 class="fs-title">Asal Sekolah</h2>
</center>
<div class="row">
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Nama <?=$jenjang == 'TK'?'PAUD/PLAY GROUP':'TK/RA'?> <small>*</small></label>
      <input type="text" name="asal_sekolah[name]" placeholder="Asal Sekolah" class="form-control" value="<?=$sekolah->name?>" required/>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>No Telepon <small>*</small></label>
      <input type="tel" maxlength="12" name="asal_sekolah[phone]" placeholder="No Telepon" class="form-control phone" value="<?=$sekolah->phone?>" required/>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="form-group">
      <label>Alamat Sekolah <small>*</small></label>
      <textarea name="asal_sekolah[address]" placeholder="Alamat Sekolah" class="form-control" required><?=$sekolah->address?></textarea>
    </div>
  </div>
</div>
<?php endif ?>

<center>
  <h2 class="fs-title">Prestasi</h2>
  <h3 class="fs-subtitle">Data Prestasi Akademik</h3>
</center>
<div class="row">
  <div class="col-sm-12">
    <button type="button" class="btn btn-primary" onclick="appendRow('.prestasi-akademik-row','akademik',-1)"><i class="fa fa-plus"></i> Tambah Prestasi</button>
    <p></p>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive prestasi-akademik">
      <table class="table table-bordered">
        <thead>
        <tr>
          <td>No</td>
          <td>Nama Kejuaran/Prestasi</td>
          <td>Juara</td>
          <td>Tingkat</td>
          <td>Penyelenggara</td>
        </tr>
        </thead>
        <tbody class="prestasi-akademik-row">
        </tbody>
      </table>
    </div>
  </div>
</div>

<center>
  <h3 class="fs-subtitle">Data Prestasi Non-Akademik</h3>
</center>
<div class="row">
  <div class="col-sm-12">
    <button type="button" class="btn btn-primary" onclick="appendRow('.prestasi-non-akademik-row','non-akademik',-1)"><i class="fa fa-plus"></i> Tambah Prestasi</button>
    <p></p>
  </div>
  <div class="col-sm-12">
    <div class="table-responsive prestasi-non-akademik">
      <table class="table table-bordered">
        <thead>
        <tr>
          <td>No</td>
          <td>Nama Kejuaran/Prestasi</td>
          <td>Juara</td>
          <td>Tingkat</td>
          <td>Penyelenggara</td>
        </tr>
        </thead>
        <tbody class="prestasi-non-akademik-row">
        </tbody>
      </table>
    </div>
  </div>
</div>