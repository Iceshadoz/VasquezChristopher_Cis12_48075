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
        switch(true){
           case $score>=90:             $grade='A';break;
           case $score>=80&&$score<90:  $grade='B';break;
           case $score>=70&&$score<80:  $grade='C';break;
           case $score>=60&&$score<70:  $grade='D';break;
           default:                     $grade='F';
           
      
           
        }
                  
        
        //output the Results
        echo "<h1>A score of $score= $grade</h1>";
