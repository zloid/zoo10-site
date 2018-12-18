<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Супер-админка Злоида</title>
  
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
 
 <div style="width: 1250px; padding: 8px;text-align: left;float: left;box-shadow: 0 0 2px rgba(14, 18, 19, 0.5);margin: 8px 5px;border-radius: 15px;background-color: rgba(9, 43, 109, 0.09);">
 
 <div style="width: 1200px;
    padding: 8px;
    text-align: left;
    float: left;
    box-shadow: 0 0 5px rgba(3, 18, 19, 0.5);
    margin: 8px 5px;
    border-radius: 15px;
    background-color: rgba(191, 112, 38, 0.07);
   
   ">

 <form action="super-zloid-adminka.php" method="post" >
 
    <p><input type="submit" class="my_button" /></p><br />
	
	<b>Генерируется div блоков со стилями</b><br /><br />
	<textarea name="zagolovok" rows="1" cols="2"></textarea><br /><br />
	
	
	
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 4px rgba(45, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(196, 43, 29, 0.489);">


<b>Картинка body</b>))  фон body - картинка позади всего - fon_body  =  '.$_POST[fon_body].' - (../patterns/ .jpg ksdjbh.jpg <? echo include 'param/fon_body.php'; ?>
<textarea name="fon_body" rows="1" cols="10">bg-1.jpg</textarea><br /><br />

</div><!-- end фон body - картинка позади всего - fon_body --> 
  
  
	
	
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 3px rgba(12, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(6, 23, 29, 0.171);">
	
	<b>1)) Обложка - wrapper</b><br /><br />
	
	<div style="padding: 1px 5px;text-align: left;float: left;box-shadow: 0 0 14px rgba(44, 18, 19, 0.5);margin: 8px 5px;border-radius: 15px;background-color: rgba(63, 29, 29, 0.271);">1.1)) ширина wrappera  '.$_POST['shir-wrap'].'  = <? echo include 'param/shir_wrapper.php'; ?>
	<textarea name="shir-wrap" rows="1" cols="10">1100px</textarea><br /><br />
	</div><!-- end ширина wrapper  --> 
	
	</div><!-- end wrapper  -->
	
	 
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 26px rgba(32, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(150, 20, 29, 0.107);">
	
	<b>2)) Шапка - header</b><br /><br />
	
	
<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 27px rgba(50, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(175, 57, 29, 0.362);">
	
	2.1)) высота шапки - header '.$_POST['vis_hdr'].' = <? echo include 'param/vis_hdr.php'; ?>
	<textarea name="vis_hdr" rows="1" cols="10">350px</textarea><br /><br />
	
	</div><!-- end высота шапки  --> 
	
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 18px rgba(27, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(56, 35, 29, 0.291);">


2.2))  ширина шапки - shrn_hdr  =  '.$_POST[shrn_hdr].' <? echo include 'param/shrn_hdr.php'; ?>
<textarea name="shrn_hdr" rows="1" cols="10">100%</textarea><br /><br />

</div><!-- end ширина шапки - shrn_hdr --> 
  
  


<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 18px rgba(33, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(54, 89, 29, 0.100);">


2.3))  фон шапки  fon_shpki  =  '.$_POST[fon_shpki].'  - (../patterns/ .jpg <? echo include 'param/fon_shpki.php'; ?>
<textarea name="fon_shpki" rows="1" cols="20">ksdjbh-2.jpg</textarea><br /><br />

</div><!-- end фон шапки --> 

<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 22px rgba(17, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(123, 34, 29, 0.126);">


2.4))  повтор бэкграунда дива - povtor_bgrd_diva  =  '.$_POST[povtor_bgrd_diva].' : <b>Выбрать: no-repeat, repeat, repeat-x, repeat-y, space, round</b> - 
 <? echo include 'param/povtor_bgrd_diva.php'; ?>
<textarea name="povtor_bgrd_diva" rows="1" cols="10">repeat-x</textarea><br /><br />

</div><!-- end повтор бэкграунда дива - povtor_bgrd_diva --> 
  
