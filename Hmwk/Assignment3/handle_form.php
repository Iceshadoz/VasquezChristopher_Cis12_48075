<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Feedback</title>
    </head>
    <body>
        <?php # Script 2.2 - handle_form.php
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $comments = $_REQUEST['comments'];
        /* Not used:
         * $_REQUEST['age']
         * $_REQUEST['gender']
         * $_REQUEST['submit']
         */
        
        //Print the submitted information:
        echo "<p> Thank you, <b>$name</b>, for thefollowing comments:<br />
                . <tt>$comments</tt></p>
                . <p>We will reply to you at
                . <i>$email</i>.</p>\n";
        ?>
    </body>
</html>
