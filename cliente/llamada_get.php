<?php

	$url = "localhost/000servicios/008/servidor/index.php/usuario";
	//$url = "localhost/000servicios/008/servidor/index.php/usuario/2";
	
	$url = str_replace(' ', '%20', $url);
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$data = curl_exec($curl);
	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
	$data_convertido = json_decode($data, true);
	
	if ($httpcode == 200){print_r($data_convertido);}
	if ($httpcode == 500){echo "Error 500. Internal server error";}
	if ($httpcode == 404){echo "Error 404. Page not found";}
	
?>


