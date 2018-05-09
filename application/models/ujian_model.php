<?php
  class Ujian_model extends CI_Model{
    function getAllData(){
      $this->db->order_by("matpel_id","ASC");
      $query = $this->db->get("matpel");
      return $query;
    }
  }
?>
