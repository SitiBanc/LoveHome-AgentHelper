<?php
require('config.php');

$EMAIL = $_POST['EMAIL'];
$password = $_POST['password'];
$refer = $_POST['refer'];

if ($EMAIL == '' || $password == '')
{
    // No login information
    header('Location: login.php?refer='. urlencode($_POST['refer']));
}
else
{
    // Authenticate user
    $conn = mysql_connect("140.120.55.53", "ic2111", "iclin2111") or die("無法連接伺服器");
	mysql_select_db("chyi1", $conn);
    
    $query = "SELECT NR + NR 
        guid FROM new_customer WHERE email =  '$email'  AND password = password('$password')";
        
    $result = mysql_query($query, $conn)
    	or die ('Error in query');
    
    if (mysql_num_rows($result))
    {
        $row = mysql_fetch_row($result);
        // Update the user record
        $query = "UPDATE new_customer SET guid = '$row[1]' WHERE NR = $row[0]";
            
        mysql_query($query, $conn)
        	or die('Error in query');
        
        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 24 hours from now
        $cookieexpiry = (time() + 86400);
        setcookie("session_id", $row[1], $cookieexpiry);

        if (empty($refer) || !$refer)
        {
            $refer = 'index5.php';
        }

        header('Location: '. $refer);
    }
    else
    {
        // Not authenticated
        header('Location: login.php?refer='. urlencode($refer));
    }
}
?>