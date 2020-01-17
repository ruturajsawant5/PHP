<!DOCTYPE html>
<html>
<head>
	<title>output</title>
</head>
<body>
	<h1>Matrix Operations</h1>
	<?php 
		$selected = ($_GET["name"]);
		echo $selected."</br>";
		$new_str = trim($selected);
		echo "You have selected ". $selected ."operation";

		$array1 = array(
 				array(1,7),
 				array(5,7)
 				);
        $array2 = array(
 				array(6,0),
 				array(3,8)
 				);
     $array3 = array(array());
    


     echo "Matrix 1:<br>";
     for($i=0;$i<2;$i=$i+1)
    {
        for($j=0;$j<2;$j=$j+1)
        {
            echo $array1[$i][$j]." ";
        }
        echo "<br>";
    }

    echo "Matrix 2 :<br>";
     for($i=0;$i<2;$i=$i+1)
    {
        for($j=0;$j<2;$j=$j+1)
        {
            echo $array2[$i][$j]." ";
        }
        echo "<br>";
    }


  switch ($new_str)
   {
    case "Addition":
                    echo "Addition of two matrix : <br>";
                     for($i=0;$i<2;$i=$i+1)
                    {
                        for($j=0;$j<2;$j=$j+1)
                        {
                            $array3[$i][$j] = $array1[$i][$j] + $array2[$i][$j]; 
                            echo $array3[$i][$j]." ";
                        }
                        echo "<br>";
                    }
                    break;
     case "Substraction":

             echo "Substraction of two matrix : <br>";
             for($i=0;$i<2;$i=$i+1)
            {
                for($j=0;$j<2;$j=$j+1)
                {
                    $array3[$i][$j] = $array1[$i][$j] - $array2[$i][$j]; 
                    echo $array3[$i][$j]." ";
                }
                echo "<br>";
            }
            break;

      default:
          echo "Error";
     }
	    
	 ?>
	 <br>
	 <a href="http://localhost/ruturaj/matrix.html">Go back</a>
</body>
</html>