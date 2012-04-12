<?php

error_reporting(E_ALL ^ E_NOTICE);

class formFields {

	private $fields;

	public function __construct($dataSourceItems) {

		$this -> fields = $dataSourceItems;

	}

	public function render() {
		//print_r($this->fields);
		$outputHTML = "";
		foreach ($this->fields as $field) {

		//	print_r($field);
			
			$outputHTML .=  "<label>" . $field['label'] . "</label><br/><input type=" . $field['type'] . " name=" . $field['name'] . "   value=" . $field['value'] . "/><br/>";
			

		}
		
		return $outputHTML;

	}

}

function mockDataObject() {

	$fields = array();

	for ($i = 0; $i < 5; $i++) {

		$field = array();

		$field['name'] = "name $i";
		$field['value'] = "value $i";
		$field['type'] = "type $i";

		$fields[] = $field;

	}

	return $fields;
}

$obj = new formFields(mockDataObject());
//$obj -> render();

$obj2 = new formFields(mockDataObject1() );
$capturedHTML = $obj2 -> render();
echo $capturedHTML;


//require_once ('sf_lead_class.php');

function mockDataObject1() {
	$file = "form_fields.txt";

	/*

	 $fileHandle = fopen($file, 'r');

	 $theData = fread($fileHandle, 2000);
	 fclose($fileHandle);

	 */

	$theData = file_get_contents($file);
	$fields = explode(";", $theData);

	//echo $fields[1];
	// RENDERING FROM FIELDS BELOW

	$fields_length = count($fields);
	
	$allFields = array();

	//echo $fields_length;

	for ($i = 0; $i < $fields_length; $i++) {

		//echo $fields[$i];

		$each_field = explode("--", $fields[$i]);
		
		$FFFfield = array();

		list($FFFfield['label'], $FFFfield['type'], $FFFfield['name'], $FFFfield['value']) = $each_field;

		//print_r($FFFfield);
		$allFields[] = $FFFfield;
	
	
	}
	
	return $allFields;

}
die("");
function getRealFormFields() {

	echo "<label>" . $label . "</label><br/><input type=" . $type . " name=" . $name . "   value=" . $value . "/><br/>";

}

$vars = get_formFields();
$vars = getRealFormFields();
render($vars);
?>