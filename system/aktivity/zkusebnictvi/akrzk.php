<?

function akrzk($lang)
{
if($lang=='cz')
	{
echo"
<div class='colrightall'>
<h3>Akreditovaná zkušebna SVÚOM s.r.o.</h3>
<p class='textjust'>V rámci SVÚOM s.r.o. pracuje zkušebna č. 1096 akreditovaná Českým institutem pro akreditaci, o.p.s. podle ČSN EN ISO/IEC 17025:2018</p>

<p class='textjust'>
V roce 2025 prošla zkušebna úspěšně dozorovou návštěvou Českého institutu pro akreditaci, o.p.s (ČIA) a obdržela <a href='images/zkusebnictvi/akrzk/20250123_osvedceni_o_akreditaci_c_227_2025.pdf' target='_blank'>Osvědčení o akreditaci č. 277/2025</a> <!-- (<a href='images/zkusebnictvi/akrzk/20230126_certificate_of_accreditation_valid_20240130_eng.pdf' target='_blank'>Certificate of accreditation No. 23/2024</a>) --> s platností do 23. 1. 2029. Laboratoř uplatňuje flexibilní přístup k rozsahu akreditace upřesněný v <a href='images/zkusebnictvi/akrzk/20250123_osvedceni_o_akreditaci_c_227_2025_priloha.pdf' target='_blank'>dodatku přílohy k osvědčení o akreditaci č. 277/2025.</a></p>

<p class='textjust'>Při externím hodnocení kvality laboratoře odběrateli byla zkušebna SVÚOM s.r.o. č. 1096 v roce 2018 hodnocena jako 100% dodavatel služeb.</p>

<div class='line'></div>

<p class='textjust'>Zkušební zařízení zkušebny umožňuje provádět urychlené korozní a cyklické zkoušky podle ČSN EN ISO 9227, PV 1210, VDA 621-415, SAE J 2334, ČSN EN ISO 11997-1, cyklus B a také cyklické zkoušky pod UV lampami podle ČSN EN ISO 16474-3.</p>

<div><img src='images/zkusebnictvi/akrzk/pristroje.jpg' title='Komora Libish SKBW1000A-TR'></div>

<div class='line'>&nbsp;</div>

<h3>Zkoušky prováděné v laboratořích akreditované zkušebny SVÚOM s.r.o.</h3>

<p><a href='images/zkusebnictvi/akrzk/20250123_osvedceni_o_akreditaci_c_227_2025_priloha.pdf' target='_blank'>Seznam prováděných akreditovaných zkoušek (pdf)</a> <!-- (<a href='images/zkusebnictvi/akrzk/20230126_appendix_of_cert_of_accred_valid_20240130_eng.pdf' target='_blank'>List of accreditated procedures (pdf)</a>)--></p>

<p class='textjust'>
Pro zkoušení protikorozních a fyzikálně-mechanických vlastností povlaků a nátěrových hmot je zkušebna oprávněna vydávat akreditované protokoly ke zkouškám uvedeným v <a href='index.php?zobraz=akrzksvedceni1&lang=cz'>seznamu akreditovaných zkoušek</a>.
</p>

<p class='textjust'>
Kromě akreditovaných zkoušek provádí zkušebna i další zkoušky <a href='index.php?zobraz=neakreditovane'>mimo rozsah akreditace</a>.
</p>

<div class='line'></div>

<div>
Pracovníci:
<ul>
<li>Markéta Paráková - vedoucí akreditované zkušebny</li>
<li>Ing. Lubomír Mindoš – zástupce vedoucího zkušebny</li>
<li>Ing. Martina Němcová – manager kvality a metrolog</li>
</ul>
</div>

<br />
<!--<h3>Zkoušky prováděné v laboratořích akreditované zkušebny SVÚOM s.r.o.</h3>-->
";



echo"<!--<table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<td width='30' height='40'>Číslo</td><td width='50' height='40'>Předmět zkoušky</td><td width='220' height='40'>Přesný název zkušebního postupu/metody</td><td width='150' height='40'>Identifikace zkušebního postupu/metody</td>
</tr>";

$query = "SELECT * FROM norms WHERE typeid=1 ORDER BY poradi";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
if ($i%2 == 0) 
{ 
echo"<tr><td>".htmlspecialchars(stripslashes($row['poradi']))."</td><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
else
{
echo"<tr class='trgray'><td>".htmlspecialchars(stripslashes($row['poradi']))."</td><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
}
echo"
</table> -->
</div>
";			
}

if($lang=='en')
	{
echo"
<div class='colrightall'>
<h1>The accredited testing laboratory SVÚOM Ltd.</h1>

<p class='textjust'>An accredited laboratory no.1096 is working for SVÚOM Ltd. according ČIA to ČSN EN ISO/IEC 17 025.</p>

<p class='textjust'>In  2025 this testing laboratory successfully underwent a inspection by the Czech Accreditation Institute (Český institut pro akreditaci,o.p.s. (ČIA)) and received a <a href='images/zkusebnictvi/akrzk/Osvedceni_2025_Eng.pdf' target='_blank'>Certificate for accreditation no. 277/2025</a> valid till 23.1.2029.</p>

<p class='textjust'>In 2018 an external rating of the laboratory quality was carried out by SVÚOM Ltd. customers and they evaluated SVÚOM Ltd. to be a 100% service supplier.</p>

<p><a href='images/zkusebnictvi/akrzk/Priloha_2025_Eng.pdf' target='_blank'>Download list of accreditated procedures</a></p>

<div class='line'></div>

<h3>SVÚOM Ltd. LAB</h3>

<p class='textjust'>The capacity of testing equipment had been increased by chamber Libish SKBW1000A-TR which allows to perform the accelerated corrosion tests according to  EN ISO 9227, VDA 621-415, PV 1210 and other similar cyclic tests.</p>

<div><img src='images/zkusebnictvi/akrzk/pristroje.jpg' title='Chamber Libish SKBW1000A-TR'></div>
<br />

<div><a href='images/zkusebnictvi/akrzk/Priloha_2025_Eng.pdf'>List of accreditated procedures</a></div>

<div class='line'>&nbsp;</div>

<div>
Employees:
<ul>
<li>Marketa Parakova - the head of experimental laboratory and laboratory</li>
<li>Ing. Lubomir Mindos – deputy of head of experimental laboratory and laboratory</li>
<li>Ing. Martina Nemcova – quality and metrology manager</li>
</ul>
</div>

<!--<h3>Accredited tests</h3>

<br /><br />-->";



/*echo"<!-- <table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<!--<td width='30' height='40'>No.</td><td width='50' height='40'>Subject</td>--><td width='220' height='40'>Exact name of test procedure/method</td><td width='150' height='40'>Identification of test procedure/method</td>
</tr>";

$query = "SELECT * FROM engnorms WHERE typeid=1 ORDER BY poradi";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
if ($i%2 == 0) 
{ 
echo"<tr><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
else
{
echo"<tr class='trgray'><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
}
echo*/"
</table>-->
</div>
";
}
}

function akrzkmenu($lang) // menu vlevo
{
if($lang=='cz')
	{
echo"
<div class='colleftall' id='reference'>
<h1>Akreditovaná zkušebna SVÚOM <span class='sm'>s.r.o.</span></h1>

<p><a href='images/zkusebnictvi/akrzk/20250123_osvedceni_o_akreditaci_c_227_2025_priloha.pdf' target='_blank'>Seznam prováděných akreditovaných zkoušek</a></p>

<p>
<h3>Reference:</h3>
<ul>
<!--
<li><a href='#' target='_blank'>MOTOCO, a.s.</a></li>
<li><a href='#' target='_blank'>Worthington Cylinders, a.s.</a></li>
<li><a href='#' target='_blank'>Senior Automotive Czech, s.r.o.</a></li>
<li><a href='#' target='_blank'>MOTOR JIKOV, a.s.</a></li>
<li><a href='#' target='_blank'>Robert Bosch spol. s r.o.</a></li>
<li><a href='#' target='_blank'>Sport Rack s.r.o.</a></li>
<li><a href='#' target='_blank'>Linde Technoplyn, a.s.</a></li>
<li><a href='#' target='_blank'>HEMPEL s.r.o.</a></li>
<li><a href='#' target='_blank'>VALEO Engine Cooling</a></li>
<li><a href='#' target='_blank'>® DB, a.s.</a></li>
<li><a href='#' target='_blank'>Fintec spol. s r.o. </a></li>
-->
<li>ACL Technology s.r.o.</li>
<li>ACL Coating s.r.o.</li>
<li>ALGON a.s.</li>
<li>ATRYX s.r.o.</li>
<li>BARVY A LAKY TELURIA s r. o.</li>
<li>Benteler ČR s.r.o.</li>
<li>BÖLLHOFF, s. r. o.</li>
<li>COLOUR GROUP s.r.o.</li>
<li>DOOSAN BOBCAT EMEA s.r.o.</li>
<li>FAIVELEY TRANSPORT CZECH a.s.</li>
<li>Frauenthal Automotive Hustopeče s.r.o.</li>
<li>IFE – CR a.s.</li>
<li>KEESTRACK – CZ, s. r. o.</li>
<li>KOH-I-NOOR a.s.</li>
<li>METAL TRADE COMAX a.s.</li>
<li>Otavské strojírny a.s.</li>
<li>Robert Bosch, spol. s r. o.</li>
<li>Sécheron Tchequie, spol. s r.o.</li>
<li>ŠKODA AUTO a.s.</li>
<li>TZÚS a.s.</li>
<li>Witte Nejdek, spol. s. r. o.</li>
<li>a další</li>
</ul>
</p>

<br /><br />

<p>
<h3>Kontakty:</h3>
<div><a href='mailto:laborator@svuom.cz'>laborator@svuom.cz</a></div>
</p>

</div>
";			
}

if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h1>The accredited testing laboratory SVÚOM Ltd.</h1>
<p>
<h3>Reference:</h3>
<ul>
<!--
<li><a href='#' target='_blank'>MOTOCO, a.s.</a></li>
<li><a href='#' target='_blank'>Worthington Cylinders, a.s.</a></li>
<li><a href='#' target='_blank'>Senior Automotive Czech, s.r.o.</a></li>
<li><a href='#' target='_blank'>MOTOR JIKOV, a.s.</a></li>
<li><a href='#' target='_blank'>Robert Bosch spol. s r.o.</a></li>
<li><a href='#' target='_blank'>Sport Rack s.r.o.</a></li>
<li><a href='#' target='_blank'>Linde Technoplyn, a.s.</a></li>
<li><a href='#' target='_blank'>HEMPEL s.r.o.</a></li>
<li><a href='#' target='_blank'>VALEO Engine Cooling</a></li>
<li><a href='#' target='_blank'>® DB, a.s.</a></li>
<li><a href='#' target='_blank'>Fintec spol. s r.o. </a></li>
-->
<li>ACL Technology s.r.o.</li>
<li>ACL Coating s.r.o.</li>
<li>ALGON a.s.</li>
<li>ATRYX s.r.o.</li>
<li>BARVY A LAKY TELURIA s r. o.</li>
<li>Benteler ČR s.r.o.</li>
<li>BÖLLHOFF, s. r. o.</li>
<li>COLOUR GROUP s.r.o.</li>
<li>DOOSAN BOBCAT EMEA s.r.o.</li>
<li>FAIVELEY TRANSPORT CZECH a.s.</li>
<li>Frauenthal Automotive Hustopeče s.r.o.</li>
<li>IFE – CR a.s.</li>
<li>KEESTRACK – CZ, s. r. o.</li>
<li>KOH-I-NOOR a.s.</li>
<li>METAL TRADE COMAX a.s.</li>
<li>Otavské strojírny a.s.</li>
<li>Robert Bosch, spol. s r. o.</li>
<li>Sécheron Tchequie, spol. s r.o.</li>
<li>ŠKODA AUTO a.s.</li>
<li>TZÚS a.s.</li>
<li>Witte Nejdek, spol. s. r. o.</li>
<li>etc.</li>
</ul>
</p>

<br /><br />

<p>
<h3>Contacts:</h3>
<div><a href='mailto:laborator@svuom.cz'>laborator@svuom.cz</a></div>

</p>

</div>
";
}
}
	
