<?

function seznamzam($lang)
{
if($lang=='cz')
	{
echo"
<div class='colrightall'>
<h1>Seznam zaměstnanců</h1>
<h2>Pracoviště: Holešovice</h2>";

$query = "SELECT * FROM employee WHERE misto=1 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<a name='".htmlspecialchars(stripslashes($row['idzam']))."'></a><p><h3>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</h3>";
echo"<table><tr><td><b>Tel.:</b></td><td>".htmlspecialchars(stripslashes($row['tel']))."</td></tr>";
echo"<tr><td><b>Mobil:</b></td><td>".htmlspecialchars(stripslashes($row['mobil']))."</td></tr>";
echo"<tr><td><b>Email:</b></td><td>".htmlspecialchars(stripslashes($row['email']))."</td></tr>";
echo"<tr><td><b>Zařazení:</b></td><td>".htmlspecialchars(stripslashes($row['zarazeni']))."</td></tr></table><a href='#top'>nahoru</a></p><div class='line'></div>";
}

echo"<h2>Pracoviště: Horoměřice</h2>";

$query = "SELECT * FROM employee WHERE misto=0 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<a name='".htmlspecialchars(stripslashes($row['idzam']))."'></a><p><h3>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</h3>";
echo"<table><tr><td><b>Tel.:</b></td><td>".htmlspecialchars(stripslashes($row['tel']))."</td></tr>";
echo"<tr><td><b>Mobil:</b></td><td>".htmlspecialchars(stripslashes($row['mobil']))."</td></tr>";
echo"<tr><td><b>Email:</b></td><td>".htmlspecialchars(stripslashes($row['email']))."</td></tr>";
echo"<tr><td><b>Zařazení:</b></td><td>".htmlspecialchars(stripslashes($row['zarazeni']))."</td></tr></table><a href='#top'>nahoru</a></p><div class='line'></div>";
}

echo"
</div>
";			
}

if($lang=='en')
	{
echo"
<div class='colrightall'>
<h1>Index of employees</h1>
<h2>Work place: Holesovice</h2>";

$query = "SELECT * FROM employee WHERE misto=1 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<a name='".htmlspecialchars(stripslashes($row['idzam']))."'></a><p><h3>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</h3>";
echo"<table><tr><td><b>Tel.:</b></td><td>".htmlspecialchars(stripslashes($row['tel']))."</td></tr>";
echo"<tr><td><b>Mobile:</b></td><td>".htmlspecialchars(stripslashes($row['mobil']))."</td></tr>";
echo"<tr><td><b>Email:</b></td><td>".htmlspecialchars(stripslashes($row['email']))."</td></tr></table><a href='#top'>top</a></p><div class='line'></div>";
}

echo"<h2>Work place: Horomerice</h2>";

$query = "SELECT * FROM employee WHERE misto=0 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<a name='".htmlspecialchars(stripslashes($row['idzam']))."'></a><p><h3>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</h3>";
echo"<table><tr><td><b>Tel.:</b></td><td>".htmlspecialchars(stripslashes($row['tel']))."</td></tr>";
echo"<tr><td><b>Mobil:</b></td><td>".htmlspecialchars(stripslashes($row['mobil']))."</td></tr>";
echo"<tr><td><b>Email:</b></td><td>".htmlspecialchars(stripslashes($row['email']))."</td></tr></table><a href='#top'>top</a></p><div class='line'></div>";
}

echo"</div>";			
}
}

function seznamzammenu($lang)
{
if($lang=='cz')
	{
echo"
<h2>Seznam zaměstnanců</h2>
<h3>Pracoviště: Holešovice</h3>
<div id=seznamzamall>
<ul>";

$query = "SELECT * FROM employee WHERE misto=1 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<li><a href='index.php?zobraz=seznamzam&lang=cz#".htmlspecialchars(stripslashes($row['idzam']))."'>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</a></li>";
}

echo"</ul></div><br />";

echo"
<h3>Pracoviště: Horoměřice</h3>
<div id=seznamzamall>
<ul>";

$query = "SELECT * FROM employee WHERE misto=0 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<li><a href='index.php?zobraz=seznamzam&lang=cz#".htmlspecialchars(stripslashes($row['idzam']))."'>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</a></li>";
}

echo"
</ul>
</div>
";			
}

if($lang=='en')
	{
echo"
<h2>Index of employees</h2>
<h3>Work place: Holesovice</h3>
<div id=seznamzamall>
<ul>";

$query = "SELECT * FROM employee WHERE misto=1 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<li><a href='index.php?zobraz=seznamzam&lang=en#".htmlspecialchars(stripslashes($row['idzam']))."'>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</a></li>";
}

echo"</ul></div><br />";

echo"
<h3>Work place: Horomerice</h3>
<div id=seznamzamall>
<ul>";

$query = "SELECT * FROM employee WHERE misto=0 ORDER BY prijmeni";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
echo"<li><a href='index.php?zobraz=seznamzam&lang=en#".htmlspecialchars(stripslashes($row['idzam']))."'>".htmlspecialchars(stripslashes($row['prijmeni']))." ".htmlspecialchars(stripslashes($row['jmeno']))." ".htmlspecialchars(stripslashes($row['titul']))."</a></li>";
}

echo"
</ul>
</div>
";			
}
}
?>