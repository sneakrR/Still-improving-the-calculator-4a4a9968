<h1>Calculator</h1>


<form action="" method="post">
<input type="text" name="FirstNumber"> First Number<br><br>
<input type="text" name="SecondNumber"> Second Number<br><br>

<select name= Submit>
<option name="Add" value="Add">Add</option>
<option name="Subtract" value="Subtract">Subtract</option>
<option name="Multiply" value="Multiply">Multiply</option>
<option name="Devide" value="Devide">Devide</option>
<option name="Modulo" value="Modulo">Modulo</option>
</select>

<input type="submit"><br>


<?php

switch($_POST['Submit']) {
case 'Add':
$AddAwnser = ($_POST['FirstNumber']) + ($_POST['SecondNumber']);
echo $AddAwnser;
break;

case 'Subtract':
$SubtractAwnser = ($_POST['FirstNumber']) - ($_POST['SecondNumber']);
echo $SubtractAwnser;
break;

case 'Multiply':
$MultiplyAwnser = ($_POST['FirstNumber']) * ($_POST['SecondNumber']);
echo $MultiplyAwnser;
break;

case 'Devide':
$DevideAwnser = ($_POST['FirstNumber']) / ($_POST['SecondNumber']);
echo $DevideAwnser;
break;

case 'Modulo':
$ModuloAwnser = ($_POST['FirstNumber']) % ($_POST['SecondNumber']);
echo $ModuloAwnser;
break;

default:
echo "Niks ingevuld!";
}
?>