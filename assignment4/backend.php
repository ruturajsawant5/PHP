<?php
$roll = $_POST['roll'];
$name = $_POST['name'];
$fname="data.txt";
$fp = fopen($fname,"a") or die("could not open file");
fputs($fp,$roll);
fputs($fp,"\t");
fputs($fp,$name);
fputs($fp,"\n");
echo "<h1> added to file successfully</h1><br>";
echo "<a href=\"http://localhost/ruturaj/assignment/acc.php\">Go Back</a>";

fclose($fp);

rename('data.txt', 'account/data.txt');

?>