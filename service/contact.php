<?
function contact($tsk)
{

$idzam = $_REQUEST['idzam'];
$prijmeni = $_REQUEST['prijmeni'];
$jmeno = $_REQUEST['jmeno'];
$titul = $_REQUEST['titul'];
$tel = $_REQUEST['tel'];
$mobil = $_REQUEST['mobil'];
$email = $_REQUEST['email'];
$zarazeni = $_REQUEST['zarazeni'];
$misto = $_REQUEST['misto'];

if($tsk=="zmenitcontact") {

$query = "UPDATE employee SET prijmeni='$prijmeni',jmeno='$jmeno',titul='$titul',tel='$tel',mobil='$mobil',email='$email',zarazeni='$zarazeni',misto='$misto' where idzam='$idzam'";
$result = mysql_query($query);
if ($result) echo $result." kontakt zaměstnance změněn - zkontrolovat změnu můžete na www stránkách svuom.cz";

}

if($tsk=="pridatcontact") {

$query = "INSERT INTO employee values (NULL,'".$prijmeni."','".$jmeno."','".$titul."','".$tel."','".$mobil."','".$email."','".$zarazeni."','".$misto."')";
//echo $query."<br />";
$result = mysql_query($query);
if ($result) echo $result." kontakt zaměstnance přidán - zkontrolovat změnu můžete na www stránkách svuom.cz</a>";

}

if($tsk=="smazatcontact") {

$query = "DELETE from employee where idzam=$idzam";
$result = mysql_query($query);
if ($result) echo $result." kontakt zaměstnance smazán - zkontrolovat změnu můžete na www stránkách svuom.cz";

}

echo"<div id='topic'><fieldset>

<legend>Přidávání, editace a mazání kontaktů zaměstnanců (stejné pro českou i anglickou verzi stránek)</legend>";
echo"
<h4>Přidávání:</h4>
<table><tr><td>Příjmení</td><td>Jméno</td><td>titul</td><td>pevná linka</td><td>mobilní tel.</td><td>email</td><td>zařazení</td><td>pracoviště:<br /> Holešovice - 1<br />Jenerálka - 0</td></tr>
<form action='admin.php?shw=contact&tsk=pridatcontact' method='post'>
<td><input name='prijmeni' value='".$row[1]."' size='10' maxlength=''></td>
<td><input name='jmeno' value='".$row[2]."' size='10' maxlength=''></td>
<td><input name='titul' value='".$row[3]."' size='10' maxlength=''></td>
<td><input name='tel' value='".$row[4]."' size='15' maxlength=''></td>
<td><input name='mobil' value='".$row[5]."' size='15' maxlength=''></td>
<td><input name='email' value='".$row[6]."' size='15' maxlength=''></td>
<td><input name='zarazeni' value='".$row[7]."' size='15' maxlength=''></td>
<td><input name='misto' value='".$row[8]."' size='10' maxlength=''></td>
<td><input type='Submit' value='přidej'></form></td>

</table><hr>";
echo"<h4>Editace a mazání:</h4><br /><table><tr><td></td><td>Příjmení</td><td>Jméno</td><td>titul</td><td>pevná linka</td><td>mobilní tel.</td><td>email</td><td>zařazení</td><td>pracoviště:<br /> Holešovice - 1<br />Jenerálka - 0</td></tr>";

	$query = "SELECT * FROM employee";
	$result = mysql_query($query);
	$num_results = mysql_num_rows($result);

	for ($i=0; $i<$num_results; $i++)
	{
	$row = mysql_fetch_array($result);
	echo"
	<tr>
	<form action='admin.php?shw=contact&tsk=zmenitcontact' method='post'>
	<td><input type='hidden' name='idzam' value='".$row[0]."'></td>
	<td><input name='prijmeni' value='".$row[1]."' size='10' maxlength=''></td>
	<td><input name='jmeno' value='".$row[2]."' size='10' maxlength=''></td>
	<td><input name='titul' value='".$row[3]."' size='10' maxlength=''></td>
	<td><input name='tel' value='".$row[4]."' size='15' maxlength=''></td>
	<td><input name='mobil' value='".$row[5]."' size='15' maxlength=''></td>
	<td><input name='email' value='".$row[6]."' size='15' maxlength=''></td>
	<td><input name='zarazeni' value='".$row[7]."' size='15' maxlength=''></td>
	<td><input name='misto' value='".$row[8]."' size='10' maxlength=''></td>
	<td><input type='Submit' value='změň'></td></form>
	<td><form action='admin.php?shw=contact&tsk=smazatcontact' method='post'><input type='hidden' name='idzam' value='".$row[0]."'><input type='Submit' value='smaž'></td></form>
	</tr>";
	}
	echo"</table></fieldset></div>";
}


?>

