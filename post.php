<?php
mkdir("{$_SERVER['DOCUMENT_ROOT']}/form_upload",0777);
if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
{
    $name = "form_upload/" . $_FILES["filename"]["name"];;
    move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
    echo "Форма с файлом загружена на сервер";
}


$name_file = "{$_SERVER['DOCUMENT_ROOT']}/form_upload/feedbackform.{$_POST["typefile"]}";
    $file = fopen($name_file,'w');
    fwrite($file,"Имя - " . $_POST["name"]. "\n");
    fwrite($file,"Фамилия - " . $_POST["surname"]. "\n");
    fwrite($file,"Почта - " . $_POST["email"]. "\n");
    fwrite($file,"Номер телефона - " . $_POST["phone"]. "\n");
    fwrite($file,"Тип файла в котором будут записанны данные из формы - " . $_POST["typefile"]. "\n");
    fclose($file);


