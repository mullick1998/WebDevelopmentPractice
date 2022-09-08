<?php

/*cookies
cookies store data in files within client. 
When client send request to server, it also sends cookies.
not secure becuase stored in string or text format.
not individual for every client.
can disable cookies*/

/*session
session store data in server. 
More secure and contains valuable or sensitive information. 
Stored in Binary format.
individual for every client.
can't disable session*/


/*
//starting session
session_start();

//storing session data
//$_SESSION['name'] = "Mustakim";
//$_SESSION['password'] = "123456";

//Accessing session data
echo "Hey, ".$_SESSION['name']. " ".$_SESSION['password'];

//removing session data
if (isset ($_SESSION['name']) AND isset($_SESSION['password']))
{
	unset($_SESSION['name']);
	unset($_SESSION['password']);
}
//destroying session data
session_destroy();

*/

//setting a cookies
//setcookie(name, value, expire, path, domain, secure);


setcookie("username", "Mustakim", time()+30*24*60*60);
if(isset($_COOKIE["username"]))
{
	echo "HEY, " . $_COOKIE["username"];
}
else
{
	echo "WELCOME GUEST";
}

//print_r($_COOKIE);

//deleting cookie
setcookie("username", "", time()-3600);
?>