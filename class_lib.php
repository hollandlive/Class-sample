<?php
class Person {
	public $personName;
	public $personLastName;
	public $personTelNumber;

public function __construct($personName, $personLastName, $personTelNumber) {
$this->personName = $personName;
$this->personLastName = $personLastName;
$this->personTelNumber = $personTelNumber;
}

public function getPersonName() {
	return $this->personName;
}

public function getPersonLastName() {
return $this->personLastName;
}
public function getPersonTelNumber() {
	return $this->personTelNumber;
}
}

?>