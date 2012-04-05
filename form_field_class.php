<?php

  class new_form_field {
  	
	var $open_file = "form_fields.txt";
  
    var $fileHandler = fopen($open_file, 'r');
  
    $theData = fread($fileHandler, 2000);
                  
                  fclose($fileHandler);
				  
				  $fields = explode(";", $theData);
				  
                  echo $fields[1];
                  // echo $fields[1];
                  
                  $fields_length = count($fields);
				  
				  
				  echo "<label>".$this->label."</label><br/><input type=".$this->field_type." name=".$this->field_name."   value   =".$this->field_value."/>";  
				  
	
	var $label = "";
	var $field_type = "";
	var $field_name = "";
	var $field_value = "";
	
	
	//echo "<label>".$this->label."</label><br/><input type=".$this->field_type." name=".$this->field_name." value   =".$this->field_value."/>";

	function get_field()
  {
    return  $this->label;
	return  $this->field_type;
	return  $this->field_name;
	return  $this->field_value;
	
  } 
	
  }

?>