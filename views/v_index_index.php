<!DOCTYPE html SYSTEM "about:legacy-compat"> 
<html lang="en" xml:lang="en">

<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
   <link rel="stylesheet" href="../css/default.css" 	type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
        <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>

<body>
	<br><br>	
       <div id="content">
            <h1>Welcome to<?=APP_NAME?>
        	</h1>
            
        	<h3><?php if($user) echo $user->first_name;?></h3>
          	<h3><br>
    		Great Deals in Europe!</h3>
          <h4><br>
          Tell Us About Your Travels in Europe!</h4>
          <hr>
          <p>
          	<a href="#"><img src="../images/flags/aus.png" alt="Austria" id="aus"></a>
            <a href="#"><img src="../images/flags/bel.png" alt="Belgium" id="bel"></a>
            <a href="#"><img src="../images/flags/bul.png" alt="Bulgaria" id="bul"></a>
            <a href="#"><img src="../images/flags/cro.png" alt="Croatia" id="cro"></a>
            <a href="#"><img src="../images/flags/cyp.png" alt="Cyprus" id="cyp"></a>
          </p>
          
          <p>
          	<a href="#"><img src="../images/flags/cze.png" alt="Czech republic" id="cze"></a>
          	<a href="#"><img src="../images/flags/den.png" alt="Denmark" id="den"></a>
          	<a href="#"><img src="../images/flags/est.png" alt="Estonia" id="est"></a>
          	<a href="#"><img src="../images/flags/fin.png" alt="Finland" id="fin"></a>
          	<a href="#"><img src="../images/flags/fra.png" alt="France" id="fra"></a>
          	<a href="#"><img src="../images/flags/geo.png" alt="" id="geo"></a>
          	<a href="#"><img src="../images/flags/ger.png" alt="Germany" id="ger"></a>
          </p>
          
          <p>
          <a href="#"><img src="../images/flags/gre.png" alt="Greece" id="gre"></a>
          <a href="#"><img src="../images/flags/hun.png" alt="Hungry" id="hun"></a>
          <a href="#"><img src="../images/flags/ire.png" alt="Ireland" id="ire"></a>
          <a href="#"><img src="../images/flags/ita.png" alt="Italy" id="ita"></a>
          <a href="#"><img src="../images/flags/lat.png" alt="Latvia" id="lat"></a>
          <a href="#"><img src="../images/flags/lit.png" alt="Lithuania" id="lit"></a>
          <a href="#"><img src="../images/flags/lux.png" alt="Luxembourg" id="lux"></a>
          </p>
          
          <p>
          <a href="#"><img src="../images/flags/ned.png" alt="Netherlands" id="ned"></a>
          <a href="#"><img src="../images/flags/nor.png" alt="Norway" id="nor"></a>
          <a href="#"><img src="../images/flags/pol.png" alt="Poland" id="pol"></a>
          <a href="#"><img src="../images/flags/por.png" alt="Portugal" id="por"></a>
          <a href="#"><img src="../images/flags/rom.png" alt="Romania" id="rom"></a>
          <a href="#"><img src="../images/flags/slo.png" alt="Slovakia" id="slo"></a>
          <a href="#"><img src="../images/flags/slov.png" alt="Solvenia" id="slov"></a>
          </p>
          
          <p><a href="#"><img src="../images/flags/spa.png" alt="Spain"  id="spa"></a>
          <a href="#"><img src="../images/flags/swi.png" alt="Switzerland" id="swi"></a>
          <a href="#"><img src="../images/flags/uk.png" alt="United Kingdom"  id="uk"></a>
          <a href="#"><img src="../images/flags/vat.png" alt="Holy See - Vatican" id="vat"></a>
          <a href="#"><img src="../images/flags/eu.png" alt="European Union" id="eu"></a>
          </p>
          <hr>
          <h4>Current European Countries Particpating in our Blog! <br>
          </h4>
          <br>
         
		</div> 
    
</body>

</html>