<?



function prirucky($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Příručky</h1>



<p class='textjust'>

SVÚOM připravuje příručky, které jsou zaměřené na jednotlivé problémy v oblasti koroze a protikorozní ochrany.

Příručky shrnují základní a současné poznatky z dané oblasti a mohou složit technickým pracovníků jako podkladový

materiál. Příručky jsou dostupné v tištěné nebo elektronické podobě.

</p>



<p class='textjust'>

Kontakt: <a href='index.php?zobraz=seznamzam&lang=cz'>Ing. Kateřina Kreislová</a>

</p>



<br /><br /><br /><br /><br />



</div>

";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Handbook</h1>

<div>In construction process</div>

</div>

";

}

}



function priruckymenu($lang)

{

if($lang=='cz')

	{

echo"

<div class='colleftall' id='reference'>

<h1>Příručky</h1>



<h2><a href='index.php?zobraz=prirucky&lang=cz'>Příručky</a></h2>

<ul>

<li><a href='index.php?zobraz=priruckadpo&lang=cz'>Dočasná protikorozní ochrana - příručka pro uživatele</a></li>

<li><a href='index.php?zobraz=priruckalca&lang=cz'>LCA elektrotechnického výrobku</a></li>

<li><a href='index.php?zobraz=priruckakmcruo&lang=cz'>Korozní mapa ČR pro uhlíkovou ocel</a></li>

<li><a href='index.php?zobraz=priruckakmz&lang=cz'>Korozní mapa ČR pro zinek</a></li>

<li><a href='index.php?zobraz=priruckakmm&lang=cz'>Korozní mapa ČR pro měď</a></li>

<li><a href='index.php?zobraz=priruckapmmtp&lang=cz'>Přehled metod měření tloušťky povlaků</a></li>

<li><a href='index.php?zobraz=priruckakvn&lang=cz'>Komentované vydání normy ČSN ISO 11303</a></li>

<li><a href='index.php?zobraz=priruckaszp&lang=cz'>Specifické vlastnosti slitinových zinkových povlaků</a></li>

<li><a href='index.php?zobraz=smernice_pro_pouzivani_oceli&lang=cz'>Směrnice pro používání ocelí se zvýšenou odolností proti atmosférické korozi</a></li>

<li><a href='index.php?zobraz=prirucka_zkousky_umeleho_starnuti&lang=cz'>Zkoušky umělého stárnutí a testy UV záření stanovení odolnosti při cyklických zkouškách
</a></li>


</ul>



</div>

";			

}



if($lang=='en')

	{

echo"

<h1>Handbook</h1>

";

}

}



/* ##################### Prirucka - Dočasná protikorozní ochrana - příručka pro uživatele ##################### */



function priruckadpo($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Dočasná protikorozní ochrana - příručka pro uživatele</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckadpo.jpg'></p>

<p class='textjust'>Zájmem všech výrobců je, aby se jejich výrobky dostaly k odběrateli v takovém stavu, v jakém byly expedovány. Korozní namáhání působící během transportu, manipulace a skladování je mnohem vyšší než namáhání působící na místě používání výrobků. Zejména doprava po moři, zvýšený obsah soli ve vodě a ve vzduchu (salinita) může být příčinou poškození. Ochrana výrobků se v těchto případech řeší doploující dočasnou protikorozní ochranou. Tato příručka shrnuje současné poznatky v oboru dočasné protikorozní ochrany a používané. V Příloze je uveden přehled platných technických norem pro danou problematiku.<br /><br />ISBN: 978-80-903933-1-8</p>





</div>

";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Thickness measures</h1>

<div>In construction process</div>

</div>

";

}

}



/* ##################### Prirucka - LCA elektrotechnického výrobku ##################### */



