<?php include("blocks\bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
if (!isset($id)) {$id = 2;}
$result = mysql_query("Select sec,meta_d,meta_k,text From istoria where sec='$id' ",$db);

$myrow = mysql_fetch_array($result);
$result2 = mysql_query("Select title From settings where id='$id' ",$db);

$myrow2 = mysql_fetch_array($result2);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $myrow['meta_d'];  ?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k'];  ?> ">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Legacy of Kain:<?php echo $myrow2['title'];  ?> > Story</title>
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
<h2><font size="4">Story</font></h2>
<hr align="center" width="95%" size="1" color="#600" />
<p><?php echo $myrow['text']; ?></p>
          
          
        
          

          </td>
        </tr>
       
    </table></td>
  </tr>
  <?php include("blocks\footer.php");
?>
</table>

</body>
</html>