function akrzksvedceni1($lang) // priloha svedceni o akreditaci - holesovice
{
if($lang=='cz')
	{
echo"
<div class='colrightall'>
<h3>Prováděné akreditované zkoušky</h3>
<h5>Protokoly o zkouškách podepisuje:</h5>Markéta Paráková (vedoucí zkušebny)
<br /><br />";

echo"<table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<td width='30' height='40'>Číslo</td><td width='50' height='40'>Předmět zkoušky</td><td width='255' height='40'>Přesný název zkušebního postupu/metody</td><td width='150' height='40'>Identifikace zkušebního postupu/metody</td>
</tr>";

$query = "SELECT * FROM norms WHERE typeid=1 and pracoviste=1 ORDER BY poradi";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
if ($i%2 == 0) 
{ 
echo"<tr>
<td>".htmlspecialchars(stripslashes($row['poradi']))."</td><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
else
{
echo"<tr class='trgray'><td>".htmlspecialchars(stripslashes($row['poradi']))."</td><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
}
echo"
</table><a href='#top'>nahoru</a></div>
";			
}

if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h2>Příloha svědčení o akreditaci EN</h2>
</div>
";
}
}

function akrzksvedcenimenu1($lang) // menu vlevo
{
if($lang=='cz')
	{
echo"
<div class='colleftall' id='reference'>
<h2>Prováděné akreditované zkoušky</h2>

</div>
";			
}

if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h2>Prováděné akreditované zkoušky EN</h2>
</div>
";
}
}

