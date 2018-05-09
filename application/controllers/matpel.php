<?php
class Matpel extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model("Ujian_model");
  }
  public function index(){

    $this->load->helper('form');
    $data['query']=$this->Ujian_model->getAllData();
    $data['content'] = 'matpel/matpel_view';
    $this->load->view("template",$data);
  }
  public function tambah(){
    $data['content'] = 'matpel/tambah_matpel';
    $this->load->view('template',$data);
  }
  public function tambah_proses(){
    $mata_pelajaran = $this->input->post("mata_pelajaran");

    $data = array(
      "mata_pelajaran" => $mata_pelajaran
    );

    $insert = $this->db->insert("matpel",$data);
    if($insert){
      echo "
        <script>
          alert('Mata Pelajaran Berhasil Ditambahkan');
          window.location = '".base_url('matpel')."';
        </script>
      ";
    }
    else{
      echo "
        <script>
          alert('Data Gagal di Tambahkan');
          window.location = '".base_url('matpel/tambah')."';
        </script>
      ";
    }
  }
  public function edit($id){
    $data['edit'] = $this->db->get_where('matpel',['matpel_id'=>$id])->row();
    $data['content'] = 'matpel/edit_matpel';
    $this->load->view("template",$data);
  }
  public function update(){
    $id = $this->input->post("id");
    $mata_pelajaran = $this->input->post("mata_pelajaran");

    $data = array(
      "mata_pelajaran" => $mata_pelajaran
    );
    $this->db->where('matpel_id',$id);
    $insert = $this->db->update("matpel",$data);
    if($insert){
      echo "
        <script>
          alert('Data Berhasil di Edit');
          window.location = '".base_url('matpel')."';
        </script>
      ";
    }
    else{
      echo "
        <script>
          alert('Data Gagal di Edit');
          window.location = '".base_url('matpel/edit')."';
        </script>
      ";
    }
  }
  public function hapus($id){
    $this->db->delete('matpel',['matpel_id'=>$id]);
    redirect('matpel');
  }


}

 ?>
