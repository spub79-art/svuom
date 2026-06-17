<?

function atmzkusebst($lang)
{
if($lang=='cz')
	{
echo"
<div class='colrightall'>
<h1>Atmosférické zkušební stanice</h1>

<div class='rightpl'><img src='images/zkusebnictvi/atmzkusebst/kopisty.jpg'></div>

<p class='textjust'>
Atmosférické korozní zkoušky spočívají ve vystavení vzorků vlivu atmosférických podmínek na zkušebních stanicích a v pravidelném hodnocení vzorků.  Postihnout všechny faktory působení atmosférického prostředí na materiály a jejich povrchové úpravy lze pouze zkouškami v reálných prostředích za kontinuálního sledování parametrů prostředí. Provádění korozních zkoušek je experimentálně a časově náročné. Na stanicích se provádí nepřetržité měření environmentálních parametrů - teplota, vlhkost, sluneční záření, množství srážek, <a href='index.php?zobraz=mereniznecist&lang=cz'>znečištění SO<sub>2</sub>, NO<sub>x</sub> a O<sub>3</sub></a>, pH a vodivost srážek, obsah chloridů, síranů a dusičnanů ve srážkách. Vzhledem k malé rychlosti atmosférické koroze se doporučuje, aby zkušební expozice trvala 1 rok, 2 roky, 5 let, 10 let nebo 20 let v závislosti na korozní odolnosti zkoušeného materiálu.
</p>
<div class='line'></div>
<p class='textjust'>
Atmosférické zkušebnictví je nezastupitelnou součástí jak základního, tak aplikovaného výzkumu korozního chování materiálů a povrchových úprav. SVÚOM s.r.o. provozuje již více než 40 let atmosférické zkušební stanice v různých lokalitách ČR, které se liší jak klimaticky, tak znečištěním prostředí (viz mapa):
</p>

<ul>
<li>Praha (Holešovice) - městské prostředí s výrazným vlivem znečištění vyvolaného dopravou</li>
<li>Kopisty u Mostu - průmyslové prostředí s kombinovaným vlivem průmyslového znečištění a dopravy</li>
<li>Kašperské Hory - venkovské prostředí v chladné horské oblasti</li>
</ul>

<p class='picalign'><img src='images/zkusebnictvi/atmzkusebst/mapa.jpg'></p>

<h3>Základní environmentální parametry atmosférických zkušebních stanic pro rok 2010 jsou:</h3>

<table border='0' cellppading='5' cellsapcing='5' width='100%'>
<tr class='trcaption' align='center'>
<td rowspan='2'>stanice</td>
<td>T</td>
<td>RV</td>
<td>srážky*</td>
<td>SO<sub>2</sub></td>
<td>NO<sub>x</sub></td>
<td>pH</td>
</tr>
<tr class='trcaption' align='center'>
<td>[°C]</td>
<td>[%]</td>
<td>[mm]</td>
<td>[µg.m<sup>-3</sup>]</td>
<td>[µg.m<sup>-3</sup>]</td>
<td>srážek</td>
</tr>
<tr class='trgray' align='center'>
<td align='left'>Kašperské Hory</td>
<td>6,9</td>
<td>87</td>
<td>867</td>
<td>6,4</td>
<td>13,2</td>
<td>5,4</td>
</tr>
<tr class='trgray' align='center'>
<td align='left'>Praha</td>
<td>7</td>
<td>73</td>
<td>726</td>
<td>7,9</td>
<td>40,1</td>
<td>5,9</td>
</tr>
<tr class='trgray' align='center'>
<td align='left'>Kopisty</td>
<td>8,1</td>
<td>79</td>
<td>647</td>
<td>17,2</td>
<td>27,4</td>
<td>4,9</td>
</tr>
</table>
<div>* celkové množství</div>

<p class='textjust'>
Zkoušky přímo v atmosférických podmínkách, prováděné buď na zkušebních vzorcích, nebo sledování a vyhodnocováním stavu napadení některých dílů či součástí zařízení, značně zvyšují spolehlivost a použitelnost výsledků získaných např. urychlenými laboratorními zkouškami.
</p>

<h3>Přehled norem</h3>";

echo"<table class='akrzk' cellpadding='5'>
<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>
<td width='150' height='40'>Identifikace zkušebního postupu/metody</td></tr>";

$query = "SELECT * FROM norms WHERE typeid=3";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);

if ($i%2 == 0) 
{ 
echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";
echo"<td width='150' height='40'><a href='index.php?zobraz=anotace3&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td>";
}
else
{
echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";
echo"<td width='150' height='40'><a href='index.php?zobraz=anotace3&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td>";
}
}


