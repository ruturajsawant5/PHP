
<?php


    $handle = mysqli_connect('localhost','root','','rutu');
  if (!$handle) {
    die('Connect Error: ' . mysqli_connect_errno());
}
    else
    {
          $roll = $_GET['roll'];
        $name = $_GET['namei'];
        $sql = "INSERT INTO student VALUES($roll,'$name');";
        $res = mysqli_query($handle,$sql);
//             mysql_select_db('rutu', $handle) or die(mysql_error());

//        mysql_query($sql) or die ('Error updating database: '.mysql_error());
        
//        echo $res;
        if($res)
        {
            echo 'Record Inserted Successfully';
        }
        else
        {
                        echo 'Record NOT Inserted';

        }
        
        
        $sql2="SELECT * FROM student";
        $res2 = mysqli_query($handle,$sql2);
?>
        <table border="1">
            <tr>
                <th>Roll</th>
                <th>Name</th>
            </tr>
<?php               
    if($res2)
    {
        while($newarr = mysqli_fetch_array($res2))
        {
           
            $r=$newarr['roll'];
            $n=$newarr['name'];
           echo"<tr><td>$r</td><td>$n</td></tr>";

        }
    }
    }
?>

