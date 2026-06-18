<?



//funkce menu

					

function menutop($lang)



{



echo"<ul>";



echo"<li><a href='/" . $lang . "/'>";

	if($lang=='cz') echo"úvod";		

	if($lang=='en') echo"home";		

echo"</a></li>";



echo"<li class='picli'><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=aktivity&lang=".$lang."'>";

	if($lang=='cz') echo"aktivity";	

	if($lang=='en') echo"activities";	

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=projektyvav&lang=".$lang."'>";

	if($lang=='cz') echo"VaV projekty";

	if($lang=='en') echo"R&D projects";

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=konference&lang=".$lang."'>";

	if($lang=='cz') echo"konference";

	if($lang=='en') echo"conferences";

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=publikace&lang=".$lang."'>";

	if($lang=='cz') echo"publikace / patenty";

	if($lang=='en') echo"result transfer";

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=kontakty&lang=".$lang."'>";

	if($lang=='cz') echo"kontakty";

	if($lang=='en') echo"contacts";

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=ospolecnosti&lang=".$lang."'>";

	if($lang=='cz') echo"o společnosti";

	if($lang=='en') echo"company profile";

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=odkazy&lang=".$lang."'>";

	if($lang=='cz') echo"odkazy";

	if($lang=='en') echo"links";

echo"</a>";



echo"<li><img src='images/li.png'></li>";



echo"<li><a href='index.php?zobraz=oceneni&lang=".$lang."'>";

	if($lang=='cz') echo"ocenění činnosti";

	if($lang=='en') echo"awards";

echo"</a>";



echo"</ul>";



}

			

?>