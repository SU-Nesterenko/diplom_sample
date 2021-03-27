<?php
	require_once("$_SERVER[DOCUMENT_ROOT]/../db/dal.inc.php");
	require_once("XML/RPC/Server.php");
	require_once("XML/RPC.php");
	
	function ListLanguages() {
		return new XML_RPC_Response(			
				XML_RPC_encode(DBListLanguages())			
		);
	}
	
	$map=Array(
			"myservice:ListLanguages"=>Array(
				"function"=>"ListLanguages",
				"signature"=>Array(
					Array("array")
				)
			)
		);
	
	$srv=new XML_RPC_Server($map,1,1);