<div style="1px 5px; text-align: left; float: left; box-shadow: 0 0 10px rgba(32, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(15, 68, 29, 0.27);">


2.5))  новый Div которого нет в шапке - novii_div  =  '.$_POST[novii_div].'
<textarea name="novii_div" rows="2" cols="30"></textarea><br /><br />

</div><!-- end новый Div которого нет в шапке - novii_div --> 
  
    
  
  
	
	</div><!-- end 2)) Шапка - header -->
	
	
	
	<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 13px rgba(5, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(166, 25, 29, 0.364);">


<b>3))  ширина меню - menu  shir_menu</b>  =  '.$_POST[shir_menu].' <? echo include 'param/shir_menu.php'; ?>
<textarea name="shir_menu" rows="1" cols="10">1000px</textarea><br /><br />


  
  

</div> <!-- ширина меню - menu  shir_menu --> 



  <div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 22px rgba(40, 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba(94, 27, 29, 0.165);">


 <b>4)) запись в CSS - zapis_v_css</b> =  '.$_POST[zapis_v_css].' 
<textarea name="zapis_v_css" rows="2" cols="60"> </textarea><br /><br />

</div><!-- end запись в CSS - zapis_v_css --> 
  
  
  
<p><input type="submit" class="my_button"/></p><br />
	
  
 </form>
 
 </div>
 
 
 

<?php

$php = '.php';

$nov = "\r\n\r\n";
$nov_2 = "\r\n"; 


// parametr запись в CSS - zapis_v_css '.$_POST[zapis_v_css].'
$zapis_v_css = fopen('param/zapis_v_css'.$php, "a");
$page_zapis_v_css =  ''.$_POST['zapis_v_css'].''.$nov_2.'';
fwrite($zapis_v_css, $page_zapis_v_css);
fclose($zapis_v_css); 


 

// parametr новый Div которого нет в шапке - novii_div '.$_POST[novii_div].'
$novii_div = fopen('param/novii_div'.$php, "w");
$page_novii_div =  ''.$_POST['novii_div'].''.$nov_2.'';
fwrite($novii_div, $page_novii_div);
fclose($novii_div); 


// parametr фон body - картинка позади всего - fon_body '.$_POST[fon_body].'
$fon_body = fopen('param/fon_body'.$php, "w");
$page_fon_body =  ''.$_POST['fon_body'].''.$nov_2.'';
fwrite($fon_body, $page_fon_body);
fclose($fon_body); 


// parametr повтор бэкграунда дива - povtor_bgrd_diva '.$_POST[povtor_bgrd_diva].'
$povtor_bgrd_diva = fopen('param/povtor_bgrd_diva'.$php, "w");
$page_povtor_bgrd_diva =  ''.$_POST['povtor_bgrd_diva'].''.$nov_2.'';
fwrite($povtor_bgrd_diva, $page_povtor_bgrd_diva);
fclose($povtor_bgrd_diva); 



// parametr фон шапки - fon_shpki '.$_POST[fon_shpki].'
$fon_shpki = fopen('param/fon_shpki'.$php, "w");
$page_fon_shpki =  ''.$_POST['fon_shpki'].''.$nov_2.'';
fwrite($fon_shpki, $page_fon_shpki);
fclose($fon_shpki); 
   

// parametr высота шапки - header '.$_POST['vis_hdr'].'
$vis_hdr = fopen('param/vis_hdr'.$php, "w");
$page_vis_hdr =  ''.$_POST['vis_hdr'].''.$nov_2.'';
fwrite($vis_hdr, $page_vis_hdr); 
fclose($vis_hdr); 


// parametr ширина меню - menu - shir_menu '.$_POST[shir_menu].'
$shir_menu = fopen('param/shir_menu'.$php, "w");
$page_shir_menu =  ''.$_POST['shir_menu'].'';
fwrite($shir_menu, $page_shir_menu);
fclose($shir_menu); 

