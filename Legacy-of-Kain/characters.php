<?php include("blocks\bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
if (!isset($id)) {$id = 2;}
$result2 = mysql_query("Select title From settings where id='$id' ",$db);

$myrow2 = mysql_fetch_array($result2);

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Legacy of Kain:<?php echo $myrow2['title'];  ?> > Characters</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body background="img/background.jpg">
<table width="1000" border="0" align="center" class="main_border">
  <?php include("blocks\header.php");
?>
  <tr>
    <td><table width="100%" border="0">
    <?php include("blocks\leftmenu.php");
?>
          <td width="827" align="left" valign="top" bgcolor="#FFFFFF" background="img/SymLight.JPG">
<h2><font size="4"> Characters</font></h2>
<hr align="center" width="95%" size="1" color="#600" />
<? printf("<p>The following characters appeared in	<strong>%s</strong></p>",$myrow2['title']);?> 	  

<?php


$result = mysql_query("SELECT sec,name,min_img,description  FROM personaje WHERE sec='$id' ",$db);
if (!$result)
{
exit(mysql_error());
}

if (mysql_num_rows($result) > 0)

{
$myrow = mysql_fetch_array($result); 

do 
{

printf ("<table align='center' class='post'>
         
		 <tr>
         <td colspan='2' height='10' valign='bottom' class='name'>
		%s
		</tr>
         
		 <tr>
         <td><img class='mini' align='left' src='%s'></td>
         <td class='desc' valign='top' align='left'><p>%s<br><br>
		 <a class='link' href='%s.php?sec=%s'>Read more about %s</a></p>
		 </td>
		 </tr>
         
		 </table>",$myrow["name"],$myrow["min_img"],$myrow["description"],$myrow["name"],$myrow["sec"],$myrow["name"]);



}
while ($myrow = mysql_fetch_array($result));}
?>
          
          
        
          

          </td>
        </tr>
       
    </table></td>
  </tr>
  <?php include("blocks\footer.php");
?>
</table>

</body>
</html>
