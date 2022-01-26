<?php
$sql = "SELECT * FROM nieuws WHERE id='" . $_GET['id'] . "'";
$resultset = mysqli_query($db, $sql) or die("database error:" . mysqli_error($db));
while ($record = mysqli_fetch_assoc($resultset)) {
?>

    <p><b>
            <h3><?php echo $record['titel']; ?></h3>
        </b></p>
    <hr>
    <p style="font-size: 12px;"><?php echo $record['nieuws']; ?></p><br><br>
    <p style="font-size: 12px;"><b>Gepost door: <span class="nieuws-author"><?php echo $record['author']; ?></span><br>Op: <span class="nieuws-author"><?php echo $record['created_at']; ?></span></b></p>
<?php } ?>