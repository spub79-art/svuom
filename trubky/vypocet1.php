<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SVÚOM - Výpočet predikce 6ivotnosti 68rov0ho zinkov0ho povlaku</title>

<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="topic.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id='site'>
	<?php include("tophdr.php"); ?>
    <h1>Výsledek výpočtu predikce životnosti žárového zinkového povlaku</h1>
    <?php
	   include("defs.php");
	   // prevod promennych z formulare
	   $phval=htmlspecialchars($_POST['phval']);
	   $vodivost=htmlspecialchars($_POST['vodivost']);
	   $alkalita=htmlspecialchars($_POST['alkalita']);
       $rozpustenelatky=htmlspecialchars($_POST['rozpustenelatky']);
	   $vapennatvrdost=htmlspecialchars($_POST['vapennatvrdost']);
	   $konccl=htmlspecialchars($_POST['konccl']);	   
	   $koncno3=htmlspecialchars($_POST['koncno3']);	   
	   $koncso4=htmlspecialchars($_POST['koncso4']);	   
	   $konchco3=htmlspecialchars($_POST['konchco3']);	
	   if ($konchco3<0.00001) $konchco3=0.00001;				// kvuli deleni nulou, kdyz zadaji nulovou hodnotu vyjde jim blblost, ale ne chyba....
	   

	   $desinfekcecl=htmlspecialchars($_POST['desinfekcecl']);
	   $volnychlor=htmlspecialchars($_POST['volnychlor']);
	   $koncentracecu2=htmlspecialchars($_POST['koncentracecu2']);
	   $rychlostproudeni=htmlspecialchars($_POST['rychlostproudeni']);
       $vyskytkovu=htmlspecialchars($_POST['vyskytkovu']);
	   $teplota=htmlspecialchars($_POST['teplota']);
	   $koncentracecunapovrchu=htmlspecialchars($_POST['koncentracecunapovrchu']);
	   $usady=htmlspecialchars($_POST['usady']);
	   $mic=htmlspecialchars($_POST['mic']);
	   $tloustkazn=htmlspecialchars($_POST['tloustkazn']);
	   $tloustkanfaze=htmlspecialchars($_POST['tloustkanfaze']);
	   $trhliny=htmlspecialchars($_POST['trhliny']);
	   $anomalie=htmlspecialchars($_POST['anomalie']);
	   // vypocet koeficientu S
	   $koefsval=($konccl+$koncno3+2*$koncso4)/$konchco3;
	   // vypocet korozniho indexu Cl
	   $korindexval=(0.03*$konccl+0.02*$koncso4)/(0.02*$konchco3);
	   // vypocet Langelierova indexu
	   for ($i=0;$i<count($rozpustenelatkyaaray);$i++) if ($rozpustenelatky<$rozpustenelatkyaaray[$i]) break;  
	   $koefA=$koefAbase+$koefAstep*($i-1);
	   if ($teplota>=57) $koefB=1.4;
	   else
	   {  for ($i=0;$i<count($teplotaCarray);$i++) if ($teplota<$teplotaCarray[$i]) break;  
	      $koefB=$koefBbase+$koefBstep*($i-1);
	   }
	   for ($i=0;$i<count($catvrdostarray);$i++) if ($vapennatvrdost<$catvrdostarray[$i]) break;  
	   $koefC=$koefCbase+$koefCstep*($i-1);
	   for ($i=0;$i<count($alkatitaarray);$i++) if ($alkalita<$alkatitaarray[$i]) break;  
	   $koefD=$koefDbase+$koefDstep*($i-1);
       $phs=(9.3+$koefA+$koefB)-($koefC+$koefD);
	   $langindex=$phval-$phs;  // Langelieruv index
	   // vypocet bodovani pro cislem zdavane hodnoty
	   // Koeficient S
	   switch (TRUE) {
		case ($koefsval<0.3): 
			$koefsbody=1;
			break;
		case ($koefsval<1.5): 
			$koefsbody=0;
			break;
		case ($koefsval<2.9): 
			$koefsbody=-4;
			break;						
		case ($koefsval>2.9): 
			$koefsbody=-6;  
	   }
	   // Koeficient Cl2 - korozni index
	   switch (TRUE) {
		case ($korindexval<1): 
			$korindexbody=0;
			break;
		case ($korindexval<=1.5): 
			$korindexbody=-1;
			break;
		case ($korindexval>1.5): 
			$korindexbody=-2;
	   }	   
	   // vypocet bodovani pro cislem zdavane hodnoty
	   // ph
	   switch (TRUE) {
		case ($phval<5.5): 
			$phbody=-6;
			break;
		case ($phval<6.5): 
			$phbody=-4;
			break;
		case ($phval<7.0): 
			$phbody=-1;
			break;						
		case ($phval>7.1): 
			$phbody=1;  
	   }
	   // celkova alkalita
	   switch (TRUE) {
		case ($alkalita<50): 
			$alkalitabody=-1;
			break;
		case ($alkalita<200): 
			$alkalitabody=1;
			break;
		case ($alkalita<300): 
			$alkalitabody=0;
			break;						
		case ($alkalita>300): 
			$alkalitabody=1;  
	   }	   
	   // vapnikova tvrdostt - koncentrace Ca2+
       switch (TRUE) {
		case ($vapennatvrdost<60): 
			$vapennatvrdostbody=3;
			break;
		case ($vapennatvrdost<160): 
			$vapennatvrdostbody=1;
			break;
		case ($vapennatvrdost<800): 
			$vapennatvrdostbody=-2;
			break;						
		case ($vapennatvrdost>800): 
			$vapennatvrdostbody=-4;  
	   }
	   // teplota
       switch (TRUE) {
		case ($teplota<50): 
			$teplotabody=0;
			break;
		case ($teplota<55): 
			$teplotabody=-1;
			break;
		case ($teplota<60): 
			$teplotabody=-3;
			break;						
		case ($teplota>=70): 
			$teplotabody=-6;  
	   }	
	   // vypocet konecneho koeficientu Pk
	   $pk=$phbody+$vodivost+$alkalitabody+$vapennatvrdostbody+$langindex+$koefsbody+$korindexbody+$desinfekcecl+$volnychlor+$koncentracecu2+$rychlostproudeni+$teplotabody+$vyskytkovu+$koncentracecunapovrchu+$usady+$mic+$tloustkazn+$tloustkanfaze+$trhliny+$anomalie;
	   
	   echo("<h3 class=\"centered\">Vypočtený index životnosti žárového zinkového povlaku P<sub>k</sub>: ".$pk."</h3>");
	   switch (TRUE) {
		 case ($pk>=1):  $hodstr="V tomto rozvodu TV lze použít žárově zinkované trubky";
		       			 break;   
		 case ($pk>-19): $hodstr="Životnost žárově zinkovaných trubek bude v tomto rozvodu TV snížena";
		       			 break;   
		 case ($pk<=-19): $hodstr="V tomto rozvodu nelze použít žárově zinkované trubky - k jejich prokorodování dojde po cca 2-3 letech";
		       			 break;   
	   }
	   echo("<h3 class=\"centered\">Zhonocení výsledku výpočtu indexu P<sub>k</sub></h3>");
	   echo("<p class=\"centered\"><strong>".$hodstr."</strong></p>");
	   
	?>
    <h2 class="centered"><a href="index.php">Nový výpočet</a></h2>
</div>
	
	
    





</body>
</html>