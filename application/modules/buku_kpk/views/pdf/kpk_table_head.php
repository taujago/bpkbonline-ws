 <?php 
  $tahun=$this->session->userdata("tahun_anggaran");
  $tahun_sebelum = $tahun - 1;
  $id_desa  = $this->session->userdata("id_desa");
  $data_desa = $this->cm->data_desa();
  $perdes = $this->cm->perdes();
?>
<style>

.kop td, .kop th {
  font-size:8px;
   
  
}


.cetak td, .cetak th {
  font-size:7px;
}
.tebal {
 font-weight:bold;
}

.judul {
   font-weight:bold;
font-size:10px;

}

table.cetak th {
  border : 1px solid #000;
}

table.cetak td {
  /*border-left : 1px solid #000;
  border-right : 1px solid #000;*/
  border:0.5px solid #000;
  
}
</style>
<table width="100%" border="0" cellpadding="3" class="cetak" >
    <thead>
    <tr>
      <th width="7%" align="center" scope="col"><strong>NOMOR</strong></th>
      <th width="21%" align="center" scope="col"><strong>PENERIMA</strong></th>
      <th width="52%" align="center" scope="col"><strong>URAIAN</strong></th>
      <th width="20%" align="center" scope="col"><strong>JUMLAH</strong></th>
    </tr>
    <tr>
      <th align="center"><strong>1</strong></th>
      <th align="center"><strong>2</strong></th>
      <th align="center">3</th>
      <th align="center">4</th>
    </tr>
      </thead>
  </table>