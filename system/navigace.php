<?

//funkce navigace
					
function navigace($lang)

{

switch($_REQUEST["zobraz"])								
  	{
	
	case 'resultfindterm':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / nalezené normy";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / aktivities";}
		break;
	
	case 'tnall':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / prováděné normy";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / aktivities";}
		break;
	
	case 'aktivity':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / aktivity";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / activities";}
		break;
	
	case 'neakreditovane':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / ne-akreditované normy";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / aktivities";}
		break;
	
	/* zkuseb */
	
	case 'akrzk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / akreditovaná zkušebna";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>activities</a>";}
		break;
	
	case 'inspekce':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / inspekční činnost";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	case 'atmzkusebst':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / Atmosférické zkušební stanice";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	case 'analytickalab':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / analytická laboratoř";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	case 'mereniznecist':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / měření znečištění";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
	
	case 'tnakrzk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / akreditované zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
	case 'anotace1':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / akreditované zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	case 'tnklizk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / klimatické a korozní zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	case 'anotace4':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / <a href='index.php?zobraz=tnklizk&lang=cz'>klimatické zkoušky</a>";}
		break;
	
	case 'tnostatnizk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / Fyzikální zkoušky materiálů a povlaků";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / Physical testing of materials and coatings";}
		break;
		
	case 'hydrofobizace':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>Fyzikální zkoušky materiálů a povlaků</a> / Měření účinnosti hydrofobizace na silikátových materiálech";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>Physical testing of materials and coatings</a> / Measuring the effectiveness of the waterproofing silicate materials ";}
		break;
		
	case 'csneniso1517':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>Fyzikální zkoušky materiálů a povlaků</a> / Nátěrové hmoty - Zkouška povrchového zasychání - Metoda balotinou -  ČSN EN ISO 1517";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>Physical testing of materials and coatings</a> / Paints and varnishes - Surface drying test - Method of glass beads (ballottini) - CSN EN ISO 1517";}
		break;

	/* zkusebnictvi akreditovana zkusebna */	
			
	case 'akrzksvedceni1':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / <a href='index.php?zobraz=akrzk&lang=cz'>akreditovaná zkušebna</a> / prováděné zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
			
	case 'anotace1_1':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / <a href='index.php?zobraz=akrzk&lang=cz'>akreditovaná zkušebna</a> / <a href='index.php?zobraz=akrzksvedceni1&lang=cz'>prováděné zkoušky (lab. 1) Holešovice</a>";}
		break;
			
	/* zkusebna c. 2 */
	case 'akrzksvedceni2':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / <a href='index.php?zobraz=akrzk&lang=cz'>akreditovaná zkušebna</a> / prováděné zkoušky (lab. 2) Jenerálka";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
		
		case 'anotace1_2':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>zkušebnictví</a> / <a href='index.php?zobraz=akrzk&lang=cz'>akreditovaná zkušebna</a> / <a href='index.php?zobraz=akrzksvedceni2&lang=cz'>prováděné zkoušky (lab. 2) Jenerálka</a>";}
		break;
		
		
		
		
			
	
	/* Materiálové inženýrství */
	
	case 'korozniing':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / korozní inženýrství";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
	
	// korozni zkousky
	case 'tnkorzk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / neakreditované korozní zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
			
	case 'anotace2':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / <a href='index.php?zobraz=atmkorozenormy&lang=cz'>neakreditované korozní zkoušky</a>";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
	
	
	case 'metallab':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / metalografická laboratoř";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
		
	case 'elchemzk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / elektrochemická laboratoř";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	case 'matanalyza':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / materiálová analýza";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	// atmosfericka koroze
	
	case 'atmkoroze':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / atmosférická koroze";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
		
	case 'atmkorozenormy':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / <a href='index.php?zobraz=atmkoroze&lang=cz'>atmosférická koroze</a> / prováděné zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	case 'anotace6':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / <a href='index.php?zobraz=atmkoroze&lang=cz'>atmosférická koroze</a> / <a href='index.php?zobraz=atmkorozenormy&lang=cz'>prováděné zkoušky</a>";}
		break;
	
	// atmosfericke korozni zkousky
	case 'tnatmkorzk':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>Materiálové inženýrství</a> / atmosférické korozní zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;		
	case 'anotace3':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / atmosférické korozní zkoušky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	/* protikorozni ochrana */	
	case 'dpo':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>materiálové inženýrství</a> / dočasná protikorozní ochrana";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	
	
	/* soudne znalecka cinnost */
	case 'soudznal':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>soudně znalecká činnost</a> / soudně znalecká činnost";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;		
	
	/* ostatni */	
		
	/* pu */
	
	case 'pu':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / povrchové úpravy";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;

	/* ozp */
	
	case 'ip':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / integrované prevence";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
	
	case 'z862002':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / zákon o ochraně ovzduší 86/2002 Sb.";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;

	/* spoluprace pri tvorbe norem */
	case 'normcin':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / centrum technické normalizace";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;	

	case 'porcin':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / poradentská činnost";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;

	case 'skoleni':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / školení";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a>";}
		break;
	
	/* expertizni */
	case 'expertizni':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / <a href='index.php?zobraz=aktivity&lang=cz'>ostatní</a> / expertizní činnost";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=aktivity&lang=en'>aktivities</a> / Expertise activities";}
		break;







	
		
	//projekty vav
	case 'projektyvav':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / VaV projekty";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / R&D projects";}
		break;	
	
	// konference
	case 'konference':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / konference";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / conferences";}
		break;
		
		// konference1
	case 'konference1':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / konference";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / conferences";}
		break;
		
		// konference2
	case 'konference2':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / konference";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / conferences";}
		break;
				
	// publikace
	case 'publikace':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / publikace / patenty";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / result transfer";}
		break;
		
	
	
	case 'prirucky':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / příručky";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / publication";}
		break;	
	
	case 'priruckadpo':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Dočasná protikorozní ochrana - příručka pro uživatele";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
	
	case 'priruckalca':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / LCA elektrotechnického výrobku";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
	case 'priruckakmcruo':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Korozní mapa ČR pro uhlíkovou ocel";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
	case 'priruckakmz':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Korozní mapa pro zinek";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
	case 'priruckakmm':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Korozní mapa pro měď";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
	
	case 'priruckapmmtp':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Přehled metod měření tloušťky povlaků";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		case 'priruckakvn':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Komentované vydání normy ČSN ISO 11303";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		case 'priruckaszp':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Specifické vlastnosti slitinových zinkových povlaků";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		
			case 'smernice_pro_pouzivani_oceli':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=prirucky&lang=cz'>příručky</a> / Směrnice pro používání ocelí se zvýšenou odolností proti atmosférické korozi";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		
		
		
		
		case 'knihy':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / Knihy";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / Books ";}
		break;
	
		case 'the_effects_of_air_pollution_on_cultural_heritage':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / The Effects of Air Pollution on Cultural Heritage";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=knihy&lang=en'>Books</a> / The Effects of Air Pollution on Cultural Heritage ";}
		break;
	
	case 'isocorrag':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / ISOCORRAG International Atmospheric Exposure Program: Summary of results";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=knihy&lang=en'>Books</a> / ISOCORRAG International Atmospheric Exposure Program: Summary of results";}
		break;
		
		case 'korozni_agresivita_atmosfer':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Korozní agresivita atmosfér a metody predikce atmosférické koroze";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=knihy&lang=en'>Books</a> / ";}
		break;
		
		case 'korozni_chovani_kovu':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Korozní chování kovů a kovových povlaků v atmosférickém prostředí";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=knihy&lang=en'>Books</a> / ";}
		break;
		
		case 'predikce_ucinnosti_organickych_povlaku':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Predikce účinnosti organických povlaků na základě laboratorních zkoušek";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=knihy&lang=en'>Books</a> / ";}
		break;
		
		case 'flue_gas_desulphurisation_corrosion_control':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Flue gas desulphurisation corrosion control - v anglickém jazyce";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=knihy&lang=en'>Books</a> / Flue gas desulphurisation corrosion control";}
		break;
		
		case 'knihavtas':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Vrstvy Ti – Al – Si na titanu a slitině TiAl6V4";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		case 'pouziti_patinujicich_oceli_v_architekture':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Použití patinujících ocelí v architektuře";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		case 'overovani_zivotnosti_hydrofobnich_impregnaci_betonu':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>publikace</a> / <a href='index.php?zobraz=knihy&lang=cz'>Knihy</a> / Ověřování životnosti hydrofobních impregnací betonu v expozičním prostředí vnější atmosféry";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> ";}
		break;
		
		
	
	// uzitne vzory
	case 'uzitnevzory':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>Publikace / Patenty</a> / Užitné vzory";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / Ulitity model";}
		break;
		
	// uzitny vzor 1 puv200920508
	case 'puv200920508':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>Publikace / Patenty</a> / <a href='index.php?zobraz=uzitnevzory&lang=cz'>Užitné vzory</a> / PUV 2009-20508";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=uzitnevzory&lang=en'>Ulitity model</a> / Utility model 1";}
		break;
		
		// uzitny vzor 2 puv200920664
	case 'puv200920664':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=publikace&lang=cz'>Publikace / Patenty</a> / <a href='index.php?zobraz=uzitnevzory&lang=cz'>Užitné vzory</a> / PUV 2009-2066";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=publikace&lang=en'>publication</a> / <a href='index.php?zobraz=uzitnevzory&lang=en'>Ulitity model</a> / Utility model 1";}
		break;
	
	//kontakty
	
	case 'kontakty':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / kontakty";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / contacts";}
		break;
		
	case 'seznamzam':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=kontakty&lang=cz'>kontakty</a> / seznam zaměstnanců";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / <a href='index.php?zobraz=kontakty&lang=en'>contacts</a> / index of employees";}
		break;
	
	// odkazy
	
	case 'odkazy':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / odkazy";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / links";}
		break;	
	
	// akreditovane zkousky 
	
		
		

	

	
	// klimatické zkousky

	
	//inspekcni zkousky

	
	//oceneni
	case 'oceneni':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / ocenění odborné činnosti";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / Awards";}
		break;	
	
		//ospolecnosti
	case 'ospolecnosti':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / o společnosti";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / company profile";}
		break;
		
	//mapawebu
	case 'mapawebu':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / mapawebu";}
	if($lang=='en'){echo"<a href='index.php?zobraz=home&lang=en'>home</a> / sitemap";}
		break;
	
	default:
	if($lang=='cz'){echo"úvod";}
	if($lang=='en'){echo"home";}
	}	

}

/*
case '':
	if($lang=='cz'){echo"<a href='index.php?zobraz=home&lang=cz'>úvod</a> / <a href='index.php?zobraz=aktivity&lang=cz'>aktivity</a> / technické normy / <a href='index.php?zobraz=tnkorzk&lang=cz'>neakreditované korozní zkoušky</a> / ";}
		break;*/
			
?>
