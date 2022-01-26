<div class="row nieuws">
    <?php
    error_reporting(1);

    $sql = "SELECT id, titel, updates, author FROM updates ORDER BY id";
    $resultset = mysqli_query($db, $sql);
    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>
        <div class="col-md nieuws">
            <div class="bericht">
                <div class="content">
                    <p><b>#<?php echo $record['id']; ?> &bull; <?php echo $record['titel']; ?></b></p>
                    <hr>
                    <?php echo $record['updates']; ?>
                    </p>
                    <hr>
                    <p class="nieuws-author"><b>Autheur: <?php echo $record['author']; ?></b></p>
                    <br>
                </div>
            </div>
        </div>

    <?php } ?>
</div>