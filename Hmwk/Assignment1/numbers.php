<!DOCTYPE html PUBLIC "-//W3C// DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/ xhtml1-transitional.dtd">
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><html xmlns="http://www.w3.org/ 
1999/xhtml" xml:lang="en" 
lang="en">
    <head>
        <meta  http-equiv="content-type" content="text/html; charset="UTF-8" />
        <title>Numbers</title>
            
    </head>
    <body>
        <?php # Script 1.8 - numbers.php
        
       //Set the varibles:
       $quantity = 30; //Buying 30 widgets.
       $price = 119.95; // Price per widget
       $taxrate = .05; // 5% Sales tax.
       
       //Calculate the total:
       $total = $quantity * $price;
       $total = $total + ($total * $taxrate);
       // Calculate and add the tax.
       
       // Format the total
       $total = number_format ($total, 2);
       
       // Print results
       echo "<p>You are purchasing <b>'$quantity . '</b> widget(s) at a cost of
             <b>$' . $price .'</b> each. With tax, the toal comes to <b>$' .
               $total . '</b></p>";
        
        
     
        
        ?>
    </body>
</html>
