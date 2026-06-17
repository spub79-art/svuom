<?

function mapawebu($lang)
{
echo"
<div class='colrightall'>

<h2>";
if($lang=='cz') echo"Mapa webu";		
if($lang=='en') echo"Site map";
echo"</h2>

<ul>";

echo"<li><a href='index.php?zobraz=home&lang=".$lang."'>";
	if($lang=='cz') echo"úvod";		
	if($lang=='en') echo"home";		
echo"</a></li>";



echo"<li><a href='index.php?zobraz=aktivity&lang=".$lang."'>";
	if($lang=='cz') echo"aktivity";	
	if($lang=='en') echo"activities";	
echo"</a>";

echo"<h3>";
if($lang=='cz') echo"Koroze";		
if($lang=='en') echo"Corrosion";
echo"</h3>

<ul>
<li><a href='index.php?zobraz=korozniing&lang=".$lang."'>";
if($lang=='cz') echo"Korozní inženýrství";
if($lang=='en') echo"Corrosion engineering";
echo"</a></li>
<li><a href='index.php?zobraz=atmkoroze&lang=".$lang."'>";
if($lang=='cz') echo"Atmosférická koroze";
if($lang=='en') echo"Atmospheric corrosion";
echo"</a></li>
</ul>";

echo"<h3>";
if($lang=='cz') echo"Protikorozní ochrana";		
if($lang=='en') echo"Corrosion protection";
echo"</h3>

<ul>
<li><a href='index.php?zobraz=dpo&lang=".$lang."'>";
if($lang=='cz') echo"Dočasná protikorozní ochrana";
if($lang=='en') echo"Temporary corrrosion protection";
echo"</a></li>
</ul>";

echo"<h3>";
if($lang=='cz') echo"Zkušebnictví";		
if($lang=='en') echo"Testing";
echo"</h3>

<ul>
<li><a href='index.php?zobraz=akrzk&lang=".$lang."'>";
if($lang=='cz') echo"Akreditovaná zkušebna";
if($lang=='en') echo"Accredited testing laboratory";
echo"</a></li>
<li><a href='index.php?zobraz=atmzkusebst&lang=".$lang."'>";
if($lang=='cz') echo"Atmosférické zkušební stanice";
if($lang=='en') echo"Atmospheric test-site";
echo"</a></li>
<li><a href='index.php?zobraz=analytickalab&lang=".$lang."'>";
if($lang=='cz') echo"Analytická laboratoř";
if($lang=='en') echo"Analytical laboratory";
echo"</a></li>
</ul>";

echo"<h3>";
if($lang=='cz') echo"Povrchové úpravy";		
if($lang=='en') echo"Surface treatment";
echo"</h3>

<ul>
<li><a href='index.php?zobraz=pu&lang=".$lang."'>";
if($lang=='cz') echo"Povrchové úpravy";
if($lang=='en') echo"Surface treatment";
echo"</a></li>
</ul>

<h3>";
if($lang=='cz') echo"Ochrana životního prostředí";		
if($lang=='en') echo"The protection of environment";
echo"</h3>
<ul>
<li><a href='index.php?zobraz=ip&lang=".$lang."'>";
if($lang=='cz') echo"Integrovaná prevence";
if($lang=='en') echo"Integrated prevention";
echo"</a></li>
<li><a href='index.php?zobraz=z862002&lang=".$lang."'>";
if($lang=='cz') echo"Zákon o ochraně ovzduší 86/2002 Sb.";
if($lang=='en') echo"Act of the protection of atmosphere 86/2002 Coll.";
echo"</a></li>
<li><a href='index.php?zobraz=mereniznecist&lang=".$lang."'>";
if($lang=='cz') echo"Měření znečištění";
if($lang=='en') echo"The measurement of pollution";
echo"</a></li>
</ul>

<h3>";
if($lang=='cz') echo"Spolupráce při tvorbě norem";		
echo"</h3>

<ul>
<li><a href='index.php?zobraz=normcin&lang=".$lang."'>";
if($lang=='cz') echo"Spolupráce při tvorbě norem";
echo"</a></li>
</ul>

<h3>";
if($lang=='cz') echo"Ostatní";		
if($lang=='en') echo"Others";
echo"</h3>

<ul>
<li><a href='index.php?zobraz=inspekce&lang=".$lang."'>";
if($lang=='cz') echo"Inspekční činnost";
if($lang=='en') echo"Inspection activities";
echo"</a></li>
<li><a href=#>";
if($lang=='cz') echo"Poradenská činnost";
if($lang=='en') echo"Consulting activities";
echo"</a></li>
<li><a href=#>";
if($lang=='cz') echo"Expertizní činnost";
if($lang=='en') echo"Expertise activities";
echo"</a></li>
<li><a href='index.php?zobraz=soudznal&lang=".$lang."'>";
if($lang=='cz') echo"Soudně znalecká činnost";
if($lang=='en') echo"Judicial-expert activites";
echo"</a></li>
</ul>

<h3>";
if($lang=='cz') echo"Prováděné zkoušky a hodnocení";		
if($lang=='en') echo"Carried-out tests and results";
echo"</h3>

<ul>
<li><a href='index.php?zobraz=tnakrzk&lang=".$lang."'>";
if($lang=='cz') echo"Akreditované zkoušky";
if($lang=='en') echo"Accredited tests";
echo"</a></li>
<li><a href='index.php?zobraz=tnkorzk&lang=".$lang."'>";
if($lang=='cz') echo"Korozní zkoušky";
if($lang=='en') echo"Corrosion tests";
echo"</a></li>
<li><a href='index.php?zobraz=tnatmkorzk&lang=".$lang."'>";
if($lang=='cz') echo"Atmosférické korozní zkoušky";
if($lang=='en') echo"Atmospheric corrosion tests";
echo"</a></li>
<li><a href='index.php?zobraz=tnklizk&lang=".$lang."'>";
if($lang=='cz') echo"Klimatické zkoušky";
if($lang=='en') echo"Climatic tests";
echo"</a></li>
<li><a href='index.php?zobraz=tnostatnizk&lang=".$lang."'>";
if($lang=='cz') echo"Fyzikální zkoušky materiálů a povlaků";
if($lang=='en') echo"Other tests";
echo"</a></li>
</ul>";


echo"<li><a href='index.php?zobraz=projektyvav&lang=".$lang."'>";
	if($lang=='cz') echo"VaV projekty";
	if($lang=='en') echo"R&D projects";
echo"</a>";



echo"<li><a href='index.php?zobraz=konference&lang=".$lang."'>";
	if($lang=='cz') echo"konference";
	if($lang=='en') echo"conferences";
echo"</a>";



echo"<li><a href='index.php?zobraz=publikace&lang=".$lang."'>";
	if($lang=='cz') echo"transfer výsledků";
	if($lang=='en') echo"result transfer";
echo"</a>";



echo"<li><a href='index.php?zobraz=kontakty&lang=".$lang."'>";
	if($lang=='cz') echo"kontakty";
	if($lang=='en') echo"contacts";
echo"</a>

<ul>
<li><a href='index.php?zobraz=seznamzam&lang=".$lang."'>";
if($lang=='cz') echo"seznam zaměstnanců";
if($lang=='en') echo"Index of employees";
echo"</li>
</ul>


<li><a href='index.php?zobraz=ospolecnosti&lang=".$lang."'>";
	if($lang=='cz') echo"o společnosti";
	if($lang=='en') echo"company profile";
echo"</a>";



echo"<li><a href='index.php?zobraz=odkazy&lang=".$lang."'>";
	if($lang=='cz') echo"odkazy";
	if($lang=='en') echo"links";
echo"</a>";



echo"<li><a href='index.php?zobraz=oceneni&lang=".$lang."'>";
	if($lang=='cz') echo"ocenění činnosti";
	if($lang=='en') echo"awards";
echo"</a>";

echo"</ul>


</div>";
}
?>