<?php

include 'db_connection.php';

$conn = OpenCon();

if(isset($_POST['submit']))
{
    
    $user = $_POST['username'];
    $query = "SELECT Password FROM employers WHERE Username = '$user'";
    $result = mysqli_query($conn, $query);
    $pw = mysqli_fetch_row($result);
    
    if ($pw !== null) {
        $count = sizeof($pw);
        $i = 0;
        $passwd = $pw[$i];
        if ($passwd == $_POST['psw']) {
            header("Location: home.html");
            exit;
        }
    }
}
?>

