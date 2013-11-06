<section>

<article>
	<h1 class="title">All Things European Blogs</h1>
</article>

<article>

<p class="title">

<a href="http://europa.eu/about-eu/countries/member-countries/austria/index_en.htm" target="_blank"><img src="../images/flags/aus.png" 	alt="Austria"  	title="Austria" id="aus"></a>
  	<a href="http://europa.eu/about-eu/countries/member-countries/belgium/index_en.htm" target="_blank"><img src="../images/flags/bel.png" 	alt="Belgium"  	title="Belgium" id="bel"></a>
  	<a href="http://europa.eu/about-eu/countries/member-countries/bulgaria/index_en.htm" target="_blank"><img src="../images/flags/bul.png" alt="Bulgaria" 	title="Bulgaria" id="bul"></a>
  	<a href="http://europa.eu/about-eu/countries/member-countries/croatia/index_en.htm" target="_blank"><img src="../images/flags/cro.png" 	alt="Croatia" 	title="Croatia" id="cro"></a>
  	<a href="http://europa.eu/about-eu/countries/member-countries/cyprus/index_en.htm" target="_blank"><img src="../images/flags/cyp.png" 	alt="Cyprus" 	title="Cyprus" 	id="cyp"></a>
  	<a href="http://europa.eu/about-eu/countries/member-countries/denmark/index_en.htm" target="_blank"><img src="../images/flags/den.png" 	alt="Denmark" 	title="Denmark"		id="den"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/estonia/index_en.htm" target="_blank"><img src="../images/flags/est.png" 	alt="Estonia" 	title="Estonia" 	id="est"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/finland/index_en.htm" target="_blank"><img src="../images/flags/fin.png" 	alt="Finland" 	title="Finland" 	id="fin"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/france/index_en.htm" target="_blank"><img src="../images/flags/fra.png" 	alt="France" 	title="France"		id="fra"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/germany/index_en.htm" target="_blank"><img src="../images/flags/ger.png"	alt="Germany" 	title="Germany" 	id="ger"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/greece/index_en.htm" target="_blank"><img src="../images/flags/gre.png" 	alt="Greece"  	title="Greece" 		id="gre"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/hungary/index_en.htm" target="_blank"><img src="../images/flags/hun.png" 	alt="Hungry" 	title="Hungry"		id="hun"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/ireland/index_en.htm" target="_blank"><img src="../images/flags/ire.png" 	alt="Ireland" 	title="Ireland"		id="ire"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/italy/index_en.htm" target="_blank"><img src="../images/flags/ita.png" 	alt="Italy" 	title="Italy"		id="ita"></a>
    <br>
    <a href="http://europa.eu/about-eu/countries/member-countries/latvia/index_en.htm" target="_blank"><img src="../images/flags/lat.png" 	alt="Latvia" 	title="Latvia"		id="lat"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/lithuania/index_en.htm" target="_blank"><img src="../images/flags/lit.png" 	alt="Lithuania" 		title="Lithuania"	id="lit"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/luxembourg/index_en.htm" target="_blank"><img src="../images/flags/lux.png" 	alt="Luxembourg"  	title="Luxemburg" 	id="lux"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/malta/index_en.htm" target="_blank"><img src="../images/flags/malta.png"  		alt="malta flag" 	title="Malta" 		id="mal"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/netherlands/index_en.htm" target="_blank"><img src="../images/flags/ned.png" 		alt="Netherlands" 	title="Netherlands"	id="ned"></a>					    <a href="http://europa.eu/about-eu/countries/member-countries/poland/index_en.htm" target="_blank"><img src="../images/flags/pol.png" 			alt="Poland" 		title="Poland" 		id="pol"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/portugal/index_en.htm" target="_blank"><img src="../images/flags/por.png" 		alt="Portugal" 		title="Portugal"	id="por"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/romania/index_en.htm" target="_blank"><img src="../images/flags/rom.png" 			alt="Romania" 		title="Romania"		id="rom"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/slovakia/index_en.htm" target="_blank"><img src="../images/flags/slo.png" 		alt="Slovakia" 		title="Slovakia" 	id="slo"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/slovenia/index_en.htm" target="_blank"><img src="../images/flags/slov.png" 		alt="Solvenia" 		title="Solvenia" 	id="slov"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/spain/index_en.htm" target="_blank"><img src="../images/flags/spa.png" 			alt="Spain"  		title="Spain" 		id="spa"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/sweden/index_en.htm" target="_blank"><img src="../images/flags/swe.png" 			alt="sweden" 		title="Sweden" 		id="swe"></a>
    <a href="http://europa.eu/about-eu/countries/member-countries/unitedkingdom/index_en.htm" target="_blank"><img src="../images/flags/uk.png" 	alt="United Kingdom"  title="United Kingdom" id="uk"></a>
    <a href="http://europa.eu/about-eu/countries/" 								target="_blank"><img src="../images/flags/eu.png" 					alt="European Union" title="European Union"	id="eu"></a>
 </p>
 
 </article>
 
<article>
  
  <?php foreach($posts as $post): ?>
  
  <h2><?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>
    <h3><?=$post['country']?></h3><br>

    <p><?=$post['content']?></p>

    <p><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time></p><br>

<?php endforeach; ?><br>

</article>

</section>