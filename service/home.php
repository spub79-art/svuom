<?
function home()
{
if (isset($_SESSION['valid_user'])) {
echo"
<div id='content'>
<div id='maincol'>
<div class='cntr'><h3>Vyberte v horním menu, co chcete dělat.</h3></div>
</div>	
</div>";
}
else {
echo"<div class='cntr'>Nemohu Vás přihlásit.</div><div class='cntr'>Pravděpodobně jste chybně zadali jméno nebo heslo.</div><div class='cntr'><a href='adm.php'>Přihlásit se</a></div>";
}
}
?>