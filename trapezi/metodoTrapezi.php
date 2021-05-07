<?php

$b=$_POST['b'];
$a=$_POST['a'];
$N=$_POST['N'];
$F=$_POST['F'];
$h = ($b -$a) / $N;
$x0 = $a;

if($N % 2 != 0){
	echo '<script language="javascript">';
	echo 'alert("N deve essere divisibile per 2!")';
	echo '</script>';
	echo "<script>history.go(-1);</script>";
}
/*
$arrX = Array();
$arrX[0] = $x0;
echo $arrX[0];
echo "<br>";*/



$arrY = Array();
for($i = 0; $i <= $N; $i++){

	if($i == 0){
		$y =str_replace('x', $x0, $F);
	}else {
		$x1 = $x0 + $h;
		$y =str_replace('x', $x1, $F);

		$x0 = $x1;
	}

	$y=eval("return ".$y.";");
	$arrY[$i] = $y;
	//echo $arrY[$i];	//stampiamo tutti i valori di Y
	//echo "<br>";



}
//print_r ($arrY);

$A = 0;
for($j = 0; $j <= $N; $j++){

	if (($j == 0) || ($j == $N)){
		$A = $A + $arrY[$j];
		//echo $arrY[$j];
		//echo "<br>";
	}else {
		$A = $A + 2 * ($arrY[$j]);
		//echo $arrY[$j];
		//echo "<br>";
	}
}

$A = $A * ($h/2);
echo "<br>";
echo "IMPORTANTE  "."A = ";
echo $A;


$A1 = 0;
for($j = 0; $j <= $N; $j=$j+2){

	if (($j == 0) || ($j == $N)){
		$A1 = $A1 + $arrY[$j];
		//echo $arrY[$j];
		//echo "<br>";
	}else {
		$A1 = $A1 + 2 * ($arrY[$j]);
		//echo $arrY[$j];
		//echo "<br>";
	}
}

$A1 = $A1 * $h;
//echo "<br>";
//echo "A1 = ";
//echo $A1;

$E = abs($A - $A1 )/ 3;
echo "<br>";
echo "IMPORTANTE  "."E = ";
echo $E;






?>
