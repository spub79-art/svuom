<?

function homenepr($tsk)
{

echo"

<div class='prihlframe'>
<div class='cntr'><h2>Přihlášení do systému</h2></div>";

if ($tsk=='prihl' && $_SESSION['valid_user']=='') {echo"<div>Bylo zadáno špatné jméno nebo heslo!<br>Systém Vás nemůže přihlásit.</div><br>";}

 echo"
<div id='prihl'>
<form method='post' action='admin.php?shw=home&tsk=prihl'>
<div>Uživatel</div>
<div><input type='text' name='user_name'></div>
<div>Heslo</div>
<div><input type='password' name='user_pass'></div>
<br>
<div><input type='submit' value='přihlásit'></div>
</form>

</div>

</div>

<div><a href='admin.php?shw=zapomenuteheslo'>neznám svoje heslo nebo název uživatele</a></div>";

}
?>

