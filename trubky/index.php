<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SVÚOM - Výpočet predikce 6ivotnosti 68rov0ho zinkov0ho povlaku</title>

<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="topic.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id='site'>
	<?php include("tophdr.php"); ?>
    <h1>Výpočet predikce životnosti žárového zinkového povlaku</h1>
    <p>Pravděpodobnost vzniku koroze žárově zinkovaných trubek v daném rozvodu TV byla odvozena na základě výsledků šetření korozně poškozených rozvodů a ověřených modelů korozního chování trubek v různých 
    laboratorních i provozních podmínkách (teplota, chemické složení vody, přítomnost iontů mědi, vliv desinfekčních prostředků, struktura zinkového povlaku apod.). Pravděpodobnost vzniku koroze žárově zinkovaných 
    trubek v daném rozvodu TV lze vyjádřit jako součet pravděpodobnosti vzniku koroze na základě jednotlivých parametrů daného rozvodu, pro které byl vypracován jednoduchý software.</p>
    <p>Pk > 1 .... v tomto rozvodu TV lze použít žárově zinkované trubky;</p>
    <p>Pk &#732; -10 .... životnost žárově zinkovaných trubek bude v tomto rozvodu TV snížena;</p> 
    <p>Pk < -20 .... v tomto rozvodu nelze použít žárově zinkované trubky – k jejich prokorodování dojde po cca 2 – 3 letech provozu.</p>   
    
    <form id="form1" name="zntrubky" action="vypocet1.php" method="post">
     <h1>Vlasnosti vody</h1>
     <label for="phval">pH vody</label>
     <input name="phval" size="5" value="4.5" /><br /> 
     <label for="vodivost">Vodivost [&micro;S.cm<sup>-1</sup>]</label>
     <select name="vodivost">
       <option value="0">< 500</option>
       <option value="-2">< 1000 </option>       
       <option value="-4">< 1500</option>              
     </select><br />
     <label for="alkalita">Celková alkalita [mg/l (CaCO<sub>3</sub>) ]</label>
     <input name="alkalita" size="5" value="50" /><br /> 
     <label for="rozpustenelatky">Celkový obsah rozpuštěných látek [mg/l]</label>
     <input name="rozpustenelatky" size="5" value="50" /><br />      
     <label for="vapennatvrdost">Vápníková tvrdost (koncentrace Ca<sup>2+</sup>) [mg/l ]</label>
     <input name="vapennatvrdost" size="5" value="60" /><br /> 
     <label for="konccl">Koncentrace Cl<sup>&#8211;</sup> [mg/l]</label>
     <input name="konccl" size="5" value="10" /><br /> 
     <label for="koncno3">Koncentrace NO<sub>3</sub><sup>&#8211;</sup> [mg/l]</label>
     <input name="koncno3" size="5" value="10" /><br /> 
     <label for="koncso4">Koncentrace SO<sub>4</sub><sup>2&#8211;</sup> [mg/l]</label>
     <input name="koncso4" size="5" value="10" /><br /> 
     <label for="konchco3">Koncentrace HCO<sub>3</sub><sup>&#8211;</sup> [mg/l]</label>
     <input name="konchco3" size="5" value="10" /><br /> 
     <label for="desinfekcecl">Desinfekce chloroxidem ClO<sub>2</sub> [mg/l]</label>
     <select name="desinfekcecl">
       <option value="0">< 0,4</option>              
       <option value="-1">0,4 až 0,8</option>              
       <option value="-2">> 0,8</option>                                   
     </select><br />
     <label for="volnychlor">Volný chlór [mg/l]</label>
     <select name="volnychlor">
       <option value="0">< 0,05</option>              
       <option value="-2">0,10</option>              
       <option value="-4">0,25</option>                                   
     </select><br />
     <label for="koncentracecu2">Koncentrace Cu<sup>2+</sup> [mg/l]</label>
     <select name="koncentracecu2">
       <option value="1">0</option>              
       <option value="0">< 0,1</option>              
       <option value="-2">> 0,1</option>                                   
     </select><br />          
     <h1>Provozní parametry</h1>          
     <label for="rychlostproudeni">Rychlost proudění [m.s<sup>-1</sup>]</label>
     <select name="rychlostproudeni">
       <option value="1">proudící</option>              
       <option value="-1">stagnující</option>              
       <option value="-5">anaerobní</option>                                   
       <option value="-2">turbulentní</option>                                          
     </select><br />    
     <label for="teplota">Teplota [&deg;C]</label>    
     <input name="teplota" size="5" value="50" /><br />  
     <label for="vyskytkovu">Výskyt jiných kovů v rozvodu TV</label>
     <select name="vyskytkovu">
       <option value="-6">měď</option>              
       <option value="-4">bronz</option>              
       <option value="-1">nikl</option>                                   
       <option value="0">litina</option>  
       <option value="0">korozivzdorná ocel</option>                                                 
     </select><br />  
     <label for="koncentracecunapovrchu">Koncentrace Cu<sup>2+</sup> na povrchu trubky [mg/m<sup>2</sup>]</label>
     <select name="koncentracecunapovrchu">
       <option value="0">0</option>              
       <option value="-1">< 1</option>              
       <option value="-4">1 až 2</option>                                   
       <option value="-6">> 2</option>                                          
     </select><br />    
     <label for="usady">Výskyt úsad [g.m<sup>-2</sup>.d<sup>-1</sup>]</label>
     <select name="usady">
       <option value="0">< 1</option>              
       <option value="-1">1 až 2</option>              
       <option value="-2">> 2</option>                                                                         
     </select><br />    
     <label for="mic">Výskyt MIC</label>
     <select name="mic">
       <option value="0">bez výskytu</option>              
       <option value="-4">s výskytem</option>                                                                                    
     </select><br />    
     <h1>Materiál</h1>  
     <label for="tloustkazn">Tloušťka zinkového povlaku [&micro;m]</label>
     <select name="tloustkazn">
       <option value="-6">< 55</option>              
       <option value="0">> 55</option>                                                                                    
     </select><br />   
     <label for="tloustkanfaze">Tloušťka n fáze [&micro;m]</label>
     <select name="tloustkanfaze">
       <option value="-6">< 18</option>              
       <option value="0">> 18</option>                                                                                    
     </select><br />
     <label for="trhliny">Výskyt trhlin v povlaku</label>
     <select name="trhliny">
       <option value="-6">výskyt trhlin</option>              
       <option value="0">bez trhlin</option>   
     </select>   
     <label for="anomalie">Výskyt anomálií na povrchu</label>
     <select name="anomalie">
       <option value="-6">výskyt anomálií</option>              
       <option value="0">bez anomálií</option>                                                                                        
     </select><br /><br />  
     <div><input type="submit" name="vypocet" id="vypocet" value="Vypočítat" /></div>
     
    </form>
</div>
	
	
    





</body>
</html>