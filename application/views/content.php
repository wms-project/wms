<?php

$mod = $_GET['module'];

if($mod=='pengguna'){
  include "modul/pengguna/index.php";
}
elseif($mod=='barang'){
  $this->load->view('modul/pengguna/json');
}

 ?>
