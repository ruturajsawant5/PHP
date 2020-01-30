<?php
$a = "abc.php";
// $a="C:\wamp\www";
if (file_exists($a))
    echo "File is exist</br>";
else
    echo "File does not exist</br>";

if (is_file($a))
    echo "It is file</br>";
else
    echo "It is not a file</br>";

if (is_dir($a))
    echo "File is directory</br>";
else
    echo "File is not directory</br>";

if (is_readable($a))
    echo "File is readable</br>";
else
    echo "File is not readable</br>";

if (is_writable($a))
    echo "File is writable</br>";
else
    echo "File is not writable</br>";

if (is_executable($a))
    echo "File is executable</br>";
else
    echo "File is not executable</br>";

echo "File size" . filesize($a);

echo "</br>File last accessed ---> " . date("D d m Y g i A", fileatime($a));

echo "</br>File last modified ---> " . date("D d m Y g i A", filemtime($a));

echo "</br>File create ---> " . date("D d m Y g i A", filectime($a));
?>