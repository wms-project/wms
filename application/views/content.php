<?php

$mod = $_GET['module'];

if($mod=='pengguna'){
  include "modul/pengguna/index.php";
}
elseif($mod=='barang'){
  $this->load->view('modul/barang/index.php');
}
elseif($mod=='supplier'){
  $this->load->view('modul/supplier/index.php');
}
 ?>
