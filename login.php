<?php
session_start();
include 'db.php';

$name = $_POST["user_name"];
$pswd = $_POST["user_pswd"];

//$role = $_GET["role"];

$result = sqlsrv_query($conn,"select * from loginuser WHERE Username = '$name' AND Password = '$pswd'",array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));

$num = sqlsrv_num_rows($result);
$row = sqlsrv_fetch_array($result);

if($num == 0){
    echo 'Login failed!';
    header("Refresh:2;url=./login.html");
}
else{

        $_SESSION['login_name'] = $row['Username'];

//        $_SESSION['login_role'] = $row['role'];
    echo "<script>";
    echo "location.href='./index.php'";
    echo "</script>";
}
sqlsrv_close($conn);
?>