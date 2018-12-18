<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>generator-includov.php</title>
  
  <style>
.my_button {
    width: 800px;
    height: 60px;
	color: green;
	font-size: 20px;
	margin: 20px 0;
	
}
</style>
  
 </head>
 <body>
 
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 9px rgba(10, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(136, 67, 29, 0.29);">
 
 generator-includov.php - Этот файл в UTF-8, test string : ハロー！
 
 <h3>Для генерации инклудов</h3> 

 <form action="generator-includov.php" method="post" >
 
    <input type="submit" class="my_button"/><br />
	
	 
	
	
  ЗДЕСЬ БУДУТ НОВЫЕ ПАРАМЕТРЫ
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 5px rgba(38, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(136, 5, 29, 0.246);">

<b>1)) название инклуда на англ</b> - nazv_incl_engl  =  '.$_POST[nazv_incl_engl].' 
<textarea name="nazv_incl_engl" rows="1" cols="30">header_include</textarea><br /><br />

   </div><!-- end название инклуда на англ - nazv_incl_engl -->
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(28, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(194, 35, 29, 0.13);">

<b>2)) в какую папку сохранится инклуд</b> - nazv_papki_includa  =  '.$_POST[nazv_papki_includa].' 
  - например, в <b>includes</b><textarea name="nazv_papki_includa" rows="1" cols="30">templates</textarea><br /><br />

   </div><!-- end в какую папку сохранится инклуд - nazv_papki_includa -->
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 30px rgba(25, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(173, 26, 29, 0.19);">

<b>3)) код внутри инклуди</b> - kod_v_inklude  =  '.$_POST[kod_v_inklude].' 
<textarea name="kod_v_inklude" rows="5" cols="100">kod kod kod</textarea><br /><br />

   </div><!-- end код внутри инклуди - kod_v_inklude -->
  
  
    
   
  
  
	
	 <br /><br />
	 
	 <p><input type="submit" class="my_button"/></p><br />
  
   
 </form>
 
 
 
 </div>
 
 
 

<?php

$php = '.php';

 

// peremennie
   
   $kf = 0.5;
   
   $r3 = rand (0,3);
   $r5 = rand (0,5);
   $r30 = rand (0,30);
   $r50 = rand (0,50);
   $r100 = rand (0,100);
   $r200 = rand (0,200);
   $r500 = rand (0,500);
   
   $b = "<br /><br />";
   
   $html = '.html';
   $php = '.php';
   $css = '.css'; 
   
   
   
   $r_clr_1 = ''.$r200.', '.$r100.', 29, 0.'.$r500.'';
   
   $r_clr_2 = ''.$r200.', '.$r100.', 29, 1';
   $r_clr_3 = ''.$r200.', '.$r100.', 29, 0.4';
   $r_clr_4 = ''.$r200.', '.$r100.', 29, 0.8';
   
   $nov_2 = "\r\n";
   
   
   
  $ves_kod = '<?php include ("'.$_POST[nazv_papki_includa].'/'.$_POST[nazv_incl_engl].'.php"); ?>'; 
   
   
   
   
   // nachalo diva v php
   echo '<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(29, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(55, 99, 29, 0.267);">';
   
   // vivod vsego koda, kotorii uydet v 
   
  echo '
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  Код инклуда, вставить в любую часть страницы 
  
  <textarea rows="2" cols="100">';
 
  $text_2 = htmlspecialchars($ves_kod); 
  
  echo $text_2; 	
  
  echo '</textarea>
  
  </div>';
  
  
  
  
  
  // конец diva v php
  
   echo '</div>';
   
   
   
   
   // parametr название инклуда на англ - nazv_incl_engl '.$_POST[nazv_incl_engl].'
$nazv_incl_engl = fopen('../'.$_POST[nazv_papki_includa].'/'.$_POST[nazv_incl_engl].''.$php, "w");
$page_nazv_incl_engl =  ''.$_POST[kod_v_inklude].''.$nov_2.'<!--'.$ves_kod.'-->'.$nov_2.'';
fwrite($nazv_incl_engl, $page_nazv_incl_engl);
fclose($nazv_incl_engl); 

// резервное копирование всего подряд
$nazv_incl_engl = fopen('../'.$_POST[nazv_papki_includa].'/arhiv-'.$_POST[nazv_incl_engl].''.$php, "a");
$page_nazv_incl_engl =  ''.$_POST[kod_v_inklude].''.$nov_2.''.$nov_2.'';
fwrite($nazv_incl_engl, $page_nazv_incl_engl);
fclose($nazv_incl_engl); 
    

?>

 
</div><!--tipa wrapper-->
</body>

</html>
  
  