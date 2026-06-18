<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?

// nacteni knihovny pro posilani mailu
require("./library/phpMailer_v2.3/class.phpmailer.php");

require_once dirname(__DIR__) . '/config/app.php';
svuom_apply_staging_noindex();
$svuom_cfg = svuom_config();
$conn_server = $svuom_cfg['db_host'];
$conn_user = $svuom_cfg['db_user'];
$conn_pass = $svuom_cfg['db_pass'];
$dbn = $svuom_cfg['db_name'];

// zacatek sezeni
session_start();

if (isset($_POST['user_name']) && isset($_POST['user_pass']))
{
  // if the user has just tried to log in
  $user_name = $_POST['user_name'];
  $user_pass = $_POST['user_pass'];

  $db_conn = mysql_connect($conn_server,$conn_user,$conn_pass);
  mysql_select_db($dbn, $db_conn);
  
  // prevedeni na hash kod
  $user_pass=sha1($user_pass);
  
  $query = 'select * from users '."where user_name='$user_name'"." and user_pass='$user_pass'";
  //echo $query;
  $result = mysql_query($query, $db_conn);
  if (mysql_num_rows($result) >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $user_name;    
  }
}

/* naloudovani funkci - prihlaseny uzivatel */
include "./home.php";
include "./menu.php";
include "./zmenahesla.php";
include "./logout.php";

include "./informace.php";
include "./contact.php";

include "./helpfunction.php";

/* naloudovani funkci - NEprihlaseny uzivatel */
include "./homenepr.php";
include "./registrace.php";
include "./zapomenuteheslo.php";

/* pripojeni k databazi */

@ $db = mysql_pconnect($conn_server,$conn_user,$conn_pass);

if (!$db)
	{
	echo"Nějaká chyba připojení k databázi - kontaktujte správce.";
	exit;
	}

mysql_select_db($dbn);

mysql_query("SET CHARACTER SET utf8;");

/* nastaveni promennych */
$web = $_REQUEST['web'];
$tsk = $_REQUEST['tsk'];
$shw = $_REQUEST['shw'];

$web = $svuom_cfg['site_host'];

?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Správa webových stránek <? echo $web; ?></title>
	<meta name="robots" content="<? echo htmlspecialchars(svuom_robots_meta_content(), ENT_QUOTES, 'UTF-8'); ?>" />
	
	<link href="css/layoutadmin.css" rel="stylesheet" type="text/css" media="screen,projection" />
	
	
<!-- skryti/odkryti start -->	
<script>
function zobrazit() {
  document.getElementById("text").style.visibility = "visible";
  document.getElementById("text").style.display = "block";
}
</script>

<script>
function skryt() {
  document.getElementById("text").style.visibility = "hidden";
  document.getElementById("text").style.display = "none";
}
</script>
<!-- skryti/odkryti konec -->
	
<!-- lightbox start -->
<script src="js/lightbox/jquery-1.7.2.min.js"></script>
<script src="js/lightbox/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />	
<!-- lightbox end -->
	
	

<!-- highslide -->
<!--
	1) Reference to the files containing the JavaScript and the styles.
	These files must be located on your server.
-->

<script type="text/javascript" src="highslide/highslide-full.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
<!-- /highslide -->
	
<script type="text/javascript" src="js/floating-gallery.js" ></script>
<link href="css/floating-gallery.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<? if (svuom_is_staging()) { echo "<div style='background:#b45309;color:#fff;text-align:center;padding:6px;font-size:14px;'>STAGING &mdash; admin na vývojovém prostředí</div>"; } ?>
<center>
<div id="base">
<?

if (isset($_SESSION['valid_user'])) {

	if ($shw!='logout') {
	echo"<div id='header'>"; menuimp(); echo"<div class='nadps'><h3>Správa webu ".$web."</h3></div></div>";
	echo"<div id='menutop'>"; menu(); echo"</div>";
						} 
    
		switch($_REQUEST["shw"])
		{
		case 'home': home(); break;
		
		case 'informace': informace($tsk); break;
		case 'contact': contact($tsk); break;
		
		case 'registrace': registrace($tsk); break;		
		case 'dokonceniregistrace': dokonceniregistrace($tsk); break;
		
		case 'zmenahesla': zmenahesla($tsk); break;		
		case 'dokoncenizmenahesla': dokoncenizmenahesla($tsk); break;
			
		case 'logout': logout(); break;		
		}
	}
	else {
	   // they have not tried to log in yet or have logged out
	   	//echo "<div class='cntr'>Nejste přihlášen.</div>";
		//echo "<div class='cntr'>Pouze zaregistrovaní uživatelé mají přístup.</div>";
				
			switch($_REQUEST["shw"])
			{			
			case 'zapomenuteheslo': zapomenuteheslo($tsk); break;
			case 'overenizapomenuteheslo': overenizapomenuteheslo($tsk); break;
			case 'dokoncenizapomenuteheslo': dokoncenizapomenuteheslo($tsk); break;
			default: homenepr($tsk);
			}		
		 }
  
?>
	</div>
	</center>
</body>
</html>


