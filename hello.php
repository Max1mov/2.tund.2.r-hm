<?php
	
	$first_name = "Vitali";
	$last_name = "Maksimov";

	echo $first_name." ".$last_name;
	
?>

<br>
<?php

	$age = 2;
	// kui on väiksem kui 18, siis alaealine
	// kui on suurem siis täisealine
	if($age <19) { 
	//tõene
	echo "alaealine";
	
	} else {
		//väär
	echo "vale";
	}

?>

<?php
	
	//nii mitu korda välja "palju ", kui palju on vanust

	for($i = 0; $i < $age; $i = $i + 1 ) {

	//see mida korratakse
	echo "palju "; //to shto povtarjajetca
	
	
	
	}
	echo "onne"; //vkonce stavio onne
	
?>
	
	<br>
	
	<?php 
	//php.net
	//kuupäev kujul: friday, 11.09.2015
	echo( date("l"));
	
	?>
	
