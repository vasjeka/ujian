  <h1>
    Mata Pelajaran
  </h1>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="border-top:2px solid #00a65a;">
        <div class="box-header">
          <h3 class="box-title">Daftar Mata Pelajaran</h3>
        </div>
        <div class="box-body">
          <a href="<?php echo base_url('matpel/tambah');?>" class="btn btn-success">Tambah Mata Pelajaran</a><br><br>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  if ($query->num_rows() > 0) {
                      $no=1;
                      foreach ($query->result() as $row) {
                        echo '
                          <tr>
                          <td>'.$no.'</td>
                          <td>'.$row->mata_pelajaran.'</td>
                          <td>
                          <a href="'.base_url('matpel/edit/'.$row->matpel_id).'" class="btn btn-success btn-xs">Edit</a>
                          <a href="'.base_url('matpel/hapus/'.$row->matpel_id).'" class="btn btn-danger btn-xs">Hapus</a>
                          </td>
                          </tr>
                        ';$no++;
                      }
                  }else {
                    echo '<td colspan="8" style="text-align:center;">Data Masih Konsong</td>';
                  }
                 ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
