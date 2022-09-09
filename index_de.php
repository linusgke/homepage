<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Startseite – elektronisch.dev</title>
    <meta name="viewport" content="initial-scale=1"/>
    <meta name="description" content="Yet another computer enthusiast"/>

    <meta property="og:url" content="https://elektronisch.dev/"/>
    <meta property="og:title" content="Startseite – elektronisch.dev"/>
    <meta property="og:description" content="Yet another computer enthusiast"/>
    <meta property="og:image" content="https://elektronisch.dev/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="de_DE"/>

    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@elektr0nisch"/>
    <meta property="twitter:creator" content="@elektr0nisch"/>

    <link rel="shortcut icon" type="image/webp" href="/assets/img/logo.webp"/>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<p><?php include_once 'language.php' ?></p>
<div id="fullsize" onclick="this.style.display='none';"></div>

<div style="text-align: center;">
    <img src="assets/img/logo.webp" width="200" height="200" alt="Logo" style="border-radius: 50%">
</div>
<h1>Ich bin Linus!</h1>
<p style="background-color: gray; border-radius: 10px; text-shadow: 0 0 5px rgba(0,0,0,1);">
    Linus Groschke, *2003, lebt in Augsburg. Dort besucht er aktuell die zwölfte Klasse der Freien Waldorfschule
    Augsburg. Er ist technisch sehr interessiert und engagiert sich als Hobby-Programmierer. Bei Fridays For Future und
    im Klimacamp Augsburg ist er politisch aktiv.
</p>
<h2>IT-Projekte</h2>

