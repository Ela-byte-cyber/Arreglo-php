<?php
	//echo "pipipipi";
	
	$instrumentos = array ("piano", "guitarra", "violín", "batería", "ukelele");
	$instrumentos[]="bajo";
	//print_r($instrumentos);
	
	//$instrumentos=["piano", "guitarra", "violín", "batería", "ukelele"];
	
	//unset($instrumentos[2]);
	
	//print_r($instrumentos);
	
	$instrumentosEliminar = "piano";
	$botoncito = array_search($instrumentosEliminar, $instrumentos);
	
	if($botoncito!==false){
	  unset($instrumentos[$botoncito]);
	}
	print_r($instrumentos);
	
?>