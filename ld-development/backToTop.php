<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SvT Back To Top</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/ld-development/backToTop.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <?php include('../navigatie.html');?>
        <div class="tekst-intro">Back To Top</div>
    </div>
    
    <div class="main">
    <div class="leerdoelTerug"><a href="/index.php#leeruitkomsten">< Terug naar Leeruitkomsten</a></div>
        <div class="intro">
            <h1>Intro</h1>
            <p>Bij back to top ben ik gaan kijken hoe ik een knop kon creëren die er pas komt te staan wanneer je eenmaal een deel naar beneden bent gescrolld.</p>
        </div>
        <div class="container">
            <div class="tekst left">
                <h1>Uitleg</h1>
                <p>Het is belangrijk dat wanneer je iets leest dat je ook op een handige manier terug naar boven kan komen. Dit heb ik gedaan doormiddel van een knop rechts onder toe te voegen die pas verschijnt wanneer je x aantal pixels naar beneneden bent gescorlld.</p>
                <p>Hierbij heb ik gebruik gemaakt van Javascirpt. Doormiddel van het scrollen in de body kan hij zien hoever je gescrolld bent bij mij komt op het moment de knop te staan wanneer wanneer hij 200px naar beneden heeft gescrolld. Wanneer je zelf weer naar boven scrollt en in die x aantal pixels terecht komt verdwijnt de knop weer.</p>
                <p><a href="https://github.com/SilvTiel/BackToTop" target="blank">Link naar Github</a></p>
            </div>
            <div class="foto right">
                <img src="/afbeeldingen/development/backtotop.png">
            </div>
            <div class="tekst left">
            <h1>Wat heb ik geleerd?</h1>
                <p>Ik heb geleerd dat je eerst heel de pagina moet inladen voordat hij pas het scirpt kan inladen. Nu had ik in de header het script gezet waardoor hij het ID niet op kon nemen. Waneer ik deze onderaan mijn body had geplaatst kon hij mijn ID wel opnemen en deed de code het wel. </p>
            </div>
            <div class="tekst right">
            <h1>Wat kon beter?</h1>
                <p> Deze opdracht was op het algemeen niet lastig en deze opdracht is niet verder uit te werken. Waardoor er niet echt een optie tot verbetering is hierbij.</p>
            </div>
            
        </div>
            
        <div class="leerdoelTerug"><a href="/ld-development/keybinding.php">Volgend Project ></a></div>
    </div>

</body>
</html>