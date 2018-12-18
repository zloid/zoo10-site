<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>zoo10.zloid.ru-adminka.php</title>
  
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
 
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 20px rgba(14, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(134, 57, 29, 0.35);">
 
 zoo10.zloid.ru-adminka.php - Этот файл в UTF-8, test string : ハロー！
 
 <h3>Администрирование сайта http://zoo10.zloid.ru</h3> 

 <form action="zoo10.zloid.ru-adminka.php" method="post" >
 
    <input type="submit" class="my_button"/><br />
	
	 
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 2px rgba(49, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(42, 61, 29, 0.184);">

<b>1)) название новой страницы</b> - nazv_nov_strntsi  =  '.$_POST[nazv_nov_strntsi].' 
<textarea name="nazv_nov_strntsi" rows="1" cols="30">0-novka</textarea><br /><br />

   </div><!-- end название новой страницы - nazv_nov_strntsi -->
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 15px rgba(34, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(132, 69, 29, 0.469);">

<b>2)) title</b> - titl_full  =  '.$_POST[titl_full].' 
<textarea name="titl_full" rows="1" cols="30">zoo10</textarea><br /><br />

   </div><!-- end title - titl_full -->  

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(44, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(96, 81, 29, 0.380);">

<b>3)) какой пункт активен</b> - vibr_aktivn_punkta  =  '.$_POST[vibr_aktivn_punkta].' 
<textarea name="vibr_aktivn_punkta" rows="1" cols="30">$punkt_menu_1</textarea><br /><br />

   </div><!-- end какой пункт активен - vibr_aktivn_punkta -->
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 9px rgba(12, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(162, 59, 29, 0.190);">

<b>4)) выбор класса контента, смена фона</b> - vibr_class_contenta  =  '.$_POST[vibr_class_contenta].' 
<textarea name="vibr_class_contenta" rows="1" cols="30">content</textarea><br /><br />

   </div><!-- end выбор класса контента, смена фона - vibr_class_contenta -->
   
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 2px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(25, 92, 29, 0.153);">

<b>5)) заголовок h1</b> - zagol_h1  =  '.$_POST[zagol_h1].' 
<textarea name="zagol_h1" rows="1" cols="30">Поездка!</textarea><br /><br />

   </div><!-- end заголовок h1 - zagol_h1 -->
  
  
  <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(25, 88, 95, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(179, 187, 49, 0.12);">

<b>6)) песни</b> - pesni  =  '.$_POST[pesni].' 
<textarea name="pesni" rows="1" cols="30">del_if_want_blank</textarea><br /><br />

   
      <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(48, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(28, 4, 29, 0.112);">

<b>6.0)) картинка слева от плэйлиста</b> - kartinka_sleva_pleylista  =  '.$_POST[kartinka_sleva_pleylista].' 
<textarea name="kartinka_sleva_pleylista" rows="1" cols="100">background: url(../patterns/pesni-pro-dermo-lyubov-cover.jpg) no-repeat;</textarea><br /><br />

   </div><!-- end картинка слева от плэйлиста - kartinka_sleva_pleylista -->
  
  
  
   
 
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(172, 2, 175, 0.2);">

<b>6.1)) название песни 1</b> - nazv_pesni_1  =  '.$_POST[nazv_pesni_1].' 
<textarea name="nazv_pesni_1" rows="1" cols="30">Утренняя промежка</textarea><br /><br />
 <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(11, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(34, 69, 29, 0.397);">

<b>6.1.1)) полный путь к песне 1</b> - polnii_put_pesni_1  =  '.$_POST[polnii_put_pesni_1].' 
<textarea name="polnii_put_pesni_1" rows="1" cols="100">media/kusochek-s-dermom-zoo10-album/24_-_Afrodit.mp3</textarea><br /><br />

   </div><!-- end название песни 1 - полный путь - polnii_put_pesni_1 -->
  
   </div><!-- end название песни 1 - nazv_pesni_1 -->
  
  
    
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(172, 2, 175, 0.2);">

<b>6.2)) название песни 2</b> - nazv_pesni_1  =  '.$_POST[nazv_pesni_2].' 
<textarea name="nazv_pesni_2" rows="1" cols="30"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 25px rgba(10, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(39, 11, 29, 0.2);">

<b>6.2.1)) полный путь к песне 2</b> - polnii_put_pesni_2  =  '.$_POST[polnii_put_pesni_2].' 
<textarea name="polnii_put_pesni_2" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 2 - polnii_put_pesni_2 -->
  
  
  
   </div><!-- end название песни 2 - nazv_pesni_2 -->
  
   
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(172, 2, 175, 0.2);">

