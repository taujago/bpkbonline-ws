
     <div style="width:1000px; margin:10px; font-size:12px;">
			<form id="frm" method="post" />
			<table width="100%" border="0" class="listtabel">
               

        <tr class="tr_program">
                <td width="18%">Kelompok Belanja</td>
                <td width="1%">:</td>
                <td width="76%"><?php echo form_dropdown(null,$this->dm->arr_id_program(),'','id="program" onchange="get_child(this,\'akun_program\',\'#id_kegiatan\')" class="form-control"') ?></td>
                <td width="5%">&nbsp;</td>
              </tr>
            <!--   <tr  class="tr_program">
                <td>&nbsp;</td>
                <td>:</td>
                <td><select    id="id_kegiatan2" onchange="get_child(this,'akun_program','#id_kegiatan')">
                </select></td>
                <td>&nbsp;</td>
              </tr> -->
              <tr  class="tr_program">
                <td>Kegiatan </td>
                <td>:</td>
                <td><select name="id_kegiatan"   id="id_kegiatan"  class="form-control">
                </select></td>
                <td>&nbsp;</td>
              </tr>





              <tr>
                <td>Tanggal </td>
                <td>: </td>
                <td><select name="tanggal" id="tanggal"  class="form-control">
                </select></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><!--<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()" >CETAK </a>	-->
                <a href="#" class="btn btn-lg btn-primary"  onclick="cetak()" ><i class="glyphicon glyphicon-print"></i> Cetak </a>	</td>
                <td>&nbsp;</td>
              </tr>
       </table>
</form>
     </div>
     
<!-- --> 

<!-- url="<?php echo site_url("$controller/get_data")  ?>"-->
 <!-- GRID DIMULAI --><!-- end of grid -->      
     

 
 <?php
$this->load->view($controller."_view_js"); 
?>
