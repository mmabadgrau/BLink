<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>

<?php include('/home/mabad/www/readlanguage.php');$idioma=readLanguage("es");?>

	<META content="3 days" name=Revisit>
	<META content=all name=robots>
	<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
        <link href="/css/normal.css" rel="stylesheet" type="text/css">


<title>

<?php  if ($idioma=='es') 
  echo "Mapas de desequibrio en el ligamiento";
  else   echo "LD maps";  ?>

</title>
</head>

<body >


<h1>
<?php 
if ($idioma=='es') 
  echo "Mapas de desequibrio en el ligamiento";
  else   echo "LD maps";
?>
  </h1>

<h4>
<?php 
if ($idioma=='es') 
  echo "Para poder ver los mapas en su tama&ntilde;o original, por favor <a href=../../../BMap/resize.php>desactive el redimensionamiento autom&aacute;tico de im&aacute;genes</a> en su navegador.";
  else   echo "In order to see maps in their original size, please <a href=../../../BMap/resize.php>disable automating resizing</a> in your browser.";
?>
</h4>

<h2>

<?php  if ($idioma=='es')
  echo "Simulaciones";
  else   echo "Simulations";  ?>
</h2>

<h3>MAP</h3>
<p>
<a href="/BMap/LDMapSimm.php?file=crossoverEach10&Bayes=4&ss=60&size=1">
<?php  if ($idioma=='es')
 echo "60 sujetos";
else echo "60 individuals";
?>
</a></p>

<p><a href="/BMap/LDMapSimm.php?file=crossoverEach10&Bayes=4&ss=1000&size=1">
<?php  if ($idioma=='es')
 echo "1000 sujetos";
else echo "1000 individuals";
?>
</a></p>


<h3>ML</h3>
<p><a href="/BMap/LDMapSimm.php?file=crossoverEach10&Bayes=0&ss=60&size=1">
<?php  if ($idioma=='es')
 echo "60 sujetos";
else echo "60 individuals";
?>
</a></p>
<p><a href="/BMap/LDMapSimm.php?file=crossoverEach10&Bayes=0&ss=1000&size=1">
<?php  if ($idioma=='es')
 echo "1000 sujetos";
else echo "1000 individuals";
?>
</a></p>




<h2>

<?php  if ($idioma=='es') 
  echo "Datos del International Hapmap Project";
  else   echo "Data from the International HapMap Project";  ?>
</h2>

<h3>MAP</h3>
<p><a href=/BMap/LDMap.php?file=chromosome22_CEUJune2005&MAF=0&Bayes=4&size=1>CEPH chromosome 22</a></p>

<p><a href=/BMap/LDMap.php?file=chromosome22_CEUJune2005&Bayes=4&size=1>CEPH chromosome 22 for different MAF thresholding</a></p>

<p><a href=/BMap/LDMap.php?file=chromosome22_YRIJune2005&MAF=0&Bayes=4&size=1>Yoruba chromosome 22</a></p>

<p><a href=/BMap/LDMap.php?file=chromosome22_YRIJune2005&Bayes=4&size=1>Yoruba chromosome 22 for different MAF thresholding</a></p>



<h3>ML</h3>

<p><a href=/BMap/LDMap.php?file=chromosome22_CEUJune2005&MAF=0&Bayes=0&size=1>CEPH chromosome 22</a></p>

<p><a href=/BMap/LDMap.php?file=chromosome22_CEUJune2005&Bayes=0&size=1>CEPH chromosome 22 for different MAF thresholding</a></p>

<p><a href=/BMap/LDMap.php?file=chromosome22_YRIJune2005&MAF=0&Bayes=0&size=1>Yoruba chromosome 22</a></p>

<p><a href=/BMap/LDMap.php?file=chromosome22_YRIJune2005&Bayes=0&size=1>Yoruba chromosome 22 for different MAF thresholding</a></p>











</body></html>
