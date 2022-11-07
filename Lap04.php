<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Lap04</title>


<style>
    table, th, tr, td{
        border: 2px solid black;
    }
</style>
</head>

<body>
<?php

$classMates = array("Ali.","Abdullah.","Hamad.","Fahd.");
echo "<br>";
echo "This is my class mates :";

echo "<table style=width:100%>";
echo "<tr>";
echo "<th>". $classMates[0];  "</th>";
echo "<th>". $classMates[1];  "</th>";
echo "<th>". $classMates[2];  "</th>";
echo "<th>". $classMates[3];  "</th>";
echo "</tr>";

echo "</table>";
echo "<br>";

$myClass = array("322"=>"SWE", "101" => "PHL" , "281"=>"MTH");

echo " I finished this class in the last semester : ";
echo "<table style=width:100%>";
echo "<tr>";
echo "<th>". $myClass["322"];  "</th>";
echo "<th>". $myClass["101"];  "</th>";
echo "<th>". $myClass["281"];  "</th>";
echo "</tr>";
echo "</table>";
echo "<br>";

$Labtop = array( "labtop","Asus","MSI","CPU","GPU" ,"AMD" , "Nvidia","Intel");

echo "I'm lookink for asus labtop with AMD CPU and Nvildia GPU";

echo "<table style=width:100%>";
echo "<tr>";
echo "<th>". $Labtop[0];  "</th>";
echo "<th>". $Labtop[1];  "</th>";
echo "<th>". $Labtop[2];  "</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $Labtop[3];  "</td>";
echo "<td>" . $Labtop[5];  "</td>";
echo "<td>" . $Labtop[7];  "</td>";
echo "</tr>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $Labtop[4];  "</td>";
echo  "<td>". $Labtop[5];  "</td>";
echo "<td>" . $Labtop[6];  "</td>";
echo "</tr>";
echo "</table>";
?>


</body>
</html>


