<?

include "./system/menutop.php";

include "./system/home.php";

include "./system/aktuality.php";

include "./system/navigace.php";



include "./system/aktivity/aktivity.php";

include "./system/aktivity/koroze/korozniing.php";

include "./system/aktivity/koroze/atmkoroze.php";

include "./system/aktivity/protikorozni/dpo.php";

include "./system/aktivity/zkusebnictvi/akrzk.php";

include "./system/aktivity/zkusebnictvi/atmzkusebst.php";

include "./system/aktivity/zkusebnictvi/analytickalab.php";

include "./system/aktivity/pu/pu.php";

include "./system/aktivity/ozp/ip.php";

include "./system/aktivity/ozp/z862002.php";

include "./system/aktivity/ozp/mereniznecist.php";

include "./system/aktivity/ostatni/inspekce.php";

include "./system/aktivity/ostatni/soudznal.php";

include "./system/aktivity/ostatni/expertizni.php";

include "./system/aktivity/spoltvorbanor/normcin.php";



include "./system/aktivity/materialove_inzenyrstvi/metallab.php";

include "./system/aktivity/materialove_inzenyrstvi/elchemzk.php";

include "./system/aktivity/materialove_inzenyrstvi/matanalyza.php";





include "./system/aktivity/ostatni/porcin.php";

include "./system/aktivity/ostatni/skoleni.php";



include "./system/aktivity/technorm/tnakrzk.php";

include "./system/aktivity/technorm/tnatmkorzk.php";

include "./system/aktivity/technorm/tnkorzk.php";

include "./system/aktivity/technorm/tnklizk.php";

include "./system/aktivity/technorm/tnostatnizk.php";



include "./system/aktivity/normy/normy.php";



include "./system/projektyvav/projektyvav.php";





include "./system/konference/konference.php";



include "./system/publikace/publikace.php";

include "./system/publikace/prirucky.php";

include "./system/publikace/knihy.php";



include "./system/publikace/uzitnevzory.php";



include "./system/kontakty/kontakty.php";

include "./system/kontakty/seznamzam.php";



include "./system/odkazy/odkazy.php";



include "./system/oceneni/oceneni.php";



include "./system/links.php";



include "./system/ospolecnosti.php";



include "./system/mapawebu.php";



include "./system/dbconnection.php";



/* pripojeni k databazi */



dbconnection();



/* vytvori kratke nazvy promennych */

/*$zobraz = $_REQUEST['zobraz'];

$lang = $_REQUEST['lang'];

$menutop = $_REQUEST['menutop'];*/
if(isset($_REQUEST['zobraz'])) 
{
 $zobraz=(string)($_REQUEST['zobraz']);
}
if(isset($_REQUEST['lang']))
{
 $lang=(string)($_REQUEST['lang']);
}
if(isset($_REQUEST['menutop']))
{
 $menutop=(string)($_REQUEST['menutop']);
}


$upload = "./prilohy/";



if(!isset($lang))$lang='cz';

if(!isset($zobraz))$zobraz='home';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

	

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">



<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="Content-Language" content="cs" />

	<meta http-equiv="Cache-control" content="no-cache" />

	<meta name="description" content="Vzkum a vvoj, koroze a protikorozn ochrana, korozn inenrstv, povrchov pravy a ochrana ivotnho prosted." />

	<meta name="keywords" content="koroze,povrchov pravy,ochrana ivotnho prosted,protikorozn ochrana,korozn inenrstv,korozn zkouka,akreditovan zkuebna,soln mlha,zkon 86/2002 Sb.,zkon 76/2002 Sb.,IPPC" />

	<meta name="copyright" content="Copyright  (c) 2005 SVUOM s.r.o. " />

	<meta name="author" content="Code &amp; design: DirectSolution, Luk Pack; Content: Luk Pack, Kateina Kreislov, Hana Kalouskov, Marek Thrner; e-mail:info@svuom.cz" />

	<meta name="robots" content="index,follow" />

	<meta name="rating" content="general" />



	<title>SVÚOM s.r.o.</title>

	

	<link rel="SHORTCUT ICON" href="https://www.svuom.cz/favicon/svuom.ico" type="image/x-icon" />

	<link href="css/layout.css" rel="stylesheet" type="text/css" media="screen,projection" />

	<link href="css/topic.css" rel="stylesheet" type="text/css" media="screen,projection" />

	<link href="css/print.css" rel="stylesheet" type="text/css" media="print" />

	

	<!-- lightbox start -->

	<script src="js/lightbox/jquery-1.7.2.min.js"></script>

	<script src="js/lightbox/lightbox.js"></script>

	<link href="css/lightbox.css" rel="stylesheet" />

	

	<!-- lightbox end -->

	<!-- expand start -->

	<link href="css/expand.css" rel="stylesheet" type="text/css" media="screen,projection" />

	<script type='text/javascript' src='js/jquery_min.js'></script>

	<script type="text/javascript">

	$(function($) {

		$('.slide').next().prev().click(function () {

			$(this).toggleClass('slideActive').next().slideToggle('slow');

		});

	});

	</script>

	<!-- expand end -->

	

