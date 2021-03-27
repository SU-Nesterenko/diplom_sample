<?php
	require_once("$_SERVER[DOCUMENT_ROOT]/../db/dal.inc.php");
	header("Content-type: text/xml; charset=utf-8");
	header("Cache-Control: no-store, no-cache");
	header("Expires: ".date("r"));
	
	//Для тестирования отключаем кэширование WSDL-файла
	ini_set("soap.wsdl_cache_enabled","0");
	
	//Класс, реализующий сервис
	class myservice
	{	
		//--------Person,People-------------------------------
		public function CreatePerson($params)
		{
			DBCreatePerson(
				$params->Name,
				$params->Age,
				$params->Mail,
				$params->LanguageID
			);
			
			return Array("state"=>true);
		}
		
		public function ListPeople()
		{
			return Array("Person"=>DBListPeople());
		}
		
		public function ReadPerson($params)
		{			
			return Array("Person"=>DBReadPerson($params->ID));
		}
		
		public function UpdatePerson($params)
		{			
			DBUpdatePerson(
				$params->ID,
				$params->Name,
				$params->Age,
				$params->Mail,
				$params->LanguageID
			);
			return Array("state"=>true);
		}
		
		public function DeletePerson($params)
		{			
			DBDeletePerson($params->ID);
			return Array("state"=>true);
		}
		//--------Languages----------------------------
		public function ListLanguages()
		{
			return Array("Language"=>DBListLanguages());
		}
		
		public function CreateLanguage($params)
		{
			DBCreateLanguage($params->Name);
			return Array("state"=>true);
		}
		
		public function ReadLanguage($params)
		{			
			return Array("Language"=>DBReadLanguage($params->ID));
		}
		
		public function UpdateLanguage($params)
		{			
			DBUpdateLanguage($params->ID,$params->Name);
			return Array("state"=>true);
		}
		
		public function DeleteLanguage($params)
		{			
			DBDeleteLanguage($params->ID);
			return Array("state"=>true);
		}
	}
	
	//создание SOAP-сервиса на основе
	//описания из WSDL-файла
	$server=new SoapServer(
	 "http://{$_SERVER['HTTP_HOST']}".
	 "/soapapi.wsdl.php");
	//указание того, какой класс реализует сервис
	$server->setClass("myservice");
	//запуск сервиса
	$server->handle();
