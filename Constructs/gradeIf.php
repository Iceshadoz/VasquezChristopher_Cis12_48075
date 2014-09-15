<!DOCTYPE html>
<?php
    /*
        Christopher Vasquez
        September 10, 2014
        Purpose
     */
?>
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
        <?php
        $score=rand(50,100);
        //Determine the Grade
        if ($score>=90)$grade= 'A';
        if ($score>=80)$grade= 'B';
        if ($score>=70)$grade= 'C';
        if ($score>=60)$grade= 'D';
        if {$score<60) $grade= 'F';
      
        //output the Results
        echo "<h1>A score of $score= $grade</h1>";
        ?>
    </body>
</html>