<!-- skryti/odkryti start -->	

<script>

function zobrazit() {

  document.getElementById("text").style.visibility = "visible";

  document.getElementById("text").style.display = "block";

}

</script>



<script>

function skryt() {

  document.getElementById("text").style.visibility = "hidden";

  document.getElementById("text").style.display = "none";

}

</script>

<!-- skryti/odkryti konec -->

	

	

	

	<!-- highslide -->

	  <!--

	1) Reference to the files containing the JavaScript and the styles.

	These files must be located on your server.

-->



<script type="text/javascript" src="highslide/highslide-full.js"></script>

<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />



<!--

	2) Optionally override the settings defined at the top

	of the highslide.js file. The parameter hs.graphicsDir is important!

-->



<script type="text/javascript">

	hs.graphicsDir = 'highslide/graphics/';

	hs.outlineType = 'rounded-white';

	hs.showCredits = false;

	hs.wrapperClassName = 'draggable-header';

</script>

<!-- /highslide -->

	

</head>



<body>



<? if (function_exists('svuom_is_staging') && svuom_is_staging()) { echo "<div style='background:#b45309;color:#fff;text-align:center;padding:6px;font-size:14px;'>STAGING &mdash; vývojové prostředí (new.svuom.cz), není to produkční web</div>"; } ?>



<div id='site'>

