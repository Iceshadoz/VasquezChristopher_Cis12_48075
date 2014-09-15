<?php
/*
    Christopher Vasquez
    September 15th, 2014
    Purpose: First for-loop
 */
?><!DOCTYPE html>
 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Trig Table</h1>
        <?php
        //Input the data from the form
        $angStrt=$_GET ['angStrt'];
        $angEnd=$_GET ['angEnd'];
        $angInc=$_GET ['angInc'];
        <table width="200" border="1">
            <tr>
                <th>Radians</th>
                <th>Degrees</th>
                <th>Sine</th>
                <th>Cosine</th>
                <th>Tangent</th>
            </tr>
     <?php
        //For - Loop
        echo"<tr>";
        for($angle=$angStrt;$angle<=$angEnd;$angle+=angInc) {
            echo "<tr>";
            echo "<td>$angle</td>" ;
            //Calculate
            $rad=number_format($angle*atan(1)/45,4);
            $sine=number_format(sin($rad),4);
            $cosine=number_format(cos($rad),4);
            $tangent=number_format(tan($rad),4);
            
            echo "<td>$rad</td>";
            echo "<td>$sine</td>";
            echo "<td>$cosine</td>";
            echo "<td>$tangent</td>";
            
            echo "</tr>";
            
        echo "</tr>";
            
        }
        ?>
        </table>
    </body>
</html>
