<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?

$key = $_POST["key"];
$width = $_POST["width"];
$height = $_POST["height"];
$length = $_POST["length"];
$r = $_POST["r"];


if($key == n1) {
	echo "삼각형의 면적 = ".$width*$height/2;	
}else if($key == n2) {	
	echo "직사각형의 면적 = ".$width*$height;	
}else if($key == n3) {
	echo "반지름의 면적 = ".$r*$r*3.14;
}else if($key == n4) {
	echo "직육면체의 체적 = ".$width*$length*$height;
}else if($key == n5) {
	echo "원통의 체적 = ".$r*$r*$height*3.14;
}else if($key == n6){
	echo "구의 체적 = ".$r*$r*$r*3.14*4/3;
}
?>

</body>
</html>

http://dothome.co.kr

<form action="file:///C|/Users/pc16/AppData/Roaming/ESTsoft/ALFTP/Cache/tmp/homework5.php" method="post">
삼각형<input type="radio" name="n1" value="n1" onclick="submit();"/>
직사각형<input type="radio" name="n1" value="n2" onclick="submit();"/>
원<input type="radio" name="n1" value="n3" onclick="submit();"/>
직육면체<input type="radio" name="n1" value="n4" onclick="submit();"/>
원통<input type="radio" name="n1" value="n5" onclick="submit();"/>
구<input type="radio" name="n1" value="n6" onclick="submit();"/>
</form>
<?
$n = $_POST["n1"];
if($n == n1) {
start($n);	
}else if($n == n2) {
	start($n);
}else if($n == n3) {
	start($n);
}else if($n == n4) {
	start($n);
}else if($n == n5) {
	start($n);
}else if($n == n6) {
	start($n);
}

function start($key) {
if($key == n1) {
echo "<form action=\"homework4_1.php\" method=\"post\" >";
echo "밑변 : <input type=\"number\" name=\"width\" /><br />";
echo "높이 : <input type=\"number\" name=\"height\" /><br />";
echo "<input type=\"hidden\" name=\"key\" value=\"n1\" />";

echo "<input type=\"submit\" value=\"확인\" />";
echo "</form>";	
	
}else if($key == n2) {
echo "<form action=\"homework4_1.php\" method=\"post\" >";
echo "가로 : <input type=\"number\" name=\"width\" /><br />";
echo "세로 : <input type=\"number\" name=\"height\" /><br />";
echo "<input type=\"hidden\" name=\"key\" value=\"n2\" />";
echo "<input type=\"submit\" value=\"확인\" />";
echo "</form>";		
}
else if($key == n3) {
	echo "<form action=\"homework4_1.php\" method=\"post\" >";
echo "반지름 : <input type=\"number\" name=\"r\" /><br />";
echo "<input type=\"hidden\" name=\"key\" value=\"n3\" />";
echo "<input type=\"submit\" value=\"확인\" />";
echo "</form>";	
}else if($key == n4) {
	echo "<form action=\"homework4_1.php\" method=\"post\" >";
echo "가로 : <input type=\"number\" name=\"width\" /><br />";
echo "세로 : <input type=\"number\" name=\"length\" /><br />";
echo "높이 : <input type=\"number\" name=\"height\" /><br />";
echo "<input type=\"hidden\" name=\"key\" value=\"n4\" />";
echo "<input type=\"submit\" value=\"확인\" />";
echo "</form>";	
	
}else if($key == n5) {
	echo "<form action=\"homework4_1.php\" method=\"post\" >";
echo "반지름 : <input type=\"number\" name=\"r\" /><br />";
echo "높이 : <input type=\"number\" name=\"height\" /><br />";
echo "<input type=\"hidden\" name=\"key\" value=\"n5\" />";
echo "<input type=\"submit\" value=\"확인\" />";
echo "</form>";	
	
}else if($key == n6) {
echo "<form action=\"homework4_1.php\" method=\"post\" >";
echo "반지름 : <input type=\"number\" name=\"r\" /><br />";
echo "<input type=\"hidden\" name=\"key\" value=\"n6\" />";
echo "<input type=\"submit\" value=\"확인\" />";
echo "</form>";	
}	
}?>
</body>
</html>
