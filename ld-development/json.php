<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SvT Rock paper scissors</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/ld-development/json.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <?php include('../navigatie.html');?>
        <div class="tekst-intro">Gebruik van Json</div>
    </div>
    
    <div class="main">
        <div class="leerdoelTerug"><a href="/leeruitkomsten.php">< Terug naar Leeruitkomsten</a></div>
        <div class="intro">
            <h1>intro</h1>
            <p>Json is de afkorting van JavaScript Object Notation. Json wordt vooral gebruikt op data van de server naar een webpagina te versturen. Voorbeeld is dat je zo heel handig grote bestanden die hetzelfde zijn ingedeeld kan aflezen. Of dat je het weer op je website kan laten zien. Ikzelf ben gaan kijken hoe ik een card kan maken met persoonlijke gegevens van personen. en later hoe ik het weer kan laten zien op een webpagina.</p>
        </div>
        <div class="container">
            <div class="tekst left">
                <h1>Json Cards</h1>
                <p>Voor de Json cards ben ik eerst begonnen met het designen van een kaart die ik dan blijf gebruiken om de gegevens zichtbaar te laten worden in een mooie vorm. Daarna heb ik een Json bestand toegevoegd waar een aantal json gegevens instaan zoals: naam, leeftijd, en geslacht. Een voorbeeld van dat bestand heb ik hier in een pdf gezet: <a href="/bijlage/generatedjson.pdf" target="blank">Generated Json.</a></p>
                <p>Toen heb ik ervoor gezorgd dat ik de json file kon uitlezen. Doormiddel van fetch() heb ik het bestand kunnen inlezen en heb ik ervoor gezorgd doormiddel van functie en code dat hij een mooie kaart aanmaakt met de gegevens vanuit het Bestand.</p>
                <p><a href="https://github.com/SilvTiel/Json" target="blank">Link naar Github</a></p>
            </div>
            <div class="foto right">
                <img src="/afbeeldingen/development/json1.png">
            </div>
            <div class="foto left">
                <img src="/afbeeldingen/development/Json2.png">
            </div>
            <div class="tekst right">
                <h1>Weerlive API</h1>
                <p>Nadat het was gelukt om een locaal bestand uit te lezen ben ik gaan kijken naar een online bestand. Hierbij ben ik naar een weather API gaan kijken. Bij deze heb ik gebruik gemaakt van <a href="https://weerlive.nl/" target="blank">Weerlive</a>. Het verschil hierbij is dat dit een online bestand is die vanaf het internet afgelezen wordt en op een andere manier in elkaar zit. Op het begin had ik hier veel moeite mee. Dit omdat ik niet wist hij ik een bestand moest uitlezen wat uit arrays etc bestaat. Uiteindelijk is het gelukt en heb ik het op de website kunnen krijgen.
                </p>
                <p>
                    Op de website kon je ook Icons gebruiken om het weer aan te duiden. Door een kleine aanpassing in mijn code te doen kwam ik er zo uit en was het geen probleem om de Icons toe te voegen aan de website.Hier de <a href="https://weerlive.nl/api/json-data-10min.php?key=7964ce7459&locatie=Erp" target="blank">link</a> naar het bestand waar het de gegevens vandaan haalt.
                </p>
                <p><a href="https://github.com/SilvTiel/JsonWeer" target="blank">Link naar Github</a></p>
            </div>
            <!-- <div class="tekst left">
                <h1>verbetering</h1>
                <p></p>
            </div>
            <div class="foto right">
                <img src="/afbeeldingen/development/Json2.1.png">
            </div> -->
            <div class="tekst left">
            <h1>Wat heb ik geleerd?</h1>
                <p>Ik heb geleerd hoe ik om kan gaan met Json, hierbij heb ik geleerd hoe ik gebruik kan maken van fetch en de dingen die hierbij komen kijken, ook heb ik geleerd hoe ik een tekst kan toevoegen zonder dat ik zelf de tekst heb.</p>
            </div>
            <div class="tekst right">
            <h1>Wat kon beter?</h1>
                <p>Iets wat ik beter had kunnen doen is het verder uitwerken van de json weer, hierbij had ik een zoekbalk kunnen toevoegen zodat je zelfd de plaats kon intype ipv dat er al standaart een plaats wordt neergezet zoals bij deze Erp of Veghel.</p>
            </div>
            
        </div>
        <div class="leerdoelTerug"><a href="/ld-identity/zelfreflectie.php">Volgend Project ></a></div>
    </div>

</body>
</html>