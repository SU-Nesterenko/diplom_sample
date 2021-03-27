<?php require_once("$_SERVER[DOCUMENT_ROOT]/../db/common.dal.inc.php");
function DBCreatePerson($Name,$Age,$Mail,$LanguageID) {
	_DBQuery(
		"INSERT INTO People(Name,Age,Mail,LanguageID) 
		 VALUES('$Name','$Age','$Mail',$LanguageID)"
	);
}

function DBListPeople() {
	return _DBListQuery("
		SELECT 
			People.ID As ID,
			People.Name As Name,
			People.Age As Age,
			People.Mail As Mail,
			People.LanguageID As LanguageID,
			Languages.Name As Language
		FROM 
			People,Languages
		WHERE 
			People.LanguageID=Languages.ID
	");
}


function DBReadPerson($id) {
	return _DBGetQuery("
		SELECT 
			People.ID As ID,
			People.Name As Name,
			People.Age As Age,
			People.Mail As Mail,
			People.LanguageID As LanguageID
		FROM 
			People
		WHERE 
			ID=$id
	");
}
//file_put_contents("$_SERVER[DOCUMENT_ROOT]/../dbg.log","Hi");
function DBUpdatePerson($id,$Name,$Age,$Mail,$LanguageID) {	
	_DBQuery("
		UPDATE People 
		SET 
			Name='$Name',
			Age='$Age',
			Mail='$Mail',
			LanguageID='$LanguageID'
		WHERE ID=$id
	");
}

function DBDeletePerson($id) {	
	_DBQuery("DELETE FROM People WHERE id=$id"); 	
}
//-----------------
function DBListLanguages() {
	return _DBListQuery("SELECT * FROM languages");
}

function DBCreateLanguage($Name) {
	_DBQuery("INSERT INTO languages(Name) VALUES('$Name')");
}

function DBReadLanguage($id) {
	return _DBGetQuery("SELECT * FROM languages WHERE ID=$id");
}

function DBUpdateLanguage($id,$Name) {
	_DBQuery("UPDATE languages SET Name='$Name' WHERE ID=$id");
}

function DBDeleteLanguage($id) {
	_DBQuery("DELETE FROM languages WHERE ID=$id");
}
