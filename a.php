<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>INPUT a.php</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
//file 1
$file1 = 'nr1.txt';
if (isset($_POST['textarea1'])){
$nr1 = $_POST["textarea1"];
}else{
$nr1 = "";
};
file_put_contents($file1, $nr1);
//end file 1

//file 2
$file2 = 'nr2.txt';
if (isset($_POST['textarea2'])){
$nr2 = $_POST["textarea2"];
}else{
$nr2 = "";
};
file_put_contents($file2, $nr2);
//end file 2

//file 3
$file3 = 'nr3.txt';
if (isset($_POST['textarea3'])){
$nr3 = $_POST["textarea3"];
}else{
$nr3 = "";
};
file_put_contents($file3, $nr3);
//end file 3

//file 4
$file4 = 'nr4.txt';
if (isset($_POST['textarea4'])){
$nr4 = $_POST["textarea4"];
}else{
$nr4 = "";
};
file_put_contents($file4, $nr4);
//end file 4

//file 5
$file5 = 'nr5.txt';
if (isset($_POST['textarea5'])){
$nr5 = $_POST["textarea5"];
}else{
$nr5 = "";
};
file_put_contents($file5, $nr5);
//end file 5

//file 6
$file6 = 'nr6.txt';
if (isset($_POST['textarea6'])){
$nr6 = $_POST["textarea6"];
}else{
$nr6 = "";
};
file_put_contents($file6, $nr6);
//end file 6

//file 7
$file7 = 'nr7.txt';
if (isset($_POST['textarea7'])){
$nr7 = $_POST["textarea7"];
}else{
$nr7 = "";
};
file_put_contents($file7, $nr7);
//end file 7

//file 8
$file8 = 'nr8.txt';
if (isset($_POST['textarea8'])){
$nr8 = $_POST["textarea8"];
}else{
$nr8= "";
};
file_put_contents($file8, $nr8);
//end file 8

//file 9
$file9 = 'nr9.txt';
if (isset($_POST['textarea9'])){
$nr9 = $_POST["textarea9"];
}else{
$nr9 = "";
};
file_put_contents($file9, $nr9);
//end file 9

//file 10
$file10 = 'nr10.txt';
if (isset($_POST['textarea10'])){
$nr10 = $_POST["textarea10"];
}else{
$nr10 = "";
};
file_put_contents($file10, $nr10);
//end file 10

?>
<form name="form1" method="post" action="a.php">
  <input type="text" name="textarea1" value="<?php echo $nr1;?>" size="14"><br>
  <input type="text" name="textarea2" value="<?php echo $nr2;?>" size="14"><br>
  <input type="text" name="textarea3" value="<?php echo $nr3;?>" size="14"><br>
  <input type="text" name="textarea4" value="<?php echo $nr4;?>" size="14"><br>
  <input type="text" name="textarea5" value="<?php echo $nr5;?>" size="14"><br>
  <input type="text" name="textarea6" value="<?php echo $nr6;?>" size="14"><br>
  <input type="text" name="textarea7" value="<?php echo $nr7;?>" size="14"><br>
  <input type="text" name="textarea8" value="<?php echo $nr8;?>" size="14"><br>
  <input type="text" name="textarea9" value="<?php echo $nr9;?>" size="14"><br>
  <input type="text" name="textarea10" value="<?php echo $nr10;?>" size="14"><br>
  <input type="submit" name="Submit" value="Update">
</form>
</body>
</html>