<?php
session_start();
$age=$_POST['q6'];
$_SESSION['q6']=$age;
$rightrezults=['q1'=>'Asia','q2'=>'Greece','q3'=>'True','q4'=>'Serbia','q5'=>'4(5)','q6'=>'5'];
$count=0;
foreach ($_SESSION as $key=>$value) {
    if($_SESSION[$key]==$rightrezults[$key]) {
       ++$count;
    } elseif ($count==0) {
        echo '<h1>You have no any right asnwer.</h1>';
    }
}
echo '<h1 style="text-align: center;">You have'.'   '.$count.'  '.'right answers.</h1>';
