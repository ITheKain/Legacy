<td width="162" align="left" valign="top" class="left"><p align="center" class="title"><img src="img/DCLogo.JPG" width="100%" height="93" /></p>
<div id="coolmenu">
<a href="index.php">Main</a>
<a href="bo1.php?id=2">Blood Omen</a>
<?php 
if(isset($_GET['id'])) {$id=$_Get['id'];}	
if (isset($bo_menu)) 
{
echo "<div id='coolmenu_select'>
<a href='characters.php'>characters</a>
<a href='story.php'>story</a>
<a href='map.php'>map</a>
<a href='cities.php'>Музыка</a>
</div>";
}
else
{}
?>
<a href="sl.php?id=3">Soul Reaver</a>
<?php 
	
if (isset($sl_menu)) 
{
echo "<div id='coolmenu_select'>
<a href='characters.php'>characters</a>
<a href='story.php'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
<a href='map.php'>map</a>
</div>";
}
else
{}
?>
<a href="sl2.php?id=4">Soul Reaver2</a>
<?php 
	
if (isset($sl2_menu)) 
{
echo "<div id='coolmenu_select'>
<a href='characters.php'>characters</a>
<a href='story.php'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
</div>";
}
else
{}
?>
<a href="bo2.php?id=5">Blood Omen2</a>
<?php 
	
if (isset($bo2_menu)) 
{
echo "<div id='coolmenu_select'>
<a href='characters.php'>characters</a>
<a href='story.php'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
</div>";
}
else
{}
?>
<a href="def.php?id=6">Defiance</a>
<?php 
	
if (isset($def_menu)) 
{
echo "<div id='coolmenu_select'>
<a href='characters.php'>characters</a>
<a href='story.php'>story</a>
<a href='locations.php'>locations</a>
<a href='creatures.php'>creatures</a>
</div>";
}
else
{}
?>

</div>        </td>
