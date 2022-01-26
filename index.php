<html lang"nl">
<?php include_once("./systeem/config/config.php"); ?>
<?php include_once("./includes/menu/header.php"); ?>

<body>
    <script>
        $(document).ready(function() {
            $(".navbar-nav li a").click(function(event) {
                $(".navbar-collapse").collapse('show');
            });
        });
    </script>
    <div class="header">
        <a href="/"><img class="logo" src="../assets/images/logo_bv2.png"></a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"></a>
        <button id="toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index" style="font-size: 18px; border-bottom: 1px solid !important;"><span class="fa fa-home"></span> Voorpagina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nieuws" style="font-size: 18px;"><span class="fa fa-newspaper-o"></span> Nieuws</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="solliciteren" style="font-size: 18px;"><span class="fa fa-vcard-o"></span> Solliciteren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="updates" style="font-size: 18px;"><span class="fa fa-gear"></span> Updates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="regels" style="font-size: 18px;"><span class="fa fa-thumb-tack"></span> Regels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="appeal" style="font-size: 18px;"><span class="fa fa-home"></span> Appeal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report" style="font-size: 18px;"><span class="fa fa-flag"></span> Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="status" style="font-size: 18px;"><span class="fa fa-signal"></span> Status</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container nieuws voorpagina">
        <div class="nieuws-intro">
            <h3>BURGERVEEN NIEUWS</h3>
            <center>
                <hr class="nieuws">
            </center>
        </div>
        <?php include_once("./systeem/classes/export_nieuws.php"); ?>
    </div>
    <div class="container join voorpagina">
        <div class="row">
            <div class="col-8">
                <h3 style="color: rgb(91, 88, 255);">Hoe kan ik joinen?</h3>
                <p>
                <ul>
                    <li>Zorg dat je GTA Five op je computer geïnstalleerd hebt.</li>
                    <li>Ga naar <a href="https://fivem.net/">FiveM</a> en download de cliënt versie.</li>
                    <li>Selecteer met de cliëntversie je GTA 5 folder.</li>
                    <li>Zodra je dit geïnstalleerd hebt open je FiveM en zoek je op BurgerveenRP.</li>
                    <li>Voor dat je in de server kan moet je eerst burger zijn op onze discord.</li>
                </ul>
                </p>
                <p>
                    Je kunt ook joinen door op de volgende knop te klikken:<br><br>
                    <a href="fivem://connect/play.burgerveenrp.nl:30120"><button class="btn btn-primary">Join Burgerveen <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
                </p>
            </div>
            <div class="col-4"><iframe src="https://discord.com/widget?id=891411110018826301&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe></div>
            <div class="col-12">
            <br><br>
                <center>
                    <p>Als je dit niet kan vinden verbindt je via de bovense optie Direct Connect.</p>
                    <b><span style="color: rgb(91, 88, 255); font-size: 25px;">DIRECT CONNECT ADRES:</span></b><span style="font-size: 25px;"> GAME.BURGERVEENRP.NL</span><br><br><br><a href="fivem://connect/play.burgerveenrp.nl:30120"><button class="btn btn-primary">Join Burgerveen op FiveM <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
                </center>
                <br><br>
            </div>
        </div>
    </div>
    <div class="container jobs voorpagina">
        <div class="row">
        <div class="jobs-intro">
            <h3>BURGERVEEN JOBS</h3>
            <center>
                <hr class="jobs">
            </center>
        </div>
        <?php include_once("./systeem/classes/export_jobs_small.php"); ?>
        </div>
    </div>
</body>
<footer>
    Website medemogelijk gemaakt door Calvin.
</footer>

</html>