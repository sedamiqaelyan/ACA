<?php
   // $file=$_FILES['file'];
define('ROOT', '/home/user/Desktop/ACA/');
$path='';
if (isset($_POST['path'])) {
    $path = $_POST['path'];
}
var_dump($path);
    if(!empty($_FILES['file'])) {
        $file=$_FILES['file'];

        if($file['error']!=0) {
            echo '<p>An error occured</p>';
        }
    }
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $file["name"]);
    $i = 0;
    $parts = pathinfo(ROOT.$path.'/'.$name);
    while (file_exists(ROOT.$path.'/'. $name)) {
        $name = $parts["filename"] . "-" . ($i++) . "." . $parts["extension"];
    }
var_dump($file["tmp_name"]);
    $success = move_uploaded_file($file["tmp_name"],ROOT.$path.'/'.$name);
    if (!$success) {
        echo "<p>Unable to save file.</p>";
        die;
    }

        chmod(ROOT.$path.'/'. $name, 0666);

?>


