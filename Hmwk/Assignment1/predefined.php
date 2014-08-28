<!DOCTYPE html PUBLIC "-//W3C// DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/ xhtml1-transitional.dtd">
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/ 
1999/xhtml" xml:lang="en" 
lang="en">
    <head>
        <meta  http-equiv="content-type" content="text/html; charset="UTF-8" />
        <title>Predefined Variables</title>
    </head>
    <body>
        
        <?php #Script 1.5 - predefined.php
        // Create a shorthand version of the varible names:
        $file = $_server['script_filename'];
        $user = $_server ['http_user_agent'];
        $server = $_server['server_software'];
        
        // Print the name of this script:
        echo "<p> You are running the file:<br />$file</b>.</p>\n";
   
       // Print the user's information:
       echo "<p> You are veiwing this page using:<br />$user</b>.</p>\n";
       
       // Print the server's information:
       echo "<p> This server is running:<br />$server</b>.</p>\n";
        ?>
    </body>
</html>
