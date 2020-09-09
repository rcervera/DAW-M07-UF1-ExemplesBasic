<?php 

// Returns the filename of the currently executing script
echo $_SERVER['PHP_SELF'];
echo "<br>";
// Returns the name of the host server
echo $_SERVER['SERVER_NAME'];
echo "<br>";
// Returns the Host header from the current request
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// Returns the complete URL of the current page
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
// 
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
// Returns the request method used to access the page (such as GET or POST)
echo $_SERVER['REQUEST_METHOD'];


?>