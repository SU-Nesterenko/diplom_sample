<? 

	/*$str=file_get_contents("php://input");
	file_put_contents("debug.log",$str);*/
	
	
 require_once("$_SERVER[DOCUMENT_ROOT]/../includes/flight/Flight.php");
 require_once("$_SERVER[DOCUMENT_ROOT]/../db/dal.inc.php");
 
 //CRUD - Create Read Update Delete
 
 function CreateLanguage() {
	 //file_put_contents("log.txt",var_export(Flight::request()->data["Name"],TRUE));
	 DBCreateLanguage(Flight::request()->data["Name"]);
 }
 Flight::route('PUT /rest/language',"CreateLanguage");
 
 function ListLanguages() {
		//echo "Hello from REST";
		Flight::json(DBListLanguages());
	}
	
 Flight::route("GET /rest/languages","ListLanguages");
 
 function ReadLanguage($id) {
		Flight::json(DBReadLanguage($id));
 }
 
 Flight::route('GET /rest/language\?id=@id',"ReadLanguage");
 
 function UpdateLanguage($id) {
	 DBUpdateLanguage($id,
		Flight::request()->data["Name"]
	 );
 }
 Flight::route('PATCH /rest/language\?id=@id',"UpdateLanguage");
 
 function DeleteLanguage($id) {
	 DBDeleteLanguage($id);
 }
 Flight::route('DELETE /rest/language\?id=@id',"DeleteLanguage");
 //--------------
 function CreatePerson() {
	 
	 //die(var_export(Flight::request()->data,TRUE));
	 
	 DBCreatePerson(
		Flight::request()->data["Name"],
		Flight::request()->data["Age"],
		Flight::request()->data["Mail"],
		Flight::request()->data["LanguageID"]
	);
 }
 Flight::route('PUT /rest/person',"CreatePerson");
 
 function ListPeople() {
		//echo "Hello from REST";
		Flight::json(DBListPeople());
	}
	
 Flight::route("GET /rest/people","ListPeople");
 
 function ReadPerson($id) {
		//echo "Hello from REST";
		Flight::json(DBReadPerson($id));
	}
	
 Flight::route("GET /rest/person\?id=@id","ReadPerson");
 
 function UpdatePerson($id) {
	 DBUpdatePerson(
		$id,
		Flight::request()->data["Name"],
		Flight::request()->data["Age"],
		Flight::request()->data["Mail"],
		Flight::request()->data["LanguageID"]		
	);
 }
 Flight::route('PATCH /rest/person\?id=@id',"UpdatePerson");
 
 function DeletePerson($id) {	 
	 DBDeletePerson($id);
 }
 Flight::route('DELETE /rest/person\?id=@id',"DeletePerson");


 Flight::start();
?>