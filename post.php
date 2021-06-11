<?php
// $name = $_POST['name'];
// $surname = $_POST['surname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["typefile"])) {

    
    $result = array(
        'name' => $_POST["name"],
        'surname' => $_POST["surname"],
        'email' => $_POST["email"],
        'phone' => $_POST["phone"],
        'typefile' => $_POST["typefile"],
    );

$name_file = "{$_SERVER['DOCUMENT_ROOT']}/form_upload/feedbackform.{$result['typefile']}";
    $file = fopen($name_file,'w');
    fwrite($file,$result['name']);
    fwrite($file,$result['surname']);
    fwrite($file,$result['email']);
    fwrite($file,$result['phone']);
    fclose($file);
    echo json_encode($result);
}