<ul>
    <li class="box" style="background-color: indianred;">
        <input type="checkbox" id="devicez">
        <label for="devicez">
            <b><a href="https://devicez.de" target="_blank">Devicez</a></b> <br/>
            <span>Free & open-source device management system</span> <br/>
            <small>
                seit Februar 2022<br/>
                <a>Mehr anzeigen</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/devicez.webp" width="256" height="256" alt="Devicez Logo"
                     style="float:left"><br/>
                <em>Devicez</em> ist mein neustes Team-Freizeitprojekt. Ziel ist es, ein freies und quelloffenes
                Geräteverwaltungssystem zu schaffen, das sowohl im Selbst- als auch im Cloud-Betrieb verwendet werden
                kann. Derzeit steht das Projekt noch ganz am Anfang. Da ich daran aktuell auch nicht mit Hochdruck
                arbeite, kann es auch noch ein wenig dauern, bis ich erste Ergebnisse erziele.<br/><br/>
                Um auf dem Laufenden zu bleiben, folge gerne unserer <a href="https://github.com/DevicezApp"
                                                                        target="_blank">GitHub-Organisation</a>.
            </p>
        </div>
    </li>
    <li class="box" style="background-color: dodgerblue;">
        <input type="checkbox" id="fwa">
        <label for="fwa">
            <b><a href="https://waldorf-augsburg.de" target="_blank">Freie Waldorfschule Augsburg</a></b> <br/>
            <span>Ehrenamtliches IT-Engagement an meiner Schule</span> <br/>
            <small>
                November 2020 - September 2022<br/>
                <a>Mehr anzeigen</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/fwa.webp" width="1400" height="319" style="height: 70%; width: 70%"
                     alt="Freie Waldorfschule Augsburg Logo"><br/>
                Im November 2020, inmitten der Corona-Pandemie, formierte sich an meiner Schule ein dreiköpfiges
                Schüler-Team, dass in den nächsten Monaten unglaubliche Arbeit leistete, um dann ab dem 1. Januar 2021
                stundenplanmäßigen Online-Unterricht anbieten zu können.<br/>

                Zu Beginn richteten wir uns einen provisorischen Arbeitsplatz im Keller der Schule ein, von dem aus die
                ersten planmäßigen Übertragungen der Hauptunterrichte (ersten zwei Schulstunden an einer Waldorfschule)
                gemanagt wurden.<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/it_keller_provisorisch.webp" width="2560" height="1440"
                     style="height: 40%; width: 40%; float: left; margin-right: 10px"
                     alt="Provisorische Computerinstallation im Keller der Schule">

                <img class="fullscreen" src="/assets/img/fwa/uebertragung_2020.webp" width="921" height="447"
                     style="height: 46%; width: 46%"
                     alt="Computerbildschirm mit Bildungsplattform und VoiceMeeter"><br/><br/>

                In den nächsten Wochen richteten wir uns einen vernünftigen Arbeitsplatz her und führten zur besseren
                Aufgabenverwaltung ein Ticket-System ein, dass sehr bald mit Anfragen und Hilferufen überfüllt war.<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/ticketsystem.webp" width="948" height="364"
                     style="height: 50%; width: 50%; float: left; margin-right: 10px"
                     alt="Übersichtsgraph der hohen Zahl an Tickets">

                <img class="fullscreen" src="/assets/img/fwa/it_keller_new.webp" width="2560" height="1440"
                     style="height: 40%; width: 40%"
                     alt="Frisch gestrichener neuer IT-Raum"><br/><br/>

                Über die Weihnachtsferien verbesserten wir Hard- und Software und ermöglichten so im neuen Jahr
                stundenplanmäßigen Online-Unterricht, in Distanz- sowie Hybridform. Eigenentwicklungen wie die
                Verwaltungssoftware <em>LessonControl</em> und der Einsatz von leistungsfähigen Streaming-Tools wie OBS
                und VoiceMeeter ermöglichte uns die Verwendung von mehreren Audio- und Videoquellen.<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/online_stundenplan.webp" width="1326" height="664"
                     style="height: 40%; width: 40%; float: left; margin-right: 10px"
                     alt="Online-Stundenplan der 11. Klasse (BBB = BigBlueButton, d.h. dieser Unterricht war online)">

                <img class="fullscreen" src="/assets/img/fwa/lessoncontrol.webp" width="4272" height="2848"
                     style="height: 40%; width: 40%"
                     alt="LessonControl Splashscreen">

                <img class="fullscreen" src="/assets/img/fwa/lessoncontrol_console.webp" width="966" height="898"
                     style="height: 40%; width: 40%"
                     alt="Konsole des LessonControl-Servers"><br/><br/>

                Durch die Schülerunterstützung und die Bereitschaft unserer Schule diese zuzulassen, konnten wir die
                heißen Phasen der Pandemie gut überstehen und so "normal" wie möglich machen. Wegen unseres Einsatzes in
                Pandemiezeiten etablierten wir uns auch in 2022 als <em>Technik-Schüler</em>, die sich bei
                Veranstaltungen um alles Technische kümmerten und insgesamt die Infrastruktur der Schule
                pflegten.<br/><br/>

                Für das kommende Schuljahr 2022/23 ist jedoch klar, dass wir uns vor allem auf unser anstehendes Abitur
                konzentrieren müssen und daher wahrscheinlich kaum noch Zeit finden werden, um technische Hilfe zu
                leisten. Die zweijährige Ära der drei <em>Technik-Schüler</em> endet!<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/verabschiedung_2022.webp" width="1800" height="1200"
                     style="height: 50%; width: 50%"
                     alt="Offizielle Verabschiedung der drei Technik-Schüler bei Mitarbeiteressen am 28.07.2022 (V.l.n.r. Geschäftsführer Alexander Mattheus, Sebastian Mach, Tim Zolleis, Linus Groschke)"/><br/><br/>

                Obwohl wir bereits offiziell verabschiedet wurden, werden wir auch dieses Jahr in den Sommerferien noch
                einiges zutun haben, um unser Erbe gut zu hinterlassen.
            </p>
        </div>
    </li>
    <li class="box" style="background-color: darkorange;">
        <input type="checkbox" id="cytooxien">
        <label for="cytooxien">
            <b><a href="https://cytooxien.de" target="_blank">Cytooxien</a></b> <br/>
            <span>Spieleentwickler bei großem deutschen Minecraft-Servernetzwerk</span> <br/>
            <small>
                Mai 2020 - September 2021<br/>
                <a>Mehr anzeigen</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/cytooxien.webp" width="300" height="300" alt="Animiertes Cytooxien Logo"
                     style="height: 50%; width: 50%; float: left; padding-right: 20px"><br/>
                Ich war von Mai 2020 bis September 2021 Spieleentwickler bei einem der größten deutschen
                Minecraft-Servernetzwerke namens <em>Cytooxien</em>. Auf Cytooxien spielten zu Hochzeiten bis zu 2000
                Spieler gleichzeitig in verschiedenen Spielmodi wie z. B. <em>Bedwars, Mario-Party oder
                    SkyBlock</em>.<br/><br/><br/><br/>

                Dort entwickelte ich vor allem die Spielschnittstelle (Game-API) names <em>Strider</em>, die als
                Grundimplementation einige generelle Aufgaben wie z. B. die Team-Einteilung übernahm. Neben diesen
                grundlegenden Aufgaben ermöglicht es Strider unter anderem mehrere voneinander unabhängige
                Spielrunden auf demselben Minecraft-Server zu betreiben, was eine erhebliche Ressourcenentlastung
                bedeutete, die Gesamtkapazität an gleichzeitigen Runden erhöhte und eine nie dagewesene
                Flexibilität ermöglichte.<br/><br/>

                Am 24. September 2021 feierte das Servernetzwerk sein 10-jähriges Bestehen. Wenige Wochen später verließ
                ich das Entwickler-Team, um mich mehr auf meine Schullaufbahn konzentrieren zu können.
            </p>
        </div>
    </li>
