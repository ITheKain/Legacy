<?php 
include ("blocks/bd.php"); /*Соединяемся с базой*/
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM settings WHERE page='lessons'",$db);
$myrow = mysql_fetch_array($result); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<?php echo $myrow['meta_d']; ?>">
<meta name="keywords" content="<?php echo $myrow['meta_k']; ?>">

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Шаблон</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">

<!--Подключаем шапку сайта-->
<? include("blocks/header.php");   ?> 

  <tr>
    <td><table width="690" border="0" cellspacing="0" cellpadding="0">
      <tr>
<!--Подключаем левый блок сайта-->
<? include ("blocks/lefttd.php");  ?>      
        <td valign="top"><p>В этом уроке пойдет речь об открытие счета в системе 
          Rupay.</p>
        <p>Вообще, счёт в этой системе понадобится Вам для многих 
          целей. Например, Вы сможете без проблем покупать в Интернете цифровые 
          товары, оплачивать хостинг, принимать деньги от своих клиентов и пр.</p>
        <p>Распишем процесс открытия счета по шагам:</p>
        <p><strong>1.</strong> Пройдите по ссылке - <a href="http://ruseller.com/p/rupay.php" target="_blank">открыть 
          счёт в Rupay</a></p>
        <p align="center"><img src="lessons/280807/rupay/1.gif" width="212" height="108"></p>
        <p><strong>2.</strong> На открывшейся странице жмите по 
          ссылке в правом меню, указанной на рисунке:</p>
        <p align="center"><img src="lessons/280807/rupay/2.gif" width="219" height="98"></p>
        <p><strong>3.</strong> Затем, заполняйте регистрационную 
          форму и жмите кнопку: &quot;Регистрация&quot;.</p>
        <p align="center"><img src="lessons/280807/rupay/3.gif" width="214" height="91"></p>
        <p><strong>4.</strong> Итак, если всё прошло хорошо то 
          Вы стали владельцем счета, который не мешало бы пополнить. Пополнить 
          счёт можно множеством различных способов. Подробнее об этом Вы узнаете 
          если нажмете по ссылке &quot;пополнить счет&quot;.</p>
        <p align="center"><img src="lessons/280807/rupay/4.gif" width="236" height="86"></p>
         </td>
      </tr>
    </table></td>
  </tr>
<!--Подключаем нижний графический элемент-->  
<?  include ("blocks/footer.php");        ?>  
</table>
</body>
</html>
