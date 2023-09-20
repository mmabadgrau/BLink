<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>



<?php include($_SERVER['DOCUMENT_ROOT'].'/readlanguage.php');$idioma=readLanguage("es");?>	

<META content="3 days" name=Revisit>
	<META content=all name=robots>
	<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
 <link href="/css/normal.css" rel="stylesheet" type="text/css">

<title>

<?php if ($idioma=='es') 
  echo "Gr&aacute;ficos de descenso del Desequilibrio en el Ligamiento";
  else   echo "LD Decay Plots";  ?>

</title>


<body bgcolor="#FFFFFF">




<body bgcolor="#FFFFFF" text="#000000">

<h1>
<?php if ($idioma=='es')
  echo "Gr&aacute;ficos de descenso del Desequilibrio en el Ligamiento";
  else   echo "LD Decay Plots";  ?>

</h1>

<h2><a href="simulations.xls">For simulations using Hudson's MS program</a></h2>
<h2><a href="EuropeanSimulations.xls">For simulations using Broad Institute' COSI program</a></h2>
<h2><a href="chromosome22.xls">For chromosome22, Yoruba and CEPH, from the International Hapmap Project</a></h2>
</body>

</html>

