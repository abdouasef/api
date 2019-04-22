<?php

$one = 'TEST';


echo $one;

?>

<h3 class="panel-title"><a href="/france/ligue-1/">France : Ligue 1</a></h3>
<tr data-matchid="2792539" class="">
    <td class="lm2 lm2_0" id="status_2792539"><span class="lm2_time">15:00</span>Terminé</td>
    <td class="lm3">
        <a href="/live-score/nantes-amiens.html" title="Détail du match : Nantes - Amiens SC"><span class="lm3_eq1">Nantes<span class="hidden-xs"><img src="/image/logo/club/16/nantes-logo889.png" width="16" height="16" alt="Nantes" data-src="/image/logo/club/16/nantes-logo889.png"></span></span><span class="lm3_score" id="score_2792539">3 - 2</span><span class="lm3_eq2"><span class="hidden-xs"><img src="/image/logo/club/16/amiens-sc-logo908.png" width="16" height="16" alt="Amiens SC" data-src="/image/logo/club/16/amiens-sc-logo908.png"></span>Amiens SC</span></a>
    </td>
    <td class="lm4">
        <a href="/live-score/nantes-amiens.html#pronostic" title="Pronostic : Nantes - Amiens SC" class="MEDLivescoreCheck"><span class="glyphicon glyphicon-check text-success" aria-hidden="true"></span></a>
        <a href="/statistique/amiens-contre-nantes.html" title="Statistiques : Nantes - Amiens SC"><span class="glyphicon glyphicon-stats text-primary" aria-hidden="true"></span></a>
        <a href="javascript:void(0);" title="Alerte BUT" id="alerte_but_2792539" class="text-muted jUpdateMatchsSelect"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a>
    </td>
</tr>

<p id="demo"></p>

<script>


var htmlString = document.getElementsByClassName('panel-title').innerHTML;
var panel_title = htmlString.replace(/(<([^>]+)>)/ig,"");
alert(panel_title);




var htmlString = document.getElementsByClassName('lm2_time')[0].innerHTML;
var lm2_time = htmlString.replace(/(<([^>]+)>)/ig,"");
alert(lm2_time);

var htmlString = document.getElementsByClassName('lm3_eq1')[0].innerHTML;
var lm3_eq1 = htmlString.replace(/(<([^>]+)>)/ig,"");
alert(lm3_eq1);

var htmlString = document.getElementsByClassName('lm3_score')[0].innerHTML;
var lm3_score = htmlString.replace(/(<([^>]+)>)/ig,"");
alert(lm3_score);



var htmlString = document.getElementsByClassName('lm3_eq2')[0].innerHTML;
var lm3_eq2 = htmlString.replace(/(<([^>]+)>)/ig,"");
alert(lm3_eq2);


document.getElementById("demo").innerHTML = JSON.stringify(htmlString, null, 4);


//document.getElementById("demo").innerHTML = panel_title+"<br>"+lm2_time + "-" +lm3_eq1 + "-" +lm3_score + "-" +lm3_eq2 + "<br>" ; 
</script>

