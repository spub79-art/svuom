<?



function atmkoroze($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Atmosférická koroze</h1>



<p class='textjust'>

Na výrobky,  stroje, zařízení, konstrukce, apod., které  jsou vystaveny venkovním atmosférickým podmínkám, působí  všechny negativní vlivy  tohoto  prostředí - znečištění ovzduší, srážky, vlhkost, sluneční záření, apod..  Důsledkem  tohoto  působení je korozní napadení kovových materiálů a  degradace nátěrových a kovových povlaků. Korozní proces v atmosférických podmínkách je ovlivněn celou řadou faktorů. Ve většině případů se při atmosférickém korozním procesu uplatòují elektrochemické reakce - anodická a katodická. Základní podmínkou  pro vznik a  průběh atmosférické koroze  je tedy vytvoření vrstvy vlhkosti kondenzací vzdušné vlhkosti. Doba ovlhčení  povrchu je závislá na mnoha faktorech - teplotě, relativní vlhkosti vzduchu, množství  a druhu  srážek, rychlosti  větru, intenzitě slunečního záření, tvaru  povrchu, jeho drsnosti a  čistotě, stupni zakrytí povrchu, atd.. Korozní rychlost je silně ovlivòována koncentrací nečistot ve vzduchu - nejvýznamnější jsou SO<sub>2</sub> a chloridy. Rychlost korozního napadení lze odhadnout z údajů o korozní agresivitě atmosféry. Při posuzování korozního napadení materiálů se uvažuje:

</p>



<ul>

<li>hmotnostní úbytek kovu rovnoměrnou korozí za určitou dobu</li>

<li>nebezpečí výskytu nerovnoměrného korozního napadení a jeho druh</li>

<li>vznik korozních zplodin na povrchu a jejich charakter</li>

<li>možnost povrchové úpravy materiálu ke snížení korozního nebezpečí</li>

</ul>



<p class='picalign'><img src='images/koroze/atmkoroze/pic1.jpg'></p>



</div>

";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Atmospheric corrosion</h1>



<p class='textjust'>

In the outdoor environment there are a variety of negative aspects of environment - air pollution, rainfall, humidity, sun radiation, etc., which act upon products, machinery, equipment, constructions, etc. As a result metal materials are attacked by corrosion and paint or metal coatings are being degraded. The corrosion process under atmospheric conditions is influenced by a variety of factors. In most cases electrochemical reactions are involved in atmospheric corrosion processes - anode and cathode reactions. The basic condition for the formation and course of atmospheric corrosion is therefore the formation of a moisture layer by the condensation of air moisture. The time of surface exposure to moisture is dependant upon many factors - temperature, relative air moisture, the type and amount of rainfall, wind speed, intensity of sun radiation, surface shape, its roughness and cleanness, degree of surface covering, etc. The rate of corrosion is strongly influenced by the concentration of pollutants in the atmosphere - most importantly SO<sub>2</sub> and chlorides. The rate of corrosion attack can be estimated from the data of atmospheric-aggressive action. For the estimation of corrosion attack on material the following is estimated:

</p>



<ul>

<li>mass losses of a metal by an uniform corrosion over a period of time</li>

<li>the danger of occurrence of an non-uniform corrosive attack and its type</li>

<li>development of corrosion products on the surface and its character</li>

<li>possibility of surface treatment of material to decrease corrosion failure</li>

</ul>



<p class='picalign'><img src='images/koroze/atmkoroze/pic1.jpg'></p>



</div>

";

}

}



function atmkorozemenu($lang)

{

	if($lang=='cz')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Atmosférická koroze</h1>

<p><a href='index.php?zobraz=atmkorozenormy&lang=cz'>Prováděné zkoušky</a></p>



<p>

<h3>Reference:</h3>

<ul>

<li><a href='http://www.metrostav.cz' target='_blank'>Metrostav</a></li>

<li><a href='http://www.nacr.cz/' target='_blank'>Národní archiv</a></li>

<li><a href='http://www.hochtief.cz' target='_blank'>Hochtief</a></li>

<li><a href='http://www.ceps.cz/' target='_blank'>ČEPS, a.s.</a></li>

</ul>

</p>

</div>";			

	}	

	if($lang=='en')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Atmospheric corrosion</h1>

<p><a href='index.php?zobraz=atmkorozenormy&lang=en'>Carried-out testing</a></p>



<p>

<h3>References:</h3>

<ul>

<li><a href='http://www.ceps.cz/' target='_blank'>ČEPS, Ltd.</a></li>

</ul>

</p>

</div>";

	}

}



function atmkorozenormy($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h3>Atmosférické korozní zkoušky prováděné ve SVÚOM s.r.o.</h3>

<br /><br />";



echo"<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>

<td width='150' height='40'>Identifikace zkušebního postupu/metody</td></tr>";



$query = "SELECT * FROM norms WHERE typeid=6";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);



for ($i=0; $i<$num_results; $i++)

{

$row = mysql_fetch_array($result);



if ($i%2 == 0) 

{ 

echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'><a href='index.php?zobraz=anotace6&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";

}

else

{

echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'><a href='index.php?zobraz=anotace6&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";

}

}

echo"</table><a href='#top'>nahoru</a></div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h3>Atmosférické korozní zkoušky prováděné ve SVÚOM s.r.o. EN</h3>

<br /><br />";



echo"<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>

<td width='150' height='40'>Identifikace zkušebního postupu/metody</td></tr>";



$query = "SELECT * FROM engnorms WHERE typeid=6";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);



for ($i=0; $i<$num_results; $i++)

{

$row = mysql_fetch_array($result);



if ($i%2 == 0) 

{ 

echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'>".htmlspecialchars(stripslashes($row['idnorm']))."</td></tr>";

}

else

{

echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'>".htmlspecialchars(stripslashes($row['idnorm']))."</td></tr>";

}

}

echo"</table><a href='#top'>top</a></div>";

	}

}



function atmkorozenormymenu()

{

echo"

<div class='collleftall'>

<h2>Atmosférická koroze</h2>

<p>Přehled prováděných zkoušek</p>

</div>";

}

?>