<b>6.3)) название песни 3</b> - nazv_pesni_3  =  '.$_POST[nazv_pesni_3].' 
<textarea name="nazv_pesni_3" rows="1" cols="60"></textarea><br /><br />

     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(11, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(34, 69, 29, 0.397);">

<b>6.3.1)) полный путь к песне 3</b> - polnii_put_pesni_3  =  '.$_POST[polnii_put_pesni_3].' 
<textarea name="polnii_put_pesni_3" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 3 - polnii_put_pesni_3 -->
   </div><!-- end название песни 3 - nazv_pesni_3 -->
  
  
   
      <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 25px rgba(42, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(175, 54, 29, 0.374);">

<b>6.4)) название песни 4</b> - nazv_pesni_4  =  '.$_POST[nazv_pesni_4].' 
<textarea name="nazv_pesni_4" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 19px rgba(32, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(85, 78, 29, 0.130);">

<b>6.4.1)) полный путь к песне 4</b> - polnii_put_pesni_4  =  '.$_POST[polnii_put_pesni_4].' 
<textarea name="polnii_put_pesni_4" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 4 - polnii_put_pesni_4 -->
  
  
  
   </div><!-- end название песни 4 - nazv_pesni_4 -->
  
  
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 26px rgba(1, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(94, 21, 29, 0.487);">

<b>
6.5)) название песни 5</b> - nazv_pesni_5  =  '.$_POST[nazv_pesni_5].' 
<textarea name="nazv_pesni_5" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 14px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(68, 13, 29, 0.132);">

<b>6.5.1)) полный путь к песне 5</b> - polnii_put_pesni_5  =  '.$_POST[polnii_put_pesni_5].' 
<textarea name="polnii_put_pesni_5" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 5 - polnii_put_pesni_5 -->
  
  
  
   </div><!-- end название песни 5 - nazv_pesni_5 -->
  
  
      <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(42, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(132, 73, 29, 0.456);">

<b>6.6)) название песни 6</b> - nazv_pesni_6  =  '.$_POST[nazv_pesni_6].' 
<textarea name="nazv_pesni_6" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 15px rgba(47, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(128, 19, 29, 0.485);">

<b>6.6.1)) полный путь к песне 6</b> - polnii_put_pesni_6  =  '.$_POST[polnii_put_pesni_6].' 
<textarea name="polnii_put_pesni_6" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 6 - polnii_put_pesni_6 -->
  
  
  
   </div><!-- end название песни 6 - nazv_pesni_6 -->
  
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 15px rgba(16, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(22, 29, 29, 0.119);">

<b>6.7)) название песни 7</b> - nazv_pesni_7  =  '.$_POST[nazv_pesni_7].' 
<textarea name="nazv_pesni_7" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 20px rgba(19, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(55, 71, 29, 0.364);">

<b>6.7.1)) полный путь к песне 7</b> - polnii_put_pesni_7  =  '.$_POST[polnii_put_pesni_7].' 
<textarea name="polnii_put_pesni_7" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 7 - polnii_put_pesni_7 -->
  
  
  
   </div><!-- end название песни 7 - nazv_pesni_7 -->
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 15px rgba(28, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(172, 12, 29, 0.213);">

<b>6.8)) название песни 8</b> - nazv_pesni_8  =  '.$_POST[nazv_pesni_8].' 
<textarea name="nazv_pesni_8" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 16px rgba(9, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(114, 1, 29, 0.132);">

<b>6.8.1)) полный путь к песне 8</b> - polnii_put_pesni_8  =  '.$_POST[polnii_put_pesni_8].' 
<textarea name="polnii_put_pesni_8" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 8 - polnii_put_pesni_8 -->
  
  
  
   </div><!-- end название песни 8 - nazv_pesni_8 -->
  
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 1px rgba(3, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(157, 28, 29, 0.440);">

<b>6.9)) название песни 9</b> - nazv_pesni_9  =  '.$_POST[nazv_pesni_9].' 
<textarea name="nazv_pesni_9" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 21px rgba(2, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(195, 43, 29, 0.337);">

<b>6.9.1)) полный путь к песне 9</b> - polnii_put_pesni_9  =  '.$_POST[polnii_put_pesni_9].' 
<textarea name="polnii_put_pesni_9" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 9 - polnii_put_pesni_9 -->
  
  
  
   </div><!-- end название песни 9 - nazv_pesni_9 -->
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(3, 86, 29, 0.199);">

