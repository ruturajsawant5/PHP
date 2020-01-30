<?php
    $filedir = "C:\\wamp\\www\\ruturaj\\assignment3\\uploads";
    if($_FILES['filey']['type']=="application/pdf"){
    if(move_uploaded_file($_FILES['filey']['tmp_name'],$filedir.$_FILES['filey']['name']))
    {
        echo "<h1> File Uploaded Successfully </h1>";
    }
 else {
                echo "<h1> File NOT Uploaded</h1>";

    }}
     else {
                echo "<h1> File NOT PDF</h1>";

     }
    
?>