<?php

if(isset($_REQUEST["nombre"])){
  $nombre=$_REQUEST["nombre"];

}else{
  $nombre='daniel';
}

$options= array(
  'location' 	=>	'https://servicios.documentosige.com.co/service.php?wsdl',
  'uri'		=>	'http://localhost/taller-1-main/soapserver.php'
);
$client=new SoapClient(NULL,$options);

if(isset($_REQUEST["nombre"])){
  $data['respuesta']=$client->hello($nombre);
  echo "</br>".$client->hello($nombre)."</br>";

}else{
  $data['respuesta']=$client->hello($nombre);
  echo "</br>".$client->hello($nombre)."</br>";
}


?>