<b>6.10)) название песни 10</b> - nazv_pesni_10  =  '.$_POST[nazv_pesni_10].' 
<textarea name="nazv_pesni_10" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 10px rgba(7, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(139, 83, 29, 0.477);">

<b>6.10.1)) полный путь к песне 10</b> - polnii_put_pesni_10  =  '.$_POST[polnii_put_pesni_10].' 
<textarea name="polnii_put_pesni_10" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 10 - polnii_put_pesni_10 -->
  
  
  
   </div><!-- end название песни 10 - nazv_pesni_10 -->
  
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 10px rgba(31, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(168, 56, 29, 0.206);">

<b>6.11)) название песни 11</b> - nazv_pesni_11  =  '.$_POST[nazv_pesni_11].' 
<textarea name="nazv_pesni_11" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 14px rgba(10, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(94, 5, 29, 0.293);">

<b>6.11.1)) полный путь к песне 11</b> - polnii_put_pesni_11  =  '.$_POST[polnii_put_pesni_11].' 
<textarea name="polnii_put_pesni_11" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 11 - polnii_put_pesni_11 -->
  
  
  
   </div><!-- end название песни 11 - nazv_pesni_11 -->
  
  
    <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(11, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(195, 7, 29, 0.462);">

<b>6.12)) название песни 12</b> - nazv_pesni_12  =  '.$_POST[nazv_pesni_12].' 
<textarea name="nazv_pesni_12" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 4px rgba(30, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(52, 99, 29, 0.163);">

<b>6.12.1)) полный путь к песне 12</b> - polnii_put_pesni_12  =  '.$_POST[polnii_put_pesni_12].' 
<textarea name="polnii_put_pesni_12" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 12 - polnii_put_pesni_12 -->
  
  
  
   </div><!-- end название песни 12 - nazv_pesni_12 -->
  
  
      <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 6px rgba(12, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(70, 26, 29, 0.88);">

<b>6.13)) название песни 13</b> - nazv_pesni_13  =  '.$_POST[nazv_pesni_13].' 
<textarea name="nazv_pesni_13" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(22, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(166, 90, 29, 0.138);">

<b>6.13.1)) полный путь к песне 13</b> - polnii_put_pesni_13  =  '.$_POST[polnii_put_pesni_13].' 
<textarea name="polnii_put_pesni_13" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 13 - polnii_put_pesni_13 -->
  
  
  
   </div><!-- end название песни 13 - nazv_pesni_13 -->
   
      <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 10px rgba(27, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(113, 93, 29, 0.463);">

<b>6.14)) название песни 14</b> - nazv_pesni_14  =  '.$_POST[nazv_pesni_14].' 
<textarea name="nazv_pesni_14" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 6px rgba(2, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(189, 57, 29, 0.29);">

<b>6.14.1)) полный путь к песне 14</b> - polnii_put_pesni_14  =  '.$_POST[polnii_put_pesni_14].' 
<textarea name="polnii_put_pesni_14" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 14 - polnii_put_pesni_14 -->
  
  
  
   </div><!-- end название песни 14 - nazv_pesni_14 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 26px rgba(32, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(38, 90, 29, 0.328);">

<b>6.15)) название песни 15</b> - nazv_pesni_15  =  '.$_POST[nazv_pesni_15].' 
<textarea name="nazv_pesni_15" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 29px rgba(35, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(117, 36, 29, 0.114);">

<b>6.15.1)) полный путь к песне 15</b> - polnii_put_pesni_15  =  '.$_POST[polnii_put_pesni_15].' 
<textarea name="polnii_put_pesni_15" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 15 - polnii_put_pesni_15 -->
  
  
  
   </div><!-- end название песни 15 - nazv_pesni_15 -->
  
  
    <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 4px rgba(21, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(9, 50, 29, 0.480);">

<b>6.16)) название песни 16</b> - nazv_pesni_16  =  '.$_POST[nazv_pesni_16].' 
<textarea name="nazv_pesni_16" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 29px rgba(16, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(111, 38, 29, 0.98);">

<b>6.16.1)) полный путь к песне 16</b> - polnii_put_pesni_16  =  '.$_POST[polnii_put_pesni_16].' 
<textarea name="polnii_put_pesni_16" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 16 - polnii_put_pesni_16 -->
  
  
  
   </div><!-- end название песни 16 - nazv_pesni_16 -->
  
  
      <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 29px rgba(11, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(50, 65, 29, 0.331);">

<b>6.17)) название песни 17</b> - nazv_pesni_17  =  '.$_POST[nazv_pesni_17].' 
<textarea name="nazv_pesni_17" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 25px rgba(45, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(68, 96, 29, 0.94);">

<b>6.17.1)) полный путь к песне 17</b> - polnii_put_pesni_17  =  '.$_POST[polnii_put_pesni_17].' 
<textarea name="polnii_put_pesni_17" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 17 - polnii_put_pesni_17 -->
  
  
  
   </div><!-- end название песни 17 - nazv_pesni_17 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(6, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(22, 2, 29, 0.415);">

<b>6.18)) название песни 18</b> - nazv_pesni_18  =  '.$_POST[nazv_pesni_18].' 
<textarea name="nazv_pesni_18" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(40, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(93, 88, 29, 0.303);">

<b>6.18.1)) полный путь к песне 18</b> - polnii_put_pesni_18  =  '.$_POST[polnii_put_pesni_18].' 
<textarea name="polnii_put_pesni_18" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 18 - polnii_put_pesni_18 -->
  
  
  
   </div><!-- end название песни 18 - nazv_pesni_18 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 20px rgba(1, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(98, 85, 29, 0.169);">

<b>6.19)) название песни 19</b> - nazv_pesni_19  =  '.$_POST[nazv_pesni_19].' 
<textarea name="nazv_pesni_19" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 3px rgba(49, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(20, 99, 29, 0.125);">

<b>6.19.1)) полный путь к песне 19</b> - polnii_put_pesni_19  =  '.$_POST[polnii_put_pesni_19].' 
<textarea name="polnii_put_pesni_19" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 19 - polnii_put_pesni_19 -->
  
  
  
   </div><!-- end название песни 19 - nazv_pesni_19 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 20px rgba(42, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(33, 74, 29, 0.427);">

<b>6.20)) название песни 20</b> - nazv_pesni_20  =  '.$_POST[nazv_pesni_20].' 
<textarea name="nazv_pesni_20" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(70, 36, 29, 0.454);">

