<?



// od 12.12.2009 se jmenuje - Fyzikální zkoušky materiálů a povlaků



function tnostatnizk($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Fyzikální zkoušky materiálů a povlaků</h1>



<ul>

<li><a href='index.php?zobraz=hydrofobizace&lang=cz'>Měření účinnosti hydrofobizace na silikátových materiálech</a></li>

</ul>



<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>

<td width='150' height='40'>Identifikace zkušebního postupu/metody</td>

<td width='75' height='40'>Předmět zkoušky</td></tr>";



$query = "SELECT * FROM norms WHERE typeid=8 ORDER BY idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);



for ($i=0; $i<$num_results; $i++)

{

$row = mysql_fetch_array($result);



if ($i%2 == 0) 

{ 

echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td>";

echo"<td width='75' height='40'>".htmlspecialchars(stripslashes($row['subject']))."</td></tr>";

}

else

{

echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td>";

echo"<td width='75' height='40'>".htmlspecialchars(stripslashes($row['subject']))."</td></tr>";

}

}

echo"

</table>



</div>";

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h3>Physical testing of materials and coatings</h3>



<ul>

<li><a href='index.php?zobraz=hydrofobizace&lang=en'>Measuring the effectiveness of the waterproofing silicate materials</a></li>

<li><a href='index.php?zobraz=csneniso1517&lang=en'>Paints and varnishes - Surface drying test - Method of glass beads (ballottini) - CSN EN ISO 1517</a></li>

</ul>



<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Exact name of test procedure/method</td>

<td width='150' height='40'>Identification of test procedure/method</td></tr>";



$query = "SELECT * FROM engnorms WHERE typeid=8 ORDER BY idnum";

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

echo"

</table>



</div>";

}

}



function tnostatnizkmenu($lang)

{

if($lang=='cz')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Fyzikální zkoušky materiálů a povlaků</h1>

</div>

";			

}



if($lang=='en')

	{

echo"
<div class='colleftall'>
<h1>Physical testing of materials and coatings</h1>
</div>";
}

}



