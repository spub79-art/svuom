<?
function menu()
{
echo"
<div>

<a href='admin.php?shw=informace'>Aktuality</a> |
<a href='admin.php?shw=contact'>Kontakty</a>

</div>";
}

function menuimp()
{
echo"
<div class='menuimpl'>
<a href='admin.php?shw=home'>home</a> <br>
<a href='admin.php?shw=logout'>odhlásit se</a> 
<div>Přihlášen:"; if (!isset($_SESSION['valid_user'])) {echo"Nepřihlášen";} else { echo $_SESSION['valid_user']; } echo"</div>
</div>

<div class='menuimpr'>
<a href='admin.php?shw=zmenahesla'>změna hesla</a><br />
<a href='admin.php?shw=registrace'>registrace nového uživatele</a>
</div>
";
}

?>