<b>6.20.1)) полный путь к песне 20</b> - polnii_put_pesni_20  =  '.$_POST[polnii_put_pesni_20].' 
<textarea name="polnii_put_pesni_20" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 20 - polnii_put_pesni_20 -->
  
  
  
   </div><!-- end название песни 20 - nazv_pesni_20 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 25px rgba(29, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(176, 80, 29, 0.36);">

<b>6.21)) название песни 21</b> - nazv_pesni_21  =  '.$_POST[nazv_pesni_21].' 
<textarea name="nazv_pesni_21" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(4, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(8, 63, 29, 0.186);">

<b>6.21.1)) полный путь к песне 21</b> - polnii_put_pesni_21  =  '.$_POST[polnii_put_pesni_21].' 
<textarea name="polnii_put_pesni_21" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 21 - polnii_put_pesni_21 -->
  
  
  
   </div><!-- end название песни 21 - nazv_pesni_21 -->
   
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 4px rgba(20, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(109, 89, 29, 0.69);">

<b>6.22)) название песни 22</b> - nazv_pesni_22  =  '.$_POST[nazv_pesni_22].' 
<textarea name="nazv_pesni_22" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 7px rgba(15, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(143, 6, 29, 0.249);">

<b>6.22.1)) полный путь к песне 22</b> - polnii_put_pesni_22  =  '.$_POST[polnii_put_pesni_22].' 
<textarea name="polnii_put_pesni_22" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 22 - polnii_put_pesni_22 -->
  
  
  
   </div><!-- end название песни 22 - nazv_pesni_22 -->
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 16px rgba(34, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(197, 96, 29, 0.207);">

<b>6.23)) название песни 23</b> - nazv_pesni_23  =  '.$_POST[nazv_pesni_23].' 
<textarea name="nazv_pesni_23" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 24px rgba(42, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(5, 86, 29, 0.303);">

<b>6.23.1)) полный путь к песне 23</b> - polnii_put_pesni_23  =  '.$_POST[polnii_put_pesni_23].' 
<textarea name="polnii_put_pesni_23" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 23 - polnii_put_pesni_23 -->
  
  
  
   </div><!-- end название песни 23 - nazv_pesni_23 -->
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 19px rgba(49, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(125, 43, 29, 0.98);">

<b>6.24)) название песни 24</b> - nazv_pesni_24  =  '.$_POST[nazv_pesni_24].' 
<textarea name="nazv_pesni_24" rows="1" cols="100"></textarea><br /><br />
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 23px rgba(32, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(56, 8, 29, 0.83);">

<b>6.24.1)) полный путь к песне 24</b> - polnii_put_pesni_24  =  '.$_POST[polnii_put_pesni_24].' 
<textarea name="polnii_put_pesni_24" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 24 - polnii_put_pesni_24 -->
  
  
  
   </div><!-- end название песни 24 - nazv_pesni_24 -->
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 10px rgba(17, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(31, 22, 29, 0.404);">

<b>6.25)) название песни 25</b> - nazv_pesni_25  =  '.$_POST[nazv_pesni_25].' 
<textarea name="nazv_pesni_25" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 25px rgba(31, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(63, 11, 29, 0.233);">

<b>6.25.1)) полный путь к песне 25</b> - polnii_put_pesni_25  =  '.$_POST[polnii_put_pesni_25].' 
<textarea name="polnii_put_pesni_25" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 25 - polnii_put_pesni_25 -->
  
  
  
   </div><!-- end название песни 25 - nazv_pesni_25 -->
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 15px rgba(0, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(81, 66, 29, 0.216);">

<b>6.26)) название песни 26</b> - nazv_pesni_26  =  '.$_POST[nazv_pesni_26].' 
<textarea name="nazv_pesni_26" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 0px rgba(2, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(172, 81, 29, 0.476);">

<b>6.26.1)) полный путь к песне 26</b> - polnii_put_pesni_26  =  '.$_POST[polnii_put_pesni_26].' 
<textarea name="polnii_put_pesni_26" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 26 - polnii_put_pesni_26 -->
  
  
  
   </div><!-- end название песни 26 - nazv_pesni_26 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 4px rgba(50, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(98, 17, 29, 0.53);">

<b>6.27)) название песни 27</b> - nazv_pesni_27  =  '.$_POST[nazv_pesni_27].' 
<textarea name="nazv_pesni_27" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 7px rgba(0, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(158, 62, 29, 0.125);">

<b>6.27.1)) полный путь к песне 27</b> - polnii_put_pesni_27  =  '.$_POST[polnii_put_pesni_27].' 
<textarea name="polnii_put_pesni_27" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 27 - polnii_put_pesni_27 -->
  
  
  
   </div><!-- end название песни 27 - nazv_pesni_27 -->
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 1px rgba(9, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(177, 45, 29, 0.308);">

<b>6.28)) название песни 28</b> - nazv_pesni_28  =  '.$_POST[nazv_pesni_28].' 
<textarea name="nazv_pesni_28" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 28px rgba(24, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(109, 79, 29, 0.204);">

<b>6.28.1)) полный путь к песне 28</b> - polnii_put_pesni_28  =  '.$_POST[polnii_put_pesni_28].' 
<textarea name="polnii_put_pesni_28" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 28 - polnii_put_pesni_28 -->
  
  
  
   </div><!-- end название песни 28 - nazv_pesni_28 -->
   
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 2px rgba(8, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(35, 62, 29, 0.22);">

<b>6.29)) название песни 29</b> - nazv_pesni_29  =  '.$_POST[nazv_pesni_29].' 
<textarea name="nazv_pesni_29" rows="1" cols="100"></textarea><br /><br />


   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 8px rgba(1, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(125, 50, 29, 0.275);">

<b>6.29.1)) полный путь к песне 29</b> - polnii_put_pesni_29  =  '.$_POST[polnii_put_pesni_29].' 
<textarea name="polnii_put_pesni_29" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 29 - polnii_put_pesni_29 -->
  
  
  
   </div><!-- end название песни 29 - nazv_pesni_29 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(23, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(103, 69, 29, 0.180);">

<b>6.30)) название песни 30</b> - nazv_pesni_30  =  '.$_POST[nazv_pesni_30].' 
<textarea name="nazv_pesni_30" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 7px rgba(0, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(190, 94, 29, 0.54);">

<b>6.30.1)) полный путь к песне 30</b> - polnii_put_pesni_30  =  '.$_POST[polnii_put_pesni_30].' 
<textarea name="polnii_put_pesni_30" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 30 - polnii_put_pesni_30 -->
  
  
  

   </div><!-- end название песни 30 - nazv_pesni_30 -->
  
  
     <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 1px rgba(48, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(117, 74, 29, 0.333);">

<b>6.31)) название песни 31</b> - nazv_pesni_31  =  '.$_POST[nazv_pesni_31].' 
<textarea name="nazv_pesni_31" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 4px rgba(42, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(101, 0, 29, 0.269);">

<b>6.31.1)) полный путь к песне 31</b> - polnii_put_pesni_31  =  '.$_POST[polnii_put_pesni_31].' 
<textarea name="polnii_put_pesni_31" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 31 - polnii_put_pesni_31 -->
  
  
  

   </div><!-- end название песни 31 - nazv_pesni_31 -->
  
  
   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 20px rgba(20, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(86, 23, 29, 0.370);">

<b>6.32)) название песни 32</b> - nazv_pesni_32  =  '.$_POST[nazv_pesni_32].' 
<textarea name="nazv_pesni_32" rows="1" cols="100"></textarea><br /><br />

   <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 1px rgba(2, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(160, 89, 29, 0.285);">

<b>6.32.1)) полный путь к песне 32</b> - polnii_put_pesni_32  =  '.$_POST[polnii_put_pesni_32].' 
<textarea name="polnii_put_pesni_32" rows="1" cols="100"></textarea><br /><br />

   </div><!-- end полный путь к песне 32 - polnii_put_pesni_32 -->
  
  
  
   </div><!-- end название песни 32 - nazv_pesni_32 -->
  
  
         
  
   
 