function priruckalca($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>LCA elektrotechnického výrobku</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckalca.jpg'></p>

<p class='textjust'>Jednou z metod ke zkoumání ekologického chování je tzv. ''Hodnocení životního cyklu'' (Life Cycle Assessment - LCA), nebo též ''Ekobalance'', případně REPA (Resource and Environment Profile Analysis). Hodnocení životního cyklu (LCA) se zabývá ekologickými dopady studovaného systému z hlediska kvality prostředí, lidského zdraví a využívání zdrojů. Koncepce LCA sleduje výrobek od vzniku až po jeho zneškodnění. Musí tedy zahrnovat těžbu, dopravu a vlastní zpracování surovin, z kterých je výrobek zhotoven. Posuzování životního cyklu poskytuje komplexní obraz o výrobku, a to z pohledu zatížení životního prostředí výrobkem, procesem nebo činností.<br /><br />ISBN: 978-80-903933-2-5</p>



</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Korozní mapa ČR pro uhlíkovou ocel ##################### */



function priruckakmcruo($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Korozní mapa ČR pro uhlíkovou ocel</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckakmcruo.jpg'></p>

<p class='textjust'>Znalost podmínek působícího prostředí je důležitá pro odhad i posouzení vznikajícího znehodnocení kovových konstrukčních materiálů nebo kovových povlaků i pro volbu účinného ochranného opatření. Rychlost korozního napadení lze odhadnout z údajů o korozní agresivitě atmosféry. Na základě rovnice pro uhlíkovou ocel byla konstruována mapa ČR s ročními korozními úbytky uhlíkové oceli a mapa korozní agresivity ČR pro uhlíkovou ocel.<br /><br />ISBN: 978-80-903933-4-9</p>

<!--<p>Možnost zobrazení mapy také v el. podobě na <a href='http://www.korozni-mapy.cz' target='_blank'>www.korozni-mapy.cz</a></li></p>-->

</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Korozní mapa pro zinek ##################### */



function priruckakmz($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Korozní mapa pro zinek </h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckakmz.jpg'></p>

<p class='textjust'>Znalost podmínek působícího prostředí je důležitá pro odhad i posouzení vznikajícího znehodnocení kovových konstrukčních materiálů nebo kovových povlaků i pro volbu účinného ochranného opatření. Rychlost korozního napadení lze odhadnout z údajů o korozní agresivitě atmosféry. Na základě rovnice pro zinek byla konstruována mapa ČR s ročními korozními úbytky zinku, titanzinku a zinkových povlaků a mapa korozní agresivity ČR pro zinkové materiály i povlaky.<br /><br />ISBN: 978-80-903933-3-2</p>

<!--<p>Možnost zobrazení mapy také v el. podobě na <a href='http://www.korozni-mapy.cz' target='_blank'>www.korozni-mapy.cz</a></li></p>-->

</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Korozni mapa pro med ##################### */



function priruckakmm($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Korozní mapa pro měď</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckakmm.jpg'></p>

<p class='textjust'>Znalost podmínek působícího prostředí je důležitá pro odhad i posouzení vznikajícího znehodnocení kovových konstrukčních materiálů nebo kovových povlaků i pro volbu účinného ochranného opatření. Rychlost korozního napadení lze odhadnout z údajů o korozní agresivitě atmosféry. Na základě rovnice pro meď byla konstruována mapa ČR s ročními korozními úbytky mědi a mapa korozní agresivity ČR pro měď.<br /><br />

Nakladatel:	SVÚOM Praha<br />

Vydání:	10/2010, Praha, Česká republika<br />

ISBN: 978-80-903933-9-4<br />

</p>

<!--<p>Možnost zobrazení mapy také v el. podobě na <a href='http://www.korozni-mapy.cz' target='_blank'>www.korozni-mapy.cz</a></li></p>-->

</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1>Copper corrosion map of Czech Republic</h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Přehled metod měření tloušťky povlaků ##################### */



function priruckapmmtp($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Přehled metod měření tloušťky povlaků</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckapmmtp.jpg'></p>



<p class='textjust'>Ve spolupráci s ČNI byla v r. 2008 připravena příručka věnovaná problematice měření tloušťky povrchových úprav. </p>

<p class='textjust'>Tloušťka povlaku představuje u většiny povrchových úprav jedno ze základních kritérií pro hodnocení očekávané protikorozní účinnosti a pro předpověď životnosti součástek, strojírenských výrobků, stavebních prvků a konstrukcí a celé řady dalších výrobků. Tloušťka povlaku naneseného na podklad je vzdálenost mezi povrchem povlaku a povrchem podkladu. Metody měření tloušťky povlaků jsou dané typem podkladového materiálu, typem povlaku a jeho předpokládanou tloušťkou (resp. požadovanou přesností a rozsahem měřících přístrojů). Pro měření tloušťek organických povlaků se používá řada metod, které jsou zavedeny v ČSN EN ISO 2808 Nátěrové hmoty - Stanovení tloušťky nátěru. Metody měření tloušťky povlaku jsou normalizované v ČSN EN ISO 3882 Kovové a jiné anorganické povlaky - Přehled metod měření tloušťky. K jednotlivým normám jsou uvedeny stručné komentáře vystihující specifická hlediska využití jednotlivých postupů.<br /><br />ISBN: 978-80-7283-251-4</p>



</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Komentované vydání normy ČSN ISO 11303 ##################### */



function priruckakvn($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Komentované vydání normy ČSN ISO 11303</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckakvn.jpg'></p>



<p class='textjust'>Ve spolupráci s ČNI byla v r. 2008 připravena příručka věnovaná volbě protikorozní ochrany ocelových konstrukcí. </p>

<p class='textjust'>Komentář k normě ČSN ISO 11303 se vztahuje k ocelovým konstrukcím inženýrských staveb vystavených atmosférickým vlivům a dalším vlivům, které mohou působit na tyto konstrukce během jejich života a používání. Dokument má poskytnout odborným uživatelům, tj. projektantům, investorům, výrobcům a poskytovatelům služeb v oblasti povrchové protikorozní ochrany vodítko a základní informace o technických normách a jejich vzájemné provázanosti při navrhování protikorozní ochrany ocelových konstrukcí. Optimální systém povrchové protikorozní ochrany ocelové konstrukce je takový systém, který zabezpečuje požadovanou funkci a životnost v podmínkách odpovídající výroby, skladování, přepravy, montáže a používání. Při volbě optimálního systému povrchové protikorozní ochrany je nutné přihlížet k součtu nákladů na povrchové protikorozní ochranu ocelové konstrukce při výrobě, montáži a při jejím používání po celou dobu požadované životnosti, tzn. včetně nákladů na údržbu a obnovu systému povrchové protikorozní ochrany. <br /><br />ISBN: 978-80-7283-252-1</p>



</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Specifické vlastnosti slitinových zinkových povlaků  ##################### */



function priruckaszp($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Specifické vlastnosti slitinových zinkových povlaků</h1>



<p class='leftpl'><img src='images/publikace/prirucky/priruckaszp.jpg'></p>



<table>

<tr>

<td>Název:</td>

<td>Specifické vlastnosti slitinových zinkových povlaků<br>

Komentář k ČSN ISO 15726 Elektrolyticky vyloučené slitinové povlaky zinku s niklem, kobaltem nebo železem<br>

ISBN  978-80-903933-7-0</td>

</tr>

<tr>

<td>Nakladatel:</td>

<td>SVÚOM, Praha</td>

</tr>

<tr>

<td>Vydání:</td>

<td>05/2010, Praha, Česká republika</td>

</tr>

<tr>

<td>Anotace:</td>

<td>Komentář k normě ČSN ISO 15726 se vztahuje k specifickým vlastnostem slitinových zinkových povlaků, především jejich korozní odolnosti a hodnocení urychlenými korozními zkouškami. Zpracovaný dokument má poskytnout odborným uživatelům, tj. výrobcům, subdodavatelům a pracovníkům zkušeben základní informace o metodách hodnocení kvality těchto povlaků získaných na základě kruhových zkoušek realizovaných v ČR v r. 2007 a 2008 ve spolupráci několika akreditovaných zkušeben a dodavatelů povrchové úpravy elektrolytického slitinového povlaku zinek-nikl. Zkoušky byly provedeny na dílech, které jsou běžnou produkcí.</td>

</tr>

<tr>

<td>Cena:</td>

<td>225,- Kč + DPH</td>

</tr>

</table>



<br>



<p class='picalign'><img src='images/publikace/prirucky/priruckaszp_pic.jpg' title='Specifické vlastnosti slitinových zinkových povlaků'></p>



</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}



/* ##################### Prirucka - Směrnice pro používání ocelí se zvýšenou odolností proti atmosférické korozi  ##################### */



function smernice_pro_pouzivani_oceli($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Směrnice pro používání ocelí se zvýšenou odolností proti atmosférické korozi</h1>



<p class='leftpl'><img src='images/publikace/prirucky/smernice_pro_pouzivani_oceli.png' title='Směrnice pro používání ocelí se zvýšenou odolností proti atmosférické korozi'></p>



<table>

<tr>

<td>Název:</td>

<td>Směrnice pro používání ocelí se zvýšenou odolností proti atmosférické korozi<br>

K. Kreislová, K., Křivý, V, Rozlívka, L., D. Knotková<br>

ISBN 978-80-87444-05-4</td>

</tr>







<tr>

<td>Nakladatel:</td>

<td>SVÚOM, Praha</td>

</tr>

<tr>

<td>Vydání:</td>

<td>2010</td>

</tr>

<tr>

<td>Anotace:</td>

<td>Tato směrnice je výstupem řešení projektu VaV MPO FT-TA 5/076 Výzkum vlastností stávajících a nově vyvíjených patinujících ocelí z hlediska jejich využití pro ocelové konstrukce, řešeného v letech 2008 až 2010 ve spolupráci SVÚOM s.r.o., MVV s.r.o., IOK s.r.o., UTAM AV ČR a VŠB-TU Ostrava.

<br><br>

Úkolem směrnice je soustředit informace potřebné pro spolehlivé a zodpovědné navrhování konstrukcí z patinujících ocelí a podpořit důvěru pro jejich širší uplatnění. Zkušenosti a poznatky z provedeného výzkumu byly hlavním podkladem pro zpracování této směrnice. Dalšími podklady pro zpracování směrnice byla řada českých i zahraničních dokumentů a publikací. Další podrobnější informace lze získat na <a href='http://www.atmofix.cz' target='_blank'>www.atmofix.cz</a>.

</td>

</tr>

<tr>

<td>Cena:</td>

<td>550,- Kč + DPH</td>

</tr>

</table>



<br>



<!--<p class='picalign'><img src='images/publikace/prirucky/priruckaszp_pic.jpg' title='Specifické vlastnosti slitinových zinkových povlaků'></p>-->



</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}


/* ##################### Prirucka - Zkoušky umělého stárnutí a testy UV záření stanovení odolnosti při cyklických zkouškách  ##################### */



function prirucka_zkousky_umeleho_starnuti($lang)

{

if($lang=='cz')

	{

echo"

<div class='colrightall'>

<h1>Zkoušky umělého stárnutí a testy UV záření stanovení odolnosti při cyklických zkouškách</h1>



<p class='leftpl'><img src='images/publikace/prirucky/pri_zkousky_umeleho_starnuti.jpg'></p>



<table>

<tr>

<td>Název:</td>

<td>Zkoušky umělého stárnutí a testy UV záření stanovení odolnosti při cyklických zkouškách</td>

</tr>


</table>

<a href='images/publikace/prirucky/20160510_zkousky_umeleho_starnuti_testy_uv.pdf' target='_blank'><img src='images/letak/stahnete_si_letak.png' title='Stáhnout leták - Zkoušky umělého stárnutí a testy UV záření stanovení odolnosti při cyklických zkouškách' alt='Stáhnout leták - Zkoušky umělého stárnutí a testy UV záření stanovení odolnosti při cyklických zkouškách'></a>


</div>";			

}



if($lang=='en')

	{

echo"

<div class='colrightall'>

<h1></h1>

<div></div>

</div>";

}

}





?>