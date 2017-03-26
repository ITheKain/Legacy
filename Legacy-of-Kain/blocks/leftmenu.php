<td width="162" align="left" valign="top" class="left"><p align="center" class="title"><img src="img/DCLogo.JPG" width="100%" height="93" /></p>
<div id="coolmenu">
<a href="index.php">Main</a>
<a href="bo1.php?id=2">Blood Omen</a>
<?php 
if(isset($_GET['id'])) {$id=$_GET['id'];}	
if ($id==2)
{
echo "<div id='coolmenu_select'>
<a href='characters.php?id=2'>characters</a>
<a href='story.php?id=2'>story</a>
<a href='map.php?id=2'>map</a>
<a href='cities.phsp'>cities</a>
</div>";
}
else
{}
?>
<a href="sl.php?id=3">Soul Reaver</a>
<?php 
	
if ($id==3) 
{
echo "<div id='coolmenu_select'>
<a href='characters.php?id=3'>characters</a>
<a href='story.php?id=3'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
<a href='map.php?id=3'>map</a>
</div>";
}
else
{}
?>
<a href="sl2.php?id=4">Soul Reaver 2</a>
<?php 
	
if ($id==4)
{
echo "<div id='coolmenu_select'>
<a href='characters.php?id=4'>characters</a>
<a href='story.php?id=4'>story</a>
<a href='map.php?id=4'>map</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>

</div>";
}
else
{}
?>
<a href="bo2.php?id=5">Blood Omen 2</a>
<?php 
	
if ($id==5)
{
echo "<div id='coolmenu_select'>
<a href='characters.php?id=5'>characters</a>
<a href='story.php?id=5'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
</div>";
}
else
{}
?>
<a href="def.php?id=6">Defiance</a>
<?php 
	
if ($id==6)
{
echo "<div id='coolmenu_select'>
<a href='characters.php?id=6'>characters</a>
<a href='story.php?id=6'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
</div>";
}
else
{}
?>

</div><br><br>
<?php

/* path */ 
$poll_path = dirname(__FILE__);

require_once "poll/include/config.inc.php";
require_once "poll/include/$POLLDB[class]";
require_once "poll/include/class_poll.php";
$CLASS["db"] = new polldb_sql;
$CLASS["db"]->connect(); 

$php_poll = new poll();

/* the first poll */ 
echo $php_poll->poll_process(1);

?>


        </td>
