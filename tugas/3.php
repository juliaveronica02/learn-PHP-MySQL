<?php // menghitung penjualan bersih
$gaji_perhari=200000; 
$satu_bulan=22;
$transport=10000;
$umakan=12000;
$potongan=0.1; 
$net_income = $gaji_perhari*$satu_bulan - ($transport+$umakan+$potongan);
echo "Income bersih = Rp." .$net_income;
?>