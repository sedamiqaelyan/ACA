<?php
require_once "students.php";
$students=getStudents();
foreach ($students as $student) {
    echo $student['id'].'-'.$student['first_name'].'-'.$student['last_name'];
}
