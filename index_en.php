<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Homepage – elektronisch.dev</title>
    <meta name="viewport" content="initial-scale=1"/>
    <meta name="description" content="Yet another computer enthusiast"/>

    <meta property="og:url" content="https://elektronisch.dev/"/>
    <meta property="og:title" content="Startseite – elektronisch.dev"/>
    <meta property="og:description" content="Yet another computer enthusiast"/>
    <meta property="og:image" content="https://elektronisch.dev/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_US"/>

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
<h1>I'm Linus!</h1>
<p style="background-color: gray; border-radius: 10px; text-shadow: 0 0 5px rgba(0,0,0,1);">
    Linus Groschke, *2003, lives in Augsburg, Germany. He currently attends the twelfth grade at the Freie Waldorfschule
    Augsburg. He is very interested in technology and is passionate about programming. He is politically active for
    Fridays For Future and the Climate Camp Augsburg.
</p>
<h2>IT projects</h2>

<ul>
    <li class="box" style="background-color: indianred;">
        <input type="checkbox" id="devicez">
        <label for="devicez">
            <b><a href="https://devicez.de" target="_blank">Devicez</a></b> <br/>
            <span>Free & open-source device management system</span> <br/>
            <small>
                since February 2022<br/>
                <a>Show more</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/devicez.webp" width="256" height="256" alt="Devicez Logo"
                     style="float:left"><br/>
                <em>Devicez</em> is my latest team spare time project. The goal is to create a free and open source
                device management system that can be used in both standalone and cloud operation. Currently, the project
                is still in its infancy. Since I am not working on it with high priority at the moment, it might take
                a while until I get first results.<br/><br/><br/>
                To stay up to date, feel free to follow our <a href="https://github.com/DevicezApp"
                                                               target="_blank">GitHub organization</a>.
            </p>
        </div>
    </li>
    <li class="box" style="background-color: dodgerblue;">
        <input type="checkbox" id="fwa">
        <label for="fwa">
            <b><a href="https://waldorf-augsburg.de" target="_blank">Freie Waldorfschule Augsburg</a></b> <br/>
            <span>Volunteer IT work at my school</span> <br/>
            <small>
                since November 2020<br/>
                <a>Show more</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/fwa.webp" width="1400" height="319" style="height: 70%; width: 70%"
                     alt="Freie Waldorfschule Augsburg Logo"><br/>
                In November 2020, in the midst of the Corona pandemic, a team of three students formed at my school.
                Over the next few months, we did an incredible amount of work to be able to offer scheduled online
                courses starting January 1, 2021.<br/>

                At the beginning we set up a provisional workplace in the basement of the school, from which the
                first scheduled transmissions of the <em>"Hauptunterricht"</em> (first two lessons at a Waldorf school)
                were managed.<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/it_keller_provisorisch.webp" width="2560" height="1440"
                     style="height: 40%; width: 40%; float: left; margin-right: 10px"
                     alt="Temporary computer installation in the basement of the school">

                <img class="fullscreen" src="/assets/img/fwa/uebertragung_2020.webp" width="921" height="447"
                     style="height: 46%; width: 46%"
                     alt="Computer screen with educational platform and VoiceMeeter"><br/><br/>

                Over the next few weeks, we set up a decent workspace and introduced a ticket system for better task
                management, which was very soon overflowing with requests and demands for help.<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/ticketsystem.webp" width="948" height="364"
                     style="height: 50%; width: 50%; float: left; margin-right: 10px"
                     alt="Overview graph of the high number of tickets">

                <img class="fullscreen" src="/assets/img/fwa/it_keller_new.webp" width="2560" height="1440"
                     style="height: 40%; width: 40%"
                     alt="Freshly painted new IT room"><br/><br/>

                Over the Christmas vacations, we upgraded both hardware and software to enable scheduled online classes,
                in distance as well as hybrid forms, in the new year. Self-developments such as the
                <em>LessonControl</em> management software and the use of powerful streaming tools such as OBS and
                VoiceMeeter enabled us to use multiple audio and video sources.<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/online_stundenplan.webp" width="1326" height="664"
                     style="height: 40%; width: 40%; float: left; margin-right: 10px"
                     alt="Online schedule of the 11th class (BBB = BigBlueButton, i.e. this class was online).">

                <img class="fullscreen" src="/assets/img/fwa/lessoncontrol.webp" width="4272" height="2848"
                     style="height: 40%; width: 40%"
                     alt="LessonControl splashscreen">

                <img class="fullscreen" src="/assets/img/fwa/lessoncontrol_console.webp" width="966" height="898"
                     style="height: 40%; width: 40%"
                     alt="LessonControl server console"><br/><br/>

                Because of the student support and our school's willingness to allow it, we were able to get through the
                hot periods of the pandemic well and make it as "normal" as possible. Because of our dedication during
                pandemic times, we also established ourselves as <em>tech students</em> in 2022, taking care of
                everything technical during events and generally maintaining the school's infrastructure.<br/><br/>

                For the coming school year 2022/23, however, it is clear that we will have to focus primarily on our
                upcoming graduation and will therefore probably hardly find time to provide technical assistance. The
                two-year era of the three <em>tech students</em> is coming to an end!<br/><br/>

                <img class="fullscreen" src="/assets/img/fwa/verabschiedung_2022.webp" width="1800" height="1200"
                     style="height: 50%; width: 50%"
                     alt="Official farewell to the three tech students at the employee dinner on July 28, 2022 (from left to right: Managing Director Alexander Mattheus, Sebastian Mach, Tim Zolleis, Linus Groschke)"/><br/><br/>

                Although we have already officially said goodbye, we will still have a lot of work to do this year
                during the summer vacations in order to leave our legacy in good shape.
            </p>
        </div>
    </li>
    <li class="box" style="background-color: darkorange;">
        <input type="checkbox" id="cytooxien">
        <label for="cytooxien">
            <b><a href="https://cytooxien.de" target="_blank">Cytooxien</a></b> <br/>
            <span>Game developer at large German Minecraft server network</span> <br/>
            <small>
                May 2020 - September 2021<br/>
                <a>Show more</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/cytooxien.webp" width="300" height="300" alt="Animiertes Cytooxien Logo"
                     style="height: 50%; width: 50%; float: left; padding-right: 20px"><br/>
                I was a game developer at one of Germany's largest Minecraft server networks called <em>Cytooxien</em>
                from May 2020 to September 2021. At peak times, Cytooxien had up to 2000 players playing simultaneously
                in various game modes such as <em>Bedwars, Mario Party or SkyBlock</em>.<br/><br/><br/><br/>

                There, I mainly developed the game interface (Game API) called <em>Strider</em>, which as a basic
                implementation took over some general tasks such as team distribution. Besides these basic tasks, Strider
                allows, among other things, to run multiple independent game rounds on the same Minecraft server, which
                meant a significant resource relief, increased the total capacity of simultaneous rounds and allowed
                unprecedented flexibility.<br/><br/>

                On September 24, 2021, the server network celebrated its 10th anniversary. A few weeks later, I left the
                development team to concentrate more on my school career.
            </p>
        </div>
    </li>
