<!DOCTYPE html>
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
        // Intialize the input
        $score=rand(50,100);
        //Determine the Grade
        switch($score>=90) {
           case true:$grade= 'A';
           default:
        }
         switch($score>=80&&$score<90) {
           case true:$grade= 'B';
           default:
        }
         switch($score>=70&&$score<80) {
           case true:$grade= 'C';
           default:
        }
         switch($score>=60&&$score<70) {
           case true:$grade= 'D';
           default:
        }
         switch($score<60) {
           case true:$grade= 'F';
           default:
        }
                  
        
        //output the Results
        echo "<h1>A score of $score= $grade</h1>";
