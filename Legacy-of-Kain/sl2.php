<?php include("blocks\bd.php");

$result = mysql_query("Select title,meta_d,meta_k,text From settings where page='sl2' ",$db);

$myrow = mysql_fetch_array($result);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $myrow['meta_d'];  ?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k'];  ?> ">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Legacy of Kain:<?php echo $myrow['title'];  ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body background="img/background.jpg">
<table width="1000" border="0" align="center" class="main_border">
  <?php include("blocks\header.php");
?>
  <tr>
     <td><table width="100%" border="0">
    <?php 
	include("blocks\leftmenu.php");

	?>
          <td width="827" align="left" valign="top" bgcolor="#FFFFFF" background="img/SymLight.JPG">
<?php echo $myrow['text']; ?> 

        </td>
        </tr>
        </table></td>
  </tr>
  <?php include("blocks\footer.php");
?>
</table>

</body>
</html>
