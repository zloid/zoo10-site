<!DOCTYPE HTML>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
  <title>generatsia-param</title>
  
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
 
 <div style="width: 1250px; padding: 8px;text-align: left;float: left;box-shadow: 0 0 2px rgba(14, 18, 19, 0.5);margin: 15px 5px;border-radius: 15px;background-color: rgba(9, 43, 109, 0.09);">
 
 <div style="width: 1200px;
    padding: 8px;
    text-align: left;
    float: left;
    box-shadow: 0 0 5px rgba(3, 18, 19, 0.5);
    margin: 15px 5px;
    border-radius: 15px;
    background-color: rgba(191, 112, 38, 0.07);
   
   ">

 <form action="generatsia-param.php" method="post" >
 
    <p><input type="submit" class="my_button"/></p><br />
	
	<b>generatsia-param</b><br /><br />
	
	
	<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 26px rgba(32, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(150, 20, 29, 0.107);">1)) ssd что это - уточнить, например, "высота шапки - header" 
	<textarea name="chto_eto" rows="1" cols="60">высота чего-то</textarea><br /><br />
	</div>
	
	
	<div style="padding: 5px;text-align: left;float: left;box-shadow: 0 0 14px rgba(44, 18, 19, 0.5);margin: 15px 5px;border-radius: 15px;background-color: rgba(63, 29, 29, 0.271);">2)) название параметра на латинице, сохранится в папку param, например, vis_hdr
	<textarea name="nazv_param" rows="1" cols="20">nazv_param</textarea><br /><br />
	</div>
	
	<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 16px rgba(18, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(87, 19, 29, 0.334);">


3))  номер пункта  nomer_pnkt  =  '.$_POST[nomer_pnkt].' - например, 2.1 
<textarea name="nomer_pnkt" rows="1" cols="10">777</textarea><br /><br />

</div><!-- end номер пункта - nomer_pnkt --> 
	
	
<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(9, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(169, 99, 29, 0.260);">


4))  значение параметра - между текстарией - znachenie_mejd_textarea  =  '.$_POST[znachenie_mejd_textarea].' 
<textarea name="znachenie_mejd_textarea" rows="1" cols="100">350px</textarea><br /><br />

</div><!-- end значение параметра - между текстарией - znachenie_mejd_textarea --> 
  
  	 
	 
	 
	 <p><input type="submit" class="my_button"/></p><br />
  
  
  <div style="width:600px; padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(42, 18, 19, 0.5); margin: 2px 2px; background-color: rgba(87, 48, 29, 0.35);">
	<p><input type="submit" /></p><br />
	</div>
  
 </form>
 
 
 
 </div>
 
 
 

<?php

$php = '.php';


// parametr ширина шапки - header '.$_POST['vis_hdr'].'
$vis_hdr = fopen('param/vis_hdr'.$php, "w");
$page_vis_hdr =  ''.$_POST['vis_hdr'].'';
fwrite($vis_hdr, $page_vis_hdr); 
fclose($vis_hdr); 







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
   
   
   
   $random_div = '
 <div style="

    width: '.$kf*(100).'%;
    padding: 8px;
    text-align: left;
    float: left;
    box-shadow: 0 0 '.$r30.'px rgba('.$r50.', 18, 19, 0.5);
    margin: 15px 5px;
    border-radius: 15px;
    background-color: rgba('.$r_clr_1.');
   
   ">
			
полный код Дива - ниже<br/>
а также там необходимые стили

 </div>
 
 ';
 
 
 $random_div_2 = '<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 '.$r30.'px rgba('.$r50.', 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba('.$r_clr_1.');">код в строку - для админки</div>';
			
   
 // idet v formu - do scripta  
   
 $new_param =  


// nije nujnoe

'<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 '.$r30.'px rgba('.$r50.', 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba('.$r_clr_1.');">


'.$_POST[nomer_pnkt].'))  '.$_POST['chto_eto'].' - '.$_POST['nazv_param'].'  =  \'.$_POST['.$_POST['nazv_param'].'].\' <? echo include \'param/'.$_POST['nazv_param'].'.php\'; ?>
<textarea name="'.$_POST['nazv_param'].'" rows="1" cols="100">350px</textarea><br /><br />

</div><!-- end '.$_POST['chto_eto'].' - '.$_POST['nazv_param'].' -->'
; 
 
 // idet v script php
 
 

 
 $new_param_2 =  
 '
// parametr '.$_POST['chto_eto'].' - '.$_POST['nazv_param'].' \'.$_POST['.$_POST['nazv_param'].'].\'
$'.$_POST['nazv_param'].' = fopen(\'param/'.$_POST['nazv_param'].'\'.$php, "w");
$page_'.$_POST['nazv_param'].' =  \'\'.$_POST[\''.$_POST['nazv_param'].'\'].\'\'.$nov_2.\'\';
fwrite($'.$_POST['nazv_param'].', $page_'.$_POST['nazv_param'].');
fclose($'.$_POST['nazv_param'].'); 


 '
 ;
 
 
 $new_param_3 = 
 
'
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 '.$r30.'px rgba('.$r50.', 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba('.$r_clr_1.');">

<b>'.$_POST[nomer_pnkt].')) '.$_POST['chto_eto'].'</b> - '.$_POST['nazv_param'].'  =  \'.$_POST['.$_POST['nazv_param'].'].\' 
<textarea name="'.$_POST['nazv_param'].'" rows="1" cols="100">'.$_POST[znachenie_mejd_textarea].'</textarea><br /><br />

   </div><!-- end '.$_POST['chto_eto'].' - '.$_POST['nazv_param'].' -->
 '
; 
 
 
 
 // form-18.09.15 bez koda <?
 
 
 echo '
 
<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(36, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(21, 64, 29, 0.46);">
  
  ЗАПИСЬ В форму (bez koda ..?php) - получается поле, для записи параметров, с кодом вставки в код php
 
 
 <textarea rows="10" cols="100">';
 
 // Читаем содержимое 
  //$text = file_get_contents("test.php"); 
  // Переводим содержимое в видимую форму 
  $text = htmlspecialchars($new_param_3); 
  // Выводим содержимое файла 
  echo $text; 	
  
  echo ' 
  
  </textarea>
  

  
   </div>'
  ;
  
 // end - form-18.09.15 bez koda <?
 
 
 
 
 echo '
 
 <div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 18px rgba(48, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(98, 95, 29, 0.337);">
  
  ЗАПИСЬ В форму (2 формы вместе - все записывается в отдельную папку param)
 
 
 <textarea rows="10" cols="100">';
 
 // Читаем содержимое 
  //$text = file_get_contents("test.php"); 
  // Переводим содержимое в видимую форму 
  $text = htmlspecialchars($new_param); 
  // Выводим содержимое файла 
  echo $text; 	
  
  echo ' 
  
  </textarea>
  
'.$new_param.'
  
   '
  ;
  
 
  
  echo '
  
  <div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  ЗАПИСЬ В КОД php
  
  <textarea rows="10" cols="100">';
 
 // Читаем содержимое 
  //$text = file_get_contents("test.php"); 
  // Переводим содержимое в видимую форму 
  $text = htmlspecialchars($new_param_2); 
  // Выводим содержимое файла 
  echo $text; 	
  
  echo '</textarea>
  
  </div>
  
  </div>';
 
 
  
	
	
	


?>

 
</div><!--tipa wrapper-->
</body>

</html>