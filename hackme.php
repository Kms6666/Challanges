<?php
session_start();
$Authorized = $_SESSION['Authorized'];

if ($Authorized == 1)
{

echo "You are now logged in, go <a href='logout.php'> here </a> to logout<br>";
}

else

{

echo "You are not logged in, please go <a href='index.php'> Here </a> to log in";

}
