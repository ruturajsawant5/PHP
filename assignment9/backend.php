
<?php


    $handle = mysqli_connect('localhost','root','','rutu');
  if (!$handle) {
    die('Connect Error: ' . mysqli_connect_errno());
}
    else
    {
          $roll = $_GET['roll'];
//        $name = $_GET['namei'];
        $sql = "DELETE FROM student WHERE roll=$roll";
        $res = mysqli_query($handle,$sql);

        if($res)
        {
            echo 'Record DELETED Successfully';
        }
        else
        {
                        echo 'Record NOT deleted';

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

