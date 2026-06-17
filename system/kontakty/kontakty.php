<?

function kontakty($lang)
{
if($lang=='cz')
	{
echo"
<div class='colrightall'>
<h1>Vedení společnosti</h1>

<div class='line'></div>
<p>
<h3>Geiplová Hana Ing.</h3>
<table>
<tr><td><b>Zařazení:</b></td><td>jednatel, výzkumný pracovník</td></tr>
<tr><td><b>Obor:</b></td><td>povrchové úpravy, ochrana životního prostředí</td></tr> 
<tr><td><b>Mobil:</b></td><td>+420 604 218 304</td></tr>
<tr><td><b>Email:</b></td><td>geiplova@svuom.cz</td></tr> 
</table>
</p>
<div class='line'></div>
<p>
<h3>Kreislová Kateřina Ing. Ph.D.</h3>
<table>
<tr><td><b>Zařazení:</b></td><td>jednatel, výzkumný pracovník</td></tr>
<tr><td><b>Obor:</b></td><td>koroze, zkušebnictví</td></tr> 
<tr><td><b>Tel.:</b></td><td>+420 220 809 996</td></tr>
<tr><td><b>Mobil:</b></td><td>+420 775 179 552</td></tr>
<tr><td><b>Email:</b></td><td>kreislova@svuom.cz</td></tr> 
</table>
</p>
<div class='line'></div>
<h1>Akreditovaná laboratoř</h1>
<p>
<h3>Markéta Paráková</h3>
<table>
<tr><td><b>Zařazení:</b></td><td>vedoucí akreditované zkušebny</td></tr>
<tr><td><b>Mobil:</b></td><td>+420 733 512 024</td></tr>
<tr><td><b>Email:</b></td><td>laborator@svuom.cz</td></tr> 
</table>
</p>
<div class='line'></div>
<h1>Inspekční činnost</h1>
<h3>Geiplová Hana Ing.</h3>
<table>
<tr><td><b>Zařazení:</b></td><td>jednatel, výzkumný pracovník</td></tr>
<tr><td><b>Obor:</b></td><td>povrchové úpravy, ochrana životního prostředí</td></tr> 
<tr><td><b>Mobil:</b></td><td>+420 604 218 304</td></tr>
<tr><td><b>Email:</b></td><td>geiplova@svuom.cz</td></tr> 
</table>
</p>

</div>
";			
}

if($lang=='en')
	{
echo"
<div class='colrightall'>
<h1>Contacts</h1>

<h1>Managers of company</h1>
<p>
<h3>Geiplova Hana Ing.</h3>
<table>
<tr><td><b>Mobile:</b></td><td>+420 604 218 304</td></tr>
<tr><td><b>Email:</b></td><td>geiplova@svuom.cz</td></tr> 
</table>
</p>
<div class='line'></div>
<p>
<h3>Kreislová Kateřina Ing. Ph.D.</h3>
<table>
<tr><td><b>Tel.:</b></td><td>+420 220 809 981</td></tr>
<tr><td><b>Mobile:</b></td><td>+420 775 179 552</td></tr>
<tr><td><b>Email:</b></td><td>kreislova@svuom.cz</td></tr> 
</table>
</p>
<div class='line'></div>
<h1>Accredited testing laboratory</h1>
<p>
<h3>Markéta Paráková</h3>
<table>
<tr><td><b>Mobile:</b></td><td>+420 733 512 024</td></tr>
<tr><td><b>Email:</b></td><td>laborator@svuom.cz</td></tr> 
</table>
</p>
<div class='line'></div>
<h1>Inspection activities</h1>
<h3>Geiplová Hana Ing.</h3>
<table>
<tr><td><b>Mobile:</b></td><td>+420 604 218 304</td></tr>
<tr><td><b>Email:</b></td><td>geiplova@svuom.cz</td></tr> 
</table>
</p>

</div>
";
}
}

function kontaktymenu($lang)
{
if($lang=='cz')
	{
echo"
<div class='colleftall'>
<h1>Kontakty</h1>
<div class='nav'>
<ul>
	<li><a href='index.php?zobraz=seznamzam&lang=cz'><strong>SEZNAM ZAMĚSTNANCŮ</strong></a></li>
	<!--<li><a href='index.php?zobraz=zamdleobor&lang=cz'>seznam zaměstnanců dle oborů</a></li>-->
</ul>
</div>

		<h2>Sídlo společnosti</h2>
		<p class='adresy'>
		U Měšťanského pivovaru 934/4<br />
		Praha 7 - Holešovice, 170 00<br />
		Tel.: +420 220 809 981<br />
		IČO: 25794787<br />
		DIČ: CZ25794787<br />
		E-mail: <a href='mailto:info@svuom.cz'>info@svuom.cz</a><br /><br />
		
		Zápis v OR: Městský soud v Praze, oddíl C, vložka 70913<br /><br />
		
		<a href='images/mapa.jpg' target='_blank'>mapa</a>
		
		</p>
		
		<h2>Dislokované pracoviště</h2>
		<p class='adresy'>
		Požárníků 60/8<br />
		Horoměřice, 252 62<br />
		Tel.: +420 235 355 851/3<br />
		E-mail: <a href='mailto:corrosion@svuom.cz'>corrosion@svuom.cz</a>		
		</p>
		
		<h2>Bankovní účty</h2>
		
		<p class='adresy'>
		<strong>Účet CZK</strong>: 3636530297/0100<br />
		IBAN: CZ3601000000003636530297<br />
		BIC/SWIFT: KOMBCZPPXXX
		</p>
		
		<p class='adresy'>
		<strong>Účet EUR</strong>: 51-2488630207/0100<br />
		IBAN: CZ5101000000512488630207<br />
		BIC/SWIFT: KOMBCZPPXXX
		</p>
		
		<h2>Datová schránka</h2>
		
		<p class='adresy'>
		<strong>Datová schránka</strong>: yjv5n3r
		</p>
		
		
		

</div>
";			
}

if($lang=='en')
	{
echo"
<div class='colleftall'>
<h1>Contacts</h1>

<div class='nav'> 
<ul>
<li><a href='index.php?zobraz=seznamzam&lang=en'>Index of employees</a></li>
<!--<li><a href='index.php?zobraz=zamdleobor&lang=en'>Index of employes order by subjects</a></li>-->
</ul>
</div>

<h2>Headquarters</h2>
		<p class='adresy'>
		U Měšťanského pivovaru 934/4<br />
		Praha 7, 170 00<br />
		Tel.: +420 220 809 981<br />
		IČO: 25794787<br />
		DIČ: CZ25794787<br />
		E-mail: <a href='mailto:info@svuom.cz'>info@svuom.cz</a>		
		</p>
		
		<h2>Dislocated department</h2>
		<p class='adresy'>
		Požárníků 60/8<br />
		Horoměřice, 252 62<br />
		Tel.: +420 235 355 851/3<br />
		E-mail: <a href='mailto:corrosion@svuom.cz'>corrosion@svuom.cz</a>		
		</p>

</div>
";
}
}
?>