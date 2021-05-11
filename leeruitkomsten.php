<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="leeruitkomsten.css">
    <link rel="stylesheet" href="/navigatie.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <script src="main.js" defer></script>
    <title>SvT Leerdoelen</title>
</head>
<body>
    
    <div class="header">
        <?php include("navigatie.html");?>
        <div class="tekst-intro">Leeruitkomsten</div>
    </div>
<!-- -->
    <div class="main">
        <div class="container">
            <!-- Links -->
            <div class="links">
                <!-- COMMUNICATION -->
                <div class="container-kop-tekst">COMMUNICATION</div>

                    <!-- (Groepsproject) -->
                    <div class="container-tekst" onclick="groepsproject()">
                        <div class="container-tekst-kop">Groepsproject</div>
                        <div class="container-tekst-tekst" id="groepsproject" onclick="groepsproject()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>

                    <!-- (Feedpuls) -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="feedpuls()">Feedpuls</div>
                        <div class="container-tekst-tekst" id="feedpuls" onclick="feedpuls()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>

                    <!-- (Q&A) -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="QenA()">Q&A</div>
                        <div class="container-tekst-tekst" id="QenA" onclick="QenA()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>
                <!-- DEVELOPMENT -->
                <div class="container-kop-tekst">DEVELOPMENT</div>
                    
                    <!-- (Rock Paper Scissors ) -->
                    <div class="container-tekst" onclick="RPS()">
                        <div class="container-tekst-kop">Steen papier schaar</div>
                        <div class="container-tekst-tekst" id="RPS" onclick="RPS()">
                            <p>Voor mijn eerste POC ben ik bezig geweest met het maken van het spel: Steen papier schaar. Bij deze POC ben ik voor het eerst officeel bezig gegaan met HTML, CSS en Javascript.<br>
                            <div class="button" onclick="window.location.href='/ld-development/dev-rps.php'">Bekijk project</div>    
                            </p>
                        </div>
                    </div>

                    <!-- (Uitklappen)-->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="uitklappen()">Uitklappen</div>
                        <div class="container-tekst-tekst" id="uitklappen" onclick="uitklappen()">
                            <p>Ik ben bezig geweest met een kleine POC voor de leeruitkomsten pagina om een stukje tekst uit te kunnen klappen om dan hierover meer te kunnen lezen.</p>
                            <div class="button" onclick="window.location.href='/ld-development/uitklappen.php'">bekijk project</div>
                        </div>
                    </div>

                    <!-- (Git)-->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="git()">Git</div>
                        <div class="container-tekst-tekst" id="git" onclick="git()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>

                <!-- PROFESSIONAL IDENTITY-->
                <div class="container-kop-tekst">PROFESSIONAL IDENTITY</div>
                    <!-- Hoe ben ik gegroeid?-->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="gegroeid()">Hoe ben ik gegroeid</div>
                        <div class="container-tekst-tekst" id="gegroeid" onclick="gegroeid()">
                            <p>Hierbij ben ik gaan kijken wat ik dit semester heb gedaan. Hierbij ga ik kijken naar alles wat ik heb gedaan en ga ik kijken naar de goede en slechte punten deze periode.</p>
                            <div class="button" onclick="window.location.href='/ld-identity/zelfreflectie.php'">bekijk project</div>
                        </div>
                    </div>

                    <!-- Media technieken -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="mediaTechnieken()">Media technieken</div>
                        <div class="container-tekst-tekst" id="mediaTechnieken" onclick="mediaTechnieken()">
                            <p>Nog neit verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>

                    <!-- branding -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="profBranding()">Branding</div>
                        <div class="container-tekst-tekst" id="profBranding" onclick="profBranding()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>
            </div>
            <!-- Rechts -->
            <div class="rechts">
                <!-- DESIGN -->
                <div class="container-kop-tekst">DESIGN</div>


                <!-- (ELLY website) -->
                    <div class="container-tekst" onclick="ELLY()">
                        <div class="container-tekst-kop">ELLY website</div>
                        <div class="container-tekst-tekst" id="ELLY" onclick="ELLY()">
                            <p>Voor ons project ben ik bezig geweest met het design van de website. Voor dit design ben ik gaan kijken naar de doelgroep die wij aanspreken en waarvoor de website hoort te dienen. Nadat mijn eerste versie af was heb ik om feedback gevraagd en heb ik deze toegepast op de website. <br>
                            <div class="button" onclick="window.location.href='/ld-design/ELLY.php'">Bekijk project</div>
                        </p>

                        </div>
                        </a>
                    </div>

                    <!-- Portfolio website -->
                    <div class="container-tekst" onclick="portfolioWebsite()">
                        <div class="container-tekst-kop">Portfolio website</div>
                        <div class="container-tekst-tekst" id="portfolioWebsite" onclick="portfolioWebsite()">
                            <p>Voor mijn portfolio ben ik eerst begonnen met een design. Hierbij heb ik een aantal keuzes gemaakt en hierbij om feedback gevraagd. <br>
                            <div class="button" onclick="window.location.href='/ld-design/Portfolio.php'">Bekijk project</div>
                        </p>

                        </div>
                        </a>
                    </div>

                    <!-- Goose Island -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="gooseIsland()">Goose Island</div>
                        <div class="container-tekst-tekst" id="gooseIsland" onclick="gooseIsland()">
                            <p>Bij branding ben ik gaan kijken wat Goose Island is en ben ik hierbij gaan kijken naar het bedrijf hierbij heb ik een bestand gemaakt en heb ik geprobeerd om het bestand om die van Goose Island te laten lijken naar mijn mening.</p>
                            <div class="button" onclick="window.location.href='/ld-design/GooseIsland.php'">bekijk project</div>
                        </div>
                    </div>

                <!-- INTERACTIEVE MEDIA -->
                <div class="container-kop-tekst">INTERACTIEVE MEDIA</div>

                <!-- ELLY website -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="ELLYMedia()">ELLY</div>
                        <div class="container-tekst-tekst" id="ELLYMedia" onclick="ELLYMedia()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>

                    <!-- Portfolio website -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="portfolioMedia()">Portfolio</div>
                        <div class="container-tekst-tekst" id="portfolioMedia" onclick="portfolioMedia()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>

                <!-- RESEARCH -->
                <div class="container-kop-tekst">RESEARCH</div>

                <!-- Branding-->
                <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="brandResearch()">Branding</div>
                        <div class="container-tekst-tekst" id="brandResearch" onclick="brandResearch()">
                            <p>Voor de focus branding ben ik onderzoek gaan doen naar de bier brouwerij Goose island. Hierbij heb ik gebruik van een merkonderzoek om een kort onderzoeks verslag te schrijven.</p>
                            <div class="button" onclick="window.location.href='/ld-research/researchGoose.php'">bekijk project</div>
                        </div>
                    </div>
                
                    <!-- Website -->
                    <div class="container-tekst">
                        <div class="container-tekst-kop" onclick="websiteResearch()">Portfolio</div>
                        <div class="container-tekst-tekst" id="websiteResearch" onclick="websiteResearch()">
                            <p>Nog niet verder uitgewerkt!</p>
                            <!-- <div class="button" onclick="window.location.href='/index.php'">bekijk project</div> -->
                        </div>
                    </div>
            </div>
        </div>


    </div>

</body>
</html>