<?

require_once dirname(__DIR__) . '/config/app.php';
require_once __DIR__ . '/mysql_pdo.php';

function dbconnection()

{

$cfg = svuom_config();

$conn_server = $cfg['db_host'];
$conn_user = $cfg['db_user'];
$conn_pass = $cfg['db_pass'];
$dbn = $cfg['db_name'];

@ $db = mysql_pconnect($conn_server,$conn_user,$conn_pass);

if (!$db)

	{

	echo"Chyba pripojeni k databazi - kontaktujte administratora: L. Pacak, tel.: 00420 777 340 239.";

	exit;

	}

mysql_select_db($dbn);

/* pro spravnou volbu znakove sady pro pripojeni k db */

//mysql_query("SET CHARACTER SET cp1250;");

mysql_query("SET CHARACTER SET utf8;");

}

?>
