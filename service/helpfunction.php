<?

function is_email($email){
    if (preg_match( '/^[A-Z0-9._-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z.]{2,6}$/i' , $email)==1)  return true;
    else return false;
}

/*function poslat($emailaddress,$subjekt,$body,$altbody){*/
function NEposlat($emailaddress,$subjekt,$body,$altbody){

/* start odeslani mailem s prilohou */

$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP

/* home set */
/*$mail->Host = "smtp.iol.cz;smtp.iol.cz";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "ELogNV56DJ";  // SMTP username
$mail->Password = "00000074540"; // SMTP password*/

/* server set - forpsi */
$mail->Host = "smtp.forpsi.com;smtp.forpsi.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "sending@eurodriver.cz";  // SMTP username
$mail->Password = "FIsending89"; // SMTP password

/* server set - hostinet */
/*$mail->Host = "109.123.215.1;109.123.215.1";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "";  // SMTP username
$mail->Password = ""; // SMTP password*/

/* server set set */
//$mail->Host = "mail.siol.net;mail.siol.net";  // specify main and backup server
//$mail->SMTPAuth = false;     // turn on SMTP authentication
//$mail->Username = "";  // SMTP username
//$mail->Password = ""; // SMTP password

//$mail->From = "info@directsolution.cz";
//$mail->FromName = "Directsolution";
//echo $emailaddress;
//$mail->AddAddress($emailaddress, "Directsolution");                  // name is optional
//$mail->AddReplyTo("info@directsolution.cz", "Directsolution");

$mail->From = "info@svuom.cz";
$mail->FromName = "Sprava svuom.cz";
//echo $emailaddress;
$mail->AddAddress($emailaddress, "svuom.cz");                  // name is optional
$mail->AddReplyTo("info@svuom.cz", "Sprava svuom.cz");


$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("./".$attachment);         // add attachments
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subjekt;
$mail->Body    = $body;
$mail->AltBody = $altbody;

if(!$mail->Send()) {echo "<p>Email nebyl odeslán. Kontaktujte správce.</p>"; echo "<p>Mailer Error: " . $mail->ErrorInfo ."<p>"; exit; } else {echo"";}

}

// #######################
// funkce: prekodovani textu + odstraneni nebezpecnych znaku
// #######################

function prekodovani($name)
{
/* prekodovani */

$sada="áäčďéěëíňóöřšťúůüýžÁÄČĎÉĚËÍŇÓÖŘŠŤÚŮÜÝŽ `=~°,.´ˇ¨§";
$prekodovanasada = iconv('UTF-8', 'Windows-1250', $sada);

$prekodovanename = iconv('UTF-8', 'Windows-1250', $name);
$filename = StrTr ($prekodovanename, $prekodovanasada, "aacdeeeinoorstuuuyzAACDEEEINOORSTUUUYZ___________");

return $filename;

}

// #######################
// funkce: zpracovani pdf
// #######################

function pdfcopy($userfile,$pdfname,$upload)
{
// start pdf
// kde je userfile na serveru
$userfile_tmp_name = $_FILES['userfile']['tmp_name'];
//echo "<br>to je userfile_tmp_name: ".$userfile_tmp_name."<br>";
// puvodni nazev souboru
$userfile_name = $_FILES['userfile']['name'];
//echo "<br>to je userfile_name: ".$userfile_name."<br>";
// velikost souboru v bajtech
$userfile_size = $_FILES['userfile']['size'];
//echo "<br>to je userfile_size: ".$userfile_size."<br>";
// typ mime souboru napr image/gif
$userfile_type = $_FILES['userfile']['type'];
//echo "<br>to je $userfile_type: ".$userfile_type."<br>";
// jakakoliv zjistena chyba
$userfile_error = $_FILES['userfile']['error'];
// userfile_error zavedeno do PHP od verze 4.2.0 - jinak nefunguje
  if ($userfile_error > 0)
  {
    echo 'Problem: ';
    switch ($userfile_error)
    {
      case 1: echo 'Soubor přesáhl maximální velikost nahrání.'; break; exit;
      case 2: echo 'Soubor přesáhl maximální velikost souboru.'; break; exit;
      case 3: echo 'Soubor byl nahrán jen částečně.';  break; exit;
      case 4: echo 'Soubor nebyl nahrán.';  break;
    }
    exit;
  }

// zjisteni zdali typ mime je typ pdf 
if($userfile_type!='application/pdf') {echo"<div class='resultbad'>Soubor není typu pdf - soubor nelze vložit</div>"; exit; } 

$filename=prekodovani($name=$pdfname);

// definice uloziste obrazku
if(@!copy($userfile_tmp_name,$upload.$filename.".pdf"))
{
//echo"<div class='resultbad'>Soubor nebyl zkopírován</div>";
}
else
{
//echo"<div class='result'>Soubor pdf zkopirovan</div>";
}
// konec pdf
return $filename;
}

