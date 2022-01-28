<div class="jobs-intro">
            <h3>BURGERVEEN REGELS</h3>
            <center>
                <hr class="jobs">
            </center>
        </div>
    <?php
    error_reporting(0);

    $sql = "SELECT id, regel FROM rules ORDER BY id";
    $resultset = mysqli_query($db, $sql);
    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>
       <ul>
           <li><?php echo $record['regel']; ?></li>
       </ul>

    <?php } ?>
</div>
