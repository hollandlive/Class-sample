<?php
include 'class_lib.php';
$person = new Person('artem', 'aksenov', 555);
echo $person->getPersonName();
echo $person->getPersonLastName();
echo $person->getPersonTelNumber();
?>