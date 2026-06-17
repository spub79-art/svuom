<?

function logout()
{
 // session_start();

  $old_user = $_SESSION['valid_user'];  // store  to test if they *were* 
 
  unset($_SESSION['valid_user']);
  session_destroy();
  
echo"<div class='prihlframe'>";

	if (!empty($old_user))
	{
	echo "<div class='cntr'><h1>Byli jste odhlášeni.</h1></div>";
	echo "<div class='cntr'><h1>Nashledanou.</h1></div>";
	}
	else
	{
	// if they weren't logged in but came to this page somehow
	echo "<div class='cntr'>Nebyli jste přihlášeni. Pokud se chcete přihlásit, běžte na <a href='admin.php'>přihlášení</a>.</div>"; 
  }

  echo"</div>";
  
}