// parametr ширина шапки - shrn_hdr '.$_POST[shrn_hdr].'
$shrn_hdr = fopen('param/shrn_hdr'.$php, "w");
$page_shrn_hdr =  ''.$_POST['shrn_hdr'].''.$nov_2.'';
fwrite($shrn_hdr, $page_shrn_hdr);
fclose($shrn_hdr); 


 


 



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
    margin: 8px 5px;
    border-radius: 15px;
    background-color: rgba('.$r_clr_1.');
   
   ">
			
полный код Дива - ниже<br/>
а также там необходимые стили

 </div>
 
 ';
 
 
 $random_div_2 = '<div style="padding: 1px 5px; text-align: left; float: left; box-shadow: 0 0 '.$r30.'px rgba('.$r50.', 18, 19, 0.5); margin: 8px 5px; border-radius: 15px; background-color: rgba('.$r_clr_1.');">код в строку - для админки</div>';
			
   
   
 
   if ($_POST['zagolovok'] == "") 
	   
      {
	  echo '...';
      }	   
	  
	else
		
	{
	echo $_POST['zagolovok']	;
	}
	
 
 
 
 echo " <br /><br /> <br />",'....' ;
	
 
  
 
  echo "<br /><br />";
  
   echo ' ================================================================================================' ;
	
  
  echo $b;

echo $random_div; 

   echo '<textarea rows="4" cols="50">'.$random_div.'</textarea>';
	
	 echo "<br /><br />";
	 
	 echo ' ================================================================================================' ;
	
	 
	 echo $random_div_2; 

   echo '<textarea rows="1" cols="160">'.$random_div_2.'</textarea>';
	 
	 
	
	echo $b;
	
	echo ' ===============================================================================================' ;
	
	 
	 
 
 
 // Открываем файл index.html в режиме записи 

// $html = '.html' , Создаем новый файл в корневой папке и указываем формат файла

 

$indx = fopen(index.$html, "w");

// Запись в файл


$page_full = 

'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <title>Название сайта</title>
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   
   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
   
   <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
   
</head>

<body>


<div class="wrapper">

	<div class="header">
	
	
	   '.$_POST[novii_div].'
	
	    <a href="#"><div class="rss"> </div></a>
		
          <a href="/"><div class="logotip"> </div></a>

            

        
	<!-- .header end -->	 
	</div>

	<div class="middle">
	
	<div class="menu">
 
                <ul class="cssmenu">

                   <li class="active"><a href="/">Главная</a></li>
   
                   <li class=""><a href="#">Пункт 2</a></li>
				   
				   <li class=""><a href="#">Пункт 3</a></li>
				   
				   <li class=""><a href="#">Пункт 4</a></li>
				   
				   <li class=""><a href="#">Пункт 5</a></li>
				   
				   <li class=""><a href="#">Пункт 6</a></li>

                </ul>
				
            <!-- .menu end-->
            </div>

		<div class="container">
			<div class="content">
				
				 
	
Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.
 

  
				
			</div><!-- .content-->
		</div><!-- .container-->

		 
	</div><!-- .middle-->

</div><!-- .wrapper -->


<div class="footer">
	<strong>Footer:</strong> Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.
</div><!-- .footer -->

 
</body>
 
</html>

 '
 

;

fwrite($indx, $page_full); 

// zakrivaem
 
fclose($indx); 
 
 
 
// Открываем файл style.css в режиме записи 

// $css = '.css' Создаем новый файл в корневой папке и указываем формат файла


$styl = fopen('css/style'.$css, "w");

// Запись в файл


$page_style = 

'html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}


html {
	height: 100%;
}



/*                               Body
-----------------------------------------------------------------------------*/

body {
   font: 12px/18px Arial, sans-serif;
   width: 100%;
   height: 100%;
   background: url(../patterns/'.$_POST[fon_body].' ) repeat  #fff;
}


/*                               Wrapper
-----------------------------------------------------------------------------*/

.wrapper {
	width: '.$_POST['shir-wrap'].';
	margin: 0 auto;
	min-height: 100%;
	height: auto !important;
	height: 100%;
}