<a name='top'></a>

	

	<div id='menutop'>

		<div><? menutop($lang) ?></div>		

	</div>

	

	<? 

	

	if($zobraz=="home") {

	

	echo"<div id='headerhome'>";

	

	}

	else {

	

	echo"<div id='header'>";

	

	}

	?>

		

		<div id='lang'>

		<a href='index.php?zobraz=home&lang=en'><img src='images/eng.png' title='english'></a>

		<a href='index.php?zobraz=home&lang=cz'><img src='images/cze.png' title='česky'></a>

		</div>

		

		<div id='search'>		

		<!-- Atomz HTML for Search -->

		<form method="get" action="http://search.atomz.com/search/" target='_blank'>

			<input type="hidden" name="sp_a" value="sp1003c136" />

			<input class='inpt' size="15" name="sp_q" value="hledat" />

			<input name="imageField" type="image" src="images/buttomsearch.png" alt="Hledat" />

			<input type="hidden" name="sp_p" value="all" />

			<input type="hidden" name="sp_f" value="utf-8" />

		</form>		

		</div>	

	

		<div id='logo'>

		<a href="index.php?zobraz=home&lang=cz" title="Návrat na titulní stránku"><img src='images/logo.png'></a>	

		</div>



		<?

		

		if($zobraz!="home") {

				

		echo"<div id='navigace'>"; navigace($lang); echo"</div>";

		

		}

				

		if($zobraz=="home") {

		

echo"





<div class='km'>

<!--

<a href='images/letak/2017_eurocorr.pdf' target='_blank'><img src='images/letak/2017_eurocorr.jpg' title='EUROCORR 2017' alt='EUROCORR 2017'></a>

-->



<!--<a href='images/letak/2017_eurocorr.pdf' target='_blank'><img src='images/letak/stahnete_si_letak.png' title='Stáhnout leták - EUROCORR 2017' alt='Stáhnout leták - EUROCORR 2017'></a>-->

</div>



<!--

<div class='km1'>

<a href='index.php?zobraz=projektyvav&lang=cz'><img src='images/vav_projekty/plakat_infracervena_spektroskopie.jpg' width='200px' title='' alt=''></a>

</div>

-->



<div class='akt'>



<a href='#' class='aktuality' onclick=\"return hs.htmlExpand(this, { headingText: '";



if($lang=='cz') { echo"Aktuality"; }

if($lang=='en') { echo"News"; }



echo"' })\">";



if($lang=='cz') { echo"Aktuality"; }

if($lang=='en') { echo"News"; }



echo"</a>

<div class='highslide-maincontent'>";

	

if($lang=="cz")	{ $query = "SELECT * FROM informace WHERE lang=0 ORDER BY iid DESC"; }

if($lang=="en")	{ $query = "SELECT * FROM informace WHERE lang=1 ORDER BY iid DESC"; }



	$result = mysql_query($query);

	$num_results = mysql_num_rows($result);



	for ($i=0; $i<$num_results; $i++)

	{

	$row = mysql_fetch_array($result);

	

	

/* ziskani pouze datumu z udaje v databazi datetime pro potreby odradkovani datumu v tabulce */

$datetime = $row[issue_date];

$date = explode(" ",$datetime);

$datum = $date[0];

/* prevedeni datumu do formatu dd.mm.rrrr */

$dbdatum = explode("-",$datum);

$datum = $dbdatum[2].".".$dbdatum[1].".".$dbdatum[0]; 

	

echo"



<div class='vypis'>

<h3>".$row[title].", ".$datum."</h3>



<div>";



/* transformace znaku # ## ### na odkaz - databaze se musi vlozit #http://www.neco.koncovka##to co se zobrazi### */

	$trans = array("#" => "<a href='", "##" => "' target='_blank'>", "###" => "</a>", "-#" => "<sub>", "-##" => "</sub>");

	$aktualita = strtr(htmlspecialchars (stripslashes($row[topic])), $trans);



$transpopis=nl2br($aktualita);

echo $transpopis;



echo"<br />";



if ($row[pdf]!="") { echo"<a href='".$upload.$row[pdf].".pdf' title='".$row[pdf]."' target='_blank'><img src='images/picpdftr.png' alt='".$row[pdf]."'></a>"; } 



echo"</td>

<td class='vp".$typradek."'>";



if ($row[pic]!="") { echo"<a href='".$upload.$row[pic]."n.jpg' rel='lightbox' title='".$row[pic]."'><img src='".$upload.$row[pic]."s.jpg' alt='".$row[pic]."'></a>"; }



echo"</div>

</div>";

}

	



?> 	



</div>



</div>



	

<!--

<div class="banner">

<img src="http://www.forsurface.cz/2013/cz/intercept.asp" width="" height="">

-->

<!--[if !IE]> -->

<!--

<object type="application/x-shockwave-flash"

  data="images/banner/surface_468x60_link.swf?clickthru=http://www.forsurface.cz/2013/cz/intercept.asp" width="468" height="60">

-->

<!-- <![endif]-->



<!--[if IE]>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"

  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"

  width="468" height="60">

  <param name="movie" value="images/banner/surface_468x60_link.swf?clickthru=http://www.forsurface.cz/2013/cz/intercept.asp" />

<!--><!--dgx-->

<!--

  <param name="loop" value="true" />

  <param name="menu" value="false" />



  <p>FOR SURFACE 2013</p>

</object>

-->

<![endif]-->

<!--

</div>

-->



<div class="nadp">



<? $nonadp=rand(1, 4); 



if($nonadp==1) {



if($lang=='cz') {

echo"

<h1>Zkušebnictví</h1>

<div class='podnadp'>

Výzkumná, zkušební, inspekční, poradenská a znalecká činnost v oboru koroze a protikorozní ochrana.

</div>";

}

if($lang=='en') {

echo"

<h1>Testing</h1>

<div class='podnadp'>

Research, testing, inspection, consulting and expert activities in the field of corrosion and corrosion protection.

</div>";

}



}

if($nonadp==2) {



if($lang=='cz') {

echo"

<h1><span class='whlet'>Materiálové</span> inženýrství</h1>

<div class='podnadp'>

Výzkumná, zkušební, inspekční, poradenská a znalecká činnost v oboru koroze a protikorozní ochrana.

</div>";

}

if($lang=='en') {

echo"

<h1><span class='whlet'>Materials</span> engineering</h1>

<div class='podnadp'>

Research, testing, inspection, consulting and expert activities in the field of corrosion and corrosion protection.

</div>";

}







}

if($nonadp==3) {



if($lang=='cz') {

echo"

<h1><span class='whlet'>Soudně</span> znalecká činnost</h1>

<div class='podnadp'>

Výzkumná, zkušební, inspekční, poradenská a znalecká činnost v oboru koroze a protikorozní ochrana.

</div>";

}

if($lang=='en') {

echo"

<h1><span class='whlet'>Legally </ span> expert activities</h1>

<div class='podnadp'>

Research, testing, inspection, consulting and expert activities in the field of corrosion and corrosion protection.

</div>";

}





}

if($nonadp==4) {



if($lang=='cz') {

echo"

<h1>Ostatní</h1>

<div class='podnadp'>

Výzkumná, zkušební, inspekční, poradenská a znalecká činnost v oboru koroze a protikorozní ochrana.

</div>";

}



if($lang=='en') {

echo"

<h1>Others</h1>

<div class='podnadp'>

Research, testing, inspection, consulting and expert activities in the field of corrosion and corrosion protection.

</div>";

}



}



?>

</div>

<?



}		

		

