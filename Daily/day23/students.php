<?php
require_once "database.php";
 function getStudents() {
     global $dbConnection;
     $students=[];

    $sql = "SELECT id, first_name, last_name FROM student";
    $result = mysqli_query($dbConnection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           $students[]=$row;
        }
    }
     return $students;
 }
function createStudent($data) {
    global $dbConnection;
    $firstName=$data['first_name'];
    $lastName=$data['last_name'];

    $sql = "INSERT INTO student(first_name, last_name) VALUES ('" . $firstName. "' , '".$lastName."')";
    $result=mysqli_query($dbConnection,$sql);
} 
function deleteStudent($studentid) {
    
}
function updateStudents($data) {
    
}