function hydrofobizace($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Měření účinnosti hydrofobizace na silikátových materiálech</h1>



<p class='textjust'>

Hydrofobizační prostředky se používají k omezení pronikání vodných roztoků a par do podkladů na bázi silikátů (fasád, podlah, betonu, betonové i pálené krytiny, zdiva, apod.). Životnost hydrofobizace se běžně pohybuje od 5 do 10 let podle typu použitého hydrofobizačního prostředku. K měření účinnosti hydrofobizace se používá Karstensova trubice a obdobné metody, např. měření absorpce vody 200 mm vodního sloupce po 30 minutách do hmoty na definovanou smáčenou plochu (50 cm<sup>2</sup>).

</p>



<div class='rightpl'><img src='images/tnostatnizk/pristroj_hydro.jpg'></div>



<p class='textjust'>

Ve SVÚOM s.r.o. byl vyvinut zkušební přístroj pro stanovení jakosti hydrofobní impregnace silikátových materiálů. Přístroj je vhodný pro měření v laboratoři i v terénu a lze s ním ověřit nejen jakost hydrofobních impregnací, ale i kvalitu utěsòovacích nátěrů na silikátových podkladech. Principem stanovení je měření změn elektrických veličin v čase, které jsou funkcí četnosti a velikosti poruch v hydrofobizované resp. utěsòující ochranné vrstvě.

</p>



<p class='textjust'>

Přístroj SVUOM má mnoho výhod:

<ul>

<li>zkušební sondu stačí položit na podklad</li>

<li>stanovení se provádí současně se 4 sondami (větší zkušební plocha, kratší přípravná doba)</li>

<li>naměřené hodnoty se odečítají z digitálního displeje</li>

<li>nevzniká počáteční chyba způsobená časovou prodlevou mezi nalitím vody do trubice a nastavením výšky hladiny</li>

<li>odpadá tzv. bublinková chyba</li>

<li>odpadají chyby při odečtu hladiny způsobené vlivem adsorpce vody do lepicího tmelu, vlivem odpaření vody z trubice nebo stečením kapek vody ze stěn trubice ulpělých při nalévání roztoku</li>

<li>zkušební metoda není citlivá na teplotu v intervalu 10 až 30°C</li> 

<li>rychlost měření; pro kvalitní rozlišení je postačující 90 minut</li>

<li>vysoká citlivost a rozlišovací schopnost</li>

</ul>

</p>



<p class='textjust'>

Vysoká míra reprodukovatelnosti jednotlivých stanovení je navíc dána 6-ti stupòovou kontrolou:

<ul>

<li>automatická kontrola a optická signalizace stavu baterií</li>

<li>kontrola elektronických obvodů přístroje - provádí se před každým měřením, lze ji kdykoliv provést i v průběhu měření bez vlivu na vlastní měření</li>

<li>kontrola 0 bodu bez připojených a s připojenými a aktivovanými zkušebními sondami pomocí 1.kalibračního standardu</li>

<li>kontrola aktivovaných zkušebních sond pomocí 2.kalibračního standardu před každým měřením i po 90 minutovém měření</li>

</ul>

</p>



<p class='textjust'>

Na grafu je uvedeno porovnání měření účinnosti hydrofobizace betonu gravimetrickou a elektrometrickou metodou  s vyznačením dosažení nevyhovující kvality hydrofobní impregnace betonu: elektrometricky zjištěná mezní hodnota je max. 300 mV a doba měření 90 minut.

</p>



<p class='picalign'><img src='images/tnostatnizk/graf.jpg'></p>



</div>";

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Measuring the effectiveness of the waterproofing silicate materials</h1>



<p class='textjust'>

Hydrophobizations agents are used to limit penetration of aqueous solutions and vapor into the coat on the basis of silicates (facades, floors, concrete, concrete and fired roofing, masonry, etc.).

Lifetime hydrophobization normally ranging 5 to 10 years according to the type used hydrophobizations agent.

To measure the effectiveness hydrophobization used Karstensova tubes and similar methods, e.g. measuring the absorption of water 200 mm water column after 30 minutes into the matter to a defined surface wetting (50 cm<sup>2</sup>).

</p>



<div class='rightpl'><img src='images/tnostatnizk/pristroj_hydro.jpg'></div>



<p class='textjust'>

In SVÚOM s.r.o. was developed a test device for determining the quality of impregnation of hydrophobic silicate materials.

The device is suitable for measurements in the laboratory (indoor) or outdoor and it can be ascertained not only the quality of the hydrophobic impregnation,

but also the quality of seal coatings on silicate sealing documents.

The principle of determination is the measurement of electrical parameters changes over time,

which are a function of frequency and size of defects in  hydrophobiced respectively sealing protective layer.

</p>



<p class='textjust'>

SVÚOM device has many advantages:

<ul>

<li>just place the test probe to the substrate</li>

<li>determination is carried out simultaneously with 4 probes (greater test area, shorter preparation time)</li>

<li>measured values are read from the digital display</li>

<li>there is no initial error due to time lag between the pouring of water into the tube and adjusting the height level</li>

<li>eliminating the so-called bubble error</li>

<li>eliminating the read errors of fall level caused due to adsorption of water into the cement bonding, due to evaporation of water from the tube or sticked and leaking down drops of water from the tube walls during filling</li>

<li>test method is not sensitive to temperature in the range 10 - 30°C</li> 

<li>speed measurements: for quality resolution is good enough 90 minutes</li>

<li>high sensitivity and resolution</li>

</ul>

</p>



<p class='textjust'>

High degree of reproducibility of determination is also made 6-speed control:

<ul>

<li>automatic control and a visual indication of battery status</li>

<li>control of electronic circuits devices - performed before each measurement, it can be made at any time even during the measurement without influence on the measurement</li>

<li>control zero point without connected and connected and activated test probes using by first calibration standard</li>

<li>control activated test probes using by second calibration standard before each measurement and after 90 minute measurement</li>

</ul>

</p>



<p class='textjust'>

The chart is a comparison measure the effectiveness of hydrophobization concrete by gravimetric and electrometry method,

with indicating the achievement of poor quality hydrophobic impregnation of concrete: electrometry observed marginal limit is 300 mV

and measuring time 90 minutes.

</p>



<p class='picalign'><img src='images/tnostatnizk/graf_en.jpg'></p>



</div>

";

}

}



function csneniso1517($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Nátěrové hmoty - Zkouška povrchového zasychání - Metoda balotinou -  ČSN EN ISO 1517</h1>



<p class='textjust'>

Metoda pro stanovení charakteristik povrchového zasychání nátěrů z nátěrových hmot, které zasychají v důsledku působení vzduchu nebo chemickou reakcí svých složek. Metoda není vhodná pro vypalovací produkty.

</p>



</div>";

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Paints and varnishes - Surface drying test - Method of glass beads (ballottini) - CSN EN ISO 1517</h1>



<p class='textjust'>

Method for determining the characteristics of surface drying paint coatings, which dry due to air or by chemical reaction of their constituents. The method is not suitable for baking products.

</p>



</div>";

}

}



?>