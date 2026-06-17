<?



function dpo($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Dočasná protikorozní ochrana</h1>



<p class='rightpl'>

<img src='images/protikorozni/dpo/pic1.jpg'><br /><br />

<img src='images/protikorozni/dpo/pic2.jpg'></p>



<p class='textjust'>

Dočasná protikorozní ochrana řeší ochranu výrobků při exportu do jiných klimatických oblastí a/nebo při dlouhodobém skladování. Prostředky   dočasné   ochrany  jsou konzervační prostředky a   prostředky upravující atmosféru v obalech.

</p>



<p class='textjust'>

Nebezpečí   korozního   napadení kovových povrchů se   v   povýrobních   etapách - manipulace, sklado-vání, přeprava - zvětšuje. Při exportu výrobků do jiných klimatických oblastí, ale i při dlouhodobém skla-dování výrobků se ochrana výrobků řeší doplòující dočasnou  protikorozní  ochranou. Termín dočasná protikorozní ochrana není ani tak určen kratší dobou ochrany, ale tím, že se tento způsob ochrany úmyslně ukončí po požadované době a prostředky se relativně snadno odstraní z povrchu výrobků či zařízení. Pro-středky   dočasné   ochrany  jsou především konzervační prostředky (konzervační  oleje, vosky, vazelíny,  emulze, snímací laky,  snímací hmoty,  apod.), a  dále pak  prostředky upravující atmosféru v obalech (vy-soušedla, vypařovací inhibitory, papíry či fólie s vypařovacími nebo  kontaktními inhibitory koroze, apod.). Dočasnou ochranu je možné obecně řešit dvěma způsoby:

<ul>

<li>úpravou  podmínek  uložení  výrobku  či zařízení,  tj. omezení působení  korozně agresivních  složek  atmosféry  v prostředí (vytápěné  či  klimatizované  sklady,  balení výrobků, použití vysoušedel či vypa-řovacích inhibitorů v obalech),

<li>zabránění  či  omezení  přístupu  korozně  agresivních  složek prostředí   na  povrch výrobku  či   zaří-zení,  tj.  použití konzervačních prostředků, vytvářejících  na povrchu bariérovou vrstvu (povlak).

</ul>

</p>



<h5>Normy</h5>";



echo"<table class='akrzk' cellpadding='5'>

<tr class='trcaption'><td width='255' height='40'>Přesný název zkušebního postupu/metody</td>

<td width='220' height='40'>Identifikace zkušebního postupu/metody</td></tr>";





$query = "SELECT * FROM norms WHERE typeid=7";

$result = mysql_query($query);

$num_results = mysql_num_rows($result);



for ($i=0; $i<$num_results; $i++)

{

$row = mysql_fetch_array($result);



if ($i%2 == 0) 

{ 

echo"<tr><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='220' height='40' align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";

}

else

{

echo"<tr class='trgray'><td width='255' height='40'>".htmlspecialchars(stripslashes($row['descr']))."</td>";

echo"<td width='220' height='40' align='center'><a href='index.php?zobraz=anotace1&lang=cz&idnum=".htmlspecialchars(stripslashes($row['idnum']))."'>".htmlspecialchars(stripslashes($row['idnorm']))."</a></td></tr>";

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

<h1>Temporary corrosion protection</h1>



<p class='rightpl'>

<img src='images/protikorozni/dpo/pic1.jpg'><br /><br />

<img src='images/protikorozni/dpo/pic2.jpg'></p>



<p class='textjust'>

Temporary corrosion protection solves the problem of product production during their export to other climatic areas and/or during their long-term storage. Means of a temporary protection include conservation products and also products, which adjust the atmosphere in packaging.

</p>



<p class='textjust'>

The danger of corrosion attack of metal coatings increases in their post-production phases - storage and transportation. During the export of products to other climatic areas and also during their long-term storage the protection of products is solved by a temporary corrosion protection. The term temporary anti-corrosion protection is not given by a shorter time of protection since this type of protection is deliberately ended after a required time and the protection agents are easily removed from the surfaces of products or equipment. The temporary corrosion protection means are mainly conservation agents (conservation oils, waxes, vaselines, emulsions, pick-up varnishes, pick-up substances, etc.), and further agents, which adjust the atmosphere in packagings (desicants, vapour corrosion inhibitors, papers or foils with vapour or contact corrosion inhibitors, etc). It is possible to solve the temporary protection by two different ways:

<ul>

<li>by the adjustment of conditions of product or equipment storage, that is by limiting the influence of corrosion-aggressive action of atmospheric compounds (heated and air-conditioned storage areas, product packaging, usage of desicants or vapour corrosion inhibitors in packagings)</li>

<li>by preventing or limiting the access of corrosion-agressive compounds from the environment on the surface of products or equipment, that is by the usage of conservation agents, which produce a barrier layer (coating) on the surface</li>

</ul>

</p>

";

}

}



function dpomenu($lang)

{

	if($lang=='cz')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Dočasná protikorozní ochrana</h1>

<p>

<ul>

<h3>Reference:</h3>

<li>JE Temelín</li>

<li>KERMI s.r.o.</li>

<li><a href='http://www.narexby.cz/' target='_blank'>NAREX Bystřice s.r.o</a></li>

<li><a href='http://www.paramo.cz' target='_blank'>Paramo, a.s.</a></li>

<li><a href='http://www.ornela.cz/' target='_blank'>ČKD Nové Energo, a.s.</a></li>

<li><a href='http://www.crystalex.cz/' target='_blank'>Neograph, a.s.</a></li>

<li><a href='http://' target='_blank'>Robert Bosch s.r.o.</a></li>

<li><a href='http://' target='_blank'>Siemens Elektromotory s.r.o.</a></li>

<li><a href='http://' target='_blank'>Fuchs Oil Corp. (CZ) s.r.o.</a></li>

</ul>

</p>

</div>";

			

	}	

	if($lang=='en')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Temporary corrosion protection</h1>

<p>

<ul>

<h3>References:</h3>

<li><a href='http://www.ornela.cz/' target='_blank'>ČKD Nové Energo, a.s.</a></li>

<li><a href='http://www.crystalex.cz/' target='_blank'>Neograph, a.s.</a></li>

<li><a href='http://' target='_blank'>Robert Bosch s.r.o.</a></li>

<li><a href='http://' target='_blank'>Siemens Elektromotory s.r.o.</a></li>

<li><a href='http://' target='_blank'>Fuchs Oil Corp. (CZ) s.r.o.</a></li>

</ul>

</p>

</div>";

	}

}



?>