<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>




<?php  include_once('../readlanguage.php');$idioma=readLanguage("es");?>


<META content="3 days" name=Revisit>
	<META content=all name=robots>
	<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
 <link href="/css/normal.css" rel="stylesheet" type="text/css">
<title>Software BLink
</title>


<body bgcolor="#FFFFFF">




<body bgcolor="#FFFFFF" text="#000000">

<h1>

  Software BLink</h1>

<p>&nbsp;</p>

<h2>

<?php 
if ($idioma=='es') 
  echo "El software BLink es proporcionado de las siguientes maneras:";
  else   echo "Software BLink is provided in the following formats:";  ?>
</h2>


<p><a href=BLink2.0.tar.gz>

<?php if ($idioma=='es') 
  echo "C&oacute;digo fuente en c++";
  else   echo "Source code for BLink2.0 in c++";  ?>


</a> </p>
<p><a href=BLink2.0.gz>
<?php if ($idioma=='es') 
  echo "Versi&oacute;n compilada para linux/586";
  else   echo "Compiled version for linux/586";  ?>


</a> </p>
<p>&nbsp;</p>



<h2>
<?php if ($idioma=='es') 
  echo "Documentaci&oacute;n en l&iacute;nea:";
  else   echo "Online material:";  ?>
</h2>

<p><a href="BLinkHowtoInstall.html">

<?php if ($idioma=='es') 
  echo "Documentaci&oacute;n de BLink";
  else   echo "Documentation for BLink";  ?>



</a>

</p><p><a href="supplementary/index.php">

<?php if ($idioma=='es')
  echo "Material suplementario";
  else   echo "Supplementary material";  ?>



</a></p>
<p>&nbsp;</p>

<h2>
<?php if ($idioma=='es')
echo "Referencia</h2><p>BLink puede ser citado mediante el siguiente art&iacute;culo:";
else echo "Citation</h2><p>BLink can be cited with the following paper:";
?>
<p>
Sebastiani P.; Abad-Grau M.M.<br>
"Bayesian estimates of Linkage Disequilibrium"<br>
BMC Genetics, 8, 1-13, 2007
</body>

</html>

