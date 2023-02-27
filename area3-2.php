
<?php 

if(isset($_POST['button'])) {
	$base=$_POST['base'];
	$altura=$_POST['altura'];

	if (empty($_POST['base']) || empty($_POST['altura']) ){
		
	}else{

			$total=(($base*$altura)/2);
			echo "<br>";
			echo "<h3>La medida del lado es= $base cm<br></h3>";
			echo "<h2>La altura es= $altura cm<br><br></h2>";
			echo "<h1>Total del area es= $total cm2<br></h1>";
}}
?>