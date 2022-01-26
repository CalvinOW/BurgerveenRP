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
                    <a class="nav-link" href="index" style="font-size: 18px;"><span class="fa fa-home"></span> Voorpagina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nieuws" style="font-size: 18px;"><span class="fa fa-newspaper-o"></span> Nieuws</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="solliciteren" style="font-size: 18px; border-bottom: 1px solid !important;"><span class="fa fa-vcard-o"></span> Solliciteren</a>
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
    <div class="container jobs voorpagina">
        <div class="row">
            <div class="jobs-intro">
                <h3>BEDANKT</h3>
                <center>
                    <hr class="jobs">
                    <br><br>
                    Bedankt voor het opsturen van jouw sollicitatie!<br>
                    Wij zullen jouw zo spoedig mogelijk contacteren.
                </center>
            </div>
        </div>
    </div>
</body>
<footer>
    Website medemogelijk gemaakt door Calvin.
</footer>

</html>