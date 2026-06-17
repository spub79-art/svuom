<?
function informace($tsk)
{

$iid = $_REQUEST['iid'];

$title = $_REQUEST['title'];
$topic = $_REQUEST['topic'];

$issue_date = $_REQUEST['issue_date'];

$lang = $_REQUEST['lang'];

$userfile = $_REQUEST['userfile'];
$userfile2 = $_REQUEST['userfile2'];

// pro smazani souboru
$pdffilename = $_REQUEST['pdffilename'];
//echo $pdffilename."<br />";
$picfilename = $_REQUEST['picfilename'];
//echo $picfilename."<br />";

// pomocne promenne
$upload_max_filesize = $_REQUEST['upload_max_filesize'];
$upload = "../prilohy/";

// #####################################################################################
// start kontroly
// #####################################################################################

if ($tsk=="kontrola") {

echo"<div id='topic'>

<fieldset>

<legend>Kontrola požadavku</legend>

<div><span class='mand'>*</span>povinné vyplnit</div>";

if ($title=="" || $topic=="") {
echo"<form name='frm_kontrola' action='admin.php?shw=informace&amp;tsk=kontrola' method='post'>";
}
else {
echo"<form name='frm_kontrola' action='admin.php?shw=informace&amp;tsk=odeslani' method='post'>";
}

echo"<table>

<tr>
<td class='rght'><span class='mands'>Nadpis:</span></td><td><input type='text' name='title' value='$title' size='79' maxlength='90' >";
if ($title=="") { echo"<span class='mands'>Nadpis nebyl vyplněn.</span>"; }
echo"<span class='mand'>*</span></td>
</tr>

<tr>
<td class='rght'><span class='mands'>Text:</span></td><td><textarea name='topic' rows='15' cols='60'>$topic</textarea>";
if ($topic=="") { echo"<span class='mands'>Text nebyl vyplněno.</span>"; }
echo"<span class='mand'>*</span></td>
</tr>";

// nacteni pdf
$userfile_name = $_FILES['userfile']['name'];
if ($userfile_name!="") {
$pdffilename=pdfcopy($userfile=$userfile,$pdfname=$title,$upload=$upload);
}

echo"<tr>";
if ($userfile_name!="") {
echo"<td class='rght'>Soubor PDF:</td><td><a href='".$upload.$pdffilename.".pdf' title='".$title."' target='_blank'><img src='images/picpdfwhite.png' alt='".$title."'></a></td>";
}
echo"</tr>";

// nacteni pic
$userfile_name2 = $_FILES['userfile2']['name'];
if ($userfile_name2!="") {
$picfilename=piccopy($userfile2=$userfile2,$picname=$title,$upload=$upload);
}

echo"<tr>";
if ($userfile_name2!="") {
echo"<td class='rght'>Obrázek:</td> 
<td><a href='".$upload.$picfilename."n.jpg' rel='lightbox' title='".$picname."'><img src='".$upload.$picfilename."s.jpg' alt='".$picname."'></a></td>";
}
echo"</tr>

<tr>
<td class='rght'><span class='mands'>Jazyk (cze=0,eng=1):</span></td><td><input type='text' name='lang' value='$lang' size='2' maxlength='1' class='forim'>";
if ($lang=="") { echo"<span class='mands'>Jazyk nebyl vyplněn.</span>"; }
echo"<span class='mand'>*</span></td>
</tr>";

// udaje pro prenos mezi formularemi
echo"
<input type='hidden' name='pdffilename' value='$pdffilename'>
<input type='hidden' name='picfilename' value='$picfilename'>
";

//odeslani
echo"<tr>
<td colspan=2 class='lft'><img src='./images/";
// ruzny obrazek u tlacitka v navaznosti na vyplneni povinnych poli
if ($title=="" || $topic=="") {
echo"zmenit1.png";
}
else {
echo"potvrdit.png";
}
echo"' alt=''><input class='send' type='submit' value='";
// ruzny popis tlacitka v navaznosti na vyplneni povinnych poli
if ($title=="" || $topic=="") {
echo"pokračovat kontrolou";
}
else {
echo"odeslat";
}
echo"'></td>
</tr>

</table>
</form>
</fieldset>
</div>";

}

// #####################################################################################
// konec kontroly
// #####################################################################################

// #####################################################################################
// start odeslani
// #####################################################################################

if ($tsk=="odeslani") {

$issue_date = date('Y-m-d H:i:s');

$pdf=$pdffilename;
$pic=$picfilename;

// uprava odstraneni uvozovek z nazvu - kdyz tam byly uvozovky, tak se neotevrel high slide ... chyby v zapisu hlavicky kodu
$title = Str_Replace ("\"", "", $title); 

$query="INSERT INTO informace (title,topic,issue_date,pdf,pic,lang) VALUES ('".$title."','".$topic."','".$issue_date."','".$pdf."','".$pic."','".$lang."')";
//echo $query;
$result = mysql_query($query);
if ($result) echo "<div class='result'>".$result." přidána</div>";

echo"<span class='result'>Vložení informace proběhlo v pořádku.</span>";


}

// #####################################################################################
// konec odeslani
// #####################################################################################


// ##################################################
// start zmenit
// ##################################################

if ($tsk=='zmenit')
{

$query = "UPDATE informace SET title='$title', topic='$topic' where iid='$iid'";
//echo $query;
$result = mysql_query($query);
if ($result) echo "<span class='result'>".$result." změně provedena</span>";

}

// ##################################################
// start zmenit
// ##################################################


// ##################################################
// start smazat
// ##################################################

if ($tsk=='smazat')
{

$query = "DELETE FROM informace WHERE iid='$iid'";
//echo $query;
$result = mysql_query($query);
if ($result) echo "<span class='result'>".$result." smazána.</span>";



$delbko="Velký obrázek nebyl smazán - asi tam nebyl.";
$delbok="Velký obrázek byl smazán.";

$delsko="Malý obrázek nebyl smazán - asi tam nebyl.";
$delsok="Malý obrázek byl smazán.";

$delskop="PDF nebylo smazáno - asi tam nebyl.";
$delsokp="PDF bylo smazáno.";


//echo $fotofilename;  
if(@!unlink($upload.$picfilename."n.jpg")) {
echo"<span class='resultbad'>".$delbko."</span>";}
else {
echo"<span class='result'>".$delbok."</span>"; }

if(@!unlink($upload.$picfilename."s.jpg")) {
echo"<span class='resultbad'>".$delsko."</span>";}
else {
echo"<span class='result'>".$delsok."</span>"; }

if(@!unlink($upload.$pdffilename.".pdf")) {
echo"<span class='resultbad'>".$desbkop."</span>";}
else {
echo"<span class='result'>".$delsokp."</span>"; }

}

// ##################################################
// konec smazat
// ##################################################


if ($tsk!="kontrola") {

echo"<div id='topic'>

<fieldset>

<legend>Aktuality - přidávání</legend>

<div id='zobrazit' class='openclose'>
   <form action='javascript: zobrazit()'>
      <input type='submit' value='zobrazit přidávání'>
   </form>
   
</div>


<div style='visibility:hidden; display: none;' id='text'>
<br /><br />
<div id='skryt' class='openclose'>
   <form action='javascript: skryt()'>
      <input type='submit' value='    skrýt přidávání    '>
   </form>
</div>

<form name='frm_zadani' enctype='multipart/form-data' action='admin.php?shw=informace&amp;tsk=kontrola' method='post'>

<div><span class='mand'>*</span>povinné vyplnit</div>

<table>

<tr>
<td class='rght'><span class='mands'>Nadpis:</span></td><td><input type='text' name='title' value='$title' size='79' maxlength='90' class='forim'><span class='mand'>*</span></td>
</tr>

<tr>
<td class='rght'><span class='mands'>Text:</span></td><td><textarea name='topic' rows='15' cols='60' class='forim'>$topic</textarea><span class='mand'>*</span></td>
</tr>

<tr>
<td class='rght'>Soubor PDF:</td> 
<td>
<input type='hidden' name='max_file_size' value='4000000'>
<input type='file' name='userfile' size='10' class='forim'>
</td>
</tr>

<tr>
<td class='rght'>Obrázek:</td> 
<td><input type='file' name='userfile2' size='10' class='forim'></td>
</tr>

<tr>
<td class='rght'><span class='mands'>Jazyk (cze=0,eng=1):</span></td><td><input type='text' name='lang' value='$lang' size='2' maxlength='1' class='forim'><span class='mand'>*</span></td>
</tr>

<tr>
<td colspan=2 class='lft'><img src='./images/zmenit.png' alt='booking continue'><input class='send' type='submit' value='pokračovat'></td>
</tr>

</table>
</form>

</div>
<div>TIP: Vložení ve tvaru #http://www.svuom.cz##SVUOM - specialista na koroze### a v aktualitách se zobrazí takto: <a href='http://www.svuom.cz' target='_blank'>SVUOM - specialista na koroze</a></div>

</fieldset>";

}


// #####################################################################################
// start vypis
// #####################################################################################

echo"

<table>

<tr>
<td></td>
<td>Datum</td>
<td>Nadpis</td>
<td>Text</td>
<td></td>
<td></td>
<td></td>
</tr>";

// vlastni select
$query = "SELECT * FROM informace ORDER BY iid";
//echo $query;
$result = mysql_query($query);
$num_results = mysql_num_rows($result);

for ($i=0; $i<$num_results; $i++)
{
$row = mysql_fetch_array($result);
	
/* ziskani pouze datumu z udaje v databazi datetime pro potreby odradkovani datumu v tabulce */
//$datetime = $row[datetime];
//$date = explode(" ",$datetime);
//$datum = $date[0];
/* prevedeni datumu do formatu dd.mm.rrrr */
//$dbdatum = explode("-",$datum);
//$datum = $dbdatum[2].".".$dbdatum[1].".".$dbdatum[0]; 
	
	if ($i/2 != floor($i/2)) {$typradek=1;} else {$typradek=2;}
	
/* testovani, zdali datum je jine nebo ne, kdyz ano, vlozi radek s datumem a potom ulozi vypsane datum jako stare datum */
//if ($datum!=$olddatum) { echo "<tr class='den'><td colspan=23 class='dendatum'>".$datum."</td><tr>";}
//$olddatum = $datum;

echo"
<tr>
<td class='vp".$typradek."'>".$row[iid]."</td>
<td class='vp".$typradek."'>".$row[issue_date]."</td>
<td class='vp".$typradek."'>".$row[title]."</td>
<td class='vp".$typradek."'>".$row[topic]."</td>
<td class='vp".$typradek."'>";

if ($row[pdf]!="") { echo"<a href='".$upload.$row[pdf].".pdf' title='".$row[pdf]."' target='_blank'><img src='images/picpdftr.png' alt='".$row[pdf]."'></a>"; } 

echo"</td>
<td class='vp".$typradek."'>";

if ($row[pic]!="") { echo"<a href='".$upload.$row[pic]."n.jpg' rel='lightbox' title='".$row[pic]."'><img src='".$upload.$row[pic]."s.jpg' alt='".$row[pic]."'></a>"; }

echo"</td>
<td class='vp".$typradek."'>".$row[lang]."</td>";

// ##################################################
// start dialog editace
// ##################################################

echo"
<td>
<a href='#' onclick=\"return hs.htmlExpand(this, { headingText: '".$row[iid].": ".$row[title]."' })\"><img src='images/zmenit.png'></a>

<div class='highslide-maincontent'>

<form name='frm".$i."' action='admin.php?shw=informace&tsk=zmenit' method='post'>

<div><strong>".$row[issue_date]."</strong></div>
<div>Nadpis:<br /><input type='text' name='title' value='".$row[title]."' size='79' maxlength='90' class='forim'></div>
<div>Text:<br /><textarea name='topic' rows='15' cols='60' class='forim'>".$row[topic]."</textarea>
</div>

<div><strong>Přílohy:</strong><br />";
if ($row[pdf]!="") { echo"<a href='".$upload.$row[pdf].".pdf' title='".$row[pdf]."' target='_blank'><img src='images/picpdftr.png' alt='".$row[pdf]."'></a>"; }
echo"&nbsp;";
if ($row[pic]!="") { echo"<a href='".$upload.$row[pic]."n.jpg' rel='lightbox' title='".$row[pic]."'><img src='".$upload.$row[pic]."s.jpg' alt='".$row[pic]."'></a>"; }
echo"</div>

<input type='hidden' name='iid' value='$row[iid]'>

<input type='submit' value='uložit'>
</form>

</div>

</td>

<td>
<form name='frm".$i."' action='admin.php?shw=informace&tsk=smazat' method='post'>

<input type='hidden' name='pdffilename' value='$row[pdf]'>
<input type='hidden' name='picfilename' value='$row[pic]'>

<input type='hidden' name='iid' value='$row[iid]'>

<input class='picf' type='image' name='pic' src='images/smazat.png'>
</form>

</td>

</tr>";

}

// ##################################################
// konec dialog editace
// ##################################################

echo"
</table>
</div>
</fieldset>";
}

?>