?>

				

	</div>	

	

	<div id='colcontainer'>

	

	<? 

	

	if($zobraz=="home") {

	

	home($lang);

	

	}

	else {

	

	?>

			<div id='colleft'>

		<!-- zacatek sloupec vlevo -->

		

		<div class="colleftall">		



<? 

switch($_REQUEST["zobraz"])		// leve menu					

  	{

	

	//vysledky hledani norem

	case 'resultfindterm': resultfindtermmenu($lang); break;

	case 'tnall': tnallmenu($lang); break;

	

	//home

	case 'formconfirm': aktuality($lang); break;

	

	

	// aktivity

	

	case 'aktivity': aktivitymenu($lang); break;

	

	// materialove inzenyrstvi

	

	case 'elchemzk': elchemzkmenu($lang); break;

	case 'metallab': metallabmenu($lang); break;

	case 'matanalyza': matanalyzamenu($lang); break;

	

	// koroze

	

	case 'korozniing': korozniingmenu($lang); break;

	case 'atmkoroze': atmkorozemenu($lang); break;

	case 'atmkorozenormy': atmkorozenormymenu($lang); break;

	case 'anotace6': atmkorozenormymenu($lang); break;

			

	//protikorozni ochrana

	case 'dpo': dpomenu($lang); break;

	

	// zkusebnictvi

	case 'akrzk': akrzkmenu($lang); break;	

	case 'analytickalab': analytickalabmenu($lang); break;		

	case 'atmzkusebst': atmzkusebstmenu($lang); break;

	

	//anotace norem

	case 'akrzksvedceni1': akrzksvedcenimenu1($lang); break;

	case 'anotace1_1': akrzksvedcenimenu1($lang); break;	

		

	//anotace norem

	case 'akrzksvedceni2': akrzksvedcenimenu2($lang); break;

	case 'anotace1_2': akrzksvedcenimenu2($lang); break;

		

	// povrchov upravy

	case 'pu': pumenu($lang); break;

	

	//ozp

	case 'ip': ipmenu($lang); break;

	case 'z862002': z862002menu($lang); break;

	case 'mereniznecist': mereniznecistmenu($lang); break;

	

	//ostatni

	

	case 'porcin': porcinmenu($lang); break;

	case 'skoleni': skolenimenu($lang); break;

	

	//inspekcni cinnost

	case 'inspekce': inspekcemenu($lang); break;	

	//soudne znalecka cinnost

	case 'soudznal': soudznalmenu($lang); break;

	//expertizni cinnost

	case 'expertizni': expertiznimenu($lang); break;

	

	//spoluprace na normach

	//spoluprace na normach

	case 'normcin': normcinmenu($lang); break;		

	

	// projekty vav

	case 'projektyvav': projektyvavmenu($lang,$show); break;

	

	// konference

	

	case 'konference': konferencemenu($lang); break;

	case 'konference1': konferencemenu($lang); break;

	case 'konference2': konferencemenu($lang); break;

	 

	// publikace



	case 'publikace': publikacemenu($lang); break;

	case 'prirucky': priruckymenu($lang); break;

	case 'priruckadpo': priruckymenu($lang); break;

	case 'priruckalca': priruckymenu($lang); break;

	case 'priruckakmcruo': priruckymenu($lang); break;

	case 'priruckakmz': priruckymenu($lang); break;

	case 'priruckakmm': priruckymenu($lang); break;

	case 'priruckapmmtp': priruckymenu($lang); break;

	case 'priruckakvn': priruckymenu($lang); break;

	case 'priruckaszp': priruckymenu($lang); break;

	case 'smernice_pro_pouzivani_oceli': priruckymenu($lang); break;

	case 'prirucka_zkousky_umeleho_starnuti': priruckymenu($lang); break;

	

	

	case 'knihy': knihymenu($lang); break;

	case 'the_effects_of_air_pollution_on_cultural_heritage': knihymenu($lang); break;

	case 'isocorrag': knihymenu($lang); break;

	case 'korozni_agresivita_atmosfer': knihymenu($lang); break;

	case 'korozni_chovani_kovu': knihymenu($lang); break;

	case 'predikce_ucinnosti_organickych_povlaku': knihymenu($lang); break;

	case 'flue_gas_desulphurisation_corrosion_control': knihymenu($lang); break;

	case 'knihavtas': knihymenu($lang); break;

	case 'pouziti_patinujicich_oceli_v_architekture': knihymenu($lang); break;

	case 'overovani_zivotnosti_hydrofobnich_impregnaci_betonu': knihymenu($lang); break;

	

	

	// patenty, prumyslove a uzitne vzory

	

	case 'uzitnevzory': uzitnevzorymenu($lang); break;

	

	case 'puv200920508': uzitnevzorymenu($lang); break;

	case 'puv200920664': uzitnevzorymenu($lang); break;

	

	// kontakty

	case 'kontakty': kontaktymenu($lang); break;

	case 'seznamzam': seznamzammenu($lang); break;

	case 'zamdleobor': kontaktymenu($lang); break;		

	

	// odkazy

	case 'odkazy': odkazymenu($lang); break;

	

	// akreditovane zkousky 	

	case 'tnakrzk': tnakrzkmenu($lang); break;

	case 'anotace1': tnakrzkmenu($lang); break;	

		

	// korozni zkousky

	case 'tnkorzk': tnkorzkmenu($lang); break;

	case 'anotace2': tnkorzkmenu($lang); break;

	

	// atmosfericke korozni zkousky

	case 'tnatmkorzk': tnatmkorzkmenu($lang); break;

	case 'anotace3': atmnormymenu($lang); break;

	

	// klimatick zkousky

	case 'tnklizk': tnklizkmenu($lang); break;	

	case 'anotace4': tnklizkmenu($lang); break;

		

	//ostatni zkousky

	case 'tnostatnizk': tnostatnizkmenu($lang); break;	

	case 'hydrofobizace': tnostatnizkmenu($lang); break;

	case 'csneniso1517': tnostatnizkmenu($lang); break;

	

	

	

	//oceneni

	case 'oceneni': ocenenimenu($lang); break;

	

	//o nas

	case 'ospolecnosti': aktuality($lang); break;

	

	//mapa webu

	case 'mapawebu': aktuality($lang); break;

	

	default: aktuality($lang);

	}

?>		

				

		</div>

		

		</div>

				

		<div id='colright'>

		<!-- zacatek sloupec vpravo -->

				

<? 



switch($_REQUEST["zobraz"])					// hlavni obsah		

  	{

  

   //vysledky hledani norem

	case 'resultfindterm': resultfindterm($lang); break;

	case 'tnall': tnall($lang); break;

  

   //home

	case 'formconfirm': formconfirm($lang); break;

  

	//aktivity

	

  	case 'aktivity': aktivity($lang); break;

	

	// materialove inzenyrstvi

	

	case 'elchemzk': elchemzk($lang); break;

	case 'metallab': metallab($lang); break;

	case 'matanalyza': matanalyza($lang); break;

	

	//koroze

	case 'korozniing': korozniing($lang); break;		

	case 'atmkoroze': atmkoroze($lang); break;	

	case 'atmkorozenormy': atmkorozenormy($lang); break;

	case 'anotace6': anotace6(); break;

	

	//protikorozni ochrana

	case 'dpo': dpo($lang); break;	

	

	// zkusebnictvi

	case 'akrzk': akrzk($lang); break;

		

	case 'analytickalab': analytickalab($lang); break;

	case 'atmzkusebst': atmzkusebst($lang); break;

	

	//normy

	case 'akrzksvedceni1': akrzksvedceni1($lang); break;			

	case 'anotace1_1': anotace1_1($lang); break;

	case 'akrzksvedceni2': akrzksvedceni2($lang); break;

	case 'anotace1_2': anotace1_2($lang); break;			

		

	// povrchov upravy

	case 'pu': pu($lang); break;

		

	// ozp

	case 'ip': ip($lang); break;

	case 'z862002': z862002($lang); break;

	case 'mereniznecist': mereniznecist($lang); break;

	

	//ostatni

	

	case 'porcin': porcin($lang); break;

	case 'skoleni': skoleni($lang); break;

	

	//inspekcni cinnost

	case 'inspekce': inspekce($lang); break;

	//soudne znalecka cinnost

	case 'soudznal': soudznal($lang); break;

	//expertizni

	case 'expertizni': expertizni($lang); break;

	//spoluprace na normach

	case 'normcin': normcin($lang); break;		

	

	// projekty vav

	case 'projektyvav': projektyvav($lang,$show); break;



	// konference

	

	case 'konference': konference($lang); break;	

	case 'konference1': konference1($lang); break;	

	case 'konference2': konference2($lang); break;



	// publikace	

	

	case 'publikace': publikace($lang); break;

	case 'prirucky': prirucky($lang); break;

	case 'priruckadpo': priruckadpo($lang); break;

	case 'priruckalca': priruckalca($lang); break;

	case 'priruckakmcruo': priruckakmcruo($lang); break;

	case 'priruckakmz': priruckakmz($lang); break;

	case 'priruckakmm': priruckakmm($lang); break;

	case 'priruckapmmtp': priruckapmmtp($lang); break;

	case 'priruckakvn': priruckakvn($lang); break;

	case 'priruckaszp': priruckaszp($lang); break;

	case 'priruckavtas': priruckavtas($lang); break;

	case 'smernice_pro_pouzivani_oceli': smernice_pro_pouzivani_oceli($lang); break;

	case 'prirucka_zkousky_umeleho_starnuti': prirucka_zkousky_umeleho_starnuti($lang); break;





	case 'knihy': knihy($lang); break;

	case 'the_effects_of_air_pollution_on_cultural_heritage': the_effects_of_air_pollution_on_cultural_heritage($lang); break;

	case 'isocorrag': isocorrag($lang); break;

	case 'korozni_agresivita_atmosfer': korozni_agresivita_atmosfer($lang); break;

	case 'korozni_chovani_kovu': korozni_chovani_kovu($lang); break;

	case 'predikce_ucinnosti_organickych_povlaku': predikce_ucinnosti_organickych_povlaku($lang); break;

	case 'flue_gas_desulphurisation_corrosion_control': flue_gas_desulphurisation_corrosion_control($lang); break;

	case 'knihavtas': knihavtas($lang); break;

	case 'pouziti_patinujicich_oceli_v_architekture': pouziti_patinujicich_oceli_v_architekture($lang); break;

	case 'overovani_zivotnosti_hydrofobnich_impregnaci_betonu': overovani_zivotnosti_hydrofobnich_impregnaci_betonu($lang); break;

	

	// patenty, prumyslove a uzitne vzory

	

	case 'uzitnevzory': uzitnevzory($lang); break;

	

	case 'puv200920508': puv200920508($lang); break;

	case 'puv200920664': puv200920664($lang); break;

	

	// kontakty

	case 'kontakty': kontakty($lang); break;

	case 'seznamzam': seznamzam($lang); break;

	case 'zamdleobor': zamdleobor($lang); break;

	

	// odkazy

	case 'odkazy': odkazy($lang); break;

	

	// akreditovane zkousky 

	

	case 'tnakrzk': tnakrzk($lang); break;

	case 'anotace1': anotace1($lang); break;

	

	// korozni zkousky

	case 'tnkorzk': tnkorzk($lang); break;

	case 'anotace2': anotace2($lang); break;

	

	// atmosfericke korozni zkousky

	case 'tnatmkorzk': tnatmkorzk($lang); break;	

	case 'anotace3': anotace3($lang); break;

	

	// klimatick zkousky

	case 'tnklizk': tnklizk($lang); break;

	case 'anotace4': anotace4($lang); break;

	

	//ostatni zkousky - nove od 12.12.2009 Fyzikln zkouky materil a povlak

	case 'tnostatnizk': tnostatnizk($lang); break;

	case 'hydrofobizace': hydrofobizace($lang); break;	

	case 'csneniso1517': csneniso1517($lang); break;

	case 'neakreditovane': neakreditovane($lang); break;		

	

	//oceneni

	case 'oceneni': oceneni($lang); break;

	

	//links

	case 'links': links($lang); break;

	

	//links

	case 'ospolecnosti': ospolecnosti($lang); break;

	

	//mapawebu

	case 'mapawebu': mapawebu($lang); break;

	

	default: home($lang);

	}

?>

		

	

			<p id='zpetback'><a href="javascript:history.go(-1);">

			<?

			//if($lang=='cz') echo"<img src='images/back.png' title='zpt'>";

			//if($lang=='en') echo"<img src='images/back.png' title='back'>";

			

			if($lang=='cz') echo"zpět";

			if($lang=='en') echo"go back";

			

			?>

			</a>

			</p>

			





		</div>



<?

}

