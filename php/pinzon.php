<?php

$opc = $_GET['nombre'];

switch ($opc) {
	case 'While':
	
	$numero = 0;
	$DA=1;
	echo "<table border=3>";
	echo "<tr>";
	while($DA<=10){
		echo "<td>";
		echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$DA.":</td></tr>";
		$j=1;
		while($j<=10){
			$mult=$DA*$j;
			echo "<tr align=center><td>".$DA."</td><td> X </td><td>".$j."</td><td> = </td><td>".$mult."</td></tr>";
			$j++;
		}
		echo "</table>";
		$DA++;
		echo "</td>";
	}
	echo "</tr>";
	echo "</table>";
	break;
	case 'For':
	
	echo "<table  border=1>";
	echo "<tr>";
	for($i=1;$i<=10;$i++){
		echo "<td>";
		echo "<table  border=2>";
		echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$i.":</td></tr>";
		for($j=0;$j<=10;$j++){
			$mult=$i*$j;
			echo "<tr align=center><td>".$i."</td><td> X </td><td>".$j."</td><td> = </td><td>".$mult."</td></tr>";
		}
		echo "</table>";
		echo "</td>";
	}
	echo "<tr>";
	echo "</table>";
	break;
	
	case 'DoWhile':
	echo "<table border=3>";
	echo "<tr>";
	$DA=1;
	do{
		echo "<td>";
		echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$DA.":</td></tr>";
		$vi=1;
		do{
			
			$mult=$DA*$vi;
			echo "<tr align=center><td>".$DA."</td><td> X </td><td>".$vi."</td><td> = </td><td>".$mult."</td></tr>";
			$vi++;
			
		}while($vi<=10);
		echo "</table>";
		$DA++;
		echo "</td>";
	}while($DA<=10);
	echo "</tr";
	echo "</table>";
	break;
	default:
	echo "La table de multiplicar que ingresaste no esta disponible";
	break;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "hecho por daniel antionio viveros pinzon";
?>