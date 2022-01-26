<div class="row nieuws">
    <?php
    error_reporting(0);

    $sql = "SELECT id, titel, nieuws, author FROM nieuws ORDER BY id";
    $resultset = mysqli_query($db, $sql);
    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>
        <div class="col-md nieuws">
            <div class="bericht">
                <div class="content">
                    <p><b><?php echo $record['titel']; ?></b></p>
                    <hr>
                    <?php echo $record['nieuws']; ?>
                    </p>
                    <hr>
                    <p class="nieuws-author"><b>Autheur: <?php echo $record['author']; ?></b></p>
                    <br>
                    <a href="artikel?id=<?php echo $record['id']; ?>"><button class="btn btn-primary">Lees verder <i class="fa fa-angle-double-right" aria-hidden="true"></i></button></a>
                </div>
            </div>
        </div>

    <?php } ?>
</div>