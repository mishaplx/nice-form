<?php
// $name = $_POST['name'];
// $surname = $_POST['surname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["phone"])) {

    
    $result = array(
        'name' => $_POST["name"],
        'surname' => $_POST["surname"],
        'email' => $_POST["email"],
        'phone' => $_POST["phone"]
    );

    
    echo json_encode($result);
}