</ul>

<h2>Political commitment</h2>

<ul>
    <li class="box" style="background-color: #549670;">
        <input type="checkbox" id="fff">
        <label for="fff">
            <b><a href="https://fff-augsburg.de" target="_blank">Fridays For Future Augsburg</a></b> <br/>
            <small>
                since March 2022<br/>
                <a>Show more</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/fff.webp" width="889" height="889" alt="Fridays For Future Augsburg Logo"
                     style="height: 30%; width: 30%; border-radius: 52%; float: left; padding-right: 20px"><br/>
                Since March 2022, I have been involved in the Augsburg FridaysForFuture local group. There I help with
                the organization of demonstrations, am a guard myself, or help with the sound system.<br/>
                I am involved because I believe it is the last chance to bring the climate crisis the attention it
                needs.<br/><br/>

                <b>This crisis affects us all! My motto: We must act NOW.</b>
            </p>
        </div>
    </li>
    <li class="box" style="background-color: #549670;">
        <input type="checkbox" id="klimacamp">
        <label for="klimacamp">
            <b><a href="https://www.klimacamp-augsburg.de" target="_blank">Climate Camp Augsburg</a></b> <br/>
            <small>
                since December 2021<br/>
                <a>Show more</a>
            </small>
        </label>
        <div class="abstract">
            <p>
                <img src="/assets/img/klimacamp.webp" width="1080" height="1080" alt="Klimacamp Augsburg Logo"
                     style="height: 30%; width: 30%; border-radius: 52%; float: left; padding-right: 20px"><br/>
                On December 9, 2021, the Climate Camp Augsburg had to move from its previous location - the fish market
                next to the Perlachturm at the Rathausplatz - to the Moritzplatz, because stones threatened to fall from
                the Perlachturm. Out of sheer curiosity, I decided to help out.<br/><br/><br/>

                On site, I found an open-minded and engaged community that cared deeply about our future.
                Guided by the desire to contribute my share to an improvement, I decided to visit the camp
                more often from now on.<br/><br/>

                The Klimacamp Augsburg is in the sense of the freedom of assembly, which is anchored in our Basic Law,
                an
                assembly. An assembly that is in existence since July 1, 2020. This makes the camp the longest
                assembly in history! In order to maintain assembly status, at least two people must be present at any
                time of the day. That is exactly what we are doing. For two years now!<br/><br/>

                There I talk to pedestrians and answer them many questions about the climate crisis, and ways to combat
                it effectively. Everyone is welcome to visit the camp!<br/>
                <b>We camp until you act.</b>
            </p>
        </div>
    </li>
</ul>

<h2>Contact</h2>
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

<h2>Support me</h2>
<div style="text-align: center;">
    <p>
        <a class="badge" style="margin-right: 20px" href="https://paypal.me/elektr0nisch">
            <img src="https://img.shields.io/badge/paypal-donate-green.svg?logo=paypal&style=for-the-badge"
                 alt="PayPal"/>
        </a>
        <a class="badge" style="margin-right: 20px" href="https://buymeacoffee.com/elektr0nisch">
            <img src="https://img.shields.io/badge/☕ buymeacoffee-donate-green.svg?style=for-the-badge"
                 alt="buy me a coffee"/>
        </a>
        <a class="badge" style="margin-right: 20px" href="https://ko-fi.com/elektr0nisch">
            <img src="https://img.shields.io/badge/☕ ko--fi-donate-green.svg?style=for-the-badge"
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
    <p>&copy; elektronisch.dev - All rights reserved.<br/>
        <small>
            <a href="https://github.com/elektr0nisch/homepage" target="_blank">Source on GitHub</a>&nbsp;&#8210;
            <a href="/legal">Legal notice</a>
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
