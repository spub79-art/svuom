<?



function tnakrzk($lang) // priloha svedceni o akreditaci - holesovice

{



if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>AKREDITOVANÉ ZKOUŠKY PROVÁDĚNÉ VE ZKUŠEBNĚ SVÚOM s.r.o.</h1>


<h5></h5>

<br /><br />";



echo"<table class='akrzk' cellpadding='5'>
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
</table><a href='#top'>nahoru</a></div>

";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Accredited tests</h1>

<h5></h5>

<br /><br />";

echo"<table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<td width='30' height='40'>No.</td><td width='50' height='40'>Test subject</td><td width='220' height='40'>Exact name of test procedure/method</td><td width='150' height='40'>Identification of test procedure/method</td>
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
</table>


<a href='#top'>top</a></div>

";			

}

}



function tnakrzkmenu($lang) // menu vlevo

{

	if($lang=='cz')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Akreditované zkoušky</h1>

</div>";			

	}

	if($lang=='en')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Accredited tests</h1>

</div>";

	}

}



?>