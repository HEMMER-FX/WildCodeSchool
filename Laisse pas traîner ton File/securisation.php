<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $uploadDir = 'public/upload/';

    $uploadFile = $uploadDir . basename($_FILES['profilImage']['name']);

    $extension = pathinfo($_FILES['profilImage']['name'],PATHINFO_EXTENSION);

    $extension_ok = ['gif','jpg','png','webp'];
    $maxFileSize = 1000000;
    $succes = 'File upload';

    if( ( !in_array($extension, $extension_ok,$maxFileSize )))
    {
        $errors = 'Bad extention file, extention file accepted : "gif, jpeg , png , webp" ';
        echo $errors;
    
        if (filesize($_FILES['profilImage']['tmp_name']) > $maxFileSize)
        {
            $errors = 'File so strong, the file must be less than 1 MO';
            echo $errors;
        }
            if (file_exists($uploadFile)) {
            $errors = "Already upload";
            echo $errors;
        }
        if(empty($errors))
        {
            move_uploaded_file($_FILES['profilImage']['tmp_name'], $uploadFile);

    }else{
        return $succes;
        }
        
    }

}