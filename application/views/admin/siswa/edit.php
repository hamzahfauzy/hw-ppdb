<style>
.row.equal {
    display: flex;
    flex-wrap: wrap;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Detail Calon Siswa</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('admin')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('admin/siswa')?>">Data Calon Siswa</a></li>
        <li class="active">Edit Calon Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-primary">
        <div class="box-body">
          <center>
            <br>
            <div id="qrcode">
              <img class="img-thumbnail" src="<?=$pas_foto??base_url($pas_foto->file_url)?>" width="150px" height="200px" style="object-fit: cover;object-position: center;">
            </div>
            <h2 class="fs-title">Edit Data Calon Siswa</h2>
          </center>
          <form method="post" action="<?=base_url('admin/siswa/doEdit/'.$siswa->id)?>">
              <?php $this->view('admin/siswa/_data-pribadi') ?>
              <?php $this->view('admin/siswa/_data-orang-tua') ?>
              <?php $this->view('admin/siswa/_angket-kesehatan') ?>
              <br>
              <button class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </section>
  </div>
  
<script src="<?=base_url()?>public/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>public/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
<?php if(!empty($saudara)): ?>
var data = <?=json_encode($saudara)?>;
<?php else: ?>
var data = {name:[],study_stage:[],majors:[],school_name:[]};
<?php endif ?>
function appendSiblings(value)
{
  if(value == 0 || value == undefined)
  {
    $('.siblings-field').html('')
    return
  }
  var siblings_field = `<table class="table table-bordered">
                          <tr>
                            <td>No</td>
                            <td>Nama Saudara</td>
                            <td>Jenjang Pendidikan</td>
                            <td>Nama Sekolah</td>
                            <td>Kelas / Jurusan</td>
                          </tr>
                       `
  if(data.name.length)
  {
    for(i=1;i<=value;i++)
    {
      var index = i-1
      siblings_field += `<tr>
                            <td>${i}</td>
                            <td><input type="text" name="data_saudara[name][]" onchange="data.name[${index}]=this.value" class="form-control" value="${data&&data[index]?data[index].name:''}"></td>
                            <td><input type="text" name="data_saudara[study_stage][]" onchange="data.study_stage[${index}]=this.value" class="form-control"  value="${data&&data[index]?data[index].study_stage:''}"></td>
                            <td><input type="text" name="data_saudara[school_name][]" class="form-control" onchange="data.school_name[${index}]=this.value" value="${data&&data[index].school_name?data[index].school_name:''}"></td>
                            <td><input type="text" name="data_saudara[majors][]" class="form-control" onchange="data.majors[${index}]=this.value" value="${data&&data[index]?data[index].majors:''}"></td>
                         </tr>
                        `
    }
  }
  else
  {
    for(i=1;i<=value;i++)
    {
      var index = i-1
      siblings_field += `<tr>
                            <td>${i}</td>
                            <td><input type="text" name="data_saudara[name][]" class="form-control" onchange="data.name[${index}]=this.value" value=""></td>
                            <td><input type="text" name="data_saudara[study_stage][]" class="form-control" onchange="data.study_stage[${index}]=this.value"  value=""></td>
                            <td><input type="text" name="data_saudara[school_name][]" class="form-control" onchange="data.school_name[${index}]=this.value" value=""></td>
                            <td><input type="text" name="data_saudara[majors][]" class="form-control" onchange="data.majors[${index}]=this.value" value=""></td>
                         </tr>
                        `
    }
  }
  siblings_field += '</table>'
  $(".siblings-field").html(siblings_field)
}

$(".phone").keypress(e => {
  if(event.which < 48 || event.which > 57 ) 
    if(event.which != 8) 
      return false;
})

function appendRow(element, tipe, index = 0)
{
  var data = []
  if(tipe == 'akademik')
  data = <?=json_encode($prestasi_akademis)?>;
  else
  data = <?=json_encode($prestasi_non_akademis)?>;
  if(index > -1)
  var el = `<tr>
              <td><button type='button' class='btn btn-danger' onclick='removeRow(this)'>&times;</button></td>
              <td><input name='prestasi[${tipe}][name][]' value="${data&&data[index]?data[index].name:''}" class='form-control'></td>
              <td><input name='prestasi[${tipe}][position][]' value="${data&&data[index].position?data[index].position:''}" class='form-control'></td>
              <td><input name='prestasi[${tipe}][level][]' value="${data&&data[index]?data[index].level:''}" class='form-control'></td>
              <td><input name='prestasi[${tipe}][organizer][]' value="${data&&data[index]?data[index].organizer:''}" class='form-control'></td>
            </tr>
              `
  else
  var el = `<tr>
              <td><button type='button' class='btn btn-danger' onclick='removeRow(this)'>&times;</button></td>
              <td><input name='prestasi[${tipe}][name][]' class='form-control'></td>
              <td><input name='prestasi[${tipe}][position][]' class='form-control'></td>
              <td><input name='prestasi[${tipe}][level][]' class='form-control'></td>
              <td><input name='prestasi[${tipe}][organizer][]' class='form-control'></td>
            </tr>
              `
  $(element).append(el)
}

function removeRow(el)
{
  $(el).parent().parent().remove()
}

$('.bahasa, .tinggal_dengan, .pendidikan_terakhir, .penghasilan_perbulan').change(function(e){
  var val = this.value
  if(val=='Lainnya')
  {
    $(this).next().val('')
    $(this).next().css('display','block')
    $(this).next().attr('required','')
  }
  else
  {
    $(this).next().val(val)
    $(this).next().css('display','none')
    $(this).next().removeAttr('required')
  }
})

$('.health_select').change(function(e){
  var val = this.value
  if(val=='YA')
  {
    $(this).next().val('')
    $(this).next().css('display','block')
    $(this).next().attr('required','')
  }
  else
  {
    $(this).next().val(val)
    $(this).next().css('display','none')
    $(this).next().removeAttr('required')
  }
})

$('.imudity_select').change(function(e){
  var val = this.value
  if(val=='Lainnya')
  {
    $(this).next().val("")
    $(this).next().css('display','block')
    $(this).next().attr('required','')
  }
  else
  {
    $(this).next().val(val)
    $(this).next().css('display','none')
    $(this).next().removeAttr('required')
  }
})
function showOverlay()
{
  $('.loading-overlay').css('display','block')
}
</script>
<?php if(!empty($saudara)): ?>
<script type="text/javascript">
  appendSiblings(<?=$siswa->num_of_siblings?>)
</script>
<?php endif ?>
<?php if(!empty($prestasi_akademis)): ?>
<script type="text/javascript">
  <?php foreach($prestasi_akademis as $key => $value): ?>
  appendRow('.prestasi-akademik-row','akademik',<?=$key?>)
  <?php endforeach ?>
</script>
<?php endif ?>
<?php if(!empty($prestasi_non_akademis)): ?>
<script type="text/javascript">
  <?php foreach($prestasi_non_akademis as $key => $value): ?>
  appendRow('.prestasi-non-akademik-row','non-akademik',<?=$key?>)
  <?php endforeach ?>
</script>
<?php endif ?>