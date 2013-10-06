<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Project 2</title>

<!-- CSS -->
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/inframe.css" rel="stylesheet" type="text/css">
<link href="/css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />

<!-- JavaScripts -->

<script type="text/javascript" src="/javascripts/jquery.js"></script>
<script type="text/javascript" src="/javascripts/jquery.colorbox.js"></script>


<script type="text/javascript">
$(document).ready(function(){
		//assign the ColorBox event to elements, using a class name on the a tag
		$(".c_box").colorbox({width:"960px", height:"95%", iframe:true, escKey:true, overlayClose:true});
	});

</script>


</head>

<body>

<div class="container">
 <div class="content">
 
 <div class="header">
 	<p>&nbsp;</p>
    <p><img src="images/europe_header.jpg" alt="European Map"></p>
</div>
  <!-- end .header -->
  
  <!-- Countries Flags -->

  <div class="box">
  <h2>Select A Flag To View Our Products</h2>
  	<a href="colorbox/austria.php" class="highlightit c_box"><img src="images/flags/aus.png" alt="Austria" 	title="Austria"				id="austria"></a>
  	<a href="#" class="highlightit c_box"><img src="images/flags/bel.png" alt="Beligum" 	title="Beligum"				id="beligum"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/bul.png" alt="Bulgaria" 	title="Bulgaria"			id="bulgaria"></a>
   	<a href="#" class="highlightit c_box"><img src="images/flags/cro.png" alt="Croatia" 	title="Croatia"				id="croatia"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/cyp.png" alt="Cyprus"  	title="BCyprus"				id="cyprus"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/cze.png" alt="Czech"  	title="Czech Republic"		id="czech"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/den.png" alt="Denmark" 	title="Denmark"				id="denmark"></a>
   	<a href="#" class="highlightit c_box"><img src="images/flags/est.png" alt="Estonia" 	title="Estonia"				id="estonia"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/fin.png" alt="Finland" 	title="Finland"				id="finland"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/fra.png" alt="France" 	title="France"				id="france"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/ger.png" alt="Germany" 	title="Germany"				id="germany"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/gre.png" alt="Greece" 	title="Greece"				id="greece"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/hun.png" alt="Hungary" 	title="Hungary" 			id="hungary"></a>
    
    <br />
    			
    <a href="#" class="highlightit c_box"><img src="images/flags/ita.png" alt="Italy" 		title="Italy"			id="italy"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/lat.png" alt="Latvia"   		title="Latvia"			id="latvia"></a>
   	<a href="#" class="highlightit c_box"><img src="images/flags/lit.png" alt="Lithuania"  	title="Lithuania"		id="lithuania"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/lux.png" alt="Luxembourg"  	title="Luxembourg"		id="luxembourg"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/ned.png" alt="Netherlands"  	title="Netherlands"		id="netherlands"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/nor.png" alt="Norway"   		title="Norway"			id="norway"></a>
   	<a href="#" class="highlightit c_box"><img src="images/flags/pol.png" alt="Poland"		title="Poland"			id="portugal"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/rom.png" alt="Romania"		title="Romania"			id="romania"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/slo.png" alt="Slovakia" 		title="Slovakia"		id="slovakia"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/slov.png" alt="Slovenia" 	title="Slovenia"		id="slovenia"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/spa.png" alt="Spain" 		title="Spain"			id="spain"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/swi.png" alt="Switzwerland"  title="Switzwerland"	id="switzerland"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/uk.png" alt="United_Kingdom" title="United Kingdom"	id="united_kingdom"></a>
    <a href="#" class="highlightit c_box"><img src="images/flags/vat.png" alt="Vatican" 		title="Vatican"		id="vatican"></a>
    
  </div>
    
 
   <iframe src="home.php" style="text-align:center"></iframe>
    
 
  <!-- end .content --></div>
  
  <!-- end .container -->
  <div class="footer">
    <h2>Project 2</h2>
  </div>
</div>
</body>
</html>