?>	

	



	<div id='footer'>



<?



if($lang=="cz") {



?>	

	

<div class="homeend">



<div class='hledatnormy'>

<div class='sar'> Vyhledávání norem</div>

<form action='index.php?zobraz=resultfindterm&lang=cz' method='post'>

Zadejte označení normy:<br /> <span class='textsmall'>(např.: ČSN EN ISO 4624)</span><br />

<input class='input-norms' type='text' name='idnorm' maxlenth='40' size='30' /><br />

Zadejte jedno nebo více klíčových slov:<br /><span class='textsmall'>(např.: zkoušky solnou mlhou)</span><br />

<input class='input-norms' type='text' name='findterm' maxlenth='40' size='30' />

<input name='imageField' type='image' src='images/findnorm.png' alt='Hledat' />

</form>

</div>

<div class='objpubl'>

<div class="sar">Objednejte si publikace <img src='images/publikace.png' title='Publikace'></div>

<ul>

<li><a href='index.php?zobraz=priruckadpo&lang=cz'>Dočasná protikorozní ochrana ...</a></li>

<li><a href='index.php?zobraz=priruckakmcruo&lang=cz'>Korozní mapa ČR pro uhlíkovou ocel</a></li>

<li><a href='index.php?zobraz=priruckakmz&lang=cz'>Korozní mapa ČR pro zinek</a></li>

<li><a href='index.php?zobraz=priruckapmmtp&lang=cz'>Přehled metod měření tloušťky povlaků</a></li>

<li><a href='index.php?zobraz=priruckakvn&lang=cz'>Komentované vydání normy ČSN ISO 11303</a></li>

<li><a href='index.php?zobraz=priruckaszp&lang=cz'>Specifické vlastnosti slitinových zinkových povlaků</a></li>

</ul>

<div class='linkleftm'><a href='index.php?zobraz=publikace&lang=cz'><img src='images/linktroj.jpg'>více</a></div>



</div>



</div>



<?



}



