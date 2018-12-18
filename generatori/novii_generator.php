<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>novii_generator.php</title>
  
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
 
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 29px rgba(18, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(66, 20, 29, 0.354);">
 
 novii_generator.php - Этот файл в UTF-8, test string : ハロー！
 
 <h3>Например, для составления редиректов </h3> 

 <form action="novii_generator.php" method="post" >
 
    <input type="submit" class="my_button"/><br />
	
	 
	
	
  ЗДЕСЬ БУДУТ НОВЫЕ ПАРАМЕТРЫ
  
	
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
   
   
   
  $ves_kod = 'ПРОСТО ЛЮБОЙ КОД, например:  <?php ?> '; 
   
   
   
   
   // nachalo diva v php
   echo '<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(29, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(55, 99, 29, 0.267);">';
   
   // vivod vsego koda, kotorii uydet v 
   
  echo '
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  весь код, уйдущий в новую форму 
  
  <textarea rows="2" cols="100">';
 
  $text_2 = htmlspecialchars($ves_kod); 
  
  echo $text_2; 	
  
  echo '</textarea>
  
  </div>';
  
  
  
  
  
  // конец diva v php
  
   echo '</div>';
   
   
    

?>

 
</div><!--tipa wrapper-->
</body>

</html>
  
  