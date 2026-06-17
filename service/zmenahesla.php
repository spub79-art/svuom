<?

function zmenahesla($tsk)
{

$user_pass = $_REQUEST['user_pass'];
$user_passnew = $_REQUEST['user_passnew'];

$code = $_REQUEST['code'];
$checkcode = $_REQUEST['checkcode'];

echo"
<div id='topic'>
<fieldset>
<legend>Změna hesla uživatele</legend>

<div id='prihl'>
<form action='admin.php?shw=dokoncenizmenahesla' method='post'>
<table>
<tr>
<td class='rght'>Původní heslo: </td><td class='lft'><input type='password' name='user_pass' size='40' maxlength='10'></td>
</tr>
<tr>
<td class='rght'>Nové heslo (4 - 10 znaků)</td><td class='lft'><input type='password' name='user_passnew' size='40' maxlength='10'></td>
</tr>

<tr>
<td colspan=2>";

$checkcode=rand(1, 4);	

echo"Vyplňte kontrolní kód na obrázku: <input type='text' name='code' size='4' maxlength='4'><img src='./images/code/".$checkcode.".jpg' alt='checking code'>
</td>
</tr>

<input type='hidden' name='checkcode' value='".$checkcode."'>

<tr>
<td colspan=2><input type='Submit' value='    změň heslo    '></td>
</tr>
</table>
</form>
</div>

</fieldset>
</div>";
}


function dokoncenizmenahesla($tsk)
{

$userid = $_REQUEST['userid'];

$user_pass = $_REQUEST['user_pass'];
$user_passnew = $_REQUEST['user_passnew'];

$code = $_REQUEST['code'];
$checkcode = $_REQUEST['checkcode'];

// zjisteni userid a puvodniho hesla prihlasenoho uzivatele
$query = "SELECT userid,user_pass,email FROM users WHERE user_name='".$_SESSION['valid_user']."'";
	$result = mysql_query($query);
	$num_results = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	$userid=$row[userid];
	$user_pass_puvodni_z_db=$row[user_pass];
	$email=$row[email];
	//echo $userid;
	//echo $user_pass;
	//echo $email;

// prevedeni zadaneho puvodniho hesla na hash kod pro ucel kontroly, zdali se shoduje puvodni heslo s heslem v db
$user_pass_zadane=sha1($user_pass);

echo"
<div class='regframe'>
<div class='cntr'><h2>Výsledek změny hesla uživatele</h2></div>

<div id='prihl'>";
		
switch($_REQUEST["checkcode"])					
  	{  	
	case '1'; $checkcode='9652'; break;
	case '2'; $checkcode='1285'; break;
	case '3'; $checkcode='3588'; break;
	case '4'; $checkcode='6462'; break;
	}	
		/* kontrola vyplneni kodu */
		if ($code=="") { echo"<div>Pole kontrolní kód nebylo vyplněno.<br>Prosíme <a href='javascript:history.go(-1)'>jděte zpět</a> a vyplňte správně kód.</div>";}
		
		/* kontrola spravnosti kodu */
		elseif ($code!=$checkcode) {echo"<div>Pole kontrolní kód bylo chybně vyplněno.<br>Prosíme <a href='javascript:history.go(-1)'>jděte zpět</a> a vyplňte správně kód.</div>";}
		
		/* kontrola vyplneni */

		elseif ($user_pass==""){ echo"<div>Původní heslo nebylo vyplněno.<br><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko původní heslo.</div>";}
		elseif ($user_passnew==""){ echo"<div>Nové heslo nebylo vyplněno.<br><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte políčko nové heslo.</div>";}
		
		/* zdali puvodni heslo he stejne jako v databazi */
		elseif ($user_pass_zadane!=$user_pass_puvodni_z_db) { echo "<div>Původní heslo se neshoduje s uloženým heslem v databázi..<br><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte správně původní heslo.</div>"; }

		/* kontrola, zdali hesla se shoduji - to nesmi */
		elseif ($user_pass==$user_passnew){ echo"<div>Nové a původní heslo jsou schodné.<br><a href='javascript:history.go(-1)'>Jděte zpět</a> a změňte nové heslo tak, aby bylo jiné než původní.</div>";}
		
		/* heslo ma mene jak 4 znaky */
		elseif (strlen($user_passnew) < 4) { echo "<div>Nové heslo se skládá z méně jak 4 znaků.<br><a href='javascript:history.go(-1)'>Jděte zpět</a> a vyplňte nové heslo nejméně o 4 znacích.</div>"; }
		
		else
		{

// ulozeni nekodovaneho hesla pro potreby odeslani emailem
$user_pass_mail=$user_passnew;

// zakodovani hesla za ucelem ulozeni kodovanoho hesla do db
$user_passnew_kod=sha1($user_passnew);

// nahrani do db
$query = "UPDATE users SET user_pass='".$user_passnew_kod."' WHERE userid='$userid'";
//echo $query;
$result = mysql_query($query);
if ($result==1) {echo "<div class='result'>".$result." Heslo změněno.</div>";}else {echo"<div class='badresult'>Heslo nebylo změněno.</div>";}

$subjektzh="Změna hesla";
$bodyzh="Važený uživateli,<br> Vaše nové heslo je: ".$user_pass_mail."<br>Přejeme přijemný den.";
$altbodyzh="Vazeny uzivateli, Vase nove heslo je: ".$user_pass_mail." Prejeme prijemny den.";

poslat($emailaddress=$email,$subjekt=$subjektzh,$body=$bodyzh,$altbody=$altbodyzh);

echo"
<h3>Změna hesla proběhla v pořádku.</h3>

<div>Na email <strong>$email</strong> Vám bylo odesláno nové heslo.</div>

</div>";

}

echo"</div>
</div>";
}

?>
