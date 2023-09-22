<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

echo $username."<br>";
echo $password."<br>";

if ($username == "admin" && $password == "admin")
{
$_SESSION['Authorized'] = 1;
echo "You typed the correct credntials!<br> <br>";
echo "go to <a href='hackme.php'> This page </a> next<br> <br>";
echo "go <a href='index.php'> The login page </a> to try again, or go to <a href='logout.php'> here </a> to logout<br>";
}
else
{
$_SESSION['Authorized'] = 0;
echo "Incorrect!!";
echo "go to <a href='hackme.php'> This page </a> next<br> <br>";
echo "or go to <a href='index.php'> The login page </a> to try again<br>";

}
?>
