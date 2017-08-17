<!DOCTYPE html>
<html>
<head>
<title>
</title>

<link
href="/style.css"
type="text/css"
rel="stylesheet">

</head>

<div id="divTest"
testy mctest test

</div>

<h1>
<a href="https://dctecblog.wordpress.com/">Flat Temperature Monitor<a/> </h1>

<div class="headcontent">


<!-- **Brown bear link and image** -->
<h2><a href="https://en.wikipedia.org/wiki/Brown_bear">
<img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/web101-image_brownbear.jpg"/>


<!-- **Fennel image insert attempt**
<img src="/pi/images/fennel typing image.jpg"/>
-->

</a>
</h2>

<div class="overview">
<p>This code is used to experiment with PHP and HTML.It is designed to read from a temperature sensor and act on the result.</p>
</div>


<div class="list_test">
<!--
<p>The following is a list of potential <a href="https://youtube.com/watch?v=cbP2N1BQdYc">cat</a>  names created using HTML ul function</p>

<ul>
<li>Fluffy</li>
<li>Stripes</li>
<li>Fennel</li>
</ul>
-->
</div>
</div>

<body>
<p>
</p>
</body>


<div class="time">

<?php $name = "Hello";?>
<?php $upper = strtoupper($name); ?>



<?php echo "$upper, the time is...."; ?>

<?php //string function sample ends here ?>

<?php echo date('Y-m-d H:i:s'); ?>

</div>

<div class="temp">

<?php echo "<p>The flat temperature is...  "; ?>


<?php
// $array1 = array (" working...", " working on it...", " almost there!..."); ?>

<?php

foreach($array1 as $step) {
echo $step;
}

$latestTemp = rand(10*10,35*10)/10; //creates random to 1 decimal place
$latestTemp = round($latestTemp,0); //rounds variable to whole number
//echo " $latestTemp degC ";

exec('modprobe w1-gpio');
exec('modprobe w1-therm');

$base_div = '/sys/bus/w1/devices/';
$device_folder = glob($base_div . '28*')[0];
$device_file = $device_folder . '/w1_slave';
$data = file($device_file, FILE_IGNORE_NEW_LINES);

$temperature = null;
if (preg_match('/YES$/', $data[0])) {
	if (preg_match('/t=(\d+)$/' , $data[1], $matches, PREG_OFFSET_CAPTURE)) {
	$temperature = $matches[1][0] / 1000;
	}
}


if ($temperature) {
	echo " ${temperature}C\n";
} else {
	echo "Unable to get temperature\n";
}



//switch starts here


switch ($latestTemp) {
	case 10:
	case 11: 
	case 12:
	case 13:
	case 14:
	case 15:
//		echo "- it's cold";
		break;
	case 16:
	case 17:
	case 18:
	case 19:
	case 20:
	case 21:
	case 22:
	case 23:
	case 24:
//		echo "- it's medium";
		break;
	case 25: 
	case 26:
	case 27:
	case 28:
	case 29:
	case 30:
	case 31:
	case 32:
	case 33:
	case 34:
	case 35:
//		echo "- it's hot";
		break;
	default:
//		echo "i can't decide how hot it is";

}


//switch ends here

//array test starts here
//$array = array ("(cold)", "(medium)", "(hot)");
//echo  $array[1];

//array test ends here


?>

</div>

<!--

<table>
<thead>
<tr>
<th scope="col">Temperature /degC</th>
<th srope="col">Current Temp </th>
</tr>
</thead>
<tr>
<td>10</td>
</tr>
<tr>
<td>11</td>
</tr>
<tr>
<td>12</td>
</tr>
<tr>
<td>13</td>
</tr>
<tr>
<td>14</td>
</tr>
<tr>
<td>15</td>
</tr>
<tr>
<td>16</td>
</tr>
<tr>
<td>17</td>
</tr>
<tr>
<td>18</td>
</tr>
<tr>
<td>19</td>
</tr>
<tr>
<td>20</td>
</tr>
<tr>
<td>21</td>
</tr>
<tr>
<td>22</td>
</tr>
<tr>
<td>23</td>
</tr>
<tr>
<td>24</td>
</tr>
</table>

-->
<?php


if($temperature >25) {
//if($latestTemp >25) {
//	echo "<p> ...HOT HOT HOT!</p>";
}
Else {
//	echo "<p> ...thats cold!, burrrrr!</p>";
}

//do while loop example starts here


$counter = 10;

do {
	if($counter == $latestTemp) {
//	echo "<p> $counter  ";
//	echo " ***This Temp*** ";

}
Else {
//	echo "<p> $counter </p>";

}
	$counter++;
} while ($counter <=35);


//do while loop example ends here

/*

$catnames = array();
array_push($catnames, "spooky");
array_push($catnames, "fennel");
array_push($catnames, "wolf");
array_push($catnames, "whiskers");
array_push($catnames, "fenbot");

$cattotal = count($catnames);

echo "<p> Just for fun... here's a list of $cattotal  cat names... </p>";

sort($catnames);
print join(", ", $catnames);


function hello($name, $age) {
echo "<p>Hello! My name is $name and i am $age. This is a function in the Ruth Code</p>";

}

$name = "david";
$age = "32";

hello($name, $age);


function connectsqlite($connection,$db,$conn,$myPDO) {
//$db = '/var/www/templog.db'
//$conn=sqlite3.connect($db)
//$myPDO = new PDO('sqlite:/var/www/templog.db');
$db = "$db";
echo "<p> this is the database connection for the temperature read code: $db </p>";

}

connectsqlite($connection,$db,$conn,$myPDO);
*/
?>

</p>
</body>
</html>
