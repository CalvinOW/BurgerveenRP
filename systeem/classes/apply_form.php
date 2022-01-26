<?php
error_reporting(0);

$sql = "SELECT id, job_titel, beroep, job_desc FROM jobs WHERE id ='" . $_GET['id'] . "'";
$resultset = mysqli_query($db, $sql);
while ($record = mysqli_fetch_assoc($resultset)) {
?>

    <div class="container jobs voorpagina">
        <div class="row">
            <div class="jobs-intro">
                <h3>BURGERVEEN <?php echo $record['beroep']; ?></h3><br>
                <p><?php echo $record['job_titel']; ?></p>
                <center>
                    <hr class="jobs">
                <form action="../../systeem/classes/send_application.php" style="width: 50%;" method="post">
                    <p>
                        <label for="Burgernaam">Burgernaam:</label>
                        <input class="form-control" type="text" name="Burgernaam" id="Burgernaam" required>
                    </p>
                    <p>
                        <label for="telefoonnummer">Burgerveen Telefoonnummer:</label>
                        <input class="form-control" type="phonenumber" name="telefoonnummer" id="telefoonnummer"required>
                    </p>
                    <p>
                        <label for="naam">Real life naam:</label>
                        <input class="form-control" type="text" name="naam" id="naam"required>
                    </p>
                    <p>
                        <label for="Discord">Discord:</label>
                        <input class="form-control" type="text" name="Discord" id="Discord"required>
                    </p>
                    <p>
                        <label for="Job">Job:</label>
                        <input class="form-control" type="text" name="Job" id="Job" value="<?php echo $record['job_titel']; ?>" readonly>
                    </p>
                    <p>
                        <label for="Beroep">Beroep:</label>
                        <input class="form-control" type="text" name="Beroep" id="Beroep" value="<?php echo $record['beroep']; ?>" readonly>
                    </p>
                    <p>
                        <label for="Waarom">Waarom:</label>
                        <textarea class="form-control" rows="4" cols="50" type="Waarom" name="Waarom" id="Waarom"required></textarea>
                    </p>
                    <p>
                        <label for="Motivatie">Motivatie:</label>
                        <textarea class="form-control" rows="4" cols="50" type="textarea" name="Motivatie" id="Motivatie"required></textarea>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Verstuur Sollicitatie">
                </form>
                </center>
            </div>
        </div>
    </div>


<?php } ?>