// #######################
// funkce: zpracovani obrazku - kontrola, vytvoreni nazvu, zkopirovani
// #######################

function piccopy($userfile2,$picname,$upload)
{
// kde je userfile na serveru
$userfile_tmp_name2 = $_FILES['userfile2']['tmp_name'];
//echo "<br>To je userfile_tmp_name: ".$userfile_tmp_name."<br>";
// puvodni nazev souboru
$userfile_name2 = $_FILES['userfile2']['name'];
//echo "<br>To je userfile name1: ".$userfile_name."<br>";
// velikost souboru v bajtech
$userfile_size2 = $_FILES['userfile2']['size'];
//echo "<br>To je userfile1: ".$userfile_size."<br>";
// typ mime souboru napr image/gif
$userfile_type2 = $_FILES['userfile2']['type'];
//echo "<br>To je userfile type1: ".$userfile_type."<br>";
// jakakoliv zjistena chyba
$userfile_error2 = $_FILES['userfile2']['error'];
// userfile_error zavedeno do PHP od verze 4.2.0 - jinak nefunguje
  if ($userfile_error2 > 0)
  {
    echo 'Problem: ';
    switch ($userfile_error2)
    {
      case 1:  echo 'Soubor přesáhl maximální velikost nahrání.'; break; exit;
      case 2:  echo 'Soubor přesáhl maximální velikost souboru.'; break; exit;
      case 3:  echo 'Soubor byl nahrán jen částečně.';  break; exit;
      case 4:  echo 'Soubor nebyl nahrán.';  break;
    }
  //  exit;
  }

// zjisteni parametru obrazku 
@$informace = getimagesize($userfile_tmp_name2);

// kontrola typu obrazku
if ($informace[2]=="1")
{$pripona = "gif";}
elseif ($informace[2]=="2")
{$pripona = "jpeg";}
elseif ($informace[2]=="3")
{$pripona = "png";}
else
{
echo"Neznamá přípona obrázku - obrázek nelze vložit";
exit;
}

$picfilename=prekodovani($name=$picname);

resize($userfile_tmp_name2=$userfile_tmp_name2,$upload=$upload,$picfilename=$picfilename,$newwidth=660,$newheight=660,$typpic='n',$informace=$informace);
resize($userfile_tmp_name2=$userfile_tmp_name2,$upload=$upload,$picfilename=$picfilename,$newwidth=25,$newheight=25,$typpic='s',$informace=$informace);

return $picfilename;
}

// #######################
// funkce: zmena velikosti obrazku + zkopirovani na disk 
// #######################

function resize($userfile_tmp_name2,$upload,$picfilename,$newwidth,$newheight,$typpic,$informace)
{
// definice uloziste a konecneho nazvu obrazku
$finalupload = $upload.$picfilename.$typpic.'.jpg';

// uprava zdrojoveho obrazku - velky obrazek
list($width, $height) = getimagesize($userfile_tmp_name2);
	
// puvodni kod: if($width > $height && $newheight < $height || $width == $height) - dne 11.5. kod upraven - vkladali se velke formaty
if($width > $height && $newheight < $height)
{
$newheight = $height / ($width / $newwidth);	 
}
else if ($width < $height && $newwidth < $width)
{
$newwidth = $width / ($height / $newheight);
}
else
{
$newwidth = $width;
$newheight = $height;
}
@$thumb = imagecreatetruecolor($newwidth, $newheight);
	
// $pripona = "gif" 
if ($informace[2]=="1") {
$source = imagecreatefromgif($userfile_tmp_name2);}
// $pripona = "jpeg"
elseif ($informace[2]=="2") {
$source = imagecreatefromjpeg($userfile_tmp_name2);}
// $pripona = "png"
elseif ($informace[2]=="3") {
$source = imagecreatefrompng($userfile_tmp_name2);}

@imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

if(@!imagejpeg($thumb, $finalupload, 75)) {
//echo"<span class='resultbad'>1 obrázek nebyl nahrán.</span>";
}
else {
//echo"<span class='result'>1 obrázek byl nahrán.</span>";
}
}




function uname($userid)
{
// ziskani user_name z  userid 
$query = "SELECT user_name FROM users WHERE userid='$userid'";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$user_name=$row[user_name];
return $user_name;
}


?>