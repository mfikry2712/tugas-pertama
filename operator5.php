<?php
$var1 =$_POST["kiri"];
$var2 =$_POST["operator"];
$var3 =$_POST["kanan"];

if ($var2=="and"){
//$jumlah=;
echo "$var1&&$var3";
if ($var1=="1"&&$var3=="1")
echo "<br>TRUE";
if ($var1=="1"&&$var3=="0")
echo "<br>FALSE";
}
else if ($var3=="or"){
$jumlah=$var1 || $var2;
echo "$var1 || $var2";
if ($jumlah==1)
echo "<br>TRUE";
if ($jumlah!=1)
echo "<br>FALSE";
}
else if ($var3=="xor"){
$jumlah=$var1 xor $var2;
echo "$var1 xor $var2";
if ($jumlah==1)
echo "<br>TRUE";
if ($jumlah!=1)
echo "<br>FALSE";
}
else if ($var3=="not"){
if ($var1=="True")
echo $hasil=="False";
else if ($var1=="false")
echo $hasil=="True";
echo "<br>$hasil";
}
?>