/*                               Header
-----------------------------------------------------------------------------*/
.header {
	
	/*
	background: #FFE680;
	
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  background-image: radial-gradient(circle at 0px 0px, rgba(255, 255, 255, 0.65098), rgba(255, 255, 255, 0.34902));
  background-color: rgb(238, 230, 230);
  box-shadow: rgba(0, 0, 0, 0.498039) -3px -3px 8px inset, rgba(255, 255, 255, 0.901961) 3px 3px 8px inset, rgba(0, 0, 0, 0.8) 3px 3px 8px -3px;
  border-radius: 30px;
  background: url(/images/bg.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  margin: 0 auto;
  width: 100%;
  
  
   background: rgba('.$r_clr_2.');
   
   */
   margin: 0 auto;
   
   height: '.$_POST['vis_hdr'].';
   width: '.$_POST[shrn_hdr].'; 
     
   background: url(../patterns/'.$_POST[fon_shpki].')  '.$_POST[povtor_bgrd_diva].'  rgba('.$r_clr_2.');
}


/*                              Middle
-----------------------------------------------------------------------------*/
.middle {
	width: 100%;
	padding: 0 0 85px;
	position: relative;
}
.middle:after {
	display: table;
	clear: both;
	
}
.container {
	width: 100%;
	float: left;
	overflow: hidden;
}

/*                                content
-----------------------------------------------------------------------------*/

.content {
  border-radius: 10px;
  background: rgba('.$r_clr_4.');
  background-image: url(/pattern/voda2.png);
  margin: 10px 97px 10px 103px;
  padding: 38px;
  overflow: hidden;
  min-height: 689px;
 }

/*                               Footer
-----------------------------------------------------------------------------*/
.footer {
	width: 1000px;
	margin: -50px auto;
	height: 85px;
	background: rgba('.$r_clr_4.');
	position: relative;
	overflow: hidden;
}


/*                               menu-top all
-----------------------------------------------------------------------------*/
.menu {
  font-family: inherit;
  font-size: 13px;
  float: left;
  margin: 10px 0 5px 53px;
  padding: 8px 8px 8px 10px;
  width: '.$_POST[shir_menu].';
  height: 38px;
  text-decoration: none;
  border-top-left-radius: 10px;      border-top-right-radius: 10px;      border-bottom-right-radius: 10px;      border-bottom-left-radius: 10px;      
  background-image: rgba('.$r_clr_2.');          
  background-color: rgba('.$r_clr_3.');
  box-shadow: rgba(0, 158, 195, 0.498039) -3px -3px 8px inset, rgba(255, 255, 255, 0.89) 3px 3px 8px inset, rgba(0, 0, 0, 0.8) 3px 3px 8px -3px;      
  border-radius: 30px;
}

ul.cssmenu {
padding: 0;
margin: 0;
list-style: none;

} 

ul.cssmenu li {
  float: left;
  color: rgba('.$r_clr_2.');
  font: 14px Arial;
  font-weight: bold;
  background: url(/pattern/menu5.png);
  width: 120px;
  height:38;
  float: left;
  padding: 11px 5px;
  margin: 0 0 0 15px;
  text-align: center;
} 

ul.cssmenu li a, ul.cssmenu li   {
text-decoration: none;
}

ul.cssmenu a:hover {
 color: rgba('.$r_clr_2.');
 text-decoration: underline;
}

.menu a:visited {
color: rgba('.$r_clr_2.');
}

.menu .active a {
  color: rgba('.$r_clr.');
  text-decoration: underline;  
}

/*                             end menu-top all
-----------------------------------------------------------------------------*/
	 
';


fwrite($styl, $page_style); 

// zakrivaem style.css - $styl
 
fclose($styl); 





// запись в styles.css новых параметров из пункта 4
$styl_2 = fopen('css/style.css', "a");
fwrite($styl_2, $_POST[zapis_v_css]."\r\n");
fclose($styl_2);  





// parametr shir-wrapper dlya includ
$sh_wr = fopen('param/shir_wrapper'.$php, "w");
$page_sh_wr =  ''.$_POST['shir-wrap'].'';
fwrite($sh_wr, $page_sh_wr); 
fclose($sh_wr); 


 
 
 
	
?>

 
</div><!--tipa wrapper-->
</body>

</html>