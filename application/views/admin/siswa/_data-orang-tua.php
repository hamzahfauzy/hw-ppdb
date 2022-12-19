
  <center>
    <h2 class="fs-title">Data Orang Tua / Wali</h2>
  </center>
  <?php foreach($orangtua as $key => $value): ?>
  <center>
    <h3 class="fs-subtitle">Keterangan Tentang <?=$value->parent_type?></h3>
  </center>
  <div class="row equal">
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Nama Lengkap dan gelar <small>*</small></label>
        <input type="text" value="<?=$value->name?>" name="data_orang_tua[<?=$value->parent_type?>][name]" placeholder="Nama Lengkap dan gelar" <?=$value->parent_type!='wali'?'required=""':''?> class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Agama <small>*</small></label>
        <input type="text" value="<?=$value->religion?>" name="data_orang_tua[<?=$value->parent_type?>][religion]" placeholder="Agama" <?=$value->parent_type!='wali'?'required=""':''?> class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Pendidikan Terakhir <small>*</small></label>
        <select name="pendidikan_terakhir[<?=$value->parent_type?>]" class="form-control pendidikan_terakhir" <?=$value->parent_type!='wali'?'required=""':''?>>
          <option value="">- Pilih -</option>
          <option value="SMA" <?=$value->last_study=='SMA'?'selected=""':''?>>SMA</option>
          <option value="Akademik" <?=$value->last_study=='Akademik'?'selected=""':''?>>Akademik</option>
          <option value="Sarjana" <?=$value->last_study=='Sarjana'?'selected=""':''?>>Sarjana</option>
          <option value="Lainnya" <?=!in_array($value->last_study,['SMA','Akademik','Sarjana'])?'selected=""':''?>>Lainnya</option>
        </select>
        <input type="text" value="<?=$value->last_study?>" name="data_orang_tua[<?=$value->parent_type?>][last_study]" placeholder="Pendidikan Terakhir" <?=$value->parent_type!='wali'?'required=""':''?> class="form-control" <?=!in_array($value->last_study,['SMA','Akademik','Sarjana'])?'':'style="display: none"'?>/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Pekerjaan</label>
        <input type="text" value="<?=$value->work?>" name="data_orang_tua[<?=$value->parent_type?>][work]" placeholder="Pekerjaan" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Nama Instansi</label>
        <input type="text" value="<?=$value->work_instance?>" name="data_orang_tua[<?=$value->parent_type?>][work_instance]" placeholder="Nama Instansi" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>No Telepon Instansi</label>
        <input type="text" value="<?=$value->work_instance_phone?>" name="data_orang_tua[<?=$value->parent_type?>][work_instance_phone]" placeholder="No Telepon Instansi" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="data_orang_tua[<?=$value->parent_type?>][work_address]" placeholder="Alamat" class="form-control"><?=$value->work_address?></textarea>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Jabatan</label>
        <input type="text" value="<?=$value->position?>" name="data_orang_tua[<?=$value->parent_type?>][position]" placeholder="Jabatan" class="form-control"/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Penghasilan perbulan <small>*</small></label>
        <select name="penghasilan_perbulan[<?=$value->parent_type?>]" class="form-control penghasilan_perbulan" <?=$value->parent_type!='wali'?'required=""':''?>>
          <option value="">- Pilih -</option>
          <option value="<1,5 Juta" <?=$value->income=='<1,5 Juta'?'selected=""':''?>><1,5 Juta</option>
          <option value="2-3 Juta" <?=$value->income=='2-3 Juta'?'selected=""':''?>>2-3 Juta</option>
          <option value=">3 Juta" <?=$value->income=='>3 Juta'?'selected=""':''?>>>3 Juta</option>
          <option value="Lainnya" <?=!in_array($value->income,['<1,5 Juta','2-3 Juta','>3 Juta'])?'selected=""':''?>>Lainnya</option>
        </select>
        <input type="text" value="<?=$value->income?>" name="data_orang_tua[<?=$value->parent_type?>][income]" placeholder="Penghasilan perbulan" <?=$value->parent_type!='wali'?'required=""':''?> class="form-control" <?=!in_array($value->income,['<1,5 Juta','2-3 Juta','>3 Juta'])?'':'style="display: none"'?>/>
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div class="form-group">
        <label>Telepon Rumah / HP</label>
        <input type="tel" value="<?=$value->phone?>" name="data_orang_tua[<?=$value->parent_type?>][phone]" placeholder="Telepon Rumah / HP" class="form-control"/>
      </div>
    </div>
  </div>
  <?php endforeach ?>