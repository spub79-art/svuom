<?

function metallab($lang)
{
if($lang=='cz')
	{
?>

<div class="colrightall">
<h1>Metalografická laboratoř</h1>

<p class='textjust'>Vedoucí laboratoře: <a href='index.php?zobraz=seznamzam&lang=cz'>Mgr. Libor Turek</a></p>

<p>Text se připravuje.</p>

<!--<div class='picalign'><img src='images/zkusebnictvi/analytickalab/pic1.jpg' title='Laborantka při práci, spektrofotometr'></div>-->

</div>

<?		
}

if($lang=='en')
	{
?>

<div class='colrightall'>
<h1>Metallographic laboratory</h1>
</div>

<?
}
}

function metallabmenu($lang) 
{
if($lang=='cz')
	{
?>

<div class='colleftall' id='reference'>
<h1>Metalografická laboratoř</h1>
</div>

<?			
}

if($lang=='en')
	{
?>

<div class='colleftall' id='reference'>
<h1>Metallographic laboratory</h1>
</div>

<?
}
}

?>