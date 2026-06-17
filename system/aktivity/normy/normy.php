<?

// anotace norem



function anotace1_1() //1_1 znaci akreditovane zk. holesovice, 1_2 akr. zk. jen, 1 vsechny akr. zk, 2 korozni zk., 3 atm. zk, 4 klim. zk., 5 inspekcni zk., 6 atm. korozi

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h1>".htmlspecialchars(stripslashes($row['idnorm']))."</h1>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}



function anotace1_2() 

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h3>".htmlspecialchars(stripslashes($row['idnorm']))."</h3>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}



function anotace1() 

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h3>".htmlspecialchars(stripslashes($row['idnorm']))."</h3>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}



function anotace2() 

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



if($idnum=="52")

{

echo"

<div class='colrightall'>

<h1>ČSN ISO 9227</h1>

<p>Korozní zkoušky v umělých atmosférách. Zkoušky solnou mlhou</p> 

<h4>Anotace obsahu</h4> 

<div>Zkouška se provádí třemi režimy při 100% relativní vlhkosti a teplotě +35 + - 2°C s rozstřikem různých roztoků:

<table class='akrzk' cellpadding='5'> <tr class='trcaption'><td>zkouška</td><td>roztok</td><td>pH</td><td>použití</td></tr> <tr class='trgray'><td>NSS</td><td>5% NaCl</td><td>6,5 - 7,2</td><td>kovy a slitiny, kovové povlaky, konverzní povlaky, povlaky vytvořené anodickou oxidací, organické povlaky na kovových podkladech, atd.</td></tr> <tr class='trgray'><td>AASS</td><td>5% NaCl<br />+ ledová kyselina octová</td><td width='50'>3,0 - 3,1</td><td>dekorativní povlaky měď-nikl-chrom, nikl-chrom, elox</td></tr> <tr class='trgray'><td>CASS</td><td>5% NaCl<br />+ ledová kyselina octová<br />+ 0,26 g/l CuCl<sub>2</sub></td><td>3,1 - 3,2</td><td width='250'>dekorativní povlaky měď-nikl-chrom, nikl-chrom, elox</td></tr> </table>

</div>

";

}

else

{

$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h3>".htmlspecialchars(stripslashes($row['idnorm']))."</h3>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}

}



function anotace3() 

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h1>".htmlspecialchars(stripslashes($row['idnorm']))."</h1>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}



function anotace4() 

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h3>".htmlspecialchars(stripslashes($row['idnorm']))."</h3>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}



function anotace6() 

{

/* vytvori kratke nazvy promennych */

$idnum = $_REQUEST['idnum'];



$query = "SELECT * FROM norms WHERE idnum=$idnum";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);

$row = mysql_fetch_array($result);



echo"

<div class='colrightall'>

<h3>".htmlspecialchars(stripslashes($row['idnorm']))."</h3>

<p>".htmlspecialchars(stripslashes($row['descr']))."</p> 

<h4>Anotace obsahu</h4> 

<div>".htmlspecialchars(stripslashes($row['anotace']))."</div>



<p class='picalign'><img src='images/normy/".htmlspecialchars(stripslashes($row['idnum'])).".jpg' title='".htmlspecialchars(stripslashes($row['idnorm']))."'></p>

</div>

";

}



function resultfindterm() 

{

$idnorm=$_REQUEST['idnorm'];

$findterm=$_REQUEST['findterm'];

$findterm=trim($findterm);



echo"<div class='colrightall'>

<table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<td width='50' height='40'>Předmět zkoušky</td><td width='220' height='40'>Přesný název zkušebního postupu/metody</td><td width='150' height='40'>Identifikace zkušebního postupu/metody</td>
</tr>";

//$query = "SELECT * FROM norms WHERE typeid=1 ORDER BY poradi";
$query = "select * from norms where idnorm like '%".$idnorm."%' and descr like '%".$findterm."%' order by idnum";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
echo'počet nalezených norem: '.$num_results;
for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
if ($i%2 == 0) 
{ 
echo"<tr><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
else
{
echo"<tr class='trgray'><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
}
echo"
</table>

<a href='#top'>nahoru</a></div>

";	

}





function resultfindtermmenu() 

{

$idnorm=$_REQUEST['idnorm'];

$findterm=$_REQUEST['findterm'];

$findterm=trim($findterm);



$query = "select * from norms where idnorm like '%".$idnorm."%' and descr like '%".$findterm."%'";



$result = mysql_query($query);



$num_results = mysql_num_rows($result);



echo"

<div class='colleftall' id='reference'>

<h2>Nalezené normy</h2>

počet nalezených norem: $num_results

</div>";

}





function tnall($lang) // priloha svedceni o akreditaci - holesovice

{



if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h3>Zkoušky prováděné ve SVÚOM s.r.o.</h3>

<h5></h5>

<br /><br />";



echo"<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>

<td width='150' height='40'>Identifikace zkušebního postupu/metody</td>

<td width='75' height='40'>Předmět zkoušky</td></tr>";



$query = "SELECT * FROM norms order by idnum";

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

</table><a href='#top'>nahoru</a></div>

";			

}

}



function tnallmenu() 

{

echo"

<div class='colleftall' id='reference'>

<h2>Prováděné zkoušky</h2>

</div>";

}

function neakreditovane() 

{

echo"<div class='colrightall'>

<table class='akrzk' cellpadding='5'>
<tr class='trcaption'>
<td width='50' height='40'>Předmět zkoušky</td><td width='220' height='40'>Přesný název zkušebního postupu/metody</td><td width='150' height='40'>Identifikace zkušebního postupu/metody</td>
</tr>";

$query = "SELECT * FROM norms WHERE typeid<>1 ORDER BY poradi";
//$query = "select * from norms where idnorm like '%".$idnorm."%' and descr like '%".$findterm."%' order by idnum";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
echo'počet nalezených norem: '.$num_results;
for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
if ($i%2 == 0) 
{ 
echo"<tr><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
else
{
echo"<tr class='trgray'><td>".htmlspecialchars(stripslashes($row['subject']))."</td><td>".htmlspecialchars(stripslashes($row['descr']))."</td><td align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";
}
}
echo"
</table>

<a href='#top'>nahoru</a></div>

";	

}



?>