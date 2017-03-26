<?php include("blocks\bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
if (isset($_GET['sec'])) {$sec = $_GET['sec'];}
$result = mysql_query("Select id,sec,map From view_map where sec='$sec' and id='$id' ",$db);

$myrow = mysql_fetch_array($result);
$result2 = mysql_query("Select title From settings where id='$sec' ",$db);

$myrow2 = mysql_fetch_array($result2);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Legacy of Kain:<?php echo $myrow2['title'];  ?>:Map</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body background="img/background.jpg">
<?php
printf("<a href='map.php?sec=%s' class='map'>Return to Legacy of Kain:Map</a>",$myrow['sec']);
echo "<h2 class='map'>Map of Nosgoth</h2>
<hr align='left' width='95%' size='1' color='#600' /><br><br>";
echo $myrow['map'];
echo "<br><br>";
printf("<a href='map.php?sec=%s' class='map'> Return to Legacy of Kain:Map</a>",$myrow['sec']);
echo "<br><br>";
?>


</body>
</html>
