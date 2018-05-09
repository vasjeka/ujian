<?php echo form_open("matpel/update");?>
<input type="hidden" name="id" value="<?php echo $edit->matpel_id; ?>">
<div class="panel panel-default">
  <div class="panel-heading">
      <h2><strong>Ubah Datar</strong></h2>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="">Mata Pelajaran :</label>
      <input type="text" class="form-control" id="" placeholder="" name="mata_pelajaran" value="<?php echo $edit->mata_pelajaran; ?>">
      <p class="help-block"></p>
    </div>

  </div>
  <div class="panel-footer">
    <button type="submit" name="buttonback" value="button" class="btn btn-warning">Simpan</button>
  </div>
</div>

<?php echo form_close(); ?>
