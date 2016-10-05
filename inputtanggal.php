<?php
$bln=array(1=>"Januari","Februari","Maret","April","Mei", "Juni","July","Agustus","September","Oktober", "November","Desember");

echo "Tanggal:<select name=tanggal>
<option value =01 selected>01</option>";
for($tgl=2;$tgl<=31;$tgl++){
$tgl_leng=strlen($tgl);
//buat tanggal
if($tgl_leng==1)
$i="0".$tgl;
else
$i=$tgl;
echo"<option value=$i>$i</option>";}
echo"</select>";

//buat bulan
echo"<select name=bulan>
<option value=januari selected>januari</option>";
for($bulan=2;$bulan<=12;$bulan++){
echo"<option value =$bulan>$bln[$bulan]</option>";}
echo"</select>";

//buat tahun
$now=date("Y");
echo"<select name=tahun>
<option value=1900 selected>1900</option>";
for($thn=1901;$thn<=$now;$thn++){
echo"<option value=$thn>$thn</option>";}
echo"</select>";
?>