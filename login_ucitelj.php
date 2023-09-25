<?php 
ob_start();
session_start();
include ("db_conn.php");

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if (empty($username)) {

    header("Location: pronadi_osobu.php?error=User Name is required");

    exit();

}else if(empty($password)){

    header("Location: pronadi_osobu.php?error=Password is required");

    exit();

}else{

    $sql = "SELECT * FROM ucitelji WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['username'] = $username) {

            echo "Logged in!";


            $_SESSION['id_ucitelja'] = $row['id_ucitelja'];

            header("Location: teacher.php");

            exit();

        }else{

            header("Location: teacher.php?error=Incorect User name or password");

            exit();

        }

    }else{

        header("Location: teacher.php?error=Incorect User name or password");

        exit();

    }

}

}else{

header("Location: pronadi_osobu.php");

exit();

}
?>