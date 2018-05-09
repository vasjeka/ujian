<?php echo form_open("matpel/tambah_proses");?>

<div class="panel panel-default">
  <div class="panel-heading">
      <h2><strong>Tambah Mata Pelajaran</strong></h2>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="">Mata Pelajaran :</label>
      <input type="text" class="form-control" id="" placeholder="" name="mata_pelajaran">
      <p class="help-block"></p>
    </div>
  <div class="panel-footer">
    <button type="submit" name="buttonback" value="button" class="btn btn-warning">Tambah Matpel</button>
  </div>
</div>

<?php echo form_close(); ?>
