<?

function zapomenuteheslo($tsk)
{

$email = $_REQUEST['email'];
$code = $_REQUEST['code'];
$checkcode = $_REQUEST['checkcode'];

echo"
<div class='regframe'>
<div class='cntr'><h2>Poslání přihlašovacích údajů na Váš email</h2>

<div id='prihl'>
<form action='admin.php?shw=overenizapomenuteheslo' method='post'>
<table>
<tr>
<td class='cntr'>Zadejte Váš email.<br><input type='text' name='email' size='40' maxlength='40'></td>
</tr>
<tr>
<td>";

$checkcode=rand(1, 4);	

echo"Vyplňte kontrolní kód na obrázku: <input type='text' name='code' size='4' maxlength='4'><img src='./images/code/".$checkcode.".jpg' alt='checking code'></td>
</tr>

<input type='hidden' name='checkcode' value='".$checkcode."'>

<td><input type='Submit' value='    odeslat    '></td>
</tr>
</table>
</form>
</div>

</div>
</div>";
}

function overenizapomenuteheslo($tsk)
{
$email = $_REQUEST['email'];
$user_pass = $_REQUEST['user_pass'];
$code = $_REQUEST['code'];
$checkcode = $_REQUEST['checkcode'];

/* overeni, zdali jiz neexistuje username v db - podminka viz nize*/
		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysql_query($query);
		$num_results = mysql_num_rows($result);

switch($_REQUEST["checkcode"])					
  	{  	
	case '1'; $checkcode='9652'; break;
	case '2'; $checkcode='1285'; break;
	case '3'; $checkcode='3588'; break;
	case '4'; $checkcode='6462'; break;
	}	
		/* kontrola vyplneni kodu */
		if ($code=="") { echo"<div>Pole kontrolní kód nebylo vyplněno.</p><p>Prosíme <a href='javascript:history.go(-1)'>jděte zpět</a> a vyplňte správně kód.</div>";}
		
		/* kontrola spravnosti kodu */
		elseif ($code!=$checkcode) {echo"<div>Pole kontrolní kód bylo chybně vyplněno.</p><p>Prosíme <a href='javascript:history.go(-1)'>jděte zpět</a> a vyplňte správně kód.</div>";}
		
		/* kontrola vyplneni */
		if ($email==""){ echo"<div>Email nebyl vyplněn.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte email.</div>";}
		
		/* overeni, zdali jiz neexistuje email v db */
		elseif ($num_results==""){ echo"<div>Email <strong>$email</strong> není v databázi registrován.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a zkuste to znovu nebo požádejte administrátora o registraci - administrátor: L. Pacák (lukas@pacak.cz)</div>";}
		
		
		else {
		
		echo"
<div class='regframe'>
<div class='cntr'><h2>Poslání přihlašovacích údajů na Váš email - změna hesla</h2>

<div id='prihl'>
<form action='admin.php?shw=dokoncenizapomenuteheslo' method='post'>
<table>
<tr>
<td class='cntr'>Zadejte Vaše nové heslo: <br><input type='password' name='user_pass' size='40' maxlength='40'></td>
</tr>
<tr>
<td>

<input type='hidden' name='email' value='$email'>
<input type='Submit' value='    odeslat    '>

</td>
</tr>
</table>
</form>
</div>

</div>
</div>";
				
		}

}


function dokoncenizapomenuteheslo($tsk)
{

$email = $_REQUEST['email'];
$user_pass = $_REQUEST['user_pass'];

echo"
<div class='regframe'>
<div class='cntr'><h2>Poslání přihlašovacích údajů na Váš email - výsledek.</h2></div>

<div id='prihl'>";

		/* vztazeni z databaze potrebne udaje */
		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysql_query($query);
		$num_results = mysql_num_rows($result);
		$row = mysql_fetch_array($result);
		$user_name=$row[user_name];
		$email=$row[email];
		
$user_pass_db=sha1($user_pass);

$query = "UPDATE users SET user_pass='$user_pass_db' WHERE email='$email'";
//echo $query;
$result = mysql_query($query);

if ($result) {
		

$subjektzh="Poslani přihlašovacích údajů";
$bodyzh="Važený uživateli,<br> Vaše přihlašovací jméno je ''".$user_name."'' a heslo je ''".$user_pass."''.<br>Přejeme příjemný den.<br> Podpora ILS";
$altbodyzh="Vazeny uzivateli, Vase prihlasovaci jmeno je ''".$user_name."'' a heslo je ''".$user_pass."''. Prejeme prijemny den.<br> Podpora ILS";

poslat($emailaddress=$email,$subjekt=$subjektzh,$body=$bodyzh,$altbody=$altbodyzh);

echo"
<h3>Na Váš email bylo odesláno heslo a uživatel (přihlašovací jméno).</h3>

<div><a href='admin.php?shw=homenepr'>Nyní se můžete přihlásit do systému.</a></div>

</div>
</div>
</div>";
		}
		else {
		echo"<h3>Heslo nebylo změněno - kontaktujte administrátora - L. Pacák, lukas@pacak.cz, 00420 777 340 239</h3>
		</div>
		</div>
		</div>";
		}
}

?>