?>

	

	

<div class="totalfooter">

	

<div class="lf">

	<h2>Sídlo společnosti / Headquarters</h2>

		U Měšťanského pivovaru 934/4<br />

		Praha 7 - Holešovice, 170 00<br />

		Tel.: +420 220 809 981<br />

		Fax: +420 220 801 967<br />

		IČO: 25794787<br />

		DIČ: CZ25794787<br />

		E-mail: <a href='mailto:info@svuom.cz'>info@svuom.cz</a><br />

		<a href='images/mapa.jpg' target='_blank'>mapa</a>

		

		

</div>

<div class="lf">		

		<h2>Dislokované pracoviště / Dislocated department</h2>

		Požárníků 60/8<br />

		Horoměřice, 252 62<br />

		Tel.: +420 235 355 851/3<br />

		E-mail: <a href='mailto:corrosion@svuom.cz'>corrosion@svuom.cz</a>		

</div>



<div class="oppi">



<?

if($lang=='cz') { ?> <a href="index.php?zobraz=projektyvav&lang=cz"><img src='images/vav_projekty/ip_pik.jpg' width='210px' title='Operačního programu Podnikání a inovace' alt='Operačního programu Podnikání a inovace'></a>
<!-- <a href="index.php?zobraz=projektyvav&lang=cz#oppi"><img src='images/oppitab.png' title='Operačního programu Podnikání a inovace' alt='Operačního programu Podnikání a inovace'></a> --><? }

	



