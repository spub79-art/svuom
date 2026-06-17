<?



function tnklizk($lang)  

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Klimatické a korozní zkoušky prováděné ve SVÚOM s.r.o.</h1>

<p>Klimatické zkoušky jsou zkoušky vlivu vnějších činitelů prostředí a jejich případných změn a jsou určeny ke stanovení schopnosti zařízení a výrobků odolat a uchovat si provozuschopnost ve stanovených podmínkách vnějšího prostředí. Zkoušky jsou předepsány pro jednotlivá prostředí (skladování, transport, stacionární použití v nechráněných prostorách, apod.).</p>



<p>Stáhněte si - <a href='images/tnostatnizk/klimaticke_zkousky.pdf'>Klimatické zkoušky</a>.</p>



<br /><br />";



echo"<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>

<td width='150' height='40'>Identifikace zkušebního postupu/metody</td></tr>";



$query = "SELECT * FROM norms WHERE typeid=4";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);



for ($i=0; $i<$num_results; $i++)

{

$row = mysql_fetch_array($result);



if ($i%2 == 0) 

{ 

echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'><a href='index.php?zobraz=anotace4&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td>";

}

else

{

echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'><a href='index.php?zobraz=anotace4&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td>";

}

}



echo"</table><a href='#top'>nahoru</a></div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Climatic and corrosion tests</h1>



<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Exact name of test procedure/method</td>

<td width='150' height='40'>Identification of test procedure/method</td></tr>";



$query = "SELECT * FROM engnorms WHERE typeid=4";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);



for ($i=0; $i<$num_results; $i++)

{

$row = mysql_fetch_array($result);



if ($i%2 == 0) 

{ 

echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'>".htmlspecialchars(stripslashes($row['idnorm']))."</td>";

}

else

{

echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='150' height='40' align='center'>".htmlspecialchars(stripslashes($row['idnorm']))."</td>";

}

}



echo"</table><a href='#top'>top</a></div>";

}

}



function tnklizkmenu($lang) // menu vlevo

{

	if($lang=='cz')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Klimatické zkoušky prováděné ve SVÚOM s.r.o.</h1>

</div>";			

	}

	if($lang=='en')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Climatic tests</h1>

</div>";

	}

}



?>