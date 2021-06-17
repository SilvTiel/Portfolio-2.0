<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Sil van Tiel</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>

    <div>
        <div class="intro" >
            <div>
                <?php include("navigatie.html");?>
                <div class="head-tekst-mid">Portfolio</div>
            </div>
        </div>
        <div class="grid-main">
            <div class="grid-mid">
                <div class="head-over-mij">
                    <h1>Over mij</h1>
                    <p>Heeey hoi! Mijn naam is Sil van Tiel ik ben 18 jaar jong en kom uit een klein maar gezellig dorpje Erp. Vooraf gaande aan de opleiding HBO ICT, Media & Design op de Fontys te Eindhoven heb ik de Havo afgerond op het Zwijsen College te Veghel. Destijds had ik de opleiding gekozen N&T met als keuze daarbij informatica, daar begon ik met het maken van een kleine maar simpele website. Dit vond ik destijds leuk dus wou ik hier graagin verder gaan en kijken wat er meer mee kon. Dus toen ik begon aan de opleiding wist ik bijna meteen dat ik voor Media & Design wou gaan omdat dit mij het meeste aansprak van alles waar ik uit kon kiezen. En ik zie er graag naar uit om meer over mijn opleiding te leren en alles wat hierbij komt kijken. 
                    </p>
                    <div class="button" onclick="window.location.href='/over.php'">Meer over Mij</div>
                    <p></p>
                </div>
            </div>
            <div class="grid-right">
                <img src="afbeeldingen/SilAlpen2.png" class="imagine">
            </div>

        </div>
        <div class="leerdoelen-main" id="leeruitkomsten">
            <h1 class="ld-intro"> <a href="/leeruitkomsten.php">Leerdoelen</a></h1>
            <div class="leegte"></div>
            <div class="ldAfb">
                <div class="afb">
                <a href="/leerdoelen/communicatie.php"><img src="afbeeldingen/leerdoelen/Communication.png" class="img"></a>
                <div class="afbTekst">Communicatie</div>
                </div>
                <div class="afb">
                <a href="/leerdoelen/design.php"><img src="afbeeldingen/leerdoelen/Design.png" class="img"></a>
                <div class="afbTekst">Design</div>
                </div>
                <div class="afb">
                <a href="/leerdoelen/development.php"><img src="afbeeldingen/leerdoelen/Development.png" class="img"></a>
                <div class="afbTekst">Development</div>
                </div>
            </div>
            <div class="ldAfb">
                <div class="afb">
                <a href="/leerdoelen/media.php"><img src="afbeeldingen/leerdoelen/interactieveMedia.png" class="img"></a>
                <div class="afbTekst">Interactieve Media</div>
                </div>
                <div class="afb">
                <a href="/leerdoelen/research.php"><img src="afbeeldingen/leerdoelen/Research.png" class="img"></a>
                <div class="afbTekst">Research</div>
                </div>
                <div class="afb">
                <a href="/leerdoelen/identity.php"><img src="afbeeldingen/leerdoelen/ProfIdentity.png" class="img"></a>
                <div class="afbTekst">Profesional Identity</div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>