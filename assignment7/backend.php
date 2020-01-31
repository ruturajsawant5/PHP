    <?php
    $email=$_GET['email'];
    $password=$_GET['password'];

      session_start();
      $_SESSION['email'] =$email;
            $_SESSION['password'] =$password;

        echo"Saved info<br>";
//        echo""
    ?>