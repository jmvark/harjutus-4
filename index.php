<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>harjutus-4</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h2>Arvutamine murd- ja täisarvudega</h2>
<?php echo $float = 3.14; ?><br>
<?php echo $float + 7; ?><br>
<?php echo 4/3; ?><br>

<h2>Murdarvude ümardamine</h2>
<?php echo round($float,1); ?><br>
<?php echo ceil($float); ?><br>
<?php echo floor($float); ?><br>

<h2>Andmetüübi funktsioonid</h2>
<?php echo $integer = 3; ?><br>
<?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>

<?php echo "Kas 7 on integer? " . is_int(7); ?><br>
<?php echo "Kas 3.14 on integer? " . is_int($float); ?><br>
<?php echo "Kas 7 on integer? " . is_float(7); ?><br>
<?php echo "Kas 3.14 on integer? " . is_float($float) ?><br>
<?php echo "Kas 7 on integer? " . is_numeric(7); ?><br>
<?php echo "Kas 3.14 on integer? " . is_numeric($float); ?><br>

<h2>Jadad (array)</h2>
<?php $numbers = array(4,8,15,16,23,42); ?>
<?php echo $numbers[0]; ?><br>
<?php echo $numbers[1]; ?><br>
<?php echo $numbers[2]; ?><br>
<?php echo $numbers[3]; ?><br>
<?php echo $numbers[4]; ?><br>
<?php echo $numbers[5]; ?><br><br>

<?php $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z")); ?>

<?php echo $mixed[2]; ?><br>
<?php echo $mixed[4][2]; ?><br><br>

<?php $mixed[2] = "kass"; ?>
<?php $mixed[5] = "kass"; ?>
<?php $mixed[] = "hobune"; ?>
<?php echo print_r($mixed); ?><br>
<?php echo print_r($mixed[2]); ?><br>
<pre><?php echo print_r($mixed); ?></pre><br>

<h2>Associative arrays</h2>
<?php $assoc = array("first_name" => "Sinu_eesnimi", "last_name" => "Sinu_perekonnanimi"); ?>
<?php echo $assoc["first_name"]; echo " ";  echo $assoc["last_name"] ?><br>


<?php $assoc["e-post"] = "Sinu_e-post"; ?>
<?php $assoc["first_name"] = "Peeter" ?>

<?php echo "Minu nimi on " . $assoc["first_name"] . " " . $assoc["last_name"] . '. Minu e-post on ' . $assoc["e-post"]; ?><br>
<?php echo "Minu nimi on {$assoc["first_name"]} {$assoc["last_name"]}. Minu e-post on {$assoc["e-post"]}"; ?><br>

<h2>Array functions</h2>
<?php $numbers_2 = array(8,23,15,42,16,4); ?>
<?php echo count($numbers_2); ?><br>
<?php echo max($numbers_2); ?><br>
<?php echo min($numbers_2); ?><br>
<pre><?php
    sort($numbers_2);
    print_r($numbers_2);
?><br></pre>
<pre><?php
    rsort($numbers_2);
    print_r($numbers_2);
?><br></pre>

<?php 
	echo $num_string = implode(" ja ", $numbers_2);
?><br>
<?php print_r(explode(" ja ", $num_string)); ?>


</body>
</html>