if($lang=='en') { ?> <a href="index.php?zobraz=projektyvav&lang=en#oppi"><img src='images/oppitab.png' title='Operational Programme Enterprice of Innovation' alt='Operational Programme Enterprice of Innovation'></a> <? }	





?> 

<br />

<br />





<div class='oppi' style="width:130px;height:130px;" id="overena-firma"><a href="https://www.idatabaze.cz/firma/162243-svuom-sro/" target="_blank" style="height:90px;display:block;" title="SVÚOM s.r.o. - idatabaze.cz"><img src="https://files.netorg.cz/stamp/np/np130-blue-p1.png" alt="SVÚOM s.r.o. - idatabaze.cz" style="margin:0;padding:0;border:0;"></a><a href="https://www.idatabaze.cz/katalog/sluzby/vyzkumne-zkusebni-ustavy/" target="_blank" style="height:40px;display:block;" title="Výzkumné, zkušební ústavy - idatabaze.cz"><img src="https://files.netorg.cz/stamp/np/np130-blue-p2.png" alt="Výzkumné, zkušební ústavy - idatabaze.cz" style="margin:0;padding:0;border:0;"></a></div>



</div>





	

<div class="rg">



	&copy; SVÚOM s.r.o. 2012, Production leader: <a href='http://www.directsolution.cz' target='_blank'>DirectSolution</a> | Design: <a href='http://www.dr-abe.cz/' target='_blank'>dr.abé</a>

			<?

			if($lang=='cz') echo"| <a href='index.php?zobraz=links&lang=cz'>odkazy</a>";

			if($lang=='en') echo"| <a href='index.php?zobraz=links&lang=en'>links</a>";			

			?> 







