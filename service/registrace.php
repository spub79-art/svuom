<?

function registrace($tsk)
{

$query = "SELECT * FROM users WHERE user_name='".$_SESSION['valid_user']."'";
	$result = mysql_query($query);
	$num_results = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$user_right=$row[user_right];

//if ($user_right==0 || $user_right==2) {

$user_name = $_REQUEST['user_name'];
$email = $_REQUEST['email'];
$user_pass = $_REQUEST['user_pass'];
$user_pass1 = $_REQUEST['user_pass1'];
$user_right = $_REQUEST['user_right'];

$code = $_REQUEST['code'];
$checkcode = $_REQUEST['checkcode'];

echo"
<div id='topic'>
<fieldset>
<legend>Registrace nového uživatele</legend>

<div id='prihl'>
<form action='admin.php?shw=dokonceniregistrace' method='post'>
<table>
<tr>
<td class='rght'>Přihlašovací jméno (tímto se budete přihlašovat)</td><td class='lft'><input type='text' name='user_name' size='40' maxlength='40'></td>
</tr>
<tr>
<td class='rght'>Email</td><td class='lft'><input type='text' name='email' size='40' maxlength='40'></td>
</tr>
<tr>
<td class='rght'>Heslo (4 - 10 znaků)</td><td class='lft'><input type='password' name='user_pass' size='40' maxlength='10'></td>
</tr>
<tr>
<td class='rght'>Heslo pro kontrolu (4 - 10 znaků)</td><td class='lft'><input type='password' name='user_pass1' size='40' maxlength='10'></td>
</tr>
<!--<tr>
<td class='rght'>Právo (0 - správce, 1 - zadávající požadavek, 2 - manager, 3 - leader, 4 - dodavatel)</td><td class='lft'>--><input type='hidden' name='user_right' value='0' size='5' maxlength='2'></td>
<!--</tr>-->

<tr>
<td colspan=2>";

$checkcode=rand(1, 4);	

echo"Vyplňte kontrolní kód na obrázku: <input type='text' name='code' size='4' maxlength='4'><img src='./images/code/".$checkcode.".jpg' alt='checking code'></td>
</tr>

<input type='hidden' name='checkcode' value='".$checkcode."'>

<td colspan=2><input type='Submit' value='    registruj    '></td>
</tr>
</table>
</form>
</div>

</fieldset>

<div>
<table>
<th colspan=4>Registrovaní uživatelé</th>
<tr>
<td>id</td>
<td>jméno</td>
<td>právo</td>
<td>email</td>
</tr>";

		$query = "SELECT * FROM users";
		$result = mysql_query($query);
		$num_results = mysql_num_rows($result);
		for ($i=0; $i<$num_results; $i++)
		{
		$row = mysql_fetch_array($result);
		echo "<tr><td>".$row[userid]."</td><td>".$row[user_name]."</td><td>".$row[user_right]."</td><td>".$row[email]."</td></tr>";
		}

echo"</table>
</div>

</div>";
//}
}

function dokonceniregistrace($tsk)
{

$user_name = $_REQUEST['user_name'];
$email = $_REQUEST['email'];
$user_pass = $_REQUEST['user_pass'];
$user_pass1 = $_REQUEST['user_pass1'];
$user_right = $_REQUEST['user_right'];

$code = $_REQUEST['code'];
$checkcode = $_REQUEST['checkcode'];

echo"
<div class='regframe'>
<div class='cntr'><h2>Výsledek registrace nového uživatele</h2></div>

<div id='prihl'>";
		
		/* overeni, zdali jiz neexistuje firma v db - podminka viz nize*/
		$query = "SELECT * FROM users WHERE user_name='$user_name'";
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
		elseif ($user_name==""){ echo"<div>Uživatel nebyl vyplněn.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko jméno uživatele.</div>";}
		
		/* overeni, zdali jiz neexistuje firma v db */
		elseif ($num_results>=1){ echo"<div>Jméno uživatele <strong>$firma</strong> již v databázi existuje.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a zvolte jiné nebo podobné jméno uživatele.</div>";}
		
		/* kontrola vyplneni */
		elseif ($email==""){ echo"<div>Email nebyl vyplněn.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko email.</div>";}
		elseif ($user_pass==""){ echo"<div>Heslo nebylo vyplněno.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko heslo.</div>";}
		elseif ($user_pass1==""){ echo"<div>Heslo pro kontrolu nebylo vyplněno.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko heslo pro kontrolu.</div>";}
		elseif ($user_right==""){ echo"<div>Právo nebylo vyplněno.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko právo.</div>";}
		
		/* overeni spravnosti emailu */
		elseif (!is_email($email)){ echo"<div>Vyplnili jste špatný formát emailu.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte správně svoji emailovou adresu.</div>";}
		
		/* hesla se neshoduji */
		elseif ($user_pass!=$user_pass1){ echo"<div>Heslo pro kontrolu nesouhlasí s prvně zadaným heslem.</div><div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčka hesel správně.</div>";}
		
		/* heslo ma mene jak 4 znaky */
		elseif (strlen($user_pass) < 4) { echo "<div>Heslo se skládá z méně jak 4 znaků.</div><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte hesla nejméně o 4 znacích.</div>"; }

		else
		{

$user_pass_db=sha1($user_pass);

//$query="INSERT INTO users (user_name,user_pass,email) VALUES ('".$user_name."','".$user_pass."','".$email."')";
$query = "INSERT INTO users VALUES (NULL,'".$user_name."','".$user_pass_db."',".$user_right.",'".$email."')";
//echo $query;
$result = mysql_query($query);
//if ($result) echo "<div class='result'>".$result." přidána</div>";

$subjektzh="Registrace nového uživatele";
$bodyzh="Važený uživateli,<br> v aplikaci byla provedena registrace s následujícími údaji:<br>Přihlašující jméno: ''".$user_name."''<br>email: ''".$email."''<br>heslo: ''".$user_pass."''<br><br>Přejeme příjemný den.<br>";
$altbodyzh="Važený uživateli, v aplikaci byla provedena registrace s následujícími údaji: Přihlašující jméno: ''".$user_name."'', email: ''".$email."'', heslo: ''".$user_pass."''.Přejeme příjemný den.";

poslat($emailaddress=$email,$subjekt=$subjektzh,$body=$bodyzh,$altbody=$altbodyzh);

echo"
<h3>Registrace proběhla v pořádku.</h3>

<div>Na zadaný email <strong>$email</strong> byly odeslány registrační údaje.</div>

</div>";

}

echo"</div>
</div>";
}

?>