echo"
</table><a href='#top'>nahoru</a></div>
";			
}

if($lang=='en')
	{
echo"
<div class='colrightall'>
<h1>Atmospheric test-sites</h1>

<div class='rightpl'><img src='images/zkusebnictvi/atmzkusebst/kopisty.jpg'></div>

<p class='textjust'>
Atmospheric corrosion tests consist in the exposure of samples to atmospheric conditions at test-sites and in their periodic evaluation. To expose materials and their surface coatings to all factors of atmospheric environment is only possible by their exposure to a realistic environment whilst studying all parameters of that environment. The performance of corrosion testing is experimentally and time demanding. Continual measurements of environmental parameters - temperature, humidity, sun radiation, amount of rainfall, <a href='index.php?zobraz=mereniznecist&lang=en'>pollution by SO<sub>2</sub>, NO<sub>x</sub> end O<sub>3</sub></a>, pH and conductivity of rainfall, content of chlorides, sulfates and nitrates in rainfall are carried out. Due to a slow rate of atmospheric corrosion it is recommended for the exposure to last for 1 year, 2 years, 5 years, 10 years or 20 years according to the corrosion stability of a tested material.
</p>
<div class='line'></div>
<p class='textjust'>
Atmospheric testing plays a key role in a basic and also applied research of corrosive behavior of materials and surface treatments. SVÚOM Ltd. has had atmospheric test-sites in operation for over 25 years now in different areas of the Czech Republic, which differ climatically and also in the level of atmospheric pollution (see the map):
</p>

<ul>
<li>Prague (Holešovice) - city environment with a significant influence of pollution caused by traffic</li>
<li>Kopisty near Most - industrial environment with a combined influence of industrial pollution and traffic</li>
<li>Kašperské Hory - country environment in a cool mountain region</li>
</ul>

<p class='picalign'><img src='images/zkusebnictvi/atmzkusebst/mapa.jpg'></p>

<h3>Basic environmental parameters of atmospheric test-sites for the year 2007 are:</h3>

<table border='0' cellppading='5' cellsapcing='5' width='100%'>
<tr class='trcaption' align='center'>
<td rowspan='2'>Test-site</td>
<td>T</td>
<td>RV</td>
<td>rainfall*</td>
<td>SO<sub>2</sub></td>
<td>NO<sub>x</sub></td>
<td>pH</td>
</tr>
<tr class='trcaption' align='center'>
<td>[°C]</td>
<td>[%]</td>
<td>[mm]</td>
<td>[µg.m<sup>-3</sup>]</td>
<td>[µg.m<sup>-3</sup>]</td>
<td>rainfall</td>
</tr>
<tr class='trgray' align='center'>
<td align='left'>Kašperské Hory</td>
<td>7,7</td>
<td>80</td>
<td>1056,04</td>
<td>6,7</td>
<td>11,0</td>
<td>4,9</td>
</tr>
<tr class='trgray' align='center'>
<td align='left'>Praha</td>
<td>10,8</td>
<td>71</td>
<td>515,7</td>
<td>8,4</td>
<td>42,6</td>
<td>6,5</td>
</tr>
<tr class='trgray' align='center'>
<td align='left'>Kopisty</td>
<td>10,0</td>
<td>77</td>
<td>623,5</td>
<td>15,6</td>
<td>27,3</td>
<td>5,3</td>
</tr>
</table>
<div>* total amount</div>

<p class='textjust'>
Tests performed directly under atmospheric conditions and carried out either on experimental samples or the follow-up and evaluation of the condition of attacked components or parts of equipment, strongly increase the reliability and applicability of results gained e.g. by accelerated laboratory testings.
</p>
";
}
}

function atmzkusebstmenu($lang)
{
if($lang=='cz')
	{
echo"
<div class='colleftall' id='reference'>
<h1>Atmosférické zkušební stanice</h1>
<p><a href='index.php?zobraz=tnatmkorzk&lang=cz'>Prováděné zkoušky</a></p>
</div>";			
	}

if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h1>Atmospheric test-sites</h1>
<p><a href='index.php?zobraz=tnatmkorzk&lang=en'>Carried-out tests</a></p>
</div>";	;
	}
}

function atmnormymenu($lang)
{
if($lang=='cz')
	{
echo"
<div class='colleftall' id='reference'>
<h1>Atmosférické zkušební stanice</h1>
<p>Přehled prováděných zkoušek</p>
</div>";			
	}
	
if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h1>Atmospheric test-sites</h1>
</div>";
	}
}

?>