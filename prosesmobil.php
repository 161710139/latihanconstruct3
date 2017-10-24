<?php
require_once 'mobil.php';

$mobil= new mobil('Toyota',2009,'Sedan');
echo 'Nama Mobil...'.$mobil->get_namamerk(). '<br>';
echo 'Tahun Keluaran...'.$mobil->get_tahun(). '<br>';
echo 'Bertype...'.$mobil->get_type(). '<br>';
?>