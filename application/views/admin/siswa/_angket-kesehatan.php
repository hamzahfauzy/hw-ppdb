<center>
  <h2 class="fs-title">Angket Kesetahan</h2>
  <h3 class="fs-subtitle">Isi Angket Kesehatan disini</h3>
</center>
<div class="row equal">
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Berat Badan (Kg) <small>*</small></label>
      <input type="number" min="1" name="kesehatan[weight]" placeholder="Berat Badan" required="" class="form-control" value="<?=$kesehatan->weight?>" />
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Tinggi Badan (cm) <small>*</small></label>
      <input type="number" min="1" name="kesehatan[hight]" placeholder="Tinggi Badan" required="" class="form-control" value="<?=$kesehatan->hight?>"/>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Golongan Darah <small>*</small></label>
      <select class="form-control" name="kesehatan[blood_type]" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['A','B','O','AB'] as $val): ?>
        <option value="<?=$val?>" <?=$kesehatan->blood_type==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Status Imunisasi <small>*</small></label>
      <select class="form-control imudity_select" name="imudity_status" required="">
        <option value="">- Pilih -</option>
        <?php foreach(['BCG','Campak','DPT 1,2,3','Hepatitis 1,2,3'] as $val): ?>
        <option value="<?=$val?>" <?=$kesehatan->imudity==$val?'selected=""':''?>><?=$val?></option>
        <?php endforeach ?>
        <option value="Lainnya" <?=!in_array($kesehatan->imudity,['BCG','Campak','DPT 1,2,3','Hepatitis 1,2,3'])?'selected=""':''?>>Lainnya</option>
      </select>
      <input type="text" name="kesehatan[imudity]" placeholder="Imunisasi Lainnya" class="form-control" value="<?=$kesehatan->imudity?>" <?=!in_array($kesehatan->imudity,['BCG','Campak','DPT 1,2,3','Hepatitis 1,2,3'])?'':'style="display: none"'?>>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Mengalami Gangguan Mata <small>*</small></label>
      <select class="form-control health_select" name="eye_problem_status" required="">
        <option value="">- Pilih -</option>
        <option value="YA" <?=$kesehatan->eye_problem_description!='TIDAK'?'selected=""':''?>>YA</option>
        <option value="TIDAK" <?=$kesehatan->eye_problem_description=='TIDAK'?'selected=""':''?>>TIDAK</option>
      </select>
      <textarea name="kesehatan[eye_problem_description]" placeholder="Deskripsi Gangguan Mata" class="form-control" <?=$kesehatan->eye_problem_description!='TIDAK'?'':'style="display: none"'?>><?=$kesehatan->eye_problem_description?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Mengalami Gangguan THT <small>*</small></label>
      <select class="form-control health_select" name="tht_problem_status" required="">
        <option value="">- Pilih -</option>
        <option value="YA" <?=$kesehatan->tht_problem_description!='TIDAK'?'selected=""':''?>>YA</option>
        <option value="TIDAK" <?=$kesehatan->tht_problem_description=='TIDAK'?'selected=""':''?>>TIDAK</option>
      </select>
      <textarea name="kesehatan[tht_problem_description]" placeholder="Deskripsi Gangguan THT" class="form-control" <?=$kesehatan->tht_problem_description!='TIDAK'?'':'style="display: none"'?>><?=$kesehatan->tht_problem_description?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Memiliki Alergi <small>*</small></label>
      <select class="form-control health_select" name="alergi_status" required="">
        <option value="">- Pilih -</option>
        <option value="YA" <?=$kesehatan->alergi_description!='TIDAK'?'selected=""':''?>>YA</option>
        <option value="TIDAK" <?=$kesehatan->alergi_description=='TIDAK'?'selected=""':''?>>TIDAK</option>
      </select>
      <textarea name="kesehatan[alergi_description]" placeholder="Penyebab Alergi" class="form-control" <?=$kesehatan->alergi_description!='TIDAK'?'':'style="display: none"'?>><?=$kesehatan->alergi_description?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Perawatan di Rumah Sakit <small>*</small></label>
      <select class="form-control health_select" name="opname_status" required="">
        <option value="">- Pilih -</option>
        <option value="YA" <?=$kesehatan->opname_description!='TIDAK'?'selected=""':''?>>YA</option>
        <option value="TIDAK" <?=$kesehatan->opname_description=='TIDAK'?'selected=""':''?>>TIDAK</option>
      </select>
      <textarea name="kesehatan[opname_description]" placeholder="Nama Rumah Sakit, Penyebab dirawat, tanggal dirawat, catatan lainnya" class="form-control" <?=$kesehatan->opname_description!='TIDAK'?'':'style="display: none"'?>><?=$kesehatan->opname_description?></textarea>
    </div>
  </div>
  <div class="col-sm-12 col-md-6">
    <div class="form-group">
      <label>Pernah Pergi ke Dokter <small>*</small></label>
      <select class="form-control health_select" name="went_to_doctor_status" required="">
        <option value="">- Pilih -</option>
        <option value="YA" <?=$kesehatan->went_to_doctor_description!='TIDAK'?'selected=""':''?>>YA</option>
        <option value="TIDAK" <?=$kesehatan->went_to_doctor_description=='TIDAK'?'selected=""':''?>>TIDAK</option>
      </select>
      <textarea name="kesehatan[went_to_doctor_description]" placeholder="Penyebab, Jenis Penyakit, catatan lainnya" class="form-control" <?=$kesehatan->went_to_doctor_description!='TIDAK'?'':'style="display: none"'?> ><?=$kesehatan->went_to_doctor_description?></textarea>
    </div>
  </div>
</div>