</div><!-- end песни - pesni -->   
  
  
    
     
  
  
  
  
	
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
   
   
   
   if ($_POST[pesni]=="") {
	   echo "...";
   } else {
   echo $v_head = 
  
   '   <link href="../../dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="../../lib/jquery.min.js"></script>
   <script type="text/javascript" src="../../dist/jplayer/jquery.jplayer.min.js"></script>
   <script type="text/javascript" src="../../dist/add-on/jplayer.playlist.min.js"></script>


<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
			title:"'.$_POST[nazv_pesni_1].'",
			mp3:"'.$_POST[polnii_put_pesni_1].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_2].'",
			mp3:"'.$_POST[polnii_put_pesni_2].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_3].'",
			mp3:"'.$_POST[polnii_put_pesni_3].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_4].'",
			mp3:"'.$_POST[polnii_put_pesni_4].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_5].'",
			mp3:"'.$_POST[polnii_put_pesni_5].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_6].'",
			mp3:"'.$_POST[polnii_put_pesni_6].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_7].'",
			mp3:"'.$_POST[polnii_put_pesni_7].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_8].'",
			mp3:"'.$_POST[polnii_put_pesni_8].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_9].'",
			mp3:"'.$_POST[polnii_put_pesni_9].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_10].'",
			mp3:"'.$_POST[polnii_put_pesni_10].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_11].'",
			mp3:"'.$_POST[polnii_put_pesni_11].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_12].'",
			mp3:"'.$_POST[polnii_put_pesni_12].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_13].'",
			mp3:"'.$_POST[polnii_put_pesni_13].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_14].'",
			mp3:"'.$_POST[polnii_put_pesni_14].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_15].'",
			mp3:"'.$_POST[polnii_put_pesni_15].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_16].'",
			mp3:"'.$_POST[polnii_put_pesni_16].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_17].'",
			mp3:"'.$_POST[polnii_put_pesni_17].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_18].'",
			mp3:"'.$_POST[polnii_put_pesni_18].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_19].'",
			mp3:"'.$_POST[polnii_put_pesni_19].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_20].'",
			mp3:"'.$_POST[polnii_put_pesni_20].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_21].'",
			mp3:"'.$_POST[polnii_put_pesni_21].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_22].'",
			mp3:"'.$_POST[polnii_put_pesni_22].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_23].'",
			mp3:"'.$_POST[polnii_put_pesni_23].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_24].'",
			mp3:"'.$_POST[polnii_put_pesni_24].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_25].'",
			mp3:"'.$_POST[polnii_put_pesni_25].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_26].'",
			mp3:"'.$_POST[polnii_put_pesni_26].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_27].'",
			mp3:"'.$_POST[polnii_put_pesni_27].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_28].'",
			mp3:"'.$_POST[polnii_put_pesni_28].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_29].'",
			mp3:"'.$_POST[polnii_put_pesni_29].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_30].'",
			mp3:"'.$_POST[polnii_put_pesni_30].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_31].'",
			mp3:"'.$_POST[polnii_put_pesni_31].'",
			
		},
		
		{
			title:"'.$_POST[nazv_pesni_32].'",
			mp3:"'.$_POST[polnii_put_pesni_32].'",
			
		},
		
		], {
		swfPath: "../../dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
});
//]]>
</script>
	
   
   
   ';
   }
   
   
   
   
   
   if ($_POST[pesni]=="") {
	   echo "...";
   } else {
   echo $v_content = '
   
   <div style="
    padding: 4px 8px;
    float: right;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.94);
    margin: 8px 5px;
    border-radius: 6px;
   ">
	
	
	<!-- Audio Player HTML -->
	<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-previous" role="button" tabindex="0">previous</button>
				<button class="jp-play" role="button" tabindex="0">play</button>
				<button class="jp-next" role="button" tabindex="0">next</button>
				<button class="jp-stop" role="button" tabindex="0">stop</button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
			</div>
			<div class="jp-toggles">
				<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
			</div>
		</div>
		<div class="jp-playlist">
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
	<!-- end Audio Player HTML -->
	</div>

	
	<div style="width: 292px;
    height: 300px;
    padding: 1px 5px;
    text-align: left;
    float: left;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.94);
    margin: 8px 5px;
    border-radius: 6px;
    '.$_POST[kartinka_sleva_pleylista].'
    background-size: contain;"></div>
   
   
   ';
   }
   
   
   
   
   
   
   
  // novaya stranitsa 
  $ves_kod =
  
