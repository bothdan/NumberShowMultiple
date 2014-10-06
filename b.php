<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>DISPLAY b.php</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="refresh" content="5">
</head>
<body>
<?php
$file1 = 'nr1.txt';
$file2 = 'nr2.txt';
$file3 = 'nr3.txt';
$file4 = 'nr4.txt';
$file5 = 'nr5.txt';
$file6 = 'nr6.txt';
$file7 = 'nr7.txt';
$file8 = 'nr8.txt';
$file9 = 'nr9.txt';
$file10 = 'nr10.txt';

// Open the file to get existing content
$current1 = file_get_contents($file1);
$current2 = file_get_contents($file2);
$current3 = file_get_contents($file3);
$current4 = file_get_contents($file4);
$current5 = file_get_contents($file5);
$current6 = file_get_contents($file6);
$current7 = file_get_contents($file7);
$current8 = file_get_contents($file8);
$current9 = file_get_contents($file9);
$current10 = file_get_contents($file10);
?>

<div id="div_display_col1">
	<?php echo "Serving: ".$current1;?>
	<br>
</div>
<div id="div_display_col2">
	<?php echo "Serving: ".$current2; ?>
	<br>
</div>
<div id="div_display_col1">
	<?php echo "Serving: ".$current3; ?>
	<br>
</div>
<div id="div_display_col2">
	<?php echo "Serving: ".$current4;?>
	<br>
</div>
<div id="div_display_col1">
	<?php echo "Serving: ".$current5; ?>
	<br>
</div>
<div id="div_display_col2">
	<?php echo "Serving: ".$current6; ?>
	<br>
</div>
<div id="div_display_col1">
	<?php echo "Serving: ".$current7;?>
	<br>
</div>
<div id="div_display_col2">
	<?php echo "Serving: ".$current8; ?>
	<br>
</div>
<div id="div_display_col1">
	<?php echo "Serving: ".$current9; ?>
	<br>
</div>
<div id="div_display_col2">
	<?php echo "Serving: ".$current10; ?>
	<br>
</div>

</body>
</html>