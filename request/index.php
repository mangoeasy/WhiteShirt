<?php
include_once "../includes/include.inc.php";
$client = new SoapClient ( WEBSERVICE_URL );
$cmd = isset ( $_REQUEST ['apiname'] ) ? $_REQUEST ['apiname'] : "";

if ($cmd == "saveSignatureResult") {
	$_customerId = isset ( $_REQUEST ['_customerId'] ) ? $_REQUEST ['_customerId'] : "";
	$_hotelRoom = isset ( $_REQUEST ['_hotelRoom'] ) ? $_REQUEST ['_hotelRoom'] : "";
	$_selectDrivingYear = isset ( $_REQUEST ['_selectDrivingYear'] ) ? $_REQUEST ['_selectDrivingYear'] : "";
	$param = array (
			'_customerId' => $_customerId,
			'_hotelRoom' => $_hotelRoom,
			'_selectDrivingYear' => $_selectDrivingYear 
	);
	$r = $client->saveSignatureResult ( $param );
	
	if (isset ( $r->saveSignatureResultResult )) {
		echo json_encode ( $r->saveSignatureResultResult );
	}
}

?>