<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>generatsia-generatorov.php</title>
  
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
 
 <div style="width: 900px; padding: 8px;text-align: left;float: left;box-shadow: 0 0 2px rgba(14, 18, 19, 0.5);margin: 15px 5px;border-radius: 15px;background-color: rgba(9, 43, 109, 0.09);">
 
    <b>СГЕНЕРИРОВАТЬ НАЧАЛО ДЛЯ НОВОГО ГЕНЕРАТОРА</b>

 <form action="generatsia-generatorov.php" method="post" >
 
    <p><input type="submit" class="my_button"/></p><br />
	
	<b>generatsia-generatorov</b><br /><br />
	
	
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(40, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(14, 48, 29, 0.193);">

<b>1)) название нового генератора</b> - nazv_nov_generatora  =  '.$_POST[nazv_nov_generatora].' 
<textarea name="nazv_nov_generatora" rows="1" cols="30">novii_generator.php</textarea><br /><br />

   </div><!-- end название нового генератора - nazv_nov_generatora -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 12px rgba(30, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(5, 11, 29, 0.361);">

<b>2)) для чего нужен создаваемый генератор</b> - dlya_chego_genrtr  =  '.$_POST[dlya_chego_genrtr].' 
<textarea name="dlya_chego_genrtr" rows="1" cols="100">Например, для составления редиректов </textarea><br /><br />

   </div><!-- end для чего нужен создаваемый генератор - dlya_chego_genrtr -->
  
  
    
	
	
	
	
	
	
	
	
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
   $r_clr_4 = ''.$r200.', '.$r100.', 29, 0.6';
   
   
  // peremenn koda poidushego v novuy stranitsu - generator 
  $ves_kod = 
  
  '<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>'.$_POST[nazv_nov_generatora].'</title>
  
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
 
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 '.$r30.'px rgba('.$r50.', 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba('.$r_clr_1.');">
 
 '.$_POST[nazv_nov_generatora].' - Этот файл в UTF-8, test string : ハロー！
 
 <h3>'.$_POST[dlya_chego_genrtr].'</h3> 

 <form action="'.$_POST[nazv_nov_generatora].'" method="post" >
 
    <input type="submit" class="my_button"/><br />
	
	 
	
	
  ЗДЕСЬ БУДУТ НОВЫЕ ПАРАМЕТРЫ
  
	
	 <br /><br />
	 
	 <p><input type="submit" class="my_button"/></p><br />
  
   
 </form>
 
 
 
 </div>
 
 
 

<?php

$php = \'.php\';

 

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
   
   $html = \'.html\';
   $php = \'.php\';
   $css = \'.css\'; 
   
   
   
   $r_clr_1 = \'\'.$r200.\', \'.$r100.\', 29, 0.\'.$r500.\'\';
   
   $r_clr_2 = \'\'.$r200.\', \'.$r100.\', 29, 1\';
   $r_clr_3 = \'\'.$r200.\', \'.$r100.\', 29, 0.4\';
   $r_clr_4 = \'\'.$r200.\', \'.$r100.\', 29, 0.8\';
   
   
   
  $ves_kod = \'ПРОСТО ЛЮБОЙ КОД, например:  <?php ?> \'; 
   
   
   
   
   // nachalo diva v php
   echo \'<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(29, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(55, 99, 29, 0.267);">\';
   
   // vivod vsego koda, kotorii uydet v 
   
  echo \'
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  весь код, уйдущий в новую форму 
  
  <textarea rows="2" cols="100">\';
 
  $text_2 = htmlspecialchars($ves_kod); 
  
  echo $text_2; 	
  
  echo \'</textarea>
  
  </div>\';
  
  
  
  
  
  // конец diva v php
  
   echo \'</div>\';
   
   
    

?>

 
</div><!--tipa wrapper-->
</body>

</html>
  
  '; 
   
   
   
   
   // nachalo diva v php
   echo '<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(29, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(55, 99, 29, 0.267);">';
   
   // vivod vsego koda, kotorii uydet v 
   
  echo '
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  весь код, уйдущий в новую форму 
  
  <textarea rows="30" cols="100">';
 
  $text_2 = htmlspecialchars($ves_kod); 
  
  echo $text_2; 	
  
  echo '</textarea>
  
  </div>';
  
  
  
  
  
  // конец diva v php
  
   echo '</div>';
   
   
   // 
   $novii_generator_stranitsa = fopen(''.$_POST[nazv_nov_generatora].'', "w");
   fwrite($novii_generator_stranitsa, $ves_kod);
   fclose($novii_generator_stranitsa);
  
    

?>

 
</div><!--tipa wrapper-->
</body>

</html>