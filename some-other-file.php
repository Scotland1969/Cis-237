<?php

require ("Student.php");
require ("Instructor.php");

use CarrollCommunityCollege\People\Student as GreatStudent;
use CarrollCommunityCollege\People\Instructor;

$jack = new GreatStudent();
$jack->learn();

$david = new Instructor();
$david->teach();
