    <?php
    $email=$_GET['email'];
    $password=$_GET['password'];

    setcookie("email", $email, time() + (86400 * 30));
        setcookie("password", $password, time() + (86400 * 30));
        echo"Saved info<br>";
//        echo""
    ?>