</ul>

<h2>Politisches Engagement</h2>

<ul>
    <li class="box" style="background-color: #549670;">
        <input type="checkbox" id="fff">
        <label for="fff">
            <b><a href="https://fff-augsburg.de" target="_blank">Fridays For Future Augsburg</a></b> <br/>
            <small>
                seit März 2022<br/>
                <a>Mehr anzeigen</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/fff.webp" width="889" height="889" alt="Fridays For Future Augsburg Logo"
                     style="height: 30%; width: 30%; border-radius: 52%; float: left; padding-right: 20px"><br/>
                Seit März 2022 engagiere ich mich in der Augsburger FridaysForFuture-Ortsgruppe. Dort helfe ich
                bei der Organisationen von Demonstrationen, bin selbst Ordner, oder helfe bei der
                Beschallungstechnik.<br/>
                Ich engagiere mich, da ich es für die letzte Möglichkeit halte, der Klimakrise die Aufmerksamkeit zu
                verschaffen, die sie braucht.<br/><br/>

                <b>Diese Krise betrifft uns alle! Mein Motto: Wir müssen JETZT handeln.</b>
            </p>
        </div>
    </li>
    <li class="box" style="background-color: #549670;">
        <input type="checkbox" id="klimacamp">
        <label for="klimacamp">
            <b><a href="https://www.klimacamp-augsburg.de" target="_blank">Klimacamp Augsburg</a></b> <br/>
            <small>
                seit Dezember 2021<br/>
                <a>Mehr anzeigen</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/klimacamp.webp" width="1080" height="1080" alt="Klimacamp Augsburg Logo"
                     style="height: 30%; width: 30%; border-radius: 52%; float: left; padding-right: 20px"><br/>
                Am 9. Dezember 2021 musste das Klimacamp Augsburg von seinem bisherigen Ort – dem Fischmarkt neben dem
                Perlachturm am Rathausplatz – zum Moritzplatz umziehen, da Steine vom Perlachturm zu stürzen drohten.
                Aus reiner Neugier entschied mich mitzuhelfen.<br/><br/><br/>

                Vor Ort fand ich eine aufgeschlossene und engagierte Community vor, die sich sehr um unsere Zukunft
                sorgte. Von dem Wunsch geleitet meinen Teil zu einer Verbesserung beitragen zu wollen, beschloss ich
                mich fortan öfter im Camp blicken zu lassen.<br/><br/>

                Das Klimacamp Augsburg ist im Sinne der Versammlungsfreiheit, die in unserem Grundgesetz verankert ist,
                eine Versammlung. Eine Versammlung, die bereits seit dem 1. Juli 2020 besteht. Damit ist das Camp die
                längste Versammlung überhaupt! Um den Versammlungsstatus aufrechterhalten zu können, müssen zu jeder
                Tages- und Nachtzeit mindestens zwei Personen im Camp anwesend sein. Genau das machen wir. Seit zwei
                Jahren!<br/><br/>

                Dort spreche ich mit Passanten und beantworte ihnen viele Fragen zur Klimakrise, zu Möglichkeiten diese
                effektiv zu bekämpfen und vielem mehr!<br/>
                Jede/r ist herzlich eingeladen, das Klimacamp zu besuchen!<br/>
                <b>Wir campen, bis ihr handelt.</b>
            </p>
        </div>
    </li>