'<?php 
   $title="'.$_POST[titl_full].'";

   '.$_POST[vibr_aktivn_punkta].' = "active";
   
   $class_content = "'.$_POST[vibr_class_contenta].'";

   include ("templates/header_1.php");
?>   

'.$v_head.'



<?php
   include ("templates/header_2.php");
?>


   <h1>'.$_POST[zagol_h1].'</h1>
   
   
   '.$v_content.'


<?php include ("templates/footer.php"); ?>'; 
   
   
   
   
   // nachalo diva v php
   echo '<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 17px rgba(29, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(55, 99, 29, 0.267);">';
   
   // vivod vsego koda, kotorii uydet v 
   
  echo '
<div style="padding: 5px; text-align: left; float: left; box-shadow: 0 0 11px rgba(43, 18, 19, 0.5); margin: 15px 5px; border-radius: 15px; background-color: rgba(154, 95, 29, 0.455);">
  
  весь код, уйдущий в новую форму 
  
  <textarea rows="100" cols="100">';
 
  $text_2 = htmlspecialchars($ves_kod); 
  
  echo $text_2; 	
  
  echo '</textarea>
  
  </div>';
  
  
  
  
  
  // конец diva v php
  
   echo '</div>';
   
   
  // parametr название новой страницы - nazv_nov_strntsi '.$_POST[nazv_nov_strntsi].'
$nazv_nov_strntsi = fopen('../'.$_POST[nazv_nov_strntsi].''.'.html', "w");
$page_nazv_nov_strntsi =  ''.$ves_kod.''.$nov_2.'';
fwrite($nazv_nov_strntsi, $page_nazv_nov_strntsi);
fclose($nazv_nov_strntsi); 


// parametr запись ссылок в общий массив, для карты сайта - zapis_v_massiv '.$_POST[zapis_v_massiv].'
$zapis_v_massiv = fopen('../arrays/array-all'.$php, "a");
$page_zapis_v_massiv =  '<li><a href="/'.$_POST[nazv_nov_strntsi].'.html">'.$_POST[zagol_h1].'</a></li>'.$nov_2.'';
fwrite($zapis_v_massiv, $page_zapis_v_massiv);
fclose($zapis_v_massiv); 


 
 

?>

 
</div><!--tipa wrapper-->
</body>

</html>
  
  