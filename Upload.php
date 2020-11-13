<?php
    if($_FILES["file"]["error"] > 0){
        echo "Error while uploading file " . $_FILES["file"]["error"] . "<br />";
    }else{

        echo "<h1>Parametri file:</h1>";
        echo "Temporary stored: " . $_FILES["file"]["tmp_name"] . "<br />";        
        echo "Uplolad: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . intval($_FILES["file"]["size"] / 1024) . " Kb <br />";

        echo "<h1>Upload in locale</h1>";
        if(file_exists("Upload/" . $_FILES["file"]["name"])){
            echo "File already exist: " . $_FILES["file"]["name"] . "<br />";
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "File stored in: upload/" . $_FILES["file"]["name"] . "<br/>";            
        }

        echo "<h1>Contenuto del file:</h1>"; 
        echo "<h2>(Se in formato testuale)</h2>"; 

        if($_FILES["file"]["type"] == "text/plain"){
            $file = fopen("upload/" . $_FILES["file"]["name"], "r");
            
            while(!feof($file)){
                echo fgets($file) . "<br/>";
            }
            fclose($file);
        }
    }
?>