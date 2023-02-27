<?php

if (isset($_POST['button'])) {
	$base=$_POST['base'];	
	$altura=$_POST['altura'];

	if (empty($_POST['base']) || empty($_POST['altura'])) {
		
	}else{

		$total=(($base*$altura));
		echo "<br>";
		echo "<h3>El lado es= $base cm<br></h3>";
		echo "<h2>La altura es= $altura cm<br></h2>";
		echo "<h1>Total del area es= $total cm2<br></h1>";


	}}

?>