</ul>

<h2>Kontakt</h2>
<div style="text-align: center;">
    <a class="badge" style="margin-right: 20px" href="javascript:decodeMail('Y29udGFjdEBlbGVrdHJvbmlzY2guZGV2')">
        <img src="https://img.shields.io/badge/✉ e--mail-gray.svg?style=for-the-badge"
             alt="E-Mail">
    </a>
    <a class="badge" style="margin-right: 20px" href="https://threema.id/WMU9B4KH">
        <img src="https://img.shields.io/badge/threema-darkblue.svg?logo=threema&style=for-the-badge"
             alt="Threema">
    </a>
    <a class="badge" style="margin-right: 20px" href="https://matrix.to/#/@elektr0nisch:matrix.org">
        <img src="https://img.shields.io/badge/matrix-black.svg?logo=matrix&style=for-the-badge"
             alt="Matrix">
    </a>
    <br>
    <a class="badge" style="margin-right: 20px" href="https://twitter.com/elektr0nisch">
        <img src="https://img.shields.io/badge/twitter-elektr0nisch-blue.svg?logo=twitter&style=for-the-badge"
             alt="Twitter">
    </a>
    <a class="badge" style="margin-right: 20px" href="https://instagram.com/elektr0nisch">
        <img src="https://img.shields.io/badge/instagram-elektr0nisch-pink.svg?logo=instagram&style=for-the-badge"
             alt="Instagram">
    </a>
</div>

<h2>Unterstütze mich</h2>
<div style="text-align: center;">
    <p>
        <a class="badge" style="margin-right: 20px" href="https://paypal.me/elektr0nisch">
            <img src="https://img.shields.io/badge/paypal-spenden-green.svg?logo=paypal&style=for-the-badge"
                 alt="PayPal"/>
        </a>
        <a class="badge" style="margin-right: 20px" href="https://buymeacoffee.com/elektr0nisch">
            <img src="https://img.shields.io/badge/☕ buymeacoffee-spenden-green.svg?style=for-the-badge"
                 alt="buy me a coffee"/>
        </a>
        <a class="badge" style="margin-right: 20px" href="https://ko-fi.com/elektr0nisch">
            <img src="https://img.shields.io/badge/☕ ko--fi-spenden-green.svg?style=for-the-badge"
                 alt="KoFi"/>
        </a>
    </p>
</div>

<div id="imageModal" class="modal">
    <span id="close">&times;</span>
    <img id="modalImage"/>
    <div id="caption"></div>
</div>

<footer>
    <p>&copy; elektronisch.dev - Alle Rechte vorbehalten.<br/>
        <small>
            <a href="https://github.com/elektr0nisch/homepage" target="_blank">Quellcode auf GitHub</a>&nbsp;&#8210;
            <a href="/legal">Impressum</a>
        </small>
    </p>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('imageModal');
        const images = document.querySelectorAll('.fullscreen');
        const modalImage = document.getElementById('modalImage');
        const captionText = document.getElementById('caption');

        images.forEach(img => {
            img.addEventListener('click', function () {
                modal.style.display = 'block';
                modalImage.src = img.src;
                captionText.innerHTML = this.alt;
            });
        });

        const closeSpan = document.getElementById('close');
        closeSpan.onclick = function () {
            modal.style.display = 'none';
        }

        document.onkeydown = function (e) {
            if (e.key === 'Escape') {
                modal.style.display = 'none';
            }
        };
    });

    function decodeMail(encoded) {
        const address = atob(encoded);
        window.location.href = 'mailto:' + address;
    }
</script>
</body>
</html>
