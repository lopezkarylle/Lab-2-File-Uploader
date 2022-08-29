<?php
    //builds the file location or path
    $destination = "C:/xampp/htdocs/uploads/" . $_FILES['userfile']['name'];
    //temporary path
    $tmp = $_FILES['userfile']['tmp_name'];
    //verifies if the file is uploaded or not
    if(is_uploaded_file($tmp)){
        if (move_uploaded_file($tmp, $destination)){
            echo 'File is sucessfully uploaded!';
            exit();
        }
    }
    echo 'Unable to upload file';