<div class="row nieuws">
    <?php
    error_reporting(0);

    $sql = "SELECT id, job_titel, beroep, job_desc FROM jobs";
    $resultset = mysqli_query($db, $sql);
    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>
        <div class="col-md nieuws" style="max-width: 25%;">
            <div class="bericht">
                <div class="content">
                    <div class="thumbnail">
                        <center><img class="job image" style="max-width: 50%;" src="../../assets/images/<?php echo $record['beroep']; ?>.png"></center>
                    </div>
                    <p><b><?php echo $record['job_titel']; ?></b></p>
                    <hr>
                    <?php echo $record['job_desc']; ?>
                    </p>
                    <a href="apply?id=<?php echo $record['id']; ?>"><button class="btn btn-primary">Solliciteer <i class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>
                </div>
            </div>
        </div>

    <?php } ?>
</div>