/*############### priloha svedceni jeneralka c. 2 ###############*/

function akrzksvedceni2($lang) // priloha svedceni o akreditaci - holesovice
{

/* vytvori kratke nazvy promennych */
$nazevmethol = $_REQUEST['nazevmetjen'];
$identhol = $_REQUEST['identjen'];
$predmethol = $_REQUEST['predmetjen'];

if($lang=='cz')
	{
echo"
<div class='colleftall' id='reference'>
<h3>Prováděné akreditované zkoušky - laboratoř 2 - Jenerálka</h3>
<h5>Protokoly o zkouškách podepisuje:</h5>Ing. Eva Kalabisová (vedoucí laboratoře 2)
<br /><br />";

echo"<table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<td width='30' height='40'>Číslo</td><td width='50' height='40'>Předmět zkoušky</td><td width='255' height='40'>Přesný název zkušebního postupu/metody</td><td width='150' height='40'>Identifikace zkušebního postupu/metody</td>
</tr>";

$query = "SELECT * FROM norms WHERE typeid=1 and pracoviste=2 ORDER BY poradi";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
if ($i%2 == 0) 
{ 
echo"<tr>
<td>".htmlspecialchars(stripslashes($row['poradi']))."</td><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
else
{
echo"<tr class='trgray'><td>".htmlspecialchars(stripslashes($row['poradi']))."</td><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
}
echo"
</table><a href='#top'>nahoru</a></div>
";			
}

if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h2>Prováděné akreditované zkoušky - laboratoř 2 - Jenerálka EN</h2>
</div>
";
}
}

function akrzksvedcenimenu2($lang) // menu vlevo
{
if($lang=='cz')
	{
echo"
<div class='colleftall' id='reference'>
<h2>Prováděné akreditované zkoušky - laboratoř 2 - Jenerálka</h2>
</div>";			
}

if($lang=='en')
	{
echo"
<div class='colleftall' id='reference'>
<h2>Prováděné akreditované zkoušky - laboratoř 2 - Jenerálka EN</h2>
</div>
";
}
}

?>