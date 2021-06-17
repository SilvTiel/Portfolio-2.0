<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SvT Rock paper scissors</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/ld-development/uitklappen.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <?php include('../navigatie.html');?>
        <div class="tekst-intro">Uitklappen van Divs</div>
    </div>
    
    <div class="main">
        <div class="leerdoelTerug"><a href="/leeruitkomsten.php">< Terug naar Leeruitkomsten</a></div>
        <div class="intro">
            <h1>intro</h1>
            <p>Ik ben bezig geweest met een kleine POC voor de leeruitkomsten pagina om een stukje tekst uit te kunnen klappen om dan hierover meer te kunnen lezen. En als je dan nog benieuwd was kon je op de knop drukken om vervolgens naar de pagina te gaan waar dan weer meer uitleg staat.</p>
        </div>
        <div class="container">
            <div class="tekst left">
                <h1>Uitleg</h1>
                <p>Op de website van mijn portfolio heb ik een leerdoelen pagina, via deze pagina wil ik dat je naar de verschillende onderdelen kan op mijn portfolio. Ik wilde deze pagina graag rustig houden met niet al te veel tekst als je op deze pagina komt. Toen kwam het idee om de tekstbalk uit te klappen wanneer men hierop drukt. Hier krijg je dan extra uitleg over het kopje en krijg je een knop om verder te gaan naar een volgende pagina. </p>
            </div>
            <div class="foto right">
                <img src="/afbeeldingen/development/uitklappen1.png">
            </div>
            <div class="foto left">
                <img src="/afbeeldingen/development/uitklappen2.2.png">
            </div>
            <div class="tekst right">
                <h1>50%</h1>
                <p>Toen ik hem eenmaal had had ik per kopje een apparte functie en id. hierbij was de bedoeling als je op de div drukte hij ging kijken of de div die onzichtbaar was zichtbaar of niet zichtbaar was. Als hij zichtbaar zou zijn zou hij verdwijnen en andersom. Over het algemeen was ik hier best blij mee maar zat ik wel met het probleem dat ik steeds een nieuwe functie erbij moest maken voor de kopjes die ik had. 
                </p>
            </div>
            <div class="tekst left">
                <h1>verbetering</h1>
                <p>Toen ben ik gaan kijken of ik het anders kon maken zodat ik niet steeds de functie over hoefde te nemen. In het begin kwam ik hier niet uit maar toen ik aan Frank om hulp gevraagd heb ging het wel beter. Zo zijn we eruit gekomen dat we via NextSibling de volgende div konden gebruiken. Dit zorgde er uiteindelijk voor dat ik 170 regels om heb kunnen schrijven na 10 regels. </p>
                <h1>Voorbeeld</h1>
                <p>Hier heb je een voorbeeld die ik had uitgewerkt van het uitklappen <a href="/leeruitkomsten.php">Zie hier.</a></p>
            </div>
            <div class="foto right">
                <img src="/afbeeldingen/development/uitklappen3.png">
            </div>
            <div class="tekst left">
            <h1>Wat heb ik geleerd?</h1>
                <p>Ik heb geleerd hoe ik de stijl van iets kan aanpassen doormiddel van gebruik van Javascript. Ook is het voor mij iets duidelijker geworden waarvoor ik een ID kan gebruiken.</p>
            </div>
            <div class="tekst right">
            <h1>Wat kon beter?</h1>
                <p>Iets wat ik zelf graag beter gezien had was dat ik niet elke functie opnieuw hoefde te schrijven om hem juist te krijgen. Ik wou graag dat ik maar een (of meerdere) functies kon gebruiken om op hetzelfde uit te komen inplaats van ze allemaal opnieuw op te schrijven. </p>
</div>
            
        </div>
        <div class="intro">
            <h1>Git</h1>
                <p>Omdat ik vergeten was vanaf begin gebruik te maken van GIT is deze GIT niet goed bijgehouden maar heb ik wel een eindversie ervan op GIT gezet: <a href="https://github.com/SilvTiel/uitklappen-van-Div" target="blank">Zie Hier.</a></p>
            </div>
            
        <div class="leerdoelTerug"><a href="/ld-development/json.php">Volgend Project ></a></div>
    </div>

</body>
</html>