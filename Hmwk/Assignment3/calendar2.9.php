<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendar</title>
    <form action="calendar.php"
method="post">
	 <?php # Script 2.6 - calendar.php
	
	 // This script makes three pull-down menus
	 // for an HTML form: months, days,years.
	
	 // Make the months array:
         $months = array (1 => 'January', 
         'February', 'March', 'April', 'May', 
         'June', 'July', 'August', 'September', 
         'October', 'November', 'December');
	
	 // Make the days and years arrays:
         $days = range (1, 31);
         $years = range (2011, 2021);
 
        // Make the months pull-down menu:
	 echo '<select name="month">';
         foreach ($months as $key => $value) {
         echo "<option value=\"$key\">$value</option>\n";
 }
	 echo '</select>';
	
	 // Make the days pull-down menu:
	 echo '<select name="day">';
         for ($day = 1; $day <= 31;$day++) {
         echo "<option value=\"$day\">$day</option>\n";
         }
         
	 echo '</select>';
	
	 // Make the years pull-down menu:
	 echo '<select name="year">';
         for ($year = 2011; $year <= 2021; $year++) {
         echo "<option value=\"$year\"> $year</option>\n";
        }
	 echo '</select>';
	
	 ?>
	 </form>
	 </body>
	 </html>