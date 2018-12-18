<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles-2.css" type="text/css">
  <title>generatsia-divov.php</title>
  
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
 
 
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 8px rgba(26, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(119, 76, 29, 0.128); width:900px; ">
 
 
 <form action="generatsia-divov.php" method="post" >
 
    <p><input type="submit" class="my_button"/></p><br />
	
	<b>generatsia-divov</b><br /><br />
	
	
	
	
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 8px rgba(0, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(45, 51, 29, 0.424);">


1.1))  <b>название дива</b> - nazvanie_diva  =  '.$_POST[nazvanie_diva].' 
<textarea name="nazvanie_diva" rows="1" cols="50">any</textarea><br /><br />

</div><!-- end название дива - nazvanie_diva --> 
  
  
  
  <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 18px rgba(10, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(126, 77, 29, 0.281);">


1.2))  <b>ширина дива</b> - shirina_diva  =  '.$_POST[shirina_diva].' 
<textarea name="shirina_diva" rows="1" cols="30">width: 340px;</textarea><br /><br />

</div><!-- end ширина дива - shirina_diva --> 
  
	
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 21px rgba(40, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(116, 90, 29, 0.225);">


1.3))  <b>высота div</b> - visota_div  =  '.$_POST[visota_div].'
<textarea name="visota_div" rows="1" cols="30">height: 100px;</textarea><br /><br />

</div><!-- end высота div - visota_div --> 

<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 6px rgba(49, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(94, 71, 29, 0.412);">


1.4))  <b>текст в диве</b> - text_v_dive  =  '.$_POST[text_v_dive].'  
<textarea name="text_v_dive" rows="1" cols="20">Design Studios</textarea><br /><br />

</div><!-- end текст в диве - text_v_dive --> 
  
  
<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(21, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(117, 38, 29, 0.456);">


1.5))  <b>цвет текста внутри дива</b> - tsvet_v_dive  =  '.$_POST[tsvet_v_dive].' 
<textarea name="tsvet_v_dive" rows="1" cols="30">color: #eeeeee;</textarea><br /><br />

</div><!-- end цвет текста внутри дива - tsvet_v_dive --> 
  
  
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 16px rgba(4, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(1, 56, 29, 0.198);">


1.6))  <b>цвет фона дива</b> - tsvet_fona_diva  =  '.$_POST[tsvet_fona_diva].' 
<textarea name="tsvet_fona_diva" rows="1" cols="30">background-color: #333333;</textarea><br /><br />

</div><!-- end цвет фона дива - tsvet_fona_diva --> 
  
   
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 3px rgba(27, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(180, 19, 29, 0.2);">


1.7))  <b>шрифт</b> настройка - shrift_nastroika  =  '.$_POST[shrift_nastroika].' 
<textarea name="shrift_nastroika" rows="1" cols="60">font: 60px Myriad Pro, Regular;</textarea><br /><br />

</div><!-- end шрифт настройка - shrift_nastroika --> 
  
   
  <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 29px rgba(33, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(120, 96, 29, 0.460);">


1.8)) <b>margin</b> отступы от дива со всех сторон - otstupi_ot_diva  =  '.$_POST[otstupi_ot_diva].' 
<textarea name="otstupi_ot_diva" rows="1" cols="30">margin: 10px 0 0 20px;</textarea><br /><br />

</div><!-- end отступы от дива со всех сторон - otstupi_ot_diva --> 
  
  <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 16px rgba(5, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(130, 47, 29, 0.294);">


1.9))  <b>padding</b> - отступ внутри дива - paddng_otstp_vnutri  =  '.$_POST[paddng_otstp_vnutri].'
<textarea name="paddng_otstp_vnutri" rows="1" cols="30">padding: 15px 5px 5px 15px;</textarea><br /><br />

</div><!-- end паддинг - отступ внутри дива - paddng_otstp_vnutri --> 
  
  
  
  
  
  
  
	
	<p><input type="submit" class="my_button" /></p><br />
	
	 
	
	</div><!-- end glavnii div --> 
	
 </form>	
	
	
 
 
 
 
<?php


if ($_POST[shirina_diva]=="") {

echo "...";
} else {
	
	
}

$div = '
<div class="'.$_POST[nazvanie_diva].'">

'.$_POST[text_v_dive].'

</div><!-- .'.$_POST[nazvanie_diva].' end-->

';

$div_css ='
/*                               '.$_POST[nazvanie_diva].'
-----------------------------------------------------------------------------*/

.'.$_POST[nazvanie_diva].' {
   '.$_POST[shirina_diva].'
   '.$_POST[visota_div].'   
   '.$_POST[tsvet_v_dive].'
   '.$_POST[tsvet_fona_diva].'
   '.$_POST[shrift_nastroika].'
   '.$_POST[otstupi_ot_diva].'
   '.$_POST[paddng_otstp_vnutri].'
   text-align: left; 
   float: left;
}
';


//сделал так: preg_replace("/\s*\r+/", "", $html); удаляются пустые строки кроме перевода строки. $strOutput = preg_replace("/\s+\r\n/","", $div_css);

$strOutput = preg_replace("/\s*\r+/", "", $div_css);


// запись в styles-2.css
$nazv_param = fopen('css/styles-2.css', "w");
fwrite($nazv_param, $strOutput);
fclose($nazv_param);  



echo '
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 7px rgba(32, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(23, 74, 29, 0.14);">
  
  ЗАПИСЬ В КОД html 
  
  <textarea rows="2" cols="100">';
 
  $text = htmlspecialchars($div); 
  
  echo $text; 	
  
  echo '</textarea>
  
  </div>';
  
 
 
 
 
echo '
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  ЗАПИСЬ В КОД css 
  
  <textarea rows="10" cols="100">';
 
  $text_2 = htmlspecialchars($strOutput); 
  
  echo $text_2; 	
  
  echo '</textarea>
  
  </div>';
  
  
  
  echo $div;

 
 
?>
 
 
 
 </body>

</html>