</div>





			

</div>	





		

<!-- cookies a gdpr -->

<link rel="stylesheet" type="text/css" href="https://gdpr.media3.cz/www.svuom.cz/cookies-style.css" />

<!-- vyskakovaci okno gdpr -->

<script language="javascript">

function OtevriOkno( url, width, height ) {

x = ( screen.width / 2 ) - ( width / 2 );

y = ( screen.height / 2 ) - ( height / 2 );

var opts = 'height=' + height + ',width=' + width + ',location=no, menubar=no, scrollbars=yes ,resizable=yes, status=no, toolbar=no, screenX=' + x + ',left=' + x + ',screenY=' + y + ' ,top=' + y;

var emailWindow = window.open( url, name, opts );

emailWindow.focus();

}

</script>

<!-- end gdpr -->





<!-- vyskakovaci okno pro cookies -->

<!-- Cookie Consent by https://www.FreePrivacyPolicy.com -->

<script type="text/javascript" src="https://gdpr.media3.cz/www.svuom.cz/cookie-consent.js"></script>

<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function () {

cookieconsent.run({"notice_banner_type": "simple", "consent_type": "express", "palette": "dark", "language": "cs", "website_name": "SVÚOM s.r.o.", "cookies_policy_url": "/cookies-info", "debug": "false", "change_preferences_selector": "#nastaveniCookies"});

});

</script>

<link rel="stylesheet" type="text/css" href="https://gdpr.media3.cz/www.svuom.cz/cookie-consent.css" />

<noscript>Cookie Consent by <a href="https://www.FreePrivacyPolicy.com/free-cookie-consent/" rel="nofollow noopener">FreePrivacyPolicy.com</a></noscript>

<!-- End Cookie Consent -->





<div class="div-dpr-url" style="margin-bottom: 50px;">

<a href="JavaScript:void(0);" onClick="OtevriOkno('https://gdpr.media3.cz/www.svuom.cz/.gdpr-text-inc.php', 730, 800);">Ochrana osobních údajů</a><br>
<a href="https://www.svuom.cz/prilohy/GenderPlan.pdf" id="nastaveniCookies">Gender plan</a><br>
<a href="#" id="nastaveniCookies">Nastavení sledování Cookies</a>


</div> 		

		





</div>



		

		



<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-7857803-1");

pageTracker._trackPageview();

} catch(err) {}</script>

		



</body>

</html>